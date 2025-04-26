@extends('layouts.app')

@section('content')
<div class="container">

    <!-- 🔹 Bootstrap Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/slide1.jpg') }}" class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/slide2.jpg') }}" class="d-block w-100" alt="Slide 2">
            </div>
        </div>
    </div>

    <!-- 🔹 Profile List -->
    <h2>User Profiles</h2>
    <div class="row">
        @foreach($users as $user)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{ asset('uploads/' . $user->photo) }}" class="card-img-top" alt="{{ $user->name }}" style="height:200px; object-fit:cover;">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $user->name }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
@endsection
