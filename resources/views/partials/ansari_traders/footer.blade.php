<div class="news-letter">
    <div class="container">
        <div class="join">
            <h6>JOIN OUR MAILING LIST</h6>
            <div class="sub-left-right">
                <form>
                    <input type="text" value="Enter Your Email Here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email Here';}" />
                    <input type="submit" value="SUBSCRIBE" />
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="footer_top">
            <div class="span_of_4">
                <div class="col-md-3 span1_of_4">
                    <h4>Shop</h4>
                    <ul class="f_nav">
                        @if($main_categories != null)
                            @foreach($main_categories as $category)
                                <li><a href="/product/{{strtolower($category->name)}}/{{$category->id}}/{{$category->slug}}"><i class="fa fa-list-alt" aria-hidden="true"></i> {{$category->name}}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>Help</h4>
                    <ul class="f_nav">
                        <li><a href="/faq">frequently asked  questions</a></li>
                        <li><a href="/help">Help</a></li>
                    </ul>
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>account</h4>
                    <ul class="f_nav">
                        <li><a href="/login">login</a></li>
                        <li><a href="/register">create an account</a></li>
                        <li><a href="/checkout">my shopping bag</a></li>
                    </ul>
                </div>
                <div class="col-md-3 span1_of_4">
                    <h4>popular</h4>
                    <ul class="f_nav">
                        @if($main_categories != null)
                            @foreach($main_categories as $category)
                                <li><a href="/product/{{strtolower($category->name)}}/{{$category->id}}/{{$category->slug}}"><i class="fa fa-list-alt" aria-hidden="true"></i> {{$category->name}}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="cards text-center">
            <img src="/ansari_traders/images/cards.jpg" alt="" />
        </div>
        <div class="copyright text-center">
            <p>© 2017 Ansari Trader's. All Rights Reserved | Design by   <a href="https://hammadsoby.github.io/" target="_blank">  Code-x</a></p>
        </div>
    </div>
</div>