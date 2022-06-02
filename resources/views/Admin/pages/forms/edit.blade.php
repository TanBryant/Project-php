 @extends('Admin/layout/master')
  @section('head')
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}">
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
 
 
 <!-- End layout styles -->
 <link rel="shortcut icon" type="image/x-icon" href="{{@asset('assets/img/favicon.ico')}}">
  @endsection 
 
  @section('content')
  <div class="card" style=" 
   POSITION: absolute;
    width: 1000px;
    right: 20%;
    top: 6%;
    background-color: #6868681f; 
    border: 50px solid rgba(0, 0, 0, 0.125);">
    <div class="card-body">
      <h3 class="card-title">Edit user</h3>

      <form class="forms-sample" action="{{ url('Admin/'.$user->id) }}" method="POST">
        @method('put')
        {!! csrf_field() !!}
        <div class="form-group">
          <label for="exampleInputUsername1">Username</label>
          <input type="text" name="username" value="{{$user->username}}" class="form-control" id="exampleInputUsername1" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" value="{{$user->password}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="exampleInputConfirmPassword1">Phone</label>
          <input type="text" name="phone" value="{{$user->phone}}" class="form-control" id="exampleInputConfirmPassword1" placeholder="phone">
        </div>

        <button type="submit" value="Save" name="submit" class="btn btn-primary mr-2">Update</button>
        <button class="btn btn-dark">Cancel</button>
      </form>
    </div>
  </div>
  @endsection
 
 