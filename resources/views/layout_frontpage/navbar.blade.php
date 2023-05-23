<nav class="navbar navbar-default navbar-fixed-top navbar-color-on-scroll" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=" {{ route('applicant.index') }}">
                {{ config("app.name", "Laravel") }}
            </a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">flag</i> Languages
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-with-icons">
                        <li>
                            <a href="{{ route('language', 'en') }}">
                                <img src="{{ asset('flag/us.svg') }}" alt="user-image" class="mr-1" height="12" />
                                <span class="align-middle">English</span>
                            </a>
                            <a href="{{ route('language', 'vi') }}">
                                <img src="{{ asset('flag/vn.svg') }}" alt="user-image" class="mr-1" height="12" />
                                <span class="align-middle">Tiếng Việt</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @if(!auth()->check())
                <li class="button-container">
                    <a href="{{ route('login') }}" target="" class="btn btn-rose btn-round">
                        <i class="fa fa-user"></i> Đăng nhập
                    </a>
                </li>
                @endif

                <li class="dropdown">
                    @if(auth()->check())
                    <a href="#pablo" class="profile-photo dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span class="profile-photo-small">
                            @if(auth()->user()->avatar !== 'null')
                            <img src="{{ asset('/storage/avatars/'. auth()->user()->avatar)}}" alt="Circle Image"
                                class="img-circle img-responsive" style="height: 35px; width: 35px" />
                            @endif
                            <span class="account-user-name" style="float: right">{{ auth()->user()->name}}</span>
                        </span>
                        <div class="ripple-container"></div>
                    </a>
                    @endif
                    <ul class="dropdown-menu">
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome !</h6>
                        </div>
                        @if(auth()->check())
                        <li>
                            <a href="{{route('profile', auth()->user())}}">
                                <i class="material-icons">account_circle</i>
                                Profile
                            </a>
                        </li>
                        @endif

                        <li>
                            <a href="{{ route('logout') }}">
                                <i class="fa fa-sign-out"></i>Sign out
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>