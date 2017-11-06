@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Scanner</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Scan Results Will Be HERE!!!!!<br>
                  

                    <div>Status: {{$barcode_status}}</div>

                    <a href="Camera://">Launch Scanner app (iOS only)</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
