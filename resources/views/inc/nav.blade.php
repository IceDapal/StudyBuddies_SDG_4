<nav class="navbar navbar-expand-md navbar-light bg-faded shadow-none">
    <div class="container">
        <a class="navbar-brand" href="/" style="color: #ffffff; font-size: 30px; font-size: 100; font-transform:uppercase;">Study<span style="font-weight: bold; color: orange;">Buddies</span></a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links --> 
                @guest
                    
                        <li class="nav-item">
                            <a class="btn shadow-sm" style="margin: 10px; background-color: orange; color: #ffffff; padding: 10px 25px;">Donate</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle btn shadow-sm" style="margin: 10px; background-color: #00ff5f; color: #ffffff; padding: 10px 25px;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Volunteer
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @if (Route::has('login'))
                                <a class="dropdown-item" href="{{ route('login') }}">
                                    {{ __('Login') }}
                                </a>
                                @endif

                                @if (Route::has('register'))
                                <a class="dropdown-item" href="{{ route('register') }}">
                                    {{ __('Register') }}
                                </a>
                                @endif
                            </div>
                        </li>
                    
                @else
                    <li class="nav-item">
                        <a href="/dashboard" class="btn shadow-sm btn-outline-light" style="margin: 10px; padding: 10px 25px;">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn shadow-sm" style="margin: 10px; background-color: orange; color: #ffffff; padding: 10px 25px;">Donate</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle btn shadow-sm" style="margin: 10px; background-color: #00ff5f; color: #ffffff; padding: 10px 25px;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>