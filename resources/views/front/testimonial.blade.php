@extends('layouts.front')
@section('content')
@section('seo_section')

<title>911GlobalMeds Reviews / Video Testimonials | Reliable Canadian Rx Pharmacy Reviews </title>
<meta id="MetaDesc" name="description" itemprop="" property="" content="* 911GlobalMeds.com is a Reliable Rx online pharmacy to buy Generic and Branded Medication online at an affordable price globally! Visit at the best rated pharmacy i.e. 911 Global Meds website to check the Canadian & International online pharmacy reviews and Video testimonials."/>
<meta name="keywords" content=" Online pharmacy reviews, reliable rx pharmacy reviews, canadian drug store reviews, online canadian pharmacy reviews"/> 
<meta name="geo.placename" content="USA"/>
<link rel="canonical" href="{{ url('/') }}{{$_SERVER['REQUEST_URI']}}"/>
<meta id="Language" name="language" content="English"/>
<meta id="Country" name="Country" content="USA"/>
<meta id="Distribution" name="distribution" content="Global"/>
<meta id="Author" content="911GlobalMeds.com,WeCare@911GlobalMeds.com" name="Author"/>
<meta name="robots" content="index, follow"/> 
<meta id="RevisitAfter" name="revisit-after" content="7 days"/>

@endsection
<section class="inner-page pb-0">
   <div class="container">
         <div class="breadcrumbs" >
            <ul>
               <li><a href="{{url('/')}}">Home</a></li>
               <li>Buyer’s Testimonials</li>
            </ul>
         </div>
	</div>
	<div class="container">
         <div class="content-part categorypage mt-3">
            <h1 class="font30 text-center green-text"><strong>911GlobalMeds.com  💊 : Customer Reviews, Testimonials & Feedback</strong></h1>	
			<p class="text-center mt-3"><h2 class="h2-tag-font text-center"><strong><a href="{{ route('about_us') }}" >SAFE & REPUTABLE ONLINE PHARMACY MARKETPLACE: 911globalmeds.com 💊 Cares for You !</a></strong></h2><br>



<p align="center">911Globalmeds.com posts <strong><a href="https://www.911globalmeds.com/brand-vs-generic-medications">branded and generic medications</a> </strong>from<strong> <a href="https://www.911globalmeds.com/whocgmp-certification-faqs">trusted international pharmacies</a>,</strong> directly dispensing <strong>high quality &ndash; lowest priced medicines</strong> to thousands of fully satisfied customers globally. Read the reviews and testimonials of many of our happy customers and how 911Globalmeds professional service has helped patients to cope with their <strong><a href="https://www.911globalmeds.com/most-common-oral-chemo-therapy-cancer-drugs-names-and-price-list">cancer</a> and <a href="https://www.911globalmeds.com/list-of-common-diseases-drugs-medicines-names-and-price-list">other disease</a> conditions</strong> and recover from it <strong>at a reasonable medication cost</strong>.</p>
<p align="center">&nbsp;</p>
<p align="center">Great Customer Service stands at the core of our values; Customer Satisfaction is our priority and our Personalized Service at all times is our USP. Below are some Reviews, Testimonials &amp; Feedbacks we&rsquo;ve received from our valued customers.</p>

</p>
			<div class="text-center pt-3 pb-3"><img src="{{asset('front_assets/img/Testimonials.webp')}}" alt=""  /></div>			
         </div>
   </div>

