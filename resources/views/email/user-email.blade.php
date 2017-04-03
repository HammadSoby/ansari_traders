<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ansari Trader's Order Confirmation Email</title>
</head>

<body>
<div class="invoice-box" style="max-width: 800px;margin: auto;padding: 30px;border: 1px solid #eee;box-shadow: 0 0 10px rgba(0, 0, 0, .15);font-size: 16px;line-height: 24px;font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;color: #555;">
    <table cellpadding="0" cellspacing="0" style="width: 100%;line-height: inherit;text-align: left;">
        <tr class="top">
            <td colspan="5" style="text-align: center;">
                Thanks for reaching out to us!
            </td>
        </tr>
        <tr class="top">
            <td colspan="5" style="padding: 5px;vertical-align: top;">
                <table style="width: 100%;line-height: inherit;text-align: left;">
                    <tr>
                        <td class="title" style="padding: 5px;vertical-align: top;padding-bottom: 20px;font-size: 45px;line-height: 45px;color: #333;">
                            {{--<img src="https://gallery.mailchimp.com/b073a10bfaa1f9e238c6b6979/images/93961671-06cd-4306-871e-b261fb960fc3.png" style="width:100%; max-width:100px;">--}}
                            <p>Ansari Trader's</p>
                        </td>



                        <td style="padding: 5px;vertical-align: top;text-align: right;padding-bottom: 20px;">
                            <strong>Invoice #: {{$order->id}}</strong><br>
                            <strong>Date: {{\Carbon\Carbon::parse($order->created_at)->format('Y/d/m')}}</strong><br>
                            <strong>Delivery Method: <span style="color:red;">Cash on Delivery</span></strong>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="5" style="padding: 5px;vertical-align: top;">
                <table style="width: 100%;line-height: inherit;text-align: left;">
                    <tr>
                        <td style="padding: 5px;vertical-align: top;padding-bottom: 40px; width:160px;">
                            <strong>Address:</strong>{{$order->address}}
                        </td>



                        <td style="padding: 5px;vertical-align: top;text-align: right;padding-bottom: 40px;">
                            <strong>Name:</strong>{{$order->name}}<br>
                            <strong>Phone:</strong>{{$order->phone}}<br>
                            <strong>Email:</strong>{{$order->email}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>


        <tr class="heading">
            <td style="padding: 5px;vertical-align: top;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
                Item
            </td>

            <td style="padding: 5px;vertical-align: top;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
                Quantity
            </td>

            <td style="padding: 5px;vertical-align: top;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
                Weight
            </td>

            <td style="padding: 5px;vertical-align: top;text-align: right;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
                Price
            </td>
            <td style="padding: 5px;vertical-align: top;text-align: right;background: #eee;border-bottom: 1px solid #ddd;font-weight: bold;">
                Total
            </td>
        </tr>

        @foreach($cart->items as $product)
            <tr class="item">

                <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
                    {{$product['item']->subCategory->name}}
                </td>

                <td style="padding: 5px;vertical-align: top;border-bottom: 1px solid #eee;">
                    {{$product['qty']}}
                </td>

                <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
                    {{$product['item']['weight']}} (GM)
                </td>

                <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
                    {{$product['item']['price']}} (PKR)
                </td>

                <td style="padding: 5px;vertical-align: top;text-align: right;border-bottom: 1px solid #eee;">
                    {{$product['price']}} (PKR)
                </td>

            </tr>
        @endforeach


        <tr class="total">
            <td style="padding: 5px;vertical-align: top;"></td>
            <td style="padding: 5px;vertical-align: top;"></td>
            <td style="padding: 5px;vertical-align: top;"></td>
            <td style="padding: 5px;vertical-align: top;"></td>

            <td style="padding: 5px;vertical-align: top;text-align: right;border-top: 2px solid #eee;font-weight: bold;">
                Grand Total: {{$cart->totalPrice}} (PKR)
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <p style="font-size:14px; text-align: left;">Copyright &copy; 2017 Ansari Trader's Importer Exporter & Contractor. All rights reserved.</p>
            </td>
            <td colspan="2">
                <p style="font-size:14px; text-align: right;">Powered By <a href="https://hammadsoby.github.io/" target="_blank">Code-x</a></p>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
