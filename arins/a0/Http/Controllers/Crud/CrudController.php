<?php

namespace Arins\A0\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Arins\A0\Repositories\A0\A0RepositoryInterface;
use Arins\Facades\Response;

class CrudController extends Controller
{
//    use AuthenticatesUsers;

    protected $sViewRoot;
    protected $data;


    /**
     * Create a new controller instance.
     *
     * Method Name: Constructor
     * 
     * @return void
     */
    public function __construct(A0RepositoryInterface $parData)
    {
        //$this->middleware('auth.admin');
        //$this->middleware('is.admin');

        $psViewRoot = 'a0.crud';
        $this->sViewRoot = $psViewRoot;
        $this->data = $parData;
        
    }

    /**
     * Method Name: index
     * 
     * http method: GET
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->data->all();
        $viewModel = Response::viewModel($data);

        return view($this->sViewRoot.'.index',
        ['viewModel' => $viewModel]);
    }

    /**
     * Method Name: show
     * 
     * http method: GET
     * 
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$postData = $request->input('name');

        return view($this->sViewRoot.'.show');
    }

    /**
     * Method Name: create
     * 
     * http method: GET
     * 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carbon = new \Carbon\carbon();
        $tgl = $carbon->createFromFormat('Y-m-d', '2020-09-25')->toDateString();
        //dd($tgl);

        $viewModel = Response::viewModel(null, 'crud');

        return view($this->sViewRoot.'.create',
        ['viewModel' => $viewModel]);
    }

    /**
     * Method Name: edit
     * 
     * http method: GET
     * 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = ["id" => $id];
        $viewModel = Response::viewModel($data, 'crud');

        return view($this->sViewRoot.'.edit',
        ['viewModel' => $viewModel]);
    }

    /**
     * Method Name: delete
     * 
     * http method: GET
     * 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $data = ["id" => $id];
        $viewModel = Response::viewModel($data, 'crud');

        return view($this->sViewRoot.'.delete',
        ['viewModel' => $viewModel]);

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
    public function store(Request $request)
    {
        //

        $data1 = $request->all(); //format array
        $sTemp = $data1["email_verified_at"];
        $data1["email_verified_at"] = \Carbon\carbon::createFromFormat(config('a1.date.short'), $sTemp)->toDateString();

        $data2 = json_encode($data1); //format string json
        $data3 = (object)($data1); //format object
        $data4 = json_decode($data2, true); //format array
        $data = json_decode($data2, false); //format object


        $vm = \App\User::create($data1);

        return dd($data1);
        //return dd($data2);
        //return dd($data1["name"]);
        //return dd($data3->name);
        return dd($data4["name"]);
        return dd($data->name);
    }

    /**
     * Method Name: udate
     * 
     * http method: POST
     * 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        return 'Ini post update data Id: ' . $id . ' = ' . $request->input('alamat');
    }

    /**
     * Method Name: destroy
     * 
     * http method: POST
     * 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        return 'Ini post delete data Id: ' . $id . ' = ' . $request->input('deleteData');
    }
}