<div class="about-testimonial text-center">

	<div class="container testimonial-block ">
		  <div class="patientVideo">

                            <h3 class="headng text-center"><span>Watch</span> Our Customers <span>Reviews: </span></h3>
							<div class="latest-blog">
                            <div class="container">
                             <div class="row owl-carousel default-slider blog-slider owl-theme text-center">
                                    @foreach($video_reviews as $video_review)
                                        <div class="blog-box" style="  min-height: 0;">
                                           <a data-fancybox data-width="640" data-height="360" href="{{ asset('/videos/'.$video_review->video) }}"> <img src="{{asset('/img-vi/'. $video_review->image) }}" alt=""></a>
                                        <div class="bloghead text-center mt-2">
                                           <a data-fancybox data-width="640" data-height="360" href="{{ asset('/videos/'.$video_review->video) }}"> {{ $video_review->full_name }}, {{ $video_review->country }}</a>
                                        </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        
                        </div>
	{{-- 	<div class="testimonial-block">
			<div class="headng"><span>Watch</span> Our Customers <span>Reviews: </span></div>
			<div class="testimonial-slider owl-carousel owl-theme">
			@foreach($video_reviews as $video_review)
				<div class="video-block text-center">
					<p>Video Testimonial by: </p>
					<div class="athorname"><a href="" data-toggle="modal" data-target="#videodTestimonial-{{ $video_review->id }}">{{ $video_review->full_name }}, {{ $video_review->country }}</a></div>
					<div><a href="" data-toggle="modal" data-target="#videodTestimonial-{{ $video_review->id }}"><img src="{{ $video_review->image }}" alt="" /></a></div>
			
				</div>

			@endforeach
				
			</div>		
			  
		</div> --}}

                              
                     
		
	</div>
</div>

