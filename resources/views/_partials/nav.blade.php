<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <strong class="is-size-4">Amboss</strong>
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item">
        Tour
      </a>
      <a class="navbar-item">
        Pricing
      </a>
      <a class="navbar-item">
        Student Score
      </a>
    </div>

    <div class="navbar-end">
      <span class="navbar-item">
        @if (Auth::guest())
          <a class="button is-primary" id="loginStyle" href="{{ route('login') }}">Login</a>
          <a class="button is-primary" id="loginStyle" href="{{ route('admin.login') }}">Admin Login</a>
          <a class="button is-primary" href="{{ route('register') }}">Register</a>
          @else
              <div class="navbar-item has-dropdown is-hoverable">
                  <a class="navbar-link" href="#">{{ Auth::user()->name }}</a>

                  <div class="navbar-dropdown">
                      <a class="navbar-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                          Logout
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </div>
              </div>
          @endif
      </span>
    </div>
  </div>
</nav>



<!-- <section class="hero is-info is-large" id="heroImg">
  <div class="hero-head">
    <nav class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item">
            <strong class="is-size-4">Amboss</strong>
          </a>
          <span class="navbar-burger burger" data-target="navbarMenuHeroB">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroB" class="navbar-menu">
          <div class="navbar-end">
            <a class="navbar-item">
              Tour
            </a>
            <a class="navbar-item">
              Pricing
            </a>
            <a class="navbar-item">
              Student Score
            </a>
            <span class="navbar-item">
              @if (Auth::guest())
                <a class="button is-primary" id="loginStyle" href="{{ route('login') }}">Login</a>
                <a class="button is-primary" href="{{ route('register') }}">Register</a>
                @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link" href="#">{{ Auth::user()->name }}</a>

                        <div class="navbar-dropdown">
                            <a class="navbar-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                @endif
            </span>
          </div>
        </div>
      </div>
    </nav>
  </div>
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title has-text-black">
        <strong class="is-size-2">MEDICAL KNOWLEDGE DISTILLED</strong>
      </h1>
      <h2 class="subtitle has-text-black is-size-4">
        Welcome to a new era of medical education
      </h2>
    </div>
  </div>
</section> -->