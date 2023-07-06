@extends('layouts.front')

@section('content')

@section('seo_section')

<title>{{ $medsSeo->c_3_6_3_meta_title ??''}}</title>

   <!-- META TAGS -->



	<meta id="MetaDesc" name="description" itemprop="" property="" content="{{$medsSeo->c_3_6_4_meta_description ??''}}"/>

	<meta name="keywords" content="{{$medsSeo->c_3_6_5_meta_keyword ??''}}"/> 

	<meta name="geo.placename" content="{{$medsSeo->c_3_6_9_country ??''}}"/>

	<link rel="canonical" href="{{route('all_disease_medication')}}"/>

	<meta id="Language" name="language" content="{{$medsSeo->c_3_6_8_language ??''}}"/>

	<meta id="Country" name="Country" content="{{$medsSeo->c_3_6_9_country ??''}}"/>

	<meta id="Distribution" name="distribution" content="{{$medsSeo->c_3_6_10_distribution ??''}}"/>

	<meta id="Author" content="{{$medsSeo->c_3_6_11_author ??''}}" name="Author"/>

	<meta name="robots" content="{{$medsSeo->c_3_6_12_robots ??''}}"/> 

	<meta id="RevisitAfter" name="revisit-after" content="{{$medsSeo->c_3_6_13_revisit_after ??''}}"/>

<script type="application/ld+json">
    {"@context":"http:\/\/schema.org","@type":"Pharmacy","name":"List Of Common Diseases Drugs / Medicines Names & Price List","description":"911GlobalMeds.com is the best online pharmacy to buy Prescription Drugs Online at the lowest price. Visit at 911 Global meds site to find the List of Common Diseases Drugs / Medicines Names &amp; Price List.","openingHours":"Mo,Tu,We,Th,Fr,Sa 00:00-24:00","email":"WeCare@911GlobalMeds.com","telephone":"1-567-252-7545","image":"https://www.911globalmeds.com/img/911-Global-Meds-logo.webp","url":"https://www.911globalmeds.com/list-of-common-diseases-drugs-medicines-names-and-price-list","priceRange":"$$","address":{"@type":"PostalAddress","addressLocality":"Toronto","addressRegion":"Ontario","addressCountry":"CA","postalCode":"M2N 6S3","streetAddress":"1145/9 Midland Avenue"}} "aggregateRating": {
        "@type": "AggregateRating","ratingValue":  "{{ $medsSeo->c_3_6_14_rating_value??'93' }}","reviewCount": "{{ $medsSeo->c_3_6_15_rating_count??'686' }}"),
//]]></script>

@endsection

 <div class="bg_meds" id="bg_meds">

<div class="container">

		<div class="breadcrumbs mt-3">

            <ul>

                <li><a  class="text-white"  href="{{url('/')}}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> {{ $medsSeo->c_3_6_2_browsing_path_name??'' }}</li>

            </ul>

        </div>

       

<div class="container mt-5">

	<div class="row">

		<div class="col-lg-3 bg-white mb-3 bdr-raduis">

		    

		    

		    

		    

		    

			<div id="main">

				  <div>

					<div class="accordion" id="faq">

						

                    	<div class="card">

                    	    <p classs="font20 blue-text-p dpnd" ><strong><a style="color:#2E3192" href="{{route('all_disease_medication')}}">General Diseases Medications</a></strong></p>

	                        <div class="card-header" id="faqhead1">

	                            <h1 class="btn btn-header-link" data-toggle="collapse" data-target="#faq1"

	                            aria-expanded="true" aria-controls="faq1"><strong>List Of Common Diseases Drugs / Medicines Names & Price List:</strong></h1>

	                        </div>

                        <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">

                            <div class="card-body">

                               <div class="list_ofr nav nav-tabs"  role="tablist">

                               

                               	

                               	

                               		@foreach($general_diseases->sortBy('c_3_3_2_general_disease') as $general_disease)

                               	<a class="nav-link btn-nav-link @if($loop->first) active @endif" href="#medcinie_{{str_slug($general_disease->c_3_3_2_general_disease)}}"  id="medcinie_{{str_slug($general_disease->c_3_3_2_general_disease)}}-tab" data-toggle="tab" data-target="#medcinie_{{str_slug($general_disease->c_3_3_2_general_disease)}}"  role="tab" aria-controls="medcinie_{{str_slug($general_disease->c_3_3_2_general_disease)}}" aria-selected="true">{{$general_disease->c_3_3_2_general_disease}}</a>

                               		@endforeach

                                    	<a class="mt-2 nav-heading"  href="{{url('/most-common-oral-chemo-therapy-cancer-drugs-names-and-price-list')}}" target="_blank" ><strong>Cancer Diseases Medications</strong></a>

                               

                               </div>

                            </div>

                        </div>

                    </div>

                </div>

			</div>

  			</div>

		</div>



		<div class="col-lg-9 tab-content" id="medcinie_list">

		 @if($general_diseases)

		 	@foreach($general_diseases->sortBy('c_3_3_2_general_disease') as  $general_disease)

       <div class="heading_mainsitemap tab-pane fade  @if($loop->first) active show @endif"  role="tabpanel" aria-labelledby="medcinie_{{str_slug($general_disease->c_3_3_2_general_disease)}}-tab" id="medcinie_{{str_slug($general_disease->c_3_3_2_general_disease)}}">
			<h2 class="mb-3 font20 blue-text dpnd"><a href="{{$general_disease->si_source_url??''}}" target="_blank"><strong>About <span >{{$general_disease->c_3_3_2_general_disease}}</span> - Information & Treatment Drugs</strong></a></h2>

			@if($general_disease->generic_medicines)

		

			@foreach($general_disease->generic_medicines as $med_index=> $generic_medicine)

			      @if($generic_medicine->generic_medcine_info)

			<div class="other_box_card" style="display: none;" >

				<div class="left_boxcard">

           <div  class="carousel slide" id="carouselIndicators_{{$generic_medicine->id}}-{{$generic_medicine->generic_med_no}}"  data-ride="carousel"  data-interval="500">

               
