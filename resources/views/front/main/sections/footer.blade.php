<footer class="bottom-to-top hb-animate-element">

    <div class="footer-container">
        @include('front.main.sections.footer-top')
        <div id="footer">
            <div class="container">
                <div class="row">

                    <div class="footer-blocks">
                        <aside id="footer-left">
                            <div class="col-sm-3 column footerleft">
                                <div class="contact-block">
                                    <h5>Contact Us</h5>
                                    <ul>
                                        <li><i class="fa fa-map-marker"></i><span>502 New design str, melbourne, san francisco, CA 94110, united states of america​.</span>
                                        </li>
                                        <li>
        <span class="contact-inner">
              <a href="tel:%phone%">(+00) 123-456-789</a>
        </span>
                                        </li>
                                        <li><i class="fa fa-envelope-o"></i><span>demo@company.com</span></li>
                                    </ul>
                                </div>
                            </div>

                            {{--<div class="newletter-popup">
                                <div class="ttpopupclose"></div>
                                <div id="boxes" class="newletter-container">
                                    <div style="" id="dialog" class="window">
                                        <div id="popup2">
                                            <span class="b-close"><i class="material-icons icon-close">clear</i></span>
                                        </div>
                                        <div class="newslatter-img col-sm-6 col-xs-6">
                                            <img src="{{ asset('front/image/cache/catalog/newsletter-450x460.jpg') }}"
                                                 class="img-responsive"/>
                                        </div>
                                        <div class="box col-sm-6 col-xs-6">
                                            <div class="newletter-title"><h2>Newsletter</h2></div>
                                            <div class="box-content newleter-content">
                                                <label></label>
                                                <div id="frm_subscribe">
                                                    <form name="subscribe" id="subscribe_popup">
                                                        <div class="newslatterpopup-content">
                                                            <span>Get Extra 10% OFF on Frist order!</span>
                                                            <div id="notification"></div>
                                                            <input type="text" value="" name="subscribe_pemail"
                                                                   id="subscribe_pemail"
                                                                   placeholder="Your email address">
                                                            <input type="hidden" value="" name="subscribe_pname"
                                                                   id="subscribe_pname"/>

                                                            <div class="popup-button">
                                                                <a class="button btn btn-primary"
                                                                   onclick="email_subscribepopup()"><span>Subscribe</span></a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="subscribe-bottom">
                                                        <input type="checkbox" id="newsletter_popup_dont_show_again">
                                                        <label for="newsletter_popup_dont_show_again">Don't show this
                                                            popup again</label>
                                                    </div>
                                                </div><!-- /#frm_subscribe -->
                                            </div><!-- /.box-content -->
                                        </div>
                                    </div>

                                    <script>
                                        function email_subscribepopup() {
                                            $.ajax({
                                                type: 'post',
                                                url: 'index.php?route=extension/module/wdnewslettersubscribe/subscribepopup',
                                                dataType: 'html',
                                                data: $("#subscribe_popup").serialize(),
                                                success: function (html) {
                                                    //$.cookie('shownewsletter', '1');
                                                    try {

                                                        eval(html);

                                                    } catch (e) {
                                                    }
                                                }
                                            });


                                        }

                                        function email_unsubscribepopup() {
                                            $.ajax({
                                                type: 'post',
                                                url: 'index.php?route=extension/module/wdnewslettersubscribe/unsubscribe',
                                                dataType: 'html',
                                                data: $("#subscribe_popup").serialize(),
                                                success: function (html) {
                                                    try {

                                                        eval(html);

                                                    } catch (e) {
                                                    }
                                                }
                                            });
                                            $('html, body').delay(1500).animate({scrollTop: 0}, 'slow');

                                        }
                                    </script>
                                    <script>
                                        $(document).ready(function () {

                                            if ($.cookie('shownewsletter') == 1) $('.newletter-popup').hide();
                                            $('#subscribe_pemail').keypress(function (e) {
                                                if (e.which == 13) {
                                                    e.preventDefault();
                                                    email_subscribepopup();
                                                }
                                                var name = $(this).val();
                                                $('#subscribe_pname').val(name);
                                            });
                                            $('#subscribe_pemail').change(function () {
                                                var name = $(this).val();
                                                $('#subscribe_pname').val(name);
                                            });


                                            //transition effect
                                            if ($.cookie("shownewsletter") != 1) {
                                                $('.newletter-popup').bPopup();

                                            }


                                            $('#newsletter_popup_dont_show_again').on('change', function () {
                                                if ($.cookie("shownewsletter") != 1) {
                                                    $.cookie("shownewsletter", '1')
                                                } else {
                                                    $.cookie("shownewsletter", '0')
                                                }
                                            });


                                        });
                                    </script>

                                </div>
                            </div><!-- /.box -->
--}}
                            <div class="social-block">
                                <h5 class="">Follow Us</h5>
                                <ul>
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"
                                                                        aria-hidden="true"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="youtube"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="rss"><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>

                        </aside>


                        <div id="account_link" class="col-sm-3 column">
                            <h5>My Account</h5>
                            <ul class="list-unstyled">
                                <li><a href="indexe223.html?route=account/account">My Account</a></li>
                                <li><a href="indexe223.html?route=account/order">Order History</a></li>
                                <li><a href="indexe223.html?route=account/wishlist">Wish List</a></li>
                                <li><a href="index3d18.html?route=affiliate/login">Affiliates</a></li>
                                <li><a href="index2724.html?route=information/contact">Contact Us</a></li>
                            </ul>
                        </div>

                        <div id="info" class="col-sm-3 column">
                            <h5>Information</h5>
                            <ul class="list-unstyled">
                                <li><a href="index8816.html?route=information/information&amp;information_id=4">About
                                        Us</a></li>
                                <li><a href="index1766.html?route=information/information&amp;information_id=6">Delivery
                                        Information</a></li>
                                <li><a href="index1679.html?route=information/information&amp;information_id=3">Privacy
                                        Policy</a></li>
                                <li><a href="index99e4.html?route=information/information&amp;information_id=5">Terms
                                        &amp; Conditions</a></li>
                                <li><a href="indexc295.html?route=information/blogger/blogs">Blogs </a></li>
                            </ul>
                        </div>

                        <div id="extra-link" class="col-sm-3 column">
                            <h5>Extras</h5>
                            <ul class="list-unstyled">
                                <li><a href="index7cb2.html?route=information/sitemap">Site Map</a></li>
                                <li><a href="indexe223.html?route=account/newsletter">Newsletter</a></li>
                                <li><a href="indexd773.html?route=product/manufacturer">Brands</a></li>
                                <li><a href="index2724.html?route=information/contact">Contact Us</a></li>
                                <li><a href="indexf110.html?route=product/special">Specials</a></li>
                            </ul>
                        </div>

                        <aside id="footer-right">
                            <div class="footer-cms column col-sm-3">
                                <div class="wdcmsfooter">
                                    <h5 class="title_block">Our App</h5>
                                    <ul class="wdfooter-details">
                                        <div class="footer-desc">Download our Apps and get<br>extra 15% Discount on your
                                            first Order…!
                                        </div>
                                        <div class="wdfooter-logo">
                                            <div class="wdfooter-img1"><a href="#"><img
                                                        src="image/catalog/app-icon-01.png" alt=""></a></div>
                                            <div class="wdfooter-img2"><a href="#"><img
                                                        src="image/catalog/app-icon-02.png" alt=""></a></div>
                                        </div>
                                    </ul>
                                </div>
                            </div>


                        </aside>

                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="bottomfooter">
        <div class="container">
            <div class="row">
                <div class="bottomfooter-inner">

                    <p class="powered">Powered By <a href="http://www.opencart.com/">OpenCart</a> QuickStore &copy; 2023
                    </p>
                    <div id="paymentcmsblock" class="paymentcmsblock">
                        <p></p>
                        <div class="payment-block">
                            <ul>
                                <img src="image/catalog/maestro.png" alt="">
                                <img src="image/catalog/mastercard.png" alt="">
                                <img src="image/catalog/paypal.png" alt="">
                                <img src="image/catalog/visa.png" alt="">
                            </ul>
                        </div>
                        <p></p>
                    </div>


                </div>
            </div>
        </div>
    </div>

</footer>
