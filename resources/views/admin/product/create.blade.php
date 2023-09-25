@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<div class="card mb-4">
    <div class="card-header">
        Create Products
    </div>
    <div class="card-body">
        @if ($errors->any())
            <ul class="alert alert-danger list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Name:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
                <input name="name" value="{{ old('name') }}" type="text" class="form-control">
            </div>
            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Price:</label>
            <div class="col-lg-10 col-md-6 col-sm-12">
                <input name="price" value="{{ old('price') }}" type="number" class="form-control">
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3 mt-3 row">
                        <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Image:</label>
                        <div class="col-lg-10 col-md-6 col-sm-12">
                            <input class="form-control" type="file" name="image">
                        </div>
                    </div>
                </div>
                <div class="col">
                    &nbsp;
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="3">{{ old('description') }}
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
