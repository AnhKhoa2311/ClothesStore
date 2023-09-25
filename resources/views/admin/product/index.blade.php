@extends('layouts.admin')
@section("title",$viewData["title"])
@section('content')
    <div class="card">
        <div class="card-header row">
            <p class="col fs-4 fw-bold">
                Products
            </p>
            <div class="col text-end">
                <a href="{{ route('admin.product.create') }}" class="btn btn-primary" type="button">Create Products</a>
            </div>

        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
          <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($viewData['products'] as $product)
                <tr>
                <td>{{ $product->getId() }}</td>
                <td>{{ $product->getName() }}</td>
                <td>{{ $product->getDescription()}}</td>
                <td>
                    <a href="{{ route('admin.product.edit', ['id'=>$product->getId()]) }}" class="btn btn-primary">
                        <i class="fa-solid fa-pencil"></i>
                    </a>
                </td>
                <td>
                    <form action="{{ route('admin.product.delete', $product->getId()) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-trash" style="color: #361f51;"></i>
                        </button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>

            </table>
        </div>
    </div>

@endsection
