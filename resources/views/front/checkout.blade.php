@extends('layouts.front')
@section('content')

<section class="inner-page medication-page"  id="scrolltoview">
<div class="container">
   <div class="breadcrumbs mt-3">
      <ul>
         <li><a href="{{url('/')}}">Home</a></li>
         <li><a href="{{url('medication')}}">Medication </a></li>
         <li>Cart & Checkout</li>
      </ul>
      <ul class="comenext">
         <li>Next Page</li>
         <li>Proforma Invoice </li>
      </ul>
   </div>
   <div class="inner-wrapper">
   
      <div class="border-line green-bg" ></div>
      @if(count($summary->order_details) >0)
      <div class="process-accordion">
         <div class="common-accordion cartaccordion">
            <div id="accordion">
            <div class="accordion-box">
               <div class="login-inner" id="finalizeOrder">
                  <div data-toggle="collapse" data-target="#acctarget1" aria-expanded="true" aria-controls="acctarget1" class="acc-heading collapsed"><span>FINALIZE ORDER</span><span class="acc-small-text">Change Quantity or Add New Medicines <i class="fa fa-caret-down" aria-hidden="true"></i></span></div>
               </div>
               <div id="acctarget1" class="login-inner collapse @if($summary->checkout_step ==0) show @endif" aria-labelledby="heading1" data-parent="#accordion">
                  <div class="accordion-content">
                     <div class="tabledetails">
                        <table width="100%" cellspacing="0" border="0" cellpadding="0" class="table table-responsive table-borderless">
                           <thead>
                              <tr>
                                 <th align="left" width="52%">Medication <br>Details</th>
                                 <th align="center" width="15%">Qty./Pack<br>x Packs</th>
                                 <th align="center"width="15%">Price/<br>Pack</th>
                                 <th align="center"width="15%">Amt. <br>(US$)</th>
                                 <th scope="col" width="3%">&nbsp;</th>
                              </tr>
                           </thead>
                           <tbody>
                           @foreach($summary->order_details as $item)
                              <tr>
                                 <!--td align="left">009703</td-->
                                 <td align="left" class="ult">
                                   <div class="orderproduct">
                                     <span><a href="{{url('/'.$item->meds_price->meds_name->c_1_1_4_frontend_url ??'')}}">{{$item->c_14_35_description}}</a> : </span>
                                    @if($item->type=='g')
                                    @if($item->meds_price->c_2_2_14_g_full_image)
                                       <a href="{{asset('/img-me/'.$item->meds_price->c_2_2_14_g_full_image)}}" data-fancybox="" data-caption="">
                                       <img src="{{asset('/img-me/'.$item->meds_price->c_2_2_14_g_full_image)}}">
                                       </a>

                                         @else
                                       <img src="{{asset('img-me/default-icon.webp')}}">
                                       @endif
                                    @else
                                    @if($item->meds_price->c_2_2_36_b_full_image)

                                     <a href="{{asset('/img-me/'.$item->meds_price->c_2_2_36_b_full_image)}}" data-fancybox="" data-caption="">
                                       <img src="{{asset('/img-me/'.$item->meds_price->c_2_2_36_b_full_image)}}">
                                       </a>
                                          @else
                                       <img src="{{asset('img-me/default-icon.webp')}}" alt="tablet capsules injection medicine icon">
                                       @endif
                                    @endif

                  
                                    </div>
                                 </td>
                                   <td align="center">
                                    {{$item->c_14_36_quantity_pack}}  {{$item->c_14_40_medicine_form}} x <br>
                                    <div class="countCart" id="field1"><button type="button" data-id="{{$item->id}}"  id="subCart" class="subCart" >-</button><input type="number" id="1" class="qty{{$item->id}}" data-id="{{$item->id}}" value="{{$item->c_14_39_total_quantity}}" min="1" ><button type="button" data-id="{{$item->id}}" id="addCart" class="addCart">+</button></div>
                                 </td>
                                 <td align="center">US$ <span class="price{{$item->id}}">{{$item->c_14_37_net_price_pack}}</span></td>
                                 <td align="center"><strong>US$ <span class="total-price{{$item->id}}">{{$item->c_14_37_net_price_pack*$item->c_14_39_total_quantity}}</span></strong></td>
                                                        
                                 <td align="center" >
                                    <form action="{{ route('order_details.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                         <button style="padding: 0" type="submit" data-toggle="tooltip" data-placement="top" title="" data-original-title=""><i class="fa fa-trash-o" aria-hidden="true" onclick="return confirm('Do you want to REMOVE this drug from your order ?')"></i></button>
                                      </form>
                                   </td>
                              </tr>
                           @endforeach
                          
                              @if($summary->c_14_75_coupon_code_used)
                                  <tr id="coupon_row" >
                                 <td colspan="3" class="text-right"><strong id="coupon_text">Referral Code applied : {{ $summary->c_14_75_coupon_code_used }}  </strong></td>
                                 <td align="center" style="color:#00a2ed;padding-top:15px;padding-bottom:15px;"><strong>US$ <span id="coupon_value">{{ $summary->c_14_76_promo_discount }}</span></strong></td>
                                 <td>&nbsp;</td>
                              </tr>
                              <tr>
                                 <td colspan="3" class="text-right"><strong>Sub-Total </strong></td>
                                 <td align="center" style="color:#00a2ed;padding-top:15px;padding-bottom:15px;"><strong>US$ <span id="cart_total">{{$summary->c_14_74_total_order_value-$summary->c_14_76_promo_discount }}</span></strong></td>
                                 <td>&nbsp;</td>
                              </tr>
                              @else

                              <tr id="coupon_row" style="display: none;">
                                 <td colspan="3" class="text-right"><strong id="coupon_text">Referral Code applied : </strong></td>
                                 <td align="center" style="color:#00a2ed;padding-top:15px;padding-bottom:15px;"><strong>US$ <span id="coupon_value">0</span></strong></td>
                                 <td>&nbsp;</td>
                              </tr>
                               <tr>
                                 <td colspan="3" class="text-right"><strong>Sub-Total </strong></td>
                                 <td align="center" style="color:#00a2ed;padding-top:15px;padding-bottom:15px;"><strong>US$ <span id="cart_total">{{round($summary->c_14_74_total_order_value) }}</span></strong></td>
                                 <td>&nbsp;</td>
                              </tr>
                              @endif
                           </tbody>
                        </table>
                     </div>
                     <div class="order-submit">
                        <form  action="{{route('procced-delivery')}}"  method="post">
                           @csrf
                        <div class="order-submit-wrap">
                           <div class="order-submit-details">
                              <p class="mb-0">Send a Refill Reminder after <span class="astrik"> <br>* fill <font  color="black"><strong>0</strong></font> if no reminder required.</span></p>
                              <input type="text" class="form-control num-days input-color" required="" value="{{$summary->c_14_85_refil_after_days}}" name="days" onkeyup="return /[0-9]/.test(event.key)">

                              <input type="hidden" name="summary_url" value="{{$summary->c_14_4_cart_url}}">

                            
                              <span>  days <span class="astrik">* </span></span>
                           </div>
                        </div>
                       
                        <div class="order-submit-wrap">
                           <div class="order-submit-details">

                                <b class="mb-0 mr-2"> Select/Confirm Country<span class="astrik">*</span></b>

                              <select class="form-control shipment-option selectpicker w-80"   data-live-search="true"  data-style="btn-info"  id="country_freight" required="" name="country">
                                 <option value="" >Select Country</option>
                                 @foreach($countries->where('c_4_1_5_delivery_address','Y') as $country)
                                 <option value="{{$country->id}}" @if($country->id == $summary->arrival_country) selected="" @endif>{{$country->c_4_1_2_country_name}}</option>
                                 @endforeach
                              </select>
                              <span class="ml-2"> <b>for Delivery.</b></span>


                             
                           </div>
                        </div>
                       <div class="order-submit-wrap" id="shipping-option-parent"  @if($summary->country->c_4_1_11_delivery_start && $summary->country->c_4_1_12_delivery_end)  @else style="display: none;" @endif>
                           <div class="shipping-option" id="shipping-option">
                                   @if($summary->country->c_4_1_11_delivery_start && $summary->country->c_4_1_12_delivery_end)
                                 <div class="shipping-option" id="shipping-option">
                                           <div class="shipping-option">
                                    Arrival at {{$summary->country->c_4_1_2_country_name}} Customs: <strong>{{$summary->country->c_4_1_11_delivery_start}} - {{$summary->country->c_4_1_12_delivery_end}} working days</strong><br>
                                    @if($summary->country->c_4_1_7_customs_clearance == 'Y')
                                    <strong>We offer Customs Clearance Services for {{$summary->country->c_4_1_2_country_name}}.</strong>
                                    @endif
                                 </div>                        
                                 </div>
                           @endif              
                           </div>
                        </div>
         						<div class="row">
                                 <div class="col-md-12 text-right mt-2">
                                 @auth
                                 <button type="submit" class="common-btn green-bg mt-2">Proceed to DELIVERY DETAILS</button>
                                 @else
                                 <button type="button" class="common-btn green-bg" data-toggle="modal" data-target="#lohin-signup">LOGIN / REGISTER</button><br>
                                 @endauth
                              </div>
                           </div>
                        </form>
                           <div class="row">
         						<div class="col-md-3 orderdrugs">
         				        	<div class="custom-search carttypesearch">
         							<i>Do you want to order any more drugs?</i>
                              <p></p>
         							<form class="search-form byTyping">
         								<div class="input-group">
         								  <input type="text" id="order_search" class="form-control input-color" placeholder="Search by Brand or Generic Name" aria-label="Do you want to order any more drugs?" aria-describedby="basic-addon2">
         								  <span class="input-group-btn">
         									<button name="submit" id="submit" type="submit" class="grey-bg btn btn-1"><span class="fa fa-search font18"></span></button>
         								  </span>
         								</div>
                                   <div id="order_result"></div>
         							</form>
         							
         						</div>
         				     </div>
                          <div class="col-md-6">
                           <div class="custom-search carttypesearch applypromo">
                                 <i>Do you have a Referral Code?</i>
                                       <p class="text-danger" id="coupon_error"></p>
                                 <form class="search-form byTyping">
                                    <div class="input-group">
                                      <input type="text" class="form-control input-color" id="coupon_code" placeholder="Referral Code" aria-label="Promo Discount Code" aria-describedby="basic-addon2">
                                      <span class="input-group-btn">
                                       <button name="submit" id="applyCoupon" type="button"  class="grey-bg btn btn-1">APPLY</button>
                                      </span>
                                    </div>
                                 </form>
                                 
                              </div>
                        </div>
                             <div class="col-md-12">
                       <div class="promise-container mt-4 ">
                         <div class="promise-wrap">
                            <div class="promise-box">
                               <span class=""><i class="fa fa-plane" aria-hidden="true"></i></span>
                               <p>Global Express Shipping : <br>at Actual Costs only</p>
                            </div>
                            <div class="promise-box calen">
                               <span class=""><img src="{{asset('/img/Calender-icon.webp')}}" width="43px" height="38px" alt=""></span>
                               <p>Superfast Delivery : <br>3-7 working days*</p>
                            </div>
                            <div class="promise-box">
                               <img src="{{asset('/img/Lowest-Price.webp')}}" width="161px" height="125px" alt="">
                            </div>
                            <div class="promise-box">
                               <span class=""><img src="{{asset('/img/prescription.png')}}" width="38px" height="38px" alt=""></span>
                               <p>Rx Prescription Required <br>for Human Use</p>
                            </div>
                            <div class="promise-box microscope">
                               <span class=""><img src="{{asset('/img/lab-microscope.png')}}" width="38px" height="38px" alt=""></span>
                               <p>Ut Undertaking Required <br>for R&amp;D Scholarly Studies</p>
                            </div>
                         </div>
                      </div>
                  </div>
         				</div>
			
                     </div>
					 
					 
                  </div>
               </div>
            </div>
            @auth
            <div class="accordion-box">
               <div class="login-inner " id="deliveryDetail"  style="@if($summary->checkout_step>=2)display:block;@else  display: none; @endif"  >
                  <div data-toggle="collapse" data-target="#acctarget2" aria-expanded="false" aria-controls="acctarget2" class="acc-heading collapsed"><span>DELIVERY DETAILS</span><span class="acc-small-text">Address at which the parcel is to be delivered <i class="fa fa-caret-down" aria-hidden="true"></i></span></div>
               </div>
               <div id="acctarget2" class="login-inner collapse @if($summary->checkout_step==2) show @endif" aria-labelledby="heading2" data-parent="#accordion">
                  <div class="accordion-content">
				  <div class="fielsmend">All fields are mandatory <span class="astrik">*</span> </div>
                     <form action="{{route('procced-billing',$summary)}}" method="post">
                        @csrf
                        <div class="row">
                           <div class="col-md-6 col-sm-12">
                              <div class="form-group">
                                 <label class="d-inline mb-1">Destination Country<span class="astrik">* </span></label>
                                <p class="p-3"> <strong class="input-color" id="destination_country_name">{{$summary->country->c_4_1_2_country_name}}</strong><span class="font-italic"  > ( as selected from the <a href="javascript:void(0);" class="blue-text" data-toggle="collapse" data-target="#acctarget1" aria-expanded="true" aria-controls="acctarget1">  previous section </a> )</span></p>
                                 <input type="hidden" name="destination_country" value="{{$summary->country->c_4_1_2_country_name}}">
                                 {{-- <select class="form-control Cfield" required name="country" readonly>
                                    <option>Parcel is to be Delivered in Country...</option>
                                     @foreach($countries->where('c_4_1_5_delivery_address','Y') as $country)
                                      <option  @if($summary->c_14_29_receiver_country == $country->id)  selected @endif value="{{$country->id}}">{{$country->c_4_1_2_country_name}}</option>
                                      
                                 @endforeach
                                 </select> --}}
                              </div>
                           </div>
                           <div class="col-md-6 col-sm-12" @if($summary->country->c_4_1_8_patient_use == 'N') style="display: none;" @endif>
                              <div class="row">
                                 <div class="col-md-8 col-sm-12">
                                    <div class="form-group">
                                       <label>Patient’s Full Name<span class="astrik">*</span></label>
                                       <input type="text" class="form-control Cfield input-color show-required" name="patient_name" {{-- placeholder="Patient’s Full Name" --}} required="" value="{{$summary->c_14_19_patient_name}}" onkeyup="nameValidation(this)" maxlength="30" >
                                       <span id="name_error" class="text-danger"></span>
                                    </div>
                                 </div>
                                 <div class="col-md-2 col-sm-12 twohalf">
                                    <div class="form-group"><label>Sex<span class="astrik">*</span></label>
                                       <select class="form-control show-required " name="gender" required="">
                                       	<option value="" selected="">Sex</option>
                                          <option   @if($summary->c_14_20_patient_sex == 'M')  selected @endif  value="M">Male</option>
                                          <option  @if($summary->c_14_20_patient_sex == 'F')  selected @endif  value="F">Female</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-2 col-sm-12 twohalf">
                                    <div class="form-group"><label>Age<span class="astrik">*</span></label>
                                       <input type="text" class="form-control Cfield input-color show-required"{{--  placeholder="Years" --}} name="age" min="0" required=""   value="{{$summary->c_14_21_patient_age}}" onkeypress="return /[0-9]/.test(event.key)">
                                    </div>
                                 </div>
                              </div>
                           </div>
                             
                            {{-- <div class=" @if($summary->country->c_4_1_8_patient_use == 'N') col-md-6 @else col-md-12 row @endif  ">  --}}
                              
                                 <div class=" patient_div col-md-6 col-sm-12">
                                    <div class="form-group">
                                         <label>Parcel Receiver’s Name<span class="astrik">*</span> <font class="font14"  @if($summary->country->c_4_1_8_patient_use == 'N') style="display: none;" @endif>(same as Patient <input type="checkbox"  id="parcel_reciver_name_checkbox"    @if(!empty($summary->c_14_22_parcel_receivers_full_name) && $summary->c_14_19_patient_name ==$summary->c_14_22_parcel_receivers_full_name) checked  @endif /> )</font></label>
                                       <input type="text" class="form-control Cfield input-color show-required" name="parcel_name" {{-- placeholder="Parcel Receiver’s Full Name" --}} required=""  value="{{$summary->c_14_22_parcel_receivers_full_name}}" onkeyup="nameValidationWithSpecialChar(this)" maxlength="30">
                                       <span class="text-danger" id="parcel_name_error"></span>
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-sm-12 patient_div"  @if($summary->country->c_4_1_8_patient_use == 'N') style="display: none;" @endif   @if(!empty($summary->c_14_19_patient_name) && $summary->c_14_19_patient_name == $summary->c_14_22_parcel_receivers_full_name) style="display: none;" @endif>
                                    <div class="form-group">
                                       <label>Relation with Patient</label>
                                       <span id="c_14_22_parcel_receivers_full_name"> {{ $summary->c_14_22_parcel_receivers_full_name??' Parcel Receiver is the ' }}</span> 
                                       <select class="form-control Cfield d-inline-block col-md-5 show-required" name="patient_relationship" >
                                          <option value="">Select Relation</option>
                                          <option value="Self"  @if($summary->c_14_23_receiver_relation_patient == 'Self')  selected @endif   >Self</option>
                                          <option value="Husband"  @if($summary->c_14_23_receiver_relation_patient =='Husband')  selected @endif >Husband</option>
                                          <option value="Wife"  @if($summary->c_14_23_receiver_relation_patient =='Wife')  selected @endif >Wife</option>
                                          <option value="Father"  @if($summary->c_14_23_receiver_relation_patient =='Father')  selected @endif >Father</option>
                                          <option value="Mother"  @if($summary->c_14_23_receiver_relation_patient =='Mother')  selected @endif >Mother</option>
                                          <option value="Son"  @if($summary->c_14_23_receiver_relation_patient =='Son')  selected @endif >Son</option>
                                          <option value="Daughter"  @if($summary->c_14_23_receiver_relation_patient =='Daughter')  selected @endif >Daughter</option>
                                          <option value="Brother"  @if($summary->c_14_23_receiver_relation_patient =='Brother')  selected @endif >Brother</option>
                                          <option value="Sister"  @if($summary->c_14_23_receiver_relation_patient =='Sister')  selected @endif >Sister</option>
                                          <option value="Uncle"  @if($summary->c_14_23_receiver_relation_patient =='Uncle')  selected @endif >Uncle</option>
                                          <option value="Aunt"  @if($summary->c_14_23_receiver_relation_patient =='Aunt')  selected @endif >Aunt</option>
                                          <option value="Nephew"  @if($summary->c_14_23_receiver_relation_patient =='Nephew')  selected @endif >Nephew</option>
                                          <option value="Niece"  @if($summary->c_14_23_receiver_relation_patient =='Niece')  selected @endif >Niece</option>
                                          <option value="Friend"  @if($summary->c_14_23_receiver_relation_patient =='Friend')  selected @endif >Friend</option>
                                          <option value="Forwarding Agent"  @if($summary->c_14_23_receiver_relation_patient =='Forwarding Agent')  selected @endif >Forwarding Agent</option>
                                          <option value="Pet Owner"  @if($summary->c_14_23_receiver_relation_patient =='Pet Owner')  selected @endif >Pet Owner</option>
                                          <option value="Other"  @if($summary->c_14_23_receiver_relation_patient =='Other')  selected @endif >Other</option>
                                       </select>
                                        <span id="c_14_19_patient_name"> {{ $summary->c_14_19_patient_name?' of '.$summary->c_14_19_patient_name : 'of the Patient' }} </span>.
                                    </div>
                                 </div>
                          {{-- </div> --}}
                           <div class="col-md-6 col-sm-12">
                              <div class="form-group">
                                 <label>Address Line 1<span class="astrik">*</span></label>
                                 <input type="text" class="form-control Cfield show-required input-color" {{-- placeholder="Address Line 1" --}} name="address1" required  value="{{$summary->c_14_24_receiver_address_line_1}}" onkeyup="messageValidation(this)" maxlength="100">
                              </div>
                           </div>
                           <div class="col-md-6 col-sm-12">
                              <div class="form-group">
                                 <label>Address Line 2</label>
                                 <input type="text" class="form-control Cfield input-color" {{-- placeholder="Address Line 2" --}} name="address2"  value="{{$summary->c_14_25_receiver_address_line_2}}" onkeyup="messageValidation(this)" maxlength="100">
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-3 col-sm-12">
                              <div class="form-group">
                                 <label>City<span class="astrik">*</span></label>
                                 <input type="text" class="form-control Cfield input-color "{{--  placeholder="City" --}} required name="city"  value="{{$summary->c_14_26_receiver_city}}" onkeyup="nameValidation(this)" maxlength="30">
                                 <span class="text-danger" id="city_error"></span>

                              </div>
                           </div>
                           <div class="col-md-6 col-lg-3 col-sm-12">
                              <div class="form-group">
                                 <label>State<span class="astrik">*</span></label>
                                 <input type="text" class="form-control Cfield input-color " {{-- placeholder="State" --}} required name="state"  value="{{$summary->c_14_27_receiver_state}}" onkeyup="nameValidation(this)" maxlength="30">
                                 <span class="text-danger" id="state_error"></span>

                              </div>
                           </div>
                           <div class="col-md-6 col-lg-3 col-sm-12">
                              <div class="form-group">
                                 <label>Postal Zip Code<span class="astrik">*</span></label>
                                 <input type="text" class="form-control Cfield input-color show-required" {{-- placeholder="Postal Zip Code" --}} required name="zip"  value="{{$summary->c_14_28_receiver_zip}}" onkeyup="postalValidation(this)" maxlength="15"> 
                              </div>
                           </div>
                           <div class="col-md-6 col-lg-3 col-sm-12">
                              <div class="form-group">
                                 <label>Mobile/WhatsApp No. with ISD<span class="astrik">*</span></label>
                                 <input id="jquery-intl-phone" class="form-control Cfield input-color jquery-intl-phone "  required=""  type="tel" {{-- placeholder="Contact no. with ISD Country Code" --}} name="patient_phone"  value="{{$summary->c_14_30_receiver_mobile}}" onkeyup="phoneValidation(this)" minlength="7" maxlength="20">
                                 <span class="text-danger" id="patient_phone_error"></span>
                              </div>
                           </div>
                           <div class=" col-md-12  row">
                           <div class="col-md-6 col-sm-12">
                              <div class="form-group">
                                
                              </div>
                           </div>
                           <div class="col-md-6 col-sm-12">
                               <div class="mb-3 ml-5 font-weight-bold">                      
                                    <label class="form-check-label" for="defaultCheck1">
                                  <strong>  Select <input class="formcheck" type="checkbox" value="1" id="defaultCheck1" name='is_billing' @if($summary->c_14_10_payer_full_name && ($summary->c_14_10_payer_full_name == $summary->c_14_22_parcel_receivers_full_name)) checked="" @endif> if the SHIPMENT and BILLING details are same.</strong>
                                    </label>
                                 </div>
                              <div class="form-group">
                                 <button type="submit" class="common-btn green-bg float-right">Proceed to BILLING DETAILS</button>
                              </div>
                           </div>
                        </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            @if($summary->c_14_22_parcel_receivers_full_name)
            <div class="accordion-box">
               <div class="login-inner" id="billingDetail" style="@if($summary->checkout_step>=3)display:block;@else  display: none; @endif">
                  <div data-toggle="collapse" data-target="#acctarget3" aria-expanded="false" aria-controls="acctarget3" class="acc-heading collapsed"><span>BILLING DETAILS</span><span class="acc-small-text">Address from which the payment will be sent <i class="fa fa-caret-down" aria-hidden="true"></i></span></div>
               </div>
               <div id="acctarget3" class="login-inner collapse  @if($summary->checkout_step==3) show @endif" aria-labelledby="heading3" data-parent="#accordion">
                  <div class="accordion-content">
				  <div class="fielsmend">All fields are mandatory <span class="astrik">*</span> </div>
                     <form action="{{route('procced-pay',$summary)}}" method="post" >
                        @csrf
            				<div class="row">
                              <div class="col-md-6 col-sm-12">
                                 <div class="form-group">
                                    <label>Payer's Country<span class="astrik">*</span></label>
                                    <select class="form-control Cfield selectpicker w-80"   data-live-search="true"  data-style="btn-info"  name="pay_country"  required="">
                                         <option value="" >Select Country</option>
                                        @foreach($countries->where('c_4_1_4_billing_address','Y') as $country)
                                       
                                              <option value="{{$country->c_4_1_2_country_name}}"   @if($summary->c_14_17_payer_country == $country->c_4_1_2_country_name)  selected @endif  >{{$country->c_4_1_2_country_name}}</option>

                                              
                                       @endforeach                
                                    </select>
                                 </div>
                              </div>
                                  {{-- <div class="patient_div  @if($summary->country->c_4_1_8_patient_use == 'N') col-md-6 @else col-md-12 row @endif  "> --}}
               					<div class=" col-sm-12 col-md-6  ">
               						<div class="form-group">
               							<label>Payer’s Full Name<span class="astrik">*</span></label>
               							<input type="text" class="form-control Cfield input-color" {{-- placeholder="Payment Maker’s Full Name"  --}}name="pay_name" value="{{old('pay_name',$summary->c_14_10_payer_full_name)}}" onkeyup="nameValidationWithSpecialChar(this)" maxlength="30" required="">
               						</div>
               					</div>
               					<div class="col-md-6 col-sm-12" @if($summary->country->c_4_1_8_patient_use == 'N') style="display: none;" @endif   @if(!empty($summary->c_14_19_patient_name) && $summary->c_14_19_patient_name == $summary->c_14_10_payer_full_name) style="display: none;" @endif>  
               						<div class="form-group">
               							<label>Relation with Patient<span class="astrik">*</span></label>
               							{{ $summary->c_14_19_patient_name ??'Patient' }} is the 
               					        <select class="form-control show-required Cfield d-inline-block col-md-5" name="pay_patient_relationship" required="">
                                          <option value="">Select Relation</option>
                                          <option value="Self"  @if($summary->c_14_11_patient_relation_payer == 'Self')  selected @endif   >Self</option>
                                          <option value="Husband"  @if($summary->c_14_11_patient_relation_payer =='Husband')  selected @endif >Husband</option>
                                          <option value="Wife"  @if($summary->c_14_11_patient_relation_payer =='Wife')  selected @endif >Wife</option>
                                          <option value="Father"  @if($summary->c_14_11_patient_relation_payer =='Father')  selected @endif >Father</option>
                                          <option value="Mother"  @if($summary->c_14_11_patient_relation_payer =='Mother')  selected @endif >Mother</option>
                                          <option value="Son"  @if($summary->c_14_11_patient_relation_payer =='Son')  selected @endif >Son</option>
                                          <option value="Daughter"  @if($summary->c_14_11_patient_relation_payer =='Daughter')  selected @endif >Daughter</option>
                                          <option value="Brother"  @if($summary->c_14_11_patient_relation_payer =='Brother')  selected @endif >Brother</option>
                                          <option value="Sister"  @if($summary->c_14_11_patient_relation_payer =='Sister')  selected @endif >Sister</option>
                                          <option value="Uncle"  @if($summary->c_14_11_patient_relation_payer =='Uncle')  selected @endif >Uncle</option>
                                          <option value="Aunt"  @if($summary->c_14_11_patient_relation_payer =='Aunt')  selected @endif >Aunt</option>
                                          <option value="Nephew"  @if($summary->c_14_11_patient_relation_payer =='Nephew')  selected @endif >Nephew</option>
                                          <option value="Niece"  @if($summary->c_14_11_patient_relation_payer =='Niece')  selected @endif >Niece</option>
                                          <option value="Friend"  @if($summary->c_14_11_patient_relation_payer =='Friend')  selected @endif >Friend</option>
                                          <option value="Forwarding Agent"  @if($summary->c_14_11_patient_relation_payer =='Forwarding Agent')  selected @endif >Forwarding Agent</option>
                                          <option value="Pet Owner"  @if($summary->c_14_11_patient_relation_payer =='Pet Owner')  selected @endif >Pet Owner</option>
                                          <option value="Other"  @if($summary->c_14_11_patient_relation_payer =='Other')  selected @endif >Other</option>
                                       </select>
               							of <span id ="c_14_10_payer_full_name">{{ $summary->c_14_10_payer_full_name  ?? 'Payment Maker' }}</span>  .
               						</div>
               					</div>
                         {{-- </div> --}}
					<div class="col-md-6 col-sm-12">
						<div class="form-group">
							<label>Address Line 1<span class="astrik">*</span></label>
							<input type="text" class="form-control Cfield input-color " {{-- placeholder="Address Line 1" --}} name="pay_address1" value="{{old('pay_address1',$summary->c_14_12_payer_address_line_1)}}" required=""  onkeyup="messageValidation(this)" maxlength="100">
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="form-group">
							<label>Address Line 2</label>
							<input type="text" class="form-control Cfield input-color" {{-- placeholder="Address Line 2" --}} name="pay_address2" value="{{old('pay_address2',$summary->c_14_13_payer_address_line_2)}}"  onkeyup="messageValidation(this)" maxlength="100">
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="form-group">
							<label>City<span class="astrik">*</span></label>
							<input type="text" class="form-control Cfield input-color" {{-- placeholder="City" --}} name="pay_city" value="{{old('pay_city',$summary->c_14_14_pay_city)}}" onkeyup="nameValidation(this)" maxlength="30" required="">
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="form-group">
							<label>State<span class="astrik">*</span></label>
							<input type="text" class="form-control Cfield input-color" {{-- placeholder="State" --}} name="pay_state" value="{{old('pay_state',$summary->c_14_15_payer_state)}}" onkeyup="nameValidation(this)" maxlength="30" required="">
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="form-group">
							<label>Postal Zip Code<span class="astrik">*</span></label>
							<input type="text" class="form-control Cfield input-color" {{-- placeholder="Postal Zip Code" --}} required=""  name="pay_zip" value="{{old('pay_zip',$summary->c_14_16_payer_zip)}}" onkeyup="postalValidation(this)" maxlength="15">
						</div>
					</div>
				
					<div class="col-md-6 col-sm-12">
						<div class="form-group">

							<label>Mobile/WhatsApp No. with ISD<span class="astrik">*</span></label>
							<input id="jquery-intl-phone" class="form-control Cfield input-color jquery-intl-phone" type="tel" {{-- placeholder="Contact no. with ISD Country Code" --}} name="pay_phone" value="{{old('pay_phone',$summary->c_14_18_payer_mobile)}}" required=""  onkeyup="phoneValidation(this)" minlength="7" maxlength="20">
						</div>
					</div>	
					
					<div class="col-md-12">
						<div class="form-group">
							<button class="common-btn green-bg float-right">Proceed to PAY MODE / ACCEPTANCE</button>
						</div>
					</div>
      				</div>
      			</form>
                  </div>
               </div>
            </div>
            @endif
            @if($summary->c_14_10_payer_full_name)

            <div class="accordion-box">
               <div class="login-inner  " id="payDetail" style="@if($summary->checkout_step>=4)display:block;@else  display: none; @endif">
                  <div data-toggle="collapse" data-target="#acctarget4" aria-expanded="false" aria-controls="acctarget4" class="acc-heading"><span>END USE & PAYMENT MODE </span><span class="acc-small-text">Select an End Use & the Payment Option <i class="fa fa-caret-down" aria-hidden="true"></i></span></div>
               </div>
               <div id="acctarget4" class="login-inner collapse  @if($summary->checkout_step==4) show @endif" aria-labelledby="heading4" data-parent="#accordion">
                  <form action="{{route('placed-order',$summary)}}" method="post"  enctype="multipart/form-data" id="checkout-form">
                     @csrf
                  <div class="accordion-content pay-content">
				         

					 <p class="font14 mt-4">



                  @if ($errors->any())
    <div class="text-danger mb-2">
        <ul>
            @foreach ($errors->all() as $error)
                <li><strong>{{ $error }}</strong></li>
            @endforeach
        </ul>
    </div>
