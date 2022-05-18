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
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>
    <div class="main-wrapper">
        @include('layouts.partials.navbar')
        @yield('content')
        @include('layouts.partials.footer')
    </div>

    {{-- JS --}}
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
