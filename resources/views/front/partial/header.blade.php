<!-- Mobile Header -->
<div class="wsmobileheader clearfix ">
    <div class="mobile-header">
        <div class="top-mobile-header">
            <div class="mobile-menu">
                <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
            </div>

            <span class="smllogo"><a href="{{ url('/') }}"><img  class="lazy" data-original="{{ asset('img/911-Global-Meds-logo.jpg') }}"
                         alt="get fda approved prescription drugs express medicine shipments online at global HK and Canada pharmacy marketplace co" loading="lazy"></a></span>
            <div class="mobiletopright">
                @php $cartCollection = Cart::getContent();  @endphp
                <a class="cart-icon" href="{{ route('cart_checkout') }}"><span
                        class="cart-num">{{ $cartCollection->count() }}</span><img
                         class="lazy" data-original="{{ asset('img/shopping-bag.webp') }}"  alt="shopping bag" loading="lazy" /></a>
            </div>
        </div>
    </div>
    <div class="custom-search mobilesearch">
        <form class="search-form">
            <div class="input-group">
                <input type="text" class="form-control" id="header_mobile_search"
                    placeholder="Search by Brand or Generic Name" />
                <span class="input-group-btn">
                    <button name="search-submit" id="submit23" type="button" aria-label="submit23" class="btn-primary btn btn-1"><span
                            class="fa fa-search font18"></span></button>
                </span>
            </div>
        </form>
    </div>
    <div id="header_mboile_result"></div>

</div>
<!-- Mobile Header -->

