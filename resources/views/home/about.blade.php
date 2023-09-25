@extends("layouts.app")
@section("title", $viewData["title"])
@section("subtitle", $viewData["subtitle"])
@section('content')
    {{--  <div class="container">
        <div class="row">
            <div class="col-lg-4 ms-auto">
                <p class="lead">{{ $viewData["description"] }}</p>
            </div>
            <div class="col-lg-4 ms-auto">
                <p class="lead">{{ $viewData["author"] }}</p>
            </div>
        </div>
    </div>  --}}
    <!--about section area -->
    <div class="about_section">
        <div class="container">
            <div class="row">
                <div class=" col-lg-6 col-md-12">
                    <div class="about_content">
                        <h1>Welcome To Reid Store!</h1>
                        <p> Quibusdam perspiciatis pariatur magnam ducimus excepturi error libero provident animi laboriosam maiores ad explicabo ea laudantium nostrum dolor distinctio, quas fugiat doloribus, sit, possimus obcaecati ab quo vel commodi eum. Laudantium libero, voluptate rerum sunt hic,</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse numquam blanditiis quos, fuga, aspernatur doloribus expedita, soluta dolore cumque.</p>
                        <div class="view__work">
                            <a class="btn btn-success" href="#">view work </a>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-6 col-md-12">
                    <div class="about_thumb">
                        <img class="img-fluid" src="{{asset ('/img/about1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--about section end-->


    <!--counterup area -->

    <!--counterup end-->

    <!--about progress bar -->
    <div class="about_progressbar">
        <div class="container mt-5 mb-5">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="progressbar_inner">
                       <h2>Special Products</h2>
                       <p> Quibusdam perspiciatis pariatur magnam ducimus excepturi error libero provident animi laboriosam maiores ad explicabo ea laudantium nostrum dolor distinctio, quas fugiat doloribus, sit, possimus obcaecati ab quo vel commodi eum. Laudantium libero, voluptate rerum sunt hic,</p>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse numquam blanditiis quos, fuga, aspernatur doloribus expedita, soluta dolore cumque.</p>
                       <div class="view__work">
                           <a href="#">view work </a>
                       </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__img">
                        <img class="img-fluid" src="{{asset('/img/about2.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--about progress bar end -->
@endsection

