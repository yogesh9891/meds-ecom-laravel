@extends('layouts.front')
@section('content')
@section('seo_section')


<title>Login | 911GlobalMeds.com </title>
@endsection
<div class="inner-page">
<div class="container">
   <div class="breadcrumbs">
      <ul>
         <li><a href="home-page.html">Home</a></li>
         <li>Account Login / Create an Account</li>
      </ul>
   </div>
</div>
<div class="promise-container pt-3 pb-3">
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
				<img src="{{asset('/img/Lowest-Price.webp')}}" alt="">
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


<section class="login-process">
   <div class="container">
     <div class="process-accordion pb-1">
	 <div class="common-accordion cartaccordion">
     <div id="accordion">
      <div class="accordion-box">
         <div class="login-innernew" id="termsuse-heading">
            <div data-toggle="collapse" data-target="#termsuse" aria-expanded="false" aria-controls="termsuse" class="acc-heading collapsed blue-bg">Existing Customers: <span>If you have shopped with us before, Please Login from below</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>		
         </div>
		  <div  id="termsuse" class="login-inner collapse  @if(Session::has('error')) show @endif" aria-labelledby="termsuse-heading" data-parent="#accordion">
		  <div class="accordion-content">
            <form action="{{url('user-login')}}" method="post">
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
							<button class="common-btn blue-bg">LOGIN to Proceed</button>
						</div>
					</div>
				</div>
			</form>
          </div>
          </div>
      </div>
 
	  <div class="accordion-box">
         <div class="login-innernew" id="newcustomer-heading"> 
              <div class="pos-rel">
            <div data-toggle="collapse" data-target="#newcustomer" aria-expanded="true" aria-controls="newcustomer" class="acc-heading collapsed green-bg">NEW CUSTOMERS: <span>First Time Buyers, please provide some basic details</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
             </div>
         </div>
		  <div  id="newcustomer" class="login-inner collapse @if(!Session::has('error')) show @endif" aria-labelledby="newcustomer-heading" data-parent="#accordion">
		  <div class="accordion-content">
		  <div class="fielsmend">All fields are mandatory <span class="astrik">*</span> </div>
            <form action="{{route('user-register')}}" method="post">
				@csrf
				@if ($errors->any())
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				@endif
            @if (Session::has('error2'))
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
									<label>Name<span class="astrik">*</span></label>
									<input type="text" name="name" class="form-control Cfield" placeholder="Your Full Name" required="" id="register-name" onkeyup="nameValidation(this)" maxlength="30" value="{{old('name')}}">
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
									<input type="email" class="form-control Cfield" name="email" placeholder="Your Email to be used for LogIn" required="" id="register-email" value="{{old('email')}}" maxlength="50" onchange="emailValidation(this)" >
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
									<label>Mobile Contact<span class="astrik">*</span></label>
									<input type="text" class="form-control Cfield" placeholder="Your Mobile / Whatsapp No." required="" name="mobile" id="register-mobile" onkeyup="phoneValidation(this)" value="{{old('mobile')}}">
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group showhide">
									{{-- <label>Enter LogIn Password</label> --}}
									<div class="mb-2"><span class="label-color">Enter LogIn Password </span> <span class="astrik">*</span> <span class="fielsmend"> (must be min. 8 characters)</span> </div>
									<input type="password" class="form-control Cfield" placeholder="The LogIn Password you want" required="" name="password" id="register-password" >
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
                                          <button type="button" class="btn btn-danger reloadBtn"  id="reload">
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
</section>
</div>
@endsection