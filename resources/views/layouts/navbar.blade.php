    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            {{-- <li class="nav-item d-none d-sm-inline-block">
                <a wire:navigate href="{{ route('dashboard') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li> --}}
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('adminlte3/dist/img/Academic - 02.png') }}" class="user-image img-circle"
                        alt="User Image">
                    <span class="d-none d-md-inline">Abii sikumbang</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <li class="user-header">
                        <img src="{{ asset('adminlte3/dist/img/Academic - 02.png') }}" class="img-circle"
                            alt="User Image">
                        <p>
                            Abii sikumbang
                        <p><span class="badge badge-success mt-1 ">Admin</span></p>
                        </p>
                    </li>
                    <li class="user-footer">
                        @livewire('logout-button')
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
