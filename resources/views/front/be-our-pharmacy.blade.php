@extends('layouts.front')

@section('content')

@section('seo_section')

<title>Be Our Pharmacy Vendor Partners | 911GlobalMeds </title>
@endsection

<section class="inner-page pt-0 pb-0">

   <div class="container">

         <div class="breadcrumbs">

            <ul>

               <li><a href="{{ url('/') }}">Home</a></li>

               <li>Pharmacy Vendor Partners</li>

            </ul>

         </div>

	</div>

	<div class="container">

         <div class="content-part mt-3">

            <div class="common-heading text-center mb-4">

				<h1 class="font30 fw-600 green-text">Welcome to be a <span class="text-dark">911GlobalMeds.com</span> Pharmacy Vendor</h1>

			</div>

			<div class="row">

				<div class="col-md-6 col-sm-12">

					<div class="custom-video">

						<a href="img/911-global-meds-com-Pharmaceuticals-Marketplace.webp" data-fancybox="" data-caption="" class="img_round">

                      <img src="img/911-global-meds-com-Pharmaceuticals-Marketplace.webp" alt="911-global-meds-com-Pharmaceuticals-Marketplace" /></a>

					</div>

				</div>

				<div class="col-md-6 col-sm-12">

					<p class="mb-0 pt-5">911GlobalMeds 💊 is a Safe & Reputable Online Pharmacy Marketplace; we operate as a Trusted Platform for the International Licensed Pharmacies to post and offer for sale their branded and generic medications, and for the individual and institutional buyers globally to purchase the same with full security of their payments and the parcel deliveries. <br> <br> International Licensed Pharmacies or manufacturers are welcome to offer prescription drugs for diseases as varied as Allergy, Alzheimer's, Anti-Fungals, Anti-Virals, Antibiotics, Anticoagulants, Arthritis, Birth Control Pills, Coronavirus - COVID-19, Depression, Diabetes, Epilepsy Seizures, HIV/AIDS, Heart Care, Hepatitis, Immunosuppressants, Men's Sexual Health, Migraine, Multiple Sclerosis, Parkinson's Disease, Respiratory Disease, Schizophrenia and also all CANCER conditions.</p>

				</div>

			</div>

			

			

			<div class="become-supplier mt-5">

				<div class="common-heading text-center mb-4">

					<div class="font30 green-text">Become our Pharmacy Supplier</div>

					<div class="font20 blue-text"><strong>Want to collaborate into 911GlobalMeds.com Pharmaceuticals Marketplace?<br>Fill in this form to get in touch with us!

</strong></div>

				</div>

				<p><strong>Disclaimer</strong>:</p>

				<p>Filling this form does not automatically create you as a Pharmacy Vendor in our system but allows you to get in touch with us for a potential collaboration opportunity.</p>

				<div class="fielsmend">All fields are mandatory <span class="astrik">*</span> </div>

				<form action="{{ route('be_our_partner.query') }}" method="post" enctype='multipart/form-data'>
@csrf
@if(Session::has('success'))
<script type="text/javascript">
                  				alert('We welcome your Business Purchase Query for this medication and will revert to you very soon');
	
</script>

