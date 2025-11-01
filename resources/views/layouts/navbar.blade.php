<nav class="main-header navbar navbar-expand navbar-white navbar-light shadow-sm">
    @if (request()->routeIs('profile'))
        <a class="nav-link d-none" data-widget="pushmenu" href="#" role="button">
            <i class="fas fa-bars"></i>
        </a>
    @else
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
            <i class="fas fa-bars"></i>
        </a>
    @endif
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a wire:navigate href="{{ route('dashboard') }}" class="nav-link font-weight-bold">Home</a>
        </li>
        <!-- Profile Dropdown -->
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle d-flex align-items-center" data-toggle="dropdown">
                <img src="{{ asset('adminlte3/dist/img/Academic - 02.png') }}" class="user-image img-circle elevation-2"
                    alt="User Image" style="width:35px; height:35px; object-fit:cover;">
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right shadow-lg border-0 rounded-lg">
                <!-- User Info -->
                <li class="user-header text-center bg-light p-3 rounded-top">
                    <img src="{{ asset('adminlte3/dist/img/Academic - 02.png') }}"
                        class="img-circle elevation-1 mb-2 mx-auto d-blockmx-auto d-block" alt="User Image"
                        style="width:60px; height:60px; object-fit:cover;">
                    <div class="fw-bold ">
                        {{ Auth::user()->nama }}
                    </div>
                    <p>
                        <span
                            class="badge {{ Auth::user()->role == 'superadmin' ? 'badge-success' : 'badge-primary' }} px-3 py-1 mt-1 shadow-sm">
                            {{ Auth::user()->role }}
                        </span>
                    </p>
                </li>

                <!-- Menu -->
                <li>
                    <a wire:navigate href="{{ route('profile') }}" class="dropdown-item d-flex align-items-center">
                        <i class="fas fa-user mr-2 text-primary text-center"></i>
                        <span>Profile</span>
                    </a>
                </li>

                <li class="dropdown-divider"></li>

                <!-- Logout -->
                <li class="user-footer px-3 pb-2">
                    @livewire('logout-button')
                </li>
            </ul>
        </li>
    </ul>
</nav>


{{-- <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a wire:navigate href="{{ route('dashboard') }}" class="nav-link">Home</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('adminlte3/dist/img/Academic - 02.png') }}" class="user-image img-circle"
                        alt="User Image">
                    <span class="d-none d-md-inline"></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="user-header">
                        <img src="{{ asset('adminlte3/dist/img/Academic - 02.png') }}" class="img-circle"
                            alt="User Image">
                        <div>{{ Auth::user()->name }}</div>
                        <p><span class="badge badge-success mt-1 ">Admin</span></p>
                    </li>
                    <li>
                        <a wire:navigate href="{{ route('profile') }}" class="dropdown-item">
                            <i class="fas fa-user mr-2"></i> {{ __('Profile') }}
                        </a>
                    </li>
                    <li class="user-footer">
                        @livewire('logout-button')
                    </li>
                </ul>
            </li>
        </ul>
    </nav> --}}
