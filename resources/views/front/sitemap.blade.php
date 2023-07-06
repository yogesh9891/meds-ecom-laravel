@extends('layouts.front')
@section('content')

@section('seo_section')

<title>Sitemap | 911GlobalMeds </title>
@endsection


<section class="inner-page pt-0 pb-0">
   <div class="container">
      <div class="breadcrumbs">
         <ul>
            <li><a href="/">Home</a></li>
            <li>Site Map</li>
         </ul>
      </div>
   </div>
   <div class="container">
      <div class="content-part mt-5">
         <div class="common-heading text-center mb-4">
            <h1 class="font30 fw-600 green-text ">SITE MAP : Find the A to Z Drugs Name List | List of Generic Drugs and Their Brand Names</h1>
         </div>
         <div class="inner-banner img_round">
            <img src="img/site-map.webp" width="100%" alt="">
         </div>
         <div class="sitemap-alpha">
	
	<div class="content-part categorypage brand-vs-generic mt-5">
		<div class="row text-center">



			<div class="col-lg-6 col-md-6 col-sm-6">

				<h2 class="font30 green-text"><strong> Generic Medicine Name List: </strong></h2>

				 <div class="alphabrand">

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

			</div>

			<div class="col-lg-6 col-md-6 col-sm-12">

				<h2 class="font30 green-text"><strong> Brand / Trade Medicine Name List:</strong></h2>

					 <div class="alphabrand">

						<div class="alphalist">

							<div class="seelist-alphabet">

								<div class="atoztabbing" id="accordion-generic-drugs">

									<div class="atoztabbing-inner">

										@foreach($genric_medcines as $key => $alphabet1)

										<div class="alpha-card">

											<a data-toggle="collapse" data-target="#other{{ $key }}-collapse" >

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
		 <div class="sitemapbox">
               <div class="row">
					<div class="col-sm-3">                     
                     <ul class="links">
                        
                     		<li><a href="{{url('/')}}">Home</a></li>
						<li><a href="{{route('about_us')}}">About Us</a></li>

						<li><a href="{{route('angel_number')}}">Angel Number 9-1-1</a></li>
					
						<li><a href="{{ route('testimonial') }}">Reviews & Testimonials</a></li>
						<li><a href="{{ route('all_disease_medication') }}">All Diseases Medications</a></li>
                     </ul>
                  </div>
                  <div class="col-sm-3">
                     <ul class="links">
                      			<li><a href="{{ route('canceer_disease_medication') }}">Cancer Diseases Medications</a></li>
						<li><a href="{{ route('brand_generic') }}">Brand vs Generic Drugs</a></li>
						<li><a href="{{ route('how_to_order') }}">How to Order & FAQs</a></li>
							<li><a href="{{route('who_faq')}}">WHOcGMP Certification FAQs</a></li>
						<li><a href="{{ route('fastfill') }}">Fast Refil Reorders</a></li>
                     </ul>
                  </div>
                  <div class="col-sm-3">
                     <ul class="links">
                       		<li><a href="{{route('login')}}">LogIn</a></li>
						<li><a href="{{route('my-account')}}">My Account</a></li>
						<li><a href="{{route('latest_blog')}}">Blogs & News</a></li>
						<li><a href="{{ route('guest_blog') }}">Guest Blogs</a></li>
						<li><a href="{{ route('be_our_partner') }}">Be Our Partner</a></li>
                     </ul>
                  </div>
				  <div class="col-sm-3">
                     <ul class="links">
                     		<li><a href="{{route('term-and-conditions')}}">Terms & Condtions</a></li>
						<li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
						<li><a href="{{route('disclaimer')}}">Disclaimer</a></li>
						<li><a href="{{url('/sitemap')}}">Site Map</a></li>
						<li><a href="{{route('contact_us')}}">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection