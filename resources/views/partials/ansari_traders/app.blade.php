<!DOCTYPE html>
<html>


<head>
    <title>Ansari Trader's | @yield('title')</title>
    <link href="/ansari_traders/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/ansari_traders/js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="/ansari_traders/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />--}}
    {{--<meta name="keywords" content="Eshop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,--}}
{{--Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />--}}
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <!-- for bootstrap working -->
    <script type="text/javascript" src="/ansari_traders/js/bootstrap-3.1.1.min.js"></script>
    <!-- //for bootstrap working -->
    <!-- cart -->
    <script src="/ansari_traders/js/simpleCart.min.js"> </script>
    <!-- cart -->
    <link rel="stylesheet" href="/ansari_traders/css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
<script src='/ansari_traders/js/jquery.min.js'></script><script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','/ansari_traders/js/analytics.js','ga');
    ga('create', 'UA-30027142-1', 'w3layouts.com');
    ga('send', 'pageview');
</script>
<script async type='text/javascript' src='/ansari_traders/js/fancybar6a2f.js?zoneid=1502&amp;serve=C6ADVKE&amp;placement=w3layouts' id='_fancybar_js'></script>
<style type='text/css'>  .adsense_fixed{position:fixed;bottom:-8px;width:100%;z-index:999999999999;}.adsense_content{width:720px;margin:0 auto;position:relative;background:#fff;}.adsense_btn_close,.adsense_btn_info{font-size:12px;color:#fff;height:20px;width:20px;vertical-align:middle;text-align:center;background:#000;top:4px;left:4px;position:absolute;z-index:99999999;font-family:Georgia;cursor:pointer;line-height:18px}.adsense_btn_info{left:26px;font-family:Georgia;font-style:italic}.adsense_info_content{display:none;width:260px;height:340px;position:absolute;top:-360px;background:rgba(255,255,255,.9);font-size:14px;padding:20px;font-family:Arial;border-radius:4px;-webkit-box-shadow:0 1px 26px -2px rgba(0,0,0,.3);-moz-box-shadow:0 1px 26px -2px rgba(0,0,0,.3);box-shadow:0 1px 26px -2px rgba(0,0,0,.3)}.adsense_info_content:after{content:'';position:absolute;left:25px;top:100%;width:0;height:0;border-left:10px solid transparent;border-right:10px solid transparent;border-top:10px solid #fff;clear:both}.adsense_info_content #adsense_h3{color:#000;margin:0;font-size:18px!important;font-family:'Arial'!important;margin-bottom:20px!important;}.adsense_info_content .adsense_p{color:#888;font-size:13px!important;line-height:20px;font-family:'Arial'!important;margin-bottom:20px!important;}.adsense_fh5co-team{color:#000;font-style:italic;}</style>
<script>

    $(function() {
        $('.adsense_btn_close').click(function() {
            $(this).closest('.adsense_fixed').css('display', 'none');
        });

        $('.adsense_btn_info').click(function() {
            if ($('.adsense_info_content').is(':visible')) {
                $('.adsense_info_content').css('display', 'none');
            } else {
                $('.adsense_info_content').css('display', 'block');
            }
        });

    });

</script>


@include('partials/ansari_traders/header')

@yield('content')

@include('partials/ansari_traders/footer')

</body>
</html>
