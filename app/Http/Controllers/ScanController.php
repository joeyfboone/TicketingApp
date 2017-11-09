<?php

namespace App\Http\Controllers;

use DB;
use App\Scan;
use Illuminate\Http\Request;

class ScanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('scan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $barcode_id)
    {
        $url = $request->fullUrl();
        dd($barcode_id);
       return view('scan', $barcode_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Scan  $scan
     * @return \Illuminate\Http\Response
     */
    public function show($barcode_id)
    {
        $barcode_status_array = DB::select('select status from ticket_barcode where id =' .$barcode_id);
        $barcode_status = $barcode_status_array[0]->status;
        $url = config('app.url');
        if ($barcode_status == 1) {
            $audio_file = "valid.mp3";
            $image_file = "valid.jpg";
            DB::update('update ticket_barcode SET status = "0" WHERE id =' .$barcode_id);
            DB::insert('insert into scans (barcode_id, status) values (?, ?)', [$barcode_id, 1]);
            return view('scan', compact('audio_file', 'barcode_status', 'url', 'image_file'));

         //  DB::update('update ticket_barcodes set status = 0 where id = ?', [$barcode_id]);
          
           
        //    DB::table('ticket_barcode')
        //     ->where('id', $barcode_id)
        //     ->update(array('status' => '0'));

        
    
    
     } else {
        $audio_file = "invalid.mp3";
        $image_file = "invalid.jpg";
        $scans_array = DB::select('select status, created_at from scans where barcode_id =' .$barcode_id);
        // for ($i = 0; $i <= count($scans_array); $i++) {
        //     var_dump($i);
        //     $scans_status = $scans_array[$i]->status[$i];
        //     $scans_created_at =$scans_array[$i]->created_at[$i];
        //     var_dump($scans_status);
        //     var_dump($scans_created_at);
        // } 
        // $scans_status = $scans_array[i]->status;
        // $scans_created_at =$scans_array[i]->created_at;
        // var_dump($scans_status);
        // var_dump($scans_created_at);

        DB::insert('insert into scans (barcode_id, status) values (?, ?)', [$barcode_id, 0]);
        return view('scan', compact('barcode_status', 'url', 'audio_file', 'image_file', 'scans_array'));
          }
        }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Scan  $scan
     * @return \Illuminate\Http\Response
     */
    public function edit(Scan $scan)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Scan  $scan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scan $scan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Scan  $scan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scan $scan)
    {
        //
    }
}
