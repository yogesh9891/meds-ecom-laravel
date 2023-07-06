@extends('layouts.backend')
@section('content')

@section('before_body')
<style type="text/css">
		
	
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

	<div class="main-panel">
		<div class="container-fluid">
			<div class="panel-container">				
				<div class="main-section mt-3">
				<div class="main-border">
				
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

							<div class=" clearfix">
							
									<button type="button" style="float: right;" class="btn greenBtn" onclick="copyToClipboard()">SELECT ALL</button>
								
								</div>
							</div>
						
							<div class="border-table table-summary font14" >
								<table class="table table-bordered" id="copy_content">
									
									<tr>
										<th scope="row" width="30%">Online Invoice No.</th>
										<td width="70%">{{$order->c_14_2_online_invoice_no}}</td>
									</tr>
								
									<tr>
										<th scope="row" width="30%">Order Date & Time IST</th>
										<td width="70%">{{$order->updated_at->timezone('Asia/Kolkata')->format('d-m-Y / H.i')}} IST</td>
									</tr>
								
									<tr>
										<th scope="row" width="30%">Order Invoice URL</th>
										<td width="70%">@if($order->is_order)<a href="{{route('order.invoice',$order->c_14_7_order_invoice_url)}}"  target="_blank">{{route('order.invoice',$order->c_14_7_order_invoice_url)}}</a>@endif</td>
									</tr>
								
								
									<tr>
										<th scope="row" width="30%">Login Email</th>
										<td width="70%">{{$order->c_14_9_login_email}}</td>
									</tr>
									
									<tr>
										<th scope="row" width="30%"><strong></strong></th>
										<td width="70%">&nbsp;</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>TOTAL ORDER VALUE :</strong></th>
										<td width="70%" id="order_total_value">{{round($order->c_14_74_total_order_value)}}

										</td>
									
									</tr>
								
								
									<tr>
										<th scope="row" width="30%">Promotional Discount (-)</th>
										<td width="70%">{{$order->c_14_76_promo_discount ??0}}

										</td>
								
									</tr>
							
									<tr>
										<th scope="row" width="30%">Express Shipping Charges (+)</th>
										<td width="70%">{{round($order->c_14_77_shipping_charges)}}

										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Any Additional Charges (+)</th>
										<td width="70%">{{round($order->c_14_78_additional_charges)}}</td>
									</tr>
								
									<tr>
										<th scope="row" width="30%">Pay-on-Delivery Charges (+) </th>
										<td width="70%" ><span id="pod_charges">{{round($order->c_14_81_pod_charges)}}</span>

										</td>
											
									</tr>
									
									<tr>
										<th scope="row" width="30%">Credit Card Processing Fees (+) </th>
										<td width="70%" >{{round($order->c_14_82_credit_card_processing_fees)}}</td>
							
									</tr>
									
									
									
									<tr>
										<th scope="row" width="30%">TOTAL AMOUNT (in US$) </th>
										<td width="70%" >{{round($order->c_14_84_total_amount)}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong></strong></th>
										<td width="70%">&nbsp;</td>
									</tr>	
									<tr>
										<th scope="row" width="30%"><strong>PAYMENT MODE & RECEIPTS</strong></th>
										<td width="70%">&nbsp;</td>
									</tr>

									<tr>
										<th scope="row" width="30%">Pay Mode</th>
										<td width="70%" id="payment_mode_text2">@if($order->c_14_93_pay_mode == 'Credit Card')Credit Card @elseif($order->c_14_93_pay_mode == 'Bank')Bank Transfer :  {{$order->bank_company_code??$bank_details->first()->c_5_2_company_code}} @endif</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Forex Currency</th>
										<td width="70%" >@if($order->c_14_93_pay_mode == 'Credit Card')USD @elseif($order->c_14_93_pay_mode == 'Bank'){{$order->c_14_94_forex_currency}} @endif
										</span>
										</td>
									

									</tr>
									<tr>
										<th scope="row" width="30%">Conversion Rate  ( USD to <sapn class="currency_forex">{{$order->c_14_94_forex_currency}}</sapn> )</th>
										<td width="70%" >@if($order->c_14_93_pay_mode == 'Credit Card')1 @elseif($order->c_14_93_pay_mode == 'Bank'){{$order->conversion_usd_to_forex_rate}} @endif</td>
											

									</tr>
									<tr>
										<th scope="row" width="30%" >TOTAL AMOUNT PAYABLE - in  <sapn class="currency_forex">{{$order->c_14_94_forex_currency}}</sapn></th>
										<td width="70%" id="payment_forex_order_rate">{{round($order->c_14_95_amount)}}</td>

									</tr>
									<tr>
										<th scope="row" width="30%">PAYMENT RECEIVED - in <sapn class="currency_forex">{{$order->c_14_94_forex_currency}}</sapn> </th>



										<td width="70%" id="forex_received"  >{{$order->c_14_96_forex_received??0}}</td>

									</tr>
									<tr>
										<th scope="row" width="30%">Received on Date</th>
										<td width="70%">{{$order->c_14_97_received_on_date?date_format(date_create($order->c_14_97_received_on_date),'d-m-Y'):''}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Conversion Rate  ( <sapn class="currency_forex">{{$order->c_14_94_forex_currency}}</sapn> to USD )</th>
										<td width="70%">{{round($order->c_14_98_conversion_forex_to_usd_rate,8)}}</td>
											

									</tr>
									<tr>
										<th scope="row" width="30%">USD Eqv. Value Recd. (USD Order Value- <span id="order_value_usd">{{round($order->c_14_84_total_amount)}}</span> )</th>
										<td width="70%"><input type="hidden" name="c_14_99_usd_received" value="{{round($order->c_14_99_usd_received)}}">
											<span id="payment_usd_received">{{round($order->c_14_99_usd_received)}}</span>
										</td>
									</tr>

									<tr>
										<th scope="row" width="30%">Forex Gain / Loss</th>
										<td width="70%" id="forex_gain_loss">{{ round($order->forex_gain_loss) }}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Balance Due ( in USD  )</th>
										<td width="70%" id="balance_due">{{round($order->c_14_100_usd_bal_due)}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong></strong></th>
										<td width="70%">&nbsp;</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>BILLING DETAILS :</strong></th>
										<td width="70%">&nbsp;</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Payer Full Name</th>
										<td width="70%" >{{$order->c_14_10_payer_full_name}}</td>
									</tr>
									<tr class="is_scholar_use">
										<th scope="row" width="30%">Patient is (Relation) of the Payer</th>
										<td width="70%">{{$order->c_14_11_patient_relation_payer}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Payer Address Line 1:</th>
										<td width="70%">{{$order->c_14_12_payer_address_line_1}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Payer Address Line 2:</th>
										<td width="70%">{{$order->c_14_13_payer_address_line_2}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Payer City:</th>
										<td width="70%"> {{$order->c_14_14_pay_city}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Payer State</th>
										<td width="70%">{{$order->c_14_15_payer_state}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Payer Zip:</th>
										<td width="70%">{{$order->c_14_16_payer_zip}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Payer Country :</th>
										<td width="70%"> {{ $order->c_14_17_payer_country }}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Payer Mobile :</th>
										<td width="70%">{{$order->c_14_18_payer_mobile}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">&nbsp;</th>
										<td width="70%">&nbsp;</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>DELIVERY DETAILS :</strong></th>
										<td width="70%">&nbsp;</td>
									</tr>
									<tr class="is_scholar_use">
										<th scope="row" width="30%">Patient Name :</th>
										<td width="70%">{{$order->c_14_19_patient_name}}</td>
									</tr>
									<tr class="is_scholar_use">
										<th scope="row" width="30%">Patient Sex</th>
										<td width="70%"> @if($order->c_14_20_patient_sex == 'M')  Male @endif @if($order->c_14_20_patient_sex == 'F')Female @endif </td>
									</tr>
								<tr class="is_scholar_use">
										<th scope="row" width="30%">Patient Age :</th>
										<td width="70%">{{$order->c_14_21_patient_age}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Parcel Receiver’s Full Name</th>
										<td width="70%">{{$order->c_14_22_parcel_receivers_full_name}}</td>
									</tr>
									<tr class="is_scholar_use">
										<th scope="row" width="30%">Receiver is (Relation) of the Patient</th>
										<td width="70%">
											{{$order->c_14_23_receiver_relation_patient}}


										</td>
									</tr>
									
									<tr>
										<th scope="row" width="30%">Receiver Address Line 1:</th>
										<td width="70%">{{$order->c_14_24_receiver_address_line_1}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Receiver Address Line 2:</th>
										<td width="70%">{{$order->c_14_25_receiver_address_line_2}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Receiver City</th>
										<td width="70%">{{$order->c_14_26_receiver_city}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Receiver State</th>
										<td width="70%">{{$order->c_14_27_receiver_state}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Receiver Zip:</th>
										<td width="70%">{{$order->c_14_28_receiver_zip}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Receiver Country :</th>
										<td width="70%">{{ $order->c_14_29_receiver_country }}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Receiver Mobile :</th>
										<td width="70%">{{$order->c_14_30_receiver_mobile}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">&nbsp;</th>
										<td width="70%">&nbsp;</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>End Use Selected:</strong></th>
										<td width="70%">@if($order->c_14_31_end_use_selected == 1) Doctor’s Prescription @endif @if($order->c_14_31_end_use_selected == 2)  Scholarly Use @endif	</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Doctor’s Prescription
											{{-- <input type="file" name="file" id="file" class="inputfile">
											<label for="file" id="doctor-label">Upload</label> --}}
										</th>
										<td width="70%">
											<div id="doctor_use">
											<a href="{{asset('scripts/'.$order->c_14_32_doctor_prescription_url)}}" target="_blank" >
												{{asset('scripts/'.$order->c_14_32_doctor_prescription_url)}}
											</a>
											<br>
											
                  							</div>
											
										</td>
									</tr>
										<tr>
										<th scope="row" width="30%">Undertaking</th>
										<td width="70%">
											
											<a href="{{route('shipment_undertaking',$order->c_14_6_proforma_invoice_url??'url')}}"  target="_blank" id="undertaking_use">{{route('shipment_undertaking',$order->c_14_6_proforma_invoice_url??'')}}</a>
										
										
										</td>
									</tr>
									<tr>
										<th scope="row" width="30%">&nbsp;</th>
										<td width="70%">&nbsp;</td>
									</tr>
									<tr>
										<th scope="row" width="30%"><strong>ORDER DETAILS :</strong></th>
										<td width="70%">&nbsp;</td>
									</tr>
		                                @foreach($order->order_details as $key => $order_detail)
									<tr>
										<th scope="row" width="30%">Medicine No. {{$key+1}}</th>
											<input type="hidden" name="order_id[]" value="{{$order_detail->id}}">
										<td width="70%">{{$order_detail->c_14_34_medicine_no}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Description {{$key+1}}</th>
										<td width="70%">{{$order_detail->c_14_35_description}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Quantity/Pack X No. of Packs {{$key+1}}</th>
										<td width="70%">{{$order_detail->c_14_36_quantity_pack}} X {{$order_detail->c_14_39_total_quantity}}</td>
									</tr>
									<tr>
										<th scope="row" width="30%">Net Price/Pack {{$key+1}}</th>
										<td width="70%">{{$order_detail->c_14_37_net_price_pack}}</td>
									</tr>
									
									<tr>
										<th scope="row" width="30%">Total Quantity {{$key+1}} </th>
										<td width="70%" data-id="{{$order_detail->id}}" id="pack_total_qty-{{$order_detail->id}}"  >{{$order_detail->c_14_39_total_quantity*$order_detail->c_14_36_quantity_pack}}

										</td>
									</tr>
								
									<tr>
										<th scope="row" width="30%">Total Amount {{$key+1}} </th>
										<td width="70%" data-id="{{$order_detail->id}}" id="pack_total-{{$order_detail->id}}" class="order_pack_total" >{{round($order_detail->c_14_41_total_amount)}}
										</td>
						
									</tr>
							
											<tr>
										<th scope="row" width="30%">&nbsp;</th>
										<td width="70%">&nbsp;</td>
									</tr>
		                                @endforeach
									
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

 // if(selected_value == '1'){
 // 		$('#undertaking_use').hide();
	// 			$('#doctor_use').show()
	// 			$('.is_scholar_use').show();
 // }else {
 // 		$('#undertaking_use').show();
	// 			$('#doctor_use').hide()
	// 			$('.is_scholar_use').hide();

 // }

  if(order_paymend_mode == 'Credit Card'){
$('select[name=select_payment_mode]').val('Credit Card');

$('input[name="c_14_92_cc_request_link"]').attr('required',true);
				$('.cc_details').show()
 }else {
				$('.cc_details').hide()

 }


function copyToClipboard(elementId) {

  // Create a "hidden" input
  var aux = document.createElement("input");

  // Assign it the value of the specified element


  let html = '';

  let td =  document.getElementsByTagName('td');
  let th =  document.getElementsByTagName('th');

  for (var i = 0; i < td.length; i++) {

  	console.log($(th[i]).text()+' '+$(td[i]).text())
  		html += $(th[i]).text()+' '+$(td[i]).text()  ;
  }

  console.log(html);
  aux.setAttribute("value",html);

  // Append it to the body
  document.body.appendChild(aux);

  // Highlight its content
  aux.select();

  // Copy the highlighted text
  document.execCommand("copy");

  // Remove it from the body
  document.body.removeChild(aux);

}

</script>


@endsection