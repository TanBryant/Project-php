@extends('Zayshop.layout.master')

@section('content')

<!-- Start Banner Hero -->
<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="img-fluid" src="https://file.hstatic.net/1000003969/file/1920x870_ba837a0ce8bf4ae887cd9038d044abff.jpg" alt="">
        </div>
        <div class="carousel-item">
            <img class="img-fluid" style="height: 478px" src="https://file.hstatic.net/1000003969/file/kv-aloha-sale-1920x450-mn_eef8b177fa3b4b5f912d832cf790542a.jpg" alt="">
        </div>
        <div class="carousel-item">
            <img class="img-fluid" src="https://file.hstatic.net/1000003969/file/86ce9617-e31a-46e7-8ed8-8239d39142ae_aaa04ccd076d41cda779bfe444c60e1b.jpeg" alt="">
        </div>
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>
<!-- End Banner Hero -->


<!-- Start Categories of The Month -->
<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Categories of The Month</h1>
        </div>
    </div>
    <div class="row">
        @foreach ($categories as $key)
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="{{ $key->img }}" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">{{ $key->name }}</h5>
            <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
        </div>
        @endforeach
        <!-- <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="{{ asset('./assets/img/category_img_02.jpg')}}" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Shoes</h2>
            <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="{{ asset('./assets/img/category_img_03.jpg')}}" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Accessories</h2>
            <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
        </div> -->
    </div>
</section>
<!-- End Categories of The Month -->


<!-- Start Featured Product -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Featured Product</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-3 mb-3">
                <div class="card h-100">
                    <a href="shop-single.html">
                        <img src="https://product.hstatic.net/1000003969/product/xanh_txn574_2_981981b2de0141858662a8f695c378bf.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                            </li>
                            <li class="text-muted text-right">$900.00</li>
                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark">Handbag Decoration Knotted Buckle</a>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia deserunt.
                        </p>
                        <p class="text-muted">Reviews (24)</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-3">
                <div class="card h-100">
                    <a href="shop-single.html">
                        <img src="https://product.hstatic.net/1000003969/product/xam-xanh_sd07072_1_1181f5016b5a4102842f13ad18ad35d2_grande.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                            </li>
                            <li class="text-muted text-right">$440.00</li>
                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark"> Square Toe Sandal Shoes</a>
                        <p class="card-text">
                            Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.
                        </p>
                        <p class="text-muted">Reviews (48)</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-3">
                <div class="card h-100">
                    <a href="shop-single.html">
                        <img src="https://product.hstatic.net/1000003969/product/caro-do_jndng007_2_8c69cb2773ac49bd9382624803e9818b_grande.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                            </li>
                            <li class="text-muted text-right">$330.00</li>
                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark">Diagonal Short Neck Vest Dress</a>
                        <p class="card-text">
                            Curabitur ac mi sit amet diam luctus porta. Phasellus pulvinar sagittis diam, et scelerisque ipsum lobortis nec.
                        </p>
                        <p class="text-muted">Reviews (74)</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-3">
                <div class="card h-100">
                    <a href="shop-single.html">
                        <img src="https://product.hstatic.net/1000003969/product/den_jnqda006_2_8b72564409cc43b9912cb0babe499737_grande.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                            </li>
                            <li class="text-muted text-right">$540.00</li>
                        </ul>
                        <a href="shop-single.html" class="h2 text-decoration-none text-dark">Button Open Loose Long Pants</a>
                        <p class="card-text">
                            Curabitur ac mi sit amet diam luctus porta. Phasellus pulvinar sagittis diam, et scelerisque ipsum lobortis nec.
                        </p>
                        <p class="text-muted">Reviews (74)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Featured Product -->
@endsection
 
 