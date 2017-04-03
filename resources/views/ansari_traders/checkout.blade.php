@extends('partials/ansari_traders/app')

@section('title')
    Checkout
@endsection

@section('content')

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
                        Checkout
                    </li>
                </ul>
                <ul class="previous">
                    <li><a href="/">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!---728x90--->
            <h2>Your order is ready to Shipped.</h2>

                <div class="col-md-9 col-md-offset-3">

                    <div class="col-md-8">
                        <div class="delivery">
                            <p>Total Products:</p>
                            <span id="note" class="pull-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{session()->has('cart') ? session()->get('cart')->totalQty : '0'}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </div>
                        <div class="delivery">
                            <p>Grand Total:</p>
                            <span id="note" class="pull-left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{session()->has('cart') ? session()->get('cart')->totalPrice : '0'}} (PKR)</span>
                        </div>
                    </div>

                    <div class="col-md-12"><br></div>

                    <form action="/checkout" method="POST">
                        <div class="col-md-8">
                            <label>Name <span id="note">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name" required value="{{old('name')}}">
                        </div>
                        <div class="col-md-4"></div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-8">
                            <label>Email <span id="note">*</span></label>
                            <input type="text" name="email" class="form-control" placeholder="Enter Email" required value="{{old('email')}}">
                        </div>
                        <div class="col-md-4"></div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-8">
                            <label>Phone <span id="note">*</span></label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter Phone" required value="{{old('phone')}}">
                        </div>
                        <div class="col-md-4"></div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-8">
                            <label>City <span id="note">*</span></label>
                            <input type="text" name="city" class="form-control" placeholder="Enter City" required value="{{old('city')}}">
                        </div>
                        <div class="col-md-4"></div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-8">
                            <label>Postal Code <span id="note">*</span></label>
                            <input type="text" name="code" class="form-control" placeholder="Enter Postal Code" required value="{{old('code')}}">
                        </div>
                        <div class="col-md-4"></div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-8">
                            <label>Address <span id="note">*</span></label>
                            <textarea name="address" class="form-control" placeholder="Enter Address" required>{{old('description')}}</textarea>
                        </div>
                        <div class="col-md-4"></div>

                        <div class="col-md-12"><br></div>

                        <div class="col-md-8">
                            <button type="submit" class="btn btn-danger form-control">Buy Now</button>
                        </div>
                        <div class="col-md-4"></div>
{{csrf_field()}}
                    </form>

                </div>


        </div>
    </div>

    <!-- //checkout -->

@endsection