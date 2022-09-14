@extends('layouts.admin.regis')

@section('content')
<form class="user" method="POST" action="{{route('register')}}">
    @csrf
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="text" class="form-control form-control-user" id="exampleFirstName" name="name"
                placeholder="Name">
        </div>
        <div class="col-sm-6">
            <input type="text" class="form-control form-control-user" id="exampleLastName" name="username"
                placeholder="Username">
        </div>
    </div>
    <div class="form-group">
        <input type="email" class="form-control form-control-user" id="exampleInputEmail" name="email"
            placeholder="Email Address">
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="phone"
            placeholder="Phone">
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" name="address"
            placeholder="Address">
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="password" class="form-control form-control-user" name="password"
                id="exampleInputPassword" placeholder="Password">
        </div>
        <div class="col-sm-6">
            <input type="password" class="form-control form-control-user" name="password_confirmation"
                id="exampleRepeatPassword" placeholder="Confirm Password">
        </div>
    </div>

    <input class="btn btn-google btn-user btn-block" type="submit" value="Register">
    <a class="btn btn-facebook btn-user btn-block" href="{{route('login')}}"> Login </a>

</form>
@endsection
