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
// Route::get('/scan', function () {
//     return view('Scan');
// });

// Auth::routes();

//Route::resource('scan', 'ScanController');


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

//Scanning Route with Param (Scanman)
// Route::get('/scanman/{barcode_id}', function ($barcode_id) 
// {
//     $barcode_status_array = DB::select('select status from ticket_barcode where id =' .$barcode_id);
//     $barcode_status = $barcode_status_array[0]->status;
//     $url = config('app.url');
//     if ($barcode_status == 1) {
//         $audio_file = "valid.mp3";
//         $image_file = "valid.jpg";
//         return view('scan', compact('audio_file', 'barcode_status', 'url', 'image_file'));
//        // DB::update('update ticket_barcode SET status = "0" WHERE id =' .$barcode_id);
//        DB::insert('insert into scans (id, status) values (?, ?)', [$barcode_id, 1]);
//        DB::update('update ticket_barcodes set status = 0 where id = ?', [$barcode_id]);
      
       
//     //    DB::table('ticket_barcode')
//     //     ->where('id', $barcode_id)
//     //     ->update(array('status' => '0'));


//  } else {
//     $audio_file = "invalid.mp3";
//     $image_file = "invalid.jpg";
//     return view('scan', compact('barcode_status', 'url', 'audio_file', 'image_file'));
//       }
//     });

//View Ticket Route with Param 
Route::get('/view_ticket/{barcode_id}', 'ViewTixController@show')->name('view_ticket.show');
//Route::get('/view_ticket/{barcode_id}', function ($barcode_id) 

 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
