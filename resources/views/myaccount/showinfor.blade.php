@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
    <div class="container d-grid justify-content-center mb-5 mt-5">
        <div class="card" style="width: 38rem;">
            <div class="card-header">
                <p class="fs-5 fw-bold text-warning">Personal Information</p>
            </div>
            @if (count($viewData['user']) > 0)
            @foreach ($viewData['user'] as $user)
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <p class="fw-bold">Name:</p>
                    </div>
                    <div class="col-10">
                        <p>{{ $user -> getName() }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <p class="fw-bold">Address:</p>
                    </div>
                    <div class="col-10">
                        <p>{{ $user -> getAddress() }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <p class="fw-bold">Phone Number:</p>
                    </div>
                    <div class="col-10">
                        <p>{{ $user -> getPhoneNumber() }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        <p class="fw-bold">Country:</p>
                    </div>
                    <div class="col-10">
                        <p>{{ $user -> getCountry() }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                         <a class="btn btn-success fw-bold" href="{{ route('user.userinfo.edit', ['id' => $user -> getId()]) }}">Edit</a>
                         <a class="btn btn-danger fw-bold" href="{{ route('home.index') }}">Go Back</a>
                    </div>

                </div>
            </div>
            @endforeach
            @else
                <a class="p-3 text-decoration-none text-warning fw-bold fa-fade" href="{{ route('user.userinfo') }}">Update your information, Click here!</a>
            @endif


        </div>
    </div>
@endsection
