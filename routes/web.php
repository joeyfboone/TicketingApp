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
Route::get('/scan/{barcode_id}', 'ScanController@show')->name('scan.show');


//Purchase Route to call the index method with cat_id
Route::get('/purchase/{category_id}', 'PurchaseController@show')->name('purchase.show');

//Quantity Route to call the index method with cat_id
Route::get('/purchase/ticket_quantity/{ticket_id}', 'QuantityController@show')->name('quantity.show');

//Purchase Route to call the index method
Route::get('/purchase/', 'PurchaseController@index')->name('purchase');


//Scanning Route with Param
// Route::get('scan/{barcode_id}', [
//     'as' => 'scan.create',
//     'uses' => 'ScanController@create'
// ]);
// Route::resource('scan', 'ScanController', ['except' => 'create']);


//Scanning Route with Param
Route::get('/scanner/{barcode_id}', function ($barcode_id) {
//    return 'scanner'.$barcode_id;
        return view('scan',['barcode_id'=>$barcode_id]);
}); 

//View Ticket Route with Param 
Route::get('/view_ticket/{barcode_id}', 'ViewTixController@show')->name('view_ticket.show');
//Route::get('/view_ticket/{barcode_id}', function ($barcode_id) 

 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