@php  $count = 0; @endphp
                  <div class="carousel-inner carousel_inner">

                        @foreach ($generic_medicine->generic_medcine_info->meds_prices as $key => $generic_medcine_price)
                       
                       @if($generic_medcine_price->c_2_2_7_g_name_in_h3_tag)
                      <div class="carousel-item  g  @if($loop->first) active  @endif">

                           <img class="img-fluid lazy "  @if($generic_medcine_price->generic_med_image)   data-original="{{asset('img-me/'.$generic_medcine_price->generic_med_image)}}" @else data-original="{{asset('img-me/default-icon-m.webp')}}" @endif   alt="{{$generic_medcine_price->generic_med_image_alt_tag ?? 'tablet capsule injection medicine icon'}}">

                      </div>
                      @php  $count++; @endphp
                      @endif

                     @if($generic_medcine_price->c_2_2_29_b_name_in_h3_tag)
                  
                      <div class="carousel-item   @if(!$generic_medcine_price->c_2_2_7_g_name_in_h3_tag &&  $generic_medcine_price->c_2_2_29_b_name_in_h3_tag) b @if($loop->first) active  @endif @endif ">
                      			@php    
											 $file =   $_SERVER['DOCUMENT_ROOT'].'/img-me/'.$generic_medcine_price->branded_med_image;
											@endphp
                        <img class="img-fluid lazy "  @if($generic_medcine_price->branded_med_image && file_exists($file)) data-original="{{asset('img-me/'.$generic_medcine_price->branded_med_image)}}"  @else data-original="{{asset('img-me/default-icon-m.webp')}}"  @endif alt="{{$generic_medcine_price->branded_med_image ?? 'tablet capsule injection medicine icon'}}"> 

                      </div>
