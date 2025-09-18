<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('adminlte3/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle">
        <span class="brand-text font-weight-light">Manajemen Data</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a wire:navigate href="{{ route('dashboard') }}" class="nav-link @yield('menuDashboard')">
                        <i class="nav-icon fas fa-home"></i>
                        Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-header">SUPER ADMIN</li>

                <li class="nav-item">
                    <a wire:navigate href="{{ route('superadmin.user') }}" class="nav-link @yield('menuSuperadminUser')">
                        <i class="nav-icon far fa-user-circle"></i>
                        <p>
                            Data User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a wire:navigate href="{{ route('superadmin.kategori') }}" class="nav-link @yield('menuSuperadminKategori')">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            Data Kategori
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a wire:navigate href="{{ route('superadmin.barang') }}" class="nav-link @yield('menuSuperadminBarang')">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Data Barang
                        </p>
                    </a>
                </li>

                <li class="nav-header">ADMIN</li>
                <li class="nav-item">
                    <a wire:navigate href="{{ route('admin.barang') }}" class="nav-link @yield('menuAdminBarang')">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                            Data Barang
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
