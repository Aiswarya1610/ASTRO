
@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<style>
  .carousel-item img {
    height: 400px; /* or whatever height you prefer */
    object-fit: cover;
  }
</style>
    <!-- 🔁 Bootstrap Carousel -->
    <div id="homepageSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/img/slider1.jpg') }}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/img/slider2.jpg') }}" class="d-block w-100" alt="Slide 2">
            </div>
            
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#homepageSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homepageSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
<div class="contact-main-inner-area sp1">
    <div class="container">
        <div class="row align-items-center">
           
            <div class="col-lg-6">
                <div class="contact-form-area">
                    <h4>Login</h4>
                    <div class="row">
                    
                        
<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
    <div class="col-lg-12">
       <div class="input-area">
        <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}"  placeholder="Email" required autofocus>
        @error('email')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
    </div>

    <!-- Password -->
    <div class="col-lg-12">
    <div class="input-area">
        <input id="password" class="form-control" type="password" name="password" placeholder="Password" required>
        @error('password')
            <div class="text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>

    <!-- Remember Me -->
    <div class="form-check mt-3">
        <input class="form-check-input" type="checkbox" name="remember" id="remember_me">
        <label class="form-check-label" for="remember_me">
            Remember Me
        </label>
    </div>

    <!-- Forgot Password & Submit -->
    <div class="d-flex justify-content-between align-items-center mt-4">
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}">Forgot your password?</a>
        @endif

        <button type="submit" class="btn btn-primary">
            Log In
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

