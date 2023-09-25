@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
     <div class="row mb-5">
        <div class="col-md-6 col-xl-6 col-lg-4 mb-2 text-center">
            <img src="{{ asset('/img/blog2.jpg') }}" class="img-fluid rounded" />
        </div>
        <div class="col-md-6 col-xl-6 col-lg-4 mb-2 text-center">
            <img src="{{ asset('/img/blog3.jpg') }}" class="img-fluid rounded"/>
        </div>
    </div>
@endsection
