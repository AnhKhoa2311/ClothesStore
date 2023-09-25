@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <div class="row">
        <div class="col">
            <p class="fs-4 fw-bold ps-2">Admins</p>
        </div>
        <div class="col text-end me-2 mt-1">
            <a class="btn btn-primary" href="{{ route('admin.admins.create') }}">Create admin</a>
        </div>
    </div>
    <table class="table table-bordered border-primary table-striped table-hover">
        <thead class="table-active">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($viewData['admins'] as $admin)
                <tr>
                    <td>{{ $admin -> getName() }}</td>
                    <td>{{ $admin -> getEmail() }}</td>
                    <td>{{ $admin -> getRole() }}</td>
                    <td>
                        <a class="text-success fs-5" href="{{ route('admin.admin.edit', ['id' => $admin -> getId()]) }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a class="text-danger fs-5 ms-1" href="{{ route('admin.admin.delete', ['id' => $admin -> getId()]) }}">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
