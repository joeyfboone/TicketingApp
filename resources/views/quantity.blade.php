@extends('layouts.app') @section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Purchase</div>

                <div class="panel-body">
                    You are purchasing:<br>
                    <img src="/images/{{ $selected_ticket[0]->image_name }}" height='100px' width='150px'><br>
                    {{ $selected_ticket[0]->name }}<br>
                    {{ $selected_ticket[0]->description }}<br>
                    <button>
                                        <a href="/purchase/ticket_quantity/{{$selected_ticket[0]->id}}/1">Confirm Ticket </a>
                                    </button>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection