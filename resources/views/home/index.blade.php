@extends('layouts.app')
@section("title", $viewData["title"])
@section('subtitle')
    <i class="fa-solid fa-house"></i>
    Welcome to our websites!
@endsection
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@section("content")
    {{-- <div class="row">
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/game.png') }}" class="img-fluid rounded" />
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/safe.png') }}" class="img-fluid rounded"/>
        </div>
        <div class="col-md-6 col-lg-4 mb-2">
            <img src="{{ asset('/img/submarine.png') }}" class="img-fluid rounded" />
        </div>
    </div> --}}
    <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="img-fluid rounded d-block justify-content-center" src="{{ asset('/img/slider5.jpg') }}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="img-fluid rounded d-block" src="{{ asset('/img/slider4.jpg') }}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="img-fluid rounded d-block" src="{{ asset('/img/slider6.jpg') }}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-4">
            <img class="img-fluid rounded" src="{{ asset('/img/banner/banner8.jpg') }}" alt="">
        </div>
        <div class="col-4">
            <img class="img-fluid rounded" src="{{ asset('/img/banner/banner9.jpg') }}" alt="">
        </div>
        <div class="col-4">
            <img class="img-fluid rounded" src="{{ asset('/img/banner/banner10.jpg') }}" alt="">
        </div>
    </div>
    <div class="row">
       <figure class="text-center">
            <blockquote class="blockquote fw-bold text-success fs-1">
                Our Products
            </blockquote>
            <figcaption class="blockquote-footer">
                Latest and modern design products
            </figcaption>
       </figure>
    </div>
    <div class="row my-3">
        <div class="col text-center">
            <a class="hover-effect text-decoration-none " href="">Womens</a>
            <a class="hover-effect text-decoration-none ms-3" href="">Mens</a>
            <a class="hover-effect text-decoration-none ms-3" href="">Kids</a>
            <a class="hover-effect text-decoration-none ms-3" href="">Shoes</a>
        </div>
    </div>
    <div class="row">
        @foreach ($viewData['products'] as $product)
            <div class="col-6 col-xl-3 ">
                <a href="{{ route('product.show', ['id' => $product -> getId()]) }}">
                    <img class="img-fluid rounded" src="{{ asset('/storage/'.$product -> getImage()) }}" alt="">
                </a>
                <p class="text-center">
                    <a href="{{ route('product.show', ['id' => $product -> getId()]) }}" class="fs-5 btn btn-success mt-2 text-decoration-none text-white fw-bold">{{ $product -> getName() }}</a>
                </p >
                <p class="text-center text-success fw-bold">${{ $product -> getPrice() }}</p>
            </div>
        @endforeach

    </div>
    <div class="row my-3">
        <div class="col-6">
            <img class="img-fluid rounded" src="{{ asset('/img/banner/banner11.jpg') }}" alt="">

        </div>
        <div class="col-6">
            <img class="img-fluid rounded" src="{{ asset('/img/banner/banner12.jpg') }}" alt="">
        </div>
    </div>
    <div class="row">
        <figure class="text-center">
            <blockquote class="blockquote fw-bold text-dark fs-1">
                Popular products
            </blockquote>
            <figcaption class="blockquote-footer">
                Impressive and best-selling product
            </figcaption>
       </figure>
    </div>
    <div class="row my-3">
        <div id="carouselExampleControls2" class="owl-carousel owl-theme"  data-ride="carousel">
              <div class="item d-flex row">
                    <div class="col-12">
                        <img class="img-fluid rounded justify-content-center" src="{{ asset('/img/slider5.jpg') }}" alt="First slide">
                    </div>
              </div>
              <div class="item row d-flex">
                <div class="col-12">
                    <img class="img-fluid rounded d-block justify-content-center" src="{{ asset('/img/slider4.jpg') }}" alt="First slide">
                </div>
              </div>
              <div class="item row d-flex">
                <div class="col-12">
                    <img class="img-fluid rounded d-block justify-content-center" src="{{ asset('/img/slider5.jpg') }}" alt="First slide">
                </div>
              </div>
              <div class="item row d-flex">
                <div class="col-12">
                    <img class="img-fluid rounded d-block justify-content-center" src="{{ asset('/img/slider6.jpg') }}" alt="First slide">
                </div>
              </div>
              <div class="item row d-flex">
                <div class="col-12">
                    <img class="img-fluid rounded d-block justify-content-center" src="{{ asset('/img/slider5.jpg') }}" alt="First slide">
                </div>
              </div>
              <div class="item row d-flex">
                <div class="col-12">
                    <img class="img-fluid rounded d-block justify-content-center" src="{{ asset('/img/slider6.jpg') }}" alt="First slide">
                </div>
              <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
               </a>
        </div>
    </div>
    <div class="row">
        <figure class="text-center">
            <blockquote class="blockquote fw-bold text-dark fs-1">
                New Products
            </blockquote>
            <figcaption class="blockquote-footer">
                Update fashion trends
            </figcaption>
       </figure>
    </div>
    <div class="row my-3 ms-2">
        <div id="carouselExampleControls2" class="owl-carousel owl-theme"  data-ride="carousel">
            @foreach ($viewData['products'] as $product)
                <div class="item d-flex card row mx-2">
                    <div class="col card p-0">
                        <img class="card-img-top rounded justify-content-center img-fluid h-50" style="height: 250px;"
                                    src="{{ asset('/storage/'.$product -> getImage()) }}" alt="First slide" />
                        <div class="card-body">
                            <p class="fw-bold fs-1">This is new products</p>
                            <p class="">By <a href="" class="link-warning text-decoration-none">Nguyen Vu Anh Khoa</a></p>
                            <p class="">Some new product are trends</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
      </div>
    </div>
@endsection



