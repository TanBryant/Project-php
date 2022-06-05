@extends('Admin.layout.master')
 @section('head')
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <title> Zayshop Admin</title>
 <!-- plugins:css -->
 <link rel="stylesheet" href="{{@asset('/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
 <link rel="stylesheet" href="{{@asset('/assets/vendors/css/vendor.bundle.base.css')}}">
 <!-- endinject -->
 <!-- Plugin css for this page -->
 <link rel="stylesheet" href="{{@asset('/assets/vendors/jvectormap/jquery-jvectormap.css')}}">
 <link rel="stylesheet" href="{{@asset('/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
 <link rel="stylesheet" href="{{@asset('/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
 <link rel="stylesheet" href="{{@asset('/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">
 <!-- End plugin css for this page -->
 <!-- inject:css -->
 <!-- endinject -->
 <!-- Layout styles -->
 <link rel="stylesheet" href="{{@asset('/assets/css/style.css')}}">
 <!-- End layout styles -->
 <link rel="shortcut icon" type="image/x-icon" href="{{@asset('assets/img/favicon.ico')}}">
 @endsection

@section('content')
      <div class="main-panel">
        <div class="content-wrapper">  
          <div class="row">   
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Product</h4> 
                  <form class="forms-sample" action="{{ url('/Admin/updateProduct/'.$product->id) }}" method="POST">
                  @method('put')
                    {!! csrf_field() !!}
                    <div class="form-group">
                      <label>Product Name</label>
                      <input type="text" name="name" value="{{$product->name}}" class="form-control" id="exampleInputName1" placeholder="Product Name">
                    </div>
                    <div class="form-group">
                      <label>Images Product</label>
                      <input type="text" name="img" value="{{$product->img}}" class="form-control" id="exampleInputEmail3" placeholder="Link img">
                    </div>
                    <div class="form-group">
                      <label >Price</label>
                      <input type="text" name="price" value="{{$product->price}}" class="form-control" id="exampleInputPassword4" placeholder="Price">
                    </div>
                    <div class="form-group">
                      <label >Category Product</label>
                      <select class="form-control" value="{{$product->category_id}}" name="category_id" id="exampleSelectGender">
                         @foreach ($category as $key)
                         <option value="{{ $key->id }}"> {{ $key->name }}  </option> 
                         @endforeach   
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Size</label>
                      <select class="form-control" value="{{$product->size}}" name="size" id="exampleSelectGender">
                         
                         <option> S  </option> 
                         <option> M  </option> 
                         <option> L  </option> 
                         <option> XL  </option>   
                      </select>
                    </div>
                    <div class="form-group">
                      <label >Status</label>
                      <input type="text" name="status" value="{{$product->status}}" class="form-control" id="exampleInputCity1" placeholder="Status">
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Description</label>
                      <textarea class="form-control" value="{{$product->description}}" name="description" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <button type="submit"  name="submit" value="Save" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        
        
      </div>
@endsection
@section('scripts')
 <!-- container-scroller -->
 <!-- plugins:js -->
 <script src="{{@asset('/assets/vendors/js/vendor.bundle.base.js')}}"></script>
 <!-- endinject -->
 <!-- Plugin js for this page -->
 <script src="{{@asset('/assets/vendors/chart.js/Chart.min.js')}}"></script>
 <script src="{{@asset('/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
 <script src="{{@asset('/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
 <script src="{{@asset('/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
 <script src="{{@asset('/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
 <!-- End plugin js for this page -->
 <!-- inject:js -->
 <script src="{{@asset('/assets/js/off-canvas.js')}}"></script>
 <script src="{{@asset('/assets/js/hoverable-collapse.js')}}"></script>
 <script src="{{@asset('/assets/js/misc.js')}}"></script>
 <script src="{{@asset('/assets/js/settings.js')}}"></script>
 <script src="{{@asset('/assets/js/todolist.js')}}"></script>
 <!-- endinject -->
 <!-- Custom js for this page -->
 <script src="{{@asset('/assets/js/dashboard.js')}}"></script>
 <!-- End custom js for this page -->
 @endsection