<div class="video-testimonial pt-5 pb-3" >
	<div class="container">
	<div class="headng text-center mb-3"><span>Read </span> Our Customers <span>Testimonials: </span></div>
		<div class="testimonialreviewList">
			<div class="trustpilot-review">
				<div class="text-center"><a href="{{ route('testimonial') }}"><img src="{{asset('/img/911-global-meds-com-TrustPilot-Verified-Reviews.webp')}}" width="250px" alt="Reviews on 911GlobalMeds.com"></a></div>
			</div>
			<div class="google-review" id="scrolltoview">
				@if($all_testimonials->count() > 0)
				<div class="ratting">
					<div class="starrating text-left">

						@php 

						$total_rating =    round($all_testimonials->sum('rating')/$all_testimonials->count(),1)  ; 


					 	 $half_start = (($total_rating*10)%10);
					 	 if($half_start<=5){
						  $full_star = floor($total_rating);
						 $blank_star = 5 - $full_star ;
						 $half_start= 1;

					 	 } else {
					 	 $full_star = round($total_rating);
						 $blank_star = (5 - $full_star)+1 ;
						 $half_start= 0;
					 	 }



						 @endphp
						   @if($total_rating > 0)

                                            @php 
                                             $star=array_fill(0,round($full_star+1),"");
                                                $blank_star=array_fill(0,($blank_star),"");
                                                	

                                         @endphp
                                         {!!  implode(' <span class="fa fa-star orange-text"></span>',$star); !!}

                                         @if($half_start > 0)
                                         <span class="fa fa-star-half-o orange-text"></span>
                                         @endif
                                         {!!  implode(' <span class="fa fa-star-o orange-text"></span>',$blank_star); !!}
                                        
                                        @endif
				{{-- 		<span class="fa fa-star orange-text"></span>
						<span class="fa fa-star orange-text"></span>
						<span class="fa fa-star orange-text"></span>
						<span class="fa fa-star orange-text"></span>
						<span class="fa fa-star "></span> --}}
						<span class="">{{ $all_testimonials->count() }}</span>
					</div>
					<p class="mt-3 mb-3">{{ round($all_testimonials->sum('rating')/$all_testimonials->count(),1) }} out of 5 stars</p>


					@foreach($all_testimonials->groupBy('rating') as $key => $rating)
					<div class="ratings-table">
						<div class="ratting-txt"><a href="{{ url('/reviews-testimonials?r='.$key) }}">{{ $key }} Stars</a></div>
						<div class="progressratting">
							<div class="ratting-bar" style="width:{{ round($rating->count()/$all_testimonials->count(),2)*100 }}%"></div>
						</div>
						<div class="ratting-txt">{{ $rating->count() }}</div>
					</div>

					@endforeach
				{{-- 	<div class="ratings-table">
						<div class="ratting-txt">4 Stars</div>
						<div class="progressratting">
							<div class="ratting-bar" style="width:10.616960976673%"></div>
						</div>
						<div class="ratting-txt">487</div>
					</div>
					<div class="ratings-table">
						<div class="ratting-txt">3 Stars</div>
						<div class="progressratting">
							<div class="ratting-bar" style="width:1.4824504033137%"></div>
						</div>
						<div class="ratting-txt">68</div>
					</div>
					<div class="ratings-table">
						<div class="ratting-txt">2 Stars</div>
						<div class="progressratting">
							<div class="ratting-bar" style="width:0.87202964900807%"></div>
						</div>
						<div class="ratting-txt">40</div>
					</div>
					<div class="ratings-table">
						<div class="ratting-txt">1 Stars</div>
						<div class="progressratting">
							<div class="ratting-bar" style="width:1.3080444735121%"></div>
						</div>
						<div class="ratting-txt">60</div>
					</div> --}}
				</div>
				@endif
			</div>
		</div>
		<div class="texttestimo mt-5" >
			<div class="review-list mb-4 text-center">
				<ul id="review_list_ul">

					@foreach($testimonials as $testimonial)
					<li style="display: none;">
						<div class="starrating text-center">
						    @if($testimonial->rating > 0)

                                            @php 
                                             $testimonial->rating;
                                              $half_start = (($testimonial->rating*10)%10);
											 	 if($half_start<=5 && $half_start >0){
												  $full_star = floor($testimonial->rating);
												 $blank_star = 5 - $full_star ;
												 $half_start= 1;

											 	 } else {
											 	 $full_star = round($testimonial->rating);
												 $blank_star = (5 - $full_star)+1 ;
												 $half_start= 0;
											 	 }

                                             $star=array_fill(0,round($full_star+1),"");
                                                $blank_star=array_fill(0,($blank_star),"");

                                         @endphp
                                         {!!  implode(' <span class="fa fa-star orange-text"></span>',$star); !!}

                                         @if($half_start > 0)
                                         <span class="fa fa-star-half-o orange-text"></span>
                                         @endif
                                         {!!  implode(' <span class="fa fa-star-o orange-text"></span>',$blank_star); !!}
                                        
                                        @endif
						  <div class="font20"><font class="green-text"><strong>{{$testimonial->full_name}}</strong></font> <i>from</i> <font class="green-text"><strong>{{$testimonial->country}}</strong></font> <i>says</i> :</div>
					   </div>
					   <p class="mb-3 green-text">“ {{$testimonial->comment}} ”</p>
					   <div class="row justify-content-md-center ">
					  

					   		
						    @if($testimonial->rating_1 > 0)
					   		<div class="col-md-2 star-rating-type ">
					   			<p>Quality & Price Satisfaction  </p>
					   	<div class="starrating   text-center">

                                            @php 
                                             $star=array_fill(0,$testimonial->rating_1+1,"");
                                                $blank_star=array_fill(0,5-($testimonial->rating_1-1),"");

                                         @endphp
                                         {!!  implode(' <span class="fa fa-star orange-text"></span>',$star); !!}
                                         {!!  implode('<span class="fa fa-star-o orange-text"></span>',$blank_star); !!}
                                        
                                    </div>
					   	</div>
                                        @endif

						    @if($testimonial->rating_1 > 0)
					   		<div class="col-md-2 star-rating-type">
					   			<p> Service Satisfaction </p>

					   	<div class="starrating text-center">

                                            @php 
                                             $star=array_fill(0,$testimonial->rating_1+1,"");
                                                $blank_star=array_fill(0,5-($testimonial->rating_1-1),"");

                                         @endphp
                                         {!!  implode(' <span class="fa fa-star orange-text"></span>',$star); !!}
                                         {!!  implode('<span class="fa fa-star-o orange-text"></span>',$blank_star); !!}
                                        
                                    </div>
					   	</div>
                                        @endif
						    @if($testimonial->rating_3 > 0)
					   		<div class="col-md-2 star-rating-type">

					   			<p> Delivery Satisfaction</p>
					   	<div class="starrating text-center">

                                            @php 
                                             $star=array_fill(0,$testimonial->rating_3+1,"");
                                                $blank_star=array_fill(0,5-($testimonial->rating_3-1),"");

                                         @endphp
                                         {!!  implode(' <span class="fa fa-star orange-text"></span>',$star); !!}
                                         {!!  implode('<span class="fa fa-star-o orange-text"></span>',$blank_star); !!}
                                        
                                    </div>
					   	</div>
                                        @endif
						    @if($testimonial->rating_4 > 0)
					   		<div class="col-md-2 star-rating-type " >
					   			<p>Will Buy Again </p>
					   	<div class="starrating text-center">

                                            @php 
                                             $star=array_fill(0,$testimonial->rating_4+1,"");
                                                $blank_star=array_fill(0,5-($testimonial->rating_4-1),"");

                                         @endphp
                                         {!!  implode(' <span class="fa fa-star orange-text"></span>',$star); !!}
                                         {!!  implode('<span class="fa fa-star-o orange-text"></span>',$blank_star); !!}
                                        
                                    </div>
					   	</div>
                                        @endif
						    @if($testimonial->rating_5 > 0)
					   		<div class="col-md-2 star-rating-type">
					   			<p>Will Recommend to Others</p>

					   	<div class="starrating text-center">

                                            @php 
                                             $star=array_fill(0,$testimonial->rating_5+1,"");
                                                $blank_star=array_fill(0,5-($testimonial->rating_5-1),"");

                                         @endphp
                                         {!!  implode(' <span class="fa fa-star orange-text"></span>',$star); !!}
                                         {!!  implode('<span class="fa fa-star-o orange-text"></span>',$blank_star); !!}
                                        
                                    </div>
					   	</div>
                                        @endif
					   </div>
					</li>
					@endforeach
				</ul>
		</div>

			<div class="custom-pagination text-center">
					<a  style="display: none;" id="loadMoreReview" class=" common-btn yellow-bg" >See More</a>
						<nav aria-label="...">
		{{-- {{ $testimonials->links('vendor.pagination.custom') }} --}}
							 {{--  <ul class="pagination">
								<li class="page-item disabled">
								  <a class="page-link" href="#" tabindex="-1"><<</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item active">
								  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
								</li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">4</a></li>
								<li class="page-item"><a class="page-link" href="#">5</a></li>
								<li class="page-item">
								  <a class="page-link" href="#">>></a>
								</li>
							  </ul> --}}
						</nav>
					</div>
		<div class="text-center font14 mt-3" >
                                        <b>Testimonials Disclaimer : &nbsp;</b>IN ACCORDANCE WITH...
                                        <span class="inputButton"><input type="button" class="common-btn ml-2 yellow-bg smallbtn" id="btnTViewDisclaimer" value="Read Full" /></span>
                                        <div id="divTDisclaimer">
                                            <div class="row justify-content-md-center text-justify mt-3">
                                                <div class="col-md-8 col-sm-12">
                                                    <div class="readfulltestimonial content contentscroll">
                                                        <p>IN ACCORDANCE WITH THE FTC GUIDE LINES CONCERNING USE OF ENDORSEMENTS AND TESTIMONIALS IN ADVERTISING, PLEASE BE AWARE OF THE FOLLOWING:</p>
                                                        <p>Federal regulations require us to advise our customers that all product reviews, testimonials or endorsements of products sold at&nbsp;911GlobalMeds.com reflect the personal experience of those individuals who have expressed their personal opinions on our products and that those opinions and experiences may not be representative of what every consumer of our products may personally experience with the endorsed product.</p>
                                                        <p>All product reviews and testimonials are the sole opinions, findings or experiences of our customers and not those of 911GlobalMeds or its staff. 911GlobalMeds does not compensate in any way for testimonials or reviews.</p>
                                                        <ul>
                                                            <li>
                                                                These statements have not been evaluated by the US Food and Drug Administration (FDA) or any other&nbsp;country’s Drug Department /&nbsp;Governmental Authority. We ar  aria-label="Name"e required to inform you that there is no intention, implied or otherwise that represents or infers that these products or statements be used in the cure, diagnosis, mitigation, treatment, or prevention of any disease.
                                                            </li>
                                                            <li>These testimonials do not imply that similar results will happen with your use of our products. We have no competent or reliable scientific evidence to suggest that the testimonial provider’s experience is due to the use of our products.</li>
                                                            <li>These testimonials are not intended to recommend any supplement as a drug, as a diagnosis for specific illnesses or conditions, nor as a product to eliminate diseases or other medical conditions or complications. We make no medical claims as to the benefits of any of our products to improve medical conditions.</li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
		
						<div class="writereview mt-5">

                                    <div class="accordion" id="submitreviews">
										<div class="card">
										<div class="card-header" id="submitreviews-heading">                                       
										<p data-toggle="collapse" data-target="#collapse-submitreviews"  aria-controls="collapse-submitreviews" class="text-center review-text blue-text pb-3 collapsed">SUBMIT YOUR REVIEWS & TESTIMONIALS <i class="fa fa-caret-down" aria-hidden="true"></i></p>
										</div>
										<div id="collapse-submitreviews" class="collapse show" aria-labelledby="submitreviews-heading" data-parent="#submitreviews-heading">
										<div class="card-body">
										<div class="contactus">
                                        <form  class="custom-form" action="{{ route('review.submit') }}"  method="post">
                                       	@csrf
                                       	@if (Session::has('success'))
                                         			<script type="text/javascript">
                                         			  alert('Thank you for your Reviews / Testimonials, they shall be posted soon!');
                    								  window.location.reload();
                                         			</script>
                                              @endif
                                            <div class="fieldset">
                                                <div class="legend">Submit Your Reviews</div>
												<div class="fielsmend">All fields are mandatory <span class="astrik">*</span> </div>
                                                <div class="row">
                                                	 <input type="hidden" class="form-control" name="posting_url" value="{{url()->current()}}">
                                  				  
                                    					    <input type="hidden" class="form-control" name="posting_name" value="testimonials">
                                                      <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Your Name<span class="error">*</span></label>
                                                            <input type="text" class="form-control Cfield" placeholder="Your Name"  required name="name"  maxlength="30" onkeyup="nameValidation(this)" aria-label="Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Your Country<span class="astrik">*</span></label>
                                                         	<input type="text" name="country" required="" class="form-control" onkeyup="nameValidation(this)"  maxlength="30" aria-label="Country">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Your Email<span class="error">*</span></label>
                                                            <input type="email" class="form-control Cfield" placeholder="Your Email" required name="email" maxlength="30" onchange="emailValidation(this)"  aria-label="Email">
                                                        </div>
                                                    </div>
                                                      <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="d-inline">Your Reviews</label>
                                                        
                                                             <textarea class="form-control Cfield" placeholder="Your Review" rows="2" name="review" maxlength="300" onkeyup="messageValidation(this)"  aria-label="Reviews"></textarea>
                                                        </div>
                                                    </div>
                                                       <div class="col-md-12 col-sm-12">
                                                       	  <div class="form-group">
						                                    	  <label>Your Rating<span class="error">*</span></label>
						                                    	</div>
                                                       </div>
                                                       <div class="col-md-6 col-sm-12">
						                                    <div class="form-group">
						                                        <div class="form-check form-check-inline">
						                                            <label>    Quality & Price Satisfaction :   
						                                            <input class="form-check-input  " style="opacity: 0" type="radio" name="rating_1"  required="" value="1">
						                                            </label>
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <label class="text-secondary">Bad</label>
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_1" required=""  aria-label="rating_1" value="1">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_1" required=""  aria-label="rating_1" value="2">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_1" required=""  aria-label="rating_1" value="3">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_1" required=""  aria-label="rating_1" value="4">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_1" required=""  aria-label="rating_1" value="5">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <label class="text-secondary">Good</label>
						                                        </div>
						                                    </div>
                             						   </div>

						                                 <div class="col-md-6 col-sm-12">
						                                    <div class="form-group">
						                                        <div class="form-check form-check-inline">
						                                            <label>     Service Satisfaction :  </label>
						                                            <input class="form-check-input  " style="opacity: 0" type="radio" name="rating_2"  aria-label="Name"  required="" value="1">

						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <label class="text-secondary">Bad</label>
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_2"  aria-label="rating_2"  required value="1">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_2"  aria-label="rating_2" required value="2">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_2"  aria-label="rating_2" required value="3">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_2"  aria-label="rating_2" required value="4">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_2"  aria-label="rating_2" required value="5">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <label class="text-secondary">Good</label>
						                                        </div>
						                                    </div>
						                                </div>


						                                 <div class="col-md-6 col-sm-12">
						                                    <div class="form-group">
						                                        <div class="form-check form-check-inline">
						                                            <label>    Delivery Satisfaction  :   </label>
						                                            <input class="form-check-input  " style="opacity: 0" type="radio" name="rating_3"  aria-label="rating_3"  required="" value="1">

						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <label class="text-secondary">Bad</label>
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_3"  aria-label="rating_3" required value="1">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_3"  aria-label="rating_3" required value="2">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_3"  aria-label="rating_3" required value="3">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_3"  aria-label="rating_3" required value="4">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_3"  aria-label="rating_3" required value="5">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <label class="text-secondary">Good</label>
						                                        </div>
						                                    </div>
						                                </div>


						                                 <div class="col-md-6 col-sm-12">
						                                    <div class="form-group">
						                                        <div class="form-check form-check-inline">
						                                            <label>Will Buy Again :</label>
						                                            <input class="form-check-input  " style="opacity: 0" type="radio" name="rating_4"  aria-label="rating_4"  required="" value="1">

						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <label class="text-secondary">No</label>
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_4"  aria-label="rating_4"  required  value="1">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_4"   aria-label="rating_4"  required value="2">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_4"  aria-label="rating_4"  required  value="3">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_4"   aria-label="rating_4"  required value="4">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_4"  aria-label="rating_4"  required  value="5">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <label class="text-secondary">Yes</label>
						                                        </div>
						                                    </div>
						                                </div>


						                                 <div class="col-md-6 col-sm-12">
						                                    <div class="form-group">
						                                        <div class="form-check form-check-inline">
						                                            <label> Will Recommend to Others :</label>
						                                            <input class="form-check-input  " style="opacity: 0" type="radio" name="rating_5"  aria-label="Name"  required="" value="1">

						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <label class="text-secondary">No</label>
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_5"  aria-label="rating_5"  required  value="1">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_5"  aria-label="rating_5"  required  value="2">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_5"  aria-label="rating_5"  required  value="3">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_5"   aria-label="rating_5"  required value="4">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_5"  aria-label="rating_5"  required  value="5">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <label class="text-secondary">Yes</label>
						                                        </div>
						                                    </div>
						                                </div>
                                                  
                                                  		  <div class="col-md-12 col-sm-12">

	                                                        <div class="form-group row">
	                                                        	<div class="col-md-6">
                               							  		   <label>Enter Characters as displayed in image</label>
                                    <div class="captcha">
                                          <button type="button" class="btn btn-danger  reloadBtn" id="reload">
                                            &#x21bb;
                                        </button>
                                     
                                        <span>{!! captcha_img('flat') !!}</span></br>
                                    </div>
                                    <input id="captcha" type="text" class="form-control mt-3" placeholder="Enter Characters as displayed in image" name="captcha">
	                                                        	</div>
	                                                        		<div class="col-md-4">

			                                                        <button type="submit" class="btn nobtn green-bg lg-btn ">SUBMIT REVIEWS</button>
			                                                        @if ($errors->any())
																	    <div class="text-danger">
																	        <ul>
																	            @foreach ($errors->all() as $error)
																	                <li>{{ $error }}</li>
																	            @endforeach
																	        </ul>
																	    </div>
																	@endif
			                                                    </div>
	                                                        </div>
                                                        
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
				
