@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <div class="row">
        <div class="col">
            <p class="fs-4 fw-bold ps-2">Users</p>
        </div>
        {{--  <div class="col text-end me-2 mt-1">
            <a class="btn btn-primary" href="{{ route('admin.admins.create') }}">Create users</a>
        </div>  --}}
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
            @foreach ($viewData['users'] as $user)
                <tr>
                    <td>{{ $user -> getName() }}</td>
                    <td>{{ $user -> getEmail() }}</td>
                    <td>{{ $user -> getRole() }}</td>
                    <td>
                        {{--  <a class="text-success fs-5" href="{{ route('admin.admin.edit', ['id' => 1]) }}">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>  --}}
                        <a class="text-danger fs-5 ms-1" href="{{ route('admin.user.delete', ['id' => $user -> getId()]) }}">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
