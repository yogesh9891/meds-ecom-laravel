@extends('layouts.front')
@section('content')

<section class="inner-page pt-0 pb-0">
   <div class="container">
         <div class="breadcrumbs">
            <ul>
               <li><a href="{{url('/')}}">Home</a></li>
               <li>Contact Us</li>
            </ul>
         </div>
	</div>
	<div class="container">
         <div class="content-part mt-3">
			<div class="common-heading text-center mb-4">
				<div class="font40 green-text text-uppercase mb-2">Contact Us</div>
			</div>
			<div class="contactus">
			<p align="center">911GlobalMeds <strong>💊 </strong>is a <strong>Safe &amp; Reputable Online Pharmacy Marketplace</strong>; we operate as a <strong>Trusted Platform for the International Licensed Pharmacies </strong>to post and offer for sale their branded and generic medications, and a <strong>Safe &amp; Secure Source for the individual and institutional buyers</strong> globally to purchase the same with <strong>full security of their payments and the parcel shipments.</strong></p>

			<p class="text-center">All orders placed on 911GlobalMeds.com are dispensed from our fully licensed and independently verified pharmacy vendors from Belgium, Canada, Germany, India, Ireland, Italy, Mexico, Singapore, South Africa, Spain, Turkey, & many other renowned pharmaceutical supplier countries.</p>
			<div class="row mt-4">
				<div class="col-md-6 col-sm-12 contact-us-content">
					<div class="text-center"><strong>REGISTERED ADDRESS 1 - CANADA :  </strong></div>
					<p class="address text-center">1145/9 Midland Avenue, <br> Scarborough, Toronto<br>Ontario</p>
				</div>
				<div class="col-md-6 col-sm-12 contact-us-content">
					<div class="text-center"><strong>REGISTERED ADDRESS 2 - HK :</strong></div>
					<p class="address text-center">701, 7/F., Multifield Plaza,<br>3 Prat Avenue, TST, <br>Hong Kong</p>
				</div>
			</div>
			<div class="legend font30 text-center mt-5 green-text mb-3">Our Business Hours:</div>
			<p class="mt-1 text-center"><b>911GlobalMeds.com Customer Care tries to respond within a few hours, every day of the week!</b></p>
			<p class="text-center">For enquiries related to any medication or for your order, payment, billing, shipment etc.<br> please contact us at 
				<strong><a href="mailto:WeCare@911GlobalMeds.com">WeCare@911GlobalMeds.com</a></strong> or
				<strong><a href="https://wa.link/edzqnd">  WhatsApp </a></strong>
				<strong><a href="https://msng.link/o/?5672527545=vi"> / Viber at +1 (567) 252-7545</a></strong>
				 </p>
			<p class="text-center"><strong>Expected response time:</strong> within a few hours from your email or WhatsApp/Viber message</p>
			
			<div class="legend font30 text-center mt-5 green-text mb-2">Contact Information:</div>
			<div class="text-center mb-3"><strong>Do you want to contact us? Feel Free to get in touch.</strong></div>
			<div class="row">
				<div class="col-md-6 col-sm-12 text-center contact-us-content border-right mb-3">
					<p><strong>Email</strong> WeCare@911GlobalMeds.com</p>
					<p><strong>Phone</strong> +1 (567) 252-7545</p>
					<p><strong>Mobile</strong> +1 (567) 252-7545</p>
					<p><strong>Skype</strong>  911GlobalMeds</p>
				</div>
				<div class="col-md-6 col-sm-12 text-center contact-us-content mb-3">
				<p><strong>WhatsApp</strong> +1 (567) 252-7545</p>
				<p><strong>Viber</strong> +1 (567) 252-7545</p>
				<p><strong>Telegram</strong> +1 (567) 252-7545</p>
				<p><strong>Signal</strong> +1 (567) 252-7545</p>
				</div>
			</div>
			

            
				<form  method="post" class="mt-5" id="contactQueryForm">
                    @csrf
					<div class="fieldset">
						<div class="legend">Contact Us Form</div>
						<div class="fielsmend">All fields are mandatory <span class="astrik">*</span> </div>
						<div class="text-danger" id="query-error4" style="display:none"></div>
						
						<div class="row">
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Your Full Name<span class="error">*</span></label>
									<input type="text" id="full_name" name="full_name" class="form-control Cfield" placeholder="Your Full Name" required=""   onkeyup="nameValidation(this)" maxlength="30">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>Your Email<span class="error">*</span></label>
									<input type="email" id="email" name="email" class="form-control Cfield" placeholder="Your Email" required="" maxlength="50" onchange="emailValidation(this)">
								</div>
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">

									<label>Your Country<span class="error">*</span></label>
									<input class="form-control Cfield" id="country" name="country" type="text" placeholder="Your Country" required="" onkeyup="nameValidation(this)" maxlength="30">
								</div> 
							</div>
							<div class="col-md-3 col-sm-12">
								<div class="form-group">
									<label>ISD Code – Contact no.<span class="error">*</span></label>
									<input class="form-control Cfield" id="contact_no" name="contact_no" type="tel" placeholder="Your Mobile / Whatsapp No." required=""   onkeyup="phoneValidation(this)" minlength="7" maxlength="20">
								</div>
							</div>
							<div class="col-md-12 col-sm-12">
								<div class="form-group">
									<label>Your Message<span class="error">*</span></label>
									<textarea  name="message" maxlength="250" id="message" title="Comment" class="form-control Cfield" cols="5" rows="3" placeholder="Your Message" required="" onkeyup="messageValidation(this)"></textarea>
								</div>
							</div>
							 <div class="form-group col-md-4">
							       <label>Enter Characters as displayed in image</label>
                                    <div class="captcha">
                                          <button type="button" class="btn btn-danger" class="reload" id="reload">
                                            &#x21bb;
                                        </button>
                                     
                                        <span>{!! captcha_img('flat') !!}</span></br>
                                    </div>
                                    <input id="captcha" type="text" class="form-control mt-3" placeholder="Enter Characters as displayed in image" name="captcha">
                                </div>
                             
							<div class="col-md-4 col-sm-12">
						
								<button type="submit" id="query_submit3" class="btn nobtn green-bg lg-btn mt-3">Send Message</button>
							</div>
							<div class="col-md-4 col-sm-12">
							
							</div>
						</div>
					</div>
				</form>
			</div>
			
         </div>
   </div>



</section>

@endsection
@section('afterScript')
<script>

$('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: '/reload-captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });


        $("#message").focusout( function(e) {

            var reg =/<(.|\n)*?>/g; 

            if (reg.test($('#message').val()) == true) {

                 $('#message').val('')
                alert('HTML Tag are not allowed');
                 return false;
            }

            e.preventDefault();

        });

</script>
@endsection