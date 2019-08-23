<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.meta')
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.php">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        <!--This is dark logo icon--><img src="assets1/plugins/images/admin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="assets1/plugins/images/admin-logo-dark.png" alt="home" class="light-logo" />
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="assets1/plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="assets1/plugins/images/admin-text-dark.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->

                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    </ul>
                </div>
                    <li>
                    
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="nilai_siswa" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>lihat Nilai</a>
                    </li>
                    <!-- <li>
                        <a href="#" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Cek Nilai</a>
                    </li>
                     -->

                </ul>
                
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
 <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Mahasiswa</h4> </div>
                   
                </div>
                <!-- /.row -->
                <!-- .row -->
                
              <table id="example1" class="table table-bordered table-striped">
                               <thead>
                <tr>
                  <th>Nim</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Telphone</th>
                  <th>Alamat</th>                
                  <th>Aksi</th>
                </tr>
                </thead>
              </table>
              <hr class="love">=
            </div>
                </div>
                <!-- /.row -->
            </div>
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets1/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="assets1/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="assets1/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="assets1/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="assets1/js/waves.js"></script>
    <!--Counter js -->
    <script src="assets1/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="assets1/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="assets1/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="assets1/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="assets1/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="assets1/js/custom.min.js"></script>
    <script src="assets1/js/dashboard1.js"></script>
    <script src="assets1/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
</body>

</html>
