<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="../../assets1/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../../assets1/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="../../assets1/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="../../assets1/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="../../assets1/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../../assets1/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="../../assets1/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../../assets1/css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="../../assets1/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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
       <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
              
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                         <li class="nav-item"> 
                    </li> 
                         <li class="nav-item">
                            <a class="nav-link"></a>
                         </li>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <div class="navbar-default sidebar" role="navigation">
                       <div class="sidebar-nav slimscrollsidebar">
                
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="../../nilai_siswa" class="waves-effect"><i class="fa fa-fw" aria-hidden="true"></i>Nilai Siswa</a>
                    </li>
                    

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
                        <h4 class="page-title">Mahasiswa</h4> </div>
                    
                </div>
                <!-- /.row -->
                <!-- .row -->
                @foreach($kelas as $data)
                <h4>Prodi :  {{ $data->prodi }}</h2>
                <h4>Konsentrasi : {{ $data->konsentrasi }}</h2>
                <h4>Kelas : {{ $data->kelas }}</h2>
              @endforeach
                @foreach($mhs as $datan)
                <h4>NIM :  {{ $datan->nim }}</h2>
                <h4>Nama : {{ $datan->nama }}</h2>
              @endforeach
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Semester</th>
                  <th>Matakuliah</th>
                  <th>nilai</th>
                </tr>
                </thead>
               
                @foreach($nilai as $datam)
                <tr>
                <td> {{ $datam->semester }}</td>
                <td> {{ $datam->kd_mk }}</td>
                <td> {{ $datam->nilai }}</td>
              </tr>
              @endforeach
              </table>
              <hr class="love">
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
    <script src="../../assets1/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets1/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../../assets1/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="../../assets1/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../../assets1/js/waves.js"></script>
    <!--Counter js -->
    <script src="../../assets1/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="../../assets1/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="../../assets1/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
    <script src="../../assets1/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="../../assets1/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../../assets1/js/custom.min.js"></script>
    <script src="../../assets1/js/dashboard1.js"></script>
    <script src="../../assets1/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
</body>

</html>