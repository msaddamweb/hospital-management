<!DOCTYPE html>
<html>
<head>

@include('layouts.backend._head')

</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

      @include('layouts.backend._header_top')
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        @include('layouts.backend._left_nav')

    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

             @yield('content')

            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">
            @include('layouts.backend._footer')
        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
    <div class="side-bar right-bar">
        @include('layouts.backend._right_side_nav')
    </div>
    <!-- /Right-bar -->

</div>
<!-- END wrapper -->


@include('layouts.backend._script')

</body>
</html>
