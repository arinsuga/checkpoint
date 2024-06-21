<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Faker\Generator as Faker;

$roleAdm = env('ADMIN_ROLE_CODE');
$rolePost = env('POST_ROLE_CODE');
$roleRpt = env('RPT_ROLE_CODE');

use GuzzleHttp\Client;
Route::get('/ddgz', function() {

    $baseURL = 'https://maps.googleapis.com/maps/api/geocode/json?';
    $latlng = 'latlng=-6.2690009,106.8060503';
    $key = '&key=AIzaSyD5EFW-MruZ6EUSZLU1Ro3TVkUoPPGD0O4';
    $fullURL = $baseURL . $latlng . $key;

    //return dd($fullURL);

    $fullURL = 'https://api.github.com/repos/guzzle/guzzle';
    $client = new Client();
    $response = $client->request('GET', $fullURL);

    // $result = [
    //     'status' => $response->getStatusCode(),
    //     'header' => $response->getHeaderLine('content-type'),
    //     'body'   => $response->getBody()->getContents()
    // ];

    $result = json_decode($response->getBody()->getContents());

    return dd($result);

    return $result;


    return 'Ini Guzzle';

});

Route::get('/dd', function () {
    $roleAdm = env('ADMIN_ROLE_CODE');

    $data = new \App\User();

    $coba = [
        "id" => 1,
        "nama" => "budi"
    ];
    $coba2 = json_encode($coba);
    $coba2 = json_decode($coba2, FALSE);

    $coba = $data->all();
    $coba2 = $coba[0];

    return dd($coba2['name']);

    return dd($data->getFillable());

    return $roleAdm;
});

Route::get('/ddabsen', function () {

    $authUser = Auth::user();
    $user = new \App\user();
    $data = new \Arins\Models\Fo\Attend();

    return dd($data->find(5)->metadata);
    return dd($authUser);
    return dd($user->find(5)->attends->first());
    return dd($data->first());

    $coba = [
        "id" => 1,
        "nama" => "budi"
    ];
    $coba2 = json_encode($coba);
    $coba2 = json_decode($coba2, FALSE);

    $coba = $data->all();
    $coba2 = $coba[0];

    return dd($coba2['name']);

    return dd($data->getFillable());

    return $roleAdm;
});

Route::get('/ddabsen2', function () {

    $coba = new geoPlugin();
    return dd($coba->locate());


	//the geoPlugin server
	$host = 'http://www.geoplugin.net/php.gp?ip={IP}&base_currency={CURRENCY}&lang={LANG}';
	//the default base currency
	$currency = 'USD';
	//the default language
	$lang = 'en';
	//the default ip
    $ip = '202.77.104.173'; //null; LINK Net
    $ip = '103.119.144.11'; //null; BALI Fiber
    

    //update host data
    $host = str_replace( '{IP}', $ip, $host );
    $host = str_replace( '{CURRENCY}', $currency, $host );
    $host = str_replace( '{LANG}', $lang, $host );

    //initiate the geoPlugin vars
    $response = null;
    $data = array();
    $city = null;
	$region = null;
	$regionCode = null;
	$regionName = null;
	$dmaCode = null;
	$countryCode = null;
	$countryName = null;
	$inEU = null;
	$euVATrate = false;
	$continentCode = null;
	$continentName = null;
	$latitude = null;
	$longitude = null;
	$locationAccuracyRadius = null;
	$timezone = null;
	$currencyCode = null;
	$currencySymbol = null;
    $currencyConverter = null;
    
    if ( function_exists('curl_init') ) {
						
        //use cURL to fetch data
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $host);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'geoPlugin PHP Class v1.1');
        $response = curl_exec($ch);
        curl_close ($ch);
        
    } else if ( ini_get('allow_url_fopen') ) {
        
        //fall back to fopen()
        $response = file_get_contents($host, 'r');
        
    } else {

        trigger_error ('geoPlugin class Error: Cannot retrieve data. Either compile PHP with cURL support or enable allow_url_fopen in php.ini ', E_USER_ERROR);
        return;
    
    }

    //convert to JSON
    if ($response) {
        $data = unserialize($response);
    } //end if

    //return $response;
    return $data;

});

use Arins\Facades\Response;
Route::get('/dd/response', function () {

    $data = ['id' => 1, 'username' => 'joko'];

    return dd(Response::viewModel($data));

    return $roleAdm;
});

use Arins\Facades\Formater;
use Arins\Facades\ConvertDate as Convert;
Route::get('/dd/formater', function () {

    //$initDate = new DateTime;
    //$hh = DateTime::createFromFormat('d M Y', '17 Maret 2019');
    //return (dd($hh));
    //return (dd($hh::getLastErrors()));

    //$dataInit = now();
    //return dd($dataFormated);
    //$dataInit = \Carbon\Carbon::createFromIsoFormat('LLLL', 'Monday 3 March 2019 16:28', null, 'fr');
    //$dataInit = \Carbon\Carbon::createFromIsoFormat('LLL', '17 March 2019 [pukul] 22.15', null, 'id');
    //$strDateTime = '17 March 2019';
    //$strFormat = 'LL';
    //$dataInit = \Carbon\Carbon::createFromIsoFormat($strFormat, $strDateTime, null, 'id');

    //Translate Months
    // $dataInit = \Carbon\Carbon::create(2020,05,05,13,49,15);
    // $dataFormated = Formater::dateMonth($dataInit);

    $strTanggal = '21/12/2020 02:25:47 pm';
    $converter = Convert::strDatetimeAmpmToDate($strTanggal);
    $formater = '21/12/2020 02:25:47 siang';
    $formaterResult = Formater::datetimeAmpm($converter);
    $now = Formater::date(now());
    $hasil = [
        'satu' => 'tunggal',
        'string Tanggal [$strTanggal]' => $strTanggal,
        'Convert To date [$converter]' => $converter,
        'Format date [$formater]' => $formater,
        'Format date result [$formaterResult]' => $formaterResult,
        'Tanggal Hari ini [$now]' => $now];
   

    return dd($hasil);

    $result = $hasil;
    return $result;
});

Route::get('/ddauth', function () {

    $user = Auth::user();
    $roles = $user->roles;

    return $roles;
});

Route::get('/ddhash', function () {

    $has = Hash::make('123');
    $decrip = Hash::info($has);
    $check = Hash::check('123', $has);

    return $decrip;
});

Route::get('/roleadmin', function() {

    return 'this is for role admin';
})->middleware('check.role:'.$roleAdm.','.$rolePost);

Route::get('/only-admin-user', function() {

    return 'You are admin user';
})->middleware(['auth','is.admin']);


Route::get('/onlyadmin', function() {

    // if (Gate::allows(env('ADMIN_ROLE_CODE'))) {
    //     // The current user can edit settings
    //     return Auth::user()->email.' Behasil!!!';
    // }    

    // if (Gate::allows(env('POST_ROLE_CODE'))) {
    //     // The current user can edit settings
    //     return Auth::user()->email.' Behasil!!!';
    // }    


    Gate::authorize(env('POST_ROLE_CODE'));
    Gate::authorize(env('ADMIN_ROLE_CODE'));

    // if (Gate::any(['ADMIN_ROLE_CODE', 'POST_ROLE_CODE'])) {
    //     // The user can update or delete the post
    //     return Auth::user()->email.' Behasil!!! BRO';
    // }    


    return Auth::user()->email.' this is only for admin';

}); //->middleware('can:'.env('ADMIN_ROLE_CODE'));

