<!DOCTYPE html>
<html lang="en">
<head>
 
  <!-- Required meta tags-->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Dashboard</title>

  <!-- Fontfaces CSS-->
  <link href="{{asset('dashboard/css/font-face.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="{{asset('dashboard/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

  <!-- Vendor CSS-->
  <link href="{{asset('dashboard/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('dashboard/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('dashboard/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('dashboard/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('dashboard/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
  <link href="{{asset('dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="{{asset('dashboard/css/theme.css')}}" rel="stylesheet" media="all">
  <link rel="stylesheet" href="/css/app.css" rel="stylesheet">
</head>
<body class="animsition">
  <div class="page-wrapper">
      <!-- MENU SIDEBAR-->
      <aside class="menu-sidebar2">
          <div class="logo">
              <h1 style=color:white>Admin</h1>
          </div>
          <div class="menu-sidebar2__content js-scrollbar1">
              <div class="account2">
                  <h4 class="name">
                      @yield('adminname')
                  </h4>
                  <a href="#">Sign out</a>
              </div>
              <nav class="navbar-sidebar2">
                  <ul class="list-unstyled navbar__list">
                      <li class="active has-sub">
                          <a class="js-arrow" href="#">
                              <i class="fas fa-tachometer-alt"></i>Dashboard
                              <span class="arrow">
                                  <i class="fas fa-angle-down"></i>
                              </span>
                          </a>
                          <ul class="list-unstyled navbar__sub-list js-sub-list">
                              <li>
                                  <a href="index.html">
                                      <i class="fas fa-tachometer-alt"></i>Dashboard 1</a>
                              </li>
                              <li>
                                  <a href="index2.html">
                                      <i class="fas fa-tachometer-alt"></i>Dashboard 2</a>
                              </li>
                              <li>
                                  <a href="index3.html">
                                      <i class="fas fa-tachometer-alt"></i>Dashboard 3</a>
                              </li>
                              <li>
                                  <a href="index4.html">
                                      <i class="fas fa-tachometer-alt"></i>Dashboard 4</a>
                              </li>
                          </ul>
                      </li>
                      <li>
                      <a href="{{route('documents.index')}}">
                              <i class="fas fa-chart-bar"></i>Sənədlər</a>
                          @yield('documentNotifications')
                      </li>
                  </ul>
              </nav>
          </div>
      </aside>
      <!-- END MENU SIDEBAR-->

      <!-- PAGE CONTAINER-->
      <div class="page-container2">
          <!-- HEADER DESKTOP-->
          <header class="header-desktop2">
              <div class="section__content section__content--p30">
                  <div class="container-fluid">
                      <div class="header-wrap2">
                          <div class="logo d-block d-lg-none">
                              <a href="#">
                                  <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                              </a>
                          </div>
                          <div class="header-button2" id="headerButtons">
                                <div class="header-button-item js-item-menu">
                                    <div>
                                        <i class="zmdi zmdi-search"></i>
                                        <div class="search-dropdown js-dropdown">
                                            <form action="">
                                                <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                                <span class="search-dropdown__icon">
                                                    <i class="zmdi zmdi-search"></i>
                                                </span>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="notificationCenter" class="header-button-item ">

                                    
                            
                                </div>

                              <div class="header-button-item mr-0 js-sidebar-btn">
                                  <div>
                                        <i class="zmdi zmdi-menu"></i>
                                  </div>
                              </div>
                              <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                  <div class="account-dropdown__body">
                                      <div class="account-dropdown__item">
                                          <a href="#">
                                              <i class="zmdi zmdi-account"></i>Account</a>
                                      </div>
                                      <div class="account-dropdown__item">
                                          <a href="#">
                                              <i class="zmdi zmdi-settings"></i>Setting</a>
                                      </div>
                                      <div class="account-dropdown__item">
                                          <a href="#">
                                              <i class="zmdi zmdi-money-box"></i>Billing</a>
                                      </div>
                                  </div>
                                  <div class="account-dropdown__body">
                                      <div class="account-dropdown__item">
                                          <a href="#">
                                              <i class="zmdi zmdi-globe"></i>Language</a>
                                      </div>
                                      <div class="account-dropdown__item">
                                          <a href="#">
                                              <i class="zmdi zmdi-pin"></i>Location</a>
                                      </div>
                                      <div class="account-dropdown__item">
                                          <a href="#">
                                              <i class="zmdi zmdi-email"></i>Email</a>
                                      </div>
                                      <div class="account-dropdown__item">
                                          <a href="#">
                                              <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </header>
          <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
              <div class="logo">
                  <a href="#">
                      <img src="images/icon/logo-white.png" alt="Cool Admin" />
                  </a>
              </div>
              <div class="menu-sidebar2__content js-scrollbar2">
                  <div class="account2">
                      
                      <h4 class="name">john doe</h4>
                      <a href="#">Sign out</a>
                  </div>
                  <nav class="navbar-sidebar2">
                      <ul class="list-unstyled navbar__list">
                          <li class="active has-sub">
                              <a class="js-arrow" href="#">
                                  <i class="fas fa-tachometer-alt"></i>Dashboard
                                  <span class="arrow">
                                      <i class="fas fa-angle-down"></i>
                                  </span>
                              </a>
                              <ul class="list-unstyled navbar__sub-list js-sub-list">
                                  <li>
                                      <a href="index.html">
                                          <i class="fas fa-tachometer-alt"></i>Dashboard 1</a>
                                  </li>
                                  <li>
                                      <a href="index2.html">
                                          <i class="fas fa-tachometer-alt"></i>Dashboard 2</a>
                                  </li>
                                  <li>
                                      <a href="index3.html">
                                          <i class="fas fa-tachometer-alt"></i>Dashboard 3</a>
                                  </li>
                                  <li>
                                      <a href="index4.html">
                                          <i class="fas fa-tachometer-alt"></i>Dashboard 4</a>
                                  </li>
                              </ul>
                          </li>
                          <li>
                              <a href="inbox.html">
                                  <i class="fas fa-chart-bar"></i>Inbox</a>
                              <span class="inbox-num">3</span>
                          </li>
                          <li>
                              <a href="#">
                                  <i class="fas fa-shopping-basket"></i>eCommerce</a>
                          </li>
                          <li class="has-sub">
                              <a class="js-arrow" href="#">
                                  <i class="fas fa-trophy"></i>Features
                                  <span class="arrow">
                                      <i class="fas fa-angle-down"></i>
                                  </span>
                              </a>
                              <ul class="list-unstyled navbar__sub-list js-sub-list">
                                  <li>
                                      <a href="table.html">
                                          <i class="fas fa-table"></i>Tables</a>
                                  </li>
                                  <li>
                                      <a href="form.html">
                                          <i class="far fa-check-square"></i>Forms</a>
                                  </li>
                                  <li>
                                      <a href="#">
                                          <i class="fas fa-calendar-alt"></i>Calendar</a>
                                  </li>
                                  <li>
                                      <a href="map.html">
                                          <i class="fas fa-map-marker-alt"></i>Maps</a>
                                  </li>
                              </ul>
                          </li>
                          <li class="has-sub">
                              <a class="js-arrow" href="#">
                                  <i class="fas fa-copy"></i>Pages
                                  <span class="arrow">
                                      <i class="fas fa-angle-down"></i>
                                  </span>
                              </a>
                              <ul class="list-unstyled navbar__sub-list js-sub-list">
                                  <li>
                                      <a href="login.html">
                                          <i class="fas fa-sign-in-alt"></i>Login</a>
                                  </li>
                                  <li>
                                      <a href="register.html">
                                          <i class="fas fa-user"></i>Register</a>
                                  </li>
                                  <li>
                                      <a href="forget-pass.html">
                                          <i class="fas fa-unlock-alt"></i>Forget Password</a>
                                  </li>
                              </ul>
                          </li>
                          <li class="has-sub">
                              <a class="js-arrow" href="#">
                                  <i class="fas fa-desktop"></i>UI Elements
                                  <span class="arrow">
                                      <i class="fas fa-angle-down"></i>
                                  </span>
                              </a>
                              <ul class="list-unstyled navbar__sub-list js-sub-list">
                                  <li>
                                      <a href="button.html">
                                          <i class="fab fa-flickr"></i>Button</a>
                                  </li>
                                  <li>
                                      <a href="badge.html">
                                          <i class="fas fa-comment-alt"></i>Badges</a>
                                  </li>
                                  <li>
                                      <a href="tab.html">
                                          <i class="far fa-window-maximize"></i>Tabs</a>
                                  </li>
                                  <li>
                                      <a href="card.html">
                                          <i class="far fa-id-card"></i>Cards</a>
                                  </li>
                                  <li>
                                      <a href="alert.html">
                                          <i class="far fa-bell"></i>Alerts</a>
                                  </li>
                                  <li>
                                      <a href="progress-bar.html">
                                          <i class="fas fa-tasks"></i>Progress Bars</a>
                                  </li>
                                  <li>
                                      <a href="modal.html">
                                          <i class="far fa-window-restore"></i>Modals</a>
                                  </li>
                                  <li>
                                      <a href="switch.html">
                                          <i class="fas fa-toggle-on"></i>Switchs</a>
                                  </li>
                                  <li>
                                      <a href="grid.html">
                                          <i class="fas fa-th-large"></i>Grids</a>
                                  </li>
                                  <li>
                                      <a href="fontawesome.html">
                                          <i class="fab fa-font-awesome"></i>FontAwesome</a>
                                  </li>
                                  <li>
                                      <a href="typo.html">
                                          <i class="fas fa-font"></i>Typography</a>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </nav>
              </div>
          </aside>
          <!-- END HEADER DESKTOP-->

          <!-- BREADCRUMB-->

          
        <section class="au-breadcrumb m-t-75">
            <div class="section__content section__content--p30">
                @yield('currentpage')
            </div>
        </section>
          <!-- END BREADCRUMB-->

          <!-- STATISTIC-->
          @yield('content')

          <section>
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="copyright">
                              <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
          <!-- END PAGE CONTAINER-->
      </div>

  </div>

<!-- Jquery JS-->
<script src="{{asset('dashboard/vendor/jquery-3.2.1.min.js')}}"></script>
<!-- Bootstrap JS-->
<script src="{{asset('dashboard/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('dashboard/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
<!-- Vendor JS       -->
<script src="{{asset('dashboard/vendor/slick/slick.min.js')}}">
</script>
<script src="{{asset('dashboard/vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('dashboard/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
</script>
<script src="{{asset('dashboard/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('dashboard/vendor/counter-up/jquery.counterup.min.js')}}">
</script>
<script src="{{asset('dashboard/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('dashboard/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('dashboard/vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('dashboard/vendor/select2/select2.min.js')}}">
</script>


<script src="{{asset('dashboard/js/main.js')}}"></script>
<script src="/js/app.js"></script>

</body>
</html>