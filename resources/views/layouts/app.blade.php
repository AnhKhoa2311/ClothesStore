<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/owl.theme.default.css') }}">
    <title>@yield('title', 'Online Store')</title>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-dark py-4" style="background-color: rgba(46, 138, 138, 1); ">
        <div class="container">
            <a class="navbar-brand fa-fade" href="{{ route('home.index') }}">
                <img class="img-fluid rounded me-2" src="{{ asset('/img/logo.png') }}" alt="">
               <p class="text-white">Clothes Store</p>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active fs-5 listhover" href="{{ route('home.index') }}">
                        <i class="fa-solid fa-house"></i>
                        Home
                    </a>
                    <a class="nav-link active fs-5 listhover" href="{{ route('product.index') }}">
                        <i class="fa-solid fa-table-cells"></i>
                        Products
                    </a>
                    <a class="nav-link active fs-5 listhover" href="{{ route('cart.index') }}">
                        <i class="fa-solid fa-cart-shopping"></i>
                        Cart
                    </a>
                    <a class="nav-link active fs-5 listhover" href="{{ route('home.about') }}">About</a>
                    <div class="vr bg-white mx-2 d-none d-lg-block fs-5"></div>
                    @guest
                        <a href="{{ route('login') }}" class="nav-link active fs-5 listhover">Login</a>
                        <a href="{{ route('register') }}" class="nav-link active fs-5 listhover">Register</a>
                    @else
                        <a href="{{ route('myaccount.orders') }}" class="nav-link active fs-5 listhover">My Orders</a>
                        <div class="dropdown">
                            <button style="background-color: rgba(46, 138, 138, 1); " class="btn fs-5 fw-bold text-white border-0 nav-link active ms-2 me-2 dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa-solid fa-user text-info me-2"></i>
                                {{Auth::check() ? Auth::user() -> name : '' }}
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <div class="dropdown-item">
                                <a class="nav-link active text-dark fw-bold" href="{{ route('user.userinfo') }}">
                                    <i class="fa-solid fa-gear me-2 text-secondary"></i>
                                    Update information
                                </a>
                              </div>
                              <div class="dropdown-item">
                                <a class="nav-link active text-dark fw-bold" href="{{ route('user.userinfo.personal') }}">
                                    <i class="fa-solid fa-user me-2 text-info"></i>
                                    Personal Information
                                </a>
                              </div>
                              <form class="dropdown-item" id="logout" action="{{ route('logout') }}" method="POST">
                                @method('POST')

                                <a onclick="document.getElementById('logout').submit();"
                                class="nav-link active text-dark fw-bold" role="button">
                                    <i class="text-danger fa-solid fa-right-from-bracket me-2 fa-rotate-180"></i>
                                    Logout
                                </a>
                                @csrf
                              </form>

                            </div>
                          </div>
                        {{-- <form id="logout" action="{{ route('logout') }}" method="POST">
                            @method('POST')
                            <a onclick="document.getElementById('logout').submit();"
                            class="nav-link active" role="button">Logout</a>
                            @csrf
                        </form>     --}}
                    @endguest
                </div>
            </div>
        </div>
    </nav>
    <header class="masthead bg-info text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2 class="fa-bounce">

               <p>@yield('subtitle')</p>
            </h2>
        </div>
    </header>
    <!-- header -->
    <div class="container p-0 my-4">
        @yield('content')
    </div>
    <!-- footer -->
    <div class="row my-3">
        <div class="col col-sm-3 d-grid">
            <p class="fs-3 fw-bold">Information</p>
            <a class="text-decoration-none link-secondary" href="">About us</a>
            <a class="text-decoration-none link-secondary pt-2" href="">Delivery Information</a>
            <a class="text-decoration-none link-secondary pt-2" href="">Privacy Policy</a>
            <a class="text-decoration-none link-secondary pt-2" href="">Contact us</a>
        </div>
        <div class="col col-sm-3 d-grid">
            <p class="fs-3 fw-bold">Extras</p>
            <a class="text-decoration-none link-secondary" href="">Brands</a>
            <a class="text-decoration-none link-secondary pt-2" href="">Specials</a>
            <a class="text-decoration-none link-secondary pt-2" href="">Gift Certificate</a>
            <a class="text-decoration-none link-secondary pt-2" href="">Site map</a>
        </div>
        <div class="col col-sm-3 d-grid">
            <p class="fs-3 fw-bold">Contact us</p>
            <p class="text-secondary" href="">Address: Ho Chi Minh City</p>
            <p class="text-secondary pt-2" href="">Phone: (0123 456 789)</p>
            <a class="text-decoration-none link-secondary pt-2" href="">Email: khoanguyen@email.com</a>
            <div class="row pt-3">
                <div class="col">
                    <a class="text-decoration-none me-2 link-info" href="">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a class="text-decoration-none me-2 link-primary" href="">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a class="text-decoration-none link-danger" href="">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>

            </div>
        </div>
        <div class="col col-sm-3 d-grid">
            <p class="fs-3 fw-bold">Join us now</p>
            <p class="text-secondary">Exceptional quality. Ethical factories. Sign up to enjoy free U.S. </p>
            <form action="">
                <input class="form-control" type="text" placeholder="Enter your email">
                <button class="w-100 mt-3 bg-secondary text-white fw-bold" type="submit">Submit</button>
            </form>
        </div>
        <div class="copyright row py-4 my-4 text-center text-white">
            <div class="container-fluid">
                <small>
                    Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                        href="https://twitter.com/danielgarax">
                        MSSV - 21-0-00979
                    </a> - <b>Nguyễn Vũ Anh Khoa</b>
                </small>
            </div>
        </div>
    </div>

    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <!-- jquerycdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer">
    </script>
    <!-- owlcarousel -->
    <script src="{{ asset('/js/owl.carousel.js') }}"></script>
    <script>
      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:2
        },
        1100:{
            items:3
        }
    }
})
    </script>
</body>


</html>
