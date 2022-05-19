<nav class="navbar">
    <div class="brand">
        <img src="{{ asset('assets/img/LOGO-XS.png') }}" alt="Logo Sekolah" class="brand-img">
        <a href="{{ url('') }}" class="brand-title">PPDB SMAN 1 RAWAMERTA</a>
    </div>

    <ul class="nav-menu">
        <li class="nav-item">
            <a href="{{ url('') }}" class="nav-link">Beranda</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('kuota') }}" class="nav-link">Kuota Pendaftaran</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('jalur') }}" class="nav-link">Jalur Pendaftaran</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('terms') }}" class="nav-link">Persyaratan</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('data-pendaftar') }}" class="nav-link">Data Pendaftar</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('faq') }}" class="nav-link">FAQ</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('contact') }}" class="nav-link">Kontak</a>
        </li>
    </ul>

    <div class="toggle-darkMode" id="toggle-darkMode">
        <span class="darkMode-btn flex w-4 overflow-x-hidden">
            <i class="bx bxs-moon text-white"></i>
            <i class="bx bxs-sun text-yellow-600"></i>
        </span>
    </div>

    <div class="toggle-menu">
        <span class="burger"></span>
        <span class="burger"></span>
        <span class="burger"></span>
    </div>
</nav>