@endif
                  <i class="font14 blue-text"><strong>Quality Assurance :</strong> All the Pharmaceutical Drugs ordered on 911GlobalMeds.com are shipped directly from Legal Registered Pharmacies, <strong>are approved for use for Human Treatment by the FDA of the manufacturing country</strong> and can also be used for conducting any R&amp;D/Test or Analysis/Scholarly studies.</i></p>
                     <p class="font13 grey-text fw-600 mt-2"><strong>Buyer’s Acceptance</strong>: I/We am/are capable / authorized to represent myself/shippee in placing this order for myself/shippee's behalf. <em>I/We have studied and accept the <a href="{{url('patient-authorization-agreement')}}" class="text-underline blue-text">Patient Authorization Agreement</a>, <a href="{{url('/terms-conditions-of-use')}}" target="_blank" class="text-underline blue-text">Terms of Use / Conditions,</a> <a href="{{url('/customer-agreement')}}" target="_blank" class="text-underline blue-text">Customer Agreement</a>, <a href="{{url('/disclaimer')}}" target="_blank" class="text-underline blue-text">Comprehensive & General Disclaimer </a>and the <a href="{{url('/privacy-policy')}}" target="_blank" class="text-underline blue-text">Privacy Policy</a> and all details as mentioned therein. As required by FDA regulations, I/we have also gone through the Drug Description carefully and before ordering, I/we have made myself/ourself fully aware of all the critical information like the Uses, Side Effects, How to Use, How the Drug Works, Related Warnings, Risks Vs Benefits, Caution and What If I/we Miss A Dose of the drug. I/we agree to bear any customs duty / other taxes payable at the destination country and that the order parcel will be delivered to me/us in the approximate days specified on the above Finalize Order section with additional days taken for Customs Clearance in the Shipment / Destination countries and any further Courier Delivery time / delays due to COVID-19 or any other unforeseen circumstances. I/we agree to email a copy of the Receiver’s ID document (like a Driver’s License, Passport copy etc.) for the Courier agency to accept the parcel booking and also send a copy of the Doctor’s Prescription / Scholarly Study Undertaking as per my/our selected End Use requirement of my/our Order. Further,</em></p>
      		     <strong class="">Please tick to select your End Use: <input class="" type="radio" name="doctorcheck" style="opacity: 0;" required=""></strong>
      		  
            		   <div class="form-check font14 mt-3 mb-3">
                        @if($summary->country->c_4_1_8_patient_use == 'Y')
                  			  <input class="form-check-input tccheck" id="doctorcheck" type="radio" name="doctorcheck"  value="1" required=""  >
                  			  <label class="form-check-label grey-text fw-600" for="">
                  					I/we undertake that the <a href="javascript:void(0)" data-toggle="modal" data-target="#drugsacceptance"><span class="blue-text">Pharmaceutical Drugs</span></a> ordered by me/us <span class="fw-700">are for an Individual Patient’s use and <font class="text-underline">REQUIRE A DOCTORS PRESCRIPTION for order acceptance</font>.</span>
                  					<div id="prescription-div" style="display: none;">			
                  					<span class="blue-text" id="prescription-text">Upload DOCTOR'S PRESCRIPTION (pdf / jpg) : </span> <input type="file"  name="prescription" placeholder="" accept="application/pdf, image/jpeg,image/png,image/jpg"  >  <a type="button" class="text-danger" id="prescription-button"
                  					><i class="fa fa-times" aria-hidden="true" onclick="return confirm('Do you want to REMOVE this prescription from your order ?')"></i></a>
                              <span id="span-error" class="text-danger"></span><br>
                                <span class="blue-text">OR email to WeCare@911GlobalMeds.com </span>
                  					</div>
                  				

                  			  </label>
                  			</div>
                           @endif
                        @if($summary->country->c_4_1_9_study_use == 'Y')

                  			<div class="form-check  font14 mb-0">
                  			  <input class="form-check-input tccheck" type="radio" name="doctorcheck" id="" value="2" required="" >
                  			  <label class="form-check-label grey-text fw-600" for="">
                  				I/we undertake that the <a href="javascript:void(0)" data-toggle="modal" data-target="#drugsacceptance"><span class="blue-text">Pharmaceutical Drugs</span></a> ordered by me/us <span class="fw-700">for a Scholarly Study / Tests or Analysis use only and <font class="text-underline">DO NOT REQUIRE A DOCTORS PRESCRIPTION.</font></span>
                  			  </label>
                  			</div>
                           @endif
                               <div class="order-submit-wrap order-submit-wrap2 mt-3">
                           <div class="cardpayment-option">
                              <div class="form-check form-check-inline selectoption">
                                 <label class="form-check-label" for="inlineRadio32"><strong>Select Payment Option :</strong></label>
                              </div>
                              @if($summary->payment_country && $summary->payment_country->c_4_1_6_priority_display != 'credit_card')
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input payBtn " type="radio" name="payment" id="fillcardNo" value="Bank"  @if($summary->c_14_93_pay_mode && $summary->c_14_93_pay_mode == 'Bank') checked @else checked  @endif required="" >
                                 <label class="form-check-label payBtn" for="fillcardNo"><strong>Bank Transfer</strong></label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input payBtn" type="radio" name="payment" id="fillcard" value="Credit Card" @if($summary->c_14_93_pay_mode && $summary->c_14_93_pay_mode == 'Credit Card') checked  @endif required="" >
                                 <label class="form-check-label payBtn" for="fillcard"><strong>Credit Card</strong></label>
                              </div>
                              @else
                                 <div class="form-check form-check-inline">
                                 <input class="form-check-input payBtn" type="radio" name="payment" id="fillcard" value="Credit Card" @if($summary->c_14_93_pay_mode && $summary->c_14_93_pay_mode == 'Credit Card') checked="" @else checked  @endif required="" >
                                 <label class="form-check-label payBtn" for="fillcard"><strong>Credit Card</strong></label>
                              </div>
                              @endif
                        {{-- <small class="font16  mb-2 d-block font-italic">Amount Payable (incl. of Freight )<span class="astrik">*</span>  --}}

                           
                          </small>
                              
                           </div>
                        </div>

                        @php $coupon_charges = $summary->c_14_76_promo_discount ?? 0;   @endphp 
                      <div class="fill-credit-card-detail-1" id="fillcreditcard" style="display:none;">
                        <p class="mb-0  blue-text">Amount Payable (incl. of Freight & Credit Card charges): <strong class="astrik">US$ 
                           {{ round(($summary->c_14_74_total_order_value +  $summary->c_14_77_shipping_charges  - $coupon_charges)*0.1  +$summary->c_14_74_total_order_value + $summary->c_14_77_shipping_charges  -  $coupon_charges) }}</strong><span class="astrik">*</span></p>
                      {{--   <div class="row text-left justify-content-end">  
                           <div class="col-md-3 col-sm-12">
                              <div class="form-group">
                                 <label>Full Name as on your Card</label>
                                 <input type="text" class="form-control Cfield input-color"  name="cc_name" placeholder="Full Name as on your Card" value="{{$summary->c_14_10_payer_full_name}}" >
                              </div>
                           </div>
                           <div class="col-md-3 col-sm-12">
                              <div class="form-group">
                                 <label>State & Country of Card Issuance</label>
                                 <input type="text" class="form-control Cfield input-color" placeholder="State & Country of Card Issuance" name="cc_state"  @if($summary->c_14_17_payer_country && $summary->c_14_15_payer_state) value="{{$summary->c_14_15_payer_state.', '.$summary->c_14_17_payer_country}}" @endif>                              </div>
                           </div>
                        </div> --}}
                        
                     </div>
                     <div class="fill-credit-card-detail-1" id="bankcard">
                        <p class="mb-0  blue-text">Amount Payable (incl. of Freight ): <strong class="astrik">US$ {{ round($summary->c_14_74_total_order_value + $summary->c_14_77_shipping_charges -  $coupon_charges) }}</strong><span class="astrik">*</span></p>
                     
                        
                     </div>
                     <div class="">     <small class="font16   mb-2  font-italic"><span class="astrik">*</span>amount details on Proforma Invoice page</div>
                    

                  			<div class=" mt-4">


                                  <label>Enter Characters as displayed in image</label>
                                    <div class="captcha">
                                          <button type="button" class="btn btn-danger reload reloadBtn" id="reload">
                                            &#x21bb;
                                        </button>
                                     
                                        <span>{!! captcha_img('flat') !!}</span></br>
                                    </div>
                                    <input id="captcha" type="text" class="form-control mt-3" placeholder="Enter Characters as displayed in image" name="captcha">

                  				<button  type="submit" class="common-btn green-bg mt-4" id="checkout-button">Proceed to COMPLETE ORDER </button>
                  			</div>
                              </div>
                        </form>
                </div>
                </div>
                @endif
                @endauth
             </div>
          </div>        
      </div>
      @else 
      <h4 class="text-center">Order is Empty</h4> 
      @endif
   </div>
