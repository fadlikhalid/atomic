<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Ample Admin Lite Template by WrapPixel</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/css/admin/plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="/css/admin/css/style.min.css" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        @include('includes.adminheader')
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Basic Table</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Book Table</h3>
                            <p class="text-muted">Add class <code>.table</code></p>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Book Name</th>
                                            <th class="border-top-0">Author</th>
                                            <th class="border-top-0">Published Date</th>
                                            <th class="border-top-0">Total Page</th>
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Harry Potter</td>
                                            <td>J. K. Rowling</td>
                                            <td>June 26, 1997</td>
                                            <td>240 Page</td>
                                            <td><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Harry Potter</td>
                                            <td>J. K. Rowling</td>
                                            <td>June 26, 1997</td>
                                            <td>240 Page</td>
                                            <td><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Harry Potter</td>
                                            <td>J. K. Rowling</td>
                                            <td>June 26, 1997</td>
                                            <td>240 Page</td>
                                            <td><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Harry Potter</td>
                                            <td>J. K. Rowling</td>
                                            <td>June 26, 1997</td>
                                            <td>240 Page</td>
                                            <td><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Harry Potter</td>
                                            <td>J. K. Rowling</td>
                                            <td>June 26, 1997</td>
                                            <td>240 Page</td>
                                            <td><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Harry Potter</td>
                                            <td>J. K. Rowling</td>
                                            <td>June 26, 1997</td>
                                            <td>240 Page</td>
                                            <td><button type="button" class="btn btn-outline-primary">Edit</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/css/admin/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/css/admin/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/css/admin/js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="/css/admin/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/css/admin/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/css/admin/js/custom.js"></script>
</body>

</html>