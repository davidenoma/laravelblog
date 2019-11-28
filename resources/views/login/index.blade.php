@extends('layouts.master')    


@section('content')

<h3 >Login</h3>
<hr>
@if(session()->has('msg'))
   <div class="alert alert-success">
     {{session()->get('msg')}}   
   </div>
    

@endif

<div class="card" >
    <div class="card-header">
        Login
    </div>
    <div class="card-body">
        <form action="{{route('user.login')}}" method="post">
           @csrf
            <div class="col-md-6 mb3">
                <label for="email">Email:</label>
                <input type="text" class="form-control {{$errors -> has('email') ? 'is-invalid' :'' }}" name = "email" id="email" placeholder="Email" value="{{old('email')}}">
                <div class="invalid-feedback">
                    {{$errors ->first('email')}}
                </div>
            </div>
              <div class="col-md-6 mb3">
                <label for="password">Password: </label>
                <input type="text" class="form-control {{$errors -> has('password') ? 'is-invalid' :'' }}" name = "password" id="password" placeholder="Password" value="{{old('password')}}">
                <div class="invalid-feedback">
                    {{$errors ->first('password')}}
                </div>
            </div>
            <br>
            <div class="col-md-6 mb3">
            <input type="submit" class ="btn btn-primary" />
            </div>
        </form>
    </div>
</div>
@endsection