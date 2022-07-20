<?php $this->view('admin-template/header', $data); ?>

<!-- Page Wrapper -->
 <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=ROOT?>admin">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
            <span class="nav-link">Dashboard</span>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>


    <!-- Nav Item - Pricing -->
    <li class="nav-item">
        <a class="nav-link" href="<?=ROOT?>packages">
        <i class="fas fa-dollar-sign"></i>
            <span>Packages</span></a>
    </li>
    <!-- Nav Item - Gallery -->
    <li class="nav-item">
        <a class="nav-link" href="<?=ROOT?>gallery">
        <i class="far fa-image"></i>
            <span>Gallery</span></a>
    </li>
    <!-- Nav Item - home -->
    <li class="nav-item">
        <a class="nav-link" href="<?=ROOT?>home">
        <i class="fas fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?=ROOT?>logout">
        <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="<?=ASSETS?>admin-template/img/undraw_rocket.svg" alt="...">
        <p>Hello Admin</p>
    </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                
                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <p><span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span></p>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Add Pricing Packages</h1>
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- pricing packages form -->
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Package Name</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Package Description</label>
                        <input type="text" placeholder="standard,premium" name="package_description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Package Price</label>
                        <input type="text" name="price" class="form-control">
                    </div>
                    <!-- services table -->
                    <small>Enter services provided in the package</small>
                    <table class="table ">
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>
                            <div class="form-group">
                                <input type="text" name="service_1" class="form-control">
                            </div>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>
                            <div class="form-group">
                                <input type="text" name="service_2" class="form-control">
                            </div>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td>
                            <div class="form-group">
                                <input type="text" name="service_3" class="form-control">
                            </div>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">4</th>
                            <td>
                            <div class="form-group">
                                <input type="text" name="service_4" class="form-control">
                            </div>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">5</th>
                            <td>
                            <div class="form-group">
                                <input type="text" name="service_5" class="form-control">
                            </div>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">6</th>
                            <td>
                            <div class="form-group">
                                <input type="text" name="service_6" class="form-control">
                            </div>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">7</th>
                            <td>
                            <div class="form-group">
                                <input type="text" name="service_7" class="form-control">
                            </div>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Add Package</button>
                </form>

            <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <?php $this->view('admin-template/footer', $data); ?>