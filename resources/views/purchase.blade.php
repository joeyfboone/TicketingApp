@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Purchase</div>

                <div class="panel-body">
Purchase

<table>
  <tr>
    <th>Title</th>
    <th>Description</th> 
    <th>Image</th> 
    
  </tr>
 
                        @foreach ($active_tickets_array as $active_tickets )

                        <tr>
                        <td>
                        
                        {{ $active_tickets -> name }}</td>  <td>{{ $active_tickets -> description }} </td>
                        <td> 
                        <img src="/images/{{ $active_tickets -> image_name }}" height = '100px' width = '150px' >   
                        </td>
                         </tr>
                            @endforeach
</table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
