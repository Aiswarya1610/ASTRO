
@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<!--===== HERO AREA STARTS =======-->
<div class="about-header-area" style="background: aqua; background-repeat: no-repeat; background-size: cover; background-position: center;">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="about-inner-header heading9 text-center">
                    <h1>Forgot Password</h1>
                    <a href="index.html">Home <i class="fa-solid fa-angle-right"></i> <span>Forgot Password</span></a>
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
                    <h4>Forgot Password</h4>
                   <p>{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                   </p>
                    <div class="row">
                    
                        
                    <form method="POST" action="{{ route('password.email') }}">
                    @csrf

    <!-- Email Address -->
    <div class="col-lg-12">
       <div class="input-area">
       <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
        @error('email')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    </div>

    <!-- Password -->
   

    <!-- Forgot Password & Submit -->
    <div class="d-flex justify-content-between align-items-center mt-4">
       

        <button type="submit" class="btn btn-primary">
            Email Password Reset Link
        </button>
    </div>
</form>
                    </div>
                </div>
            </div>

           
        </div>
    </div>
</div>

@endsection

