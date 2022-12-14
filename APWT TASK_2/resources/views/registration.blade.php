@extends('layouts.app')
@section('content')
<br><h1>Registration Form</h1><br>
<form action="{{route('registration')}}" class="form-group" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}

    <div class="col-md-4 form-group" >
        <span>Name</span>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Username</span>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
        @error('username')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="text" name="email" value="{{old('email')}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Date of Birth</span>
        <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
        @error('dob')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Gender</span><br>
        <input type="radio" name="gender" value="{{old('male')}}" > Male
        <input type="radio" name="gender" value="{{old('female')}}" > Female
        <input type="radio" name="gender" value="{{old('others')}}" > Others
        @error('gender')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Phone</span>
        <input type="text" name="phone" value="{{old('phone')}}" class="form-control">
        @error('phone')
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
    <div class="col-md-4 form-group">
        <span>Confirm Password</span>
        <input type="password" name="cpassword" value="{{old('cpassword')}}" class="form-control">
        @error('cpassword')
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