<nav class="navbar navbar-expand-lg sticky-top bg--color--1 shadow--box--1">

    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'My School') }}
    </a>
    <button class="navbar-toggler animated shake" type="button" data-toggle="collapse" data-target="#collapsenavbar">
            <span class="fa fa-bars menu--icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="collapsenavbar">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto  animated bounceInRight">
            <li class="nav-item"><a href="/" class="text--color--1 nav-link">HOME</a></li>
            <li class="nav-item"><a href="/About-Us" class="text--color--1 nav-link">ABOUT-US</a></li>
            <li class="nav-item"><a href="/Facilities" class="text--color--1 nav-link">FACILITIES</a></li>
            <li class="nav-item"><a href="/Activities" class="text--color--1 nav-link">ACTIVITIES</a></li>
            <li class="nav-item"><a href="/Contact-Us" class="text--color--1 nav-link">CONTACT-US</a></li>
            <li class="nav-item dropdown">
                <a href="" class="text--color--1 nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                    Campus Gallery
                </a>
                <div class="dropdown-menu text-center ">
                    <div class="dropdown-header">Campus Pictures</div> 
                    <a class="dropdown-item" href="/Campus-Pics">Pics</a>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-header">Campus Videos</div> 
                    <a class="dropdown-item" href="/Campus-Videos">Videos</a>
                </div>
            </li>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto animated bounceInRight">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="text--color--1 nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="text--color--1 nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item"><a href="/dashboard" class="text--color--1 nav-link">Dashboard</a></li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="text--color--1 nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>

