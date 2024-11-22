@extends('layouts.default')
@section('title','my project-Home page')
@section('main-content')
<div class="row justify-content-center" style="margin-top:50px;">
    <h3 class="ml-5">This is the home page</h3>
</div>
<div class="container" style="margin-top:50px;">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="image/computer.webp" class="card-img-top" alt="Feature 1">
                    <div class="card-body">
                        <h5 class="card-title">Feature 1</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, consequuntur dignissimos eligendi dicta itaque fuga ea delectus minus, amet labore iure dolores molestiae, praesentium aliquid at quia reiciendis enim incidunt?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/network.jpg" class="card-img-top" alt="Feature 2">
                    <div class="card-body">
                        <h5 class="card-title">Feature 2</h5>
                        <p class="card-text">Pellentesque habitant morbi tristique senectus et netus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia, vitae eaque! Molestias facere vitae dicta aliquam quidem. Fugit adipisci totam asperiores, aspernatur excepturi, sequi est. Lorem, ipsum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis qui assumenda cumque, nobis autem sunt, eos iusto ipsam debitis .</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="image/free.webp" class="card-img-top" alt="Feature 3">
                    <div class="card-body">
                        <h5 class="card-title">Feature 3</h5>
                        <p class="card-text">Suspendisse potenti. In faucibus massa arcu. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam voluptate, fuga asperiores quas impedit eveniet, quisquam laborum in maiores tempore sed non explicabo iure dolorum aliquam incidunt? Ex, minima dignissimos!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
