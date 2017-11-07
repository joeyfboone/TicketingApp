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

                    Scan Results Will Be HERE!!!!! Yep.<br>
                    <audio src="/audio/{{$audio_file}}" autoplay="autoplay"></audio>
                    <img src="/images/{{$image_file}}" height = 250px>   


                    <?php if ($barcode_status == 1) { ?>
                        <div>Ticket is Valid</div>
                    <?php } elseif ($barcode_status == 0) { ?>
                        <div>Ticket is Invalid</div>
                    <?php } 
                    else { ?>
                        <div>Verify this is a ticket</div>
                    <?php }?>



                    <div>Status: {{$barcode_status}}</div>

                    <a href="Camera://">Launch Scanner app (iOS only)</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
