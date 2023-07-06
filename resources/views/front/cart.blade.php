@extends('layouts.front')
@section('content')

<section class="inner-page medication-page">
<div class="container">
   <div class="breadcrumbs mt-3" id="cartID">
      <ul>
         <li><a href="{{url('/')}}">Home</a></li>
         <li><a href="{{url('medication')}}">Medication </a></li>
         <li>Cart & Checkout</li>
      </ul>
      <ul class="comenext">
         <li>Next Page</li>
         <li>Proforma Invoice</li>
      </ul>
   </div>
   <div class="inner-wrapper"> 
{{--       <div class="promise-container m-view">
         <div class="promise-wrap">
            <div class="promise-box">
               <span class=""><i class="fa fa-plane" aria-hidden="true"></i></span>
               <p>Global Express Shipping : <br>at Actual Costs only</p>
            </div>
            <div class="promise-box calen">
               <span class=""><img src="{{asset('/img/Calender-icon.webp')}}" alt=""></span>
               <p>Superfast Delivery : <br>3-7 working days*</p>
            </div>
            <div class="promise-box">
               <img src="img/Lowest-Price.webp" alt="">
            </div>
            <div class="promise-box">
               <span class=""><img src="{{asset('/img/prescription.png')}}" alt=""></span>
               <p>Rx Prescription Required <br>for Human Use</p>
            </div>
            <div class="promise-box microscope">
               <span class=""><img src="{{asset('/img/lab-microscope.png')}}" alt=""></span>
               <p>Ut Undertaking Required <br>for R&amp;D Scholarly Studies</p>
            </div>
         </div>
      </div> --}}
      <div class="border-line green-bg"></div>
      @if(count($cartItems) >0)
      <div class="process-accordion">
         <div class="common-accordion cartaccordion">
            <div id="accordion">
            <div class="accordion-box">
               <div class="login-inner" id="heading1">
                  <div data-toggle="collapse" data-target="#acctarget1" aria-expanded="true" aria-controls="acctarget1" class="acc-heading collapsed"><span>FINALIZE ORDER</span><span class="acc-small-text">Change Quantity or Add New Medicines <i class="fa fa-caret-down" aria-hidden="true"></i></span></div>
               </div>
               <div id="acctarget1" class="login-inner collapse show" aria-labelledby="heading1" data-parent="#accordion">
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
                           @foreach($cartItems as $item)
                              <tr>
                                 <!--td align="left">009703</td-->
                                 <td align="left" class="ult">
                                    <div class="orderproduct">
                                      @if($item->attributes->image)
                                       <a href="{{asset('/img-me/'.$item->attributes->image)}}"  data-fancybox="" data-caption="" >
                                       <img src="{{asset('/img-me/'.$item->attributes->image)}}" alt="tablet capsules injection medicine icon">
                                       </a>
                                       @else
                                       <img src="{{asset('img-me/default-icon.webp')}}" alt="tablet capsules injection medicine icon">
                                       @endif

                                      <span><a  @if($item->attributes) href="{{url('/'.$item->attributes->model['meds_name']['c_1_1_4_frontend_url'] ??'')}}"   @endif>{{$item->name}}</a></span>
                                    </div>
                                 </td>
                                 <td align="center">
                                    {{$item->attributes->pack}}  {{$item->attributes->unit}} x <br>
                                    <div class="countCart" id="field1"><button type="button" data-id="{{$item->id}}"  id="subCart" class="subCart" >-</button><input type="number" id="1" class="qty{{$item->id}}" data-id="{{$item->id}}" value="{{$item->quantity}}" min="1" ><button type="button" data-id="{{$item->id}}" id="addCart" class="addCart">+</button></div>
                                 </td>
                                 <td align="center">US$ <span class="price{{$item->id}}">{{$item->price}}</span></td>
                                 <td align="center"><strong>US$ <span class="total-price{{$item->id}}">{{$item->price*$item->quantity}}</span></strong></td>
                                 <td align="center">
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" value="{{ $item->id }}" name="id">
                                         <button type="submit" data-toggle="tooltip" data-placement="top" title="" data-original-title=""><i class="fa fa-trash-o" aria-hidden="true" onclick="return confirm('Do you want to REMOVE this drug from your order ?')"></i></button>
                                      </form>
                                   </td>
                              </tr>
                           @endforeach
                           @php $condition = Cart::getCondition('coupon');    @endphp
                             @if($condition)
                                  <tr id="coupon_row" >
                                 <td colspan="3" class="text-right"><strong id="coupon_text">Referral Code applied : {{ $condition->getName() }}</strong></td>
                                 <td align="center" style="color:#00a2ed;padding-top:15px;padding-bottom:15px;"><strong>US$ <span id="coupon_value">{{ $condition->getValue() }}</span></strong></td>
                                 <td>&nbsp;</td>
                              </tr>
                              <tr>
                                 <td colspan="3" class="text-right"><strong>Sub-Total </strong></td>
                                 <td align="center" style="color:#00a2ed;padding-top:15px;padding-bottom:15px;"><strong>US$ <span id="cart_total">{{Cart::getTotal() - $condition->getValue()}}</span></strong></td>
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
                                 <td align="center" style="color:#00a2ed;padding-top:15px;padding-bottom:15px;"><strong>US$ <span id="cart_total">{{Cart::getTotal()}}</span></strong></td>
                                 <td>&nbsp;</td>
                              </tr>
                              @endif
                           </tbody>
                        </table>
                     </div>
                     <div class="order-submit">
                         @auth
                          <form  action="{{route('procced-delivery')}}"  method="post">
                             @csrf
                          <div class="order-submit-wrap">
                             <div class="order-submit-details">
                              <p class="mb-0">Send a Refill Reminder after <span class="astrik"> <br>* fill <font  color="black"><strong>0</strong></font> if no reminder required.</span></p>
                                
                                <input type="text" class="form-control num-days" required="" name="days" onkeypress="return /[0-9]/.test(event.key)">
                              <span>  days <span class="astrik">* </span></span>
                         
                             
                             </div>
                          </div>
                          <div class="order-submit-wrap w-100">
                             <div class="order-submit-details">
                                <b class="mb-0 mr-2"> Select/Confirm Country<span class="astrik">*</span></b>

                                <select class="form-control selectpicker bg-dark w-80"   data-live-search="true"  data-style="btn-info" id="country_freight" required="" name="country">
                                   <option value="" >Select Country</option>
                                   @foreach($countries as $country)
                                   <option value="{{$country->id}}" @if($country_id == $country->id) selected="" @endif>{{$country->c_4_1_2_country_name}}</option>
                                   @endforeach
                                </select>
                                <span class="ml-2"> <strong>for Delivery.</strong></span>
                             </div>
                          </div>
                          <div class="order-submit-wrap">
                             <div class="shipping-option" id="shipping-option">
                                                   				
                             </div>
                          </div>
           					      <div class="row">
                                   <div class="col-md-12 text-right mt-2">
                                   <button type="submit" class="common-btn green-bg mt-2">Proceed to DELIVERY DETAILS</button>
                                 
                                </div>
                             </div>
                          </form>
                        @else
                              <div class="row">
                                   <div class="col-md-12 text-right mt-2">
                                       <button type="button" class="common-btn green-bg" data-toggle="modal" data-target="#lohin-signup">LOGIN / REGISTER</button><br>
                                    </div>
                              </div>
                         @endauth
                           <div class="row">
         						<div class="col-md-3 orderdrugs">
         					<div class="custom-search carttypesearch">
         							<i>Do you want to order any more drugs?</i>
                      <p></p>
         							<form class="search-form byTyping">
         								<div class="input-group">
         								  <input type="text" id="order_search" class="form-control" placeholder="Search by Brand or Generic Name" aria-label="Do you want to order any more drugs?" aria-describedby="basic-addon2">
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
                       <div class="promise-container ">
                         <div class="promise-wrap">
                            <div class="promise-box">
                               <span class=""><i class="fa fa-plane" aria-hidden="true"></i></span>
                               <p>Global Express Shipping : <br>at Actual Costs only</p>
                            </div>
                            <div class="promise-box calen">
                               <span class=""><img src="{{asset('/img/Calender-icon.webp')}}" alt=""></span>
                               <p>Superfast Delivery : <br>3-7 working days*</p>
                            </div>
                            <div class="promise-box">
                               <img src="img/Lowest-Price.webp" alt="">
                            </div>
                            <div class="promise-box">
                               <span class=""><img src="{{asset('/img/prescription.png')}}" alt=""></span>
                               <p>Rx Prescription Required <br>for Human Use</p>
                            </div>
                            <div class="promise-box microscope">
                               <span class=""><img src="{{asset('/img/lab-microscope.png')}}" alt=""></span>
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
      
             </div>
          </div>        
      </div>
      @else 
      <h4 class="text-center">Your Cart is currently Empty ! </h4> 
      <h4 class="text-center"> Select a Medication</h4>
      <div class="row ">
      <div class="input-group col-md-4">
       
      </div>
      <div class="col-md-4">
      <div class="input-group ">
                          <input type="text" id="order_search" class="form-control" placeholder="Search by Brand or Generic Name" aria-label="Do you want to order any more drugs?" aria-describedby="basic-addon2">
                          <span class="input-group-btn">
                          <button name="submit" id="submit" type="submit" class="grey-bg btn btn-1"><span class="fa fa-search font18"></span></button>
                          </span>
                        </div>
      <div id="order_result"></div>
    </div>
    </div>
      <h4 class="text-center"> to visit page & Add To Cart</h4>

      @endif

    
   </div>
