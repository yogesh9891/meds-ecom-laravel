<!DOCTYPE html>

<html>

<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1" itemprop="" property="">

<title>buy fda approved prescription drugs online at global and canada pharmacy</title>

<link rel="icon" href="{{asset('img/favicon-32x32.png')}}" sizes="32x32" type="image/png">

    <link rel="icon" href="{{asset('img/favicon-16x16.png')}}" sizes="16x16" type="image/png">

<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">

<link href="http://b2bdrugstore.com/demo-gdp/css/font-awesome.min.css" rel="stylesheet">

<link href="{{ asset('front_assets/css/main.css')}}" rel="stylesheet">



<body class="invoicegap @if(!$country) shiping-ss @else shiping-ds @endif" 
> 

<div class="container">

<div class="invoice-box shipment">

<div class="row">

	<div class="col-md-12 shiptopdetails">

		<div class="ship-address pt-3 pb-3 border-t border-b text-center">
@if(!empty($summary->c_14_19_patient_name) && ($summary->c_14_19_patient_name == $summary->c_14_22_parcel_receivers_full_name))
	{{$summary->c_14_22_parcel_receivers_full_name}} 
	@else
	{{$summary->c_14_19_patient_name?$summary->c_14_19_patient_name.' / ':""}} {{$summary->c_14_22_parcel_receivers_full_name}}
@endif
			 <br><br>

{{$summary->c_14_24_receiver_address_line_1}}, {{$summary->c_14_25_receiver_address_line_2}}<br><br>

{{$summary->c_14_26_receiver_city}} ,{{$summary->c_14_27_receiver_state}} – {{$summary->c_14_28_receiver_zip}}<br><br>

{{$summary->c_14_29_receiver_country}}



		</div>

	</div>

</div>



<div class="row whomconcern">

	<div class="col-md-12 pt-4">

		<center>

		<strong><br><br>TO WHOM IT MAY CONCERN /<br><br>COURIER PARCEL BOOKING OFFICER <br><br><br><br><span class="text-underline">UNDERTAKING ON PARCEL CONTENTS / END USE</span></strong><br><br><br><br>

		THIS IS IN REFERENCE TO THE ATTACHED PARCEL BEING SENT TO ME.<br><br><br><br>I HEREBY DECLARE THAT:<br><br>

		@if($country)

					1. THE CONTENTS ARE  <span class="text-underline"><strong> DIETARY SUPPLEMENTS FOR PERSONAL USE ONLY / NOT FOR SALE.</strong></span>

					 <br><br><br><br>

		2. THE SHIPMENT <span class="text-underline"><strong>DOES NOT REQUIRE ANY DOCTOR’S PRESCRIPTION</strong></span><br> AS THEY ARE DIETARY SUPPLEMENTS OF MEDICAMENTS <span class="text-underline"><strong>HSN CODE :</strong></span><br><br>30045020 - <b>PREPARATIONS OF MINERALS AND THEIR SUPPLEMENTS</b>





		@if($country =='ds-au')

		<br><br>AUSTRALIA HSN CODE 3004.50.00 <strong>OTHER, CONTAINING VITAMINS OR OTHER PRODUCTS OF 2936.</strong>

		@elseif($country =='ds-uk')

		<br><br>UK HSN CODE 3004500000  <strong>OTHER MEDICAMENTS CONTAINING VITAMINS OR OTHER PRODUCTS OF HEADING 2936.</strong>

		@elseif($country =='ds-us')

		<br><br>US HSN CODE 300450   <strong> VITAMINS, NATURAL OR SYNTHETIC, DOSAGE ETC FORM.</strong>

		@endif

		<br><br><br><br>

		3. THE CONTENTS ARE OVER-THE-COUNTER AVAILABLE VITAMINS AND <span class="text-underline"><strong><br>DO NOT CONTAIN ANY NARCOTIC OR CONTROLLED SUBSTANCE INGREDIENTS.</strong></span>

		</center>

		<br><br>

			





		







		@else

		1. THE CONTENTS ARE MEDICAMENT SAMPLES <span class="text-underline"><strong> FOR SCHOLARLY STUDY USE PURPOSES ONLY.</strong>

			</span> <br><br><br><br>2. THE SHIPMENT <span class="text-underline"><strong>DOES NOT REQUIRE ANY DOCTOR’S PRESCRIPTION</strong></span> AS THE CONTENTS WILL BE USED FOR THE ABOVE STATED PURPOSE ONLY AND <span class="text-underline"><strong>WILL NOT BE USED FOR ANY HUMAN / ANIMAL TREATMENT</strong></span>.<br><br><br><br>

		3. THE MEDICAMENT SAMPLES <span class="text-underline"><strong>DO NOT CONTAIN ANY NARCOTIC INGREDIENTS</strong></span> & ARE OPENLY AVAILABLE AT ANY PHARMACY.

		</center>

		<br><br>

		@endif







	</div>

</div>



<div class="row mt-5">

	<div class="col-md-12">

		<p><img src="{{asset('img/co-sign.webp')}}" alt=""/></p>

			This document is acknowledged to be digitally signed by @if(!empty($summary->c_14_19_patient_name) && ($summary->c_14_19_patient_name == $summary->c_14_22_parcel_receivers_full_name))
	{{strtoupper($summary->c_14_22_parcel_receivers_full_name)}} 
	@else
	{{strtoupper($summary->c_14_19_patient_name?$summary->c_14_19_patient_name.' / ':"")}} {{strtoupper($summary->c_14_22_parcel_receivers_full_name)}}
@endif <br>

No separate signatures are required, unless specifically signed above.<br><br>



Accepted & Digitally Signed on {{$summary->created_at->format('d M Y')}}

	</div>



</div>



</div>

</div>

</body>

</html>