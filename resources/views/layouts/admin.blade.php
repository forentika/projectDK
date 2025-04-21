<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/img/favicon.ico') }}" />
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet" />
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }}" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/font-awesome.min.css') }}" />
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/owl.carousel.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/owl.theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/owl.transitions.css') }}" />
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/meanmenu/meanmenu.min.css') }}" />
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/animate.css') }}" />
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/normalize.css') }}" />
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/scrollbar/jquery.mCustomScrollbar.min.css') }}" />
    <!-- jvectormap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/jvectormap/jquery-jvectormap-2.0.3.css') }}" />
    <!-- notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/notika-custom-icon.css') }}" />
    <!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/wave/waves.min.css') }}" />
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}" />
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}" />
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('admin/css/responsive.css') }}" />
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('admin/js/vendor/modernizr-2.8.3.min.js') }}"></script>
  </head>
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="logo-area">
              <a href="#"><img src="{{ asset('admin/img/logo/lala.png') }}" width="150px" height="48px" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="header-top-menu">
              <ul class="nav navbar-nav notika-top-nav">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        </div>
      </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="mobile-menu">
              <nav id="dropdown">
                <ul class="mobile-menu-nav">
                  <li>
                    <a data-toggle="collapse" data-target="#Charts" href="#">Home</a>
                  </li>
                  <li>
                    <a data-toggle="collapse" data-target="#demoevent" href="#">Email</a>
                    <ul id="demoevent" class="collapse dropdown-header-top">
                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="view-email.html">View Email</a></li>
                      <li><a href="compose-email.html">Compose Email</a></li>
                    </ul>
                  </li>
                  <li>
                    <a data-toggle="collapse" data-target="#democrou" href="#">Interface</a>
                    <ul id="democrou" class="collapse dropdown-header-top">
                      <li><a href="animations.html">Animations</a></li>
                      <li><a href="google-map.html">Google Map</a></li>
                      <li><a href="data-map.html">Data Maps</a></li>
                      <li><a href="code-editor.html">Code Editor</a></li>
                      <li><a href="image-cropper.html">Images Cropper</a></li>
                      <li><a href="wizard.html">Wizard</a></li>
                    </ul>
                  </li>
                  <li>
                    <a data-toggle="collapse" data-target="#demolibra" href="#">Charts</a>
                    <ul id="demolibra" class="collapse dropdown-header-top">
                      <li><a href="flot-charts.html">Flot Charts</a></li>
                      <li><a href="bar-charts.html">Bar Charts</a></li>
                      <li><a href="line-charts.html">Line Charts</a></li>
                      <li><a href="area-charts.html">Area Charts</a></li>
                    </ul>
                  </li>
                  <li>
                    <a data-toggle="collapse" data-target="#demodepart" href="#">Tables</a>
                    <ul id="demodepart" class="collapse dropdown-header-top">
                      <li><a href="normal-table.html">Normal Table</a></li>
                      <li><a href="data-table.html">Data Table</a></li>
                    </ul>
                  </li>
                  <li>
                    <a data-toggle="collapse" data-target="#demo" href="#">Forms</a>
                    <ul id="demo" class="collapse dropdown-header-top">
                      <li><a href="form-elements.html">Form Elements</a></li>
                      <li><a href="form-components.html">Form Components</a></li>
                      <li><a href="form-examples.html">Form Examples</a></li>
                    </ul>
                  </li>
                  <li>
                    <a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">App views</a>
                    <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                      <li><a href="notification.html">Notifications</a></li>
                      <li><a href="alert.html">Alerts</a></li>
                      <li><a href="modals.html">Modals</a></li>
                      <li><a href="buttons.html">Buttons</a></li>
                      <li><a href="tabs.html">Tabs</a></li>
                      <li><a href="accordion.html">Accordion</a></li>
                      <li><a href="dialog.html">Dialogs</a></li>
                      <li><a href="popovers.html">Popovers</a></li>
                      <li><a href="tooltips.html">Tooltips</a></li>
                      <li><a href="dropdown.html">Dropdowns</a></li>
                    </ul>
                  </li>
                  <li>
                    <a data-toggle="collapse" data-target="#Pagemob" href="#">Pages</a>
                    <ul id="Pagemob" class="collapse dropdown-header-top">
                      <li><a href="contact.html">Contact</a></li>
                      <li><a href="invoice.html">Invoice</a></li>
                      <li><a href="typography.html">Typography</a></li>
                      <li><a href="color.html">Color</a></li>
                      <li><a href="login-register.html">Login Register</a></li>
                      <li><a href="404.html">404 Page</a></li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
            <li >
                <a  href="{{ url('/admin/home')}}"><i class="notika-icon notika-house"></i> Home</a>
              </li>
              <li>
                <a href=" {{url('admin/category') }} "><i class="notika-icon notika-mail"></i> Category</a>
              </li>
              <li>
                <a href=" {{ url('admin/product') }} "><i class="notika-icon notika-mail"></i> Product</a>
              </li>
              <li>
                <a href=" {{ url('/admin/transaction') }} "><i class="notika-icon notika-edit"></i> Order</a>
              </li>
              <li>
                <a href=" {{ url('/admin/delivery') }} "><i class="notika-icon notika-bar-chart"></i> Delivery</a>
              </li>
              <li>
                <a href="/galeris"><i class="notika-icon notika-windows"></i> Galery</a>
              </li>
              {{-- <li>
                <a href="#Forms"><i class="notika-icon notika-form"></i> Feedback</a>
              </li>
              <li>
                <a href="#Appviews"><i class="notika-icon notika-app"></i>Purchase</a>
              </li> --}}
              <!-- <li>
                <a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i> Pages</a>
              </li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
   
    @yield('content')
    <div class="footer-copyright-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="footer-copy-right">
              <p>DIARY KITCHEN<a href="https://colorlib.com">2025</a>.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    @yield('script')
    <script src="{{ asset('admin/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ asset('admin/js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ asset('admin/js/jquery-price-slider.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ asset('admin/js/owl.carousel.min.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('admin/js/jquery.scrollUp.min.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('admin/js/meanmenu/jquery.meanmenu.js') }}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ asset('admin/js/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('admin/js/counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('admin/js/counterup/counterup-active.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- jvectormap JS
		============================================ -->
    <script src="{{ asset('admin/js/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('admin/js/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('admin/js/jvectormap/jvectormap-active.js') }}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{ asset('admin/js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('admin/js/sparkline/sparkline-active.js') }}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{ asset('admin/js/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('admin/js/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('admin/js/flot/curvedLines.js') }}"></script>
    <script src="{{ asset('admin/js/flot/flot-active.js') }}"></script>
    <!-- knob JS
		============================================ -->
    <script src="{{ asset('admin/js/knob/jquery.knob.js') }}"></script>
    <script src="{{ asset('admin/js/knob/jquery.appear.js') }}"></script>
    <script src="{{ asset('admin/js/knob/knob-active.js') }}"></script>
    <!--  wave JS
		============================================ -->
    <script src="{{ asset('admin/js/wave/waves.min.js') }}"></script>
    <script src="{{ asset('admin/js/wave/wave-active.js') }}"></script>
    <!--  todo JS
		============================================ -->
    <script src="{{ asset('admin/js/todo/jquery.todo.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ asset('admin/js/plugins.js') }}"></script>
    <!--  Chat JS
		============================================ -->
    <script src="{{ asset('admin/js/chat/moment.min.js') }}"></script>
    <script src="{{ asset('admin/js/chat/jquery.chat.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('admin/js/main.js') }}"></script>
    <!-- tawk chat JS
		============================================ -->
    {{-- <script src="{{ asset('admin/js/tawk-chat.js') }}"></script> --}}
    @push('scripts')
  </body>
</html>
