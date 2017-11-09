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

                    Scan Results:<br>
                    <audio src="/audio/{{$audio_file}}" type="audio/mpeg" autoplay="autoplay"></audio>
                    <img src="/images/{{$image_file}}" height = 250px>   

                    <?php if ($barcode_status == 1) { ?>
                        <div>Ticket is Valid</div>
                    <?php } elseif ($barcode_status == 0) { ?>
                        <div>Ticket is Invalid</div>

                        <table>
  <tr>
    <th>Status</th>
    <th>Scan Date & Time</th> 
  </tr>
 
                        @foreach ($scans_array as $scan )

                        <tr>
                        <td>
                        
                        {{ $scan -> status }}</td>  <td>{{ $scan -> created_at }} </td>
                         </tr>
                            @endforeach
</table>

                    <?php } 




                    else { ?>
                        <div>Verify this is a ticket</div>
                    <?php }?>



                    <div>Status: {{$barcode_status}}</div>

                    <a href="RedLaser://">Launch Scanner app (iOS only)</a><br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
