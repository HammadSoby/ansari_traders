 <!-- Start: Header -->
    <header class="navbar navbar-fixed-top bg-light">
        <div class="navbar-branding">
            <a class="navbar-brand" href="/ansari-traders/admin"> <b>Ansari</b>Trader's
            </a>
            <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
            <ul class="nav navbar-nav pull-right hidden">
                <li>
                    <a href="#" class="sidebar-menu-toggle">
                        <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
                    </a>
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav navbar-left">
            {{--<li>--}}
                {{--<a class="sidebar-menu-toggle" href="#">--}}
                    {{--<span class="octicon octicon-ruby fs18"></span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a class="topbar-menu-toggle" href="#">--}}
                    {{--<span class="glyphicons glyphicons-magic fs16"></span>--}}
                {{--</a>--}}
            {{--</li>--}}
            <li>
                <span id="toggle_sidemenu_l2" class="glyphicon glyphicon-log-in fa-flip-horizontal hidden"></span>
            </li>
            <li class="dropdown hidden">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="glyphicons glyphicons-settings fs14"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="javascript:void(0);">
                            <span class="fa fa-times-circle-o pr5 text-primary"></span> Reset LocalStorage </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="fa fa-slideshare pr5 text-info"></span> Force Global Logout </a>
                    </li>
                    <li class="divider mv5"></li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="fa fa-tasks pr5 text-danger"></span> Run Cron Job </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <span class="fa fa-wrench pr5 text-warning"></span> Maintenance Mode </a>
                    </li>
                </ul>
            </li>
            <li class="hidden-xs">
                <a class="request-fullscreen toggle-active" href="#">
                    <span class="octicon octicon-screen-full fs18"></span>
                </a>
            </li>
        </ul>
        {{--<form class="navbar-form navbar-left navbar-search ml5" role="search">--}}
            {{--<div class="form-group">--}}
                {{--<input type="text" class="form-control" placeholder="Search..." value="Search...">--}}
            {{--</div>--}}
        {{--</form>--}}
        <ul class="nav navbar-nav navbar-right">
            {{--<li class="dropdown dropdown-item-slide">--}}
                {{--<a class="dropdown-toggle pl10 pr10" data-toggle="dropdown" href="#">--}}
                    {{--<span class="octicon octicon-radio-tower fs18"></span>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu dropdown-hover dropdown-persist pn w350 bg-white animated animated-shorter fadeIn" role="menu">--}}
                    {{--<li class="bg-light p8">--}}
                        {{--<span class="fw600 pl5 lh30"> Notifications</span>--}}
                        {{--<span class="label label-warning label-sm pull-right lh20 h-20 mt5 mr5">12</span>--}}
                    {{--</li>--}}
                    {{--<li class="p10 br-t item-1">--}}
                        {{--<div class="media">--}}
                            {{--<a class="media-left" href="#"> <img src="/admin/assets/img/avatars/2.jpg" class="mw40" alt="holder-img"> </a>--}}
                            {{--<div class="media-body va-m">--}}
                                {{--<h5 class="media-heading mv5">Article <small class="text-muted">- 08/16/22</small> </h5> Last Updated 36 days ago by--}}
                                {{--<a class="text-system" href="#"> Max </a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="p10 br-t item-2">--}}
                        {{--<div class="media">--}}
                            {{--<a class="media-left" href="#"> <img src="/admin/assets/img/avatars/3.jpg" class="mw40" alt="holder-img"> </a>--}}
                            {{--<div class="media-body va-m">--}}
                                {{--<h5 class="media-heading mv5">Article <small class="text-muted">- 08/16/22</small> </h5> Last Updated 36 days ago by--}}
                                {{--<a class="text-system" href="#"> Max </a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="p10 br-t item-3">--}}
                        {{--<div class="media">--}}
                            {{--<a class="media-left" href="#"> <img src="/admin/assets/img/avatars/4.jpg" class="mw40" alt="holder-img"> </a>--}}
                            {{--<div class="media-body va-m">--}}
                                {{--<h5 class="media-heading mv5">Article <small class="text-muted">- 08/16/22</small> </h5> Last Updated 36 days ago by--}}
                                {{--<a class="text-system" href="#"> Max </a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="p10 br-t item-4">--}}
                        {{--<div class="media">--}}
                            {{--<a class="media-left" href="#"> <img src="/admin/assets/img/avatars/5.jpg" class="mw40" alt="holder-img"> </a>--}}
                            {{--<div class="media-body va-m">--}}
                                {{--<h5 class="media-heading mv5">Article <small class="text-muted">- 08/16/22</small> </h5> Last Updated 36 days ago by--}}
                                {{--<a class="text-system" href="#"> Max </a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="dropdown">--}}
                {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">--}}
                    {{--<span class="flag-xs flag-us"></span>--}}
                    {{--<span class="fw600">US</span>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu animated animated-short flipInX" role="menu">--}}
                    {{--<li>--}}
                        {{--<a href="javascript:void(0);" class="fw600">--}}
                            {{--<span class="flag-xs flag-in mr10"></span> Hindu </a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="javascript:void(0);" class="fw600">--}}
                            {{--<span class="flag-xs flag-tr mr10"></span> Turkish </a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="javascript:void(0);" class="fw600">--}}
                            {{--<span class="flag-xs flag-es mr10"></span> Spanish </a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            <li class="ph10 pv20 hidden-xs"> <i class="fa fa-circle text-tp fs8"></i>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="/admin/assets/img/avatars/1.jpg" alt="avatar" class="mw30 br64 mr15">
                    <span>Mudassar Iqbal</span>
                    <span class="caret caret-tp hidden-xs"></span>
                </a>
                <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
                    <li class="bg-light br-b br-light p8">
                            <span class="pull-left ml10">
                                <select id="user-status">
                                    <optgroup label="Current Status:">
                                        <option value="1-1">Away</option>
                                        <option value="1-2">Offline</option>
                                        <option value="1-3" selected="selected">Online</option>
                                    </optgroup>
                                </select>
                            </span>

                            <span class="pull-right mr10">
                                <select id="user-role">
                                    <optgroup label="Logged in As:">
                                        <option value="1-1">Client</option>
                                        <option value="1-2">Editor</option>
                                        <option value="1-3" selected="selected">Admin</option>
                                    </optgroup>
                                </select>
                            </span>
                        <div class="clearfix"></div>

                    </li>
                    <li class="of-h">
                        <a href="#" class="fw600 p12 animated animated-short fadeInUp">
                            <span class="fa fa-envelope pr5"></span> Messages
                            <span class="pull-right lh20 h-20 label label-warning label-sm">2</span>
                        </a>
                    </li>
                    <li class="br-t of-h">
                        <a href="#" class="fw600 p12 animated animated-short fadeInUp">
                            <span class="fa fa-user pr5"></span> Friends
                            <span class="pull-right lh20 h-20 label label-warning label-sm">6</span>
                        </a>
                    </li>
                    <li class="br-t of-h">
                        <a href="#" class="fw600 p12 animated animated-short fadeInDown">
                            <span class="fa fa-gear pr5"></span> Account Settings </a>
                    </li>
                    <li class="br-t of-h">
                        <a href="#" class="fw600 p12 animated animated-short fadeInDown">
                            <span class="fa fa-power-off pr5"></span> Logout </a>
                    </li>
                </ul>
            </li>
        </ul>

    </header>
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-primary">
        <div class="nano-content">

            <!-- Start: Sidebar Header -->
            <header class="sidebar-header">
                <div class="user-menu">
                    <div class="row text-center mbn">
                        <div class="col-xs-4">
                            <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                                <span class="glyphicons glyphicons-home"></span>
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                                <span class="glyphicons glyphicons-inbox"></span>
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                                <span class="glyphicons glyphicons-bell"></span>
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                                <span class="glyphicons glyphicons-imac"></span>
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicons glyphicons-settings"></span>
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                                <span class="glyphicons glyphicons-restart"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End: Sidebar Header -->

            <!-- sidebar menu -->
            <ul class="nav sidebar-menu">
                <li class="sidebar-label pt20">Menu</li>

                <li class="active">
                    <a href="/ansari-traders/admin">
                        <span class="glyphicons glyphicons-home"></span>
                        <span class="sidebar-title">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-label pt15">Ansari Trader's Website</li>

                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="glyphicon glyphicon-retweet"></span>
                        <span class="sidebar-title">Product Categories</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="/ansari-traders/admin/categories">
                                <span class="glyphicon glyphicon-th-large"></span> Add Main Categories </a>
                        </li>
                        <li>
                            <a href="/ansari-traders/admin/sub-categories">
                                <span class="glyphicon glyphicon-th"></span> Add Sub Categories </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="/ansari-traders/admin/products">
                        <span class="glyphicon glyphicon-th-list"></span> Add Product </a>
                </li>

                <li>
                    <a href="/ansari-traders/admin/recipes">
                        <span class="glyphicon glyphicon-list-alt"></span> Add Recipes </a>
                </li>

                <li>
                    <a href="/ansari-traders/admin/orders">
                        <span class="glyphicon glyphicon-sort-by-order-alt"></span> View Orders </a>
                </li>

                {{--<li>--}}
                    {{--<a href="/ansari-traders/admin/slider">--}}
                        {{--<span class="glyphicon glyphicon-film"></span> Add Slider Images </a>--}}
                {{--</li>--}}


            </ul>
            <div class="sidebar-toggle-mini">
                <a href="#">
                    <span class="fa fa-sign-out"></span>
                </a>
            </div>
        </div>
    </aside>