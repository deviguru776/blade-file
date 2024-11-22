<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.2/dist/tailwind.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

@include('layouts.header')

<!-- Hero Section -->
 
<!-- <section class="hero text-center text-dark d-flex align-items-center">
    <div class="container">
        <h1 class="display-4">Welcome to My Project</h1>
        <p class="lead">An example project using HTML, CSS, and Bootstrap</p>
        <a href="#" class="btn btn-primary btn-lg">Get Started</a>
    </div>
</section> -->


<!-- Features Section -->
@section('main-content')
<section class="features py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="image/teddy.jpg" class="card-img-top" alt="Feature 1">
                    <div class="card-body">
                        <h5 class="card-title">Feature 1</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, consequuntur dignissimos eligendi dicta itaque fuga ea delectus minus, amet labore iure dolores molestiae, praesentium aliquid at quia reiciendis enim incidunt?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/dog.jpg.jpg" class="card-img-top" alt="Feature 2">
                    <div class="card-body">
                        <h5 class="card-title">Feature 2</h5>
                        <p class="card-text">Pellentesque habitant morbi tristique senectus et netus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, vitae eaque! Molestias facere vitae dicta aliquam quidem. Fugit adipisci totam asperiores, aspernatur excepturi, sequi est.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/a1.jpg.jpg" class="card-img-top" alt="Feature 3">
                    <div class="card-body">
                        <h5 class="card-title">Feature 3</h5>
                        <p class="card-text">Suspendisse potenti. In faucibus massa arcu. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam voluptate, fuga asperiores quas impedit eveniet, quisquam laborum in maiores tempore sed non explicabo iure dolorum aliquam incidunt? Ex, minima dignissimos!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@show

<!-- Footer -->
@include('layouts.footer')
</footer>

<!-- Bootstrap and jQuery JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
