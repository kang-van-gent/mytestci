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
    <title>Add customer</title>



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
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->

                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?php echo base_url() ?>"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Dashboard</span>
                            </a>
                        </li>

                        <li class="text-center p-20 upgrade-btn">
                            <a href="<?php echo site_url('dashboard/logout') ?>"
                                class="btn d-grid btn-danger text-white">
                                Log out</a>
                        </li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile page</h4>
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
                <!-- Row -->
                <div class="row">
                    <!-- Column -->

                    <!-- Column -->
                    <!-- Column -->
                    <form action="<?php echo site_url('profile/adding') ?>" method="POST">
                        <div class="col-lg-12 col-xlg-9 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form class="form-horizontal form-material">
                                        <div class="form-group mb-4">
                                            <label class="col-md-12 p-0">Full Name</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="text" name="username" class="form-control p-0 border-0"
                                                    value="<?php echo set_value('username'); ?>">

                                            </div>
                                            <?php echo form_error('username'); ?>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="example-email" class="col-md-12 p-0">Email</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="email" name="email" class="form-control p-0 border-0"
                                                    value="<?php echo set_value('email'); ?>" id="example-email">
                                            </div>
                                            <?php echo form_error('email'); ?>
                                        </div>

                                        <div class="form-group mb-4">
                                            <label class="col-md-12 p-0">Phone No</label>
                                            <div class="col-md-12 border-bottom p-0">
                                                <input type="text" name="phone" class="form-control p-0 border-0"
                                                    value="<?php echo set_value('phone'); ?>">
                                            </div>
                                            <?php echo form_error('phone'); ?>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label class="col-md-12 p-0">Gender</label>
                                            <div class="col-md-4 border-bottom p-0">

                                                <select class="form-select shadow-none border-0" name="gender">
                                                    <option value="male" default>male</option>
                                                    <option value="female">female</option>
                                                    <option value="etc">etc</option>

                                                </select>
                                            </div>
                                        </div>



                                        <div class="form-group mb-4">
                                            <div class="col-sm-12">
                                                <a href="<?php echo base_url() ?>"
                                                    class="btn btn-danger text-white">Cancel</a>
                                                <button class="btn btn-success text-white">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </form>

                    <!-- Column -->
                </div>
                <!-- Row -->
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

            <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer>
            <!-- ============================================================== -->
       
     <!-- End footer -->
            <!-- ============================================================== -->
        </div>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- ============================================================== -->
    </div>


</body>

</html>