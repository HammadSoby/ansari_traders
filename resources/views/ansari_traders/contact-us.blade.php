@extends('partials/ansari_traders/app')

@section('title')
    Contact Us
@endsection

@section('content')

        <!-- START CONTENT -->
    <section class="container clearfix">
        <!-- START PAGE INFO -->
        <header class="container page_info clearfix">

            <h1 class="regular brown bottom_line">Contact Us Today</h1>

            <div class="clear"></div>
        </header>

        <!-- END PAGE INFO -->

        <div class="container-fluid">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3380.774879625709!2d72.67423581466882!3d32.075337081189446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x392177bcfd6c8d89%3A0x3434f27f293fe6e2!2zQWwtUmVobWFuIFRyYWRlIENlbnRyZSDYp9mE2LHYrdmF2KfZhiDZudix24zaiCDYs9mG2bnYsQ!5e0!3m2!1sen!2s!4v1485539706779" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="padding15"></div>

        <!-- START COL 1/3 -->
        <div class="col_1_3">

            <ul class="contact-address">
                <li class="address"><span>I am Address!</span></li>
                <li class="phone"><span>+1 123 456 7890</span></li>
                <li class="email"><span><a href="mailto:info@yoursite.com">info@yoursite.com</a></span></li>
            </ul>

            <div class="clear"></div>

        </div>
        <!-- END COL 1/3 -->

        <!-- START COL 2/3 LAST -->
        <div class="col_2_3 last">

            <!-- SUCCESS MESSAGE -->
            <div class="success_box none">
                Email successfully sent. Thank you!
            </div>
            <!-- END SUCCESS MESSAGE -->

            <!-- ERROR MESSAGE -->
            <div class="error_box none">
                Please complete all required fields.
            </div>
            <!-- END ERROR MESSAGE -->



            <!-- START CONTACT FORM -->
            <form action="#" class="contact_form">
                <p>
                    <label for="name">Name <span>*</span></label>
                    <input class="inputText" type="text" id="name" name="name" />
                </p>
                <div class="clear"></div>
                <p>
                    <label for="email">E-mail <span>*</span></label>
                    <input class="inputText" type="text" id="email" name="email" />
                </p>
                <div class="clear"></div>
                <p>
                    <label for="message">Message <span>*</span></label>
                    <textarea class="inputTextarea" cols="88" rows="6" id="message" name="message"></textarea>
                </p>
                <div class="clear"></div>
                <p class="submit">
                    <a href="javascript:void(0);" class="button white" onclick="$('.contact_form').submit();">Send</a>
                </p>
            </form>
            <!-- END CONTACT FORM -->

        </div>
        <!-- END COL 2/3 LAST -->



        <div class="clear padding20"></div>


    </section>
    <!-- END CONTENT -->

@endsection