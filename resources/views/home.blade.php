<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Mini ERP</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins') }}/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('adminLTE/plugins') }}/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins') }}/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins') }}/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminLTE/dist') }}/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins') }}/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins') }}/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('adminLTE/plugins') }}/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-dark" style="background-color: #071828">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button href="#" class="dropdown-item">
                                <i class="fas fa-bell mr-2"></i> Logout
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar elevation-4" style="background-color: #071828">
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('img/logo-minierp2.png') }}" 
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block" style="text-decoration: none;color:wheat">
                            {{ Auth::user()->name }} </a>
                        <!--  diambil dari layouts/app.blade.php -->
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                            <li class="nav-item has-treeview menu-open">
                                <a href="{{ url('/') }}" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-home"></i>
                                    <p>
                                        Home
                                    </p>
                                </a>
                            </li>
                        @can('admin')
                            <li class="nav-item has-treeview menu-open">
                                <a href="{{ url('list-inventory') }}" class="nav-link {{ (request()->is('list-inventory') || request()->is('cetak-resi*')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-box"></i>
                                    <p>
                                        Data Invetory
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                                <a href="{{ url('barang') }}" class="nav-link {{ (request()->is('barang*') || request()->is('checkout*')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-shopping-bag"></i>
                                    <p>
                                        Katalog Barang
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                                <a href="{{ url('list-purchasing') }}" class="nav-link {{ (request()->is('list-purchasing') || request()->is('enter*')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-arrow-right"></i>
                                    <p>
                                        Data Barang Masuk
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                                <a href="{{ url('itemout') }}" class="nav-link {{ (request()->is('itemout*')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-arrow-left"></i>
                                    <p>
                                        Data Barang Keluar
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview {{ (request()->is('grafik-inventory') || request()->is('grafik-pembelian')) ? 'menu-open' : '' }}">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-chart-pie mr-1"></i>
                                    <p>
                                        Grafik
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item  ">
                                        <a href="{{ url('grafik-inventory') }}" class="nav-link {{ (request()->is('grafik-inventory')) ? 'active' : '' }}">
                                            <p>
                                                Grafik Inventory
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="{{ url('grafik-pembelian') }}" class="nav-link {{ (request()->is('grafik-pembelian')) ? 'active' : '' }}">
                                            <p>
                                                Grafik Pemesanan
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview {{ (request()->is('laporan-masuk') || request()->is('laporan-keluar')) ? 'menu-open' : '' }}">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-file mr-1"></i>
                                    <p>
                                        Laporan
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item  ">
                                        <a href="{{ url('laporan-masuk') }}" class="nav-link {{ (request()->is('laporan-masuk')) ? 'active' : '' }}">
                                            <p>
                                                Barang Masuk
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item  ">
                                        <a href="{{ url('laporan-keluar') }}" class="nav-link {{ (request()->is('laporan-keluar')) ? 'active' : '' }}">
                                            <p>
                                                Barang Keluar
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endcan
                        @can('user')
                            <li class="nav-item has-treeview menu-open">
                                <a href="{{ url('list-pembelian') }}" class="nav-link  {{ (request()->is('list-pembelian')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-shopping-bag"></i>
                                    <p>
                                        Data Pemesanan Barang
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                                <a href="{{ url('supplier') }}" class="nav-link {{ (request()->is('supplier*')) ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-user-alt"></i>
                                    <p>
                                        Data Supplier
                                    </p>
                                </a>
                            </li>
                        @endcan

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper">
            <section class="content">
                @yield('content')
            </section>
        </div>

    </div>


    <!-- jQuery -->

    <script src="{{ asset('adminLTE/plugins') }}/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('adminLTE/plugins') }}/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminLTE/plugins') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ asset('adminLTE/plugins') }}/chart.js/Chart.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <!-- Sparkline -->
    <script src="{{ asset('adminLTE/plugins') }}/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{ asset('adminLTE/plugins') }}/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('adminLTE/plugins') }}/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('adminLTE/plugins') }}/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('adminLTE/plugins') }}/moment/moment.min.js"></script>
    <script src="{{ asset('adminLTE/plugins') }}/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('adminLTE/plugins') }}/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="{{ asset('adminLTE/plugins') }}/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('adminLTE/plugins') }}/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminLTE/dist') }}/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="{{ asset('adminLTE/dist') }}/js/pages/dashboard.js"></script> -->
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('adminLTE/dist') }}/js/demo.js"></script>
    @yield('diagram')
</body>

</html>
