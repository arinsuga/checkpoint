<?php

namespace Arins\Bo\Http\Controllers\UserAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Arins\Bo\Repositories\UserAdmin\UserAdminRepositoryInterface;
//use Arins\Bo\Repositories\BaseRepositoryInterface;
use Arins\Facades\Response;

class UserController extends Controller
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
    public function __construct(UserAdminRepositoryInterface $parData)
    {
        $this->middleware('auth.admin');
        $this->middleware('is.admin');

        $psViewRoot = 'bo.UserAdmin';
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

        //return dd($viewModel);

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


        return view($this->sViewRoot.'.create');
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

        return view($this->sViewRoot.'.edit');
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

        return view($this->sViewRoot.'.delete');
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

        return 'Ini Post Store: '. $request->input('IniRequestNama');
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
    public function destroy($id)
    {
        //
    }
}
