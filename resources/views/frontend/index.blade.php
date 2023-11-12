<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

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
    <!-- button -->
    <div class="Register-btn">
        <div class="inner-btn">
                <span>Register Now <i class='far fa-arrow-alt-circle-right' ></i></span>
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
        <div class="hero-img">
            <img src="{{ asset('images/img3.png') }}" class="d-block w-10" alt="...">


        </div>
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
