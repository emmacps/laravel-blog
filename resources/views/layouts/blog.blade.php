<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>
      @yield('title')
    </title>

    <!-- Styles -->
    <link href="{{ asset('css/page.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png')}}">
    <link rel="icon" href="{{ asset('img/favicon.png')}}">
  </head>

  <body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
      <div class="container">

        <div class="navbar-left">
          <button class="navbar-toggler" type="button">&#9776;</button>
          <a class="navbar-brand" href="../index.html">
            <img class="logo-dark" src="{{asset('img/logo-dark.png')}}" alt="logo">
            <img class="logo-light" src="{{ asset('img/logo-light.png')}}" alt="logo">
          </a>
        </div>

        <section class="navbar-mobile">
          <span class="navbar-divider d-mobile-none"></span>

          <ul class="nav nav-navbar">

            <li class="nav-item nav-mega">
              <a class="nav-link" href="#">Blocks <span class="arrow"></span></a>
              <nav class="nav px-lg-2 py-lg-4">
                <div class="container-fluid">
                  <div class="row">

                    <div class="col-lg">
                      <nav class="nav flex-column">
                        <a class="nav-link" href="../block/blog.html">Blog</a>
                        <a class="nav-link" href="../block/career.html">Career</a>
                        <a class="nav-link" href="../block/contact.html">Contact</a>
                        <a class="nav-link" href="../block/content.html">Content</a>
                        <a class="nav-link" href="../block/counter.html">Counter</a>
                        <a class="nav-link" href="../block/cover.html">Cover</a>
                        <a class="nav-link" href="../block/cta.html">Call to action</a>
                        <a class="nav-link" href="../block/download.html">Download</a>
                        <a class="nav-link" href="../block/explore.html">Explore</a>
                        <a class="nav-link" href="../block/faq.html">FAQ</a>
                      </nav>
                    </div>
                  </div>
                </div>
              </nav>
            </li>


          </ul>
        </section>

        <a class="btn btn-xs btn-round btn-success" href="{{ route('login')}}">Login</a>

      </div>
    </nav><!-- /.navbar -->


  @yield('header')

    <!-- Main Content -->
    @yield('content')


    <!-- Footer -->
    <footer class="footer">
      <div class="container">
        <div class="row gap-y align-items-center">
          <div class="col-6 col-lg-3">
            <a href="../index.html"><img src="{{ asset('img/logo-dark.png')}}" alt="logo"></a>
          </div>
        </div>
      </div>
    </footer><!-- /.footer -->


    <!-- Scripts -->
    <script src="{{ asset('js/page.min.js')}}"></script>
    <script src="{{ asset('js/script.js')}}"></script>

  </body>
</html>
