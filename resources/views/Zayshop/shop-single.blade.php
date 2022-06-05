@extends('Zayshop.layout.master')

@section('header')
   <link rel="stylesheet" type="text/css" href="{{@asset('assets/css/slick.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{@asset('assets/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{@asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{@asset('/assets/css/templatemo.css')}}">
    <link rel="stylesheet" href="{{@asset('/assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{@asset('assets/css/fontawesome.min.css')}}">
@endsection
@section('content')
<section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{$product->img}}" alt="Card image cap" id="product-detail">
                    </div> 
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body"> 
                            <h1 class="h2">{{$product->name}}</h1>
                            <p class="h3 py-2">{{$product->price}}$</p>
                            <p class="py-2">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <span class="list-inline-item text-dark">Rating 4.8 | 36 Comments</span>
                            </p>
                            

                            <h6>Description:</h6>
                            <p> {{$product->description}}</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Avaliable Color :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>White / Black</strong></p>
                                </li>
                            </ul>   
                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Size :
                                                <input type="hidden" name="product-size" id="product-size" value="S">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">S</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">M</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">L</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success btn-size">XL</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity
                                                <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Buy</button>
                                    </div>
                                    <div class="col d-grid">
                                        <a class="btn btn-success btn-lg" onclick="AddCart({{$product->id}})" href="javascript:">Add To Cart</a>
                                        <!-- <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Add To Cart</button> -->
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->
 
    
 
@endsection
 
 
@section('script')
    
    <script src="{{@asset('/assets/js/jquery-1.11.0.min.js')}}"></script>
    <script src="{{@asset('/assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{@asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{@asset('/assets/js/templatemo.js')}}"></script>
    <script src="{{@asset('/assets/js/custom.js')}}"></script>  
    <script src="{{@asset('/assets/js/slick.min.js')}}"></script>

    

    <script>
        function AddCart(id){
            $.ajax({
                url:'Admin/'+id+'/addCart', 
                type:'GET',
            }).done(function(response){
                console.log(response);
           } );
        }
    </script>
    @endsection
 