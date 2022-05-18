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
            <a href="{{ url('terms') }}" class="nav-link">Persyaratan</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('faq') }}" class="nav-link">FAQ</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('contact') }}" class="nav-link">Kontak</a>
        </li>
    </ul>

    <div class="toggle-menu">
        <span class="burger"></span>
        <span class="burger"></span>
        <span class="burger"></span>
    </div>
</nav>
