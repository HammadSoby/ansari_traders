@extends('partials/ansari_traders/app')

@section('title')
    Shopping Cart
@endsection

@section('content')

@if(session()->has('cart'))
        <!-- checkout -->
    <div class="cart-items">
        <div class="container">
            <div class="dreamcrub">
                <ul class="breadcrumbs">
                    <li class="home">
                        <a href="/" title="Go to Home Page">Home</a>&nbsp;
                        <span>&gt;</span>
                    </li>
                    <li class="women">
                        Cart
                    </li>
                </ul>
                <ul class="previous">
                    <li><a href="/">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>

                @foreach($products as $product)
                    <div class="cart-header">
                    <div>
                        <div class="dropdown pull-right">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="/reduce-product-by-one/{{$product['item']['id']}}">Reduce by 1</a></li>
                                <li><a href="/reduce-all-product/{{$product['item']['id']}}">Reduce All</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="cart-sec simpleCart_shelfItem">
                        <div class="cart-item cyc">
                            <img src="/product_images/{{$product['item']['image']}}" class="img-responsive" alt="" style="height:200px;">
                        </div>
                        <div class="cart-item-info">
                            <h3>
                                <a href="javascript:;"> {{$product['item']->subCategory->name}} </a>
                            </h3>
                            <ul class="qty">
                                <li><p>Quantity:</p></li>
                                <li><p>{{$product['qty']}}</p></li>
                                <li><p>Weight:</p></li>
                                <li><p>{{$product['item']['weight']}} (GM)</p></li>
                                <li><p>Price:</p></li>
                                <li><p>{{$product['item']['price']}} (PKR)</p></li>
                            </ul>
                            <div class="delivery">
                                <p>Total : {{$product['price']}} (PKR)</p>
                                <span id="note">Cash On Delivery</span>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                    </div>
                </div>
                @endforeach

                <div class="col-md-4 col-md-offset-8">
                    <div class="delivery">
                        <p>Total Products:</p>
                        <span id="note">{{session()->has('cart') ? session()->get('cart')->totalQty : '0'}}</span>
                    </div>
                </div>

                <div class="col-md-4 col-md-offset-8">
                    <div class="delivery">
                        <p>Grand Total:</p>
                        <span id="note">{{session()->has('cart') ? session()->get('cart')->totalPrice : '0'}} (PKR)</span>
                    </div>
                </div>

                <div class="col-md-4 col-md-offset-8">
                    <div class="delivery">
                        <a href="/checkout"><button class="btn btn-success form-control">Checkout</button></a>
                    </div>
                </div>

            </div>
        </div>
    <!-- //checkout -->
@else

    <div class="cart-items">
        <div class="container">
            <div class="dreamcrub">
                <ul class="breadcrumbs">
                    <li class="home">
                        <a href="/" title="Go to Home Page">Home</a>&nbsp;
                        <span>&gt;</span>
                    </li>
                    <li class="women">
                        Cart
                    </li>
                </ul>
                <ul class="previous">
                    <li><a href="/">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>



            <div class="container">
                <div class="delivery">
                    <h1>
                        No Items in Cart!
                    </h1>
                </div>
            </div>

            <div class="col-md-12"><br><br><br><br><br></div>

        </div>
    </div>
    <!-- //checkout -->


@endif

@endsection