@extends('partials/app')
@section('title')
    Orders
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
                    <li class="crumb-trail">Orders</li>
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


                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-visible" id="spy1">
                            <div class="panel-heading">
                                <div class="panel-title hidden-xs">
                                    <span class="glyphicon glyphicon-tasks"></span>Orders</div>
                            </div>
                            <div class="panel-body pn">
                                <div class="col-md-6">
                                    <form action="/ansari-traders/admin/orders" method="GET">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="search" placeholder="Search...">
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-info">Search</button>
                                            <a href="/ansari-traders/admin/orders"><button type="button" class="btn btn-danger">Remove Filter</button></a>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <a href="/ansari-traders/admin"><button type="button" class="btn btn-primary pull-right"><span class="fa fa-backward"></span> Back</button></a>
                                    <button type="button" class="btn btn-danger pull-right"><span class="fa fa-file-excel-o"></span> Export Excel</button>
                                </div>
                                <table class="table table-striped table-hover" id="datatable" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                        <th>Created_at</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $index = 1; ?>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{$index++}}</td>
                                            <td>{{$order->name}}</td>
                                            <td>{{$order->email}}</td>
                                            <td>{{$order->phone}}</td>
                                            <td>{{$order->address}}</td>
                                            <td>
                                                @if($order->status == "Pending")
                                                    <label class="label label-danger">{{$order->status}}</label>
                                                @else
                                                    <label class="label label-success">{{$order->status}}</label>
                                                @endif
                                            </td>
                                            <td>
                                                <label class="label label-alert">
                                                    {{Carbon\Carbon::parse($order->created_at)->format('d/m/Y')}}
                                                </label>
                                            </td>
                                            <td>
                                                <a href="/ansari-traders/admin/view-order/{{$order->slug}}"><span class="fa fa-eye" title="View Order Invoice"></span></a>
                                                <a href="/ansari-traders/admin/update-order-status/{{$order->slug}}"><span class="fa fa-refresh" title="Update Order Status"></span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


        </section>
    </section>

@endsection