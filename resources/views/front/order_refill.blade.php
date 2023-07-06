@extends('layouts.front')

@section('content')


@section('seo_section')

<title>Fast Refill Orders | 911GlobalMeds </title>
@endsection
<section class="inner-page pt-0 pb-0">

   <div class="container">

      <div class="innerfastrefill">

         <div class="breadcrumbs">

            <ul>

               <li><a href="{{ url('/') }}">Home</a></li>

               <li>Fast Refill</li>

            </ul>

			<ul class="comenext">

         <li>Next Page</li>

         <li>Order Confirmation</li>

      </ul>

         </div>

         <div class="content-part categorypage mt-3">

            <div class="common-heading text-center mb-4">

               <h1 class="font30 fw-600 green-text">Drugs for all Major Disease Conditions, <br>Buy Direct from Canada & other Global Pharmacy</h1>

               <h2 class="font20 blue-text"><strong>Maximum Branded & Generic Drugs Online @ Minimum Prices</strong></h2>

            </div>

            <div class="border-line"></div>

			<div class="refill-order-page">

				<p class="text-center">To Order a Refill of Your Last Order, Please Login from below</p>

				<div class="block-form">

					<div class="block-form_title">EXISTING CUSTOMERS LOGIN</div>

					<div class="block-form_inner login-block">

								

						<form action="{{route('user-login')}}" method="post" id="loginForm">

              				   @csrf

               				 <p id="login-error" class="text-danger"></p>



							<input type="email" class="form-control " name="email" placeholder="Your LogIn Email registered with us" id="login-email" required="" maxlength="50" onchange="emailValidation(this)"  >

							<input type="password" class="form-control " name="password" placeholder="Your LogIn Password registered with us" id="login-password" required="">

							<button class="common-btn blue-bg lg-btn mt-3" type="submit">Login to CONFIRM REFILL <span>of Last Order</span></button>

							<p class="text-center mb-0 mt-2 font14">Forgot Password?<br> <a href="" id="forgotpassword-button" data-toggle="modal" data-target="#forgotpassword" data-target=".bd-example-modal-lg" class="green-text text-underline">CLICK HERE</a> for password reminder by email.</p>

						</form>

					</div>

				</div>

				

				<div class="phone-block">

					<img alt="" src="img/phone-img.png" height="78" width="78" />

					<small>For a refill order, send an email to</small>

					<span class="font30">WeCare@911GlobalMeds.com</span>

					<small class="mt-4">OR send a WhatsApp Message at</small>

					<a href="tel:+15672482515">+1 (567) 252-7545</a>

				</div>

				

			</div>

			

			

         </div>

      </div>

   </div>

</section>



@endsection

@section('afterScript')

<script type="text/javascript">

    $('#loginForm').on('submit', function(e){

        e.preventDefault();

  

  let email = $('#login-email').val();

  let password = $('#login-password').val();



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

                            $('#login-error').html('<b>'+data.msg+'</b>');

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

</script>

@endsection