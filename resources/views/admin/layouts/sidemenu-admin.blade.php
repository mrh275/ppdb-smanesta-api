<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin') }}" class="brand-link">
        <img src="{{ asset('assets/img/LOGO-XS.png') }}" alt="SMAN 1 Rawamerta Logo" class="brand-image" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">PPDB SMANESTA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/admin/dist/img/avatar.png') }}" class="img-circle elevation-2" alt="User Image" />
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('/admin') }}" class="nav-link {{ $title == 'Dashboard' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/data-pendaftar') }}" class="nav-link {{ $title == 'Data Pendaftar' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Data Pendaftar
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/seleksi-pendaftar') }}" class="nav-link {{ $title == 'Seleksi Pendaftar' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-edit"></i>
                        <p>
                            Seleksi Pendaftar
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/hasil-seleksi') }}" class="nav-link {{ $title == 'Hasil Seleksi' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-check"></i>
                        <p>
                            Hasil Seleksi
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
