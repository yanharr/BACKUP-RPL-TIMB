    
    <!-- MENU -->
    <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
        <div class="container">
             <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>

                  <!-- lOGO TEXT HERE -->
                  <a href="/" class="navbar-brand"><img src="{{ asset('images/logo.png') }}" alt=""></a>
             </div>

            <!-- MENU LINKS -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-nav-first">
                    <li><a href="/" class="smoothScroll">Home</a></li>
                    <li {{ Request::is('wisata*') ? 'active' : '' }}><a href="{{ route('wisata.index') }}" class="smoothScroll">Wisata</a></li>
                    <li><a href="/about" class="smoothScroll">About</a></li>
                    <li><a href="/help" class="smoothScroll">Help</a></li>
                </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                @if(Auth::user()->is_admin==0)
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                @elseif(Auth::user()->is_admin==1)
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('mitra.home') }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                @elseif(Auth::user()->is_admin==2)
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('admin.home') }}" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                @endif
                            </li>
                            <li>
                                
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                
                            </li>
                        @endguest
                    </ul>
                
</div>
</section>
