<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{ $title }} | PPDB SMA Negeri 1 Rawamerta</title>
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/css/splide.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css" />
    @if (Request::segment(1) == 'register')
        <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    @endif

    {{-- Library --}}
    @if (Request::segment(1) == 'register')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.14/sweetalert2.min.css" />
        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    @endif
    @if (Request::segment(1) == 'data-pendaftar')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
        <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    @endif

</head>

<body>
    @stack('topjs')
    <div class="main-wrapper">
        @include('layouts.partials.navbar')
        @yield('content')
        @include('layouts.partials.footer')
    </div>

    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/js/splide.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.js"></script>
    @if (Request::segment(1) == 'register')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.14/sweetalert2.min.js"></script>
    @endif
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
    @stack('specifyjs')
    <script>
        if (
            window.location.pathname == "/data-pendaftar"
        ) {
            document.querySelector("#menu-home").attributes.href.value =
                "{{ url('/') }}";
            document.querySelector("#menu-terms").attributes.href.value =
                "{{ url('/#terms') }}";
            document.querySelector("#menu-kuota").attributes.href.value =
                "{{ url('/#kuota-jalur') }}";
            document.querySelector("#menu-faq").attributes.href.value =
                "{{ url('/#faq') }}";
            document.querySelector("#menu-contact").attributes.href.value =
                "{{ url('/#contact') }}";
        }
    </script>
</body>

</html>
