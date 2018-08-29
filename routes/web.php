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

Route::group([
    'domain' => 'msb-1.'.config('multisite.host'),
    'as' => 'msb1.',
    'middleware' => 'site:msb1'
], function () {

    Route::get('/', function () {
        return view('sites.msb1');
    });

});

//Route::group([
//    'domain' => 'msb-2.'.config('multisite.host'),
//    'as' => 'msb2.',
//    'middleware' => 'site:msb2'
//], function () {
//
//    Route::get('/', function () {
//        return view('sites.msb2');
//    });
//
//});
//
//Route::group([
//    'domain' => 'msb-3.'.config('multisite.host'),
//    'as' => 'msb3.',
//    'middleware' => 'site:msb3'
//], function () {
//
//    Route::get('/', function () {
//        return view('sites.msb3');
//    });
//
//});
//
//Route::group([
//    'domain' => 'msb-4.'.config('multisite.host'),
//    'as' => 'msb4.',
//    'middleware' => 'site:msb4'
//], function () {
//
//    Route::get('/', function () {
//        return view('sites.msb4');
//    });
//
//});

Route::get('/', function () {
    return view('welcome');
});

Route::post('/requests', function(\Illuminate\Http\Request $request)
{
    $requests = new \App\Requests();

    $response = redirect('/');

    if ($requests->store($request))
    {
        $response->with('success', 'Its ok');
    }
    else
    {
        $response->with('error', 'Its no ok');
    }

    return $response;
});

Route::post('/callback.json', function(Illuminate\Http\Request $request)
{
    $validator = \Validator::make($request->all(), [
        'name'  => 'required',
        'phone' => 'required|min:16|max:16|regex:/\d\s\(\d{3}\)\s\d{3}-\d{4}/i'
    ]);

    if ($validator->fails())
    {
        return [
            'status' => 0,
            'errors' => $validator->errors()
        ];
    }

    \Mail::to(
        env('MAIL_HANDLER_MANAGER')
    )->send(new \App\Mail\Callback(
        $request->input('name'),
        $request->input('phone'),
        $request->input('email')
    ));

    return [
        'status' => 1,
        'errors' => []
    ];
});