@extends('layouts.front')

@section('content')

<style type="text/css">
	
	.blue-text a:hover {
		color: #00BAAB;
	}
	.blue-text a {
		text-decoration: underline;
	}
</style>

<section class="inner-page pt-0 pb-0" >

   <div class="container">

      <div class="innerfastrefill">

         <div class="breadcrumbs">

            <ul>

               <li><a href="{{ url('/') }}">Home</a></li>

               <li>Refer a Friend</li>

            </ul>

		
      </ul>

         </div>

         <div class="content-part categorypage mt-3" >

            <div class="common-heading text-center mb-4">

               <h1 class="font30 fw-600 green-text">High Quality Drugs @ Affordable Prices<br>HELP YOUR FRIENDS GET GLOBAL MEDICATIONS</h1> 

               <h2 class="font20 blue-text"><strong>Maximum Branded & Generic Drugs Online @ Minimum Prices</strong></h2>

            </div>
            <div class="border-line"></div>


            	<div class="my-5">
      				<img src="{{ asset('img/refer-a-friend-1.webp') }}" style="border-radius: 12px">
				</div>
				</div>


            <div class="common-heading text-center mb-4" id="scrolltoview">

               <h1 class="font30 fw-600 green-text">As our Happy & Satisfied Customer,<br><br>You just need to send a Promo Code ***  </h1> 

               <h2 class="font20 blue-text"><strong>* send a Promo Code @auth
							<font style="color: #314555">{{ $user->coupon_code }}</font>
						 @endauth to your friends / relatives in  <a href="" data-toggle="modal" data-target="#mail-modal" aria-hidden="true" > this mail / message format.</a>  </strong></h2><br><br>
					
      				<img src="{{ asset('img/refer-a-friend-2.webp') }}" width="400px"> 
               <h1 class="font30 fw-600 green-text">& our Software will apply the Discount to your friend <br>and keep Your Wallet updated with your Cash-Back Earnings.   </h1> 

            </div>
            <section class="login-process" >
   <div class="container">
     <div class="process-accordion pb-1">
	 <div class="common-accordion cartaccordion">
     <div id="accordion">
     	@guest
      <div class="accordion-box" >
         <div class="login-innernew" id="termsuse-heading">
            <div data-toggle="collapse" data-target="#termsuse" aria-expanded="false" aria-controls="termsuse" class="acc-heading collapsed blue-bg">LOGIN TO SEE YOUR WALLET DETAILS :<i class="fa fa-caret-down" aria-hidden="true"></i></div>		
         </div>
		  <div  id="termsuse" class="login-inner collapse   show " aria-labelledby="termsuse-heading" data-parent="#accordion">
		  <div class="accordion-content">
            <form action="{{route('user-login')}}" method="post">
				@csrf

				   @if (Session::has('error'))
                             <div class="container">
                                 <div class="alert alert-danger">
                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                     {{ Session::get('error') }}
                                 </div>
                             </div>
                         @endif
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="form-group">
							<label>Email Address </label>
							<input type="email" name="email" class="form-control Cfield" placeholder="Your Email registered with us"  maxlength="50" onchange="emailValidation(this)" value="{{old('email')}}">
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="form-group showhide">
							<label>Password</label>
							<input type="password" name="password" class="form-control Cfield " placeholder="Your Password registered with us" >
							<i class="fa fa-eye showhide-icon " onclick="ShowHidePassword(this)"></i>
						</div>
					</div>
					<div class="col-md-6 col-sm-12">
						<span class="black-text">Forgot Password?<br> <a href="" data-toggle="modal" data-target="#forgotpassword" data-target=".bd-example-modal-lg" class="green-text text-underline">CLICK HERE</a> for password reminder by email.</span>
					</div>
					<div class="col-md-6 col-sm-12">
						<div class="form-group">
							<input type="hidden" name="url" value="{{ $user->wallet_id }}">
							<button class="common-btn blue-bg">LOGIN to Proceed</button>
						</div>
					</div>
				</div>
			</form>
          </div>
          </div>
      </div>
 @else
	  <div class="accordion-box">
         <div class="login-innernew" id="newcustomer-heading"> 
              <div class="pos-rel">
            <div data-toggle="collapse" data-target="#newcustomer" aria-expanded="true" aria-controls="newcustomer" class="acc-heading  green-bg">WALLET BALANCE : <span>Contact WeCare@911GlobalMeds.com for any issues related to Wallet Balance </span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
             </div>
         </div>
		  <div  id="newcustomer" class="login-inner collapse show" aria-labelledby="newcustomer-heading" data-parent="#accordion">
		  <div class="accordion-content">
          	<div class="our-history">
								<div class="row">
									{{-- <div class="col-md-12">
										<div class="account-search">
											<label>Search:<input type="search" class="form-control" placeholder=""></label>
										</div>
									</div> --}}
									<div class="col-md-12">

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
				                    <form action="{{ route('apply_wallet') }}" method="post"  >
				                    	@csrf
				                    		<b class=" font14 float-right mb-3 ">Your current Wallet Balance is  <span class="font20 green-text">US$ <span id="currentBaladnce">{{ $user->balance }}</span> </span>: <br> Apply  <i class="fa fa-question-circle" data-toggle="modal" data-target="#quetion-modal" aria-hidden="true" style="font-size: 20px;color: #00baab;cursor: pointer;" >  </i> 

				                    		 US$ <input type="text" required="" name="amount" min="0" style="width: 100px;"  onkeyup="numberValidation(this)" value="{{ old('amounts')}}"> to your Invoice no. <span class="font20 green-text">MYT-</span><input type="text" name="order_id" min="0" required=""   style="width: 100px;"  onkeyup="numberValidation(this)" value="{{ old('order_id') }}">  <br><button type="submit" class="common-btn green-bg" style="height: 35px;">SUBMIT</button> </b>
				                    </form>
								
								</div>
									<div class="col-md-12">
										<div class="table-responsive  refer-table">
											  <table class="table" id="data_tableq">
											    <thead class="thead-dark">
											
												<tr>
												  <th scope="col" class="sorting_1"><span>Order No.</th>
												  <th scope="col">Date</th>
												  <th scope="col">Buyer & Country</th>
												  <th scope="col">Order Value</th>
												  <th scope="col">Earnings @ 2.5%</th>
												  <th scope="col">Amount Used</th>
												  <th scope="col">Wallet Balance </th>
												</tr>
											  </thead>
											  <tbody>

											  	@php $balance = 0; @endphp
                                             @foreach($orders->sortby('id') as $key => $order)
							       	<tr>
                   					     <td>{{$order->c_14_2_online_invoice_no}}</td>
								   <td>{{$order->created_at->format('d-m-Y')}}</td>
								   <td>{{$order->c_14_10_payer_full_name}}, {{$order->c_14_17_payer_country}}</td>
								   <td>{{ $order->c_14_96_forex_received }}</td>

								  <td> 

								   @if($order->transaction_type == 'CREDIT') 
											  	@php $balance +=$order->wallet_amount; @endphp
								   {{ $order->wallet_amount }}
								   @endif
								</td>
								  <td>  @if($order->transaction_type == 'DEBIT') 
											  	@php $balance -=$order->wallet_amount; @endphp

								   {{ $order->wallet_amount }}
								   @endif</td>
								  <td>	
								  	@if($loop->last)
								  			
								  			<span id="total_balance">{{ $balance }}</span>
								  			@else
								  			{{ $balance }}

								  			@endif
								  </td>
						
                  			
								</tr>
                @endforeach
											  </tbody>
											  </table>
											</div>
										
									</div>
								</div>
							</div>
          </div>
          </div>
      </div>
     @endguest
    </div>
    </div>
    </div>
   </div>
