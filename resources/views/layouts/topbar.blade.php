<div class="topbar">
    <div class="topbar-left">
        <a href="/" class="logo"><span>{{ env('APP_NAME') }}</span></a>
    </div>
    <nav class="navbar-custom">
        <ul class="list-inline float-right mb-0">
            <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">        
                    <a href="/profile" class="dropdown-item notify-item">
                    <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                    </a>
                    <a href="/logout" class="dropdown-item notify-item">
                    <i class="zmdi zmdi-power"></i> <span>Logout</span>
                    </a>
                </div>
            </li>
        </ul>
        <ul class="list-inline menu-left mb-0">
            <li class="float-left">
                <button class="button-menu-mobile open-left waves-light waves-effect">
                <i class="zmdi zmdi-menu"></i>
                </button>
            </li>
        </ul>
    </nav>
</div>