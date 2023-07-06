@extends('layouts.backend')
@section('content')

<div class="page-define">
				  <div class="container-fluid">
					<div class="row justify-content-between">
						<div class="col">
							<h1>ORDER STATUS</h1>
							<span class="shorttxt">Data will come from DBT: 14-Summary</span>
						</div>
					</div>		
				 </div>
			   </div>
            <div class="main-panel">
                <div class="container-fluid">
                    <div class="panel-container">
                        
						<div class="main-section">
                            <div class="main-border ">
                                <div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="entry-title">
											<h2>ORDER STATUS</h2>
										</div>
										<small class="mb-3 d-block">DBT: 14-Summary</small>
									</div>	

                                  <div class="col-md-6 col-sm-12">
                                        <div class="entry-title">
                                            <div class="extraDetails">
                        <div class="dropexport dropdown show">
                          <div class="float-right">
                      <div class="inputBtn"><button type="button"  class="btn redBtn delete_all">Delete Selected</button></div>
                    </div>
                        </div>
                      </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-table text-left tableFooter font14">
                       @if (Session::has('success'))
                        <div class="container">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    @endif
                         @if (Session::has('error'))
                             <div class="container">
                                 <div class="alert alert-danger">
                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                     {{ Session::get('error') }}
                                 </div>
                             </div>
                         @endif
									<table id="datatable" class="table custom-table table-bordered text-center">
										<thead>
								<tr>
									
									<th scope="col" width="50px"><input type="checkbox"  id="master" class="inputAuto" />Select</th>
									<th scope="col" width="20px">Order. No.</th>
									<th scope="col" width="70px">Date & IST Time</th>
									<th scope="col">Billing Name & Country<br>Login Email<br>Billing Whatsapp no.<br>Patient/Receiver & Country</th>
									<th scope="col" width="80px">Order Details</th>
									<th scope="col" width="">Order Value <br>Pay. Recd.<br>On Date<br>Balance</th>
									<th scope="col" width="">Shipped <br>Carrier<br> Tracking <br> No. &  Link </th>	
									<th scope="col" width="">F-Arrival<br> 	C-Cleared<br> 	Delivered 	</th>
									<th scope="col" width="100px">Action</th>									
								</tr>
							  </thead>
							  <tbody>

                                        @foreach($orders as $key => $order)
							       	<tr id="tr_{{$order->id}}">
                        <td><input type="checkbox" class="sub_chk dcb" data-id="{{$order->id}}"/></td>
								   <td><a href="{{route('aadhya.summary',$order->c_14_8_excel_order_url)}}" style="color:#000;font-weight:600;text-decoration:underline;" target="_blank">{{$order->c_14_2_online_invoice_no}}</a></td>
								  <td>


                     {{$order->created_at->format('d-m-Y')}}<br>

                    {{$order->created_at->timezone('Asia/Kolkata')->format('H.i')}} IST
                    <br>
                    @if(!$order->is_order && $order->c_14_6_proforma_invoice_url)
                        @if($order->c_14_93_pay_mode =='Credit Card')
                         <a href="{{route('cart.invoice',[$order->c_14_6_proforma_invoice_url??$order->c_14_4_cart_url,'p=99'])}}" style="color:#000;font-weight:600;text-decoration:underline;" target="_blank">PI-99 </a> 
                         @else
                         <a href="{{route('cart.invoice',[$order->c_14_6_proforma_invoice_url??$order->c_14_4_cart_url,'p=1'])}}" style="color:#000;font-weight:600;text-decoration:underline;" target="_blank">PI-1</a> 
                         @endif
                    @else
                     @if($order->c_14_7_order_invoice_url)
                     <a href="{{route('order.invoice',$order->c_14_7_order_invoice_url??'url')}}" style="color:#000;font-weight:600;text-decoration:underline;" target="_blank">OI </a> 
                     @endif
                    @endif

                     / 
                     @if($order->c_14_8_excel_order_url)
                     <a href="{{route('aadhya.excel.invoice',$order->c_14_8_excel_order_url??'url')}}" style="color:#000;font-weight:600;text-decoration:underline;" target="_blank">ES </a>
                     @endif <br>
								  <button data-toggle="modal" data-target="#order_status-o{{$order->id}}" class="saveTxt text-primary text-underline" style="text-decoration:underline;">STATUS</button>
								 
                </td>
                  <td>{{$order->c_14_10_payer_full_name}}, {{$order->c_14_17_payer_country}}<br>{{$order->c_14_9_login_email}}<br>{{$order->c_14_18_payer_mobile}}<br>{{$order->c_14_19_patient_name}}, {{$order->country->c_4_1_2_country_name ??''}}</td>
								  <td>
                                        @if($order->order_details)
                                        <a href="javascript:void(0);" style="color:#000;font-weight:600;text-decoration:underline;" data-toggle="modal" data-target="#order_detail-b{{$order->id}}">
                                          Details
                                        </a>

                                        <div class="modal fade modal_status" id="order_detail-b{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                          <div class="modal-header">
                                            <h5>Order Details : {{$order->c_14_2_online_invoice_no}}</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                            <div class="modal-body text-left">
                                                  @foreach($order->order_details as $order_detail)
                                                                                        {{$order_detail->c_14_36_quantity_pack}} {{$order_detail->c_14_40_medicine_form}} x {{$order_detail->c_14_39_total_quantity}} :   {{$order_detail->c_14_36_quantity_pack*$order_detail->c_14_39_total_quantity}} {{$order_detail->c_14_35_description}}<br>
                                                                                        @endforeach
                                            </div>
                                            
                                            </div>
                                            </div>
                                          </div>
                                  
                                        @endif
                                  </td>
								 
								  <td>{{round($order->c_14_84_total_amount)}}- <br>{{round($order->c_14_99_usd_received) ?? 0}}-<br>{{$order->c_14_97_received_on_date?date_format(date_create($order->c_14_97_received_on_date),'d-m-Y'):''}} <br>{{$order->c_14_100_usd_bal_due}}-</td>		

								  <td>{{$order->c_14_115_parcel_shipment_date?date_format(date_create($order->c_14_115_parcel_shipment_date),'d-m-Y'):''}}<br>{{$order->c_14_116_carrier}}<br><span style="color:#000;text-decoration:underline;"><a href="{{$order->c_14_118_tracking_url}}"  target="_blank" >{{$order->c_14_117_tracking_no}}</a></span></td>

								  <td>{{$order->for_arrival_date?date_format(date_create($order->for_arrival_date),'d-m-Y'):''}}<br>{{$order->customs_cl_date?date_format(date_create($order->customs_cl_date),'d-m-Y'):''}}<br>{{$order->c_14_124_delivered_date?date_format(date_create($order->c_14_124_delivered_date),'d-m-Y'):''}}</td>
								  <td class="action">
                     <span style="@if($order->order_hold_mail)color:#00baab;@endif font-weight:600;">OH</span>
                      @if($order->c_14_93_pay_mode =='Credit Card')
                     <span style="@if($order->cc_payment_reminder_mail1)color:#00baab;@endif font-weight:600;">CP1</span>
                     <span style="@if($order->cc_payment_reminder_mail2)color:#00baab;@endif font-weight:600;">CP2</span>
                     <span style="@if($order->cc_payment_thanks_mail)color:#00baab;@endif font-weight:600;">CPT</span>
                      <br>

                         @elseif($order->c_14_93_pay_mode =='Bank')
                      <span style="@if($order->bt_payment_reminder_mail1)color:#00baab;@endif font-weight:600;">BP1</span>
                     <span style="@if($order->bt_payment_reminder_mail2)color:#00baab;@endif font-weight:600;">BP2</span>
                     <span style="@if($order->bt_payment_thanks_mail)color:#00baab;@endif font-weight:600;">BPT</span>
										     <br>
                    @endif
										<span style="@if($order->shipment_mail)color:#00baab;@endif font-weight:600;">S</span> 
                    <span style="@if($order->foreign_arrival_mail)color:#00baab;@endif font-weight:600;">F</span> 
                    <span style="@if($order->custom_clearance_mail)color:#00baab;@endif font-weight:600;">C</span> 
                    <span style="@if($order->delivered_mail)color:#00baab;@endif font-weight:600;">D</span> 
                    <span style="@if($order->reviews_mail1)color:#00baab;@endif font-weight:600;">R1</span> 
                    <span style="@if($order->reviews_mail2)color:#00baab;@endif font-weight:600;">R2</span> 
                   

                    <br>
								  <a href="{{route('aadhya.summary.delete',$order->id)}}" class="delTxt">DELETE</a></td>

                   <div class="modal fade " tabindex="-1" id="order_status-o{{$order->id}}"  role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                          <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title " id="exampleModalLabel">Order No. <a href="{{route('aadhya.summary',$order->c_14_8_excel_order_url)}}" target="_blank"  style="text-decoration:underline;" class="blueTxt">{{$order->c_14_2_online_invoice_no}}</a> dt <span class="blueTxt">{{$order->created_at->format('d-m-Y')}}</span> for USD <span class="blueTxt">{{round($order->c_14_84_total_amount)}}<font color="black" > ( </font> {{$order->c_14_94_forex_currency}} {{round($order->c_14_95_amount)}}</span> ) / <font color="black" >Recd.</font> <span class="blueTxt">{{$order->c_14_94_forex_currency}} {{round($order->c_14_96_forex_received)}} <font color="black" >( USD </font>{{round($order->c_14_99_usd_received)}} <font color="black" > ) / bal. USD </font> {{$order->c_14_100_usd_bal_due}}</span> :<br> <span class="blueTxt">
                                @if($order->c_14_93_pay_mode != 'Credit Card')
                                {{$order->bank_company_code??$bank_detail->c_5_2_company_code??''}}
                                @else
                                Credit Card
                                @endif
                            </span></h5>
{{-- 
                          <div class="orderstatusField">
                            <div class="colF"><label>Select Payment requirement by</label></div>
                         <div class="colF">
                              <select class="form-control Cfield" required="">
                                <option>CREDIT CARD</option>
                                <option>BANK TRANSFER by:</option>
                                <option>AUD-AWHK-AU</option>
                                <option>CAD-AWHK-CA</option>
                                <option>EUR-AWHK-EU</option>
                                <option>GBP-AWHK-GB</option>
                                <option>SGD-AWHK-SG</option>
                                <option>USD-AWHK-US</option>
                                <option>USD-AWHK-HK</option>
                                </option>
                              </select>
                            </div>
                            <div class="colF"> <a href="" class="btn greenBtn">Apply to send mail</a></div>
                          </div> --}}
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="{{route('aadhya.order_status.update',$order->id)}}"  method="post">
                                @csrf
                                      <div  class="row mb-2">
                                              <div class="col-md-4">
                                                <div class="text-right"><strong>Payment by / Shipment to :</strong><br> {{$order->c_14_9_login_email}} </div>
                                              </div>
                                              <div class="col-md-8">
                                          PA: {{$order->c_14_10_payer_full_name}}  ( for  {{$order->c_14_19_patient_name}},  {{$order->c_14_11_patient_relation_payer}} ), {{$order->c_14_17_payer_country}} <br> SA: {{$order->c_14_19_patient_name}} ( c/o {{$order->c_14_22_parcel_receivers_full_name}} ,  {{$order->c_14_23_receiver_relation_patient}}), {{$order->country->c_4_1_2_country_name ??''}}
                                              </div>
                                               
                                       
                                      </div>
                                              <div  class="row mb-2">
                                              <div class="col-md-4">
                                                <div class="text-right"><strong>Order on Hold Mail – OH / Order Invoice Mail – OI</strong> </div>
                                              </div>
                                              <div class="col-md-8 row">
                                                  <div class="col-md-3"> 
                                                      @if(!$order->order_hold_mail)
                                                    <a href="{{ route('aadhya.order_hold_mail',$order->id) }}"  class="send_mail" style="text-decoration:underline;"> Send Mail OH</a>
                                                      @else
                                                    <span class="text-primary">   OH sent: {{ date_format(date_create($order->order_hold_mail),'d-m-y') }}</span>
                                                    @endif
                                                    </div>
                                                     <div class="col-md-3"> 
                                                      @if($order->order_invoice_mail)
                                               
                                                    <span class="text-primary">   OI sent: {{ date_format(date_create($order->order_invoice_mail),'d-m-y') }}</span>
                                                    @endif
                                                    </div>
                                                  
                                     </div>
                                      </div>
                                        @if($order->c_14_93_pay_mode =='Credit Card')
                                       <div  class="row mb-2">
                                              <div class="col-md-4">
                                                <div class="text-right"><strong>CC - Pay Reminder Mail CP1 CP2</strong> </div>
                                              </div>
                                              <div class="col-md-8 row">
                                                  <div class="col-md-3"> 
                                                      @if(!$order->cc_payment_reminder_mail1)
                                                    <a href="{{ route('aadhya.cc_payment_reminder_mail1',$order->id) }}" class="send_mail" style="text-decoration:underline;"> Send Mail CP1</a>
                                                      @else
                                                      <span class="text-primary"> CP1: {{ date_format(date_create($order->cc_payment_reminder_mail1),'d-m-y') }}</span></span>
                                                    @endif
                                                    </div>
                                                  <div class="col-md-4"> 
                                                      @if(!$order->cc_payment_reminder_mail2)
                                                    <a href="{{ route('aadhya.cc_payment_reminder_mail2',$order->id) }}" class="send_mail" style="text-decoration:underline;">Send Mail CP2</a>
                                                      @else
                                                    <span class="text-primary">  CP2: {{ date_format(date_create($order->cc_payment_reminder_mail2),'d-m-y') }}</span>
                                                    @endif
                                                   </div>
                                                  <div class="col-md-5">  
                                                      @if(!$order->cc_payment_thanks_mail)
                                                    <a href="{{ route('aadhya.cc_payment_thanks_mail',$order->id) }}" class="send_mail" style="text-decoration:underline;">Send Payment Thanks Mail - CPT</a>
                                                      @else
                                                   <span class="text-primary">   CPT: {{ date_format(date_create($order->cc_payment_thanks_mail),'d-m-y') }}</span>
                                                    @endif
                                                   </div>
                                              </div>
                                      </div>

                                          @elseif($order->c_14_93_pay_mode =='Bank')
                                       <div  class="row mb-2">
                                              <div class="col-md-4">
                                                <div class="text-right"><strong>BT - Pay Reminder Mail BP1 BP2</strong> </div>
                                              </div>
                                              <div class="col-md-8 row">
                                                  <div class="col-md-3">
                                                      @if(!$order->bt_payment_reminder_mail1)
                                                    <a href="{{ route('aadhya.bt_payment_reminder_mail1',$order->id) }}" class="send_mail" style="text-decoration:underline;" >Send Mail BP1</a>
                                                      @else
                                                    <span class="text-primary">  BP1 sent: {{ date_format(date_create($order->bt_payment_reminder_mail1),'d-m-y') }}</span>
                                                    @endif
                                                   </div>
                                                  <div class="col-md-4">
                                                      @if(!$order->bt_payment_reminder_mail2)
                                                    <a href="{{ route('aadhya.bt_payment_reminder_mail2',$order->id) }}" class="send_mail" style="text-decoration:underline;" >Send Mail BP2</a>
                                                      @else
                                                    <span class="text-primary">  BP2 sent: {{ date_format(date_create($order->bt_payment_reminder_mail2),'d-m-y') }}</span>
                                                    @endif
                                                   </div>
                                                  <div class="col-md-5"> 
                                                      @if(!$order->bt_payment_thanks_mail)
                                                    <a href="{{ route('aadhya.bt_payment_thanks_mail',$order->id) }}" class="send_mail" style="text-decoration:underline;" >Send Payment Thanks Mail - BPT </a>
                                                      @else
                                                   <span class="text-primary">   BPT sent: {{ date_format(date_create($order->bt_payment_thanks_mail),'d-m-y') }}</span>
                                                    @endif
                                                  </div>
                                              </div>
                                      </div>
                                      @endif
                                       <div  class="row mb-2">
                                              <div class="col-md-4">
                                                <div class="text-right"><strong>Payment Received on Date</strong> </div>
                                              </div>
                                              <div class="col-md-8  row">
                                                <div class="col-md-3">
                                                    <strong class="text-right" style="float: right;"> ForEx = {{$order->c_14_94_forex_currency}}</strong>
                                                </div>
                                              
                                                <div class="col-md-4">
                                                 <input type="text" name="forex_received" class="border form-control mx-2" style="height:25px" value="{{$order->c_14_96_forex_received}}" placeholder="Amount Received">
                                               </div>
                                                <div class="col-md-5">
                                                 <input type="date" name="received_on_date"   class="border  mx-2" value="{{$order->c_14_97_received_on_date}}">
                                               </div>
                                               </div>
                                        </div>


                                       <div  class="row mb-2">
                                              <div class="col-md-4">
                                                <div class="text-right"><strong>Shipment Details & Shipment Mail S</strong> </div>
                                              </div>
                                              <div class="col-md-8 row">
                                                  <div class="col-md-3">  <input type="date" name="shipment_date"  value="{{$order->c_14_115_parcel_shipment_date}}" class="border mb-2"> </div>
                                                  <div class="col-md-3">
                                                              <input type="text" name="carrier" class="border form-control mb-2" style="height:25px"  value="{{$order->c_14_116_carrier}}" placeholder="Carrier"  onkeypress="return /[A-Za-z_ ]/.test(event.key)">
                                                   </div>

                                                     <div class="col-md-3">
                                                              <input type="text" name="tracking_no" class="border form-control mb-2"  style="height:25px" value="{{$order->c_14_117_tracking_no}}" placeholder="Tracking No.">
                                                   </div>
                                                     <div class="col-md-3">
                                                             
                                                        @if(!$order->shipment_mail)
                                                             <a href="{{ route('aadhya.shipment_mail',$order->id) }}"  class="send_mail" style="text-decoration:underline;" >Send Shipment Mail - S </a>
                                                              @else
                                                   <span class="text-primary">   S sent: {{ date_format(date_create($order->shipment_mail),'d-m-y') }}

                                                   </span>
                                                    @endif
                                                 </div>

                                                   </div>
                                                 
                                              </div>
                                     

                                        <div  class="row mb-2">
                                              <div class="col-md-4">
                                                <div class="text-right"><strong>Tracking URL</strong> </div>
                                              </div>
                                              <div class="col-md-8 ">
                                                  <input type="text" name="tracking_url" class="border  form-control"  style="width: 95%;height:25px" value="{{$order->c_14_118_tracking_url}}" placeholder="Tracking Url">
                                  
                                              </div>
                                      </div>

                                         <div  class="row mb-2">
                                              <div class="col-md-4">
                                                <div class="text-right"><strong>For. Arrival & Mail F / Customs Clearance & Mail C </strong> </div>
                                              </div>
                                              <div class="col-md-8 row">
                                                  <div class="col-md-3">  <input type="date" name="arrival_date"  class="border mx-2" value="{{$order->for_arrival_date}}"> </div>
                                                    <div class="col-md-3">
                                                             
                                                        @if(!$order->foreign_arrival_mail)
                                                             <a href="{{ route('aadhya.foreign_arrival_mail',$order->id) }}"  class="send_mail" style="text-decoration:underline;" >Send For. Arr. Mail - F </a>
                                                              @else
                                                    <span class="text-primary">  F sent: {{ date_format(date_create($order->foreign_arrival_mail),'d-m-y') }}</span>
                                                    @endif

                                                   </div>
                                                   <div class="col-md-3">  <input type="date" name="customs_date"  class="border mx-2" value="{{$order->customs_cl_date}}"> </div>
                                                    <div class="col-md-3">
                                                             
                                                        @if(!$order->custom_clearance_mail)
                                                             <a href="{{ route('aadhya.custom_clearance_mail',$order->id) }}" class="send_mail"  style="text-decoration:underline;" >Send Customs Mail - C </a>
                                                              @else
                                                   <span class="text-primary">   C sent: {{ date_format(date_create($order->custom_clearance_mail),'d-m-y') }}</span>
                                                    @endif

                                                   </div>
                                              </div>
                                      </div>

                                         <div  class="row mb-2">
                                              <div class="col-md-4">
                                                <div class="text-right"><strong>Delivery Date & Mail D / Reviews Mail R1 R2</strong> </div>
                                              </div>
                                              <div class="col-md-8 row">
                                                  <div class="col-md-3">  <input type="date" name="delivered_date"  class="border mx-2" value="{{$order->c_14_124_delivered_date}}"> </div>
                                                    <div class="col-md-3">
                                                             
                                                        @if(!$order->delivered_mail)
                                                             <a href="{{ route('aadhya.delivered_mail',$order->id) }}" class="send_mail" style="text-decoration:underline;" >Send Delivery Mail - D </a>
                                                              @else
                                                    <span class="text-primary">  D sent: {{ date_format(date_create($order->delivered_mail),'d-m-y') }}</span>
                                                    @endif

                                                   </div>
                                                   <div class="col-md-3"> 
                                                             
                                                      @if(!$order->reviews_mail1)
                                                             <a href="{{ route('aadhya.reviews_mail1',$order->id) }}" class="send_mail" style="text-decoration:underline;" >Send Reviews Mail - R1 </a>
                                                              @else
                                                    <span class="text-primary">  R1 sent: {{ date_format(date_create($order->reviews_mail1),'d-m-y') }}</span>
                                                    @endif

                                                    </div>
                                                    <div class="col-md-3">
                                                             
                                                        @if(!$order->reviews_mail2)
                                                             <a href="{{ route('aadhya.reviews_mail2',$order->id) }}" class="send_mail" style="text-decoration:underline;" >Send Reviews Mail - R2 </a>
                                                              @else
                                                      <span class="text-primary">   R2 sent: {{ date_format(date_create($order->reviews_mail2),'d-m-y') }}</span>
                                                    @endif

                                                   </div>
                                                     <div class="col-md-12 pull-right">
                                                             
                                                        @if(!$order->mail_refer_friend)
                                                             <a href="{{ route('aadhya.mail_refer_friend',$order->id) }}" class="send_mail" style="text-decoration:underline;float: right;" >Send Refer A Friend Mail - R-a-F </a>
                                                              @else
                                                      <span class="text-primary" style="float: right;">   R-a-F sent: {{ date_format(date_create($order->mail_refer_friend),'d-m-y') }}</span>
                                                    @endif

                                                   </div>
                                              </div>
                                      </div>

                                      <div class="row p-2">
                                          
                                          <div class="bottom-button text-right col-md-6">
                                          <strong class="text-danger orderStatusError" id="orderStatusError"></strong>
                                            
                                          </div>
                                        <div class="bottom-button text-right col-md-6 ">

                                             <button class="btn greenBtn">SAVE TO UPDATE STATUS</button>
                                        </div>
                                      </div>
                                    </form>
                                </div> 
                            </div>
                          </div>
                        </div>
                      </div>
								</tr>


             @endforeach
							</tbody>						
									</table>
								</div>  
								<div class="bottom-button clearfix">
									<div class="text-right">
										<button type="button" class="btn redBtn">Delete Selected</button>
										<button type="button" class="btn redBtn">Delete All</button>
									</div>								
								</div>								
                            </div>
                        </div>
						
						<!--Order Status-->


