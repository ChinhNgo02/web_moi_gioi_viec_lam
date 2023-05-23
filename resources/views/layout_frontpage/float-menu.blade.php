<ul class="list-unstyled" style="position:fixed; bottom:50px; right:50px;">
    <li class="dropdown notification-list d-lg-none">
        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
            aria-haspopup="false" aria-expanded="false">
            <i class="dripicons-search noti-icon"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
            <form class="p-3">
                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
            </form>
        </div>
    </li>
    <li class="dropdown notification-list topbar-dropdown">
        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="" role="button"
            aria-haspopup="false" aria-expanded="false">
            <img src="{{ asset('flag/us.svg')}}" alt="user-image" class="mr-0 mr-sm-1" height="12">
            <span class="align-middle d-none d-sm-inline-block" style="color:redd;">English</span> <i
                class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu" style="">

            <!-- item-->
            <a href="" class="dropdown-item notify-item">
                <img src="{{ asset('flag/vn.svg')}}" alt="user-image" class="mr-1" height="12">
                <span class="align-middle">Tiếng Việt</span>
            </a>
        </div>
    </li>
</ul>