<header>
    <div class="topsrtip w-border">
        <div class="owl-carousel textslider owl-theme">
            <div class="textslide">LOWEST PRICE - PRICE BEAT GUARANTEE*</div>
            <div class="textslide">CUSTOMS CLEARED GUARANTEED DELIVERY*</div>
            <div class="textslide">AVAILABLE FOR RESEARCH & SCHOLARLY STUDIES ALSO*</div>
            <div class="textslide">*see FAQs / Terms & Conditions for Details</div>
        </div>
    </div>
    <div class="uppersection">
        <div class="container">
            <div class="upper-wrap">
                <div class="main-logo">
                    <div class="logo"><a href="{{ route('index') }}"><img
                                 class="lazy" data-original="{{ asset('img/911-Global-Meds-logo.jpg') }}" class="lozad" data- class="lazy" data-original="img.jpg"
                               alt="get fda approved prescription drugs express medicine shipments online at global HK and Canada pharmacy marketplace co" loading="lazy" /></a>
                    </div>
                </div>
                <div class="mainsearch">
                    <div class="custom-search">
                        <form class="search-form">
                            <div class="input-group">
                                <input type="text" class="form-control" id="header_search"
                                    placeholder="Search by Brand or Generic Name" />
                                <span class="input-group-btn">
                                    <button name="search-submit" id="submit231"  aria-label="submit231" type="button"class="btn-primary btn btn-1"><span class="fa fa-search font18"></span></button>
                                </span>
                            </div>
                            <div id="header_result"></div>
                        </form>
                    </div>
                    <div class="cart-header">
                        <a class="cart-icon" href="{{ route('cart_checkout') }}"><span
                                class="cart-num">{{ $cartCollection->count() }}</span><img
                                 class="lazy" data-original="{{ asset('img/shopping-bag.webp') }}" alt="shopping bag" loading="lazy">
                            <span class="cart-text">Cart</span></a>
                    </div>
                </div>
                <div class="social-connect">
                    <div class="inner-connect">
                        <div class="social-media whatsapp">
                            <a href="https://wa.link/edzqnd" target="_blank"> WhatsApp <i class="fa fa-whatsapp"></i> +1 (567) 252-7545</a>
                        </div>
                        <div class="social-media viber">
                            <a href="https://msng.link/o/?5672527545=vi" target="_blank"> Viber <img  class="lazy" data-original="{{ asset('img/viber-icon.png') }}"  class="icon-width" alt="911GlobalMeds" loading="lazy"> +1 (567) 252-7545</a>
                        </div>
                        <div class="social-media mb-0">
                            <span class="social-text"><a ref="mailto:WeCare@911GlobalMeds.com">WeCare@911GlobalMeds.com</a></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu-container">
        <div class="container">
            <div class="menu-wrap">
                <div class="mainmenu">
                    <div class="wsmainfull clearfix">
                        <div class="wsmainwp clearfix">
                            <!--Main Menu HTML Code-->
                            <nav class="wsmenu clearfix">
                                <span class="smllogo-mob"><a href="{{ url('/') }}"><img
                                             class="lazy" data-original="{{ asset('img/911-Global-Meds-logo.jpg') }}"
                                            alt="get fda approved prescription drugs express medicine shipments online at global HK and Canada pharmacy marketplace co" loading="lazy"></a></span>
                                <ul class="wsmenu-list">
                                    {{-- <li><a href="{{route('angel_number')}}">Angel No. 9-1-1</a></li> --}}
                                    <li><a href="{{ route('index') }}">Home</a></li>
                                    <li><a href="{{ route('about_us') }}">ABOUT US </a></li>
                                    <li><a href="{{ route('testimonial') }}">Testimonials</a></li>
                                    <li><a href="{{ route('how_to_order') }}">How to order / Faqs</a></li>
                                    <li><a href="{{ route('fastfill') }}">Fast Refill</a></li>
                                    <li><a href="{{ route('contact_us') }}">CONTACT US</a></li>
                                    <li class="mdisplay macc">

                                        @auth
                                            <a id="checkout-but" href="{{ route('my-account') }}">MY ACCOUNT</a>

                                            <a id="login1-but" class="checkout-but" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout1-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout1-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        @else
                                            <a id="checkout-but" data-toggle="modal" data-target="#lohin-signup">MY
                                                ACCOUNT</a>
                                        <li class="mdisplay mlogin"><a id="checkout-but2"
                                                href="{{ route('login') }}">LOGIN</a></li>
                                    @endauth
                                    </li>
                                   {{--  <li class="mdisplay mlogin">
                                        <div class="social-connect">
                                            <div class="inner-connect">
                                               
                                                <div class="social-media whatsapp">
                                                    <a href="https://wa.link/edzqnd" target="_blank">WhatsApp <i  class="fa f fa-whatsapp"></i>+1 (567) 252-7545</a>
                                                </div>
                                                <div class="social-media viber">
                                                    <a href="https://msng.link/o/?5672527545=vi" target="_blank"> Viber <img  class="lazy" data-original="{{ asset('img/viber-icon.png') }}" width="14px" height="14px" class="icon-width" alt="911GlobalMeds" loading="lazy">  +1 (567) 252-7545</a>
                                                </div>
                                                <div class="social-media mb-0">
                                                    <span class="social-text"><a
                                                            href="mailto:WeCare@911GlobalMeds.com">WeCare@911GlobalMeds.com</a></span>
                                                </div>

                                            </div>
                                        </div>
                                    </li> --}}
                                </ul>
                            </nav>
                            <!--Menu HTML Code-->
                        </div>
                    </div>
                </div>
                <div class="right-part">
                    <div class="">
                        <div id="google_translate_element"></div>
                    </div>
                    <div class="button-item">
                        @auth
                            <a id="checkout-but" href="{{ route('my-account') }}">MY ACCOUNT</a>
                        @else
                            <a id="checkout-but" data-toggle="modal" data-target="#lohin-signup1">MY ACCOUNT</a>
                        @endauth
                    </div>
                    @guest
                        <div class="button-item">
                            <a id="login-but" class="login-but" href="{{ route('login') }}">LOGIN</a>
                        </div>
                    @else
                        <div class="button-item">

                            <a id="login-but" class="login-but" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>
                    @endguest
                </div>
            </div>
            @auth
                <div class="text-right py-1">

                    <span>Welcome &nbsp; &nbsp; {{ Auth::user()->email }}</span>
                </div>
            @endauth
        </div>
    </div>
</header>


