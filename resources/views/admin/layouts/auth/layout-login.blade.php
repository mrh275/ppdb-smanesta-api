<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/admin-login.css') }}">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/fontawesome.min.css" integrity="sha512-TPigxKHbPcJHJ7ZGgdi2mjdW9XHsQsnptwE+nOUWkoviYBn0rAAt0A5y3B1WGqIHrKFItdhZRteONANT07IipA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/solid.min.css" integrity="sha512-LopA1sokwAW/FNZdP+/5q8MGyb9CojL1LTz8JMyu/8YZ8XaCDn1EOm6L7RWIIOHRM7K4jwnHuOmyLZeeeYxSOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- Sweetalert2 --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.14/sweetalert2.min.css" />
</head>

<body>
    @yield('content')

    {{-- Font Awesome Module --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/fontawesome.min.js" integrity="sha512-txsWtB+FOLDRFFsBL75QF7cPI4rqSjVH7Q+jKuaLrEI+uPPfvNfX66+pHF/4pU4pgQS3ptJ25xOvC8Erm+P+rA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/solid.min.js" integrity="sha512-robGDuqUjAwBrf9YcjyPbR0abdwGG0IznoPDeMmmi1tpbssCPv700X+eOodYOl+mpyjodItWzbA7Vu01797KrQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- Sweetalert2 Module --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.14/sweetalert2.min.js"></script>
    @stack('script')
</body>

</html>
