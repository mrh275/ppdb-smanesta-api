<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ $title }} | Admin PPDB SMA Negeri 1 Rawamerta</title>
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins') }}/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins') }}/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins') }}/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins') }}/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/admin/dist') }}/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins') }}/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins') }}/daterangepicker/daterangepicker.css" />
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins') }}/summernote/summernote-bs4.min.css" />
    @if (Request::segment(2) == 'data-pendaftar' || Request::segment(2) == 'seleksi-pendaftar' || Request::segment(2) == 'hasil-seleksi')
        <!-- DataTables -->
        <link rel="stylesheet" href="{{ asset('assets/admin/plugins') }}/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="{{ asset('assets/admin/plugins') }}/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="{{ asset('assets/admin/plugins') }}/datatables-buttons/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.14/sweetalert2.min.css" />
    @endif

    <style>
        #data-pendaftar tbody tr {
            cursor: pointer;
        }

        #data-pendaftar tbody tr:hover {
            background: #fef3c7;
        }

        #data-pendaftar tbody tr.selected {
            background: #bae6fd;
        }

    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">

    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('assets/img/LOGO-XS.png') }}" alt="SMAN 1 Rawamerta Logo" height="60" width="60" />
        </div>
        @include('admin.layouts.navbar-admin')
        @include('admin.layouts.sidemenu-admin')
        @yield('content')
        @include('admin.layouts.footer-admin')
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/admin/plugins') }}/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('assets/admin/plugins') }}/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge("uibutton", $.ui.button);
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/admin/plugins') }}/bootstrap/js/bootstrap.bundle.min.js"></script>
    @if (Request::segment(2) == 'data-pendaftar' || Request::segment(2) == 'seleksi-pendaftar' || Request::segment(2) == 'hasil-seleksi')
        <!-- DataTables  & Plugins -->
        <script src="{{ asset('assets/admin/plugins') }}/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ asset('assets/admin/plugins') }}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="{{ asset('assets/admin/plugins') }}/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="{{ asset('assets/admin/plugins') }}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="{{ asset('assets/admin/plugins') }}/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="{{ asset('assets/admin/plugins') }}/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="{{ asset('assets/admin/plugins') }}/jszip/jszip.min.js"></script>
        <script src="{{ asset('assets/admin/plugins') }}/pdfmake/pdfmake.min.js"></script>
        <script src="{{ asset('assets/admin/plugins') }}/pdfmake/vfs_fonts.js"></script>
        <script src="{{ asset('assets/admin/plugins') }}/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="{{ asset('assets/admin/plugins') }}/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="{{ asset('assets/admin/plugins') }}/datatables-buttons/js/buttons.colVis.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.14/sweetalert2.min.js"></script>
    @endif
    <!-- ChartJS -->
    <script src="{{ asset('assets/admin/plugins') }}/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{ asset('assets/admin/plugins') }}/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{ asset('assets/admin/plugins') }}/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('assets/admin/plugins') }}/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('assets/admin/plugins') }}/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('assets/admin/plugins') }}/moment/moment.min.js"></script>
    <script src="{{ asset('assets/admin/plugins') }}/moment/moment-with-locales.min.js"></script>
    <script src="{{ asset('assets/admin/plugins') }}/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('assets/admin/plugins') }}/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="{{ asset('assets/admin/plugins') }}/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('assets/admin/plugins') }}/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/admin/dist') }}/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/admin/dist') }}/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('assets/admin/dist') }}/js/pages/dashboard.js"></script>
    @stack('scripts')
</body>

</html>