<div class="alphnumber">
	<div class="container">
		<div class="alphabrand-wrap">
		<div class="alphabrand">
			<h3>Brand & Generic Drugs List :</h3>
			<p>The list of all Generic Drugs available for sale online may be seen by clicking on any of the letters below :</p>
			<div class="alphalist">
				<div class="seelist-alphabet">
					<div class="atoztabbing" id="accordion">
						<div class="atoztabbing-inner">
							@foreach($all_medcines as $key => $alphabet)
							<div class="alpha-card" id="a-heading">
								<a data-toggle="collapse" data-target="#genric{{ $key }}-collapse"  >
								  {{ $key }}
								</a>
							</div>
							@endforeach
							
						</div>
					  
					  <!--Tabbing Details--->
					  <div class="atoztabbing-content all-alphabetsContent">
					  		@foreach($all_medcines as $key => $alphabet)
						  <div id="genric{{ $key }}-collapse" class="collapse" aria-labelledby="{{ $key }}-heading" data-parent="#accordion">
							  <div class="card-body">
								<div class="showAll">
									<ul>
										@foreach($alphabet as $alpha_medcine)
										<li>
											<a href="{{url('/'.$alpha_medcine['frontend_url']??'url')}}" target="_blank">{{ $alpha_medcine['generic_name']??'' }}</a>
										</li>

										@endforeach
										
									</ul>
								</div>
							  </div>
						  </div>
						  @endforeach
					
					  </div>
					  <!--Tabbing Details End--->
					  
					</div>
				</div>
			</div>
		</div>
		
		<div class="alphabrand">
			<div class="alphalist">
			<p>The list of all Brand Drugs and / or their Generic Equivalents available for sale online may be seen by clicking on any of the letters below :</p>
				<div class="seelist-alphabet">
					<div class="atoztabbing" id="accordion-generic-drugs">
						<div class="atoztabbing-inner">
							@foreach($genric_medcines as $key => $alphabet1)
							<div class="alpha-card" id="a-heading">
								<a data-toggle="collapse" data-target="#other{{ $key }}-collapse"  >
								  {{ $key }}
								</a>
							</div>
							@endforeach
							
						</div>
					  
					  
					  <!--Tabbing Details--->
					  <div class="atoztabbing-content all-alphabetsContent">
						 	@foreach($genric_medcines as $key => $alphabet1)
						  <div id="other{{ $key }}-collapse" class="collapse" aria-labelledby="a-heading" data-parent="#accordion-generic-drugs">
							  <div class="card-body">
								<div class="showAll">
									<ul>
										@foreach($alphabet1 as $alpha_medcine1)
										<li>
											<a href="{{url('/'.$alpha_medcine1['frontend_url']??'url')}}" target="_blank">{{ $alpha_medcine1['other_names']??'' }}</a>
										</li>

										@endforeach
										
									</ul>
								</div>
							  </div>
						  </div>
						  @endforeach
						  
						 
					  </div>
					  <!--Tabbing Details End--->
					  
					</div>
				</div>
			</div>
		</div>
	
		</div>
		
	</div>
