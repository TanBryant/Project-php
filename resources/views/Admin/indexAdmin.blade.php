 @extends('Admin.layout.master')
 @section('content')
 <div class="main-panel">
   <div class="content-wrapper">
     <div class="row">
       <div class="col-sm-4 grid-margin">
         <div class="card">
           <div class="card-body">
             <h5>Doanh thu</h5>
             <div class="row">
               <div class="col-8 col-sm-12 col-xl-8 my-auto">
                 <div class="d-flex d-sm-block d-md-flex align-items-center">
                   <h2 class="mb-0">$32123</h2>

                 </div>

               </div>
               <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                 <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="col-sm-4 grid-margin">
         <div class="card">
           <div class="card-body">
             <h5>Bán hàng</h5>
             <div class="row">
               <div class="col-8 col-sm-12 col-xl-8 my-auto">
                 <div class="d-flex d-sm-block d-md-flex align-items-center">
                   <h2 class="mb-0">$45850</h2>

                 </div>
               </div>
               <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                 <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="col-sm-4 grid-margin">
         <div class="card">
           <div class="card-body">
             <h5>Người dùng</h5>
             <div class="row">
               <div class="col-8 col-sm-12 col-xl-8 my-auto">
                 <div class="d-flex d-sm-block d-md-flex align-items-center">
                   <h2 class="mb-0">$2039</h2>
                 </div>
               </div>
               <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                 <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="row ">
       <div class="col-12 grid-margin">
         <div class="card">
           <div class="card-body">
             <h4 class="card-title">Order Status</h4>
             <div class="table-responsive">
               <table class="table">
                 <thead>
                   <tr>
                     <th>
                       <div class="form-check form-check-muted m-0">
                         <label class="form-check-label">
                           <input type="checkbox" class="form-check-input">
                         </label>
                       </div>
                     </th>
                     <th> Client Name </th>
                     <th> Order No </th>
                     <th> Product Cost </th>
                     <th> Project </th>
                     <th> Payment Mode </th>
                     <th> Start Date </th>
                     <th> Payment Status </th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <td>
                       <div class="form-check form-check-muted m-0">
                         <label class="form-check-label">
                           <input type="checkbox" class="form-check-input">
                         </label>
                       </div>
                     </td>
                     <td>
                       <img src="{{@asset('/assets/images/faces/face1.jpg')}}" alt="image" />
                       <span class="pl-2">Henry Klein</span>
                     </td>
                     <td> 02312 </td>
                     <td> $14,500 </td>
                     <td> Dashboard </td>
                     <td> Credit card </td>
                     <td> 04 Dec 2019 </td>
                     <td>
                       <div class="badge badge-outline-success">Approved</div>
                     </td>
                   </tr>
                   <tr>
                     <td>
                       <div class="form-check form-check-muted m-0">
                         <label class="form-check-label">
                           <input type="checkbox" class="form-check-input">
                         </label>
                       </div>
                     </td>
                     <td>
                       <img src="{{@asset('/assets/images/faces/face2.jpg')}}" alt="image" />
                       <span class="pl-2">Estella Bryan</span>
                     </td>
                     <td> 02312 </td>
                     <td> $14,500 </td>
                     <td> Website </td>
                     <td> Cash on delivered </td>
                     <td> 04 Dec 2019 </td>
                     <td>
                       <div class="badge badge-outline-warning">Pending</div>
                     </td>
                   </tr>
                   <tr>
                     <td>
                       <div class="form-check form-check-muted m-0">
                         <label class="form-check-label">
                           <input type="checkbox" class="form-check-input">
                         </label>
                       </div>
                     </td>
                     <td>
                       <img src="{{@asset('/assets/images/faces/face5.jpg')}}" alt="image" />
                       <span class="pl-2">Lucy Abbott</span>
                     </td>
                     <td> 02312 </td>
                     <td> $14,500 </td>
                     <td> App design </td>
                     <td> Credit card </td>
                     <td> 04 Dec 2019 </td>
                     <td>
                       <div class="badge badge-outline-danger">Rejected</div>
                     </td>
                   </tr>
                   <tr>
                     <td>
                       <div class="form-check form-check-muted m-0">
                         <label class="form-check-label">
                           <input type="checkbox" class="form-check-input">
                         </label>
                       </div>
                     </td>
                     <td>
                       <img src="{{@asset('/assets/images/faces/face3.jpg')}}" alt="image" />
                       <span class="pl-2">Peter Gill</span>
                     </td>
                     <td> 02312 </td>
                     <td> $14,500 </td>
                     <td> Development </td>
                     <td> Online Payment </td>
                     <td> 04 Dec 2019 </td>
                     <td>
                       <div class="badge badge-outline-success">Approved</div>
                     </td>
                   </tr>
                   <tr>
                     <td>
                       <div class="form-check form-check-muted m-0">
                         <label class="form-check-label">
                           <input type="checkbox" class="form-check-input">
                         </label>
                       </div>
                     </td>
                     <td>
                       <img src="{{@asset('/assets/images/faces/face4.jpg')}}" alt="image" />
                       <span class="pl-2">Sallie Reyes</span>
                     </td>
                     <td> 02312 </td>
                     <td> $14,500 </td>
                     <td> Website </td>
                     <td> Credit card </td>
                     <td> 04 Dec 2019 </td>
                     <td>
                       <div class="badge badge-outline-success">Approved</div>
                     </td>
                   </tr>
                 </tbody>
               </table>
             </div>
           </div>
         </div>
       </div>
     </div>
     <div class="row">
       <div class="col-md-6 col-xl-4 grid-margin stretch-card">
         <div class="card">
           <div class="card-body">
             <div class="d-flex flex-row justify-content-between">
               <h4 class="card-title">Messages</h4>
               <p class="text-muted mb-1 small">View all</p>
             </div>
             <div class="preview-list">
               <div class="preview-item border-bottom">
                 <div class="preview-thumbnail">
                   <img src="{{@asset('/assets/images/faces/face6.jpg')}}" alt="image" class="rounded-circle" />
                 </div>
                 <div class="preview-item-content d-flex flex-grow">
                   <div class="flex-grow">
                     <div class="d-flex d-md-block d-xl-flex justify-content-between">
                       <h6 class="preview-subject">Leonard</h6>
                       <p class="text-muted text-small">5 minutes ago</p>
                     </div>
                     <p class="text-muted">Well, it seems to be working now.</p>
                   </div>
                 </div>
               </div>
               <div class="preview-item border-bottom">
                 <div class="preview-thumbnail">
                   <img src="{{@asset('/assets/images/faces/face8.jpg')}}" alt="image" class="rounded-circle" />
                 </div>
                 <div class="preview-item-content d-flex flex-grow">
                   <div class="flex-grow">
                     <div class="d-flex d-md-block d-xl-flex justify-content-between">
                       <h6 class="preview-subject">Luella Mills</h6>
                       <p class="text-muted text-small">10 Minutes Ago</p>
                     </div>
                     <p class="text-muted">Well, it seems to be working now.</p>
                   </div>
                 </div>
               </div>
               <div class="preview-item border-bottom">
                 <div class="preview-thumbnail">
                   <img src="{{@asset('/assets/images/faces/face9.jpg')}}" alt="image" class="rounded-circle" />
                 </div>
                 <div class="preview-item-content d-flex flex-grow">
                   <div class="flex-grow">
                     <div class="d-flex d-md-block d-xl-flex justify-content-between">
                       <h6 class="preview-subject">Ethel Kelly</h6>
                       <p class="text-muted text-small">2 Hours Ago</p>
                     </div>
                     <p class="text-muted">Please review the tickets</p>
                   </div>
                 </div>
               </div>
               <div class="preview-item border-bottom">
                 <div class="preview-thumbnail">
                   <img src="{{@asset('/assets/images/faces/face11.jpg')}}" alt="image" class="rounded-circle" />
                 </div>
                 <div class="preview-item-content d-flex flex-grow">
                   <div class="flex-grow">
                     <div class="d-flex d-md-block d-xl-flex justify-content-between">
                       <h6 class="preview-subject">Herman May</h6>
                       <p class="text-muted text-small">4 Hours Ago</p>
                     </div>
                     <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <div class="col-md-6 col-xl-4 grid-margin stretch-card">
         <div class="card">
           <div class="card-body">
             <h4 class="card-title">Portfolio Slide</h4>
             <div class="owl-carousel owl-theme full-width owl-carousel-dash portfolio-carousel" id="owl-carousel-basic">
               <div class="item">
                 <img src="{{@asset('/assets/images/dashboard/Rectangle.jpg')}}" alt="">
               </div>
               <div class="item">
                 <img src="{{@asset('/assets/images/dashboard/Img_5.jpg')}}" alt="">
               </div>
               <div class="item">
                 <img src="{{@asset('/assets/images/dashboard/img_6.jpg')}}" alt="">
               </div>
             </div>
             <div class="d-flex py-4">
               <div class="preview-list w-100">
                 <div class="preview-item p-0">
                   <div class="preview-thumbnail">
                     <img src="{{@asset('/assets/images/faces/face12.jpg')}}" class="rounded-circle" alt="">
                   </div>
                   <div class="preview-item-content d-flex flex-grow">
                     <div class="flex-grow">
                       <div class="d-flex d-md-block d-xl-flex justify-content-between">
                         <h6 class="preview-subject">CeeCee Bass</h6>
                         <p class="text-muted text-small">4 Hours Ago</p>
                       </div>
                       <p class="text-muted">Well, it seems to be working now.</p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <p class="text-muted">Well, it seems to be working now. </p>
             <div class="progress progress-md portfolio-progress">
               <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
             </div>
           </div>
         </div>
       </div> 
     </div> 
   </div>
   <!-- content-wrapper ends --> 
   
   <!-- partial -->
 </div>
 @endsection
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

 <!-- script -->
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