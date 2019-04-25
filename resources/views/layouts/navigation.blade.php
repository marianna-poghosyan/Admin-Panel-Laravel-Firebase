<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">Example user</strong>
                            </span> <span class="text-muted text-xs block">Example menu <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="{{ isActiveRoute('main') }}">
                <a href="{{ url('/') }}"><i class="fa fa-th-large"></i> <span class="nav-label">My Account</span></a>
            </li>
            <li class="{{ isActiveRoute('trips') }}">
                <a href="{{ url('/trips') }}"><i class="fa fa-th-large"></i> <span class="nav-label">My Trips</span> </a>
            </li>
            <li class="{{ isActiveRoute('stay') }}">
                <a href="{{ url('/stay') }}"><i class="fa fa-th-large"></i> <span class="nav-label">My Stay</span> </a>
            </li>
            <li class="{{ isActiveRoute('food') }}">
                <a href="{{ url('/food') }}"><i class="fa fa-th-large"></i> <span class="nav-label">My Food</span> </a>
            </li>
            <li class="{{ isActiveRoute('friends') }}">
                <a href="{{ url('/friends') }}"><i class="fa fa-th-large"></i> <span class="nav-label">My Friends</span> </a>
            </li>
            <li class="{{ isActiveRoute('visa') }}">
                <a href="{{ url('/visa') }}"><i class="fa fa-th-large"></i> <span class="nav-label">My Visa</span> </a>
            </li>
            <li class="{{ isActiveRoute('session') }}">
                <a href="{{ url('/session') }}"><i class="fa fa-th-large"></i> <span class="nav-label">My Session</span> </a>
            </li>
            <li class="{{ isActiveRoute('calendar') }}">
                <a href="{{ url('/calendar') }}"><i class="fa fa-th-large"></i> <span class="nav-label">My Calendar</span> </a>
            </li>
            <li class="{{ isActiveRoute('tables') }}">
                <a href="{{ url('/tables') }}"><i class="fa fa-th-large"></i> <span class="nav-label">Tables</span> </a>
            </li>
        </ul>

    </div>
</nav>
