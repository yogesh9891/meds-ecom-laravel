@extends('layouts.backend')



@section('content')

<div class="page-define">

			<div class="container-fluid">

				<div class="row justify-content-center justify-content-between">

					<div class="col">

						<h1>PASSWORD</h1>

						<span class="shorttxt">Data will show on the front-end pages</span>

					</div>

				</div>		

			</div>

		</div>

	<div class="main-panel">

		<div class="container-fluid">

			<div class="panel-container">

			<div class="main-section mt-3">

				<div class="main-border">

					<div class="row justify-content-center">

						<div class="col-md-12 col-sm-12">

							<div class="entry-title">

							  <h2>PASSWORD</h2>

							</div>

						</div>

						

                  	</div>

					<div class="login-limiter">

		<div class="login-container">

			<div class="login-wradp">				

			{{-- 	<div class="login-header">

					<div class="login-icon"><img src="img/login-icon.png" alt=""></div>

					<div class="login-title">

					</div>

				</div> --}}

				<div class="login-form">

                    @if ($errors->any())

                    <ul class="alert alert-danger">

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                    @endif

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

				


                        <div class="row justify-content-center">

					
						<div class="form-group col-md-12">

							<form action="{{ route('aadhya.1-meds-info.import') }}"  method="post" enctype="multipart/form-data"> 
								@csrf
							<label class="mr-4" style="width:200px">1-1-Medicine-Names </label>
							<input type="file" name="file" class="f" required="" accept="xlsx">

							<button type="submit" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Upload</button>
							<a href="{{ route('aadhya.1-meds-info.export') }}" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Download</a>
							<a href="{{ route('aadhya.1-meds-info.destroy') }}" class="btn  redBtn" 

							style=" color: #fff; width:150px;border-radius:0;border:0px;" onclick="return confirm('Do you want to delete 1-1-Medicine-Names ?')">Delete</a>

							</form>
						</div>

						</div>
						    <div class="row justify-content-center">

						
						<div class="form-group col-md-12">
								<form action="{{ route('aadhya.1-meds-question.import') }}"  method="post" enctype="multipart/form-data"> 
								@csrf
							<label class="mr-4" style="width:200px">1-2-Qs-Ans-Information   </label>
							<input type="file" name="file" class="f" required="" accept="xlsx">

							<button type="submit" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Upload</button>
							<a href="{{ route('aadhya.1-meds-question.export') }}" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Download</a>
							<a href="{{ route('aadhya.1-meds-question.destroy') }}" class="btn  redBtn" 

							style=" color: #fff; width:150px;border-radius:0;border:0px;" onclick="return confirm('Do you want to delete 1-2-Qs-Ans-Information ?')"> Delete</a>
							</form>

						</div>

						</div>

						     <div class="row justify-content-center">

						
						<div class="form-group col-md-12">
								<form action="{{ route('aadhya.1-meds-leaflet.import') }}"  method="post" enctype="multipart/form-data"> 
								@csrf
							<label class="mr-4" style="width:200px">1-3-FDA-Leaflets   </label>
							<input type="file" name="file" class="f" required="" accept="xlsx">

							<button type="submit" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Upload</button>
							<a href="{{ route('aadhya.1-meds-leaflet.export') }}" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Download</a>
							<a href="{{ route('aadhya.1-meds-leaflet.destroy') }}" class="btn  redBtn" 

							style=" color: #fff; width:150px;border-radius:0;border:0px;" onclick="return confirm('Do you want to delete 1-3-FDA-Leaflets ?')">Delete</a>
							</form>

						</div>

						</div>

						    <div class="row justify-content-center">

						
						<div class="form-group col-md-12">
								<form action="{{ route('aadhya.1-meds-video.import') }}"  method="post" enctype="multipart/form-data"> 
								@csrf
							<label class="mr-4" style="width:200px">1-4-Consumer-Videos  </label>
							<input type="file" name="file" class="f" required="" accept="xlsx">

							<button type="submit" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Upload</button>
							<a href="{{ route('aadhya.1-meds-video.export') }}" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Download</a>
							<a href="{{ route('aadhya.1-meds-video.destroy') }}" class="btn  redBtn" 

							style=" color: #fff; width:150px;border-radius:0;border:0px;" onclick="return confirm('Do you want to delete 1-4-Consumer-Videos ?')">Delete</a>
							</form>

						</div>

						</div>


						    <div class="row justify-content-center">

						
						<div class="form-group col-md-12">
								<form action="{{ route('aadhya.1-meds-seo.import') }}"  method="post" enctype="multipart/form-data"> 
								@csrf
							<label class="mr-4" style="width:200px">1-5-Medicine-SEO   </label>
							<input type="file" name="file" class="f" required="" accept="xlsx">

							<button type="submit" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Upload</button>
							<a href="{{ route('aadhya.1-meds-seo.export') }}" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Download</a>
							<a href="{{ route('aadhya.1-meds-seo.destroy') }}" class="btn  redBtn" 

							style=" color: #fff; width:150px;border-radius:0;border:0px;" onclick="return confirm('Do you want to delete 1-5-Medicine-SEO  ?')">Delete</a>
							</form>

						</div>

						</div>


						    <div class="row justify-content-center">

						
						<div class="form-group col-md-12">
								<form action="{{ route('aadhya.2-meds-product.import') }}"  method="post" enctype="multipart/form-data"> 
								@csrf
							<label class="mr-4" style="width:200px">2-1-Medicine-Strengths   </label>
							<input type="file" name="file" class="f" required="" accept="xlsx">

							<button type="submit" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Upload</button>
							<a href="{{ route('aadhya.2-meds-product.export') }}" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Download</a>
							<a href="{{ route('aadhya.2-meds-product.destroy') }}" class="btn  redBtn" 

							style=" color: #fff; width:150px;border-radius:0;border:0px;" onclick="return confirm('Do you want to delete 2-1-Medicine-Strengths ?')">Delete</a>
							</form>

						</div>

						</div>


						    <div class="row justify-content-center">

						
						<div class="form-group col-md-12">
								<form action="{{ route('aadhya.2-meds-price.import') }}"  method="post" enctype="multipart/form-data"> 
								@csrf
							<label class="mr-4" style="width:200px">2-2-B-G-Prices-Images   </label>
							<input type="file" name="file" class="f" required="" accept="xlsx">

							<button type="submit" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Upload</button>
							<a href="{{ route('aadhya.2-meds-price.export') }}" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Download</a>
							<a href="{{ route('aadhya.2-meds-price.destroy') }}" class="btn  redBtn" 

							style=" color: #fff; width:150px;border-radius:0;border:0px;" onclick="return confirm('Do you want to delete 2-2-B-G-Prices-Images  ?')">Delete</a>
							</form>

						</div>

						</div>  
						<div class="row justify-content-center">
							<div class="form-group col-md-12">
									<form action="{{ route('aadhya.2-meds-forex.import') }}"  method="post" enctype="multipart/form-data"> 
									@csrf
								<label class="mr-4" style="width:200px">2-3-Forex-Rates</label>
								<input type="file" name="file" class="f" required="" accept="xlsx">

								<button type="submit" class="btn btn-primary common-btn" 

								style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Upload</button>
								<a href="{{ route('aadhya.2-meds-forex.export') }}" class="btn btn-primary common-btn" 

								style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Download</a>
								<a href="{{ route('aadhya.2-meds-forex.destroy') }}" class="btn  redBtn" 

								style=" color: #fff; width:150px;border-radius:0;border:0px;" onclick="return confirm('Do you want to delete 2-3-Forex-Rates ?')">Delete</a>
								</form>

							</div>
						</div>
						<div class="row justify-content-center">

						
						<div class="form-group col-md-12">
								<form action="{{ route('aadhya.3-home-general.import') }}"  method="post" enctype="multipart/form-data"> 
								@csrf
							<label class="mr-4" style="width:200px">3-3a-General-Diseases-Details  </label>
							<input type="file" name="file" class="f" required="" accept="xlsx">

							<button type="submit" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Upload</button>
							<a href="{{ route('aadhya.3-home-general.export') }}" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Download</a>
							<a href="{{ route('aadhya.3-home-general.destroy') }}" class="btn  redBtn" 

							style=" color: #fff; width:150px;border-radius:0;border:0px;" onclick="return confirm('Do you want to delete 3-3a-General-Diseases-Details  ?')">Delete</a>
							</form>

						</div>

						</div>  

						<div class="row justify-content-center">

						
						<div class="form-group col-md-12">
								<form action="{{ route('aadhya.3-home-general-medicine.import') }}"  method="post" enctype="multipart/form-data"> 
								@csrf
							<label class="mr-4" style="width:200px">3-3b-General-Diseases-Medicines </label>
							<input type="file" name="file" class="f" required="" accept="xlsx">

							<button type="submit" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Upload</button>
							<a href="{{ route('aadhya.3-home-general-medicine.export') }}" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Download</a>
							<a href="{{ route('aadhya.3-home-general-medicine.destroy') }}" class="btn  redBtn" 

							style=" color: #fff; width:150px;border-radius:0;border:0px;" onclick="return confirm('Do you want to delete 3-3b-General-Diseases-Medicines  ?')">Delete</a>
							</form>

						</div>

						</div> 

							<div class="row justify-content-center">

						
						<div class="form-group col-md-12">
								<form action="{{ route('aadhya.3-home-critical.import') }}"  method="post" enctype="multipart/form-data"> 
								@csrf
							<label class="mr-4" style="width:200px">3-4a-Cancer-Diseases-Details </label>
							<input type="file" name="file" class="f" required="" accept="xlsx">

							<button type="submit" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Upload</button>
							<a href="{{ route('aadhya.3-home-critical.export') }}" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Download</a>
							<a href="{{ route('aadhya.3-home-critical.destroy') }}" class="btn  redBtn" 

							style=" color: #fff; width:150px;border-radius:0;border:0px;" onclick="return confirm('Do you want to delete 3-4a-Cancer-Diseases-Details ?')">Delete</a>
							</form>

						</div>

						</div> 



							<div class="row justify-content-center">

						
						<div class="form-group col-md-12">
								<form action="{{ route('aadhya.3-home-critical-medicine.import') }}"  method="post" enctype="multipart/form-data"> 
								@csrf
							<label class="mr-4" style="width:200px">3-4b-Cancer-Diseases-Medicines </label>
							<input type="file" name="file" class="f" required="" accept="xlsx">

							<button type="submit" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Upload</button>
							<a href="{{ route('aadhya.3-home-critical-medicine.export') }}" class="btn btn-primary common-btn" 

							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Download</a>
							<a href="{{ route('aadhya.3-home-critical-medicine.destroy') }}" class="btn  redBtn" 

							style=" color: #fff; width:150px;border-radius:0;border:0px;" onclick="return confirm('Do you want to delete 3-4a-Cancer-Diseases-Details ?')">Delete</a>
							</form>

						</div>

						</div> 


						<div class="row justify-content-center">
							<div class="form-group col-md-12">
									<form action="{{ route('aadhya.4-single-country.import') }}"  method="post" enctype="multipart/form-data"> 
									@csrf
								<label class="mr-4" style="width:200px">4-1-Country-Details </label>
								<input type="file" name="file" class="f" required="" accept="xlsx">

								<button type="submit" class="btn btn-primary common-btn" 

								style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Upload</button>
								<a href="{{ route('aadhya.4-single-country.export') }}" class="btn btn-primary common-btn" 

								style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Download</a>
								<a href="{{ route('aadhya.4-single-country.destroy') }}" class="btn  redBtn" 

								style=" color: #fff; width:150px;border-radius:0;border:0px;" onclick="return confirm('Do you want to delete 4-1-Country-Details ?')">Delete</a>
								</form>

							</div>
						</div>
				</div>	
				<div class="row justify-content-center">
							<div class="form-group col-md-12">
									<form action="{{ route('aadhya.5-bank-detail.import') }}"  method="post" enctype="multipart/form-data"> 
									@csrf
								<label class="mr-4" style="width:200px">5-Bank-Details </label>
								<input type="file" name="file" class="f" required="" accept="xlsx">

								<button type="submit" class="btn btn-primary common-btn" 

								style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Upload</button>
								<a href="{{ route('aadhya.5-bank-detail.export') }}" class="btn btn-primary common-btn" 

								style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Download</a>
								<a href="{{ route('aadhya.5-bank-detail.destroy') }}" class="btn  redBtn" 

								style=" color: #fff; width:150px;border-radius:0;border:0px;" onclick="return confirm('Do you want to delete 5-Bank-Details ?')">Delete</a>
								</form>

							</div>
						</div>	
						<div class="row justify-content-center">
							<div class="form-group col-md-12">
									<form action="{{ route('aadhya.6-text-reviews.import') }}"  method="post" enctype="multipart/form-data"> 
									@csrf
								<label class="mr-4" style="width:200px">6-Text-Reviews</label>
								<input type="file" name="file" class="f" required="" accept="xlsx">

								<button type="submit" class="btn btn-primary common-btn" 

								style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Upload</button>
								<a href="{{ route('aadhya.6-text-reviews.export') }}" class="btn btn-primary common-btn" 

								style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Download</a>
								<a href="{{ route('aadhya.6-text-reviews.destroy') }}" class="btn  redBtn" 

								style=" color: #fff; width:150px;border-radius:0;border:0px;" onclick="return confirm('Do you want to delete 6-Text-Reviews ?')">Delete</a>
								</form>

							</div>
						</div>

							<div class="row justify-content-center">
							<div class="form-group col-md-12">
									<form action="{{ route('aadhya.11-buyer-login.import') }}"  method="post" enctype="multipart/form-data"> 
									@csrf
								<label class="mr-4" style="width:200px">11-Buyer-Details</label>
								<input type="file" name="file" class="f" required="" accept="xlsx">

								<button type="submit" class="btn btn-primary common-btn" 

								style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Upload</button>
								<a href="{{ route('aadhya.11-buyer-login.export') }}" class="btn btn-primary common-btn" 

								style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Download</a>
								<a href="{{ route('aadhya.11-buyer-login.destroy') }}" class="btn  redBtn" 

								style=" color: #fff; width:150px;border-radius:0;border:0px;" onclick="return confirm('Do you want to delete 11-Buyer-Details?')">Delete</a>
								</form>

							</div>
						</div>

							<div class="row justify-content-center">
							<div class="form-group col-md-12">
									<form action="{{ route('aadhya.18-order-status.import') }}"  method="post" enctype="multipart/form-data"> 
									@csrf
								<label class="mr-4" style="width:200px">18-Order-Status-Popup</label>
								<input type="file" name="file" class="f" required="" accept="xlsx">

								<button type="submit" class="btn btn-primary common-btn" 

								style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Upload</button>
								<a href="{{ route('aadhya.18-order-status.export') }}" class="btn btn-primary common-btn" 

								style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Download</a>
							
								</form>

							</div>
						</div>


							<div class="row justify-content-center">
							<div class="form-group col-md-12">
									<form action="{{ route('aadhya.18-order-status.import') }}"  method="post" enctype="multipart/form-data"> 
									@csrf
								<label class="mr-4" style="width:200px">13-Referrals</label>
								{{-- <input type="file" name="file" class="f" required="" accept="xlsx">

								<button type="submit" class="btn btn-primary common-btn" 

								style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Upload</button> --}}
								<a href="{{ route('aadhya.13-referrals.export') }}" class="btn btn-primary common-btn" 

								style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Download</a>
							
								</form>

							</div>
						</div>

							<div class="row justify-content-center">
							<div class="form-group col-md-12">
									<form action="{{ route('aadhya.18-order-status.import') }}"  method="post" enctype="multipart/form-data"> 
									@csrf
								<label class="mr-4" style="width:200px">14-Summary</label>
								{{-- <input type="file" name="file" class="f" required="" accept="xlsx">

								<button type="submit" class="btn btn-primary common-btn" 

								style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Upload</button> --}}
								<a href="{{ route('aadhya.14-order.export') }}" class="btn btn-primary common-btn" 

								style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Download</a>
							
								</form>

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









@endsection








