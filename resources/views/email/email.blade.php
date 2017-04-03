<html>
<head>

    <title>
        Ansari Trader's Invoice
    </title>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<style>
    .invoice {
        position: relative;
        background: #fff;
        border: 1px solid #f4f4f4;
        padding: 20px;
        margin: 10px 25px;
    }
    .page-header {
        margin: 10px 0 20px 0;
        font-size: 22px;
    }
    .content_content{
        width: 70%;
        margin: auto;
    }
</style>

<style type="text/css" media="print">
    .no-print{
        display: none;
    }
    .content_content{
        width: 100%;
    }
    .footer{
        margin-top: 580px;
    }
    @page {
        size: auto;   /* auto is the initial value */
        margin: 0;  /* this affects the margin in the printer settings */
    }
</style>

<body>
<section class="content content_content">
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-globe"></i> Ansari Trader's
                    <small class="pull-right">Date: {{\Carbon\Carbon::parse($order->created_at)->format('Y/d/m')}}</small>
                </h2>
            </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-md-4 col-sm-2 col-xs-4 invoice-col">
                From
                <address>
                <strong>
                    Ansari Trader's                                    </strong>
                <br>
                Address:
                Sargodha                                    <br>
                Phone:
                +92 304 696 7317                                   <br>
                Email:info@ansaritraders.com                                </address>
            </div><!-- /.col -->
            <div class="col-md-4 col-sm-2 col-xs-4 invoice-col">
                To
                <address>
                    <strong>
                        {{$order->name}}                                    </strong>
                    <br>
                    Address:
                    {{$order->address}}                                    <br>
                    Phone:
                    {{$order->phone}}                                   <br>
                    Email:{{$order->email}}                                </address>
            </div><!-- /.col -->
            <div class="col-md-4 col-sm-2 col-xs-4 invoice-col">
                <b>Invoice #{{$order->id}}</b><br>
                <br>
                <b>Order ID:</b> {{$order->id}}<br>
                <b>Payment Due:</b> {{\Carbon\Carbon::parse($order->created_at)->addDays(1)->format('Y/d/m')}}<br>
                <b>Payment Method:</b> <span style="color: red;">Cash on Delivery</span>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Weight</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($cart->items as $product)
                            <tr>
                                <td>{{$product['item']->subCategory->name}}</td>
                                <td>{{$product['qty']}}</td>
                                <td>{{$product['item']['weight']}} (GM)</td>
                                <td>{{$product['item']['price']}} (PKR)</td>
                                <td>{{$product['price']}} (PKR)</td>
                            </tr>
                    @endforeach

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <th>Grand Total</th>
                        <td>{{$cart->totalPrice}} (PKR)</td>
                    </tr>

                    </tbody>
                </table>
            </div><!-- /.col -->
        </div><!-- /.row -->


        <div class="row footer">
            <div class="col-xs-12">
                <span class="pull-left copy">&copy; 2017 Ansari Trader's Importer Exporter & Contractor</span>
                <span class="pull-right no-print code">Powered By <a href="https://hammadsoby.github.io/" target="_blank">Code-x</a></span>
            </div>
        </div>


    </section>

    <!-- this row will not appear when printing -->
    <div class="row no-print">
        <div class="col-xs-12">
            <a href="/ansari-traders/admin/orders"><button class="btn btn-danger pull-right"><i class="fa fa-credit-card"></i> Back to Orders</button></a>

            <a href="javascript:print();" class="btn btn-default pull-right" style="margin-right: 10px;"><i class="fa fa-print"></i> Print</a>
        </div>
    </div>

</section>

</body>
</html>