@endif

					@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif

					<div class="row pt-3">

						<div class="col-md-6 col-sm-12">

							<div class="form-group">

								<label>First Name<span class="astrik">*</span></label>

								<input type="text" class="form-control Cfield" required="" name="fname" aria-label="fname" onkeyup="nameValidation(this)"  value="{{ old('fname') }}">

							</div>

						</div>
							<input type="hidden" name="url" value="be-our-pharmacy-vendor-partner">
						<div class="col-md-6 col-sm-12">

							<div class="form-group">

								<label>Last Name<span class="astrik">*</span></label>

								<input type="text" class="form-control Cfield" required="" name="lname" aria-label="lname" onkeyup="nameValidation(this)" value="{{ old('lname') }}">

							</div>

						</div>

						<div class="col-md-6 col-sm-12">

							<div class="form-group">

								<label>Company Name<span class="astrik">*</span></label>

								<input type="text" class="form-control Cfield" required="" name="company" aria-label="company" onkeyup="nameValidation(this)" value="{{ old('company') }}">

							</div>

						</div>

						

						<div class="col-md-6 col-sm-12">

							<div class="form-group">

								<label>Designation<span class="astrik">*</span></label>

								<input type="text" class="form-control Cfield" required="" name="designation" aria-label="designation" onkeyup="nameValidation(this)" value="{{ old('designation') }}">

							</div>

						</div>

						<div class="col-md-6 col-sm-12">

							<div class="form-group">

								<label>Address line 1<span class="astrik">*</span></label>

								<input type="text" class="form-control Cfield" required="" name="address1" aria-label="address1" onkeyup="messageValidation(this)" value="{{ old('address1') }}"   maxlength="100">

							</div>

						</div>

						<div class="col-md-6 col-sm-12">

							<div class="form-group">

								<label>Address line 2</label>

								<input type="text" class="form-control Cfield" required="" name="address2" aria-label="address2" onkeyup="messageValidation(this)" value="{{ old('address2') }}" maxlength="100" >

							</div>

						</div>

						<div class="col-md-6 col-sm-12">

							<div class="form-group">

								<label>City<span class="astrik">*</span></label>

								<input type="text" class="form-control Cfield" required="" name="city" aria-label="city" onkeyup="nameValidation(this)" value="{{ old('city') }}">

							</div>

						</div>

						<div class="col-md-6 col-sm-12">

							<div class="form-group">

								<label>State & Postal Code<span class="astrik">*</span></label>

								<input type="text" class="form-control Cfield" required="" name="zip" aria-label="zip" onkeyup="postalValidation(this)" maxlength="20" value="{{ old('zip') }}">

							</div>

						</div>

						<div class="col-md-6 col-sm-12">

							<div class="form-group">

								<label>Country<span class="astrik">*</span></label>

									<input class="form-control Cfield" id="country" name="country" type="text" aria-label="country" placeholder="Your Country" required="" onkeyup="nameValidation(this)" value="{{ old('country') }}" maxlength="30">

							</div>

						</div>

						<div class="col-md-6 col-sm-12">

							<div class="form-group">

								<label>Website</label>

								<input type="text" class="form-control Cfield" required="" name="website" aria-label="website"  onkeyup="messageValidation(this)" value="{{ old('website') }}">

							</div>

						</div>

						<div class="col-md-6 col-sm-12">

							<div class="form-group">

								<label>Email<span class="astrik">*</span></label>

								<input type="text" class="form-control Cfield" name="email" required=""  aria-label="email" maxlength="50" onchange="emailValidation(this)" value="{{ old('email') }}">

							</div>

						</div>

						<div class="col-md-6 col-sm-12">

						<div class="form-group codewithno clearfix">

							<label>Your Mobile / Whatsapp Number<span class="astrik">*</span></label>

							<input class="form-control Cfield countryphone" type="tel" name="contact_no" placeholder="Mobile/WhatsApp No." required  onkeyup="phoneValidation(this)" value="{{ old('contact_no') }}" aria-label="tel">

						</div>

					</div>

						<div class="col-md-12">

							<div class="form-group">

								<label>Please provide a brief on your Company Profile and the Drug products you specialize in: <span class="astrik">*</span></label>

								<textarea tabindex="13" name="message" cols="10" rows="3" class="form-control Cfield" required=""  aria-label="message"  onkeyup="messageValidation(this)"  maxlength="300">{{ old('message') }}</textarea>

							</div>

						</div>

						<div class="col-md-12">

							<div class="form-group">

								<label>Attachment (only pdf or jpg files accepted)</label>

								<input tabindex="14" type="file" name="pdf" id="pdf" class="form-control Cfield" aria-label="pdf" value="">

							</div>

						</div>

						<div class="col-md-6 col-sm-12">

							<div class="form-group">

							<label>Enter Characters as displayed in image</label>
                                    <div class="captcha">
                                          <button type="button" class="btn btn-danger  reloadBtn" id="reload">
                                            &#x21bb;
                                        </button>
                                     
                                        <span>{!! captcha_img('flat') !!}</span></br>
                                    </div>
                                    <input id="captcha" type="text" class="form-control mt-3" placeholder="Enter Characters as displayed in image" name="captcha">
								
							</div>

						</div>

						<div class="col-md-6 col-sm-12 text-right">

							<button class="btn nobtn green-bg" type="submit">BECOME OUR VENDOR</button>

						</div>

						

						

					</div>

				</form>

			</div>

			

         </div>

   </div>



</section>



@endsection