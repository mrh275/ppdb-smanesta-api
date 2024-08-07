<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ $title }} | Admin PPDB SMK Ar-Raihan Cikampek</title>
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon-arraihan.png') }}" type="image/png">
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
    @if (Request::segment(2) == 'data-pendaftar')
        <link rel="stylesheet" href="{{ asset('assets/css/edit-registrant.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/mohamadadithya/calendarify@latest/dist/calendarify.min.css">
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
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('assets/admin/dist') }}/js/pages/dashboard.js"></script>
    @stack('scripts')

    @if (Request::segment(2) == 'data-pendaftar')
        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/gh/mohamadadithya/calendarify@latest/dist/calendarify.iife.js"></script>
        <script>
            const datepicker = new Calendarify('.date-input', {
                isDark: false,
                zIndex: 9999,
                position: 'bottom-start',
                quickActions: false
            });
            datepicker.init();
            // Enabled select2 library
            $(document).ready(function() {
                $('.form-select').select2({
                    width: 'resolve',
                });
            });
        </script>
    @endif
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
