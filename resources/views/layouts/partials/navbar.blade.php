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
            <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link" id="login-btn">Login</a>
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

<div class="login-form fixed z-50 w-full top-0 transition-all ease-in-out duration-300 hidden" id="login-form">
    <div class="bg-zinc-700 bg-opacity-50 py-6 h-screen flex justify-center items-center">
        <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
            <form class="max-w-lg bg-white border rounded-lg mx-auto overflow-hidden">
                <div class="flex justify-center items-center bg-gray-100 p-4 relative">
                    <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center">Login PPDB</h2>
                    <button type="button" id="close-login-btn" class="close-login-form absolute text-2xl text-zinc-600 cursor-pointer font-bold top-0.5 right-2">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="flex flex-col gap-4 px-8 pt-4 pb-8">
                    <div>
                        <label for="email" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Email</label>
                        <input name="email" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                    </div>

                    <div>
                        <label for="password" class="inline-block text-gray-800 text-sm sm:text-base mb-2">Password</label>
                        <input name="password" class="w-full bg-gray-50 text-gray-800 border focus:ring ring-indigo-300 rounded outline-none transition duration-100 px-3 py-2" />
                    </div>

                    <button class="block bg-gray-800 hover:bg-gray-700 active:bg-gray-600 focus-visible:ring ring-gray-300 text-white text-sm md:text-base font-semibold text-center rounded-lg outline-none transition duration-100 px-8 py-3">Log in</button>
                </div>
            </form>
        </div>
    </div>
</div>
