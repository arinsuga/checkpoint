<?php

namespace Arins\Fo\Http\Controllers\Absen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Arins\Services\Locater\LocaterInterface;
use Illuminate\Support\Facades\Auth;

use Arins\Facades\Response;
use Arins\Facades\Filex;
use Arins\Facades\Formater;
use Arins\Facades\ConvertDate;
use Arins\Facades\Role;
use Arins\Fo\Repositories\Attend\AttendRepositoryInterface;
use Arins\Bo\Repositories\User\UserRepositoryInterface;
use Carbon\Carbon;

//TODO: Sementara saja, nanti pakai repository
use Arins\Fo\Models\Attend;
use App\User;

class AbsenController extends Controller
{
    protected $sViewRoot;
    protected $data, $dataUsers;
    protected $oLocater;
    protected $ip;
    protected $baseURL, $latlng, $key;
    protected $viewModel;
    protected $uploadDirectory;


    /**
     * Create a new controller instance.
     *
     * Method Name: Constructor
     * 
     * @return void
     */
    public function __construct($psViewRoot = 'fo.absen',
    AttendRepositoryInterface $parData,
    UserRepositoryInterface $parDataUsers,
    LocaterInterface $poLocater)
    {
        $this->middleware('auth');
        $this->middleware('check.role:dnb-super,hrd-admin,dnb-admin')
        ->only('checkHistoryAdmin');
		$this->uploadDirectory = 'checkpoint';
        $this->sViewRoot = $psViewRoot;
        $this->data = $parData;
        $this->dataUsers = $parDataUsers;
        $this->oLocater = $poLocater;
        
        $this->middleware('auth');

        //#HCD: Set NULL for production
        $this->ip = '103.119.144.11'; //BALI Fiber ( for testing purpose )
        $this->ip = null; //Production

        $this->baseURL = 'https://maps.googleapis.com/maps/api/geocode/json?';
        $this->latlng = null;
        $this->key = '&key=AIzaSyA0J63CD7v8chu4nfVCdMImoC0QUgWKyro';

    }

    protected function getFullURL($latitude, $longitude)
    {
        $this->latlng = 'latlng=' . $latitude . ',' . $longitude;

        return $fullURL = $this->baseURL . $this->latlng . $this->key;
    } //end method

    protected function setCity($parData)
    {
        $data = $parData;
        $cityLevel1 = null;
        $cityLevel2 = null;
        $nCount = 0;

        foreach ($data->results[0]->address_components as $key => $component) {

            if ($nCount >= 2)
            {
                break;
            } //end if

            foreach ($component->types as $item) {

                if ($nCount >= 2)
                {
                    break;
                } //end if

                //City Level 1
                if ($item == 'administrative_area_level_1')
                {
                    $cityLevel1 = $component->short_name;
                    $nCount++;
                } //end if

                //City Level 2
                if ($item == 'administrative_area_level_2')
                {
                    $cityLevel2 = $component->short_name;
                    $nCount++;
                } //end if

            } //end loop

        } //end loop

        return $cityLevel2;
    }

    protected function setAddress($parData)
    {
        $data = $parData;
        return $data->results[0]->formatted_address;
    }


    public function show($id)
    {

        $attend = $this->data->find($id);

        $data = [

            'attend' => $attend,
            'user' => $attend->user,

        ];

        $viewModel = Response::viewModel($data);

        return view($this->sViewRoot.'.show',
        ['viewModel' => $viewModel]);

    }
    
    //Check
    protected function check()
    {
        if (Role::deny(Auth::user()->roles, 'hrd-admin')) {

            return redirect()->route('absen.history.admin');

        } //end if
        
        $user = Auth::user();
        $date = Formater::date(now());
        $dateIso = ConvertDate::strDateToDate($date);

        $attend = $this->data->getOutstandingCheckoutByUserId($user->id);

        if (!$attend) {
            $attend = $this->data->getAttendancesByUserIdAndDate($user->id, $dateIso);
        } //end if
        
        
        $action = 'absen.checkin.post';
        $actionButton = 'Checkin';
        
        $data = null;
        $data = [
            'action' => $action,
            'action_button' => $actionButton,
            'user' => [
                        'id' => $user->id,
                        'name' => $user->name,
                        'email' => $user->email,
                        'dept' => $user->dept,
                        'attend_id' => null,

                        'checkin_time' => null,
                        'checkin_city' => null,
                        'checkin_address' => null,
                        'checkin_image' => null,
                        'checkin_title' => null,
                        'checkin_subtitle' => null,
                        'checkin_description' => null,

                        'checkout_time' => null,
                        'checkout_city' => null,
                        'checkout_address' => null,
                        'checkout_image' => null,
                        'checkout_title' => null,
                        'checkout_subtitle' => null,
                        'checkout_description' => null,
                    ],
            'date' => null
        ];
        // if ($attend != null)
        if (count($attend) >= 1) {
            $attends = $attend;
            $attend = null;
            foreach ($attends as $item) {
                if ( ($item->checkin_time) && (!$item->checkout_time) ) {
                    
                    $action = 'absen.checkout.post';
                    $actionButton = 'Checkout';
                    $attend = $item;
                    break;

                } //end if
            } //end loop

            if ($attend)
            {
                $data = [
                    'action' => $action,
                    'action_button' => $actionButton,
                    'user' => [
                                'id' => $user->id,
                                'name' => $user->name,
                                'email' => $user->email,
                                'dept' => $user->dept,
                                'attend_id' => $attend->id,
                                
                                'checkin_time' => Formater::time($attend->checkin_time),
                                'checkin_city' => $attend->checkin_city,
                                'checkin_address' => $attend->checkin_address,
                                'checkin_image' => $attend->checkin_image,
                                'checkin_title' => $attend->checkin_title,
                                'checkin_subtitle' => $attend->checkin_subtitle,
                                'checkin_description' => $attend->checkin_description,

                                'checkout_time' => Formater::time($attend->checkout_time),
                                'checkout_city' => $attend->checkout_city,
                                'checkout_address' => $attend->checkout_address,
                                'checkout_image' => $attend->checkout_image,
                                'checkout_title' => $attend->checkout_title,
                                'checkout_subtitle' => $attend->checkout_subtitle,
                                'checkout_description' => $attend->checkout_description,
                            ],
                    'date' => $date
                ];
            } //end if

        } //end if

        $viewModel = Response::viewModel($data);

        return view($this->sViewRoot.'.check',
        ['viewModel' => $viewModel]);

    }

