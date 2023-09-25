@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <div class="card mb-4">
        <div class="card-header fw-bold fs-5">
            Edit Admins id:{{ $viewData['adminfounds'] -> getId() }}
        </div>
        <div class="card-body">
            @if ($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ route('admin.admin.update', ['id' => $viewData['adminfounds'] -> getId()]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
                <div class="col-lg-10 col-md-6 col-sm-12">
                    <input name="name" value="{{ $viewData['adminfounds'] -> getName() }}" type="text" class="form-control">
                </div>
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Email:</label>
                <div class="col-lg-10 col-md-6 col-sm-12">
                    <input name="email" value="{{ $viewData['adminfounds'] -> getEmail() }}" type="text" class="form-control">
                </div>
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Password:</label>
                <div class="col-lg-10 col-md-6 col-sm-12">
                    <input name="password" value="{{ $viewData['adminfounds'] -> getPassword() }}" type="text" class="form-control">
                </div>
                <div class="mb-3 ms-2">
                    <label for="roles" class="form-label">Role</label>
                    <select class="form-select" name="role" id="roles" aria-label=".form-select example">
                        <option value="admin" selected>admin</option>
                        <option value="client">client</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary ms-2">Update</button>
            </form>
        </div>
    </div>
@endsection
