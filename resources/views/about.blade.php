@extends('layouts.default')
@section('title','my project-About page')
@section('main-content')

<div class="container mt-5">
        <h1 class="text-center mb-4">About Us</h1>
        <p class="text-center text-muted mb-5">Learn more about who we are and what we do.</p>

        <div class="row align-items-center">
            <!-- Left Column -->
            <div class="col-md-6">
                <h2>Who We Are</h2>
                <p>
                    We are a passionate team dedicated to providing exceptional services and creating value for our customers. 
                    Our mission is to innovate, inspire, and make a difference through our expertise and dedication.
                </p>
                <h2>Our Mission</h2>
                <p>
                    To deliver high-quality solutions while fostering trust, collaboration, and innovation. 
                    We aim to exceed expectations and build long-lasting relationships with our clients.
                </p>
            </div>
            <!-- Right Column -->
            <div class="col-md-6">
                <img src="image/about.webp" alt="About Us" class="img-fluid rounded shadow">
            </div>
        </div>

        <hr class="my-5">

        <!-- Our Team Section -->
        <div class="text-center">
            <h2>Meet Our Team</h2>
            <p class="text-muted mb-4">The minds behind our success.</p>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <img src="image/ceo.jpg" alt="Team Member" class="img-fluid rounded-circle mb-3">
                <h5>Jane Doe</h5>
                <p>CEO & Founder</p>
            </div>
            <div class="col-md-4">
                <img src="image/ceo.webp" alt="Team Member" class="img-fluid rounded-circle mb-3">
                <h5>John Smith</h5>
                <p>Chief Technology Officer</p>
            </div>
            <div class="col-md-4">
                <img src="image/asia.jpeg" alt="Team Member" class="img-fluid rounded-circle mb-3">
                <h5>Emily Johnson</h5>
                <p>Head of Marketing</p>
            </div>
        </div>
    </div>

    @endsection