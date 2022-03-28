<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@include('Backend.layouts.head')
@yield('head')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Backend.layouts.header')
        @yield('header')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('Backend.layouts.sidebar')
        @yield('sidebar')

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
            <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->

     <!-- Main Footer -->
     @include('Backend.layouts.footer')
     @yield('footer')


     <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- end main wrapper  -->
<!-- ============================================================== -->
<!-- Optional JavaScript -->
 <!-- Select2 -->
 <script src="{{asset('assets/select2/js/select2.full.min.js')}}"></script>
 <script type="text/javascript">
     $(document).ready(function() {
         $('.select2').select2();


     });
 </script>
<!-- jquery 3.3.1 -->
<script src="{{asset('assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
<!-- bootstap bundle js -->
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
<!-- slimscroll js -->
<script src="{{asset('assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
<!-- main js -->
<script src="{{asset('assets/libs/js/main-js.js')}}"></script>
<!-- chart chartist js -->
<script src="{{asset('assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
<!-- sparkline js -->
<script src="{{asset('assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
<!-- morris js -->
<script src="{{asset('assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
<script src="{{asset('assets/vendor/charts/morris-bundle/morris.js')}}"></script>
<!-- chart c3 js -->
<script src="{{asset('assets/vendor/charts/c3charts/c3.min.js')}}"></script>
<script src="{{asset('assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
<script src="{{asset('assets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
<script src="{{asset('assets/libs/js/dashboard-ecommerce.js')}}"></script>
@include('sweetalert::alert')
</body>

</html>
