        <header class="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2 col-sm-6">
					<div class="adminLogo">
						@if(Auth::guard('admin')->user()->can('aadhya.upload'))
						<span  href="" data-toggle="modal" data-target="#fda_model"><img src="http://911globalmeds.com/img/911-Global-Meds-logo.webp" alt="buy fda approved prescription drugs online at global and canada pharmacy"></span>
						@endif
					</div>					
				</div>
				<div class="col-md-10 col-sm-6">
					<nav class="main-menu">
						<ul>
						@if(Auth::guard('admin')->user()->can('aadhya.1-meds-info'))						
							<li><a href="{{url('/aadhya/1-meds-info')}}">1 Meds Info</a></li>
							@endif
						@if(Auth::guard('admin')->user()->can('aadhya.2-meds-price'))						
							<li><a href="{{url('/aadhya/2-meds-price')}}">2 Meds Prices</a></li>
							@endif
						@if(Auth::guard('admin')->user()->can('aadhya.3-home'))						
							<li><a href="{{url('/aadhya/3-home')}}">3 Home Page</a></li>
							@endif
						@if(Auth::guard('admin')->user()->can('aadhya.country_freight'))						
							<li><a href="{{url('/aadhya/4-country-freight')}}">4 Country Freight</a></li>
							@endif
						@if(Auth::guard('admin')->user()->can('aadhya.bank_detail'))						
							<li><a href="{{url('/aadhya/5-bank-details')}}">5 Bank Details</a></li>
							@endif
						@if(Auth::guard('admin')->user()->can('aadhya.text_reviews'))						
							<li><a href="{{url('/aadhya/6-text-reviews')}}">6 Text Reviews</a></li>
							@endif
						@if(Auth::guard('admin')->user()->can('aadhya.video_reviews'))						
							<li><a href="{{url('/aadhya/7-video-reviews')}}">7 Video Reviews</a></li>
							@endif
						@if(Auth::guard('admin')->user()->can('aadhya.blogs_news'))						
							<li><a href="{{url('/aadhya/8-blogs-news')}}">8 Blogs News</a></li>
							@endif
						@if(Auth::guard('admin')->user()->can('aadhya.blogs_reviews'))						
							<li><a href="{{url('/aadhya/9-blogs-reviews')}}">9 Blogs Reviews</a></li>
							@endif
						@if(Auth::guard('admin')->user()->can('aadhya.query'))						
							<li><a href="{{url('/aadhya/10-query')}}">10 Query</a></li>
							@endif
						@if(Auth::guard('admin')->user()->can('aadhya.buyer_login'))						
							<li><a href="{{url('/aadhya/11-buyer-login')}}">11 Buyer Login</a></li>
							@endif
						@if(Auth::guard('admin')->user()->can('aadhya.promo_discount'))						
							<li><a href="{{url('/aadhya/12-promo-discount')}}">12 Promo Discount</a></li>
							@endif
						@if(Auth::guard('admin')->user()->can('aadhya.referrals'))						
							<li><a href="{{url('/aadhya/13-referrals')}}">13 Referrals</a></li>
							@endif
								@if(Auth::guard('admin')->user()->can('aadhya.wallet'))
							<li><a href="{{url('/aadhya/14-wallet')}}">14 Wallet</a></li>
							@endif
					{{-- 	@if(Auth::guard('admin')->user()->can('aadhya.summary'))						
							<li><a href="{{url('/aadhya/14-summary')}}">14 Summary</a></li>
							@endif
                    
                    --}}
						@if(Auth::guard('admin')->user()->can('aadhya.faqs'))						
							<li><a href="{{url('/aadhya/15-faqs')}}">15 FAQs</a></li>
							@endif
						@if(Auth::guard('admin')->user()->can('aadhya.password'))						
							<li><a href="{{url('/aadhya/16-password')}}">16 Password</a></li>
							@endif
						@if(Auth::guard('admin')->user()->can('aadhya.pending_cart'))						
							<li><a href="{{url('/aadhya/17-pending-cart')}}">17 Pending Cart</a></li>
							@endif
						@if(Auth::guard('admin')->user()->can('aadhya.order_status'))						
							<li><a href="{{url('/aadhya/18-order-status')}}">18 Order Status</a></li>
							@endif
						@if(Auth::guard('admin')->user()->can('aadhya.order_refill'))						
							<li><a href="{{url('/aadhya/19-order-refill')}}">19 Order Refill</a></li>
							@endif
                    
                   
							<li>  <form action="{{route('aadhya.logout')}}" method="post" accept-charset="utf-8">
                                                                    @csrf
                                                                    <button type="submit" class="text-white" style="">LOGOUT
                                                                    </button>
                                                                </form></li>
						</ul>
					</nav>
				</div>
		   </div>
        </div>
	</header>


	<!-- Leave a review Modal -->
    <div class="modal fade bd-example-modal-lg" id="fda_model" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <a href="{{route('aadhya.uploads')}}">  <img src="{{asset('img/911-Global-Meds-logo.webp')}}" alt="buy fda approved prescription drugs online at global and canada pharmacy" class="float-left" width="180"></a>
                  

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="leavereview">

                    	{{-- <p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><strong><span style="color:black">UPLOAD FILES</span></strong>&nbsp; </span></span></p>
 --}}
<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Images &ndash; All Pages&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /meds/public/img</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Images &ndash; Blogs&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /meds/public/img-bl&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&nbsp;</strong></span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Images &ndash; Diseases&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; /meds/public/img-di&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Images &ndash; Medicines&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; /meds/public/img-me&nbsp;&nbsp; </span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Images &ndash; Videos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /meds/public/img-vi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">FDA Leaflets&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /meds/public/info&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif">Videos&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /meds/public/videos &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span >Scripts&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>/meds/public/scripts</span></span></p>

<p><span style="font-size:11pt"><span style="font-family:Calibri,sans-serif"><span >Query File&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>/meds/public/scripts</span></span></p>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Leave a review Modal End -->