    protected function history($userId=null, $checkpointDate1=null, $checkpointDate2=null)
    {
        $data = null;

        $user = User::find($userId);
        $data['user'] = [
            'name' => $user->name,
            'dept' => $user->dept
        ];

        $attends = $this->data->getAttendancesCustomFilter($userId, $checkpointDate1, $checkpointDate2);
        $attend_list = $attends->sortBy('attend_dt');
        $data['attend_list'] = [];
        foreach ($attend_list as $key => $value) {

            if ($value->user_id == $userId) {

                $time_elapse1 = $value->checkin_time->diffInHours($value->checkout_time);
                $time_elapse2 = $value->checkin_time->diff($value->checkout_time)->format('%I:%S');
                $data['attend_list'][$key] = [
                    'id' => $value->id,
                    'user_id' => $value->user->id,
                    'name' => $value->user->name,
                    'attend_dt' => Formater::dateMonth($value->attend_dt),
                    'checkin_time' => 'Tanggal '. Formater::date($value->checkin_time) . ' Jam ' . Formater::time($value->checkin_time),
                    'checkin_address' => $value->checkin_address,
                    'checkin_description' => $value->checkin_description,
                    'checkout_time' => 'Tanggal '. Formater::date($value->checkout_time) . ' Jam ' . Formater::time($value->checkout_time),
                    'checkout_address' => $value->checkout_address,
                    'checkout_description' => $value->checkout_description,
                    'time_elapse' => $time_elapse1 . ':' . $time_elapse2,
    
    
                ];
    
            } //end if

        } //end loop

        $this->viewModel = Response::viewModel($data);
    }

    //checkHistory
    public function checkHistory()
    {
        return view($this->sViewRoot.'.check-history');
    }

    //checkHistory
    public function checkHistoryAdmin()
    {
        return view($this->sViewRoot.'.check-history', [
            'admin' => true,
            'users' => $this->dataUsers->dnb()
        ]);
    }

    //checkHistoryPost
    public function checkHistoryPost(Request $request)
    {
        $user = Auth::user();
        $selectedUserId = $request->input('userid');
        $startdt = $request->input('startdt');
        $enddt = $request->input('enddt');
        $historyMedia = $request->input('history_media');

        $userId = $user->id;
        if (isset($selectedUserId)) {
            $userId = $selectedUserId;
        } //end if

        $resultView = null;
        if ($historyMedia == 'view') {
            $resultView = 'check-history-view';
        } //end if

        if ($historyMedia == 'pdf') {
            $resultView = 'check-history-pdf';
        } //end if

        $startDateIso = ConvertDate::strDateToDate($startdt);
        $endDateIso = ConvertDate::strDateToDate($enddt);
        if (isset($endDateIso)) {

            $endDateIso = Carbon::create($endDateIso->year, $endDateIso->month, $endDateIso->day, 25, 0, 0);

        } //end if

        // $tesData = [
        //     '$startDateIso' =>[
        //     '$startDateIso->year' => $startDateIso->year,
        //     '$startDateIso->month' => $startDateIso->month,
        //     '$startDateIso->day' => $startDateIso->day],
        //     '$endDateIso' =>[
        //         '$endDateIso->year' => $endDateIso->year,
        //         '$endDateIso->month' => $endDateIso->month,
        //         '$endDateIso->day' => $endDateIso->day],
        // ];
        // return dd($tesData);

        // $this->history($user->id, $startDateIso, $endDateIso);
        $this->history($userId, $startDateIso, $endDateIso);

        if (isset($selectedUserId)) {
            return view($this->sViewRoot.'.'.$resultView,
                ['admin' => true,
                'viewModel' => $this->viewModel
            ]);
        } //end if

        return view($this->sViewRoot.'.'.$resultView,
        ['viewModel' => $this->viewModel]);
    }

