<?php

namespace App\Http\Controllers;

use DB;
use App\ViewTix;
use Illuminate\Http\Request;

class ViewTixController extends Controller
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
        $url = config('app.url');
        $barcode_status_array = DB::select('select status from ticket_barcode where id =' .$barcode_id);
        $barcode_status = $barcode_status_array[0]->status;
      //    return view('view_ticket',['barcode_status'=>$barcode_status]);
      //    return view('view_ticket',['url'=>$url]);
         return view('view_ticket', compact('barcode_id', 'url', 'barcode_status'));
       var_dump($url);
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
