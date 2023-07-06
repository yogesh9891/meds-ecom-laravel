@extends('layouts.front')
@section('content')
@section('seo_section')

<title>WHOcGMP Certification FAQs | 911GlobalMeds </title>
@endsection
<section class="inner-page pb-0">
   <div class="container">
      <div class="breadcrumbs">
         <ul>
            <li><a href="{{url('/')}}">Home</a></li>
            <li>WHOcGMP Certification FAQs</li>
         </ul>
      </div>
   </div>
   <div class="container"  id="gotop">


      <div class="content-part categorypage brand-vs-generic mt-3">
	
        	<h2 class="h3 text-dark"><strong>FAQs on WHOcGMP Certification :</strong></h2>
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
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse{{ $order_faq->id }}" aria-expanded="false" aria-controls="collapse1"> 
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
			<div class="parallex-banner-image"><a href="info/faq-on-whocgmp-certification.pdf" target="_blank"><img src="img/faq-on-whocgmp-certification.webp" alt=""></a></div>
		</div>
	</div>
</div>
</div>
            </div>
			
			
			
			
      </div>
   </div>
</section>

@endsection