<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/jqvmap/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/daterangepicker/daterangepicker.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">     --}}
    @yield('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            {{-- <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60"> --}}
        </div>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" --}}
                {{-- style="opacity: .8"> --}}
                {{-- <span class="brand-text font-weight-light">AdminLTE 3</span> --}}
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item menu-open">
                            <a href="{{ route('admin.home') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">

                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Category
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>

                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.category.home') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.category.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    User
                                    <i class="right fas fa-angle-left"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.users.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.users.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add</p>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tree"></i>
                                <p>
                                    Product
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.products.home') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.products.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Role
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.groups.home') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('admin.groups.add') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add</p>
                                    </a>
                                </li>


                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.bill.bill') }}" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Order
                                </p>

                            </a>

                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>
    </div>
    <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/sparklines/sparkline.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
    </script>
    <script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('assets/admin/dist/js/adminlte.js') }}"></script>
    {{-- <script src="{{ asset('assets/admin/dist/js/demo.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/admin/dist/js/pages/dashboard.js') }}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" type="text/javascript"></script>
    <script>
        // $.widget.bridge('uibutton', $.ui.button)
    </script>

    @yield('js')
    @method('scripts')

</body>

</html>
