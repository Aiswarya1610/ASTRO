

@extends('layouts.app1')

@section('title', 'Login')

@section('content')

<!--===== HERO AREA STARTS =======-->
<div class="about-header-area" style="background-image: url(assets/img/bg/inner-header.png); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <img src="assets/img/elements/elements1.png" alt="" class="elements1 aniamtion-key-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="about-inner-header heading9 text-center">
                    <h1>Register</h1>
                    <a href="index.html">Home <i class="fa-solid fa-angle-right"></i> <span>Register</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<div class="contact-main-inner-area sp1">
    <div class="container">
        <div class="row align-items-center">
           
            <div class="col-lg-6">
                <div class="contact-form-area">
                    <h4>Registration</h4>
                    <div class="row">
                    
                        
                    <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Email Address -->
    <div class="col-lg-12">
       <div class="input-area">
       <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>
        @error('name')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    </div>

    <!-- Password -->
    <div class="col-lg-12">
    <div class="input-area">
    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
        @error('email')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="col-lg-12">
    <div class="input-area">
    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
        @error('password')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="col-lg-12">
    <div class="input-area">
    <input id="password_confirmation" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>
        @error('password_confirmation')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>

  

    <!-- Forgot Password & Submit -->
    <div class="d-flex justify-content-between align-items-center mt-4">
    <a href="{{ route('login') }}">Already registered?</a>
    <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>
                    </div>
                </div>
            </div>

           
        </div>
    </div>
</div>

@endsection
