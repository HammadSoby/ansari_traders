@extends('partials/ansari_traders/app')

@section('title')
    {{ucwords($name)}} Products
@endsection

@section('content')

        <!-- content-section-starts -->
    <div class="container">
        <div class="products-grid">
            @if($products != null)
                @foreach($products as $product)
                    <div class="col-md-4 product simpleCart_shelfItem text-center">
                        <a href="/product-detail/{{strtolower($product->mainCategory->name)}}/{{$product->id}}/{{$product->slug}}"><img src="/product_images/{{$product->image}}" alt="" width="384px" height="350px"/></a>
                        <div class="mask">
                            <a href="/product-detail/{{strtolower($product->mainCategory->name)}}/{{$product->id}}/{{$product->slug}}">Quick View</a>
                        </div>
                        <a class="product_name" href="/product-detail/{{strtolower($product->mainCategory->name)}}/{{$product->id}}/{{$product->slug}}">{{$product->subCategory->name}} {{$product->mainCategory->name}}</a>
                        <p>
                            <a class="item_add" href="/product-detail/{{strtolower($product->mainCategory->name)}}/{{$product->id}}/{{$product->slug}}"><i></i> <span class="item_price">PKR{{$product->price}} {{$product->weight}}GM</span></a><br>
                            <a href="/add-to-cart/{{strtolower($product->mainCategory->name)}}/{{$product->id}}/{{$product->slug}}"><button class="btn btn-danger form-control">Add to Cart</button></a>
                        </p>
                    </div>
                @endforeach
            @endif
            <div class="clearfix"></div>
        </div>
    </div>


@endsection
