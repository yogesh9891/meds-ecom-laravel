@extends('layouts.front')

@section('content')

@section('seo_section')

<title>Brand Vs Generic Medications | 911GlobalMeds </title>
@endsection

<section class="inner-page pb-0">

   <div class="container">

      <div class="breadcrumbs">

         <ul>

            <li><a href="{{url('/')}}">Home</a></li>

            <li>Brand vs Generic Medications</li>

         </ul>

      </div>

   </div>

   <div class="container"  id="gotop">





      <div class="content-part categorypage brand-vs-generic mt-3">

		<div class="row text-center">



			<div class="col-lg-6 col-md-6 col-sm-6">

				<h1 class="font30 green-text"><strong>About Generic Drugs & Generic Medications List: </strong></h1>

				 <div class="alphabrand">

				<div class="alphalist">

				<div class="seelist-alphabet">

					<div class="atoztabbing" id="accordion">

						<div class="atoztabbing-inner">

							@foreach($all_medcines as $key => $alphabet)

							<div class="alpha-card" id="a-heading">

								<a data-toggle="collapse" data-target="#genric{{ $key }}-collapse"  

								  {{ $key }}

								</a>

							</div>

							@endforeach

							

						</div>

					  

					  <!--Tabbing Details--->

					  <div class="atoztabbing-content all-alphabetsContent">

					  		@foreach($all_medcines as $key => $alphabet)

						  <div id="genric{{ $key }}-collapse" class="collapse" aria-labelledby="{{ $key }}-heading" data-parent="#accordion">

							  <div class="card-body">

								<div class="showAll">

									<ul>

										@foreach($alphabet as $alpha_medcine)

										<li>

											<a href="{{url('/'.$alpha_medcine['frontend_url']??'url')}}" target="_blank">{{ $alpha_medcine['generic_name']??'' }}</a>

										</li>



										@endforeach

										

									</ul>

								</div>

							  </div>

						  </div>

						  @endforeach

					

					  </div>

					  <!--Tabbing Details End--->

					  

					</div>

				</div>

			</div>

		</div>

			</div>

			<div class="col-lg-6 col-md-6 col-sm-12">

				<h2 class="font30 green-text"><strong>About Brand Drugs & Brand Medications List:</strong></h2>

		 <div class="alphabrand">

			<div class="alphalist">

				<div class="seelist-alphabet">

					<div class="atoztabbing" id="accordion-generic-drugs">

						<div class="atoztabbing-inner">

							@foreach($genric_medcines as $key => $alphabet1)

							<div class="alpha-card" >

								<a data-toggle="collapse" data-target="#other{{ $key }}-collapse"  >

								  {{ $key }}

								</a>

							</div>

							@endforeach

							

						</div>

					  

					  

					  <!--Tabbing Details--->

					  <div class="atoztabbing-content all-alphabetsContent">

						 	@foreach($genric_medcines as $key => $alphabet1)

						  <div id="other{{ $key }}-collapse" class="collapse" aria-labelledby="a-heading" data-parent="#accordion-generic-drugs">

							  <div class="card-body">

								<div class="showAll">

									<ul>

										@foreach($alphabet1 as $alpha_medcine1)

										<li>

											<a href="{{url('/'.$alpha_medcine1['frontend_url']??'url')}}" target="_blank">{{ $alpha_medcine1['other_names']??'' }}</a>

										</li>



										@endforeach

										

									</ul>

								</div>

							  </div>

						  </div>

						  @endforeach

						  

						 

					  </div>

					  <!--Tabbing Details End--->

					  

					</div>

				</div>

			</div>

		</div>

			</div>

		</div>

        	<h2 class="h3 text-dark"><strong>FAQs on Brand Vs Generic Medications :</strong></h2>

         <p>Today, most drug classes offer several options. Some are higher-cost brand-name drugs and others are lower-cost generic options. Choosing a generic medicine can save you money each time you fill your prescription while still safely and effectively treating your condition. To learn more about generics, please read through these frequently asked questions below.</p>

		 <div class="row">

		 <div class="col-md-8">

         <div class="tab-pane fade show active" id="druginformation" role="tabpanel" aria-labelledby="druginformation-tab">

                <div class="accordion">

                    <div class="accordion" id="accordionExample">

                     @foreach($faqs as $order_faq)

                        <div class="card">

                            <div class="card-header" id="heading1">

                                <h3 class="mb-0">

                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $order_faq->id }}" > 

                                        {{ $order_faq->question }} <span><i class="fa fa-plus"></i></span>

                                    </button>

                                </h3>

                            </div>

                            <div id="collapse{{ $order_faq->id }}" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">

                                <div class="card-body">

                                    <p>{!! $order_faq->answer !!}</p>

                                </div>

                            </div>

                        </div>

                        @endforeach



                    </div>

                </div>

            </div>

            </div>

			<div class="col-md-4"><div class="parallex-banner" id="seefaq">

	<div class="parallex-banner-container">

		<div class="parallex-banner-inner full-parallex text-center">

			<div class="parallex-banner-image"><a href="blogs-news/Brand-vs-Generic-Drugs-Comparison.pdf" target="_blank"><img src="img/Brand-vs-Generic-Drugs-Information.webp" alt=""></a></div>

		</div>

	</div>

</div>

</div>

            </div>

			

			

			

			

      </div>

   </div>

</section>



@endsection