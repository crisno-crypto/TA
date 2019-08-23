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
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
              
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
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
                    <li style="padding: 70px 0 0;">
                        <a href="../dashboard" class="waves-effect"><i class="fa fa-fw" aria-hidden="true"></i>BERANDA</a>
                    </li>
                    <li>
                        <a href="../mahasiswa" class="waves-effect"><i class="fa fa-fw" aria-hidden="true"></i>MAHASISWA</a>
                    </li>
                    <li>
                        <a href="../dosen" class="waves-effect"><i class="fa fa-fw" aria-hidden="true"></i>DOSEN</a>
                    </li>
                    <li>
                        <a href="../matakuliah" class="waves-effect"><i class="fa fa-fw" aria-hidden="true"></i>Mata Kuliah</a>
                    </li>
                    <li>
                        <a href="../kelas" class="waves-effect"><i class="fa fa-fw" aria-hidden="true"></i>Kelas</a>
                    </li>
                    <li>
                        <a href="../inputnilai" class="waves-effect"><i class="fa fa-fw" aria-hidden="true"></i>Input Nilai</a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Cek Nilai</a>
                    </li>
                    

                </ul>
                
            </div>
            

        </div>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Tambah Data Mahasiswa</h4> </div>
                    
                    <div>
                        <div class="white-box">
                          <form action="/mahasiswa/tambahdata" method="post">
                          {{ csrf_field() }}
                        </div>
                                <div class="form-group">
                                    <label class="col-md-12">NIM</label>
                                    <div class="col-md-12">
                                        <input type="text" name="nim" placeholder="" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Nama</label>
                                    <div class="col-md-12">
                                        <input type="text" name="nama" placeholder="" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Kelas</label>
                                    <div class="col-md-12">
                                        <select class="form-control form-control-line" name="kelas">
                                        @foreach($kelas as $kls)
                                            <option value="{{$kls->id_kelas}}">{{$kls->kelas}}</option>
                                        @endforeach
                                        </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Semester</label>
                                    <div class="col-md-12">
                                        <select class="form-control form-control-line" name="semester">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                        </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Jenis Kelamin</label>
                                    <div class="col-md-12">
                                        <input type="radio" name="jk" value="L" checked>Laki-laki
                                        <input type="radio" name="jk" value="P">Perempuan
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Agama</label>
                                    <div class="col-md-12">
                                        <select class="form-control form-control-line" name="agama">
                                            <option>Islam</option>
                                            <option>Kristen</option>
                                            <option>Hindu</option>
                                            <option>Budha</option>
                                            <option>Kong hu chu</option>
                                        </select> 
                                        </div>
                                </div>
                                 <div class="form-group">
                                    <label class="col-md-12">Nomor Telphone</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="" class="form-control form-control-line" name="tlp"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Alamat</label>
                                    <div class="col-md-12">
                                          <input type="text" placeholder="" class="form-control form-control-line" name="alamat">
                                        </div>
                                </div>                                
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="submit" class="btn btn-success" name="Simpan" value="SIMPAN">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
                </div>
                <!-- /.row -->
            </div>
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
        </div>

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