<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Proforma Invoice -     @if($summary->c_14_93_pay_mode == 'Bank') Bank Transfer Mode @else Credit Cart Mode  @endif</title>
<link rel="icon" href="{{asset('img/favicon-32x32.png')}}" sizes="32x32" type="image/png">
<link rel="icon" href="{{asset('img/favicon-16x16.png')}}" sizes="16x16" type="image/png">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
<link href="http://b2bdrugstore.com/demo-gdp/css/font-awesome.min.css" rel="stylesheet">
<link href="{{asset('front_assets/css/main.css')}}" rel="stylesheet">

<body class="invoicegap"> 

<div class="container">
<div class="invoice-box">
				<div class="row justify-content-md-center text-center font15 socialmediainvoice">
						<div class="col-md-12"><div class="main-logos text-center"><div class="logo mb-2 ml-auto mr-auto"><a href="{{url('/')}}"><img src="{{asset('img/911-Global-Meds-logo.jpg')}}" alt="get fda approved prescription drugs express medicine shipments online at global HK and Canada pharmacy marketplace co"></a><a class="angel-text" data-fancybox="" href="{{url('angel-number')}}"><strong>Angel number 9-1-1</strong></a></div></div></div>
						<div class="col-md-3 pl-2 pr-2">
							<div class="social-connect">
								<span>Skype: </span>
								<span class="pl-0"><font>911GlobalMeds</font></span> 
							</div>
						</div>
						<div class="col-md-4 pl-2 pr-2">
							<div class="social-connect">
								<span>WhatsApp & Viber: </span>
								<span class="pl-0"><font>+1 (409) 995-3585</font></span>
							</div>
						</div>
						<div class="col-md-4 pl-2 pr-2">
							<div class="social-connect">
							<span style="color:#000;">Email: </span>
							<span class="pl-0"><font>WeCare@911GlobalMeds.com</font></span>
							</div>
						</div>
				</div>
				<div class="row pt-3 pb-3 border-t mt-2 pb-2 pt-2">

					
					<div class="col-md-6 "><p><strong> Order ID </strong>: {{$summary->c_14_2_online_invoice_no}}</p></div>
					<div class="col-md-6"><p><strong>Date</strong>: {{$summary->created_at->format('d M Y')}}</p></div>
				</div>
		
				<div class="row">
					<div class="col-md-6">
						<p style="font-weight:bold;margin-bottom:0 !important;">Payment Address :</p>
						<p style="margin-top: 0;line-height:1.5;">
                        {{$summary->c_14_10_payer_full_name}}<br>
						( for  {{$summary->c_14_19_patient_name}},  {{$summary->c_14_11_patient_relation_payer}} )<br>
                        {{$summary->c_14_12_payer_address_line_1}}<br>
						 {{$summary->c_14_13_payer_address_line_2}}<br>
						 {{$summary->c_14_14_pay_city}},  {{$summary->c_14_15_payer_state}} - {{$summary->c_14_16_payer_zip}} <br>
						  {{$summary->c_14_17_payer_country}}<br>
                        {{$summary->c_14_9_login_email}} / {{$summary->c_14_18_payer_mobile}}.
						</p>
					</div>
					<div class="col-md-6 addm">
					<p style="margin: 0;font-weight:bold;margin-bottom:0 !important;">Delivery Address :</p>
					<p style="margin-top: 0;line-height:1.5;">
                    {{$summary->c_14_19_patient_name}}<br>
					c/o {{$summary->c_14_22_parcel_receivers_full_name}}, {{$summary->c_14_23_receiver_relation_patient}} <br>
					  {{$summary->c_14_24_receiver_address_line_1}}<br>
					  {{$summary->c_14_25_receiver_address_line_2}}<br>
					  {{$summary->c_14_26_receiver_city}},   {{$summary->c_14_27_receiver_state}} – {{$summary->c_14_28_receiver_zip}}<br>
					  {{$summary->country->c_4_1_2_country_name??''}}<br>
					  {{$summary->c_14_30_receiver_mobile}}

					</p> </div>
				</div>
				<div class="row pt-3 pb-2 border-t">
					<div class="col-md-12 pl-0 pr-0 pb-3"><font style=""><strong>Order Details :</strong></font></div>
					<div class="col-md-12 pl-0 pr-0">
						<div class="orderdetails table-responsive">
				  <table width="100%" cellspacing="0" border="0" cellpadding="0" class="table table-borderless">
					  <thead>
						<tr>
						  <!--th align="left" style="vertical-align:top;color:#00a2ed;" width="7%">SKU No.</th-->
						  <th align="left" style="vertical-align:top;color:#555555;text-align: center;" width="55%">Medication <br>Details</th>
						  <th align="center" style="vertical-align:top;color:#555555;text-align: center;" width="15%">Qty./Pack<br>x Packs</th>
						  <th align="center" style="vertical-align:top;color:#555555;text-align: center;" width="15%">Price/<br>Pack</th>
						  <th align="center" style="vertical-align:top;color:#555555;text-align: center;" width="15%">Amount<br>(US$)</th>
						</tr>
					  </thead>
					  <tbody>
					  	@php $total = 0;  @endphp
                    @if($summary->order_details)
                    	@foreach($summary->order_details as $order_detail)
						<tr>
						  <!--td align="left">009703</td-->
						  <td align="left" style="padding:10px 15px 10px 5px;" class="ult">
							<div class="orderproduct">
                    {{$order_detail->c_14_35_description}}
							</div>
						</td>
						  <td align="center">{{$order_detail->c_14_36_quantity_pack}} {{$order_detail->c_14_40_medicine_form}} x {{$order_detail->c_14_39_total_quantity}} </td>
						  <td align="center">US$ {{$order_detail->c_14_37_net_price_pack}}</td>
						  <td align="right" style="padding-right: 30px"><strong>$ {{$order_detail->c_14_41_total_amount}}</strong></td>
						  @php $total+=$order_detail->c_14_41_total_amount;  @endphp
						  
						</tr>
					
                    @endforeach
                    @endif
                    	@if($summary->c_14_75_coupon_code_used)
						<tr class="detailsnoborder">
							<td colspan="3" align="right" class="text-right">Promotional Discount (-)</td>
							<td align="right" style="vertical-align: top;padding-right:30px;"><strong>$ {{$summary->c_14_76_promo_discount}}</strong></td>
						  @php $total-=$order_detail->c_14_76_promo_discount;  @endphp
						</tr>
						@endif
						@if($summary->c_14_77_shipping_charges)
						<tr class="detailsnoborder">
							<td colspan="3" align="right" class="text-right">Express Shipping Charges (+)</td>
							<td align="right" style="vertical-align: top;padding-right:30px;"><strong>$ {{round($summary->c_14_77_shipping_charges)}}</strong></td>
						  @php $total+=$summary->c_14_77_shipping_charges;  @endphp
						 @endif
						</tr>
						@if($summary->c_14_78_additional_charges)
						<tr class="detailsnoborder">
							<td colspan="3" align="right" class="text-right">Any Additional Charges (+)</td>
							<td align="right" style="vertical-align: top;padding-right:30px;"><strong>$ {{$summary->c_14_78_additional_charges}}</strong></td>
						  @php $total+=$summary->c_14_78_additional_charges;  @endphp

						</tr>
						@endif
						@if($summary->c_14_81_pod_charges)
						<tr class="detailsnoborder">
							<td colspan="3" align="right" class="text-right">Pay-on-Delivery Charges (+)</td>
							<td align="right" style="vertical-align: top;padding-right:30px;"><strong>$ {{$summary->c_14_81_pod_charges}}</strong></td>
							  @php $total+=$summary->c_14_81_pod_charges;  @endphp

						</tr>
						@endif	
						 @if(request()->get('p') && request()->get('p') == 99)			
							@php $cc_charges = round($total*0.1); 
							$total += $cc_charges;
							  @endphp
						<tr class="detailsnoborder">
							<td colspan="3" align="right" class="text-right">Credit Card Processing Fees (+)</td>
							<td align="right" style="vertical-align: top;padding-right:30px;"><strong>$ {{round($cc_charges)}} </strong></td>
						</tr>
						@endif
						<tr>
						  <td colspan="3" align="right" style="text-align:right"><strong>Total</strong></td>
						  <td align="right" style="color:#00a2ed;padding-top:15px;padding-bottom:15px;padding-right:30px;"><strong>US$ {{round($total)}}</strong></td>
						</tr>
					  </tbody>
					</table>
					</div>
					</div>
				</div>
                     @if($summary->c_14_93_pay_mode == 'Bank')
				<div class="border mt-3">
					<div class="row pb-3 pt-3">
						<div class="col-md-12">
							<strong>Please make an International Bank Wire Transfer/Online Transfer of <span style="color:cornflowerblue">


							{{$bank_detail?$bank_detail->c_5_11_currency:'USD'}}

							 {{round($total)}}</span> into our bank details* as:</strong>
							
							<br><br>
								<em>Due to Tax Exemption reasons, <strong><u>no payment will be accepted from any bank in Hong Kong or Canada.</u></strong><br>
								Such payment will be returned at the expense and cost of the sender.<br><br>
								<span style="color:cornflowerblue">*Beneficiary / Receiver Details:</span></em>
						</div>
					</div>
					@if($bank_detail)
					<div class="row pb-3 pt-3">
						<div class="col-md-12">
							<table width="100%" cellspacing="0" border="0" cellpadding="0">
									<thead>
										<tr>
											<th align="left" scope="col" style="padding:5px 5px 5px 5px;border-top: solid 1px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;width:25%;font-weight:normal;">Account Name</th>
											<th align="left" scope="col" style="padding:5px 5px 5px 5px;border-top: solid 1px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;width:75%;font-weight:normal;">{{$bank_detail->c_5_3_account_name ?? ''}}</br><span class="astrik">Mention EXACTLY and in FULL as above</span></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Address</td>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">{{$bank_detail->c_5_4_account_address ?? ''}}</td>
										</tr>
										<tr>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Bank Name &amp; Location</td>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">{{$bank_detail->c_5_5_bank_name_location ?? ''}}</td>
										</tr>
										<tr>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Bank / Branch code</td>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">{{$bank_detail->c_5_6_bank_branch_code ?? ''}}</td>
										</tr>
										<tr>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Account Type</td>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">{{$bank_detail->c_5_7_account_type ?? ''}}</td>
										</tr>
										<tr>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Account Number</td>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">{{$bank_detail->c_5_8_account_no ?? ''}}</td>
										</tr>
										
										<tr>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Bank Transfer code</td>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">{{$bank_detail->c_5_9_bank_transfer_code ?? ''}}</td>
										</tr>
										<tr>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Email for Bank Notification</td>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">{{$bank_detail->c_5_10_email ?? ''}}</td>
										</tr>
										<tr>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Amount</td>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">{{$bank_detail->c_5_11_currency}} {{round($total)}}</td>
										</tr>
										<tr>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Charges Instructions</td>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">Bank Code - <b>OUR</b>  <br>- All Bank Charges are paid by the Sender of funds.
									</td>
										</tr>
										<tr>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 1px #000;">Subject Reference</td>
											<td style="padding:5px 5px 5px 5px;border-top: solid 0px #000;border-right: solid 1px #000;border-bottom: solid 1px #000;border-left: solid 0px #000;">Order Ref.:{{$summary->c_14_2_online_invoice_no}} (Pay Goods/Services)<br><span class="astrik">Mention EXACTLY as above.<br>STRICTLY NO OTHER WORDS PLEASE.</span>
											</td>
										</tr>
									</tbody>
								</table>
								<br>
		                    
		                    <div class="col-md-12">
						<strong>Note:</strong>  Please send a copy of the bank receipt &amp; SWIFT Wire MT-103 Message sent by your bank when you have made the online/wire transfer.<br>This will also be required to track your funds in our bank's system.
					</div>
						</div>
					</div>
					@endif
				</div>
		        @elseif($summary->c_14_93_pay_mode == 'Credit Card')
				<div class="border mt-4 mb-4">
					<div class="row pb-4 pt-4">
					<div class="col-md-12">
						<div class="stock-new">
							<div class="textslide text-center mb-4">
							<strong>Thank you for your interest in paying by Credit Card.</strong>
							</div>
							<div class="textslide text-center">
							<strong>We will soon send you a <span class="blue-text hover-green">CREDIT CARD PAYMENT LINK</span> by WhatsApp/Email<span class="astrik">*</span> from <a class="blue-text" href="mailto:WeCare@911GlobalMeds.com">WeCare@911GlobalMeds.com </a></strong>
							</div>
							<div class="textslide text-center font14">
							<span class="astrik">*</span><em>Due to our high mail volumes, please also check your email's SPAM folder, right-click on the mail and mark it as NOT SPAM.</em>
							</div>
						</div>
					</div>
				</div>
				</div>
				@endif
				<div class="border">
					<div class="row pb-3 pt-3">
						<div class="col-md-12 font14">
					<i style="color:#00A2ED;" class="text-justify"><strong>Quality Assurance :</strong> All the Pharmaceutical Drugs ordered on 911GlobalMeds.com are shipped directly from Legal Registered Pharmacies, <strong>are approved for use for Human Treatment by the FDA of the manufacturing country</strong> and can also be used for conducting any R&amp;D/Test or Analysis/Scholarly studies.</i><br><br>
					<div class="text-justify buyer-acceptance"><p class="font13 grey-text fw-600 mt-2"><em><strong>Buyer’s Acceptance</strong>: I/We <span class="blue-text">{{$summary->c_14_19_patient_name?$summary->c_14_19_patient_name.' / ':' '}}  {{$summary->c_14_22_parcel_receivers_full_name}} / {{$summary->c_14_10_payer_full_name}} </span> am/are capable / authorized to represent myself/shippee in placing this order for myself/shippee's behalf. I/We have studied and accept the <a href="{{url('patient-authorization-agreement')}}" class="text-underline blue-text">Patient Authorization Agreement</a>, <a href="{{url('/terms-conditions-of-use')}}" target="_blank" class="text-underline blue-text">Terms of Use / Conditions,</a> <a href="{{url('/customer-agreement')}}" target="_blank" class="text-underline blue-text">Customer Agreement</a>, <a href="{{url('/disclaimer')}}" target="_blank" class="text-underline blue-text">Comprehensive & General Disclaimer </a>and the <a href="{{url('/privacy-policy')}}" target="_blank" class="text-underline blue-text">Privacy Policy</a> and all details as mentioned therein. As required by FDA regulations, I/we have also gone through the Drug Description carefully and before ordering, I/we have made myself/ourself fully aware of all the critical information like the Uses, Side Effects, How to Use, How the Drug Works, Related Warnings, Risks Vs Benefits, Caution and What If I/we Miss A Dose of the drug. I/we agree to bear any customs duty / other taxes payable at the destination country and that the order parcel will be delivered to me/us in the approximate days specified on the above Finalize Order section with additional days taken for Customs Clearance in the Shipment / Destination countries and any further Courier Delivery time / delays due to COVID-19 or any other unforeseen circumstances. I/we agree to email a copy of the Receiver’s ID document (like a Driver’s License, Passport copy etc.) for the Courier agency to accept the parcel booking and also send a copy of the Doctor’s Prescription / Scholarly Study Undertaking as per my/our selected End Use requirement of my/our Order.
					@if($summary->c_14_31_end_use_selected ==1)
					 Further, I/we undertake that the above Pharmaceutical Drugs ordered by me/us are for an individual patient’s use as per the <a href="{{asset('scripts/'.$summary->c_14_32_doctor_prescription_url)}}" target="_blank"> Doctor’s Prescription </a> submitted by me/us.
					 @endif
					 @if($summary->c_14_31_end_use_selected==2)
					 Further, I/we accept, undertake and indemnify the seller pharmacy that the above Pharmaceutical Drugs ordered by me/us are for a Scholarly Study / Tests or Analysis Use only and the <a href="{{url('shipping-undertaking')}}" class="text-underline blue-text">Shipment Undertaking</a> is my digital acceptance of the same.</em>
					@endif</p></div>
						</div>
					</div>
				</div>
			
		
				<div class="cta border mt-3 mb-3 pt-3">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="world-big">WORLD’S BIGGEST ONLINE PHARMACEUTICALS MARKETPLACE</div>
							<p>Maximum Medications @ Minimum Prices # Direct from Canada &amp; Global Pharmacies Marketplace Co. !</p>
						</div>
					</div>
		            <div class="footer-tags mt-0">
						<a href="#">Belgium Pharmacy</a>
						<a href="#">Canada Pharmacy</a>
						<a href="#">Germany Pharmacy</a>
						<a href="#">India Pharmacy</a>
						<a href="#">Ireland Pharmacy</a>
						<a href="#">Italy Pharmacy</a>
						<a href="#">Mexico Pharmacy</a>
						<a href="#">Singapore Pharmacy</a>
						<a href="#">South Africa Pharmacy</a>
						<a href="#">Spain Pharmacy</a>
						<a href="#">Turkey Pharmacy</a>
						<a href="#">&amp; many more</a>
		            </div>
		        </div>
		   
	</div><!--Main Inner-->
	</div><!--Green Border Container-->


</div>

<script type="text/javascript" src="{{asset('front_assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/jquery.fancybox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('front_assets/js/custom.js')}}"></script>
</body>
</html>