</div>
<!-- Login cart Popup -->
	

<!-- Drugs acceptance Modal -->
<div class="modal fade" id="drugsacceptance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<button type="button" class="pop close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="modal-body">
		<div class="text-center">
		<p class="midblue-text"><strong style="font-size:16px;">Pharmaceutical Drugs</strong></p>
		<p class="font14">Your ordered Pharmaceutical Drugs (also referred to as medication, medicine or simply drug) are a finished formulation drug form approved for use for Human Treatment by the FDA of the manufacturing country and are medically used to diagnose, cure, treat, or prevent a disease. </p> 
		<p class="font14"><strong>The individual use REQUIRES A DOCTORS PRESCRIPTION for order acceptance</strong>.</p>
		<p class="font14">These Pharmaceutical Drugs may also be used for conducting further Research & Development, Bio-Equivalence Tests & Analysis or any other scholarly studies which is an important part of the medical field and relies on the science of pharmacology for continual advancement. <br><br>
		<strong>The R&D/Test or Analysis/Scholarly study use DOES NOT REQUIRE A DOCTORS PRESCRIPTION but requires an undertaking that the same will be used only for the stated purpose and not for any human use.</strong></p>
		</div>
      </div>
    </div>
  </div>
</div>
<!-- Drugs acceptance Modal End-->
@endsection
@section('afterScript')
<script type="text/javascript">

