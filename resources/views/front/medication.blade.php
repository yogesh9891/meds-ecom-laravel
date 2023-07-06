@extends('layouts.front')
@section('seo_section')
<title> 💊 Buy {{$medsSeo->c_1_5_2_meta_title ??''}}</title>
   <!-- META TAGS -->

	<meta id="MetaDesc" name="description" itemprop="" property="" content="{{$medsSeo->c_1_5_3_meta_description ??''}}"/>
	<meta name="keywords" content="{{$medsSeo->c_1_5_4_meta_keyword ??''}}"/> 
	<meta name="geo.placename" content="{{$medsSeo->c_1_5_8_country ??''}}"/>
	<link rel="canonical" href="{{url('/'.$medicas->c_1_1_4_frontend_url)}}"/>
	<meta id="Language" name="language" content="{{$medsSeo->c_1_5_7_language ??''}}"/>
	<meta id="Country" name="Country" content="{{$medsSeo->c_1_5_8_country ??''}}"/>
	<meta id="Distribution" name="distribution" content="{{$medsSeo->c_1_5_9_distribution ??''}}"/>
	<meta id="Author" content="{{$medsSeo->c_1_5_10_author ??''}}" name="Author"/>
	<meta name="robots" content="{{$medsSeo->c_1_5_11_robots ??''}}"/> 
	<meta id="RevisitAfter" name="revisit-after" content="{{$medsSeo->c_1_5_12_revisit_after ??''}}"/>
	<script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Product",
      "name": "{{$medicas->c_1_1_2_main_generic_name}}",
      "image": [
      @php  

      $arryaImages = [];
      foreach ($medsImages as $key => $img) {
   		if(is_array($img)){
   				if(count($img) > 1){
   					array_push($arryaImages, '"'.$img[0].'"');
   					array_push($arryaImages, '"'.$img[0].'"');
   				 } else {

   					array_push($arryaImages,'"'.$img[0].'"');
   			 }
   		}			
      }
      echo implode(',',$arryaImages);

        @endphp
       ],
      "description": "💊 Buy {{$medicas->c_1_1_6_h1_title_in_blue}} Online @ HK Canada Pharmacy MP",
      "sku": "{{$medicas->c_1_1_1_generic_id_no}}",
      "mpn": "{{$medicas->c_1_1_1_generic_id_no}}-1",
      "brand": {
        "@type": "Brand",
        "name": "{{$medicas->c_1_1_3_other_names}}"
      },
      "review": {
        "@type": "Review",
        "reviewRating": {
          "@type": "Rating",
          "ratingValue": "{{$medsSeo->c_1_5_13_rating_value??''}}",
          "bestRating": "5"
        },
        "author": {
          "@type": "Person",
          "name": "911globalmeds"
        }
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "{{$medsSeo->c_1_5_13_rating_value??''}}",
        "reviewCount": "{{$medsSeo->c_1_5_14_rating_count??''}}"
      },
      "offers": {
        "@type": "Offer",
        "url": "{{url('/'.$medicas->c_1_1_4_frontend_url)}}",
        "priceCurrency": "USD",
        "price": "{{$medsSeo->c_1_5_15_other_tags_3??1}}",
        "priceValidUntil": "2025-12-31",
        "availability": "https://schema.org/InStock"
      }
    }
    </script>
@endsection
@section('content')

