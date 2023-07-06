@extends('layouts.backend')
@section('content')

@section('before_body')
<style type="text/css">
	.bg-dark {
		background-color: #eee !important;
	}	
	
	.inputfile {
  /* visibility: hidden etc. wont work */
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}
.inputfile:focus + label {
  /* keyboard navigation */
  outline: 1px dotted #000;
  border: 1px dotted #000;
  outline: -webkit-focus-ring-color auto 5px;
}
.inputfile + label * {
  pointer-events: none;
}

#doctor-label {
	border: 1px solid #000;
padding: 2px;
text-align: right;
float: right;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/css/bootstrap-select.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
<div class="page-define">
		<div class="container-fluid">
			<div class="row justify-content-between">
				<div class="col">
					<h1>Data will come from CART-CHECKOUT & LOGIN</h1>
				</div>
			</div>		
		</div>
	</div>
	<div class="main-panel">
		<div class="container-fluid">
			<div class="panel-container">				
				<div class="main-section mt-3">
				<div class="main-border">
					<div class="row">
						<div class="col-md-5 col-sm-12">
							<div class="entry-title">
								<h2>INVOICE SUMMARY DETAILS</h2>
							</div>
							<small class="">DBT: 14-Summary</small>
						</div>
					</div>
					<form action="{{route('aadhya.summary.update',$order->id)}}" method="post" id="order-invoive"  enctype="multipart/form-data">
						                               @if (Session::has('success'))
                        <div class="container">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    @endif
						@csrf
							<div class="bottom-button clearfix">
								<div class="text-center">
									<a href="{{route('aadhya.order.new_invoice',$order->id)}}"  style="float: left;" target="_blank" class="btn greenBtn">SAVE AS NEW INVOICE</a>
									@if(!$order->is_pdf && $order->c_14_6_proforma_invoice_url)
								{{-- 	<a  href="{{route('aadhya.pi.save',$order->c_14_6_proforma_invoice_url)}}" class="btn greenBtn " >Save Proforma Invoice</a> --}}
									<a  href="#" class="btn float-right greenBtn"  onclick="alert('Please Save Proforma Invoice first.')"  >Send Order Invoice Mail - OI</a>
									<a  @if($order->c_14_93_pay_mode == 'Bank') href="{{route('cart.invoice',[$order->c_14_6_proforma_invoice_url??'url','p=1'])}}" 
											  target="_blank" 
												  id="save_pdf"
									 @else
												 @if($order->c_14_92_cc_request_link)

												  href="{{route('cart.invoice',[$order->c_14_6_proforma_invoice_url??'url','p=99'])}}" 
												  target="_blank" 
												  id="save_pdf"
												 @else
												 href="javascript:void(0);" 
												  link="{{route('cart.invoice',[$order->c_14_6_proforma_invoice_url??'url','p=99'])}}" 

												 onclick="checkRequestLink(this)" 
												 @endif


									  @endif   class="btn float-right greenBtn" style="margin-right: 15px"   >SAVE / UPDATE AS ORDER INVOICE  </a>
									@else

										
									{{-- <button type="submit"    class="btn float-right greenBtn">Save Only to Update Order Invoice</button> --}}
										<button type="submit" name="is_mail" value="1" class="btn  float-right greenBtn">Send Order Invoice Mail - OI</button>
									<button type="submit"  style="margin-right: 15px" class="btn  float-right greenBtn">SAVE / UPDATE AS ORDER INVOICE</button>
									@endif
								</div>
							</div>
							<div class="border-table table-summary font14">
								<table class="table table-bordered">
									
									<tr>
										<th scope="row" width="30%">Online Invoice No.</th>
										<td width="70%">{{$order->c_14_2_online_invoice_no}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Cart Date & Time IST</td>
										<td width="70%">{{$order->created_at->timezone('Asia/Kolkata')->format('d-m-Y')}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Cart URL</th>
										<td width="70%">
											@if($order->c_14_4_cart_url)
											<a href="{{route('cart.order',$order->c_14_4_cart_url)}}"  target="_blank">{{route('cart.order',$order->c_14_4_cart_url)}}</a>
										@endif
										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Order Date & Time IST</td>
										<td width="70%">{{$order->updated_at->timezone('Asia/Kolkata')->format('d-m-Y')}} 
										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Proforma Invoice URL</th>
										<td width="70%">
											@if($order->c_14_6_proforma_invoice_url)
											@if($order->c_14_93_pay_mode == 'Bank')
											
											<a href="{{route('cart.invoice',[$order->c_14_6_proforma_invoice_url??'url','p=1'])}}"   target="_blank">{{route('cart.invoice',[$order->c_14_6_proforma_invoice_url??'url','p=1'])}}
											</a>

											@else
											<a href="{{route('cart.invoice',[$order->c_14_6_proforma_invoice_url??'url','p=99'])}}"   target="_blank">{{route('cart.invoice',[$order->c_14_6_proforma_invoice_url??'url','p=99'])}}
											</a>
											@endif
											@endif
											</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Order Invoice URL</th>
										<td width="70%">

											@if($order->is_order)
											<a href="{{route('order.invoice',$order->c_14_7_order_invoice_url)}}"  target="_blank">{{route('order.invoice',$order->c_14_7_order_invoice_url)}}</a>
											@endif
										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Excel Order URL</th>
										<td width="70%">
											@if($order->c_14_8_excel_order_url)
											<a href="{{route('aadhya.excel.invoice',$order->c_14_8_excel_order_url)}}"  class="text-primary" target="_blank">{{route('aadhya.excel.invoice',$order->c_14_8_excel_order_url)}}</a>
											@endif
										</td>
									</tr>

										<tr>
										<th scope="row" width="30%">Repeat Last Order Reference Details
												@if($order->reorder_invoice_no)
                                        		<a href="{{route('aadhya.summary',$order->reorder_invoice_no)}}"  target="_blank"  style="float: right;"class="text-primary" >Summary</a>
                                        		@endif
										{{--<input type="text" name="reorder_invoice_no" class="bg-dark form-control" placeholder="Reorder No." value="{{ $order->reorder_invoice_no }}"  style="width: 25%;float: right;"> --}}</th>
										<td width="70%">

											@if($order->reorder_invoice_no)
									
											<a href="{{route('order.invoice',$order->reorder->c_14_7_order_invoice_url)}}"  target="_blank">{{route('order.invoice',$order->reorder->c_14_7_order_invoice_url)}}</a>

											@endif
											
										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Login Email</td>
										<td width="70%"><input type="text" name="c_14_9_login_email" class="bg-dark form-control" value="{{$order->c_14_9_login_email}}"></td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>BILLING DETAILS :</strong></td>
										<td width="70%">&nbsp;</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Payer Full Name</td>
										<td width="70%" ><input type="text" class="bg-dark form-control" name="c_14_10_payer_full_name"   value="{{$order->c_14_10_payer_full_name}}"></td>
									</tr>
									<tr class="">
										<th scope="row" width="30%">Patient is (Relation) of the Payer</td>
										<td width="70%"><input type="text" class="bg-dark form-control" name="c_14_11_patient_relation_payer" value="{{$order->c_14_11_patient_relation_payer}}" ></td>
									</tr>
									<tr>
										<th scope="row" width="30%">Payer Address Line 1:</td>
										<td width="70%"><input type="text" class="bg-dark form-control" name="c_14_12_payer_address_line_1" value="{{$order->c_14_12_payer_address_line_1}}"></td>
									</tr>
									<tr>
										<th scope="row" width="30%">Payer Address Line 2:</td>
										<td width="70%"><input type="text" class="bg-dark form-control" name="c_14_13_payer_address_line_2" value="{{$order->c_14_13_payer_address_line_2}}"></td>
									</tr>
									<tr>
										<th scope="row" width="30%">Payer City:</td>
										<td width="70%"> <input type="text" class="bg-dark form-control" name="c_14_14_pay_city" value="{{$order->c_14_14_pay_city}}" ></td>
									</tr>
									<tr>
										<th scope="row" width="30%">Payer State</td>
										<td width="70%"><input type="text" class="bg-dark form-control" name="c_14_15_payer_state" value="{{$order->c_14_15_payer_state}}"></td>
									</tr>
									<tr>
										<th scope="row" width="30%">Payer Zip:</td>
										<td width="70%"><input type="text" class="bg-dark form-control" name="c_14_16_payer_zip" value="{{$order->c_14_16_payer_zip}}"></td>
									</tr>
									<tr>
										<th scope="row" width="30%">Payer Country :</td>
										<td width="70%"> 

											<select class="form-control selectpicker bg-dark"   data-live-search="true" style="background: #eee;color:#000" id="country_freight"  name="country">
				                                 <option value="" >Select Country</option>
				                                 @foreach($countries->where('c_4_1_4_billing_address','Y') as $country)
				                                 <option   value="{{$country->c_4_1_2_country_name}}" @if($country->c_4_1_2_country_name == $order->c_14_17_payer_country) selected="" @endif>{{$country->c_4_1_2_country_name}}</option>
				                                 @endforeach
		                              		</select>
		                          </td>
									</tr>
									<tr>
										<th scope="row" width="30%">Payer Mobile :</td>
										<td width="70%"><input type="text" class="bg-dark form-control" name="c_14_18_payer_mobile" value="{{$order->c_14_18_payer_mobile}}"></td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>DELIVERY DETAILS :</strong></td>
										<td width="70%">&nbsp;</td>
									</tr>
									<tr class="">
										<th scope="row" width="30%">Patient Name :</td>
										<td width="70%"><input type="text" class="bg-dark form-control" name="c_14_19_patient_name" value="{{$order->c_14_19_patient_name}}"></td>
									</tr>
									<tr class="">
										<th scope="row" width="30%">Patient Sex</td>
										<td width="70%"> 
											<select class="form-control" name="gender">
		                                       	<option value="">Sex</option>
		                                          <option   @if($order->c_14_20_patient_sex == 'M')  selected @endif  value="M">Male</option>
		                                          <option  @if($order->c_14_20_patient_sex == 'F')  selected @endif  value="F">Female</option>
		                                       </select>
		                                   </td>
									</tr>
								<tr class="">
										<th scope="row" width="30%">Patient Age :</td>
										<td width="70%"><input type="text" class="bg-dark form-control" name="c_14_21_patient_age" value="{{$order->c_14_21_patient_age}}" ></td>
									</tr>
									<tr>
										<th scope="row" width="30%">Parcel Receiver’s Full Name</td>
										<td width="70%"><input type="text" class="bg-dark form-control" name="c_14_22_parcel_receivers_full_name" value="{{$order->c_14_22_parcel_receivers_full_name}}"></td>
									</tr>
									<tr class="">
										<th scope="row" width="30%">Receiver is (Relation) of the Patient</td>
										<td width="70%">
											<input type="text" class="bg-dark form-control" name="c_14_23_receiver_relation_patient" value="{{$order->c_14_23_receiver_relation_patient}}">


										</td>
									</tr>
									
									<tr>
										<th scope="row" width="30%">Receiver Address Line 1:</td>
										<td width="70%"><input type="text" class="bg-dark form-control" name="c_14_24_receiver_address_line_1" value="{{$order->c_14_24_receiver_address_line_1}}"></td>
									</tr>
									<tr>
										<th scope="row" width="30%">Receiver Address Line 2:</td>
										<td width="70%"><input type="text" class="bg-dark form-control" name="c_14_25_receiver_address_line_2"  value="{{$order->c_14_25_receiver_address_line_2}}"></td>
									</tr>
									<tr>
										<th scope="row" width="30%">Receiver City</td>
										<td width="70%">
											<input type="text" class="bg-dark form-control" name="c_14_26_receiver_city" value="{{$order->c_14_26_receiver_city}}"> 
										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Receiver State</td>
										<td width="70%"><input type="text" class="bg-dark form-control" name="c_14_27_receiver_state" value="{{$order->c_14_27_receiver_state}}"></td>
									</tr>
									<tr>
										<th scope="row" width="30%">Receiver Zip:</td>
										<td width="70%"><input type="text" class="bg-dark form-control" name="c_14_28_receiver_zip" value="{{$order->c_14_28_receiver_zip}}"></td>
									</tr>
									<tr>
										<th scope="row" width="30%">Receiver Country :</td>
										<td width="70%">	
											<select class="form-control selectpicker"   data-live-search="true" style="background: #eee;" id="country_freight"  name="c_14_29_receiver_country">
				                                 <option value="" >Select Country</option>
				                                 @foreach($countries->where('c_4_1_5_delivery_address','Y') as $country)
				                                 <option value="{{$country->c_4_1_2_country_name}}" @if($country->c_4_1_2_country_name == $order->c_14_29_receiver_country) selected="" @endif>{{$country->c_4_1_2_country_name}}</option>
				                                 @endforeach
		                              		</select>
		                              	</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Receiver Mobile :</td>
										<td width="70%"><input type="text" class="bg-dark form-control" name="c_14_30_receiver_mobile" value="{{$order->c_14_30_receiver_mobile}}"></td>
									</tr>
									<tr>
										<th scope="row" width="30%">End Use Selected:</td>
										<td width="70%">
											<select class="form-control" name="end_use_selected"  >
												<option value="1"  @if($order->c_14_31_end_use_selected == 1)  selected @endif >Doctor’s Prescription</option>
												<option value="2"  @if($order->c_14_31_end_use_selected == 2)  selected @endif >Scholarly Use</option>
											</select>
											</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Doctor’s Prescription
											{{-- <input type="file" name="file" id="file" class="inputfile">
											<label for="file" id="doctor-label">Upload</label> --}}
										</td>
										<td width="70%">
											<div id="doctor_use">
											<a href="{{asset('scripts/'.$order->c_14_32_doctor_prescription_url)}}" target="_blank" >
												{{asset('scripts/'.$order->c_14_32_doctor_prescription_url)}}
											</a>
											<br>
											<span id="prescription-text">	
										Upload DOCTOR'S PRESCRIPTION (pdf / jpg </span><input type="file" name="prescription">
											 <a type="button" class="text-danger" id="prescription-button"
                  					><i class="fa fa-times" aria-hidden="true" onclick="return confirm('Do you want to REMOVE this prescription from your order ?')"></i></a>
                  					</div>
											</div>
										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Undertaking
											@if($order->shipment_url)
											@php   
											$ship_country = 'ss';
											  $shipment_url = explode('/',$order->shipment_url);
											  if(count($shipment_url) > 1){
											  	$ship_country = $shipment_url[0];
											  }
											    @endphp 
													<select class="text-right is_scholar_useselcet" name="shipment_url"  style="float: right;">
												<option value="ss"   @if($ship_country == 'ss') selected="" @endif>SS</option>
												<option value="ds"  @if($ship_country == 'ds') selected="" @endif >DS</option>
												<option value="ds-au"  @if($ship_country == 'ds-au') selected="" @endif>DS-AU</option>
												<option value="ds-us"  @if($ship_country == 'ds-us') selected="" @endif>DS-US</option>
												<option value="ds-uk"  @if($ship_country == 'ds-uk') selected="" @endif>DS-UK</option>
											</select>
											@endif
										</td>
										<td width="70%">
											
											<a href="{{url('shipment-undertaking/'.$order->shipment_url??'url')}}"  target="_blank" id="undertaking_use">{{route('shipment_undertaking',$order->shipment_url??'')}}</a>
										
										
										</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>ORDER DETAILS :</strong></td>
										<td width="70%">&nbsp;</td>
									</tr>
		                                @foreach($order->order_details as $key => $order_detail)
									<tr>
										<th scope="row" width="30%">Medicine No. {{$key+1}}</td>
											<input type="hidden" name="order_id[]" value="{{$order_detail->id}}">
										<td width="70%"><input type="text" class="bg-dark form-control" name="c_14_34_medicine_no[]" value="{{$order_detail->c_14_34_medicine_no}}"></td>
									</tr>
									<tr>
										<th scope="row" width="30%">Description {{$key+1}}</td>
										<td width="70%"><input type="text" class="bg-dark form-control" name="c_14_35_description[]" value="{{$order_detail->c_14_35_description}}"></td>
									</tr>
									<tr>
										<th scope="row" width="30%">Quantity/Pack {{$key+1}}</td>
										<td width="70%"><input type="text" class="bg-dark form-control order_pack_quantity"  data-id="{{$order_detail->id}}" id="pack_quantity-{{$order_detail->id}}"  name="c_14_36_quantity_pack[]" value="{{$order_detail->c_14_36_quantity_pack}}" onkeypress="return /[0-9]/.test(event.key)"></td>
									</tr>
									<tr>
										<th scope="row" width="30%">Net Price/Pack {{$key+1}}</td>
										<td width="70%"><input type="text" class="bg-dark form-control order_pack_price" data-id="{{$order_detail->id}}" id="pack_price-{{$order_detail->id}}" name="c_14_37_net_price_pack[]" value="{{$order_detail->c_14_37_net_price_pack}}" onkeypress="return /[0-9]/.test(event.key)"></td>
									</tr>
									<tr>
										<th scope="row" width="30%">No. of Packs {{$key+1}}</td>
										<td width="70%"><input type="text" class="bg-dark form-control order_pack"  data-id="{{$order_detail->id}}" id="pack-{{$order_detail->id}}"  name="c_14_39_total_quantity[]" value="{{$order_detail->c_14_39_total_quantity}}"  onkeypress="return /[0-9]/.test(event.key)"></td>
									</tr>
									<tr>
										<th scope="row" width="30%">Total Quantity {{$key+1}} </td>
										<td width="70%" data-id="{{$order_detail->id}}" id="pack_total_qty-{{$order_detail->id}}"  >{{$order_detail->c_14_39_total_quantity*$order_detail->c_14_36_quantity_pack}}

										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Medicine Form  {{$key+1}} </td>
										<td width="70%"><input type="text" class="bg-dark form-control" name="c_14_40_medicine_form[]" value="{{$order_detail->c_14_40_medicine_form}}"></td>
									</tr>
									<tr>
										<th scope="row" width="30%">Total Amount {{$key+1}} </td>
										<td width="70%" data-id="{{$order_detail->id}}" id="pack_total-{{$order_detail->id}}" class="order_pack_total" >{{round($order_detail->c_14_41_total_amount)}}
										</td>
											<input type="hidden" name="c_14_41_total_amount[]" id="pack_total_hidden-{{$order_detail->id}}" value="{{$order_detail->c_14_41_total_amount}}" >
									</tr>
									<tr>
										<th scope="row" width="30%">&nbsp;</td>
										<td width="70%">&nbsp;</td>
									</tr>
		                                @endforeach
								
									<tr>
										<th scope="row" width="30%">TOTAL ORDER VALUE : </td>
										<td width="70%" id="order_total_value">{{round($order->c_14_74_total_order_value)}}

										</td>
										<input type="hidden" name="c_14_74_total_order_value" value="{{$order->c_14_74_total_order_value}}" >
									</tr>
								
									<tr>
										<th scope="row" width="30%">Coupon Code Used</td>
										<td width="70%">{{$order->c_14_75_coupon_code_used}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Promotional Discount (-)</td>
										<td width="70%"><input type="text" class="bg-dark form-control"  id="order_discount" value="{{$order->c_14_76_promo_discount ??0}}" onkeypress="return /[0-9]/.test(event.key)">

										</td>
										<input type="hidden" name="c_14_76_promo_discount" value="{{$order->c_14_76_promo_discount}}" >
									</tr>
							
									<tr>
										<th scope="row" width="30%">Express Shipping Charges (+)</td>
										<td width="70%"><input type="text" class="bg-dark form-control" id="shipping_charges" name="c_14_77_shipping_charges" value="{{round($order->c_14_77_shipping_charges)}}">

										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Any Additional Charges (+)</td>
										<td width="70%"><input type="text" class="bg-dark form-control" name="c_14_78_additional_charges" id="additional_charges" value="{{round($order->c_14_78_additional_charges)}}"></td>
									</tr>
									<tr>
										<th scope="row" width="30%">SEMI-TOTAL AMOUNT </td>
										<td width="70%" id="semi_total_amount">{{round($order->c_14_79_semi_total_amount)}}


										</td>
										<input type="hidden" name="c_14_79_semi_total_amount" value="{{$order->c_14_79_semi_total_amount}}" >
									</tr>
									<tr>
										<th scope="row" width="30%">Convert payment mode <span class="rightside blueright"><input type="radio" name="payment_mode" value="Advance"  @if($order->c_14_80_convert_payment_mode =='Advance') checked=""  @endif   /> Adv.  <input type="radio"  name="payment_mode" value="POD" @if($order->c_14_80_convert_payment_mode =='POD') checked=""  @endif  /> POD  <font color="black">/</font> <input type="radio" class="ml-2" name="is_cc"  value="Credit Card" @if($order->c_14_93_pay_mode =='Credit Card') checked=""  @endif /> CC  <input type="radio" class="ml-2" name="is_cc"  value="Bank Transfer"  @if($order->c_14_93_pay_mode =='Bank') checked=""  @endif  /> BT </span></td>
										<td width="70%" id="payment_mode_text">{{$order->c_14_80_convert_payment_mode}}  /

											@if($order->c_14_93_pay_mode =='Bank')
											Bank Transfer
											@else
											Credit Card
											@endif
										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Pay-on-Delivery Charges (+) </td>
										<td width="70%" ><span id="pod_charges">{{round($order->c_14_81_pod_charges)}}</span>

										</td>
											<input type="hidden" name="c_14_81_pod_charges" value="{{$order->c_14_81_pod_charges}}" >
									</tr>
									
									<tr>
		')
								<th scope="row" width="30%">Credit Card Processing Fees (+) </td>
										<td width="70%" >
											<span id="cc_processing_fees" >{{round($order->c_14_82_credit_card_processing_fees)}}</span>
											</td>
											<input type="hidden" name="c_14_82_credit_card_processing_fees" value="{{$order->c_14_82_credit_card_processing_fees}}" >
									</tr>
									
									
									
									<tr>
										<th scope="row" width="30%">TOTAL AMOUNT (in US$) </td>
										<td width="70%" >

											

											<span id="order_total_amount">{{round($order->c_14_84_total_amount)}}</span>
												<input type="hidden" name="c_14_84_total_amount" value="{{$order->c_14_84_total_amount}}" >
											 </td>
									</tr>
									
									<tr>
										<th scope="row" width="30%">Refil After Days</td>
										<td width="70%"><input type="text" class="bg-dark form-control" name="" value="{{$order->c_14_85_refil_after_days}}"></td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>CREDIT CARD / BANK TRANSFER DETAILS :</strong></td>
										<td width="70%">&nbsp;</td>
									</tr>
									<tr class="cc_details">
										<th scope="row" width="30%">CC Payer Name</td>
										<td width="70%"><input type="" name="c_14_86_cc_name" class=" bg-dark form-control"  value="{{$order->c_14_86_cc_name??$order->c_14_10_payer_full_name}}"></td>
									</tr>
									
									<tr class="cc_details" >
										<th scope="row" width="30%">CC State & Country</td>
										<td width="70%"><input type="text" name="c_14_88_cc_state" class=" bg-dark form-control" value="{{$order->c_14_88_cc_state ?? $order->c_14_14_pay_city.','.$order->c_14_15_payer_state}}"></td>
									</tr>
								
									<tr class="cc_details">
										<th scope="row" width="30%">CC Email Address</td>
										<td width="70%"><input type="text" name="c_14_90_email_address" class=" bg-dark form-control" value="{{$order->c_14_90_email_address  }}"></td>
									</tr>
									
									<tr class="cc_details">
										<th scope="row" width="30%">CC Request Details</td>
										<td width="70%"><span id="cc_payer_name">{{$order->c_14_86_cc_name??$order->c_14_10_payer_full_name}}</span> – Pay for Order no. MYT-{{$order->c_14_2_online_invoice_no}}</td>
									</tr>
									<tr class="cc_details">
										<th scope="row" width="30%">CC Request Link</td>
										<td width="70%"><input type="text" name="c_14_92_cc_request_link" class=" bg-dark form-control" @if($order->c_14_93_pay_mode =='Credit Card') required="" @endif value="{{$order->c_14_92_cc_request_link}}"></td>
									</tr>
									<tr>
										<th scope="row" width="30%">Pay Mode
										 <div class="float-right">
											<select class="form-control selectpicker Cfield" data-live-search="true"  id="select_payment_mode" name="select_payment_mode"  >
											<option value="Credit Card" @if($order->c_14_93_pay_mode == 'Credit Card') selected=""  @endif>CREDIT CARD</option>
											@foreach($bank_details as $bank_detail)
											<option value="{{$bank_detail->id}}" data-currency="{{$bank_detail->c_5_11_currency}}"  data-user_rate="{{$bank_detail->c_5_12_usd_rate}}"
												@if($order->bank_company_code)
													@if($order->bank_company_code == $bank_detail->c_5_2_company_code)
													selected="" 
													@endif
													
												@else	
												 @if($order->c_14_93_pay_mode == 'Bank' && $loop->first) selected=""  @endif
												@endif

											>{{$bank_detail->c_5_2_company_code}}</option>
											@endforeach
											</select>
										</div>
										</th>
										<td width="70%" id="payment_mode_text2">
											@if($order->c_14_93_pay_mode == 'Credit Card')
												Credit Card
											@elseif($order->c_14_93_pay_mode == 'Bank')

											  Bank Transfer :  {{$order->bank_company_code??$bank_details->first()->c_5_2_company_code}}
											@endif
										
												</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Forex Currency</td>
										<td width="70%" >
											<span id="payment_mode_currency">
											@if($order->c_14_93_pay_mode == 'Credit Card')
											USD
									

											@elseif($order->c_14_93_pay_mode == 'Bank')

											{{$order->c_14_94_forex_currency}}
											@endif
										</span>
										</td>
											<input type="hidden" name="c_14_94_forex_currency" value="{{$order->c_14_93_pay_mode == 'Credit Card'?'USD':$order->c_14_94_forex_currency}}">

									</tr>
									<tr>
										<th scope="row" width="30%">Conversion Rate  ( USD to <sapn class="currency_forex">{{$order->c_14_94_forex_currency}}</sapn> )</td>
										<td width="70%" >


											@if($order->c_14_93_pay_mode == 'Credit Card')
											<span id="payment_mode_rate">1</span>
											{{-- <input type="text" name="payment_mode_rate" value="1" class="bg-dark form-control" id="payment_mode_rate"> --}}
											@elseif($order->c_14_93_pay_mode == 'Bank')
											<span id="payment_mode_rate">{{$order->conversion_usd_to_forex_rate}}</span>
{{-- 
											<input type="text" name="payment_mode_rate" value="{{$order->conversion_usd_to_forex_rate}}" class="bg-dark form-control" id="payment_mode_rate"> --}}

										
											@endif</td>
										 <input type="hidden" name="conversion_usd_to_forex_rate" value="{{$order->conversion_usd_to_forex_rate}}"> 

									</tr>
									<tr>
										<th scope="row" width="30%" >TOTAL AMOUNT PAYABLE - in  <sapn class="currency_forex">{{$order->c_14_94_forex_currency}}</sapn></td>
										<td width="70%" id="payment_forex_order_rate">{{round($order->c_14_95_amount)}}</td>
											<input type="hidden" name="c_14_95_amount" value="{{$order->c_14_95_amount}}">

									</tr>
									<tr>
										<th scope="row" width="30%">PAYMENT RECEIVED - in <sapn class="currency_forex">{{$order->c_14_94_forex_currency}}</sapn> </td>



										<td width="70%" id="forex_received"  >{{$order->c_14_96_forex_received??0}}</td>

									</tr>
									<tr>
										<th scope="row" width="30%">Received on Date</td>
										<td width="70%">{{$order->c_14_97_received_on_date?date_format(date_create($order->c_14_97_received_on_date),'d-m-Y'):''}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Conversion Rate  ( <sapn class="currency_forex">{{$order->c_14_94_forex_currency}}</sapn> to USD )</td>
										<td width="70%">

							{{-- 				<input type="text"  id="payment_convesion_rate" value="{{round($order->c_14_98_conversion_forex_to_usd_rate,4)}}" class="bg-dark form-control"  name=""> --}}
										<span id="payment_convesion_rate">{{round($order->c_14_98_conversion_forex_to_usd_rate,8)}}</span>

										</td>
											<input type="hidden" name="c_14_98_conversion_forex_to_usd_rate" value="{{$order->c_14_98_conversion_forex_to_usd_rate}}">

									</tr>
									<tr>
										<th scope="row" width="30%">USD Eqv. Value Recd. (USD Order Value- <span id="order_value_usd">{{round($order->c_14_84_total_amount)}}</span> )</td>
										<td width="70%"><input type="hidden" name="c_14_99_usd_received" value="{{round($order->c_14_99_usd_received)}}">
											<span id="payment_usd_received">{{round($order->c_14_99_usd_received)}}</span>
										</td>
									</tr>

							{{-- 		<tr>
										<th scope="row" width="30%">Forex Gain / Loss</td>
										<td width="70%" id="forex_gain_loss">{{ round($order->forex_gain_loss) }}</td>
											<input type="hidden" name="forex_gain_loss" value="{{$order->forex_gain_loss}}">
									</tr> --}}
									<tr>
										<th scope="row" width="30%">Balance Due ( in USD  )</td>
										<td width="70%" id="balance_due">{{round($order->c_14_100_usd_bal_due)}}</td>
											<input type="hidden" name="c_14_100_usd_bal_due" value="{{$order->c_14_100_usd_bal_due}}">
									</tr>
								
									<tr>
										<th scope="row" width="30%"><strong>MAIL & SHIPMENT DETAILS :</strong></td>
										<td width="70%">&nbsp;</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Order Reminder Mail (OR1):</td>
										<td width="70%">	@if($order->refil_reminder_mail3)
											{{ date_format(date_create($order->refil_reminder_mail3),'d-m-y') }}
											@endif
										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Order Reminder Mail (OR2):</td>
										<td width="70%">	@if($order->refil_reminder_mail3)
											{{ date_format(date_create($order->refil_reminder_mail3),'d-m-y') }}
											@endif
										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Order Reminder Mail (OR3):</td>
										<td width="70%">	@if($order->refil_reminder_mail3)
											{{ date_format(date_create($order->refil_reminder_mail3),'d-m-y') }}
											@endif
										</td>
									</tr>
										<tr>
										<th scope="row" width="30%">Proforma Invoice Mail (PI):</td>
										<td width="70%">
											@if($order->proforma_invoice_mail)
											
											{{ date_format(date_create($order->proforma_invoice_mail),'d-m-y') }}
											@endif
										</td>
									</tr>

										<tr>
										<th scope="row" width="30%">Order on Hold Mail (OH):</td>
										<td width="70%">
											@if($order->order_hold_mail)
											
											{{ date_format(date_create($order->order_hold_mail),'d-m-y') }}
											@endif
										</td>
									</tr>
										<tr>
										<th scope="row" width="30%">Order Invoice Mail (OI):</td>
										<td width="70%">
											@if($order->order_invoice_mail)
											
											{{ date_format(date_create($order->order_invoice_mail),'d-m-y') }}
											@endif
										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">CC- Payment Reminder Mail (CP1)</td>
										<td width="70%">	@if($order->cc_payment_reminder_mail1)
											{{ date_format(date_create($order->cc_payment_reminder_mail1),'d-m-y') }}
											@endif
										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">CC- Payment Reminder Mail (CP2)</td>
										<td width="70%">	@if($order->cc_payment_reminder_mail2)
											{{ date_format(date_create($order->cc_payment_reminder_mail2),'d-m-y') }}
											@endif
										</td>
									</tr>
								
									<tr>
										<th scope="row" width="30%">CC- Payment Thanks Mail (CPT)</td>
										<td width="70%">	@if($order->cc_payment_thanks_mail)
											{{ date_format(date_create($order->cc_payment_thanks_mail),'d-m-y') }}
											@endif
										</td>
									</tr>
									
									<tr>
										<th scope="row" width="30%">BT- Payment Reminder Mail (BP1)</td>
										<td width="70%"	@if($order->bt_payment_reminder_mail1)
											{{ date_format(date_create($order->bt_payment_reminder_mail1),'d-m-y') }}
											@endif
											></td>
									</tr>
									<tr>
										<th scope="row" width="30%">BT- Payment Reminder Mail (BP2)</td>
										<td width="70%">	@if($order->bt_payment_reminder_mail2)
											{{ date_format(date_create($order->bt_payment_reminder_mail2),'d-m-y') }}
											@endif
										</td>
									</tr>
									
									<tr>
										<th scope="row" width="30%">BT- Payment Thanks Mail (BPT)</td>
										<td width="70%">
											@if($order->bt_payment_thanks_mail)
											{{ date_format(date_create($order->bt_payment_thanks_mail),'d-m-y') }}
											@endif
										</td>
									</tr>
									
									<tr>
										<th scope="row" width="30%">Parcel Shipment Date</td>
										<td width="70%">
											{{$order->c_14_115_parcel_shipment_date?date_format(date_create($order->c_14_115_parcel_shipment_date),'d-m-Y'):''}}
										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Carrier</td>
										<td width="70%">{{$order->c_14_116_carrier}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Tracking No.</td>
										<td width="70%">{{$order->c_14_117_tracking_no}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Tracking URL</td>
										<td width="70%"> <a href="{{$order->c_14_118_tracking_url}}" target="_blank" >{{$order->c_14_118_tracking_url}}</a> </td>
									</tr>
									<tr>
										<th scope="row" width="30%">Shipment Mail (S)</td>
										<td width="70%">	@if($order->shipment_mail)
											{{ date_format(date_create($order->shipment_mail),'d-m-y') }}
											@endif
										</td>
									</tr>
									
									<tr>
										<th scope="row" width="30%">Foreign Arrival Date</td>
										<td width="70%">{{$order->for_arrival_date?date_format(date_create($order->for_arrival_date),'d-m-Y'):''}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Foreign Arrival Mail (F)</td>
										<td width="70%">	@if($order->foreign_arrival_mail)
											{{ date_format(date_create($order->foreign_arrival_mail),'d-m-y') }}
											@endif
										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Customs Clearance Date</td>
										<td width="70%">{{$order->customs_cl_date?date_format(date_create($order->customs_cl_date),'d-m-Y'):''}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Custom Clearance Mail (C)</td>
										<td width="70%">	@if($order->custom_clearance_mail)
											{{ date_format(date_create($order->custom_clearance_mail),'d-m-y') }}
											@endif
										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Delivered Date</td>
										<td width="70%">{{$order->c_14_124_delivered_date?date_format(date_create($order->c_14_124_delivered_date),'d-m-Y'):''}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Delivered Mail (D)</td>
										<td width="70%">	@if($order->delivered_mail)
											{{ date_format(date_create($order->delivered_mail),'d-m-y') }}
											@endif
										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Reviews Mail (R1)</td>
										<td width="70%">	@if($order->reviews_mail1)
											{{ date_format(date_create($order->reviews_mail1),'d-m-y') }}
											@endif
										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Reviews Mail (R2)</td>
										<td width="70%">	@if($order->reviews_mail2)
											{{ date_format(date_create($order->reviews_mail2),'d-m-y') }}
											@endif
										</td>
									</tr>
									
									<tr>
										<th scope="row" width="30%">Refil Reminder Mail 1 (RR1)</td>
										<td width="70%">	@if($order->refil_reminder_mail1)
											{{ date_format(date_create($order->refil_reminder_mail1),'d-m-y') }}
											@endif</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Refil Reminder Mail 2 (RR2)</td>
										<td width="70%">	@if($order->refil_reminder_mail2)
											{{ date_format(date_create($order->refil_reminder_mail2),'d-m-y') }}
											@endif</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Refil Reminder Mail 3 (RR3)</td>
										<td width="70%">
											@if($order->refil_reminder_mail3)
											{{ date_format(date_create($order->refil_reminder_mail3),'d-m-y') }}
											@endif

										</td>
									</tr>
									
								</table>
							</div>
				
					</form>
							
			</div>
			</div>
		</div>
	</div>

@endsection

@section('afterScript')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/js/bootstrap-select.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
	$(function () {
    $('.selectpicker').selectpicker();
});

 let selected_value = '{{$order->c_14_31_end_use_selected}}';
 let order_paymend_mode = '{{$order->c_14_93_pay_mode}}';

 if(selected_value == '1'){
 		$('#undertaking_use').hide();
				$('#doctor_use').show()
				$('.is_scholar_use').show();
				$('.is_scholar_useselcet').hide();

 }else {
 		$('#undertaking_use').show();
				$('#doctor_use').hide()
				$('.is_scholar_use').hide();
				$('.is_scholar_useselcet').show();

 }

  if(order_paymend_mode == 'Credit Card'){
$('select[name=select_payment_mode]').val('Credit Card');

$('input[name="c_14_92_cc_request_link"]').attr('required',true);
				$('.cc_details').show()
 }else {
				$('.cc_details').hide()

 }

function checkRequestLink(e) {
	let request_link = $('input[name="c_14_92_cc_request_link"]').val();
	if(!request_link){
		alert('Please Fill CC Request Link first');

		return false;
	}

	let credit_link = $(e).attr('link');
	window.open(credit_link, "_blank");
	setTimeout(()=>{ alert('Please first SAVE the Orginal Proforma Invoice from the new tab.'); $('#order-invoive').submit();}, 3000);

}

$('input[name="prescription"]').change(function (argument) {

	$('#prescription-text').text('Document Uploaded : ');
})

$('#prescription-button').click(function (argument) {
	$('input[name="prescription"]').val('')
	$('#prescription-text').text("Upload DOCTOR'S PRESCRIPTION (pdf / jpg) :");
})

	$('select[name="end_use_selected"]').change(function (argument) {
		let selected_use  = $(this).val();

		if(selected_use==1){
				$('#undertaking_use').hide();
				$('#doctor_use').show();
				$('.is_scholar_use').show();
				$('.is_scholar_useselcet').hide();


		} else {
					$('#undertaking_use').show();
				$('#doctor_use').hide();
				$('.is_scholar_use').hide();
				$('.is_scholar_useselcet').show();


		}
	})

	$('select[name="select_payment_mode"]').change(function (argument) {
			
			let payment_mode = $(this).val();
				let order_total_amount  = $('#order_total_amount').text();
				if(payment_mode == 'Credit Card'){
					$('#payment_mode_text2').text('Credit Card');
					$('#payment_mode_text').text('Advance / Credit Card');
					$('#payment_mode_currency').text('USD')
					$('.currency_forex').text('USD')
					$('input[name="c_14_94_forex_currency"]').val($('#payment_mode_currency').text())
					
					$('#payment_mode_rate').text(1)
					$('input[name="conversion_usd_to_forex_rate"]').val(1)
					$('.cc_details').show();
				
					 $('input[name="is_cc"][value="Credit Card"]').prop('checked', true);
				$('input[name="c_14_92_cc_request_link"]').attr('required',true);


					order_total_amount = Math.round(parseFloat(order_total_amount) * parseFloat("{{$bank_details->first()->c_5_12_usd_rate}}"));
					$('#payment_forex_order_rate').text(order_total_amount)
				} else  {

					
					$('.cc_details').hide();
		$('input[name="c_14_92_cc_request_link"]').attr('required',false);

					 $('input[name="is_cc"][value="Bank Transfer"]').prop('checked', true);
				$('input[name="c_14_92_cc_request_link"]').attr('required',false);


				let payment_test = $('#select_payment_mode option:selected');

				let payment_curreny  =payment_test.attr('data-currency');

				let payment_rate  =payment_test.attr('data-user_rate');
					$('#payment_mode_currency').text(payment_curreny)
					$('.currency_forex').text(payment_curreny)
					$('#payment_mode_rate').text(payment_rate)

					$('input[name="conversion_usd_to_forex_rate"]').val(payment_rate);
				order_total_amount = Math.round(parseFloat(order_total_amount) * parseFloat(payment_rate));
					$('#payment_forex_order_rate').text(order_total_amount)
			$('#payment_mode_text2').text('Bank Transfer : ' + payment_test.text());

					$('#payment_mode_text').text('Advance / Bank Transfer');


				console.log('Bank Transfer : ' + payment_test.text())
					$('input[name="c_14_94_forex_currency"]').val($('#payment_mode_currency').text())
					

		}
					orderTotal();


	})

		$('#payment_mode_rate').change(function (argument) {
				
						orderTotal();
					


	})

		$('input[name="payment_mode"]').click(function (argument) {
		let paymode_mode = $(this).val();
			let payment_mode_text = $('input[name="is_cc"]:checked').val();
			
			$('#payment_mode_text').text(paymode_mode+ '/ '+payment_mode_text);

						orderTotal();

		})

			$('input[name="is_cc"]').click(function (argument) {
		let payment_mode_text = $(this).val();
			let paymode_mode = $('input[name="payment_mode"]:checked').val();
			$('#payment_mode_text').text(paymode_mode+ '/ '+payment_mode_text);
			if(payment_mode_text == 'Credit Card'){
				$('.cc_details').show();
					$('#payment_mode_text2').text('Credit Card');
					// $('select[name="select_payment_mode"]').val('Credit Card');
					$('#select_payment_mode').selectpicker('val','Credit Card')
					$('input[name="c_14_92_cc_request_link"]').attr('required',true);
			} else {
				$('.cc_details').hide();

					let  paymmode_select =  $('#select_payment_mode').children().eq(1);

					console.log(paymmode_select.text());
					$('#select_payment_mode').selectpicker('val',paymmode_select.val());
					$('#payment_mode_text2').text('Bank Transfer '+ paymmode_select.text());

				$('input[name="c_14_92_cc_request_link"]').attr('required',false);

			}
			orderTotal();

		})
		$('#order_discount').change(function (argument) {
				
						orderTotal();
					


	})
		$('#additional_charges').change(function (argument) {
				
						orderTotal();
					


	})

				$('#payment_convesion_rate').change(function (argument) {
						orderTotal();
				})
				$('input[name="c_14_86_cc_name"]').change(function (argument) {
					$('#cc_payer_name').text($(this).val())
				})
		

				$('.order_pack_quantity').change(function (argument) {


						let order_details_id =$(this).attr('data-id');
						let pack_quantity =$(this).val();
						let pack_price =$('#pack_price-'+order_details_id).val();
						let qty =$('#pack-'+order_details_id).val();
						let total_pack_qty = Math.round(pack_quantity*qty);
						let total_pack_price = Math.round(pack_price*qty);
						$('#pack_total_qty-'+order_details_id).text(total_pack_qty);
						$('#pack_total-'+order_details_id).text(total_pack_price);
						$('#pack_total_hidden-'+order_details_id).val(total_pack_price);
						orderTotal();
				})
				$('.order_pack_price').change(function (argument) {
						let order_details_id =$(this).attr('data-id');
						let pack_price =$('#pack_price-'+order_details_id).val();
						let pack_quantity =$('#pack_quantity-'+order_details_id).val();
							let qty =$('#pack-'+order_details_id).val();
						let total_pack_qty = Math.round(pack_quantity*qty);
						let total_pack_price = Math.round(pack_price*qty);
						$('#pack_total_qty-'+order_details_id).text(total_pack_qty);
						$('#pack_total-'+order_details_id).text(total_pack_price);
						$('#pack_total_hidden-'+order_details_id).val(total_pack_price);
						orderTotal();
				})
				$('.order_pack').change(function (argument) {
						let order_details_id =$(this).attr('data-id');
						let pack_price =$('#pack_price-'+order_details_id).val();
						let pack_quantity =$('#pack_quantity-'+order_details_id).val();
							let qty =$('#pack-'+order_details_id).val();
						let total_pack_qty = Math.round(pack_quantity*qty);
						let total_pack_price = Math.round(pack_price*qty);
						$('#pack_total_qty-'+order_details_id).text(total_pack_qty);
						$('#pack_total-'+order_details_id).text(total_pack_price);
						$('#pack_total_hidden-'+order_details_id).val(total_pack_price);
						orderTotal();
				})

				function orderTotal() {

					let order_total_value = 0;
					let order_pack_total = 0;
					let paymode_mode = $('input[name="payment_mode"]:checked').val();
					let paymode_mode_type = $('input[name="is_cc"]:checked').val();
					$('.order_pack_total').each(function() {
						    let currentElement = $(this);

						     order_pack_total +=parseFloat(currentElement.text()); // if it is an input/select/textarea field
						    // TODO: do something with the value
						});
					$('#order_total_value').text(Math.round(order_pack_total));
					$('input[name="c_14_74_total_order_value"]').val(Math.round(order_pack_total));
					let order_discount = parseFloat($('#order_discount').val());
					$('input[name="c_14_76_promo_discount"]').val(order_discount);
					let shipping_charges = parseFloat($('#shipping_charges').val());
					let additional_charges = parseFloat($('#additional_charges').val());
					let semi_total_amount = Math.round(parseFloat(order_pack_total -order_discount +shipping_charges +additional_charges));
					$('#semi_total_amount').text(semi_total_amount);
					$('input[name="c_14_79_semi_total_amount"]').val(semi_total_amount);
					let pod_charges = 0;
					if(paymode_mode == 'POD'){
						pod_charges = Math.round((semi_total_amount*0.1));
					}
					$('#pod_charges').text(pod_charges);
					$('input[name="c_14_81_pod_charges"]').val(pod_charges);
					let cc_processing_fees =0;
					if(paymode_mode_type == 'Credit Card'){ 
						 cc_processing_fees = Math.round(((semi_total_amount+pod_charges)*0.1));
					}
					$('#cc_processing_fees').text(cc_processing_fees);
					$('input[name="c_14_82_credit_card_processing_fees"]').val(cc_processing_fees);
					let order_total_amount = Math.round(semi_total_amount+pod_charges +cc_processing_fees);
					$('#order_total_amount').text(order_total_amount);
					$('#order_value_usd').text(order_total_amount);
					$('input[name="c_14_84_total_amount"]').val(order_total_amount);

					let forex_rate  = $('#payment_mode_rate').text()
					$('input[name="conversion_usd_to_forex_rate"]').val(forex_rate);

					let	forex_order_total_amount = Math.round(parseFloat(order_total_amount) * parseFloat(forex_rate));
					$('#payment_forex_order_rate').text(forex_order_total_amount)
					$('input[name="c_14_95_amount"]').val(forex_order_total_amount);

						let forex_received  =parseFloat($('#forex_received').text()) ;
						let usd_conversion_rate = (1/parseFloat(forex_rate)).toFixed(8); 
							$('#payment_convesion_rate').text(usd_conversion_rate);
					$('input[name="c_14_98_conversion_forex_to_usd_rate"]').val(usd_conversion_rate);
						let payment_usd_received =forex_received*parseFloat(usd_conversion_rate);
					$('#payment_usd_received').text(Math.round(payment_usd_received))
					$('input[name="c_14_99_usd_received"]').val(payment_usd_received);
					// $('#forex_gain_loss').text(Math.round(payment_usd_received- order_total_amount));
					// $('input[name="forex_gain_loss"]').val(Math.round(payment_usd_received- order_total_amount));
					$('#balance_due').text(Math.round((parseFloat(forex_order_total_amount-forex_received)*usd_conversion_rate)))
					$('input[name="c_14_100_usd_bal_due"]').val($('#balance_due').text());

				}

				$('#save_pdf').click(function (argument) {
					 setTimeout(()=>{ alert('Please first SAVE the Orginal Proforma Invoice from the new tab.'); $('#order-invoive').submit();}, 3000);
				})

</script>

@endsection