    /**
     * Method Name: checkHistory
     * 
     * http method: GET
     * 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkHistoryPdf()
    {
        $user = Auth::user();

        $date = Formater::date(now());
        $dateIso = ConvertDate::strDateToDate($date);

        $this->history($user->id, $dateIso);

        return view($this->sViewRoot.'.check-history-pdf',
        ['viewModel' => $this->viewModel]);
    }

    /**
     * Method Name: store
     * 
     * http method: POST
     * 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkin(Request $request)
    {
        $authUser = Auth::user();
        $attend = new Attend();
        
        $latitude = $request->input('latitude');
        $longitude = $request->input('longitude');
        $upload = $request->file('upload'); //upload file (image/document) ==> if included
        $imageTemp = $request->input('imageTemp'); //temporary file uploaded

        //validasi upload foto mandatory
        if (!isset($upload)) {

            return redirect('/')->with('status-failed', 'CHECKIN GAGAL - Foto harus dilampirkan')
                                ->with('checkin_description', $request->input('checkin_description'));
            
        } //end if


        $host = $this->getFullURL($latitude, $longitude);
        $data = $this->oLocater->locate($host);

        // $data = $parData;
        // $city1 = $data->results[0]->address_components[2]->short_name;
        // $city2 = $data->results[0]->address_components[3]->short_name;
        //return dd($data->results[0]->address_components);

        //convert to JSON
        if ($data) {

            //create temporary uploaded image
            $uploadTemp = Filex::uploadTemp($upload, $imageTemp, null, 'checkin');
            $request->session()->flash('imageTemp', $uploadTemp);

            //copy temporary uploaded image to real path
            $checkin_image = Filex::uploadOrCopyAndRemove('', $uploadTemp, $this->uploadDirectory, $upload, 'public', false, 'checkin');

            $attend->user_id = $authUser->id;
            $attend->attend_dt = now();
            $attend->checkin_time = now();
            $attend->checkin_city = $this->setCity($data);
            $attend->checkin_address = $this->setAddress($data);
            $attend->checkin_latitude = $latitude;
            $attend->checkin_longitude = $longitude;
            $attend->checkin_ip = null;
            $attend->checkin_metadata = json_encode($data);
            $attend->checkin_image = $checkin_image;
            $attend->checkin_title = $request->input('checkin_title');
            $attend->checkin_subtitle = $request->input('checkin_subtitle');
            $attend->checkin_description = $request->input('checkin_description');

            $attend->save();

            $response = [
                'message' => 'data absensi tersimpan',
                'result' => $data,
                'metadata' => json_encode($data)
            ];
    
            return redirect('/')->with('status', 'data absensi tersimpan');
    
        } //end if

        $response = [
            'message' => 'data absensi tersimpan',
            'result' => $data,
            'metadata' => json_encode($data)
        ];

        return redirect('/')->with('status', 'data absensi tersimpan');
    }

    /**
     * Method Name: store
     * 
     * http method: POST
     * 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkout(Request $request)
    {

        $attend = Attend::find($request->input('attend_id'));


        if ($attend)
        {

            $latitude = $request->input('latitude');
            $longitude = $request->input('longitude');
            $upload = $request->file('upload'); //upload file (image/document) ==> if included
            $imageTemp = $request->input('imageTemp'); //temporary file uploaded


            //validasi upload foto mandatory
            if (!isset($upload)) {

                return redirect('/')->with('status-failed', 'CHECKOUT GAGAL - Foto harus dilampirkan')
                                     ->with('checkout_description', $request->input('checkout_description'));
                
            } //end if

            $host = $this->getFullURL($latitude, $longitude);
            $data = $this->oLocater->locate($host);
            if ($data)
            {

                //create temporary uploaded image
                $uploadTemp = Filex::uploadTemp($upload, $imageTemp, null, 'checkin');
                $request->session()->flash('imageTemp', $uploadTemp);

                //copy temporary uploaded image to real path
                $checkout_image = Filex::uploadOrCopyAndRemove('', $uploadTemp, $this->uploadDirectory, $upload, 'public', false, 'checkout');
                
                $attend->checkout_time = now();
                $attend->checkout_city = $this->setCity($data);
                $attend->checkout_address = $this->setAddress($data);
                $attend->checkout_latitude = $latitude;
                $attend->checkout_longitude = $longitude;
                $attend->checkout_ip = null;
                $attend->checkout_metadata = json_encode($data);
                $attend->checkout_image = $checkout_image;
                $attend->checkout_title = $request->input('checkout_title');
                $attend->checkout_subtitle = $request->input('checkout_subtitle');
                $attend->checkout_description = $request->input('checkout_description');

                $attend->save();

            } //end if

        } //end if

        return redirect('/')->with('status', 'data absensi tersimpan');
    } //end method

} //end method
