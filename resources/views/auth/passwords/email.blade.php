@extends('layouts.admin.forgot')

@section('content')
@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<div class="p-5">
    <div class="text-center">
        
        <p class="mb-4">We get it, stuff happens. Just enter your email address below
            and we'll send you a link to reset your password!</p>
    </div>
    <form class="user" method="post" action="{{route('password.email')}}">
        @csrf
        <div class="form-group">
            <input type="email" class="form-control form-control-user" name="email"
                id="exampleInputEmail" aria-describedby="emailHelp"
                placeholder="Enter Email Address...">
        </div>
        <input class="btn btn-primary btn-user btn-block" value="Sens Password Reset Link" type="submit">
  
    </form>
    <hr>
                        <div class="row mb-12">
                            <div class="col-md-12">
                                <a class="btn btn-facebook btn-user btn-block" href="{{route('login')}}"> Login </a>
                                <a class="btn btn-facebook btn-user btn-block" href="{{route('register')}}"> register </a>
                            </div>
                        </div>
    
</div>
@endsection
