@extends('layouts.app')
@section('content')
<br><h1>User Login</h1><br>
<form action="{{route('login')}}" class="form-group" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}

    <div class="col-md-4 form-group">
        <span>Username</span>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        @error('username')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Password</span>
        <input type="password" name="password" value="{{old('password')}}" class="form-control">
        @error('password')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <br>
    <input type="submit" class="btn btn-success" value="Sign Up" >                  
</form>

@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection 