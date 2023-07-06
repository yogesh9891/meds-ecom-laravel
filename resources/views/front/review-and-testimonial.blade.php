@extends('layouts.front')
@section('content')
<section class="inner-page pb-0">
   <div class="container">
         <div class="breadcrumbs">
            <ul>
               <li><a href="{{route('index')}}">Home</a></li>
               <li>Buyer’s Testimonials</li>
            </ul>
         </div>
	</div>
	<div class="container">
         <div class="content-part categorypage mt-3">
            <h1 class="font30 text-center green-text"><strong>911GlobalMeds.com :<br>Customer Reviews, Testimonials & Feedback</strong></h1>	
			<p class="text-center mt-3"><strong>HERE'S WHY YOU CAN TRUST 911GlobalMeds.com</strong><br>
After filling more than 3 million prescriptions in USA, UK, Australia, Philippines, Korea, and too many others countries. We’re the most reviewed and independently five-star rated online pharmacy in the world with more than 375,000 real customer reviews through ShopperApproved.com and a stellar TrustScore through Trustpilot. No other online Canadian pharmacy or international drugs site has these credentials. That's why 911GlobalMeds.com  is recognized as the online pharmacy to go to for savings, safety and service.
</p>
			<div class="text-center pt-3 pb-3"><img src="{{asset('front_asset/img/Testimonials.webp')}}" alt=""  /></div>			
         </div>
   </div>

<div class="about-testimonial text-center">
	<div class="container">
		<div class="testimonial-block">
			<div class="headng"><span>Watch</span> Our Customers <span>Reviews: </span></div>
			<div class="testimonial-slider owl-carousel owl-theme">
				<div class="video-block text-center">
					<p>Video Testimonial by: </p>
					<div class="athorname"><a href="" data-toggle="modal" data-target=".videoTestimonial">Iulia Vasile, Romania</a></div>
					<div><a href="" data-toggle="modal" data-target=".videoTestimonial"><img src="{{asset('front_assets/img/Iulia-vasile-eu.webp')}}" alt="" /></a></div>
				</div>
				<div class="video-block text-center">
					<p>Video Testimonial by: </p>
					<div class="athorname"><a href="" data-toggle="modal" data-target=".videoTestimonial">Iulia Vasile, Romania</a></div>
					<div><a href="" data-toggle="modal" data-target=".videoTestimonial"><img src="{{asset('front_assets/img/rizzo-massimo-italy.webp')}}" alt="" /></a></div>
				</div>
				<div class="video-block text-center">
					<p>Video Testimonial by: </p>
					<div class="athorname"><a href="" data-toggle="modal" data-target=".videoTestimonial">Iulia Vasile, Romania</a></div>
					<div><a href="" data-toggle="modal" data-target=".videoTestimonial"><img src="{{asset('front_assets/img/Iulia-vasile-eu.webp')}}" alt="" /></a></div>
				</div>
				<div class="video-block text-center">
					<p>Video Testimonial by: </p>
					<div class="athorname"><a href="" data-toggle="modal" data-target=".videoTestimonial">Iulia Vasile, Romania</a></div>
					<div><a href="" data-toggle="modal" data-target=".videoTestimonial"><img src="{{asset('front_assets/img/rizzo-massimo-italy.webp')}}" alt="" /></a></div>
				</div>
			</div>		
		</div>
		
	</div>
</div>

<div class="video-testimonial pt-5 pb-3">
	<div class="container">
	<div class="headng text-center mb-3"><span>Read </span> Our Customers <span>Testimonials: </span></div>
		<div class="testimonialreviewList">
			<div class="trustpilot-review">
				<div class="text-center"><img src="{{asset('front_assets/img/911-global-meds-com-TrustPilot-Verified-Reviews.webp')}}" width="250px" alt="Reviews on 911GlobalMeds.com"></div>
			</div>
			<div class="google-review">
				<div class="ratting">
					<div class="starrating text-left">
						<span class="fa fa-star orange-text"></span>
						<span class="fa fa-star orange-text"></span>
						<span class="fa fa-star orange-text"></span>
						<span class="fa fa-star orange-text"></span>
						<span class="fa fa-star "></span>
						<span class="">4,587</span>
					</div>
					<p class="mt-3 mb-3">4.8 out of 5 stars</p>
					<div class="ratings-table">
						<div class="ratting-txt">5 Stars</div>
						<div class="progressratting">
							<div class="ratting-bar" style="width:85.328101155439%"></div>
						</div>
						<div class="ratting-txt">3,914</div>
					</div>
					<div class="ratings-table">
						<div class="ratting-txt">4 Stars</div>
						<div class="progressratting">
							<div class="ratting-bar" style="width:10.616960976673%"></div>
						</div>
						<div class="ratting-txt">487</div>
					</div>
					<div class="ratings-table">
						<div class="ratting-txt">3 Stars</div>
						<div class="progressratting">
							<div class="ratting-bar" style="width:1.4824504033137%"></div>
						</div>
						<div class="ratting-txt">68</div>
					</div>
					<div class="ratings-table">
						<div class="ratting-txt">2 Stars</div>
						<div class="progressratting">
							<div class="ratting-bar" style="width:0.87202964900807%"></div>
						</div>
						<div class="ratting-txt">40</div>
					</div>
					<div class="ratings-table">
						<div class="ratting-txt">1 Stars</div>
						<div class="progressratting">
							<div class="ratting-bar" style="width:1.3080444735121%"></div>
						</div>
						<div class="ratting-txt">60</div>
					</div>
				</div>
			</div>
		</div>
		<div class="texttestimo mt-5">
			<div class="review-list mb-4 text-center">
				<ul>
					<li>
						<div class="starrating text-center">
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <div class="font20"><font class="green-text"><strong>Henry Parker</strong></font> <i>from</i> <font class="green-text"><strong>China</strong></font> <i>says</i> :</div>
					   </div>
					   <p class="mb-0">“ ordering is easy, pricing is great, and delivery is much sooner than indicated.”</p>
					</li>
					<li>
						<div class="starrating text-center">
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <div class="font20"><font class="green-text"><strong>Henry Parker</strong></font> <i>from</i> <font class="green-text"><strong>China</strong></font> <i>says</i> :</div>
					   </div>
					   <p class="mb-0">“ ordering is easy, pricing is great, and delivery is much sooner than indicated.”</p>
					</li>
					<li>
						<div class="starrating text-center">
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <div class="font20"><font class="green-text"><strong>Henry Parker</strong></font> <i>from</i> <font class="green-text"><strong>China</strong></font> <i>says</i> :</div>
					   </div>
					   <p class="mb-0">“ ordering is easy, pricing is great, and delivery is much sooner than indicated.”</p>
					</li>
					<li>
						<div class="starrating text-center">
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <div class="font20"><font class="green-text"><strong>Henry Parker</strong></font> <i>from</i> <font class="green-text"><strong>China</strong></font> <i>says</i> :</div>
					   </div>
					   <p class="mb-0">“ ordering is easy, pricing is great, and delivery is much sooner than indicated.”</p>
					</li>
					<li>
						<div class="starrating text-center">
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <div class="font20"><font class="green-text"><strong>Henry Parker</strong></font> <i>from</i> <font class="green-text"><strong>China</strong></font> <i>says</i> :</div>
					   </div>
					   <p class="mb-0">“ ordering is easy, pricing is great, and delivery is much sooner than indicated.”</p>
					</li>
					<li>
						<div class="starrating text-center">
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <div class="font20"><font class="green-text"><strong>Henry Parker</strong></font> <i>from</i> <font class="green-text"><strong>China</strong></font> <i>says</i> :</div>
					   </div>
					   <p class="mb-0">“ ordering is easy, pricing is great, and delivery is much sooner than indicated.”</p>
					</li>
					<li>
						<div class="starrating text-center">
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <div class="font20"><font class="green-text"><strong>Henry Parker</strong></font> <i>from</i> <font class="green-text"><strong>China</strong></font> <i>says</i> :</div>
					   </div>
					   <p class="mb-0">“ ordering is easy, pricing is great, and delivery is much sooner than indicated.”</p>
					</li>
					<li>
						<div class="starrating text-center">
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <div class="font20"><font class="green-text"><strong>Henry Parker</strong></font> <i>from</i> <font class="green-text"><strong>China</strong></font> <i>says</i> :</div>
					   </div>
					   <p class="mb-0">“ ordering is easy, pricing is great, and delivery is much sooner than indicated.”</p>
					</li>
					<li>
						<div class="starrating text-center">
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <span class="fa fa-star orange-text"></span>
						  <div class="font20"><font class="green-text"><strong>Henry Parker</strong></font> <i>from</i> <font class="green-text"><strong>China</strong></font> <i>says</i> :</div>
					   </div>
					   <p class="mb-0">“ ordering is easy, pricing is great, and delivery is much sooner than indicated.”</p>
					</li>
				</ul>
		</div>
		<div class="custom-pagination text-center">
						<nav aria-label="...">
							  <ul class="pagination">
								<li class="page-item disabled">
								  <a class="page-link" href="#" tabindex="-1"><<</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item active">
								  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
								</li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">4</a></li>
								<li class="page-item"><a class="page-link" href="#">5</a></li>
								<li class="page-item">
								  <a class="page-link" href="#">>></a>
								</li>
							  </ul>
						</nav>
					</div>
		<div class="text-center font14 mt-3">
                                        <b>Testimonials Disclaimer : &nbsp;</b>IN ACCORDANCE WITH...
                                        <span class="inputButton"><input type="button" class="common-btn ml-2 yellow-bg smallbtn" id="btnTViewDisclaimer" value="Read Full" /></span>
                                        <div id="divTDisclaimer">
                                            <div class="row justify-content-md-center text-justify mt-3">
                                                <div class="col-md-8 col-sm-12">
                                                    <div class="readfulltestimonial content contentscroll">
                                                        <p>IN ACCORDANCE WITH THE FTC GUIDE LINES CONCERNING USE OF ENDORSEMENTS AND TESTIMONIALS IN ADVERTISING, PLEASE BE AWARE OF THE FOLLOWING:</p>
                                                        <p>Federal regulations require us to advise our customers that all product reviews, testimonials or endorsements of products sold at&nbsp;911GlobalMeds.com reflect the personal experience of those individuals who have expressed their personal opinions on our products and that those opinions and experiences may not be representative of what every consumer of our products may personally experience with the endorsed product.</p>
                                                        <p>All product reviews and testimonials are the sole opinions, findings or experiences of our customers and not those of 911GlobalMeds or its staff. 911GlobalMeds does not compensate in any way for testimonials or reviews.</p>
                                                        <ul>
                                                            <li>
                                                                These statements have not been evaluated by the US Food and Drug Administration (FDA) or any other&nbsp;country’s Drug Department /&nbsp;Governmental Authority. We are required to inform you that there is no intention, implied or otherwise that represents or infers that these products or statements be used in the cure, diagnosis, mitigation, treatment, or prevention of any disease.
                                                            </li>
                                                            <li>These testimonials do not imply that similar results will happen with your use of our products. We have no competent or reliable scientific evidence to suggest that the testimonial provider’s experience is due to the use of our products.</li>
                                                            <li>These testimonials are not intended to recommend any supplement as a drug, as a diagnosis for specific illnesses or conditions, nor as a product to eliminate diseases or other medical conditions or complications. We make no medical claims as to the benefits of any of our products to improve medical conditions.</li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
		
		<div class="writereview mt-5">
                                    <div class="accordion" id="submitreviews">
										<div class="card">
										<div class="card-header" id="submitreviews-heading">                                       
										<p data-toggle="collapse" data-target="#collapse-submitreviews"  aria-controls="collapse-submitreviews" class="text-center review-text red-text pb-3 collapsed">SUBMIT YOUR REVIEWS & TESTIMONIALS <i class="fa fa-caret-down" aria-hidden="true"></i></p>
										</div>
										<div id="collapse-submitreviews" class="collapse" aria-labelledby="submitreviews-heading" data-parent="#submitreviews-heading">
										<div class="card-body">
										<div class="contactus">
                                        <form>
                                            <div class="fieldset">
                                                <div class="legend">Submit Your Reviews</div>
												<div class="fielsmend">All fields are mandatory <span class="astrik">*</span> </div>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Name<span class="error">*</span></label>
                                                            <input type="text" class="form-control Cfield" placeholder="Your Name" required="" aria-label="Name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Country <span class="error">*</span></label>
                                                            <select class="form-control Cfield" required>
                                                                <option>Select Country</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Your Email<span class="error">*</span></label>
                                                            <input type="email" class="form-control Cfield" placeholder="Your Email Address" required="" aria-label="Email">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-8 col-sm-12">
                                                        <div class="form-group">
                                                            <label class="d-inline">Reviews<span class="error">*</span></label>
                                                            <div class="form-group float-right mb-0">
                                                                <div class="form-check form-check-inline">
                                                                    <label>Rating<span class="error">*</span></label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <label class="text-secondary">Bad</label>
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1">
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2">
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" id="inlineCheckbox3" value="option3">
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" id="inlineCheckbox4" value="option4">
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <input class="form-check-input" type="radio" id="inlineCheckbox5" value="option5">
                                                                </div>
                                                                <div class="form-check form-check-inline">
                                                                    <label class="text-secondary">Good</label>
                                                                </div>
                                                            </div>
                                                            <textarea name="comment" id="comment" title="Comment" class="form-control Cfield" cols="5" rows="3" placeholder="Your Reviews"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-12">
                                                        <div class="form-group">
                                                            <img src="{{asset('front_assets/img/google-captcha.webp')}}" alt="">
                                                        </div>
                                                        <button class="btn nobtn green-bg lg-btn">SUBMIT REVIEWS</button>
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
	<div class="alphnumber">
	<div class="container">
		<div class="alphabrand-wrap">
		<div class="alphabrand">
			<h3>Brand &amp; Generic Drugs List :</h3>
			<p>The list of all Brand Drugs and / or their Generic Equivalents available for sale online may be seen by clicking on any of the letters below :</p>
			<div class="alphalist">
				<div class="seelist-alphabet">
					<div class="atoztabbing" id="accordion">
						<div class="atoztabbing-inner">
							<div class="alpha-card" id="a-heading">
								<a data-toggle="collapse" data-target="#a-collapse" aria-expanded="false" aria-controls="a-collapse">
								  a
								</a>
							</div>
							<div class="alpha-card" id="b-heading">
								<a data-toggle="collapse" data-target="#b-collapse" aria-expanded="false" aria-controls="b-collapse">
								  B
								</a>
							</div>
							<div class="alpha-card" id="c-heading">
								<a data-toggle="collapse" data-target="#c-collapse" aria-expanded="false" aria-controls="c-collapse">
								  C
								</a>
							</div>
							<div class="alpha-card" id="d-heading">
								<a data-toggle="collapse" data-target="#d-collapse" aria-expanded="false" aria-controls="d-collapse">
								  D
								</a>
							</div>
							<div class="alpha-card" id="e-heading">
								<a data-toggle="collapse" data-target="#e-collapse" aria-expanded="false" aria-controls="e-collapse">
								  E
								</a>
							</div>
							<div class="alpha-card" id="f-heading">
								<a data-toggle="collapse" data-target="#f-collapse" aria-expanded="false" aria-controls="f-collapse">
								  F
								</a>
							</div>
							<div class="alpha-card" id="g-heading">
								<a data-toggle="collapse" data-target="#g-collapse" aria-expanded="false" aria-controls="g-collapse">
								  g
								</a>
							</div>
							<div class="alpha-card" id="h-heading">
								<a data-toggle="collapse" data-target="#h-collapse" aria-expanded="false" aria-controls="h-collapse">
								  h
								</a>
							</div>
							<div class="alpha-card" id="i-heading">
								<a data-toggle="collapse" data-target="#i-collapse" aria-expanded="false" aria-controls="i-collapse">
								  i
								</a>
							</div>
							<div class="alpha-card" id="j-heading">
								<a data-toggle="collapse" data-target="#j-collapse" aria-expanded="false" aria-controls="j-collapse">
								  j
								</a>
							</div>
							<div class="alpha-card" id="k-heading">
								<a data-toggle="collapse" data-target="#k-collapse" aria-expanded="false" aria-controls="k-collapse">
								  k
								</a>
							</div>
							<div class="alpha-card" id="l-heading">
								<a data-toggle="collapse" data-target="#l-collapse" aria-expanded="false" aria-controls="l-collapse">
								  l
								</a>
							</div>
							<div class="alpha-card" id="m-heading">
								<a data-toggle="collapse" data-target="#m-collapse" aria-expanded="false" aria-controls="m-collapse">
								  m
								</a>
							</div>
							<div class="alpha-card" id="n-heading">
								<a data-toggle="collapse" data-target="#n-collapse" aria-expanded="false" aria-controls="n-collapse">
								  n
								</a>
							</div>
							<div class="alpha-card" id="o-heading">
								<a data-toggle="collapse" data-target="#o-collapse" aria-expanded="false" aria-controls="o-collapse">
								  o
								</a>
							</div>
							<div class="alpha-card" id="p-heading">
								<a data-toggle="collapse" data-target="#p-collapse" aria-expanded="false" aria-controls="p-collapse">
								  p
								</a>
							</div>
							<div class="alpha-card" id="q-heading">
								<a data-toggle="collapse" data-target="#q-collapse" aria-expanded="false" aria-controls="q-collapse">
								  q
								</a>
							</div>
							<div class="alpha-card" id="r-heading">
								<a data-toggle="collapse" data-target="#r-collapse" aria-expanded="false" aria-controls="r-collapse">
								  r
								</a>
							</div>
							<div class="alpha-card" id="s-heading">
								<a data-toggle="collapse" data-target="#s-collapse" aria-expanded="false" aria-controls="s-collapse">
								  s
								</a>
							</div>
							<div class="alpha-card" id="t-heading">
								<a data-toggle="collapse" data-target="#t-collapse" aria-expanded="false" aria-controls="t-collapse">
								  t
								</a>
							</div>
							<div class="alpha-card" id="u-heading">
								<a data-toggle="collapse" data-target="#u-collapse" aria-expanded="false" aria-controls="u-collapse">
								  u
								</a>
							</div>
							<div class="alpha-card" id="v-heading">
								<a data-toggle="collapse" data-target="#v-collapse" aria-expanded="false" aria-controls="v-collapse">
								  v
								</a>
							</div>
							<div class="alpha-card" id="w-heading">
								<a data-toggle="collapse" data-target="#w-collapse" aria-expanded="false" aria-controls="w-collapse">
								  w
								</a>
							</div>
							<div class="alpha-card" id="x-heading">
								<a data-toggle="collapse" data-target="#x-collapse" aria-expanded="false" aria-controls="x-collapse">
								  x
								</a>
							</div>
							<div class="alpha-card" id="y-heading">
								<a data-toggle="collapse" data-target="#y-collapse" aria-expanded="false" aria-controls="y-collapse">
								  y
								</a>
							</div>
							<div class="alpha-card" id="z-heading">
								<a data-toggle="collapse" data-target="#z-collapse" aria-expanded="false" aria-controls="z-collapse">
								  z
								</a>
							</div>
						</div>
					  
					  <!--Tabbing Details--->
					  <div class="atoztabbing-content all-alphabetsContent">
						  <div id="a-collapse" class="collapse" aria-labelledby="a-heading" data-parent="#accordion">
							  <div class="card-body">
								<div class="showAll">
									<ul>
										<li>
											<a href="medication.php">Acetohexamide</a>
										</li>
										<li>
											<a href="medication.php">Alogliptin</a>
										</li>
										<li>
											<a href="medication.php">Alogliptin and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Alogliptin and Pioglitazone</a>
										</li>
										<li>
											<a href="medication.php">Canagliflozin</a>
										</li>
										<li>
											<a href="medication.php">Chlorpropamide</a>
										</li>
										<li>
											<a href="medication.php">Colesevelam Hcl</a>
										</li>
										<li>
											<a href="medication.php">Ertugliflozin</a></li>
										<li>
											<a href="medication.php">Exenatide</a>
										</li>
										<li>
											<a href="medication.php">Glibenclamide</a>
										</li>
										<li>
											<a href="medication.php">Glibenclamide and Metformin </a>
										</li>
										<li>
											<a href="medication.php">Gliclazide</a>
										</li>
										<li>
											<a href="medication.php">Glimepiride</a>
										</li>
										<li>
											<a href="medication.php">Glipizide</a>
										</li>
										<li>
											<a href="medication.php">Glipizide and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Glucomannan</a>
										</li>
										<li>
											<a href="medication.php">Insulin Aspart</a>
										</li>
										<li>
											<a href="medication.php">Insulin Detemir</a>
										</li>
										<li>
											<a href="medication.php">Insulin glargine</a>
										</li>
										<li>
											<a href="medication.php">Linagliptin</a>
										</li>
										<li>
											<a href="medication.php">Linagliptin and Metformin Hydrochloride </a>
										</li>
										<li>
											<a href="medication.php">Metformin</a>
										</li>
										<li>
											<a href="medication.php">Miglitol</a>
										</li>
										<li>
											<a href="medication.php">Pioglitazone</a>
										</li>
										<li>
											<a href="medication.php">Pioglitazone and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Repaglinide</a>
										</li>
										<li>
											<a href="medication.php">Repaglinide and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Rosiglitazone and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Saxagliptin</a>
										</li>
										<li>
											<a href="medication.php">Saxagliptin and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Semaglutide</a>
										</li>
										<li>
											<a href="medication.php">Simvastatin and Sitagliptin</a></li>
										<li>
											<a href="medication.php">Sitagliptin</a>
										</li>
										<li>
											<a href="medication.php">Teneligliptin</a>
										</li>
										<li>
											<a href="medication.php">Tolazamide</a>
										</li>
										<li>
											<a href="medication.php">Tolbutamide</a>
										</li>
										<li>
											<a href="medication.php">Vildagliptin</a>
										</li>
										<li>
											<a href="medication.php">Becaplermin</a>
										</li>
										<li>
											<a href="medication.php">Ertugliflozin</a>
										</li>
										<li>
											<a href="medication.php">Semaglutide</a>
										</li>
										<li>
											<a href="medication.php">Teneligliptin</a>
										</li>
										<li>
											<a href="medication.php">Glyburide</a>
										</li>
										<li>
											<a href="medication.php">Canagliflozin</a>
										</li>
										<li>
											<a href="medication.php">Chlorpropamide</a>
										</li>
										<li>
											<a href="medication.php">Dapagliflozin</a>
										</li>
										<li>
											<a href="medication.php">Desmopressin</a>
										</li>
										<li>
											<a href="medication.php">Epalrestat</a>
										</li>
										<li>
											<a href="medication.php">Exenatide</a>
										</li>
										<li>
											<a href="medication.php">Glibenclamide</a>
										</li>
									</ul>
								</div>
							  </div>
						  </div>
						  
						  <div id="b-collapse" class="collapse" aria-labelledby="b-heading" data-parent="#accordion">
							  <div class="card-body">
								<div class="showAll">
									<ul>
										<li>
											<a href="medication.php">Acetohexamide</a>
										</li>
										<li>
											<a href="medication.php">Alogliptin</a>
										</li>
										<li>
											<a href="medication.php">Alogliptin and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Alogliptin and Pioglitazone</a>
										</li>
										<li>
											<a href="medication.php">Canagliflozin</a>
										</li>
										<li>
											<a href="medication.php">Chlorpropamide</a>
										</li>
										<li>
											<a href="medication.php">Colesevelam Hcl</a>
										</li>
										<li>
											<a href="medication.php">Ertugliflozin</a></li>
										<li>
											<a href="medication.php">Exenatide</a>
										</li>
										<li>
											<a href="medication.php">Glibenclamide</a>
										</li>
										<li>
											<a href="medication.php">Glibenclamide and Metformin </a>
										</li>
										<li>
											<a href="medication.php">Gliclazide</a>
										</li>
										<li>
											<a href="medication.php">Glimepiride</a>
										</li>
										<li>
											<a href="medication.php">Glipizide</a>
										</li>
										<li>
											<a href="medication.php">Glipizide and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Glucomannan</a>
										</li>
										<li>
											<a href="medication.php">Insulin Aspart</a>
										</li>
										<li>
											<a href="medication.php">Insulin Detemir</a>
										</li>
										<li>
											<a href="medication.php">Insulin glargine</a>
										</li>
										<li>
											<a href="medication.php">Linagliptin</a>
										</li>
										<li>
											<a href="medication.php">Linagliptin and Metformin Hydrochloride </a>
										</li>
										<li>
											<a href="medication.php">Metformin</a>
										</li>
										<li>
											<a href="medication.php">Miglitol</a>
										</li>
										<li>
											<a href="medication.php">Pioglitazone</a>
										</li>
										<li>
											<a href="medication.php">Pioglitazone and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Repaglinide</a>
										</li>
										<li>
											<a href="medication.php">Repaglinide and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Rosiglitazone and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Saxagliptin</a>
										</li>
										<li>
											<a href="medication.php">Saxagliptin and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Semaglutide</a>
										</li>
										<li>
											<a href="medication.php">Simvastatin and Sitagliptin</a></li>
										<li>
											<a href="medication.php">Sitagliptin</a>
										</li>
										<li>
											<a href="medication.php">Teneligliptin</a>
										</li>
										<li>
											<a href="medication.php">Tolazamide</a>
										</li>
										<li>
											<a href="medication.php">Tolbutamide</a>
										</li>
										<li>
											<a href="medication.php">Vildagliptin</a>
										</li>
										<li>
											<a href="medication.php">Becaplermin</a>
										</li>
										<li>
											<a href="medication.php">Ertugliflozin</a>
										</li>
										<li>
											<a href="medication.php">Semaglutide</a>
										</li>
										<li>
											<a href="medication.php">Teneligliptin</a>
										</li>
										<li>
											<a href="medication.php">Glyburide</a>
										</li>
										<li>
											<a href="medication.php">Canagliflozin</a>
										</li>
										<li>
											<a href="medication.php">Chlorpropamide</a>
										</li>
										<li>
											<a href="medication.php">Dapagliflozin</a>
										</li>
										<li>
											<a href="medication.php">Desmopressin</a>
										</li>
										<li>
											<a href="medication.php">Epalrestat</a>
										</li>
										<li>
											<a href="medication.php">Exenatide</a>
										</li>
										<li>
											<a href="medication.php">Glibenclamide</a>
										</li>
									</ul>
								</div>
							  </div>
						  </div>
					  </div>
					  <!--Tabbing Details End--->
					  
					</div>
				</div>
			</div>
		</div>
		
		<div class="alphabrand">
			<p>The list of all Generic Drugs available for sale online may be seen by clicking on any of the letters below :</p>
			<div class="alphalist">
				<div class="seelist-alphabet">
					<div class="atoztabbing" id="accordion-generic-drugs">
						<div class="atoztabbing-inner">
							<div class="alpha-card" id="a1-heading">
								<a data-toggle="collapse" data-target="#a1-collapse" aria-expanded="false" aria-controls="a1-collapse">
								  a
								</a>
							</div>
							<div class="alpha-card" id="b2-heading">
								<a data-toggle="collapse" data-target="#b2-collapse" aria-expanded="false" aria-controls="b2-collapse">
								  B
								</a>
							</div>
							<div class="alpha-card" id="c-heading">
								<a data-toggle="collapse" data-target="#c-collapse" aria-expanded="false" aria-controls="c-collapse">
								  C
								</a>
							</div>
							<div class="alpha-card" id="d-heading">
								<a data-toggle="collapse" data-target="#d-collapse" aria-expanded="false" aria-controls="d-collapse">
								  D
								</a>
							</div>
							<div class="alpha-card" id="e-heading">
								<a data-toggle="collapse" data-target="#e-collapse" aria-expanded="false" aria-controls="e-collapse">
								  E
								</a>
							</div>
							<div class="alpha-card" id="f-heading">
								<a data-toggle="collapse" data-target="#f-collapse" aria-expanded="false" aria-controls="f-collapse">
								  F
								</a>
							</div>
							<div class="alpha-card" id="g-heading">
								<a data-toggle="collapse" data-target="#g-collapse" aria-expanded="false" aria-controls="g-collapse">
								  g
								</a>
							</div>
							<div class="alpha-card" id="h-heading">
								<a data-toggle="collapse" data-target="#h-collapse" aria-expanded="false" aria-controls="h-collapse">
								  h
								</a>
							</div>
							<div class="alpha-card" id="i-heading">
								<a data-toggle="collapse" data-target="#i-collapse" aria-expanded="false" aria-controls="i-collapse">
								  i
								</a>
							</div>
							<div class="alpha-card" id="j-heading">
								<a data-toggle="collapse" data-target="#j-collapse" aria-expanded="false" aria-controls="j-collapse">
								  j
								</a>
							</div>
							<div class="alpha-card" id="k-heading">
								<a data-toggle="collapse" data-target="#k-collapse" aria-expanded="false" aria-controls="k-collapse">
								  k
								</a>
							</div>
							<div class="alpha-card" id="l-heading">
								<a data-toggle="collapse" data-target="#l-collapse" aria-expanded="false" aria-controls="l-collapse">
								  l
								</a>
							</div>
							<div class="alpha-card" id="m-heading">
								<a data-toggle="collapse" data-target="#m-collapse" aria-expanded="false" aria-controls="m-collapse">
								  m
								</a>
							</div>
							<div class="alpha-card" id="n-heading">
								<a data-toggle="collapse" data-target="#n-collapse" aria-expanded="false" aria-controls="n-collapse">
								  n
								</a>
							</div>
							<div class="alpha-card" id="o-heading">
								<a data-toggle="collapse" data-target="#o-collapse" aria-expanded="false" aria-controls="o-collapse">
								  o
								</a>
							</div>
							<div class="alpha-card" id="p-heading">
								<a data-toggle="collapse" data-target="#p-collapse" aria-expanded="false" aria-controls="p-collapse">
								  p
								</a>
							</div>
							<div class="alpha-card" id="q-heading">
								<a data-toggle="collapse" data-target="#q-collapse" aria-expanded="false" aria-controls="q-collapse">
								  q
								</a>
							</div>
							<div class="alpha-card" id="r-heading">
								<a data-toggle="collapse" data-target="#r-collapse" aria-expanded="false" aria-controls="r-collapse">
								  r
								</a>
							</div>
							<div class="alpha-card" id="s-heading">
								<a data-toggle="collapse" data-target="#s-collapse" aria-expanded="false" aria-controls="s-collapse">
								  s
								</a>
							</div>
							<div class="alpha-card" id="t-heading">
								<a data-toggle="collapse" data-target="#t-collapse" aria-expanded="false" aria-controls="t-collapse">
								  t
								</a>
							</div>
							<div class="alpha-card" id="u-heading">
								<a data-toggle="collapse" data-target="#u-collapse" aria-expanded="false" aria-controls="u-collapse">
								  u
								</a>
							</div>
							<div class="alpha-card" id="v-heading">
								<a data-toggle="collapse" data-target="#v-collapse" aria-expanded="false" aria-controls="v-collapse">
								  v
								</a>
							</div>
							<div class="alpha-card" id="w-heading">
								<a data-toggle="collapse" data-target="#w-collapse" aria-expanded="false" aria-controls="w-collapse">
								  w
								</a>
							</div>
							<div class="alpha-card" id="x-heading">
								<a data-toggle="collapse" data-target="#x-collapse" aria-expanded="false" aria-controls="x-collapse">
								  x
								</a>
							</div>
							<div class="alpha-card" id="y-heading">
								<a data-toggle="collapse" data-target="#y-collapse" aria-expanded="false" aria-controls="y-collapse">
								  y
								</a>
							</div>
							<div class="alpha-card" id="z-heading">
								<a data-toggle="collapse" data-target="#z-collapse" aria-expanded="false" aria-controls="z-collapse">
								  z
								</a>
							</div>
						</div>
					  
					  <!--Tabbing Details--->
					  <div class="atoztabbing-content all-alphabetsContent">
						  <div id="a1-collapse" class="collapse" aria-labelledby="a1-heading" data-parent="#accordion-generic-drugs">
							  <div class="card-body">
								<div class="showAll">
									<ul>
										<li>
											<a href="medication.php">Acetohexamide</a>
										</li>
										<li>
											<a href="medication.php">Alogliptin</a>
										</li>
										<li>
											<a href="medication.php">Alogliptin and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Alogliptin and Pioglitazone</a>
										</li>
										<li>
											<a href="medication.php">Canagliflozin</a>
										</li>
										<li>
											<a href="medication.php">Chlorpropamide</a>
										</li>
										<li>
											<a href="medication.php">Colesevelam Hcl</a>
										</li>
										<li>
											<a href="medication.php">Ertugliflozin</a></li>
										<li>
											<a href="medication.php">Exenatide</a>
										</li>
										<li>
											<a href="medication.php">Glibenclamide</a>
										</li>
										<li>
											<a href="medication.php">Glibenclamide and Metformin </a>
										</li>
										<li>
											<a href="medication.php">Gliclazide</a>
										</li>
										<li>
											<a href="medication.php">Glimepiride</a>
										</li>
										<li>
											<a href="medication.php">Glipizide</a>
										</li>
										<li>
											<a href="medication.php">Glipizide and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Glucomannan</a>
										</li>
										<li>
											<a href="medication.php">Insulin Aspart</a>
										</li>
										<li>
											<a href="medication.php">Insulin Detemir</a>
										</li>
										<li>
											<a href="medication.php">Insulin glargine</a>
										</li>
										<li>
											<a href="medication.php">Linagliptin</a>
										</li>
										<li>
											<a href="medication.php">Linagliptin and Metformin Hydrochloride </a>
										</li>
										<li>
											<a href="medication.php">Metformin</a>
										</li>
										<li>
											<a href="medication.php">Miglitol</a>
										</li>
										<li>
											<a href="medication.php">Pioglitazone</a>
										</li>
										<li>
											<a href="medication.php">Pioglitazone and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Repaglinide</a>
										</li>
										<li>
											<a href="medication.php">Repaglinide and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Rosiglitazone and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Saxagliptin</a>
										</li>
										<li>
											<a href="medication.php">Saxagliptin and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Semaglutide</a>
										</li>
										<li>
											<a href="medication.php">Simvastatin and Sitagliptin</a></li>
										<li>
											<a href="medication.php">Sitagliptin</a>
										</li>
										<li>
											<a href="medication.php">Teneligliptin</a>
										</li>
										<li>
											<a href="medication.php">Tolazamide</a>
										</li>
										<li>
											<a href="medication.php">Tolbutamide</a>
										</li>
										<li>
											<a href="medication.php">Vildagliptin</a>
										</li>
										<li>
											<a href="medication.php">Becaplermin</a>
										</li>
										<li>
											<a href="medication.php">Ertugliflozin</a>
										</li>
										<li>
											<a href="medication.php">Semaglutide</a>
										</li>
										<li>
											<a href="medication.php">Teneligliptin</a>
										</li>
										<li>
											<a href="medication.php">Glyburide</a>
										</li>
										<li>
											<a href="medication.php">Canagliflozin</a>
										</li>
										<li>
											<a href="medication.php">Chlorpropamide</a>
										</li>
										<li>
											<a href="medication.php">Dapagliflozin</a>
										</li>
										<li>
											<a href="medication.php">Desmopressin</a>
										</li>
										<li>
											<a href="medication.php">Epalrestat</a>
										</li>
										<li>
											<a href="medication.php">Exenatide</a>
										</li>
										<li>
											<a href="medication.php">Glibenclamide</a>
										</li>
									</ul>
								</div>
							  </div>
						  </div>
						  
						  <div id="b2-collapse" class="collapse" aria-labelledby="b2-heading" data-parent="#accordion-generic-drugs">
							  <div class="card-body">
								<div class="showAll">
									<ul>
										<li>
											<a href="medication.php">Acetohexamide</a>
										</li>
										<li>
											<a href="medication.php">Alogliptin</a>
										</li>
										<li>
											<a href="medication.php">Alogliptin and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Alogliptin and Pioglitazone</a>
										</li>
										<li>
											<a href="medication.php">Canagliflozin</a>
										</li>
										<li>
											<a href="medication.php">Chlorpropamide</a>
										</li>
										<li>
											<a href="medication.php">Colesevelam Hcl</a>
										</li>
										<li>
											<a href="medication.php">Ertugliflozin</a></li>
										<li>
											<a href="medication.php">Exenatide</a>
										</li>
										<li>
											<a href="medication.php">Glibenclamide</a>
										</li>
										<li>
											<a href="medication.php">Glibenclamide and Metformin </a>
										</li>
										<li>
											<a href="medication.php">Gliclazide</a>
										</li>
										<li>
											<a href="medication.php">Glimepiride</a>
										</li>
										<li>
											<a href="medication.php">Glipizide</a>
										</li>
										<li>
											<a href="medication.php">Glipizide and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Glucomannan</a>
										</li>
										<li>
											<a href="medication.php">Insulin Aspart</a>
										</li>
										<li>
											<a href="medication.php">Insulin Detemir</a>
										</li>
										<li>
											<a href="medication.php">Insulin glargine</a>
										</li>
										<li>
											<a href="medication.php">Linagliptin</a>
										</li>
										<li>
											<a href="medication.php">Linagliptin and Metformin Hydrochloride </a>
										</li>
										<li>
											<a href="medication.php">Metformin</a>
										</li>
										<li>
											<a href="medication.php">Miglitol</a>
										</li>
										<li>
											<a href="medication.php">Pioglitazone</a>
										</li>
										<li>
											<a href="medication.php">Pioglitazone and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Repaglinide</a>
										</li>
										<li>
											<a href="medication.php">Repaglinide and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Rosiglitazone and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Saxagliptin</a>
										</li>
										<li>
											<a href="medication.php">Saxagliptin and Metformin</a>
										</li>
										<li>
											<a href="medication.php">Semaglutide</a>
										</li>
										<li>
											<a href="medication.php">Simvastatin and Sitagliptin</a></li>
										<li>
											<a href="medication.php">Sitagliptin</a>
										</li>
										<li>
											<a href="medication.php">Teneligliptin</a>
										</li>
										<li>
											<a href="medication.php">Tolazamide</a>
										</li>
										<li>
											<a href="medication.php">Tolbutamide</a>
										</li>
										<li>
											<a href="medication.php">Vildagliptin</a>
										</li>
										<li>
											<a href="medication.php">Becaplermin</a>
										</li>
										<li>
											<a href="medication.php">Ertugliflozin</a>
										</li>
										<li>
											<a href="medication.php">Semaglutide</a>
										</li>
										<li>
											<a href="medication.php">Teneligliptin</a>
										</li>
										<li>
											<a href="medication.php">Glyburide</a>
										</li>
										<li>
											<a href="medication.php">Canagliflozin</a>
										</li>
										<li>
											<a href="medication.php">Chlorpropamide</a>
										</li>
										<li>
											<a href="medication.php">Dapagliflozin</a>
										</li>
										<li>
											<a href="medication.php">Desmopressin</a>
										</li>
										<li>
											<a href="medication.php">Epalrestat</a>
										</li>
										<li>
											<a href="medication.php">Exenatide</a>
										</li>
										<li>
											<a href="medication.php">Glibenclamide</a>
										</li>
									</ul>
								</div>
							  </div>
						  </div>
					  </div>
					  <!--Tabbing Details End--->
					  
					</div>
				</div>
			</div>
		</div>
		</div>
	
		</div>
		</div>
</div>
</div>

</section>

<div class="modal fade videoTestimonial" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	  <span aria-hidden="true">&times;</span>
	</button>
	<video width="100%" height="350px" controls>
	  <source src="https://www.genuinedrugs123.com/MediaUploader/GenuineDrugs123-Reviews-Testimonials-1-Rizzo-Massimo-Italy.mp4" type="video/mp4">
	</video>
    </div>
  </div>
</div>
@endsection
