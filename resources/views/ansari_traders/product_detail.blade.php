@extends('partials/ansari_traders/app')

@section('title')
    {{$sub_category->name}} {{ucwords($name)}} Product
@endsection

@section('content')

        <!-- content-section-starts -->
    <div class="container">
        <div class="products-page">
            <!---728x90--->
            <div class="products">
                <div class="product-listy">
                    <h2>our Products</h2>
                    <ul class="product-list">
                        @if($main_categories != null)
                            @foreach($main_categories as $category)
                                <li><a href="/product/{{strtolower($category->name)}}/{{$category->id}}/{{$category->slug}}"> {{$category->name}}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                {{--<div class="latest-bis">--}}
                    {{--<img src="/ansari_traders/images/l4.jpg" class="img-responsive" alt="" />--}}
                    {{--<div class="offer">--}}
                        {{--<p>40%</p>--}}
                        {{--<small>Top Offer</small>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="tags">--}}
                    {{--<h4 class="tag_head">Tags Widget</h4>--}}
                    {{--<ul class="tags_links">--}}
                        {{--<li><a href="#">Kitesurf</a></li>--}}
                        {{--<li><a href="#">Super</a></li>--}}
                        {{--<li><a href="#">Duper</a></li>--}}
                        {{--<li><a href="#">Theme</a></li>--}}
                        {{--<li><a href="#">Men</a></li>--}}
                        {{--<li><a href="#">Women</a></li>--}}
                        {{--<li><a href="#">Equipment</a></li>--}}
                        {{--<li><a href="#">Best</a></li>--}}
                        {{--<li><a href="#">Accessories</a></li>--}}
                        {{--<li><a href="#">Men</a></li>--}}
                        {{--<li><a href="#">Apparel</a></li>--}}
                        {{--<li><a href="#">Super</a></li>--}}
                        {{--<li><a href="#">Duper</a></li>--}}
                        {{--<li><a href="#">Theme</a></li>--}}
                        {{--<li><a href="#">Responsive</a></li>--}}
                        {{--<li><a href="#">Women</a></li>--}}
                        {{--<li><a href="#">Equipment</a></li>--}}
                    {{--</ul>--}}

                {{--</div>--}}

            </div>
            <div class="new-product">
                <div class="col-md-5 zoom-grid">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="/product_images/{{$product->image}}">
                                <div class="thumb-image"> <img src="/product_images/{{$product->image}}" data-imagezoom="true" class="img-responsive" alt="" style="width:384px; height:360px;"/> </div>
                            </li>
                            <li data-thumb="/product_images/{{$product->image}}">
                                <div class="thumb-image"> <img src="/product_images/{{$product->image}}" data-imagezoom="true" class="img-responsive" alt="" style="width:384px; height:360px;"/> </div>
                            </li>
                            <li data-thumb="/product_images/{{$product->image}}">
                                <div class="thumb-image"> <img src="/product_images/{{$product->image}}" data-imagezoom="true" class="img-responsive" alt="" style="width:384px; height:360px;"/> </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 dress-info">
                    <div class="dress-name">
                        <h3>{{$sub_category->name}} {{ucwords($name)}}</h3>
                        <span>PKR{{$product->price}}</span>
                        <div class="clearfix"></div>
                        <p>{{$product->description}}</p>
                    </div>
                    <div class="span span1">
                        <p class="left">WEIGHT</p>
                        <p class="right">{{$product->weight}}</p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="span span2">
                        <p class="left">PRICE</p>
                        <p class="right">{{$product->price}}</p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="span span3">
                        <p class="left">Quality</p>
                        <p class="right">Imported</p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="purchase">
                        <a href="/add-to-cart/{{strtolower($product->mainCategory->name)}}/{{$product->id}}/{{$product->slug}}"><button class="btn btn-danger">Add to Cart</button></a>
                        <div class="clearfix"></div>
                    </div>
                    <script src="/ansari_traders/js/imagezoom.js"></script>
                    <!-- FlexSlider -->
                    <script defer src="/ansari_traders/js/jquery.flexslider.js"></script>
                    <script>
                        // Can also be used with $(document).ready()
                        $(window).load(function() {
                            $('.flexslider').flexslider({
                                animation: "slide",
                                controlNav: "thumbnails"
                            });
                        });
                    </script>
                </div>
                <div class="clearfix"></div>
                <!---728x90--->

            </div>
            <!---728x90--->
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="other-products products-grid">
        <div class="container">
            <header>
                <h3 class="like text-center">Related Products</h3>
            </header>
            @if($related_products != null)
                @foreach($related_products as $product)
                    <div class="col-md-4 product simpleCart_shelfItem text-center">
                        <a href="/product-detail/{{strtolower($product->mainCategory->name)}}/{{$product->id}}/{{$product->slug}}"><img src="/product_images/{{$product->image}}" alt="" width="384px" height="400px"/></a>
                        <div class="mask">
                            <a href="/product-detail/{{strtolower($product->mainCategory->name)}}/{{$product->id}}/{{$product->slug}}">Quick View</a>
                        </div>
                        <a class="product_name" href="/product-detail/{{strtolower($product->mainCategory->name)}}/{{$product->id}}/{{$product->slug}}">{{$product->subCategory->name}} {{$product->mainCategory->name}}</a>
                        <p><a class="item_add" href="/product-detail/{{strtolower($product->mainCategory->name)}}/{{$product->id}}/{{$product->slug}}"><i></i> <span class="item_price">PKR{{$product->price}} {{$product->weight}}GM</span></a></p>
                    </div>
                @endforeach
            @endif
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- content-section-ends -->
    
@endsection