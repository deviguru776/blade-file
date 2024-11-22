@extends('layouts.default')
@section('title','my project-Contact page')
@section('main-content')
<div class="row justify-content-center">
    <!-- <h3 class="ml-5">This is the contact page</h3> -->
</div>

<div class="container mt-5">
        <h1 class="text-center mb-4">Contact Us</h1>
        <p class="text-center text-muted mb-5">Have any questions? We'd love to hear from you!</p>

        <div class="row">
            <!-- Contact Info -->
            <div class="col-md-6">
                <h4>Get In Touch</h4>
                <p>Feel free to reach out to us through the following ways:</p>
                <ul class="list-unstyled">
                    <li><strong>Address:</strong> 123 Main Street, Anytown, USA</li>
                    <li><strong>Email:</strong> contact@myproject.com</li>
                    <li><strong>Phone:</strong> +1 (123) 456-7890</li>
                </ul>
                <h4 class="mt-4">Follow Us</h4>
                <a href="#" class="btn btn-primary btn-sm me-2">Facebook</a>
                <a href="#" class="btn btn-info btn-sm me-2">Twitter</a>
                <a href="#" class="btn btn-danger btn-sm">Instagram</a>
            </div>

            <!-- Contact Form -->
            <div class="col-md-6">
                <h4>Contact Form</h4>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Send Message</button>
                </form>
            </div>
        </div>
    </div>


@endsection