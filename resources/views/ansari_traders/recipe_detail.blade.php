@extends('partials/ansari_traders/app')

@section('title')
    {{ucwords($name)}} Recipe
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
                        @if($menu_recipes != null)
                            @foreach($menu_recipes as $menu_recipe)
                                <li><a href="/recipe-detail/{{$menu_recipe->name}}/{{$menu_recipe->id}}/{{$menu_recipe->slug}}"> {{$menu_recipe->name}}</a></li>
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
                            <li data-thumb="/recipe_images/{{$recipe->image}}">
                                <div class="thumb-image"> <img src="/recipe_images/{{$recipe->image}}" data-imagezoom="true" class="img-responsive" alt="" style="width:384px; height:360px;"/> </div>
                            </li>
                            <li data-thumb="/recipe_images/{{$recipe->image}}">
                                <div class="thumb-image"> <img src="/recipe_images/{{$recipe->image}}" data-imagezoom="true" class="img-responsive" alt="" style="width:384px; height:360px;"/> </div>
                            </li>
                            <li data-thumb="/recipe_images/{{$recipe->image}}">
                                <div class="thumb-image"> <img src="/recipe_images/{{$recipe->image}}" data-imagezoom="true" class="img-responsive" alt="" style="width:384px; height:360px;"/> </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 dress-info">
                    <div class="dress-name">
                        <h3>{{$recipe->name}}</h3>
                        <div class="clearfix"></div>
                        <p>{{$recipe->description}}</p>
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
                <h3 class="like text-center">Related Recipes</h3>
            </header>
            @if($related_recipes != null)
                @foreach($related_recipes as $recipe)
                    <div class="col-md-4 product simpleCart_shelfItem text-center">
                        <a href="/recipe_images/{{$recipe->image}}"><img src="/recipe_images/{{$recipe->image}}" alt="" width="384px" height="350px"/></a>
                        <div class="mask">
                            <a href="/recipe-detail/{{$recipe->name}}/{{$recipe->id}}/{{$recipe->slug}}">Quick View</a>
                        </div>
                        <a class="product_name" href="/recipe-detail/{{$recipe->name}}/{{$recipe->id}}/{{$recipe->slug}}">{{$recipe->name}}</a>
                        <p class="product_name">
                            {{substr($recipe->description,0,150)."..."}} <a class="product_name" href="/recipe-detail/{{$recipe->name}}/{{$recipe->id}}/{{$recipe->slug}}">Read More</a>
                        </p>
                    </div>
                @endforeach
            @endif
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- content-section-ends -->

@endsection