<!-- header-section-starts -->
<div class="header">
    <div class="header-top-strip">
        <div class="container">
            <div class="header-top-left">
                <ul>
                    <li><a href="/"><span  style="font-size: 16px;">Ansari Trader's</span> &nbsp;Importer Exporter & Contractor</a></li>
                    {{--<li><a href="/login"><span class="glyphicon glyphicon-user"> </span>Login</a></li>--}}
                    {{--<li><a href="/register"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>--}}
                </ul>
            </div>
            <div class="header-right">
                <div class="cart box_1">
                    <a href="/checkout">
                        <h3> <span> PKR {{session()->has('cart') ? session()->get('cart')->totalPrice : '0'}} </span> (<span id="simpleCart_quantity"> {{session()->has('cart') ? session()->get('cart')->totalQty : '0'}} </span>)<img src="/ansari_traders/images/bag.png" alt=""></h3>
                    </a>
                    @if(session()->has('cart'))
                        <p><a href="/shopping-cart" class="simpleCart_empty">Cart <i class="badge">{{session()->has('cart') ? session()->get('cart')->totalQty : '0'}}</i></a></p>
                    @else
                        <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                    @endif
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- header-section-ends -->
<div class="banner-top">
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo">
                    <h1><a href="/"><span>A</span> -Trader's</a></h1>
                </div>
            </div>
            <!--/.navbar-header-->

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/recipes"><i class="fa fa-book"></i> Recipes</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                        <ul class="dropdown-menu multi-column columns-3">
                            <div class="row">
                                @if($main_categories != null)
{{--                                    @foreach($main_categories->chunk(8) as $chunkCategories)--}}
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                @foreach($main_categories as $category)
                                                    <li><a href="/product/{{strtolower($category->name)}}/{{$category->id}}/{{$category->slug}}"><i class="fa fa-list-alt" aria-hidden="true"></i> {{$category->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    {{--@endforeach--}}
                                @endif
                                <div class="clearfix"></div>
                            </div>
                        </ul>
                    </li>
                    <li><a href="/contact-us"><i class="fa fa-map-marker" aria-hidden="true"></i> Contact Us</a></li>
                    <li><a href="/checkout"><i class="fa fa-map-marker" aria-hidden="true"></i> Checkout</a></li>

                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif

                </ul>
            </div>
            <!--/.navbar-collapse-->
        </nav>
        <!--/.navbar-->
    </div>
</div>