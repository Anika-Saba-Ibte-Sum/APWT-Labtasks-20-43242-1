@extends('layouts.app')
@section('content')
<table class="table table-border">
<tr>
        <th>Name</th>
        <th>ID</th>
        
        <th colspan="2">Action</th>
    </tr>
    @foreach($customers as $customer)
    <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->id}}</td>
        <td><a href="/userEdit/{{$customer->name}}/{{$customer->id}}">Details</a></td>
        
        <td><a href="/userDelete/{{$customer->id}}">Delete</a></td>    
    </tr>
    @endforeach

</table>
@endsection