$('#parcel_reciver_name_checkbox').click(function (argument) {
      if($("#parcel_reciver_name_checkbox").prop('checked') == true){
    $('input[name="parcel_name"]').val($('input[name="patient_name"]').val());
     $('#c_14_22_parcel_receivers_full_name').text($('input[name="patient_name"]').val()+' is ');
      $('select[name="patient_relationship"]').val("Self").change();
      // $('.patient_div').hide();
      $('#c_14_22_parcel_receivers_full_name').parent().parent().hide()
      $('#c_14_19_patient_name').text(' as the Patient')
   
} else {
    $('input[name="parcel_name"]').val('');
      $('select[name="patient_relationship"]').val("").change(); 
      $('#c_14_22_parcel_receivers_full_name').parent().parent().show()

        $('#c_14_22_parcel_receivers_full_name').text('Parcel Receiver is the ');
        $('#c_14_19_patient_name').text(' of ' +$('input[name="patient_name"]').val())  ;
       }
})
        
        $('.payBtn').click(function (argument) {

        let payment_typ = $("input[name='payment']:checked").val();
        if(payment_typ == 'Bank'){

         $('#bankcard').show();
   		$('#fillcreditcard').hide();
        } else {
          $('#bankcard').hide();
         $('#fillcreditcard').show();
        }
})

        $('#finalizeOrder').click(function (argument) {
            $('#deliveryDetail').hide();
            $('#billingDetail').hide();
            $('#payDetail').hide();
        })
         $('#deliveryDetail').click(function (argument) {
            $('#billingDetail').hide();
            $('#payDetail').hide();
        })
          $('#billingDetail').click(function (argument) {
            $('#payDetail').hide();
        })

