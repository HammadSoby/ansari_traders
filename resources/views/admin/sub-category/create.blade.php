@extends('partials/app')
@section('title')
    Date Category
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
                        <a href="/">Dashboard</a>
                    </li>
                    <li class="crumb-link">
                        <a href="/">Home</a>
                    </li>
                    <li class="crumb-trail">Add Date Category</li>
                </ol>
            </div>
        </header>
        <!-- End: Topbar -->

        <!-- Begin: Content -->
        <div id="content" class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">

                    <div class="panel">
                        <div class="panel-heading">
                            <span class="panel-title">Add Date Category</span>
                        </div>
                        <div class="panel-body">
                            <p>Please fill in the information below. The field labels marked with <span style="color: red;">*</span> are required input fields.</p>
                            <form class="form-horizontal" id="form" role="form" action="/ansari-traders/admin/add-sub-category" method="POST">
                                {{csrf_field()}}

                                <div class="col-md-12">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-12">
                                        @if($errors->any())
                                            <div class="alert alert-danger">
                                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                <strong>Danger!</strong> @foreach($errors->all() as $error) <p>{{$error}}</p> @endforeach
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>

                                <div class="form-group">
                                    <label for="name" class="col-lg-3 control-label">Main Category <span style="color: red;">*</span></label>
                                    <div class="col-lg-8">
                                        <select class="form-control" data-placeholder="---Select---" name="main_category_id">
                                            @foreach($main_categories as $main_category)
                                                <option value="{{$main_category->id}}">{{old('main_category_id') ? old('main_category_id'):$main_category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="col-lg-3 control-label">Category Name <span style="color: red;">*</span></label>
                                    <div class="col-lg-8">
                                        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Enter group name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="percentage" class="col-lg-3 control-label">Description </label>
                                    <div class="col-lg-8">
                                        <textarea class="form-control" row="40" placeholder="Type Here" name="description">{{old('description')}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-3"></div>
                                    <div class="col-lg-8">
                                        <button type="submit" class="btn btn-success">Save</button>
                                        <button type="button" onclick="reset()" class="btn btn-danger">Reset</button>
                                        <a href="/ansari-traders/admin/sub-categories"><button type="button" class="btn btn-info">Back</button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->

@endsection