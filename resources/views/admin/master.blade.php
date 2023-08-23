<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/')}}admin/assets/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}admin/assets/node_modules/datatables.net-bs4/css/responsive.dataTables.min.css">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    @include('admin.includes.style')
</head>
<body class="skin-blue fixed-layout">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        @include('admin.includes.header')
        <!-- End Topbar header -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        @include('admin.includes.sidebar')
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- Container fluid  -->
            <div class="container-fluid">
                @yield('body')
            </div>
        <!-- End Container fluid  -->
        </div>
        <!-- End Page wrapper  -->

        <!-- footer -->
        <footer class="footer">
            © {{date('Y-m-d')}} Design @ Developed by
            <a href="">Urmi_Ghosh</a>
        </footer>
        <!-- End footer -->
    </div>
    @include('admin.includes.script')


</body>
</html>
