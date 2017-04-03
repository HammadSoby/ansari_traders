@extends('partials/ansari_traders/app')

@section('title')
    Home
@endsection

@section('content')

    <div class="banner">
        <div class="container">
            <div class="banner-bottom">
                <div class="banner-bottom-left">
                    <h2>B<br>U<br>Y</h2>
                </div>
                <div class="banner-bottom-right">
                    <div  class="callbacks_container">
                        <ul class="rslides" id="slider4">
                            <li>
                                <div class="banner-info">
                                    <h3>Smart But Casual</h3>
                                    <p>Start your shopping here...</p>
                                </div>
                            </li>
                            <li>
                                <div class="banner-info">
                                    <h3>Shop Online</h3>
                                    <p>Start your shopping here...</p>
                                </div>
                            </li>
                            <li>
                                <div class="banner-info">
                                    <h3>Pack your Bag</h3>
                                    <p>Start your shopping here...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--banner-->
                    <script src="/ansari_traders/js/responsiveslides.min.js"></script>
                    <script>
                        // You can also use "$(window).load(function() {"
                        $(function () {
                            // Slideshow 4
                            $("#slider4").responsiveSlides({
                                auto: true,
                                pager:true,
                                nav:false,
                                speed: 500,
                                namespace: "callbacks",
                                before: function () {
                                    $('.events').append("<li>before event fired.</li>");
                                },
                                after: function () {
                                    $('.events').append("<li>after event fired.</li>");
                                }
                            });

                        });
                    </script>
                </div>
                <div class="clearfix"> </div>
            </div>
            {{--<div class="shop">--}}
                {{--<a href="#">SHOP COLLECTION NOW</a>--}}
            {{--</div>--}}
        </div>
    </div>
    <!---728x90--->
    <!-- content-section-starts-here -->
    <div class="container">
        <div class="main-content">
            <div class="online-strip">
                <div class="col-md-4 follow-us">
                    <h3>Follow us : <a class="twitter" href="#"></a><a class="facebook" href="#"></a></h3>
                </div>
                <div class="col-md-4 shipping-grid">
                    <div class="shipping">
                        <img src="/ansari_traders/images/shipping.png" alt="" />
                    </div>
                    <div class="shipping-text">
                        <h3>Free Shipping</h3>
                        <p>on orders over PKR 5000</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 online-order">
                    <p>Order online</p>
                    <h3>Tel:999 4567 8902</h3>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="products-grid">
                <header>
                    <h3 class="head text-center">Products</h3>
                    <!---728x90--->
                </header>
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
            <center>{!! $products->render() !!}</center>
        </div>

    </div>
    {{--<div class="other-products">--}}
        {{--<div class="container">--}}
            {{--<h3 class="like text-center">Latest Products</h3>--}}
            {{--<ul id="flexiselDemo3">--}}
                {{--@if($products != null)--}}
                    {{--@foreach($products as $product)--}}
                        {{--<li>--}}
                            {{--<a href="/product-detail/{{strtolower($product->mainCategory->name)}}/{{$product->id}}/{{$product->slug}}"><img src="/product_images/{{$product->image}}" alt="" width="384px" height="400px"/></a>--}}
                            {{--<div class="product liked-product simpleCart_shelfItem">--}}
                                {{--<a class="like_name" href="/product-detail/{{strtolower($product->mainCategory->name)}}/{{$product->id}}/{{$product->slug}}">{{$product->subCategory->name}} {{$product->mainCategory->name}}</a>--}}
                                {{--<p><a class="item_add" href="/product-detail/{{strtolower($product->mainCategory->name)}}/{{$product->id}}/{{$product->slug}}"><i></i> <span class="item_price">PKR{{$product->price}} {{$product->weight}}GM</span></a></p>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--@endforeach--}}
                {{--@endif--}}
            {{--</ul>--}}
            {{--<script type="text/javascript">--}}
                {{--$(window).load(function() {--}}
                    {{--$("#flexiselDemo3").flexisel({--}}
                        {{--visibleItems: 4,--}}
                        {{--animationSpeed: 1000,--}}
                        {{--autoPlay: true,--}}
                        {{--autoPlaySpeed: 3000,--}}
                        {{--pauseOnHover: true,--}}
                        {{--enableResponsiveBreakpoints: true,--}}
                        {{--responsiveBreakpoints: {--}}
                            {{--portrait: {--}}
                                {{--changePoint:480,--}}
                                {{--visibleItems: 1--}}
                            {{--},--}}
                            {{--landscape: {--}}
                                {{--changePoint:640,--}}
                                {{--visibleItems: 2--}}
                            {{--},--}}
                            {{--tablet: {--}}
                                {{--changePoint:768,--}}
                                {{--visibleItems: 3--}}
                            {{--}--}}
                        {{--}--}}
                    {{--});--}}

                {{--});--}}
            {{--</script>--}}
            {{--<script type="text/javascript" src="/ansari_traders/js/jquery.flexisel.js"></script>--}}
        {{--</div>--}}
    {{--</div>--}}
    <!-- content-section-ends-here -->


@endsection