</script>

<script type="text/javascript">
   
$('#applyCoupon').click(function (argument) {
      
      let coupon =  $('#coupon_code').val();
      if(!coupon){
         $('#coupon_error').text('Please apply coupon ');
         return false;
      }

        $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
               $.ajax({
                  url: "{{route('coupon.apply')}}",
                  method: 'get',
                  data: {
                     coupon: coupon,
                  },
                  success: function(data){
                      
                        if(data.status) {
                           $('#coupon_row').show()
                           $('#coupon_value').text(data.coupon.value);
                           $('#coupon_text').text('Referral Code applied : '+data.coupon.name );
                           $('#cart_total').text(data.coupon.discount_total);
                            $('#coupon_code').val('');
                             $('#coupon_error').text(data.msg);

                        } else {
                             $('#coupon_error').text(data.msg);

                        }
                  }
                    
                  })

})

$('input[type="number"]').change(function (argument) {
       let id =  $(this).attr('data-id');
          let qty = $(this).val();
        if(qty >=1){
       qty = parseInt(qty) ;
      updateCart(id,qty);
     }
  })
$('.addCart').click(function (e) {
   let id =  $(this).attr('data-id');
   let qty = $('.qty'+id).val();
   if(qty >=1){
      qty = parseInt(qty) + 1;
      updateCart(id,qty);
   }

})
$('.subCart').click(function (e) {
   let id =  $(this).attr('data-id');
   let qty = $('.qty'+id).val();
   if(qty >1){
      qty = parseInt(qty) - 1;
      updateCart(id,qty);
   }

})
$(document).ready(function (argument) {
let required_class = "{{$summary->country->c_4_1_8_patient_use}}";
if(required_class=='N'){
$('.show-required').attr('required',false);
}
   // body...
})
function updateCart(id,qty) {
        $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
               $.ajax({
                  url: "{{route('order_details.update')}}",
                  method: 'post',
                  data: {
                     id: id,
                     qty: qty,
                  },
                  success: function(data){
                        $.each(data.errors, function(key, value){
                           $('#query-error2').show();
                           $('#query-error2').append('<p>'+value+'</p>');
                        });
                        if(data.status) {

                           $('.price'+id).text(data.price);
                           $('.qty'+id).val(data.quantity);
                           $('.total-price'+id).text(data.total_amount);
                           $('#cart_total').text(data.total);
                        } else {

                        }
                  }
                    
                  })
}


