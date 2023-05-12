<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin | LensaBandung</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        
        <span class="d-none d-lg-block">LensaBandung</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            {{-- <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li> --}}

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        @guest
        @if (Route::has('login'))
            <a class="appointment-btn scrollto" href="{{ route('login') }}"><span class="d-none d-md-inline">{{ __('Login') }}</a>
        @endif
        @if (Route::has('register'))
            <a class="appointment-btn scrollto" href="{{ route('register') }}"><span class="d-none d-md-inline">{{ __('Register') }}</a>
        @endif
    @else
        <a id="navbarDropdown" class="appointment-btn scrollto" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
    @endguest

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="components-nav" href="{{route('detailAdmin')}}">
          <i class="bi bi-menu-button-wide"></i><span>Pengaduan</span>
        </a>
        
      </li><!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" href="{{route('profile')}}">
          <i class="bi bi-menu-button-wide"></i><span>Profile</span>
        </a>
        
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" href="{{route('kritikSaran')}}">
          <i class="bi bi-menu-button-wide"></i><span>Kritik dan Saran</span>
        </a>
        
      </li>
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

        @php
            $year = date('Y');
            $month = date('m');
            $day = date('d');
            $pengaduanCountYear = App\Models\Pengaduan::whereYear('created_at', $year)->count();
            $pengaduanCountMonth = App\Models\Pengaduan::whereMonth('created_at', $month)->count();
            $pengaduanCountDay = App\Models\Pengaduan::whereDay('created_at', $day)->count();
        @endphp

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#" id="t1">Today</a></li>
                    <li><a class="dropdown-item" href="#" id="m1">This Month</a></li>
                    <li><a class="dropdown-item" href="#" id="y1">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Jumlah Pengaduan <span id="s1">| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class=""></i>
                    </div>
                    <div class="ps-3">
                      <h6 id="h1">{{$pengaduanCount}}</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">meningkat</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <script>
              t1.addEventListener('click', function(){
                  s1.innerHTML = "| Today";
                  h1.innerHTML = "{{$pengaduanCountDay}}";
              });
              m1.addEventListener('click', function(){
                  s1.innerHTML = "| This Month";
                  h1.innerHTML = "{{$pengaduanCountMonth}}";
              });
              y1.addEventListener('click', function(){
                  s1.innerHTML = "| This Year";
                  h1.innerHTML = "{{$pengaduanCountYear}}";
              });
          </script>

            @php
                $year = date('Y');
                $month = date('m');
                $day = date('d');
                $acceptedCountYear = App\Models\Pengaduan::where('status', 'Accepted')->whereYear('created_at', $year)->count();
                $acceptedCountMonth = App\Models\Pengaduan::where('status', 'Accepted')->whereMonth('created_at', $month)->count();
                $acceptedCountDay = App\Models\Pengaduan::where('status', 'Accepted')->whereDay('created_at', $day)->count();
            @endphp

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#" id="t3">Today</a></li>
                    <li><a class="dropdown-item" href="#" id="m3">This Month</a></li>
                    <li><a class="dropdown-item" href="#" id="y3">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Terverifikasi <span id="s3">| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class=""></i>
                    </div>
                    <div class="ps-3">
                      <h6 id="h3">{{$acceptedCount}}</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">naik</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <script>
                t3.addEventListener('click', function(){
                    s3.innerHTML = "| Today";
                    h3.innerHTML = "{{$acceptedCountDay}}";
                });
                m3.addEventListener('click', function(){
                    s3.innerHTML = "| This Month";
                    h3.innerHTML = "{{$acceptedCountMonth}}";
                });
                y3.addEventListener('click', function(){
                    s3.innerHTML = "| This Year";
                    h3.innerHTML = "{{$acceptedCountYear}}";
                });
            </script>

            @php
              $year = date('Y');
              $month = date('m');
              $day = date('d');
              $deniedCountYear = App\Models\Pengaduan::where('status', 'Denied')->whereYear('created_at', $year)->count();
              $deniedCountMonth = App\Models\Pengaduan::where('status', 'Denied')->whereMonth('created_at', $month)->count();
              $deniedCountDay = App\Models\Pengaduan::where('status', 'Denied')->whereDay('created_at', $day)->count();
            @endphp

            <!-- Customers Card -->
            <div class="col-xxl-4 col-md-6">
              
              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#" id="t2">Today</a></li>
                    <li><a class="dropdown-item" href="#" id="m2">This Month</a></li>
                    <li><a class="dropdown-item" href="#" id="y2">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Ditolak <span id="s2">| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class=""></i>
                    </div>
                    <div class="ps-3">
                      <h6 id="h2">{{$deniedCount}}</h6>
                      <span class="text-danger small pt-1 fw-bold">3%</span> <span class="text-muted small pt-2 ps-1">turun</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <script>
                t2.addEventListener('click', function(){
                    s2.innerHTML = "| Today";
                    h2.innerHTML = "{{$deniedCountDay}}";
                });
                m2.addEventListener('click', function(){
                    s2.innerHTML = "| This Month";
                    h2.innerHTML = "{{$deniedCountMonth}}";
                });
                y2.addEventListener('click', function(){
                    s2.innerHTML = "| This Year";
                    h2.innerHTML = "{{$deniedCountYear}}";
                });
            </script>

            <!-- Reports -->
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>LensaBandung</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/chart.js/chart.umd.js')}}"></script>
  <script src="{{asset('/assets/vendor/echarts/echarts.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/quill/quill.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
  <script src="{{asset('/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="{{asset('/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('/assets/js/main.js')}}"></script>

</body>

</html>