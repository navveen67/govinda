@extends('layouts.app')

@section('content')
<h1>Messages</h1>

@if(count($messages) > 0)
    <ul class="list-group">


    <table class="table table-striped table-hover table-reflow">
    <thead>
        <tr>
            
            <th ><strong> Serial_No: </strong></th>
            <th ><strong> Name: </strong></th>
            <th ><strong> Email: </strong></th>
            <th ><strong> Message: </strong></th>
            <th ><strong> Date: </strong></th>
        </tr>
    </thead>

    
    <tbody>
    
  @foreach($messages as $message)
        <tr> 
            <td> {{$message->id}} </td>
            <td> {{$message->name}} </td>
            <td> {{$message->email}} </td>
            <td> {{$message->message}} </td>
            <td> {{$message->created_at}} </td>
        </tr>
        
    @endforeach
        
    </tbody>
</table>
   
    </ul>
@endif

@endsection

