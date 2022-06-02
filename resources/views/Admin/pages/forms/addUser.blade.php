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
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">Add user</h3>

                  <form class="forms-sample" action="{{ url('/Admin/store') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="form-group">
                      <label for="exampleInputUsername1">Username</label>
                      <input type="text" name="username" class="form-control" id="exampleInputUsername1" placeholder="Username">
                      @if($errors->has('username'))
                      <p>{{ $errors->first('username') }}</p>
                      @endif
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Phone</label>
                      <input type="text" name="phone" class="form-control" id="exampleInputConfirmPassword1" placeholder="phone">
                    </div>

                    <button type="submit" name="submit" value="Save" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            <!-- ket thuc -->
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Horizontal Form</h4>
                  <p class="card-description"> Horizontal form layout </p>
                  <form class="forms-sample">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Username">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label">Mobile</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputMobile" placeholder="Mobile number">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="exampleInputConfirmPassword2" placeholder="Password">
                      </div>
                    </div>
                    <div class="form-check form-check-flat form-check-primary">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
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