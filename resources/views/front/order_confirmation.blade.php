@extends('layouts.front')

@section('content')



<section class="inner-page pt-0 pb-0">

   <div class="container">

      <div class="froc">

         <div class="breadcrumbs">

            <ul>

               <li><a href="{{url('/')}}">Home</a></li>

               <li>Fast Refill Order Confirmation</li>

            </ul>

         </div>

         <div class="content-part categorypage mt-3">

            <div class="common-heading text-center mb-4">

               <h1 class="font30 fw-600 green-text">Drugs for all Major Disease Conditions, <br>Buy Direct from Canada & other Global Pharmacy</h1>

               <h2 class="font20 blue-text"><strong>Maximum Branded & Generic Drugs Online @ Minimum Prices</strong></h2>

            </div>

			<!--Promiss Start-->

		<div class="promise-container">

				<div class="promise-wrap">

					<div class="promise-box">

						<span class=""><i class="fa fa-plane" aria-hidden="true"></i></span>

						<p>Global Express Shipping : <br>at Actual Costs only</p>

					</div>

					<div class="promise-box">

						<span class=""><img src="img/Calender-icon.webp" alt=""></span>

						<p>Superfast Delivery : <br>3-7 working days*</p>

					</div>

					<div class="promise-box">

						<img src="img/Lowest-Price.webp" alt="">

					</div>

					<div class="promise-box">

						<span class=""><img src="img/prescription.png" alt=""></span>

						<p>Rx Prescription Required <br>for Human Use</p>

					</div>

					<div class="promise-box">

						<span class=""><img src="img/lab-microscope.png" alt=""></span>

						<p>Ut Undertaking Required <br>for R&amp;D Scholarly Studies</p>

					</div>

				</div>

			</div>	

	<!--Promiss End-->	

            <div class="border-line"></div>

			<div class="refill-order-page">

				<div class="block-form mb-4">

					<div class="block-form_title">Dear {{ Auth()->user()->name??'' }}, Welcome back !</div>

					

					<div class="block-form_inner login-block pt-1 pb-1">

					<p class="text-center mb-0 text-uppercase fw-600">THE DETAILS OF YOUR LAST ORDER ARE AS UNDER :</p>

					</div>

				</div>

				@if($summary)

				<div class="fastrefill">

					<div class="invoice-box">

						<div class="row pt-2 pb-3 mt-2 pb-2 pt-2">

							@if($summary->is_order)

					<div class="col-md-12 text-center">

						

						<p><strong>Ref. your Proforma Invoice no. </strong> {{$summary->c_14_2_online_invoice_no}} <strong>Dated </strong> {{$summary->created_at->format('d M Y')}}</p>

					</div>

					@else

					<div class="col-md-6 "><p><strong> Proforma Invoice no. </strong> {{$summary->c_14_2_online_invoice_no}}</p></div>

					<div class="col-md-6"><p><strong>Dated </strong> {{$summary->created_at->format('d M Y')}}</p></div>

					@endif

				</div>

			

				<div class="row">

					<div class="col-md-6">

						<p style="font-weight:bold;margin-bottom:0 !important;">Payment Address :</p>

						<p style="margin-top: 0;line-height:1.5;">

                        {{$summary->c_14_10_payer_full_name}}<br>

                        @if($summary->c_14_19_patient_name)

						( for  {{$summary->c_14_19_patient_name}},  {{$summary->c_14_11_patient_relation_payer}} )<br>

						@endif

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

						@if($summary->c_14_19_patient_name)

                    {{$summary->c_14_19_patient_name}}<br>

                    	c/o

                    @endif

				 {{$summary->c_14_22_parcel_receivers_full_name}}, {{$summary->c_14_23_receiver_relation_patient}} <br>

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

							

					</div>

				</div>

				

				<div class="block-form mb-0 changeaddress">

					<div class="block-form_title">Mention below any change in Address or Order Quantity etc details :</div>

					

					<div class="block-form_inner login-block">

						<form action="{{ route('order.refill.query') }}" method="post">

							@csrf

							<div class="prefilled">

								<p>Dear Customer Care,</p>

								<p>Please accept a Refill Order request for my last order of ID no.<span class="blue-text"><b>  <a href="{{route('order.invoice',$summary->c_14_7_order_invoice_url??'url')}}" target="_blank" class="blue-text" > {{$summary->c_14_2_online_invoice_no}}</a></b></span>  dated <span class="blue-text">{{ date_format(date_create($summary->proforma_invoice_mail),'d M, Y') }}.</span><br><br></p>

								<p>I require some changes to the order (fill below only if any changes are required):</p>

								<div class="form-group row">

									<input type="hidden" name="c_10_11_order_ref" value="{{ $summary->c_14_2_online_invoice_no }}">

									<label class="col-sm-3 col-form-label">Payment Address</label>

									<div class="col-sm-9">

									  <input type="text" class="form-control Cfield" name="c_10_12_refill_pay_address"  placeholder="Mention any change in Payment address"  onkeyup="messageValidation(this)" maxlength="100">

									</div>

								</div>

								<div class="form-group row">

									<label class="col-sm-3 col-form-label">Delivery Address</label>

									<div class="col-sm-9">

									  <input type="text" class="form-control Cfield" name="c_10_13_refill_del_address" placeholder="Mention any change in Delivery Address" maxlength="100"  onkeyup="messageValidation(this)">

									</div>

								</div>

								<div class="form-group row">

									<label class="col-sm-3 col-form-label">Order Quantity</label>

									<div class="col-sm-9">

									  <input type="text" class="form-control Cfield" name="c_10_14_refill_order_quantity" placeholder="Mention any change in Order Quantity" maxlength="100"  onkeyup="messageValidation(this)">

									</div>

								</div>

								<div class="form-group row">

									<label class="col-sm-3 col-form-label">Any Other</label>

									<div class="col-sm-9">

									  <input type="text" class="form-control Cfield" name="c_10_15_refill_other_change" placeholder="Mention any Other change requirement"  onkeyup="messageValidation(this)" maxlength="250">

									</div>

								</div>

							</div>

							

							<button class="btn nobtn green-bg lg-btn mt-3">SEND ORDER REFILL REQUEST</button>

						</form>

					</div>

				</div>

				@else

					<h4 class="text-center">LAST ORDER NOT FOUND</h4>

				@endif



			</div>

			

			

         </div>

      </div>

   </div>

</section>



@endsection