</section>

			

			

         </div>

      </div>

   </div>

</section>

<div class="modal fade" id="quetion-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title green-text" id="exampleModalLabel">APPLY YOUR ‘ WALLET BALANCE ’ :   </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<p>
      		<ul>
      			<li class="mb-4">1. To use the Wallet Balance, place an Order for the medications you want.</li>
      			<li class="mb-4">2. Fill the Wallet Amount you want to use and the Order Invoice no. & SUBMIT </li>
      			<li class="mb-4">3. Our Accounts Dept will check the details, deduct the amount from the order & send you a Confirmation Mail to proceed with the payment.</li>

      		</ul>
      	</p>

      </div>
 
    </div>
  </div>
</div>

<div class="modal fade" id="mail-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title green-text" id="exampleModalLabel">REFER A FRIEND : MAIL FORMAT  </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<p>
      		<p>Hello <i>(name of your friend or relative)</i> </p>
			<p>How are you? </p>

 
<p>I have got a pleasant and most satisfactory medications buying experience at www.911GlobalMeds.com  
<br>
<br>
 
You may see their Customer Reviews at https://www.911globalmeds.com/reviews-testimonials  
<br>
and if you need any Brand or Generic medicines from them,   
<br>
you can use my <b>Promo Code Coupon (
	@auth
	<u style="text-decoration: underline;">{{ $user->coupon_code }}</u>
	@endauth
	 ) </b>on their site to get a Discount of  US$ 25. 

 </p>
<p>
Wishing you good health. 
 <br>
@auth
{{ $user->name }}
@endauth 
</p>
      	</p>

      </div>
 
    </div>
  </div>
</div>




@endsection

@section('afterScript')

<script type="text/javascript">
$('#data_tableq').dataTable({
  "order": [[ 0, 'desc' ]]
})

  const balanceID = document.getElementById("total_balance");
  let userBalance = 0;
if(balanceID){
	userBalance = balanceID.innerText;
}
$('#currentBalance').text(userBalance);

function scrolltoview() {
  const element = document.getElementById("scrolltoview");
  element.scrollIntoView();
}

   scrolltoview();
</script>
@endsection