</div>
<!-- Login cart Popup -->
	
<div class="modal fade bd-example-modal-lg" id="lohin-signup" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content cartpopup">
      <div class="modal-header">
        <div class="font20">Account Login / Create an Account</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="common-accordion" id="accordion1">				
			<div class="accordion-box">
				<div class="login-inner" id="heading5">
					<div data-toggle="collapse" data-target="#acctarget5" aria-expanded="false" aria-controls="acctarget5" class="acc-heading"><span>EXISTING CUSTOMERS:</span><span class="acc-small-text"> If you have shopped with us before, Please Login from below <i class="fa fa-caret-down" aria-hidden="true"></i></span></div>
				</div>
				<div id="acctarget5" class="login-inner collapse" aria-labelledby="heading5" data-parent="#accordion1">
					<div class="accordion-content">
					
						<form action="{{route('user-login')}}" method="post" id="loginForm1">
                 @csrf


                <p id="login-error1" class="text-danger"></p>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Login Email</label>
										<input type="email" class="form-control Cfield" name="email" placeholder="Your Login Email registered with us" id="login-email1" required="" maxlength="50" onchange="emailValidation(this)"  >
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group showhide">
										<label>Login Password</label>
										<input type="password" class="form-control Cfield" name="password" placeholder="Your Login Password registered with us" id="login-password1" required="">
                    <i class="fa fa-eye showhide-icon " onclick="ShowHidePassword(this)"></i>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
						  <span class="black-text">Forgot Password?<br> <a href="#" id="forgotpassword-button2"  class="green-text text-underline">CLICK HERE</a> for password reminder by email.</span>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">

										<button type="submit" class="common-btn blue-bg">LOGIN to Proceed</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="accordion-box">
				<div class="login-inner" id="heading6">
					<div data-toggle="collapse" data-target="#acctarget6" aria-expanded="true" aria-controls="acctarget6" class="acc-heading green-bg"><span>NEW CUSTOMERS:</span><span class="acc-small-text"> First Time Buyers, please provide some basic details <i class="fa fa-caret-down" aria-hidden="true"></i></span></div>
				</div>
				<div id="acctarget6" class="login-inner collapse show" aria-labelledby="heading" data-parent="#accordion1">
					<div class="accordion-content">
						<form action="{{route('register')}}" method="post" id="registerForm">
							@csrf
                <p id="register-error" class="text-danger"></p>

						<div class="fielsmend">All fields are mandatory <span class="astrik">*</span> </div>
						<div class="row">
							
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Name<span class="astrik">*</span></label>
									<input type="text" name="name" class="form-control Cfield" placeholder="Your Full Name" required="" id="register-name" onkeyup="nameValidation(this)" maxlength="30">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Country<span class="astrik">*</span></label>
									<select class="form-control Cfield" required="" name="country" id="register-country">
										<option value="">Your Country of Residence</option>
										@foreach($countries as $country)
										<option value="{{$country->c_4_1_2_country_name}}">{{$country->c_4_1_2_country_name}}</option>
										@endforeach
										
									</select>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Email LogIn<span class="astrik">*</span></label>
									<input type="email" class="form-control Cfield" name="email" placeholder="Your Email to be used for LogIn" required="" id="register-email"  maxlength="50" onchange="emailValidation(this)" >
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Mobile Contact<span class="astrik">*</span></label>
									<input type="text" class="form-control Cfield" placeholder="Your Mobile / Whatsapp No." required="" name="mobile" id="register-mobile" onkeyup="phoneValidation(this)">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group showhide">
									{{-- <label>Enter LogIn Password</label> --}}
									<div class="mb-2"><span class="label-color">Enter LogIn Password </span> <span class="astrik">*</span> <span class="fielsmend"> (must be min. 8 characters)</span> </div>
									<input type="password" class="form-control Cfield" placeholder="The Login Password you want" required="" name="password" id="register-password">
                  <i class="fa fa-eye showhide-icon " onclick="ShowHidePassword(this)"></i>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group showhide">
									<label>Reconfirm LogIn Password<span class="astrik">*</span></label>
									<input type="password" class="form-control Cfield" placeholder="Reconfirm your required Password" required="" name="password_confirmation" id="register-confirm">
                  <i class="fa fa-eye showhide-icon " onclick="ShowHidePassword(this)"></i>
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
								<div class="form-group">
									<button type="submit" class="btn nobtn green-bg">REGISTER to Proceed</button>
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
  </div>