</div>
</div>
</div>

</section>

@endsection

@section('afterScript')

<script type="text/javascript">

	function scrolltoview() {
  const element = document.getElementById("scrolltoview");
  element.scrollIntoView();
}

$(document).ready(function () {

	let url =  window.location.href;
	const myArray = url.split("#");
	console.log(myArray);
	if(myArray.length > 1){
	let UrlId = myArray[1];
   scrolltoview();

		// $('.patientVideo').animate({
	 //        scrollTop: eval($("#submitreviews").offset().top -100)
	 //    }, 2000);

	}

    size_review = $("#review_list_ul li").length;
    x=10;

    if(size_review >10){
    $('#loadMoreReview').show();
    }

    $('#review_list_ul li:lt('+x+')').show();
	 $('#review_list_ul li:lt('+x+')').addClass('rev_show');

    $('#loadMoreReview').click(function () {
        x= (x+10 <= size_review) ? x+10 : size_review;
        $('#review_list_ul li:lt('+x+')').show();
	 $('#review_list_ul li:lt('+x+')').addClass('rev_show');
       let rev_show = 	$('#review_list_ul .rev_show').length;

				    if(rev_show == size_review ){
    			 			$('#loadMoreReview').hide();
    			 	}

    			 	console.log(rev_show,size_review)
    });

});

    		
 
</script>
@endsection