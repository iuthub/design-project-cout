<header>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="logo">
            <a class="navbar-brand" href="{{route('home')}}">
                <img src="img/logo.png">
            </a>
        </div>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">

                <a class="nav-link a-fx " href="{{route('timeline')}}"><i class="fa fa-newspaper"></i> <span class="menu-name">Timeline</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link a-fx" href="{{route('find-friends')}}"><i class="fa fa-search"></i> <span class="menu-name">Find Friends</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link a-fx" href="{{route('notifications')}}"><i class="fa fa-bell"></i> <span class="menu-name">Notifications</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link a-fx" href="{{route('profile')}}"><i class="fa fa-user"></i> <span class="menu-name">Profile</span></a>
            </li>
        </ul>
        <!-- Nav Item - User Information -->
        <ul class="menu-profile">
            <li class="nav-item dropdown no-arrow right">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-none d-lg-inline small">{{Auth::user()->first_name}}</span>
                    <img class="img-profile rounded-circle" src="https://scontent.fhen1-1.fna.fbcdn.net/v/t1.0-1/p160x160/41684578_2094736747509295_6358971459963977728_n.jpg?_nc_cat=107&_nc_ht=scontent.fhen1-1.fna&oh=4ecc33d9284a761c76ed6a3580659b08&oe=5D64F6FA">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs"></i>
                        Settings
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{route('logout')}}">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>
</header>