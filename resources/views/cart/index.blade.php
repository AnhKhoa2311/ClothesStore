@extends('layouts.app')
@section("title",$viewData["title"])
@section('subtitle')
    <i class="fa-solid fa-cart-shopping me-2"></i>{{ $viewData['subtitle'] }}
@overwrite
@section('content')
    <div class="card mb-5">
        <div class="card-header">
            Products In Cart
        </div>
        <div class="card-body">
            <table class="table table-bordered table striped text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData["products"] as $product)
                        <tr>
                            <td>{{ $product->getId() }}</td>
                            <td>{{ $product->getName() }}</td>
                            <td>{{ $product->getPrice() }}</td>
                            <td>{{ session("products")[$product->getId()] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="text-end">
                    <a class="btn btn-outline-secondary mb-2" href=""> <b>Total to pay: </b> ${{ $viewData["total"] }}</a>
                    @if (count($viewData["products"]) > 0)
                        <a class="btn btn-primary text-white mb-2" href="{{ route('cart.purchase') }}">Purchase</a>
                        <a href="{{ route('cart.delete') }}">
                            <button class="btn btn-danger mb-2">
                                Remove all from Cart
                            </button>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

