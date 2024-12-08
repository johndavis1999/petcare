
<header class="top-header">
    <nav class="navbar navbar-expand align-items-center gap-4">
        <div class="btn-toggle">
            <a href="javascript:;">
                <i class="material-icons-outlined">menu</i>
            </a>
        </div>
        <div class="flex-grow-1"></div>
        <ul class="navbar-nav gap-1 nav-right-links align-items-center">
            <li class="nav-item dropdown">
                <a href="javascrpt:;" class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                    <img src="{{ asset('./admin/user_profile.png') }}" class="rounded-circle p-1 border" width="45" height="45" alt="">
                </a>
                <div class="dropdown-menu dropdown-user dropdown-menu-end shadow">
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{route('profile.edit')}}"><i class="material-icons-outlined">person_outline</i>Profile</a>
                    <hr class="dropdown-divider">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();"
                             class="dropdown-item d-flex align-items-center gap-2 py-2"><i class="material-icons-outlined">power_settings_new</i>Logout</a>
                    </form>
                    
                </div>
            </li>
        </ul>
    </nav>
</header>