<!--Order Status End-->
						
                    </div>
                </div>
            </div>


@endsection

@section('afterScript')

<script type="text/javascript">


 $('.send_mail').click(function (event) {
    event.preventDefault();
let element = $(this);
    let url =  $(this).attr('href');
               $.ajax({
                         type: "get",       
                         url: url,
                      success: function (data) {
                        if(data.status){

                          console.log(data.date)
                          element.html('<span class="text-primary">'+data.date+'</span>');
                          // element.addClass('text-danger');
                          element.css('text-decoration','none');
                          element.removeClass('send_mail');
                        } else {
                          $('.orderStatusError').text(data.error)
                          setTimeout(()=>{
                             $('.orderStatusError').text('')
                          }, 5000);
                        }
                          }
                         });

 })

 
 $('#master').on('click', function(e) {

         if($(this).is(':checked',true))  

         {

            $(".sub_chk").prop('checked', true);  

         } else {  

            $(".sub_chk").prop('checked',false);  

         }  

        });
  

 
            $('.delete_all').on('click', function(e) {


            var allVals = [];  

            $(".sub_chk:checked").each(function() {  

                allVals.push($(this).attr('data-id'));

            });  


            if(allVals.length <=0)  

            {  

                alert("Please select row.");  

            }  else {  


                var check = confirm("Are you sure you want to delete this row?");  

                if(check == true){  


                    var join_selected_values = allVals.join(","); 


                    $.ajax({

                        url: "{{ route('aadhya.18-order-status.deleteAll') }}",

                        type: 'DELETE',

                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                        data: 'ids='+join_selected_values,

                        success: function (data) {

                            if (data['success']) {

                                $(".sub_chk:checked").each(function() {  

                                    $(this).parents("tr").remove();

                                });

                                alert(data['success']);

                            } else if (data['error']) {

                                alert(data['error']);

                            } else {

                                alert('Whoops Something went wrong!!');

                            }

                        },

                        error: function (data) {

                            alert(data.responseText);

                        }

                    });


                  $.each(allVals, function( index, value ) {

                      $('table tr').filter("[data-row-id='" + value + "']").remove();

                  });

                }  

            }  

        });
</script>
@endsection