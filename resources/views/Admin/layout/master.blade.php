  <!DOCTYPE html>
  <html lang="en">

  <head>
      @yield('head')
  </head>

  <body>
      <div class="container-scroller">
          <!-- partials/sidebar-->
          @include('Admin.partials.sidebar')
          <!-- partial -->
          <div class="container-fluid page-body-wrapper">
              <!-- partials/navbar-->
              @include('Admin.partials.navbar')
              <!-- partial -->
              @yield('content')
              <!-- main-panel ends -->
          </div>
          <!-- page-body-wrapper ends -->
      </div>
      @yield('scripts')
  </body>

  </html>