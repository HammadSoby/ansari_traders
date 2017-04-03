@extends('partials/app')
@section('title')
    Sub Categories
@endsection
@section('content')

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

        <!-- Start: Topbar-Dropdown -->
        <div id="topbar-dropmenu">
            <div class="topbar-menu row">
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-success">
                        <span class="metro-icon glyphicons glyphicons-inbox"></span>
                        <p class="metro-title">Messages</p>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-info">
                        <span class="metro-icon glyphicons glyphicons-parents"></span>
                        <p class="metro-title">Users</p>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-alert">
                        <span class="metro-icon glyphicons glyphicons-headset"></span>
                        <p class="metro-title">Support</p>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-primary">
                        <span class="metro-icon glyphicons glyphicons-cogwheels"></span>
                        <p class="metro-title">Settings</p>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-warning">
                        <span class="metro-icon glyphicons glyphicons-facetime_video"></span>
                        <p class="metro-title">Videos</p>
                    </a>
                </div>
                <div class="col-xs-4 col-sm-2">
                    <a href="#" class="metro-tile bg-system">
                        <span class="metro-icon glyphicons glyphicons-picture"></span>
                        <p class="metro-title">Pictures</p>
                    </a>
                </div>
            </div>
        </div>
        <!-- End: Topbar-Dropdown -->

        <!-- Start: Topbar -->
        <header id="topbar">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="crumb-active">
                        <a href="/ansari-traders/admin">Dashboard</a>
                    </li>
                    <li class="crumb-link">
                        <a href="/ansari-traders/admin">Home</a>
                    </li>
                    <li class="crumb-trail">Sub Categories</li>
                </ol>
            </div>
        </header>
        <!-- End: Topbar -->

        <!-- Begin: Content -->
        <section id="content" class="animated fadeIn">

            @if(session()->has('success'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> <p>{{session()->get('success')}}</p>
                </div>
            @endif

                @if(session()->has('danger'))
                    <div class="alert alert-danger">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Danger!</strong> <p>{{session()->get('danger')}}</p>
                    </div>
            @endif

            <!-- Dashboard Tiles -->
            {{--<div class="row mb10">--}}
                {{--<div class="col-md-3">--}}
                    {{--<div class="panel bg-alert light of-h mb10">--}}
                        {{--<div class="pn pl20 p5">--}}
                            {{--<div class="icon-bg"> <i class="fa fa-comments-o"></i> </div>--}}
                            {{--<h2 class="mt15 lh15"> <b>523</b> </h2>--}}
                            {{--<h5 class="text-muted">Comments</h5>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3">--}}
                    {{--<div class="panel bg-info light of-h mb10">--}}
                        {{--<div class="pn pl20 p5">--}}
                            {{--<div class="icon-bg"> <i class="fa fa-twitter"></i> </div>--}}
                            {{--<h2 class="mt15 lh15"> <b>348</b> </h2>--}}
                            {{--<h5 class="text-muted">Tweets</h5>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3">--}}
                    {{--<div class="panel bg-danger light of-h mb10">--}}
                        {{--<div class="pn pl20 p5">--}}
                            {{--<div class="icon-bg"> <i class="fa fa-bar-chart-o"></i> </div>--}}
                            {{--<h2 class="mt15 lh15"> <b>267</b> </h2>--}}
                            {{--<h5 class="text-muted">Reach</h5>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3">--}}
                    {{--<div class="panel bg-warning light of-h mb10">--}}
                        {{--<div class="pn pl20 p5">--}}
                            {{--<div class="icon-bg"> <i class="fa fa-envelope"></i> </div>--}}
                            {{--<h2 class="mt15 lh15"> <b>714</b> </h2>--}}
                            {{--<h5 class="text-muted">Comments</h5>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-visible" id="spy1">
                        <div class="panel-heading">
                            <div class="panel-title hidden-xs">
                                <span class="glyphicon glyphicon-tasks"></span>Sub Categories</div>
                        </div>
                        <div class="panel-body pn">
                            <a href="/ansari-traders/admin"><button type="button" class="btn btn-primary pull-right"><span class="fa fa-backward"></span> Back</button></a>
                            <button type="button" class="btn btn-danger pull-right"><span class="fa fa-file-excel-o"></span> Export Excel</button>
                            <a href="/ansari-traders/admin/add-sub-category"><button type="button" class="btn btn-success pull-right"><span class="fa fa-plus"></span> Add Sub Category</button></a>
                            <table class="table table-striped table-hover" id="datatable" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Main Category</th>
                                    <th>Category Name</th>
                                    <th>Description</th>
                                    <th>Created On</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $index = 1; ?>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$index++}}</td>
                                        <td>{{$category->mainCategory->name}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->description}}</td>
                                        <td>
                                            <label class="label label-alert">
                                                {{Carbon\Carbon::parse($category->created_at)->format('d/m/Y')}}
                                            </label>
                                        </td>
                                        <td>
                                            <a href="/ansari-traders/admin/view-sub-category/{{$category->slug}}"><span class="fa fa-eye" title="Edit Group"></span></a>
                                            <a href="/ansari-traders/admin/edit-sub-category/{{$category->slug}}"><span class="fa fa-edit" title="Edit Group"></span></a>
                                            <a href="/ansari-traders/admin/delete-sub-category/{{$category->slug}}"><span class="fa fa-trash-o" title="Edit Group"></span></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {!! $categories->render() !!}
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </section>

@endsection