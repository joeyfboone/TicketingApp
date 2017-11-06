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
//Home Route


Route::get('/', function () {
    return view('welcome');
});
//Comes with PHP Make Auth
Auth::routes();
//Home Route to call the index method
Route::get('/home', 'HomeController@index')->name('home');


// Scanning Route
Route::get('/scan', function () {
    return view('Scan');
});

// Auth::routes();

Route::resource('scan', 'ScanController');


//Scanning Route with Param
Route::get('scan/{barcode_id}', [
    'as' => 'scan.create',
    'uses' => 'ScanController@create'
]);
Route::resource('scan', 'ScanController', ['except' => 'create']);


//Scanning Route with Param
Route::get('/scanner/{barcode_id}', function ($barcode_id) {
//    return 'scanner'.$barcode_id;
        return view('scan',['barcode_id'=>$barcode_id]);
}); 