<section class="inner-page medication-page">
	<div class="container">
		<div class="breadcrumbs mt-3">
            <ul>
                <li><a  class="text-white"  href="{{url('/')}}">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i>  {{$medicas->c_1_1_5_browsing_path_name}}</li>
            </ul>
        </div>
		<div class="inner-wrapper">
			<div class="common-heading text-center mb-3">
				<h1 class="heading-text">💊 Buy {{$medicas->c_1_1_6_h1_title_in_blue}} Online @ HK Canada Pharmacy MP </h1>
				<div class="upper-wrap d-flex justify-content-center">
					
				<div class="main-logo"><div class="logo" style="max-width: 80%;margin:auto;" ><img src="{{ asset('img/911GlobalMeds-Express-Air-Shipments.jpg') }}" style="animation: zoom-in-zoom-out 5s ease;" alt="get fda approved prescription drugs express medicine shipments online at global HK and Canada pharmacy marketplace co" width="936px" height="136px" class="lazy"></div></div>
				
			
				</div>
				{{-- <img data-original="{{ asset('img/911GlobalMeds-Express-Air-Shipments.jpg') }}" class="img-fluid"> --}}
			</div>
			<div class="mb-2 text-center" style="color: #00a2ed;">
				<strong>Select your required Drug:</strong>
			</div>
			
			<div class="select-medicine-tabs">
				@foreach($medsProducts as $medsproduct)
				
				@if($medsproduct->meds_price && ($medsproduct->meds_price->c_2_2_27_b_display =='S' || $medsproduct->meds_price->c_2_2_5_g_display == 'S'))
				<a class="{{$medsproduct->c_2_1_2_product_no}} click_button"  link="#product-{{$medsproduct->c_2_1_2_product_no}}" href="javascript::void(0);">{{$medsproduct->c_2_1_3_short_strength_id}}</a>
				@endif
				@endforeach
			</div>
			<div class="border-line half-line"></div>
			<div class="text-center mb-4">
				<p class="linkbold"><a class="ibranceup" href="#ibranceup"><strong>{{$medicas->c_1_1_8_drug_info_title}}</strong><span class="red-text">...read more</span></a></p>
				
			</div>
			

			<div class="medication-product-list">
				@foreach($medsPrices->sortBy('meds_product.c_2_1_4_display_at') as $medsPrice)
             			   @if($medsPrice->c_2_2_27_b_display =='S' || $medsPrice->c_2_2_5_g_display == 'S')
				<div class="medication-product-wrapper">
				<div class="border-line half-line bold-line black-bg" id="product-{{$medsPrice->c_2_2_2_product_no}}"></div>
				<div class="medication-border">
					
				<div class="medication-product-heading"><h2 class="heading-center"><strong><span>buy</span> {{$medsPrice->meds_product->c_2_1_5_product_name_h2	}}<span> at lowest price online </span></strong></h2></div>
						<div class="medication-product-inner">	

             			   @if($medsPrice->c_2_2_5_g_display =='S')
							<div class="medication-product-box">
								<div class="product-box green-box">
									<h3><a href="javascript::void(0)">{{$medsPrice->c_2_2_7_g_name_in_h3_tag	}}</a></h3>
									
									<div class="product-data-table">
										@php  $add_cart = true;  @endphp
											@if($medsPrice->c_2_2_4_g_available == 'NA' && $medsPrice->c_2_2_6_g_na_message =='out_of_stock')
												<div class="sold_img" >
												
													<img src="{{ asset('img/out-of-stock.png') }}" width="300px" height="300px" class="img-fluid solid-img lazy">
												</div>
												@php  $add_cart = false;   @endphp
										@endif
											@if($medsPrice->c_2_2_4_g_available == 'NA' && $medsPrice->c_2_2_6_g_na_message =='coming_soon')
												<div class="sold_img" >
												
													<img src="{{ asset('img/coming-soon.png') }}" width="300px" height="300px" class="img-fluid solid-img lazy">
												</div>
												@php  $add_cart = false;   @endphp

										@endif
										<div class="table-responsive">
										<table class="table text-center">
											<thead>
												<tr class="table-active">
													<th>Quantity / Pack</th>
													<th>Price / Pack</th>
													<th>Get Discount</th>
													<th>Net Price</th>
													<th>&nbsp;</th>
												</tr>
											</thead>
											<tbody class="" id="showdetails1{{$medsPrice->id}}"> 
												
												<tr class="@if($add_cart) add_to_cart @endif"  data-id="{{$medsPrice->id}}" data-val="1" data-type="g" data-check="{{$medsPrice->c_2_2_4_g_available}}" data-availble="{{$medsPrice->c_2_2_6_g_na_message}}">
													<td><strong>{{$medsPrice->c_2_2_16_g_pack_1_qty*$medsPrice->c_2_2_19_g_pp_x_1}}</strong><span> {{$medsPrice->c_2_2_17_g_unit}}</span></td>

													<td><span>{{round(($medsPrice->c_2_2_18_g_pack_1_inr_price*$medsPrice->c_2_2_19_g_pp_x_1)/$doller)}}</span></td>

													<td><span>{{round(($medsPrice->c_2_2_18_g_pack_1_inr_price*$medsPrice->c_2_2_19_g_pp_x_1)*($medsPrice->c_2_2_22_g_disc_1/100)/$doller)}}</span></td>

													<td>{{$sign}} <span><strong>{{round(($medsPrice->c_2_2_18_g_pack_1_inr_price*$medsPrice->c_2_2_19_g_pp_x_1 - ($medsPrice->c_2_2_18_g_pack_1_inr_price*$medsPrice->c_2_2_19_g_pp_x_1)*($medsPrice->c_2_2_22_g_disc_1/100))/$doller)}}</strong></span></td>
													<td><a href="javascript::void(0);" class="buynow " >ADD TO CART</a></td>
											    </tr>

											    <tr  class="@if($add_cart) add_to_cart @endif"   data-id="{{$medsPrice->id}}" data-val="2" data-type="g" data-check="{{$medsPrice->c_2_2_4_g_available}}"  data-availble="{{$medsPrice->c_2_2_6_g_na_message}}">
													<td><strong>{{($medsPrice->c_2_2_16_g_pack_1_qty*$medsPrice->c_2_2_20_g_pp_x_2)}}</strong><span> {{$medsPrice->c_2_2_17_g_unit}}</span></td>

													<td><span>{{round(($medsPrice->c_2_2_18_g_pack_1_inr_price*$medsPrice->c_2_2_20_g_pp_x_2)/$doller)}}</span></td>

													<td><span>{{round(($medsPrice->c_2_2_18_g_pack_1_inr_price*$medsPrice->c_2_2_20_g_pp_x_2)*($medsPrice->c_2_2_23_g_disc_2/100)/$doller)}}</span></td>

													<td>{{$sign}} <span><strong>{{round(($medsPrice->c_2_2_18_g_pack_1_inr_price*$medsPrice->c_2_2_20_g_pp_x_2 - ($medsPrice->c_2_2_18_g_pack_1_inr_price*$medsPrice->c_2_2_20_g_pp_x_2)*($medsPrice->c_2_2_23_g_disc_2/100))/$doller)}}</strong></span></td>
													<td><a href="javascript::void(0);" class="buynow " >ADD TO CART</a></td>
											    </tr>

											    <tr class="@if($add_cart) add_to_cart @endif"  data-id="{{$medsPrice->id}}" data-val="3" data-type="g" data-check="{{$medsPrice->c_2_2_4_g_available}}"  data-availble="{{$medsPrice->c_2_2_6_g_na_message}}">

													<td><strong>{{round($medsPrice->c_2_2_16_g_pack_1_qty*$medsPrice->c_2_2_21_g_pp_x_3)}}</strong><span> {{$medsPrice->c_2_2_17_g_unit}}</span></td>

													<td><span>{{round(($medsPrice->c_2_2_18_g_pack_1_inr_price*$medsPrice->c_2_2_21_g_pp_x_3)/$doller)}}</span></td>

													<td><span>{{round(($medsPrice->c_2_2_18_g_pack_1_inr_price*$medsPrice->c_2_2_21_g_pp_x_3)*($medsPrice->c_2_2_24_g_disc_3/100)/$doller)}}</span></td>

													<td>{{$sign}} <span><strong>{{round(($medsPrice->c_2_2_18_g_pack_1_inr_price*$medsPrice->c_2_2_21_g_pp_x_3 - ($medsPrice->c_2_2_18_g_pack_1_inr_price*$medsPrice->c_2_2_21_g_pp_x_3)*($medsPrice->c_2_2_24_g_disc_3/100))/$doller)}}</strong></span></td>
												<td><a href="javascript::void(0);" class="buynow " >ADD TO CART</a></td>
													
											    </tr>
											  
											
											</tbody>
										</table>
									</div>
									</div>

									<div class="upper-header">
										<div class="product-img">

											@php    
											 $file =   $_SERVER['DOCUMENT_ROOT'].'/img-me/'.$medsPrice->c_2_2_14_g_full_image;
											@endphp
	                                        @if($medsPrice->c_2_2_14_g_full_image && file_exists($file))
											<a href="{{asset('img-me/'.$medsPrice->c_2_2_14_g_full_image)}}" data-fancybox>
	                                        <img data-original="{{asset('img-me/'.$medsPrice->c_2_2_14_g_full_image)}}" class="p-img lazy" alt="{{$medsPrice->c_2_2_15_g_full_i_alt_tag}}" width="300px" height="300px" loading="lazy">
	                                	    </a>
	                                        @else
											<a href="javascript::void(0)" style="cursor: default;">
	                                        <img data-original="{{asset('img-me/default-icon.webp')}}" width="300px" height="300px" class="p-img lazy" alt="tablet capsules injection medicine icon" loading="lazy">
	                            		        </a>
	                                        @endif
	                                </div>
										<div class="product-details">
											<p>Manufactured by <a href="{{$medsPrice->c_2_2_9_g_mfr_url}}" target="_blank" >{{$medsPrice->c_2_2_8_g_manufactured_by}}</a> manufacturing company. <a href="{{asset('img/buy-FDA-approved-generic-drugs-online-from-canada-and-global-pharmacy-marketplace.webp')}}" data-fancybox="" class="text-underline">Generic Drug</a> for {{$medsPrice->c_2_2_10_g_drug_for}}. Express Shipments sent from  {{$medsPrice->c_2_2_11_g_shipped_from}} by <a href="https://www.aramex.com/" target="_blank">Aramex </a> / <a href="https://www.fedex.com/en-us/tracking.html" target="_blank">FedEx</a> / <a href="https://www.dhl.com/us-en/home.html" target="_blank">DHL</a> /  <a href="https://www.ups.com/us/en/Home.page" target="_blank" style="color="#00a2ed;">UPS</a> / <a href="https://www.usps.com/" target="_blank">USPS</a> / <a href="https://www.ems.post/en/global-network/tracking" target="_blank">EMS</a> courier service.</p>
										</div>
									</div>
								</div>
							</div>
							@endif
							@if($medsPrice->c_2_2_27_b_display =='S')
							<div class="medication-product-box">
								<div class="product-box blue-box">
									<h3><a href="javascript::void(0)">{{$medsPrice->c_2_2_29_b_name_in_h3_tag}}</a></h3>
									
									<div class="product-data-table">
											@php  $add_cart1 = true;   @endphp
										@if($medsPrice->c_2_2_26_b_available=='NA' && $medsPrice->c_2_2_28_b_na_message =='out_of_stock')
										<div class="sold_img" >
											<img src="{{ asset('img/out-of-stock.png') }}" class="img-fluid solid-img lazy" >
										</div>
											@php  $add_cart1 = false;   @endphp

										@endif
											@if($medsPrice->c_2_2_26_b_available=='NA' && $medsPrice->c_2_2_28_b_na_message =='coming_soon')
										<div class="sold_img" >
											<img src="{{ asset('img/coming-soon.png') }}" class="img-fluid solid-img lazy" >
										</div>
											@php  $add_cart1 = false;   @endphp

										@endif
										<div class="table-responsive">
										<table class="table text-center">
											<thead>
												<tr class="table-active">
													<th>Quantity / Pack</th>
													<th>Price / Pack</th>
													<th>Get Discount</th>
													<th>Net Price</th>
														<th>&nbsp;</th>

												</tr>
											</thead>
											<tbody class="" id="showdetails2">
														<tr class="@if($add_cart1) add_to_cart @endif" data-id="{{$medsPrice->id}}" data-val="1" data-type="b" data-check="{{$medsPrice->c_2_2_26_b_available}}" data-availble="{{$medsPrice->c_2_2_28_b_na_message }}" >
													<td><strong>{{$medsPrice->c_2_2_38_b_pack_1_qty*$medsPrice->c_2_2_41_b_pp_x_1}}</strong><span> {{$medsPrice->c_2_2_39_b_unit}}</span></td>
													<td><span>{{round(($medsPrice->c_2_2_40_b_pack_1_inr_price*$medsPrice->c_2_2_41_b_pp_x_1)/$doller)}}</span></td>

													<td><span>{{round(($medsPrice->c_2_2_40_b_pack_1_inr_price*$medsPrice->c_2_2_41_b_pp_x_1)*($medsPrice->c_2_2_44_b_disc_1/100)/$doller)}}</span></td>

													<td>{{$sign}} <span><strong>{{round(($medsPrice->c_2_2_40_b_pack_1_inr_price*$medsPrice->c_2_2_41_b_pp_x_1 - ($medsPrice->c_2_2_40_b_pack_1_inr_price*$medsPrice->c_2_2_41_b_pp_x_1)*($medsPrice->c_2_2_44_b_disc_1/100))/$doller)}}</strong></span></td>
													<td><a href="javascript::void(0);" class="buynow ">ADD TO CART</a></td>
											    </tr>

											    <tr class="@if($add_cart1) add_to_cart @endif"  data-id="{{$medsPrice->id}}" data-val="2" data-type="b" data-check="{{$medsPrice->c_2_2_26_b_available}}" data-availble="{{$medsPrice->c_2_2_28_b_na_message }}">
													<td><strong>{{($medsPrice->c_2_2_38_b_pack_1_qty*$medsPrice->c_2_2_42_b_pp_x_2)}}</strong><span> {{$medsPrice->c_2_2_39_b_unit}}</span></td>

													<td><span>{{round(($medsPrice->c_2_2_40_b_pack_1_inr_price*$medsPrice->c_2_2_42_b_pp_x_2)/$doller)}}</span></td>

													<td><span>{{round(($medsPrice->c_2_2_40_b_pack_1_inr_price*$medsPrice->c_2_2_42_b_pp_x_2)*($medsPrice->c_2_2_45_b_disc_2/100)/$doller)}}</span></td>

													<td>{{$sign}} <span><strong>{{round(($medsPrice->c_2_2_40_b_pack_1_inr_price*$medsPrice->c_2_2_42_b_pp_x_2 - ($medsPrice->c_2_2_40_b_pack_1_inr_price*$medsPrice->c_2_2_42_b_pp_x_2)*($medsPrice->c_2_2_45_b_disc_2/100))/$doller)}}</strong></span></td>
													<td><a href="javascript::void(0);" class="buynow"| >ADD TO CART</a></td>
											    </tr>

											    <tr class="@if($add_cart1) add_to_cart @endif"  data-id="{{$medsPrice->id}}" data-val="3" data-type="b" data-check="{{$medsPrice->c_2_2_26_b_available}}" data-availble="{{$medsPrice->c_2_2_28_b_na_message }}">

													<td><strong>{{$medsPrice->c_2_2_38_b_pack_1_qty*$medsPrice->c_2_2_43_b_pp_x_3}}</strong><span> {{$medsPrice->c_2_2_39_b_unit}}</span></td>

													<td><span>{{round(($medsPrice->c_2_2_40_b_pack_1_inr_price*$medsPrice->c_2_2_43_b_pp_x_3)/$doller)}}</span></td>

													<td><span>{{round(($medsPrice->c_2_2_40_b_pack_1_inr_price*$medsPrice->c_2_2_43_b_pp_x_3)*($medsPrice->c_2_2_46_b_disc_3/100)/$doller)}}</span></td>

													<td>{{$sign}} <span><strong>{{round(($medsPrice->c_2_2_40_b_pack_1_inr_price*$medsPrice->c_2_2_43_b_pp_x_3 - ($medsPrice->c_2_2_40_b_pack_1_inr_price*$medsPrice->c_2_2_43_b_pp_x_3)*($medsPrice->c_2_2_46_b_disc_3/100))/$doller)}}</strong></span></td>
												<td><a href="javascript::void(0);" class="buynow ">ADD TO CART</a></td>
													
											    </tr>
											</tbody>
										</table>
									</div>
									</div>
									<div class="upper-header">
									<div class="product-img">

											@php    
											 $file1 =   $_SERVER['DOCUMENT_ROOT'].'/img-me/'.$medsPrice->c_2_2_36_b_full_image;
											@endphp
										@if($medsPrice->c_2_2_36_b_full_image && file_exists($file1))
											<a href="{{asset('img-me/'.$medsPrice->c_2_2_36_b_full_image)}}" data-fancybox>
	                                        <img data-original="{{asset('img-me/'.$medsPrice->c_2_2_36_b_full_image)}}" width="55px" height="55px" class="p-img lazy" alt="{{$medsPrice->c_2_2_37_b_full_i_alt_tag}}" class="lazy">
	                                	    </a>
	                                        @else
											<a href="javascript::void(0)" style="cursor: default;">
	                                        <img data-original="{{asset('img-me/default-icon.webp')}}" width="55px" height="55px" class="p-img lazy" alt="tablet capsules injection medicine icon" class="lazy">
	                            		        </a>
	                            		    @endif
										</div>
										<div class="product-details">
											<p>Manufactured by <a href="{{$medsPrice->c_2_2_31_b_mfr_url}}" target="_blank" >{{$medsPrice->c_2_2_30_b_manufactured_by}}</a>. <a href="{{asset('img/buy-FDA-approved-brand-drugs-online-from-canada-and-global-pharmacy-marketplace.webp')}}" data-fancybox="" class="text-underline">Branded Drug</a> for {{$medsPrice->c_2_2_32_b_drug_for}}. Express Shipments sent from  {{$medsPrice->c_2_2_33_b_shipped_from}} by <a href="https://www.aramex.com/" target="_blank">Aramex </a> / <a href="https://www.fedex.com/en-us/tracking.html" target="_blank">FedEx</a> / <a href="https://www.dhl.com/us-en/home.html" target="_blank">DHL</a> /  <a href="https://www.ups.com/us/en/Home.page" target="_blank">UPS</a> / <a href="https://www.usps.com/" target="_blank">USPS</a> / <a href="https://www.ems.post/en/global-network/tracking" target="_blank">EMS</a> courier service.</p>
										</div>
									</div>
								</div>
							</div>
							@endif
						</div>
					<p class="linkbold text-center mt-3"><a class="ibranceup" href="#ibranceup">{{$medsPrice->meds_product->c_2_1_6_med_use ??''}}<span class="red-text">...read more</span></a></p>
					</div>
				</div>
                   @endif
				@endforeach
			</div>


			<div class="border-line half-line"></div>
					<div class="mt-3 two-btn text-center">
				<a href="{{route('contact_us')}}" class="common-btn red-btn" data-toggle="modal" data-target=".patientQuery">NEED HELP? SEND QUERY</a>
				<a href="{{route('contact_us')}}" class="common-btn red-btn" data-toggle="modal" data-target=".businessQuery">SEND BUSINESS ENQUIRY</a>
			</div>
			<div class="promise-container">
				<div class="promise-wrap">
					<div class="promise-box">
						<span class=""><i class="fa fa-plane" aria-hidden="true"></i></span>
						<p>Global Express Shipping : <br>at Actual Costs only</p>
					</div>
					<div class="promise-box">
						<span class=""><img data-original="{{asset('img/Calender-icon.webp')}}" width="43px" height="38px" alt="" class="lazy"></span>
						<p>Superfast Delivery : <br>3-7 working days*</p>
					</div>
					<div class="promise-box">
						<img data-original="{{asset('img/Lowest-Price.webp')}}" width="161px" height="125px" alt="" class="lazy">
					</div>
					<div class="promise-box">
						<span class=""><img data-original="{{asset('img/prescription.png')}}" width="38px" height="38px" alt="" class="lazy"></span>
						<p>Rx Prescription Required <br>for Human Use</p>
					</div>
					<div class="promise-box">
						<span class=""><img data-original="{{asset('img/lab-microscope.png')}}" width="38px" height="38px"alt="" class="lazy"></span>
						<p>Ut Undertaking Required <br>for R&amp;D Scholarly Studies</p>
					</div>
				</div>
			</div>			
			
			<div class="border-line"></div>
			<p class="font14 mb-1">* All brand-names and trademarks are the property of their respective owners. Images are for reference only. <br><strong>See Brand/Sales Disclaimer:</strong> The Brand names...<span class="inputButton"><input type="button" class="smallbtn common-btn ml-2 yellow-bg" id="seeBrand" value="Show Full"></span></p>
			<div id="divseeBrand" class="divseeBrand">
				<div class="row justify-content-md-center text-justify mt-3 mb-3">
				<div class="col-md-8 col-sm-12">
				<div class="readfulltestimonial content contentscroll pt-3 pb-3 pr-3 pl-3">
				<p class="text-justify mb-0">
				  <strong>Brand/Sales Disclaimer:</strong> The Brand names and/or Images/Logos as used/mentioned above or elsewhere on this site are for the reference of the Generic Drugs/Medicines only. The drugs listing by the third party vendor pharmacies is an invitation to offer to sell a drug/medicine of that brand name only when expressly indicated in the drug name details. Unless otherwise mentioned as above, all drugs sold on this site are claimed by the drug manufacturers to be the Bio-equivalent Generics of the Branded Drugs as approved by the FDA of their specific countries. The mention of the brand name, in any case, is not an explicit or implicit claim on any patent / trade-mark held by that brand name drugs manufacturer / patent-holder. All the information, medical or general, is compiled from internet sources and is not claimed to be an authoritative opinion or source information of 911GlobalMeds.com or its developers or owners or vendor pharmacies; viewers are requested to validate the information from their own informed sources and act on the advice thereon only and proceed to order placement after due acceptance of the Terms of Use / Policies. All the Pharmaceutical Drugs ordered on 911GlobalMeds.com are sold and shipped directly from Third Party Legal Registered Pharmacies which may not be situated in your country and are approved for use for Human Treatment by the FDA of the manufacturing country. They can also be used for conducting any R&amp;D/Test or Analysis/Scholarly studies.				
				</p>
				</div>
				</div>
				</div>
				</div>
                <p class="font14 mb-1">** Products will be shipped from a Licensed Pharmacy of Belgium, Canada, Germany, India, Ireland, Italy, Mexico, Singapore, South Africa, Spain, Turkey etc.</p>
				<p class="font14 mb-1"><strong>Marketing & Advertising Disclosure: </strong> 911GlobalMeds.com is an online...<span class="inputButton"><input type="button" class="smallbtn common-btn ml-2 yellow-bg" id="seeBrand1" value="Show Full"></span></p>
			<div id="divseeBrand1" class="divseeBrand">
				<div class="row justify-content-md-center text-justify mt-3 mb-3">
				<div class="col-md-8 col-sm-12">
				<div class="readfulltestimonial content contentscroll pt-3 pb-3 pr-3 pl-3">
				<p class="text-justify mb-0">
				 <strong>Marketing & Advertising Disclosure</strong>: 911GlobalMeds.com is an online pharmaceuticals marketplace serving as a platform for global buyers and legal registered pharmacy sellers from different countries to connect with each other. All our pharmacy seller clients are minutely vetted to ensure that they are a Legal Registered Pharmacy having all the legally required registrations and licenses issued by the relevant departments of their jurisdictional Government Authorities. All the medicine products on our site are posted on behalf of the Legal Seller Pharmacy, are openly available at any pharmacy in the Country of Export, do not contain any Narcotic drug or ingredients and do not require any additional export permission from any Government Authority from the country of origin. The site adheres to the Right to Internet Access, also known as the Right to Broadband or Freedom to Connect, that all people globally must be able to access the Internet in order to exercise and enjoy their rights to freedom of expression and opinion and other fundamental human rights, that states have a responsibility to ensure that Internet access is broadly available, and that states may not unreasonably restrict an individual's access to the Internet. In compliance to US Laws, this site does not claim to be an online pharmacy operating in the US, does not make any medical claims to any US Citizens and does not advertise or offer to sell any drugs to them for their personal consumption or treatment. Buyers from the US can order for the products only if they require it for any scholarly study / Research / Test or Analysis uses only. The owner of this site and of the products and services referred to on this site only provides a service where consumers can obtain and compare information about various products. The owner has no monetary stake in the product and services advertised on the site. The owner agrees to receive payment at the Free Will of the consumer for release to the Pharmacy on proof of shipment and this is the extent of their monetary connection.				
				</p>
				</div>
				</div>
				</div>
				</div>
                <span><p class="font14 mb-0 d-inline">*** We make Express Shipments to all these Countries:...<span class="inputButton"><input type="button" class="smallbtn common-btn ml-2 yellow-bg" id="seeCountry1" value="Show Full"></span><br/> <span id="divseeCountry1" style="display: none;"> @foreach($countries as $country)
                                  {{$country->c_4_1_2_country_name}}, 
                                   @endforeach</span> </p></span> 				
				{{--	<div class="selectcount">
						<div class="dropdown dropdown2">

							  <select class=" selectpicker"   data-live-search="true"  >
                                   <option value="Type To Search Country">Type To Search Country</option>
                                   @foreach($countries as $country)
                                   <option value="{{$country->id}}" >{{$country->c_4_1_2_country_name}}</option>
                                   @endforeach
                                </select>
							
                        --}}          
							 
						</div>
					</div>
				
			<div class="border-line"></div>
			<div class="multitabs" id="druginfo">
				<div class="tablist" id="ibranceup">

                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item" role="tab">
                        <a class="nav-link active " id="buyers-tab" data-toggle="tab" href="#buyersreviews"  aria-controls="buyersreviews" >Buyers Reviews</a>
                    </li>
                    <li class="nav-item" role="tab">
                        <a class="nav-link " data-toggle="tab" id="druginformation-tab" href="#druginformation"  aria-controls="druginformation">Drug Information</a>
                    </li>

                    <li class="nav-item" role="tab">
                        <a class="nav-link" id="fdaleaflets-tab" data-toggle="tab" href="#fdaleaflets" aria-controls="fdaleaflets" >FDA Leaflets & Research</a>
                    </li>
                    <li class="nav-item" role="tab">
                        <a class="nav-link" id="videos-tab" data-toggle="tab" href="#videos"  aria-controls="videos" >Videos</a>
                    </li>
                    <li class="nav-item" role="tab">
                        <a class="nav-link" id="blogpost-tab" data-toggle="tab" href="#blogpost"  aria-controls="blogpost" >Latest Posts / Blogs </a>
                    </li>
                </ul>

                <div class="main-tab-content">
                <div class="container">
                <div class="tab-content">
                    <div class="tab-pane fade show active " id="buyersreviews" role="tabpanel" aria-labelledby="buyers-tab">
                        <div class="row justify-content-md-center">
                            <div class="col-md-6 col-sm-12">
                                <div class="patient-reviews">
                                    <p class="font30 mb-2 w-500 green-text-hover">Buyer / Patient Reviews on buying</p>
                                    <div class="font20"><strong>Generic {{$medicas->c_1_1_2_main_generic_name}} / Brand  {{str_replace(',', ' ', $medicas->c_1_1_3_other_names)}}</strong></div>

                                    <div class="starrating mb-2 d-block">
                                        <!--<span class="review-link"><a href="#" data-toggle="modal" data-target="#leavereview" class="asdfs">Write a review</a></span>-->
                                        <span class="review-link"><a href="{{route('testimonial')}}" target="_blank"  class="asdfs">Write a review</a></span>
                                        <div class="overal-review">
																					<span class="fa fa-star yellow-text"></span>
																					<span class="fa fa-star yellow-text"></span>
																					<span class="fa fa-star yellow-text"></span>
																					<span class="fa fa-star yellow-text"></span>
																					<span class="fa fa-star yellow-text"></span>
																				</div>
                                    </div>
                                    <span class="font14 mb-3 d-block">Also SEE <a href="#" target="_blank"><strong>BUYERS VIDEO TESTIMONIALS</strong></a></span>
                                    <div class="socialshare">
																				<ul class="mb-3">
																					<li><a href="#"><img data-original="{{asset('img/facebook.png')}}" width="25px" height="25px" class="lazy" alt="facebook"></a></li>
																					<li><a href="#"><img data-original="{{asset('img/twitter.png')}}" width="25px" height="25px" class="lazy" alt="twitter"></a></li>
																					<li><a href="#"><img data-original="{{asset('img/Linkedin.png')}}" width="25px" height="25px" class="lazy" alt="linkdin"></a></li>
																					<li><a href="#"><img data-original="{{asset('img/instagram.png')}}" width="25px" height="25px" class="lazy" alt="instagrams"></a></li>
																					<li><a href="#"><img data-original="{{asset('img/Youtube.png')}}" width="25px" height="25px" class="lazy" alt="youtube"></a></li>
																				</ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="trustpilot-review">
                                    <div class="text-center"><a href="{{route('testimonial')}}" target="_blank"><img src="{{asset('img/911-global-meds-com-TrustPilot-Verified-Reviews.webp')}}" width="250px" height="168px" alt="Reviews on 911GlobalMeds.com" class="lazy"></a></div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                	<div class="google-review">
																			@if($all_testimonials->count() >0)
																					<div class="ratting">
																						<div class="starrating text-left">
																							<span class="fa fa-star orange-text"></span>
																							<span class="fa fa-star orange-text"></span>
																							<span class="fa fa-star orange-text"></span>
																							<span class="fa fa-star orange-text"></span>
																							<span class="fa fa-star "></span>
																							<span class="">{{ $all_testimonials->count() }}</span>
																						</div>
																						<p class="mt-3 mb-3">{{ round($all_testimonials->sum('rating')/$all_testimonials->count(),1) }} out of 5 stars</p>

																						@foreach($all_testimonials->groupBy('rating') as $key => $rating)
																						<div class="ratings-table">
																							<div class="ratting-txt"><a href="{{ route('testimonial')}}">{{ $key }} Stars</a></div>
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
		                            <div class="col-md-12 pt-5">
		                                <div id="googleapi">
		                                    <div class="review-list mb-4 text-center">
		                                        <div class="reviewscroll medreviewscroll owl-carousel default-slider owl-theme">
		                                        	@foreach($testimonials as $testimonial)
																											<div class="starrating text-center">
																											    @if($testimonial->rating > 0)

																					                                            @php 
																					                                             $star=array_fill(0,$testimonial->rating+1,"");
																					                                                $blank_star=array_fill(0,5-($testimonial->rating-1),"");

																					                                         @endphp
																					                                         {!!  implode(' <span class="fa fa-star orange-text"></span>',$star); !!}
																					                                         {!!  implode(' <span class="fa fa-star "></span>',$blank_star); !!}
																					                                        
																					                                        @endif
																											  <div class="starname">{{$testimonial->full_name}} <i>from</i> {{$testimonial->country}} <i>says</i> :</div><br/>
																										   <p class="mb-0">“ {{$testimonial->comment}} ”</p>
																										   </div>
																										@endforeach
		                                      
													
		                                        </div>
		                                    </div>
		                                    <div class="text-center font14">
		                                        <b>Testimonials Disclaimer : &nbsp;</b>IN ACCORDANCE WITH...
		                                        <span class="inputButton"><input type="button" class="common-btn ml-2 yellow-bg smallbtn" id="btnTViewDisclaimer" value="Show Full" /></span>
		                                        <div id="divTDisclaimer" style="display:none;">
		                                            <div class="row justify-content-md-center text-justify mt-3">
		                                                <div class="col-md-8 col-sm-12">
		                                                    <div class="readfulltestimonial content contentscroll">
		                                                        <p>IN ACCORDANCE WITH THE FTC GUIDE LINES CONCERNING USE OF ENDORSEMENTS AND TESTIMONIALS IN ADVERTISING, PLEASE BE AWARE OF THE FOLLOWING:</p>
		                                                        <p>Federal regulations require us to advise our customers that all product reviews, testimonials or endorsements of products sold at&nbsp;911GlobalMeds.com reflect the personal experience of those individuals who have expressed their personal opinions on our products and that those opinions and experiences may not be representative of what every consumer of our products may personally experience with the endorsed product.</p>
		                                                        <p>All product reviews and testimonials are the sole opinions, findings or experiences of our customers and not those of 911GlobalMeds or its staff. 911GlobalMeds does not compensate in any way for testimonials or reviews.</p>
		                                                        <ul>
		                                                            <li>
		                                                                These statements have not been evaluated by the US Food and Drug Administration (FDA) or any other&nbsp;country’s Drug Department /&nbsp;Governmental Authority. We are required to inform you that there is no intention, implied or otherwise that represents or infers that these products or statements be used in the cure, diagnosis, mitigation, treatment, or prevention of any disease.
		                                                            </li>
		                                                            <li>These testimonials do not imply that similar results will happen with your use of our products. We have no competent or reliable scientific evidence to suggest that the testimonial provider’s experience is due to the use of our products.</li>
		                                                            <li>These testimonials are not intended to recommend any supplement as a drug, as a diagnosis for specific illnesses or conditions, nor as a product to eliminate diseases or other medical conditions or complications. We make no medical claims as to the benefits of any of our products to improve medical conditions.</li>

		                                                        </ul>
		                                                    </div>
		                                                </div>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
                     {{--       <div class="col-md-12">							
                                <div class="writereview mt-5">
                                    <div class="accordion" id="submitreviews">
										<div class="card">
										<div class="card-header" id="submitreviews-heading">                                       
										<p data-toggle="collapse" data-target="#collapse-submitreviews" aria-expanded="true" aria-controls="collapse-submitreviews" class="text-center review-text red-text pb-3 collapsed">SUBMIT YOUR REVIEWS & TESTIMONIALS <i class="fa fa-caret-down" aria-hidden="true"></i></p>
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


                                              	@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
                                            <div class="fieldset">
                                                <div class="legend">Submit Your Reviews</div>
												<div class="fielsmend">All fields are mandatory <span class="astrik">*</span> </div>
                                                <div class="row">
                                                	 <input type="hidden" class="form-control" name="posting_url" value="{{url()->current()}}">
                                  				  
                                    					    <input type="hidden" class="form-control" name="posting_name" value="{{$medicas->c_1_1_1_generic_id_no}}">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Your Name<span class="error">*</span></label>
                                                            <input type="text" class="form-control Cfield" placeholder="Your Name"  required name="name"  maxlength="30" onkeyup="nameValidation(this)" value="{{ old('name') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Your Country<span class="astrik">*</span></label>
                                                         	<input type="text" name="country" required="" class="form-control" onkeyup="nameValidation(this)"  maxlength="30" value="{{ old('country') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Your Email<span class="error">*</span></label>
                                                            <input type="email" class="form-control Cfield" placeholder="Your Email" required name="email" maxlength="30" onchange="emailValidation(this)" value="{{ old('email') }}">
                                                        </div>
                                                    </div>
                                                      <div class="col-md-12 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="d-inline">Your Reviews</label>
                                                        
                                                             <textarea class="form-control Cfield" placeholder="Your Review" rows="2" name="review" maxlength="300" onkeyup="messageValidation(this)">{{old('review') }}</textarea>
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
						                                            <input class="form-check-input  opacity-checkbox  "  type="radio" name="rating_1"  required="" value="1">
						                                            </label>
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <label class="text-secondary">Bad</label>
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_1" required="" value="1">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_1" required="" value="2">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_1" required="" value="3">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_1" required="" value="4">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_1" required="" value="5">
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
						                                            <input class="form-check-input  opacity-checkbox  "  type="radio" name="rating_2"  required="" value="1">

						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <label class="text-secondary">Bad</label>
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_2"  required value="1">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_2" required value="2">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_2" required value="3">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_2" required value="4">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_2" required value="5">
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
						                                            <input class="form-check-input  opacity-checkbox  "  type="radio" name="rating_3"  required="" value="1">

						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <label class="text-secondary">Bad</label>
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_3" required value="1">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_3" required value="2">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_3" required value="3">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_3" required value="4">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_3" required value="5">
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
						                                            <input class="form-check-input  opacity-checkbox  "  type="radio" name="rating_4"  required="" value="1">

						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <label class="text-secondary">No</label>
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_4"  required  value="1">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_4"   required value="2">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_4"  required  value="3">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_4"   required value="4">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_4"  required  value="5">
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
						                                            <input class="form-check-input  opacity-checkbox  "  type="radio" name="rating_5"  required="" value="1">

						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <label class="text-secondary">No</label>
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_5"  required  value="1">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_5"  required  value="2">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_5"  required  value="3">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_5"   required value="4">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <input class="form-check-input" type="radio" name="rating_5"  required  value="5">
						                                        </div>
						                                        <div class="form-check form-check-inline">
						                                            <label class="text-secondary">Yes</label>
						                                        </div>
						                                    </div>
						                                </div>
                                                  
                                                  		  <div class="col-md-6 col-sm-12">

	                                                        <div class="form-group row">
	                                                        	<div class="col-md-6">
                               							  		 <label>Enter Characters as displayed in image</label>
                                    <div class="captcha">
                                          <button type="button" class="btn btn-danger" class="reload" id="reload">
                                            &#x21bb;
                                        </button>
                                     
                                        <span>{!! captcha_img('flat') !!}</span></br>
                                    </div>
                                    <input id="captcha" type="text" class="form-control mt-3" placeholder="Enter Characters as displayed in image" name="captcha">
	                                                        	</div>
	                                                        		<div class="col-md-6">

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
                            </div> --}}
                        </div>
                    </div>

                    <div class="tab-pane fade " id="druginformation" role="tabpanel" aria-labelledby="druginformation-tab">
                        <div class="accordion">
                            <h2 class="font30 mb-2 w-500 text-center green-text-hover">{{$medicas->c_1_1_8_drug_info_title}}</h2>
															<p class="linkbold text-center mt-3">{!! $medicas->c_1_1_9_generic_intro_details !!}</p>
                            <div class="accordion" id="accordionExample">
                            	@foreach($medsqas as $medsqa)
                                <div class="card">
                                    <div class="card-header" id="headingOne{{$medsqa->id}}">

                                        <h3 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne-{{$medsqa->id}}" aria-expanded="false" aria-controls="collapseOne-{{$medsqa->id}}">
                                               {{$medsqa->c_1_2_3_question}} <span><i class="fa fa-plus"></i></span>
                                            </button>
                                        </h3>
                                    </div>
                                    <div id="collapseOne-{{$medsqa->id}}" class="collapse" aria-labelledby="headingOne{{$medsqa->id}}" data-parent="#accordionExample">
                                        <div class="card-body">
                                           {!! $medsqa->c_1_2_4_answer!!}
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
												<div class="cardbuyer mt-4">
													<div class="byopen">
														<div class="cardbuyer-body">
															The above information has been sourced from 
															@if($medicas->c_1_1_12_di_source_url)
																<a href="{{$medicas->c_1_1_12_di_source_url}}" target="_blank" class="">{{$medicas->c_1_1_11_di_source_name}}</a>
														   
															@else
						                                            {{$medicas->c_1_1_11_di_source_name}}
															@endif
															, is intended only to increase awareness of health information and does not suggest treatment or diagnosis. This information is not a substitute for individual medical attention and should not be construed to indicate that use of the drug is safe, appropriate, or effective for you. See your health care professional for medical advice and treatment.
														</div>
													</div>
												</div>
                    </div>

                    <div class="tab-pane fade" id="fdaleaflets" role="tabpanel" aria-labelledby="fdaleaflets-tab">
                        <h2 class="font-20 mb-2 text-center w-500 green-text-hover">    <a @if($medsLeafletsFirst && $medsLeafletsFirst->c_1_3_4_pdf_file) href="{{asset('/info/'.$medsLeafletsFirst->c_1_3_4_pdf_file)}}" target="_blank" @endif>{{str_replace(',', ' ', $medicas->c_1_1_3_other_names)}} - {{$medicas->c_1_1_2_main_generic_name}} : Package Insert / Prescribing Information Leaflet, Medication Guides & Instructions for Use </a></h2>
                        <p>Patient Package Inserts (PPI), Medication Guides (MG), and Instructions for Use (IFU) are paper handouts that come with many prescription medicines. The guides address issues that are specific to particular drugs and drug classes, and they contain FDA-approved information that can help patients use the medicine safe and effectively and try to avoid serious adverse events. Not all medicines have patient information and if you have questions about your medicines you should always talk with your Healthcare Provider or Pharmacist. </p>
                        <p>Medication Guides are developed by the manufacturer, approved by the FDA, and required to be given to consumers each time the medication is dispensed. You may see a printable pdf copy of the
                        @if($medsLeafletsFirst && $medsLeafletsFirst->c_1_3_4_pdf_file)
                         <a href="{{asset('/info/'.$medsLeafletsFirst->c_1_3_4_pdf_file)}}" target="_blank"  class="bluelink">Medication Guide / Patient Information Leaflet</a>
                         @else
                         <span href="javascript::void(0)" class="bluelink">Medication Guide / Patient Information Leaflet</span>
                         @endif
                          of {{str_replace(',', ' ', $medicas->c_1_1_3_other_names)}} - {{$medicas->c_1_1_2_main_generic_name}} in

                          @if($medsLeafletsFirst && $medsLeafletsFirst->c_1_3_4_pdf_file)
                             <a href="{{asset('/info/'.$medsLeafletsFirst->c_1_3_4_pdf_file)}}" class="bluelink" target="_blank">English</a> 
                          @else
                             <span href="javascript::void(0);" class="bluelink" >English</span> 
                          @endif

                        @foreach($medsLeaflets as $medsLeaflet)
                        @if($medsLeaflet->c_1_3_4_pdf_file)
                        <a href="{{asset('/info/'.$medsLeaflet->c_1_3_4_pdf_file)}}"   class="bluelink" target="_blank">{{$medsLeaflet->c_1_3_3_language}}</a>  
                        @endif
                        @endforeach
                      </p>
                    </div>
                    <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">
                        <div class="patientVideo">
                            <h3 class="font30 mb-2 w-500 text-center green-text-hover">Patient Information Videos on  {{str_replace(',', ' ', $medicas->c_1_1_3_other_names)}} – {{$medicas->c_1_1_2_main_generic_name}}</h3>
														<div class="latest-blog">
		                            <div class="container">
		                                <div class="row owl-carousel default-slider blog-slider owl-theme text-center">
		                                    @foreach($medsVideos as $medsVideo)
		                                        <div class="blog-box all-video-blog">
		                                        	<video controls="" poster="{{asset('img-vi/'.$medsVideo->c_1_4_4_image)}}" width="500" height="400"><source data-original="{{$medsVideo->c_1_4_7_video_url}}" type="video/mp4"></video>

		                                         {{--  <a data-fancybox data-width="640" data-height="360" href="{{$medsVideo->c_1_4_7_video_url}}"> <img data-original="{{asset('img-vi/'.$medsVideo->c_1_4_4_image)}}" alt="" class="lazy"></a> --}}
		                                        <div class="bloghead text-center mt-2">
		                                           <a data-fancybox data-width="640" data-height="360" href="{{$medsVideo->c_1_4_7_video_url}}"> {{$medsVideo->c_1_4_3_video_title}}</a><br>
		                                           @if($medsVideo->youtube_url)
		                                           <small ><b> <a href="{{$medsVideo->youtube_url}}" target="blank">See this Video on YouTube</a></b></small><br>
		                                           @endif
		                                           @if($medsVideo->source_url)
		                                          <small> Posted from <a href="{{$medsVideo->source_url}}" target="blank">Source </a> for Educational Purposes only </small>
		                                          @endif
		                                        </div>
		                                        </div>
		                                    @endforeach
		                                </div>
		                            </div>
		                        </div>
                           <div class="text-center font14 mt-3">
                                        <b>Video Contents & Copyright Disclaimer : &nbsp;</b>The above videos and any contents..
                                        <span class="inputButton"><input type="button" class="common-btn ml-2 yellow-bg smallbtn" id="btnTVdeioDisclaimer" value="Show Full" /></span>
                                        <div id="divVideoDisclaimer" style="display:none;">
                                            <div class="row justify-content-md-center text-justify mt-3">
                                                <div class="col-md-8 col-sm-12">
                                                    <div class="readfulltestimonial content contentscroll">
                                                        <p>The above videos and any contents therein are posted on this site – www.911GlobalMeds.com - for informational and educational purposes only and are not intended to be a substitute for professional medical advice, diagnosis, or treatment. The main purpose of posting this video is to provide a single platform about the excerpts, facts and comments on different drugs and medications as presented by renowned Physicians, Pharmacists and Patient Users globally. All contents including text, graphics, images and information contained on or available through this video are strictly not to be taken as any kind of medical advice or reference for drugs usage to cure or treat any disease. Doctors, Physicians and Pharmacists have their own professional views regarding a medicine after the study of a patient condition and so it is strongly recommended to consult them before taking any medicine to cure or treat any kind of health challenges. www.911GlobalMeds.com does not make any claim or validate the views presented in this video and disclaims any liability for any loss, damage, or injury in conjunction with any use of /application on the basis of this video, or the instructions, advice or experiences expressed herein. NO BRAND OR GENERIC MEDICATION IS BEING PROMOTED FOR SALES by the display of this video. 

																												<br>Under Section 107 of the Copyright Act 1976, allowance is made for "fair use" for purposes such as criticism, comment, news reporting, teaching, scholarship, and research. Fair use is a use permitted by copyright statute that might otherwise be infringing. Non-profit, educational or personal use purposes tips the balance in favour of fair use. As such, this video is posted on this site – www.911GlobalMeds.com - for fair use only with only a Video Title simplification change and for public interest & educational information purposes only. The video is acknowledged to be shared from the original video source as mentioned above and no claim is made on the ownership of this video which remains an Intellectual Property of the spokesperson or owner of this video.</p>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="blogpost" role="tabpanel" aria-labelledby="blogpost-tab">
                        <div class="latest-blog pb-0">
                            <div class="container">
                                    <h2 class="font-20 mb-2 text-center w-500 green-text-hover mb-4">Blogs/Information on  {{str_replace(',', ' ', $medicas->c_1_1_3_other_names)}} - {{$medicas->c_1_1_2_main_generic_name}}</h2>
                                <div class="row owl-carousel default-slider blog-slider owl-theme text-center">  
                                	@foreach($blognews as $single_blog)
                                        <div class="blog-box">
                                            <a href="{{route('indivisual_blog',$single_blog->page_url_name)}}" target="_blank"><img data-original="{{asset('img-bl/'.$single_blog->medium_image)}}" alt="" class="lazy"></a>
                                            <div class="bloghead text-center mt-3"><a href="{{route('indivisual_blog',$single_blog->page_url_name)}}" target="_blank">{{ $single_blog->blog_title_h1}}L</a></div>
                                        </div>

                                        @endforeach
                                       
                                </div>
                            </div>
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
		{{-- <div class="alphabrand">
			<h3>Brand & Generic Drugs List :</h3>
			<p>The list of all Generic Drugs available for sale online may be seen by clicking on any of the letters below :</p>
			<div class="alphalist">
				<div class="seelist-alphabet">
					<div class="atoztabbing" id="accordion">
						<div class="atoztabbing-inner">
							@foreach($all_medcines as $key => $alphabet)
							<div class="alpha-card" id="a-heading">
								<a data-toggle="collapse" data-target="#genric{{ $key }}-collapse" aria-expanded="false" aria-controls="a-collapse">
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
								<a data-toggle="collapse" data-target="#other{{ $key }}-collapse" aria-expanded="false" aria-controls="{{$key}}-collapse">
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
		</div> --}}
		<div class="numnote"><strong>Tags : </strong>
			@if($medsSeo && $medsSeo->c_1_5_5_hyperlink_page_tags)
			@php $meds_seo =  explode(',',$medsSeo->c_1_5_5_hyperlink_page_tags); @endphp
			@if(count($meds_seo) > 0)
			@foreach($meds_seo as $seo)
			<a href="{{url('/'.$medicas->c_1_1_4_frontend_url)}}">{{$seo}}</a>, 
			@endforeach
			@endif
			@endif
	
		</div>
		</div>
		
	</div>
