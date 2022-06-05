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
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Product list</h3>

                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th> Images </th> 
                                                    <th> Product name </th> 
                                                    <th> Size </th>
                                                    <th> Status</th>
                                                    <th> Description </th>  
                                                    <th> Function </th>  
                                                    <th> Function </th>  
                                                </tr>
                                            </thead>
                                            <tbody > 
                                                 <style>
                                                 .table tbody td{
                                                    font-size: 15px;
                                                 }
                                                 </style>
                                            @foreach($product as $key)
                                                <tr >
                                                    <td style="width: 250px;">
                                                        <img src="{{ $key->img }}"style="width: 180px;height: 180px;"> 
                                                    </td> 
                                                    <td>{{ $key->name }}</td> 
                                                    <td>{{ $key->size }}</td>
                                                    <td>{{ $key->status }}</td>
                                                    <td>{{ $key->description }}</td>
                                                    <td>
                                                         <a href="{{ url('/Admin/' . $key->id . '/editProduct') }}" title="Edit Product">
                                                        <button class="btn btn-primary btn-sm">
                                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                                                            Edit
                                                        </button>
                                                    </a> 
                                                    </td>
                                                    <td>
                                                        <form method="POST" action="{{ url('/Admin/productTable' . '/' . $key->id) }}" 
                                                        accept-charset="UTF-8" 
                                                        style="display:inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete">
                                                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>

                                    <a href="{{ url('/Admin/addProduct') }}" class="btn btn-primary mr-2 mt-3" style="width: 200px">Add Product</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Bordered table</h4>
                                    <p class="card-description"> Add class <code>.table-bordered</code>
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> First name </th>
                                                    <th> Progress </th>
                                                    <th> Amount </th>
                                                    <th> Deadline </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> Herman Beck </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td> $ 77.99 </td>
                                                    <td> May 15, 2015 </td>
                                                </tr>
                                                <tr>
                                                    <td> 2 </td>
                                                    <td> Messsy Adam </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td> $245.30 </td>
                                                    <td> July 1, 2015 </td>
                                                </tr>
                                                <tr>
                                                    <td> 3 </td>
                                                    <td> John Richards </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td> $138.00 </td>
                                                    <td> Apr 12, 2015 </td>
                                                </tr>
                                                <tr>
                                                    <td> 4 </td>
                                                    <td> Peter Meggik </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td> $ 77.99 </td>
                                                    <td> May 15, 2015 </td>
                                                </tr>
                                                <tr>
                                                    <td> 5 </td>
                                                    <td> Edward </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td> $ 160.25 </td>
                                                    <td> May 03, 2015 </td>
                                                </tr>
                                                <tr>
                                                    <td> 6 </td>
                                                    <td> John Doe </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td> $ 123.21 </td>
                                                    <td> April 05, 2015 </td>
                                                </tr>
                                                <tr>
                                                    <td> 7 </td>
                                                    <td> Henry Tom </td>
                                                    <td>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </td>
                                                    <td> $ 150.00 </td>
                                                    <td> June 16, 2015 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Inverse table</h4>
                                    <p class="card-description"> Add class <code>.table-dark</code>
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-dark">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> First name </th>
                                                    <th> Amount </th>
                                                    <th> Deadline </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td> 1 </td>
                                                    <td> Herman Beck </td>
                                                    <td> $ 77.99 </td>
                                                    <td> May 15, 2015 </td>
                                                </tr>
                                                <tr>
                                                    <td> 2 </td>
                                                    <td> Messsy Adam </td>
                                                    <td> $245.30 </td>
                                                    <td> July 1, 2015 </td>
                                                </tr>
                                                <tr>
                                                    <td> 3 </td>
                                                    <td> John Richards </td>
                                                    <td> $138.00 </td>
                                                    <td> Apr 12, 2015 </td>
                                                </tr>
                                                <tr>
                                                    <td> 4 </td>
                                                    <td> Peter Meggik </td>
                                                    <td> $ 77.99 </td>
                                                    <td> May 15, 2015 </td>
                                                </tr>
                                                <tr>
                                                    <td> 5 </td>
                                                    <td> Edward </td>
                                                    <td> $ 160.25 </td>
                                                    <td> May 03, 2015 </td>
                                                </tr>
                                                <tr>
                                                    <td> 6 </td>
                                                    <td> John Doe </td>
                                                    <td> $ 123.21 </td>
                                                    <td> April 05, 2015 </td>
                                                </tr>
                                                <tr>
                                                    <td> 7 </td>
                                                    <td> Henry Tom </td>
                                                    <td> $ 150.00 </td>
                                                    <td> June 16, 2015 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Table with contextual classes</h4>
                                    <p class="card-description"> Add class <code>.table-{color}</code>
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-contextual">
                                            <thead>
                                                <tr>
                                                    <th> # </th>
                                                    <th> First name </th>
                                                    <th> Product </th>
                                                    <th> Amount </th>
                                                    <th> Deadline </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="table-info">
                                                    <td> 1 </td>
                                                    <td> Herman Beck </td>
                                                    <td> Photoshop </td>
                                                    <td> $ 77.99 </td>
                                                    <td> May 15, 2015 </td>
                                                </tr>
                                                <tr class="table-warning">
                                                    <td> 2 </td>
                                                    <td> Messsy Adam </td>
                                                    <td> Flash </td>
                                                    <td> $245.30 </td>
                                                    <td> July 1, 2015 </td>
                                                </tr>
                                                <tr class="table-danger">
                                                    <td> 3 </td>
                                                    <td> John Richards </td>
                                                    <td> Premeire </td>
                                                    <td> $138.00 </td>
                                                    <td> Apr 12, 2015 </td>
                                                </tr>
                                                <tr class="table-success">
                                                    <td> 4 </td>
                                                    <td> Peter Meggik </td>
                                                    <td> After effects </td>
                                                    <td> $ 77.99 </td>
                                                    <td> May 15, 2015 </td>
                                                </tr>
                                                <tr class="table-primary">
                                                    <td> 5 </td>
                                                    <td> Edward </td>
                                                    <td> Illustrator </td>
                                                    <td> $ 160.25 </td>
                                                    <td> May 03, 2015 </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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