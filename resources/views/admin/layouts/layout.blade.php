<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from techzaa.in/larkon/admin/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Feb 2026 19:27:16 GMT -->
<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Welcome | Larkon - Responsive Admin Dashboard Template</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="A fully responsive premium admin dashboard template" />
     <meta name="author" content="Techzaa" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />

     <!-- App favicon -->
     <link rel="shortcut icon" href="{{asset('admin_assets/images/favicon.ico')}}">

     <!-- Vendor css (Require in all Page) -->
     <link href="{{asset('admin_assets/css/vendor.min.css')}}" rel="stylesheet" type="text/css" />

     <!-- Icons css (Require in all Page) -->
     <link href="{{asset('admin_assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

     <!-- App css (Require in all Page) -->
     <link href="{{asset('admin_assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />

     <!-- Theme Config js (Require in all Page) -->
     <script src="{{asset('admin_assets/js/config.js')}}"></script>
</head>

<body>

     <!-- START Wrapper -->
     <div class="wrapper">


          <!-- ========== Topbar Start ========== -->

          @include('admin.layouts.top-bar')


          <!-- ========== Topbar End ========== -->
          
          <!-- ========== App Menu Start ========== -->

          
          @include('admin.layouts.sidebar')
          
          <!-- ========== App Menu End ========== -->

          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container-xxl">

                    @yield('content')
               </div>
               <!-- End Container Fluid -->

               <!-- ========== Footer Start ========== -->
               @include('admin.layouts.footer')
               <!-- ========== Footer End ========== -->

          </div>
          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->

     </div>
     <!-- END Wrapper -->

     <!-- Vendor Javascript (Require in all Page) -->
     <script src="{{asset('admin_assets/js/vendor.js')}}"></script>

     <!-- App Javascript (Require in all Page) -->
     <script src="{{asset('admin_assets/js/app.js')}}"></script>

</body>


<!-- Mirrored from techzaa.in/larkon/admin/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Feb 2026 19:27:16 GMT -->
</html>