</div>
<!-- SEND BUSINESS ENQUIRY Modal -->
    <div class="modal fade businessQuery" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body query-form">
                    <form class="mt-0" method="post"  id="businessQueryForm">
                        <div class="fieldset">
                            <div class="legend">
                                BUSINESS PURCHASE QUERY: {{ $medicas->c_1_1_2_main_generic_name }} / {{ $medicas->c_1_1_3_other_names }} <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
							<div class="fielsmend">All fields are mandatory <span class="astrik">*</span> </div>
							<div class="text-danger" id="query-error2"></div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Full Name<span class="astrik">*</span></label>
                                        <input type="text" id="full_name" name="full_name" class="form-control Cfield" placeholder="Full Name" required=""   onkeyup="nameValidation(this)"  maxlength="30">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Business Name<span class="astrik">*</span></label>
                                        <input type="text" id="business_name" name="business_name" class="form-control Cfield" placeholder="Business Name" required=""   onkeyup="messageValidation(this)" maxlength="50">
                                    </div>
                                </div>
                                    <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Country<span class="astrik">*</span></label>
                                        <input type="text" id="country" name="country" class="form-control Cfield" placeholder="Country" required=""  maxlength="50"  onkeyup="nameValidation(this)" >
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Email<span class="astrik">*</span></label>
                                        <input type="email" id="email" name="email" class="form-control Cfield" placeholder="Email" required=""   maxlength="50" onchange="emailValidation(this)" >
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
									<label>ISD Code – Contact no.<span class="astrik">*</span></label>
									<input class="form-control Cfield jquery-intl-phone" id="contact_no" name="contact_no" type="tel" placeholder="WhatsApp / Mobile no." required="" onkeyup="phoneValidation(this)" minlength="7" maxlength="20" >
								</div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Upload Business Licence (pdf or jpg formats only)<span class="astrik">*</span></label>
                                        <input type="file" id="upload_licence" name="upload_licence" class="form-control Cfield" placeholder="Upload Business Licence" required="">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Message / Requirement<span class="astrik">*</span></label>
                                        <textarea name="message" id="message" title="Comment" class="form-control Cfield" cols="5" rows="3" placeholder="Message / Requirement" required="" maxlength="250" onkeyup="messageValidation(this)"></textarea>
                                    </div>
                                </div>
                                 
                                <div class="col-md-6 col-sm-12">
                                	
                                  <label>Enter Characters as displayed in image</label>
                                    <div class="captcha">
                                          <button type="button" class="btn btn-danger  reloadBtn" id="reload">
                                            &#x21bb;
                                        </button>
                                     
                                        <span>{!! captcha_img('flat') !!}</span></br>
                                    </div>
                                    <input id="captcha" type="text" class="form-control mt-3" placeholder="Enter Characters as displayed in image" name="captcha">

                                </div>
                                <div class="col-md-6 col-sm-12">
									{{-- <div class="text-danger" id="query-error2"></div> --}}

                                    <button type="submit" id="query_submit2" class="btn nobtn green-bg lg-btn mt-3">Send Query</button>
                                </div>
                                <div class="col-md-6 col-sm-12"></div>
                                <div class="col-md-6 col-sm-12">
                                	
									

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- End Query Modal -->
	<!-- NEED HELP? SEND QUERY -->
    <div class="modal fade patientQuery" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="min-width: 1000px">
            <div class="modal-content">
                <div class="modal-body query-form">
                    <form class="mt-0" method="post" id="queryForm" >
                    	@csrf
                        <div class="fieldset">
                            <div class="legend">
                                PATIENT PURCHASE QUERY : {{ $medicas->c_1_1_2_main_generic_name }} / {{ $medicas->c_1_1_3_other_names }} <button type="button"
                           
                                class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
							<div class="fielsmend">All fields are mandatory <span class="astrik">*</span> </div>
								<div class="text-danger" id="query-error"></div>
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Full Name<span class="astrik">*</span></label>
                                        <input type="text" name="full_name" id="full_name1" class="form-control Cfield" placeholder="Full Name" required=""  onkeyup="nameValidation(this)" maxlength="30">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>Email<span class="astrik">*</span></label>
                                        <input type="email" name="email" id="email1" class="form-control Cfield" placeholder="Email" required=""  onchange="emailValidation(this)" maxlength="50" >
                                        <input type="hidden" name="url"  id="form_url" value="{{ $medicas->c_1_1_4_frontend_url }}">
                                        <input type="hidden" name="id" id="form_id" value="{{ $medicas->c_1_1_1_generic_id_no }}">
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="form-group">
									<label>ISD Code – Contact no.<span class="astrik">*</span></label>
									<input class="form-control Cfield jquery-intl-phone" id="contact_no1" name="contact_no" type="tel" placeholder="WhatsApp / Mobile no."  required=""  onkeyup="phoneValidation(this)"   minlength="7" maxlength="20">
								</div>
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="form-group">
                                        <label>Message / Requirement<span class="astrik">*</span></label>
                                        <textarea name="message"  maxlength="250"  id="message1" title="Comment" class="form-control Cfield" cols="4" rows="2" placeholder="Message / Requirement" required="" onkeyup="messageValidation(this)"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                  <label>Enter Characters as displayed in image</label>
                                    <div class="captcha">
                                          <button type="button" class="btn btn-danger  reloadBtn" id="reload">
                                            &#x21bb;
                                        </button>
                                     
                                        <span>{!! captcha_img('flat') !!}</span></br>
                                    </div>
                                    <input id="captcha" type="text" class="form-control mt-3" placeholder="Enter Characters as displayed in image" name="captcha">
                                    <button type="submit"  class="btn nobtn green-bg lg-btn" id="send-query">Send Query</button>
								

                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
	<!-- NEED HELP? SEND QUERY END -->

</div>
</section>
@endsection


