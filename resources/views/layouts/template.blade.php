<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | PPDB SMA Negeri 1 Rawamerta</title>
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png">

    {{-- CSS --}}
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.2/dist/css/splide.min.css">

    {{-- Font --}}
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css" />

    {{-- Library --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.14/sweetalert2.min.css" />

    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.14/sweetalert2.min.js"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @stack('scripts')
    @stack('specifyjs')
</body>

</html>
