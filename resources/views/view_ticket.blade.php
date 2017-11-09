@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">View Ticket</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Here is your ticket. Please present at the entrance.<br>
                  
                    <img src='https://chart.googleapis.com/chart?cht=qr&chl=http://still-taiga-30289.herokuapp.com%2Fscan%2F{{$barcode_id}}&chs=180x180&choe=UTF-8&chld=L|2' alt=''>
                    <div>Status: {{$barcode_status}}</div>
                    <div>URL: {{$url}}</div>
              




                </div>
            </div>
        </div>
    </div>
</div>
@endsection
