@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Purchase</div>

                <div class="panel-body">
Tickets

<table class="table table-striped">
  <tr>
  <th></th> 
    <th>Title</th>
    <th>Description</th> 

    <th></th> 
    
  </tr>
 
                        @foreach ($active_tickets_array as $active_tickets )

                        <tr>
                        <td> 
                        <img src="/images/{{ $active_tickets -> image_name }}" height = '100px' width = '150px' >   
                        </td>
                        <td>
                        
                        {{ $active_tickets -> name }}</td>  <td>{{ $active_tickets -> description }} </td>
                       
                        <td>                               
                        <button>
                                        <a href="/purchase/ticket_quantity/{{$active_tickets -> id}}">Select Ticket </a>
                                    </button></td>
                         </tr>
                            @endforeach
</table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