$('#country_freight').change(function (e) {
   let country_id = $(this).val();

         $.ajax({
                  url: "{{url('country-freight')}}/"+country_id,
                  method: 'get',
                  success: function(data){
                  let html ='';
                     if(data.data){
                  if(data.data.c_4_1_11_delivery_start && data.data.c_4_1_12_delivery_end){
                        
                        html = ' Arrival at '+data.data.c_4_1_2_country_name+' Customs: <strong>'+data.data.c_4_1_11_delivery_start+ '-'+ data.data.c_4_1_12_delivery_end+' working days</strong><br>';
                       if(data.data.c_4_1_7_customs_clearance == 'Y'){
                       html += '<strong>We offer Customs Clearance Services for '+data.data.c_4_1_2_country_name + '.</strong>'
                       }
                        
                        } else {
                           // html += 'No result found';
                        }
                        $('#shipping-option-parent').show();
                       $('#shipping-option').html(html)
                     } else {

                        $('#shipping-option-parent').show();
                       $('#shipping-option').html('no result found');
                     }
                  }
                    
                  })
})

	

$('input[name="prescription"]').change(function (argument) {
	$('#prescription-text').text('Document Uploaded : ');
})
$('select[name="pay_country"]').change(function (argument) {
  let current_country = $(this).val();
 

   
      $('input[name=pay_name]').val('');
      $('input[name=pay_address1]').val('');
      $('input[name=pay_address2]').val('');
      $('input[name=pay_city]').val('');
      $('input[name=pay_state]').val('');
      $('input[name=pay_zip]').val('');
      $('input[name=pay_phone]').val('');
      $('select[name="pay_patient_relationship"]').val("").change();
})
$('input[name="doctorcheck"]').click(function (argument) {
	

	   $('#prescription-div').toggle();
	   if($(this).val() == 1){
	   	// $('input[name="prescription"]').attr('required',true);
	   } else {
	   	$('#prescription-div').hide();
	   	$('input[name="prescription"]').attr('required',false);
	   }
	

	    
})

