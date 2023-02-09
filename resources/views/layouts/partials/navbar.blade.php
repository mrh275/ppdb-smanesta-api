<nav class="navbar">
    <div class="brand">
        <img src="{{ asset('assets/img/LOGO-XS.png') }}" alt="Logo Sekolah" class="brand-img">
        <a href="{{ url('') }}" class="brand-title">PPDB SMAN 1 RAWAMERTA</a>
    </div>

    <div class="menu-wrapper">
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="#" class="nav-link" id="menu-home">Beranda</a>
            </li>
            <li class="nav-item">
                <a href="javascript:void(0)" onclick="userCheck()" class="nav-link" id="menu-register">Daftar</a>
            </li>
            <li class="nav-item">
                <a href="#terms" class="nav-link" id="menu-terms">Persyaratan</a>
            </li>
            <li class="nav-item">
                <a href="#kuota-jalur" class="nav-link" id="menu-kuota">Kuota dan Jalur</a>
            </li>
            <li class="nav-item">
                <a href="{{ url('data-pendaftar') }}" class="nav-link" id="menu-register-list">Data Pendaftar</a>
            </li>
            <li class="nav-item">
                <a href="#faq" class="nav-link" id="menu-faq">FAQ</a>
            </li>
            <li class="nav-item">
                <a href="#contact" class="nav-link" id="menu-contact">Kontak</a>
            </li>
            <li class="relative nav-item dropdown-portal">
                @if (Auth::check())
                    <a href="javascript:void(0)" class="nav-link">{{ Auth::user()->name }}</a>
                    <ul class="absolute invisible transition-all duration-200 ease-in-out bg-white rounded-lg shadow-lg opacity-0 menu-dropdown-portal">
                        <li class="nav-item">
                            <a href="{{ url('admin') }}" class="pl-4 pr-8 nav-link">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('logout') }}" class="pl-4 pr-8 nav-link">Logout</a>
                        </li>
                    </ul>
                @else
                    <a href="javascript:void(0)" class="nav-link" id="login-btn">Login</a>
                @endif
            </li>
        </ul>

        <div class="toggle-darkMode" id="toggle-darkMode">
            <span class="flex w-4 overflow-x-hidden darkMode-btn">
                <i class="text-white bx bxs-moon"></i>
                <i class="text-yellow-600 bx bxs-sun"></i>
            </span>
        </div>
    </div>

    <div class="toggle-menu">
        <span class="burger"></span>
        <span class="burger"></span>
        <span class="burger"></span>
    </div>
</nav>

<div class="fixed top-0 z-50 invisible w-full transition-all duration-300 ease-in-out opacity-0 login-form" id="login-form">
    @include('layouts.partials.forms.login')
</div>
