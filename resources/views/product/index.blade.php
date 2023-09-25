@extends("layouts.app")
@section("title", $viewData["title"])
@section("subtitle")
    <i class="fa-solid fa-table-cells"></i>
    {{ $viewData['subtitle'] }}
@overwrite
@section("content")
    <div class="row mb-5">
        @foreach ($viewData["products"] as $product)
            <div class="col-3">
                <div class="card mt-5 mb-5" style="width: 18rem;">
                    <img src="{{ asset('/storage/'.$product->getImage()) }}"
                    class="card-img-top img-card">
                    <div class="card-body text-center">
                        <a href="{{ route('product.show', ['id' => $product->getId()]) }}"
                        class="btn bg-primary text-white">{{$product->getName()}}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