@php  $count++; @endphp
                      @endif

                      @endforeach

                   	
                 	@if(count($generic_medicine->generic_medcine_info->meds_prices) == 0)
                    <div class="carousel-item  active">
                        <img class="img-fluid " data-original="{{asset('img-me/default-icon-m.webp')}}" alt="tablet capsule injection medicine icon">

                      </div>
             			@else
             			@if($count > 1)
             			    <a class="carousel-control-prev" href="#carouselIndicators_{{$med_index}}-{{$generic_medicine->generic_med_no}}" role="button" data-slide="prev">
             			    	.
                          <i class="fa fa-chevron-left" aria-hidden="true"></i>

                     </a>

                     <a class="carousel-control-next" href="#carouselIndicators_{{$med_index}}-{{$generic_medicine->generic_med_no}}" role="button" data-slide="next">

                           <i class="fa fa-chevron-right" aria-hidden="true"></i>. </a>
                           @endif
                      @endif

                  


                    

                     
                    </div>


                
           

                </div>

               

				</div>

				<div class="right_boxcard">

					<h3 class="green-text"><a href="{{route('medication',$generic_medicine->generic_medcine_info->c_1_1_4_frontend_url??'')}}" target="_blank">{{$generic_medicine->generic_medcine_info->c_1_1_7_name_in_home_diseases??''}}</a> </h3>

					<!--<p class="my-2" id="textvis">Generic PALBOCICLIB / Brand IBRANCE 75mg / 100mg / 125mg Capsule<span class="dot-hide" id="showtext">... <i class="fa fa-plus" aria-hidden="true"></i>-->

     <!--                    </span> <span id="hidephonetxt"> is used to treat breast cancer. -->

     <!--                  Palbociclib / Ibrance medication is also found to be effective in treating patients who have certain types of cancer in the breast (estrogen receptor-positive, human epidermal growth factor receptor 2-negative) that have multiplied in other organs of the body along with breast.Palbociclib / Ibrance medicine is co-administered with other anticancer therapies of hormones. &nbsp; <a href="http://911meds.ebslon.com/buy-palbociclib-ibrance-palbace-online" class="clicktag"> ...read more</a> </span> <span class="minus_btn">... <i class="fa fa-minus" aria-hidden="true"></i>-->

     <!--              </p> -->

                   

                     <div class="medicine_description" >

                         {!! substr($generic_medicine->generic_medcine_info->c_1_1_9_generic_intro_details,0,150) !!}<a target="_blank" href="{{route('medication',$generic_medicine->generic_medcine_info->c_1_1_4_frontend_url??'')}}" class="clicktag	text-danger"> ...read more</a>

                     </div>

                     

                   <div class="stylbtn">

                     	<a href="{{route('medication',$generic_medicine->generic_medcine_info->c_1_1_4_frontend_url??'')}}" target="_blank" class="btn btn-link"><strong>Prices & Offer Details</strong></a>

                    </div>

                </div>

                    

			</div>

			@endif

			@endforeach

	

				@endif
				<div class="text-center " >
					<a  style="display: none;" id="loadMore" class=" common-btn yellow-bg" >See More</a>
					<a href="#" class="m-2 d-block" id="go-to-top">Go to Top : General Diseases Index</a>
				</div>
		</div>

			@endforeach

		@endif





	

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

											<a href="{{url('/'.$alpha_medcine['frontend_url']??'url')}}"  target="_blank">{{ $alpha_medcine['generic_name']??'' }}</a>

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

		<div class="numnote"><strong>Tags : </strong>

			@if($medsSeo && $medsSeo->c_3_6_6_hyperlink_page_tags)

			@php $meds_seo =  explode(',',$medsSeo->c_3_6_6_hyperlink_page_tags); @endphp

			@if(count($meds_seo) > 0)

			@foreach($meds_seo as $seo)

			<a href="{{url('/list-of-common-diseases-drugs-medicines-names-and-price-list')}}">{{$seo}}</a>, 

			@endforeach

			@endif

			@endif

	

		</div>

		</div>

		

	</div>

</div>







@endsection

@section('afterScript')

<script>

	let first_med_id = $('.heading_mainsitemap').attr('id');
	console.log(first_med_id);

seeMoreFunction(first_med_id);
    $(".btn-nav-link").click(function() {

         if ($(window).width() < 800){

   

          $("#faq1").collapse('toggle');

    }

       

        

    $('html, body').animate({

        scrollTop: $("body").offset().top

    }, 1000);

    let id = $(this).attr('aria-controls');
    seeMoreFunction(id);

});

      $("#go-to-top").click(function() {
    $('html, body').animate({

        scrollTop: $("body").offset().top

    }, 1000);

 

});


 function seeMoreFunction(mdeic_div_id) {
 	
    		if(mdeic_div_id){
    			 	let size_li = 	$('#'+mdeic_div_id+ ' .other_box_card').length;
    			 	// console.log($('#'+mdeic_div_id).children(".other_box_card:lt(3)"))
    			 	// $('#'+mdeic_div_id).children(".other_box_card:lt(3)").show()
    			 	// console.log(size_li)

    			 	if(size_li >=10){
    			 		$('#loadMore').show();
    			 	}
    			 	
				    x=10;

				    $('#'+mdeic_div_id+' .other_box_card:lt('+x+')').show();
				  	  $('#'+mdeic_div_id+' .other_box_card:lt('+x+')').addClass('med_show');

				    $('#loadMore').click(function () {
				        x= (x+10 <= size_li) ? x+10 : size_li;
				        $('#'+mdeic_div_id+' .other_box_card:lt('+x+')').show();
				  	  $('#'+mdeic_div_id+' .other_box_card:lt('+x+')').addClass('med_show');
    			 	let med_show = 	$('#'+mdeic_div_id+ ' .med_show').length;

				    if(med_show == size_li ){
    			 			$('#loadMore').hide();
    			 	}
    			 	console.log(size_li,med_show)
				    });

				    // $('#showLess').click(function () {
				    //     x=(x-5<0) ? 3 : x-5;
				    //     $('#'+mdeic_div_id+' .other_box_card').not(':lt('+x+')').hide();
				    // });
    		}
 }

 


</script>

@endsection



