{{--  <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Admin - Online Store')</title>
</head>

<body>
    <div class="row g-0">
        <!-- sidebar -->
        <div class="p-3 col fixed text-white bg-dark">
            <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
                <span class="fs-4">Admin Panel</span>
            </a>
            <hr />
            <ul class="nav flex-column">
                <li><a href="{{ route('admin.home.index') }}" class="nav-link text-white">- Admin - Home</a></li>
                <li><a href="{{ route('admin.product.index') }}" class="nav-link text-white">- Admin - Products</a></li>
                <li>
                    <a href="{{ route('home.index') }}" class="mt-2 btn bg-primary text-white">Go back to the home
                        page</a>
                </li>
            </ul>
        </div>
        <!-- sidebar -->
        <div class="col content-grey">
            <nav class="p-3 shadow text-end">
                <span class="profile-font">Admin</span>
                <img class="img-profile rounded-circle" src="{{ asset('/img/undraw_profile.svg') }}">
            </nav>
            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://twitter.com/danielgarax">
                    Daniel Correa
                </a>
            </small>
        </div>
    </div>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>  --}}
{{--  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    <title>@yield('title')</title>
</head>
<body>
    <!-- sidebar -->

    <div class="row g-0 h-100 ">
        <!-- sidebar -->
        <div class="p-3 col fixed text-white bg-dark " >
            <a href="#" class="text-white text-decoration-none">
                <span class="fs-4">Admin Panel</span>
            </a>

            <hr />
            <ul class="nav flex-column " >
                <li><a href="{{ route('admin.home') }}" class="nav-link text-white">- Admin - Home</a></li>
                <li><a href="{{ route('admin.product.index') }}" class="nav-link text-white">- Admin - Products</a></li>

            </ul>
        </div>
        <!-- sidebar -->
        <div class="col content-grey">
            <nav class="p-3 shadow text-end">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{Auth::check() ? Auth::user() -> name : '' }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.login') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}
                     </a>

                        <form id="logout-form" action="{{ route('admin.login') }}" method="POST" class="d-none">
                            @csrf

                        </form>
                    </div>
            </nav>
            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      <!-- jquerycdn-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer">
      </script>
</body>
</html>
  --}}
  <!DOCTYPE html>
  <html lang="en">

  <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>@yield('title')</title>
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
      <!-- Custom fonts for this template -->
      <link href="{{ asset('/css/allmin.css') }}" rel="stylesheet" type="text/css">
      <link
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <!-- Custom styles for this template -->
      <link href="{{ asset('/css/sb-admin-2.css') }}" rel="stylesheet">

      <!-- Custom styles for this page -->
      <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

      <!-- Page Wrapper -->
      <div id="wrapper">

          <!-- Sidebar -->
          <ul class="navbar-nav sidebar sidebar-dark accordion" style="background-color: rgba(235, 160, 76, 0.6)" id="accordionSidebar">

              <!-- Sidebar - Brand -->
              <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.home.index') }}">
                  <div class="sidebar-brand-icon rotate-n-15">
                      <i class="fas fa-laugh-wink"></i>
                  </div>
                  <div class="sidebar-brand-text mx-3">Clothes Shop - Admin Page</div>
              </a>

              <!-- Divider -->
              <hr class="sidebar-divider my-0">

              <!-- Nav Item - Dashboard -->
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('admin.home.index') }}">
                      <i class="fas fa-fw fa-tachometer-alt"></i>
                      <span>Dashboard</span></a>
              </li>

              <!-- Divider -->
              <hr class="sidebar-divider">

              <!-- Heading -->
              <div class="sidebar-heading">
                  Interface
              </div>

              <!-- Nav Item - Pages Collapse Menu -->
              <li class="nav-item">
                  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                      aria-expanded="true" aria-controls="collapseTwo">
                      <i class="fas fa-fw fa-cog"></i>
                      <span>Management</span>
                  </a>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                      <div class=" fw-bold py-2 collapse-inner rounded">
                          {{--  <h6 class="collapse-header">Custom Components:</h6>  --}}
                          <a class="collapse-item text-secondary-emphasis" href="{{ route('admin.product.index') }}">Products</a>
                          <a class="collapse-item text-secondary-emphasis" href="{{ route('admin.admins.index') }}">Admin</a>
                          <a class="collapse-item text-secondary-emphasis" href="{{ route('admin.users.index') }}">Users</a>
                          <a class="collapse-item text-secondary-emphasis" href="#">User's cart</a>
                      </div>
                  </div>
              </li>

              <!-- Nav Item - Utilities Collapse Menu -->


              <!-- Divider -->
              <hr class="sidebar-divider">

              <!-- Heading -->
              <div class="sidebar-heading">

              </div>

              <!-- Nav Item - Pages Collapse Menu -->


              <!-- Nav Item - Charts -->

              <!-- Nav Item - Tables -->
              <li class="nav-item active mt-2 p-3">

                      <a href="{{ route('home.index') }}" class="mt-2 btn bg-info text-white">Go back to the home
                        page</a>
              </li>

              <!-- Divider -->
              <hr class="sidebar-divider d-none d-md-block">

              <!-- Sidebar Toggler (Sidebar) -->
              <div class="text-center d-none d-md-inline">
                  <button class="rounded-circle border-0" id="sidebarToggle"></button>
              </div>

          </ul>
          <!-- End of Sidebar -->

          <!-- Content Wrapper -->
          <div id="content-wrapper" class="d-flex flex-column">

              <!-- Main Content -->
              <div id="content">

                  <!-- Topbar -->
                  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                      <!-- Sidebar Toggle (Topbar) -->
                      <form class="form-inline">
                          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                              <i class="fa fa-bars"></i>
                          </button>
                      </form>

                      <!-- Topbar Search -->

                      <!-- Topbar Navbar -->
                      <ul class="navbar-nav ml-auto">

                          <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                          <li class="nav-item dropdown no-arrow d-sm-none">
                              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-search fa-fw"></i>
                              </a>
                              <!-- Dropdown - Messages -->
                              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                  aria-labelledby="searchDropdown">
                                  <form class="form-inline mr-auto w-100 navbar-search">
                                      <div class="input-group">
                                          <input type="text" class="form-control bg-light border-0 small"
                                              placeholder="Search for..." aria-label="Search"
                                              aria-describedby="basic-addon2">
                                          <div class="input-group-append">
                                              <button class="btn btn-primary" type="button">
                                                  <i class="fas fa-search fa-sm"></i>
                                              </button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </li>

                          <!-- Nav Item - Alerts -->
                          <li class="nav-item dropdown no-arrow mx-1">
                              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-bell fa-fw"></i>
                                  <!-- Counter - Alerts -->
                                  <span class="badge badge-danger badge-counter">3+</span>
                              </a>
                              <!-- Dropdown - Alerts -->
                              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                  aria-labelledby="alertsDropdown">
                                  <h6 class="dropdown-header">
                                      Alerts Center
                                  </h6>
                                  <a class="dropdown-item d-flex align-items-center" href="#">
                                      <div class="mr-3">
                                          <div class="icon-circle bg-primary">
                                              <i class="fas fa-file-alt text-white"></i>
                                          </div>
                                      </div>
                                      <div>
                                          <div class="small text-gray-500">December 12, 2019</div>
                                          <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                      </div>
                                  </a>
                                  <a class="dropdown-item d-flex align-items-center" href="#">
                                      <div class="mr-3">
                                          <div class="icon-circle bg-success">
                                              <i class="fas fa-donate text-white"></i>
                                          </div>
                                      </div>
                                      <div>
                                          <div class="small text-gray-500">December 7, 2019</div>
                                          $290.29 has been deposited into your account!
                                      </div>
                                  </a>
                                  <a class="dropdown-item d-flex align-items-center" href="#">
                                      <div class="mr-3">
                                          <div class="icon-circle bg-warning">
                                              <i class="fas fa-exclamation-triangle text-white"></i>
                                          </div>
                                      </div>
                                      <div>
                                          <div class="small text-gray-500">December 2, 2019</div>
                                          Spending Alert: We have noticed unusually high spending for your account.
                                      </div>
                                  </a>
                                  <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                              </div>
                          </li>

                          <!-- Nav Item - Messages -->
                          <li class="nav-item dropdown no-arrow mx-1">
                              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fas fa-envelope fa-fw"></i>
                                  <!-- Counter - Messages -->
                                  <span class="badge badge-danger badge-counter">7</span>
                              </a>
                              <!-- Dropdown - Messages -->
                              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                  aria-labelledby="messagesDropdown">
                                  <h6 class="dropdown-header">
                                      Message Center
                                  </h6>
                                  <a class="dropdown-item d-flex align-items-center" href="#">
                                      <div class="dropdown-list-image mr-3">
                                          <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                              alt="...">
                                          <div class="status-indicator bg-success"></div>
                                      </div>
                                      <div class="font-weight-bold">
                                          <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                              problem I have been having.</div>
                                          <div class="small text-gray-500">Emily Fowler · 58m</div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item d-flex align-items-center" href="#">
                                      <div class="dropdown-list-image mr-3">
                                          <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                              alt="...">
                                          <div class="status-indicator"></div>
                                      </div>
                                      <div>
                                          <div class="text-truncate">I have the photos that you ordered last month, how
                                              would you like them sent to you?</div>
                                          <div class="small text-gray-500">Jae Chun · 1d</div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item d-flex align-items-center" href="#">
                                      <div class="dropdown-list-image mr-3">
                                          <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                              alt="...">
                                          <div class="status-indicator bg-warning"></div>
                                      </div>
                                      <div>
                                          <div class="text-truncate">Last month's report looks great, I am very happy with
                                              the progress so far, keep up the good work!</div>
                                          <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item d-flex align-items-center" href="#">
                                      <div class="dropdown-list-image mr-3">
                                          <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                              alt="...">
                                          <div class="status-indicator bg-success"></div>
                                      </div>
                                      <div>
                                          <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                              told me that people say this to all dogs, even if they aren't good...</div>
                                          <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                      </div>
                                  </a>
                                  <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                              </div>
                          </li>

                          <div class="topbar-divider d-none d-sm-block"></div>

                          <!-- Nav Item - User Information -->
                          <li class="nav-item dropdown no-arrow">
                              <a class="nav-link dropdown-toggle text-dark fw-bold" href="#" id="userDropdown" role="button"
                                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  {{Auth::check() ? Auth::user() -> name : '' }}
                                  <span class=" fa-1x fa-stack border ms-2 rounded-circle bg-info text-center">
                                    <i class="fa-solid text-white fa-user "></i>
                                  </span>

                              </a>

                              <!-- Dropdown - User Information -->
                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                             </a>
                                <form id="logout-form" action="#" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                          </li>

                      </ul>

                  </nav>
                  <!-- End of Topbar -->

                  <!-- Begin Page Content -->
                  <div class="container-fluid">

                      <!-- Page Heading -->
                      <div class="row mb-2">
                        <div class="col">
                            <h1 class="h3 text-gray-800 fw-bold col-6">@yield('tablename')</h1>
                        </div>
                        <div class="col text-end pe-3">
                           @yield('button')
                        </div>
                      </div>


                      <!-- DataTales Example -->
                      <div class="card shadow mb-4">

                          @yield('content')
                      </div>

                  </div>
                  <!-- /.container-fluid -->

              </div>
              <!-- End of Main Content -->

              <!-- Footer -->

              <!-- End of Footer -->

          </div>
          <!-- End of Content Wrapper -->

      </div>
      <!-- End of Page Wrapper -->

      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
      </a>

      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                      </button>
                  </div>
                  <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                  <div class="modal-footer">
                      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                      <a class="btn btn-primary" href="login.html">Logout</a>
                  </div>
              </div>
          </div>
      </div>

      <!-- Bootstrap core JavaScript-->
      <script src="{{ asset('/js/jquery.min.js') }}"></script>
      <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>

      <!-- Core plugin JavaScript-->
      <script src="{{ asset('/js/jquery.easing.min.js') }}"></script>

      <!-- Custom scripts for all pages-->
      <script src="{{ asset('/js/sb-admin-2.js') }}"></script>

      <!-- Page level plugins -->
      <script src="vendor/datatables/jquery.dataTables.min.js"></script>
      <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

      <!-- Page level custom scripts -->
      <script src="js/demo/datatables-demo.js"></script>

  </body>

  </html>

