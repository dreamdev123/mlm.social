<div class="headerSection fixed-header">
    <nav class="navbar">
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="navbarItem logoItem">
                @if (isset($ACTIVE_TITLE) && $ACTIVE_TITLE != 'social')
                    <a class="navbar-brand pl-1" href="{{ route('dashboard') }}">
                        <img src="{{ asset('images/Logos/Logo1.svg') }}" class="img-fluid logo-1" alt="MLM.Social" title="MLM.Social" />
                    </a>
                @else
                    <a class="navbar-brand pl-1" href="">
                        <img src="{{ asset('images/Logos/Logo1.svg') }}" class="img-fluid logo-1" alt="MLM.Social" title="MLM.Social" />
                    </a>
                @endif
            </div>
            <div class="navbarItem text-center">
                @if (isset($ACTIVE_TITLE))
                    <p class="navbar-title">
                        {{ $ACTIVE_TITLE }}
                    </p>
                @else
                    <p class="landing-navbar-title"><span>BRAND</span>FIELDS</p>
                @endif
            </div>
            <div class="navbarItem d-flex align-items-center justify-content-end" style="gap: 12px">
            @guest
                <a href="{{ route('login') }}" class="py-3 pr-1">
                    <img class="login" src="{{ asset('images/svg/LogIn.svg') }}" alt="Login" />
                </a>
            @else
                @if (isset($ROUTES) && count($ROUTES))
                    @foreach ($ROUTES as $ROUTE)
                        @if (isset($ROUTE['ACTIVE_ROUTE']) && $ROUTE['ACTIVE_ROUTE'])
                            <a href="{{ route($ROUTE['ROUTE']) }}" class="py-3">
                                <span class="nav-icon @if (isset($ACTIVE_PAGE) && $ACTIVE_PAGE == $ROUTE['ACTIVE']) active @endif"><i class="fa-solid fa-circle"></i></span>
                            </a>
                        @endif
                    @endforeach
                @endif
                @if (isset($MANUAL_ROUTE) && isset($VIDEO_ROUTE) && isset($RECEIPT_ROUTE) && isset($ACTIVE_PAGE))
                    <!-- <a href="{{ route($MANUAL_ROUTE) }}"  class="py-3 pr-1">
                        <img class="@if ($ACTIVE_PAGE=='manual') active @endif" src="{{ asset('images/svg/Manual.svg') }}">
                    </a>
                    <a href="{{ route($VIDEO_ROUTE) }}"  class="py-3 pr-1">
                        <img class="@if ($ACTIVE_PAGE=='video') active @endif" src="{{ asset('images/svg/Video.svg') }}">
                    </a>
                    <a href="{{ route($RECEIPT_ROUTE) }}"  class="py-3 pr-1">
                        <img class="@if ($ACTIVE_PAGE=='receipt') active @endif" src="{{ asset('images/svg/Receipt.svg') }}">
                    </a> -->
                @endif
                @if (isset($ACTIVE_CHAT_ROUTES) && $ACTIVE_CHAT_ROUTES)
                    <a href="{{ route('chat.chatting', [ 'ids' => auth()->user()->id . '_' ]) }}"  class="py-3 pr-1">
                        <span class="nav-icon @if ($ACTIVE_PAGE == 'members') active @endif"><i class="fa fa-circle" aria-hidden="true"></i></span>
                    </a>
                    <a href="{{ $CHATTING_ROUTE }}"  class="py-3 pr-1">
                        <span class="nav-icon @if ($ACTIVE_PAGE == 'chatting') active @endif"><i class="fa fa-circle" aria-hidden="true"></i></span>
                    </a>
                @endif
                @if (isset($ACTIVE_TEAM_ROUTES) && $ACTIVE_TEAM_ROUTES)
                    <a href="{{ route('teams.index') }}" class="py-3 pr-1">
                        <span class="nav-icon @if ($ACTIVE_PAGE == 'teams') active @endif"><i class="fa fa-circle" aria-hidden="true"></i></span>
                    </a>
                    <a href="{{ route('own.teams.index') }}" class="py-3 pr-1">
                        <span class="nav-icon @if ($ACTIVE_PAGE == 'own') active @endif"><i class="fa fa-circle" aria-hidden="true"></i></span>
                    </a>
                    <a href="{{ route('team.chat.index', [ 'id' => 0 ]) }}" class="py-3 pr-1">
                        <span class="nav-icon @if ($ACTIVE_PAGE == 'chatting') active @endif"><i class="fa fa-circle" aria-hidden="true"></i></span>
                    </a>
                @endif
                @if (isset($ACTIVE_TITLE) && isset($ACTIVE_LOGOUT))
                    <a href="{{ route('logout') }}" class="py-3 pr-1"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <img src="{{ asset('images/svg/Logout.svg') }}" alt="Logout" class="logout"/>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endif
            @endguest
            </div>
        </div>
    </nav>
</div>
