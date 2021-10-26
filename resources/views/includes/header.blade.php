<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img width="75px" height="auto" src="assets/img/favicon.png" alt="logo">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto {{request()->routeIs('home') ? 'active' : ''}}" href="{{route('home')}}">Home</a></li>
          <li class="dropdown"><a href="#" class="{{request()->routeIs('service') ? 'active' : ''}}" href="{{route('service')}}"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Layanan Utama</a></li>
              <li><a href="#">Add on</a></li>
              <li><a href="#">Package</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto {{request()->routeIs('integration') ? 'active' : ''}}" href="{{route('integration')}}">Integrasi</a></li>
          <li><a class="nav-link scrollto {{request()->routeIs('case_study') ? 'active' : ''}}" href="{{route('case_study')}}">Studi kasus</a></li>
          <li class="dropdown"><a href="#" class="{{request()->routeIs('corporate') ? 'active' : ''}}" href="{{route('corporate')}}" href="{{route('service')}}"><span>Korporasi</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">GCG</a></li>
              <li><a href="#">CSR</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto {{request()->routeIs('about') ? 'active' : ''}}" href="{{route('about')}}">Tentang kami</a></li>
          {{-- <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="#about">Get Started</a></li> --}}
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>