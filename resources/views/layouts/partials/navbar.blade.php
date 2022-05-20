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
                <a href="{{ url('register') }}" class="nav-link" id="menu-register">Daftar</a>
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
                <a href="#contact" class="nav-link">Kontak</a>
            </li>
        </ul>

        <div class="toggle-darkMode" id="toggle-darkMode">
            <span class="darkMode-btn flex w-4 overflow-x-hidden">
                <i class="bx bxs-moon text-white"></i>
                <i class="bx bxs-sun text-yellow-600"></i>
            </span>
        </div>
    </div>

    <div class="toggle-menu">
        <span class="burger"></span>
        <span class="burger"></span>
        <span class="burger"></span>
    </div>
</nav>