<!-- Leave a review Modal -->
<div class="modal fade bd-example-modal-lg" id="leavereview" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <img  class="lazy" data-original="{{ asset('img/911-Global-Meds-logo.jpg') }}"
                    alt="buy fda approved prescription drugs online at global and canada pharmacy" loading="lazy" class="float-left"
                    >
                <div class="modal-title feedbackheading" id="exampleModalLongTitle">
                    We request your Feedback on our Service. <br>It will be helpful to many patients Globally!
                </div>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="leavereview">
                    <form class="custom-form" action="{{ route('review.submit') }}" id="reviewSubmitForm">
                        @csrf
                        <div class="row">
                            <div class="text-danger col-md-12" id="query-error-review3"></div>
                            <div class="col-md-4">

                                <div class="form-group">
                                    <label>Your Name<span class="astrik">*</span></label>
                                    <input type="text" class="form-control" placeholder="Your Name" required
                                        name="name" onkeyup="nameValidation(this)" maxlength="30">
                                    <input type="hidden" class="form-control" name="posting_url"
                                        value="{{ url()->current() }}">
                                    @if (\Request::route())
                                        @if (\Request::route()->getName() == 'medication')
                                            <input type="hidden" class="form-control" name="posting_name"
                                                value="{{ $medicas->c_1_1_1_generic_id_no ?? '' }}">
                                        @else
                                            <input type="hidden" class="form-control" name="posting_name"
                                                value="{{ \Request::route()->getName() }}">
                                        @endif
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Your Country<span class="astrik">*</span></label>

                                    <input type="text" class="form-control" placeholder="Your Country" required
                                        name="country" onkeyup="nameValidation(this)" maxlength="30">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Your Email<span class="astrik">*</span></label>
                                    <input type="email" class="form-control" placeholder="Your Email" required
                                        name="email" maxlength="30" onchange="emailValidation(this)">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Your Review</label>
                                    <textarea class="form-control" placeholder="Your Review" rows="3" name="review" maxlength="300"
                                        onkeyup="messageValidation(this)"></textarea>
                                    <small id="emailHelp" class="form-text text-muted"><span
                                            class="text-danger">Note:</span> HTML is not translated!</small>
                                </div>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                 <div class="form-group mb-0"><label>Your Rating<span class="astrik">*</span></label></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                    <div class="form-check pl-0">
                                        <label> Quality & Price Satisfaction :
                                            <input class="form-check-input opacity-checkbox  " type="radio"
                                                name="rating_1" required="" value="1">
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="text-secondary">Bad</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_1"
                                            required="" value="1">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_1"
                                            required="" value="2">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_1"
                                            required="" value="3">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_1"
                                            required="" value="4">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_1"
                                            required="" value="5">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="text-secondary">Good</label>
                                    </div>
                                </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                    <div class="form-check pl-0">
                                        <label> Service Satisfaction :</label>
                                        <input class="form-check-input opacity-checkbox " type="radio"
                                            name="rating_2" required="" value="1">

                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="text-secondary">Bad</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_2"
                                            requiredvalue="1">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_2" required
                                            value="2">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_2" required
                                            value="3">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_2" required
                                            value="4">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_2" required
                                            value="5">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="text-secondary">Good</label>
                                    </div>
                                </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="form-check pl-0">
                                        <label> Delivery Satisfaction :</label>
                                        <input class="form-check-input opacity-checkbox " type="radio"
                                            name="rating_3" required="" value="1">

                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="text-secondary">Bad</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_3" required
                                            value="1">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_3" required
                                            value="2">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_3" required
                                            value="3">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_3" required
                                            value="4">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_3" required
                                            value="5">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="text-secondary">Good</label>
                                    </div>
                                </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="form-check pl-0">
                                        <label> Will Buy Again :</label>
                                        <input class="form-check-input opacity-checkbox " type="radio"
                                            name="rating_4" required="" value="1">

                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="text-secondary">Bad</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_4" required
                                            value="1">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_4" required
                                            value="2">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_4" required
                                            value="3">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_4" required
                                            value="4">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_4" required
                                            value="5">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="text-secondary">Good</label>
                                    </div>
                                </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                    <div class="form-check pl-0">
                                        <label> Will Recommend to Others :</label>
                                        <input class="form-check-input opacity-checkbox " type="radio"
                                            name="rating_5" required="" value="1">

                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="text-secondary">Bad</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_5" required
                                            value="1">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_5" required
                                            value="2">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_5" required
                                            value="3">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_5" required
                                            value="4">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="rating_5" required
                                            value="5">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="text-secondary">Good</label>
                                    </div>
                                </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                     <div class="form-group ">
                                   <label>Enter Characters as displayed in imagec</label>
                                    <div class="captcha">
                                          <button type="button" class="btn btn-danger  reloadBtn" id="reloadBtn">
                                            &#x21bb;
                                        </button>
                                     
                                        <span>{!! captcha_img('flat') !!}</span></br>
                                    </div>
                                    <input id="captcha" type="text" class="form-control mt-3" placeholder="Enter Characters as displayed in image" name="captcha">
                                </div>

                                    </div>
                                    
                                </div>
                                
                            </div>


                            
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn nobtn green-bg">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Leave a review Modal End -->


<!-- Forgot Password Modal -->
<div class="modal fade bd-example-modal-lg" id="forgotpassword" tabindex="-1" role="dialog"
    aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="font20">Forgot Password?</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('forgot_password') }}" method="post" id="forgotpassword-form">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-danger"  id="forgotpassword-error"></p>
                            <div class="form-group">
                                <label>Enter your registered email address </label>
                                <input type="email" class="form-control Cfield" name="email"
                                    id="forgotpassword-email" placeholder="Your Email registered with us"
                                    required="" maxlength="50" onchange="emailValidation(this)">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="common-btn blue-bg"
                                id="forgotpassword-button">Proceed</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- Forgot Password Modal End -->
