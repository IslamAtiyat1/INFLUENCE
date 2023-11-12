<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <title>Home Page</title>

</head>

@extends('layouts.layout')
@section('title', 'influhub')
@section('content')

    {{-- start slides --}}
     <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/img1.png') }}" class="d-block w-100 img-h" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/img1.png') }}" class="d-block w-100 img-h" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/img1.png') }}" class="d-block w-100 img-h" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev " type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- social media -->
    <div class="social-media">
    <div class="d-flex flex-column mb-3">
    <div class="p-2"><i class='fab fa-instagram' style='font-size:26px'></i></div>
    <div class="p-2"><i class='fab fa-linkedin-in' style='font-size:24px'></i></div>
    <div class="p-2"><i class='fab fa-facebook-f' style='font-size:24px;color: #5e23b1'></i></div>
    <div class="p-2"><i class='fab fa-twitter' style='font-size:24px'></i></div>
    </div></div>
    <!--  end social media - -->
    <!-- button -->
    <div class="Register-btn">
        <div class="inner-btn">
                <button>REGISTER NOW<i class='far fa-arrow-alt-circle-right' ></i></button>
                <!-- REGISTER NOW -->
        </div>
    </div>
    <!-- end of button -->
    {{-- start end --}}
    {{-- break --}}
    <div class="break">

    </div>
    {{-- end break --}}
    {{-- hero page --}}
    <div class="hero">
        <div class="text-box">
            <p>
                At INFLUHUB, we encourage our community to a positive content creation, in addition
                to link the influencers/ the talents on Social Media to the best reputational, Local
                & International companies to create the best frame practice model of behavior to affect
                the community in the best way needed.

            </p>
        </div>
      
     <!-- images-card -->
     <!-- Update your HTML structure -->
<!-- <div class="parent">
    <div class="content">
        <div class="hero-img">
            <img src="{{ asset('images/img3.png') }}" class="d-block w-10" alt="...">
  
    </div>
          <div class="text">
            <p> <strong> EAGLES </strong>OF INFLUHUB</p>
        </div>
    <div class="images">
        @foreach ($influencers as $influencer)
            <div class="image-card">
                <div class="card-body">
                    <h5 class="card-title">{{ $influencer->name }}</h5>
                    <img src="{{ asset($influencer->image) }}" class="card-img-top" alt="{{ $influencer->name }}">
              
        </div>
            </div>
        @endforeach
    </div>
</div> -->
<!-- </div> -->




<!-- arrnge the card design -->
 
<div class="d-flex flex-column mb-3">
  <div class="p-2">  
     <div class="hero-img">
            <img src="{{ asset('images/img3.png') }}" class="d-block w-10" alt="...">
      </div>
   </div>
</div>
<div class="d-flex flex-column mb-3">
  <div class="p-2">    
      <div class="text">
            <p> <strong> EAGLES </strong>OF INFLUHUB</p>
        </div>
    </div>
  <div class="d-flex flex-row mb-3">
 @foreach ($influencers as $influencer)
            <div class="image-card">
                <div class="card-body">
                   
                    <img src="{{ asset($influencer->image) }}" class="card-img-top" alt="{{ $influencer->name }}">
               <h5 class="card-title">{{ $influencer->name }}</h5>
        </div>
            </div>
        @endforeach

  </div>  
  
</div>












        <!-- end of  images-card -->
        {{-- end hero bage --}}
        {{-- break --}}
        <div class="break">

        </div>
        {{-- end break --}}
        {{-- services --}}
        <div class="services">
            <h2>Our services</h2>

            <ol>
                <li>Videography</li>
                <li>Photography</li>
                <li>Social Media Platforms Management</li>
                <li>Full Marketing Plans</li>
                <li>Content Creation and Marketing</li>
                <li>Website Design and Development</li>
                <li>(SEO & SEM)</li>
                <li>Broadcasting Media Reservation (TV & Radio)</li>
                <li>Print Media</li>
            </ol>




        </div>



        {{-- end of services --}}


    @endsection

</html>