$('#prescription-button').click(function (argument) {
	$('input[name="prescription"]').val('')
	$('#prescription-text').text("Upload DOCTOR'S PRESCRIPTION (pdf / jpg) :");
})

$('input[name="parcel_name"]').change(function (argument) {
   $('#c_14_22_parcel_receivers_full_name').text($('input[name="parcel_name"]').val()+' is the ');
})

$('input[name="patient_name"]').change(function (argument) {
   $('#c_14_19_patient_name').text('of '+$('input[name="patient_name"]').val());

})
$('input[name="pay_name"]').change(function (argument) {
   $('#c_14_10_payer_full_name').text($('input[name="pay_name"]').val());

})

function scrolltoview() {
  const element = document.getElementById("scrolltoview");
  element.scrollIntoView(true);
}

   // scrolltoview();
  $('input[name="prescription"]').change(function(e){
    var ext = $('input[name="prescription"]').val().split('.').pop().toLowerCase();
      if($.inArray(ext, ['jpg','png','pdf','jpeg']) == -1) {
         $('input[name="prescription"]').val('')
         $('#span-error').text("Please upload in 'jpg','jpeg','png' or 'pdf' formats only." );
          setTimeout(()=>{ $('#span-error').text('')  }, 2000);
          return false;
      }
   })
$('#checkout-form').on('submit', function(e){ 



   // alert('YOUR INVOICE IS BEING CREATED ! DO NOT press the “Proceed for PROFORMA INVOICE” button again !!')
   $('#checkout-button').attr('disabled','disabled');
   $('#checkout-button').css('cursor','progress');

})


</script>

@endsection