</div>
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

$(document).ready(function (argument) {
   $('html, body').animate({
        scrollTop: $("#cartID").offset().top -300
    }, 2000);
})
$('.subCart').click(function (e) {
   let id =  $(this).attr('data-id');
   let qty = $('.qty'+id).val();
   if(qty >1){
      qty = parseInt(qty) - 1;
      updateCart(id,qty);
   }

})
function updateCart(id,qty) {
        $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
               $.ajax({
                  url: "{{route('cart.update')}}",
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

                           $('.price'+id).text(data.cart.price);
                           $('.qty'+id).val(data.cart.quantity);
                           $('.total-price'+id).text(data.cart.price*data.cart.quantity);
                           $('#cart_total').text(data.total);
                        } else {
                        	alert(data.msg);
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
                       html += '<strong>We offer Customs Clearance Services for '+data.data.c_4_1_2_country_name+'.</strong>'
                       }
                        
                        } else {
                        	// html += 'No result found';
                        }

                       $('#shipping-option').html(html)
                     } else {

                       $('#shipping-option').html('no result found');
                     }
                  }
                    
                  })
})



    $('#loginForm1').on('submit', function(e){
        e.preventDefault();
  
  let email = $('#login-email1').val();
  let password = $('#login-password1').val();

     $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
               $.ajax({
                  url: "{{route('user-login')}}",
                  method: 'post',
                  data: {
                     email: email,
                     password: password,
                  },
                  success: function(data){
                      
                        if(data.status) {
                            location.reload();
                        } else {
                            $('#login-error1').html('<b>'+data.msg+'</b>');
                        }
                  },
                   error: function(data){
                // Something went wrong
                // HERE you can handle asynchronously the response 

                // Log in the console
                var errors = data.responseJSON;
                    $.each(errors.errors, function(key, value){
                          
                           $('#register-error1').append('<b>'+value+'</b>');
                        });
                }
                    
                  })


    });

        $('#registerForm').on('submit', function(e){
        e.preventDefault();
  
  let email = $('#register-email').val();
  let name = $('#register-name').val();
  let country = $('#register-country').val();
  let password = $('#register-password').val();
  let confirm = $('#register-confirm').val();
  let mobile = $('#register-mobile').val();

     $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });

        let formData = new FormData(this);

               $.ajax({
                  url: "{{route('user-register')}}",
                  method: 'post',
                    method: 'post',
                    processData: false,
                   contentType: false,
                  data:formData,
                  // data: {
                  //    email: email,
                  //    password: password,
                  //    country: country,
                  //    password_confirmation: confirm,
                  //    name:name,
                  //    mobile:mobile
                  // },
                  success: function(data){
                    
                        if(data.status) {
                            location.reload();
                        } else {
                            $('#register-error').html('<b>'+data.msg+'</b>');
                        }
                  },
                  error: function(data){
                // Something went wrong
                // HERE you can handle asynchronously the response 

                // Log in the console
                var errors = data.responseJSON;
                    $.each(errors.errors, function(key, value){
                          
                           $('#register-error').append('<b>'+value+'</b>');
                        });
                }
                    
                  })


    });


        $('#forgotpassword-button2').click(function (argument) {
        
          $('#lohin-signup').modal('hide');
    $('#forgotpassword').modal('show');


        })

</script>

@endsection
