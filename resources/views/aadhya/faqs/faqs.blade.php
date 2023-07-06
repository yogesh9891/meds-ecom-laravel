@extends('layouts.backend')
@section('content')
<div class="page-define">
		<div class="container-fluid">
			<div class="row justify-content-between">
				<div class="col">
				  <h1>FAQs</h1>
				  <span class="shorttxt">Data will show on HOW-TO-ORDER-FAQS</span>
				</div>
			</div>		
		</div>
	</div>
            <div class="main-panel">
                <div class="container-fluid">
                    <div class="panel-container">
                        
                        	<div class="main-section">							
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
							<div class="main-border">
									  <div class="entry-title title-icon" data-toggle="collapse" href="#question_form" role="button" aria-expanded="false" aria-controls="question_form">
									<h2><span>H-to-O FAQs Section Titles </span></h2>
								</div>
								
							    <form action="{{route('aadhya.faq_title.update')}}" class="collapse" method="post" id="question_form" >
							        @csrf
									<div class="row">
									<div class="col-md-12 col-sm-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Title of Section  1.</label>
											<div class="col-sm-10">
												<input type="text" class="form-control " name="section_1" value="{{$faq_title->section_1}}" >
											
											</div>
										</div>
									</div>								
									</div>	
							        <div class="row">
									<div class="col-md-12 col-sm-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Title of Section 2.</label>
											<div class="col-sm-10">
												<input type="text" class="form-control " name="section_2" value="{{$faq_title->section_2}}">
											
											</div>
										</div>
									</div>								
									</div>
									    <div class="row">
									<div class="col-md-12 col-sm-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Title of Section 3.</label>
											<div class="col-sm-10">
												<input type="text" class="form-control " name="section_3" value="{{$faq_title->section_3}}" >
											
											</div>
										</div>
									</div>								
									</div>
									    <div class="row">
									<div class="col-md-12 col-sm-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Title of Section 4.</label>
											<div class="col-sm-10">
												<input type="text" class="form-control " name="section_4" value="{{$faq_title->section_4}}">
											
											</div>
										</div>
									</div>								
									</div>
									   <div class="row">
									<div class="col-md-12 col-sm-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Title of Section 5.</label>
											<div class="col-sm-10">
												<input type="text" class="form-control " name="section_5" value="{{$faq_title->section_5}}">
											
											</div>
										</div>
									</div>								
									</div>
								
														  
									<div class="bottom-button clearfix">
										<div class="float-right">
										  <div class="inputBtn"><input type="submit" class="btn greenBtn" value="Update" /></div>
									
										</div>
									</div>
								</form>
										
							</div>
                        </div>
                       
						<div class="main-section">							
							<div class="main-border">
							 <div class="entry-title title-icon" data-toggle="collapse" href="#question_form-order" role="button" aria-expanded="false" aria-controls="question_form-order">
									<h2><span>Section 1 for {{$faq_title->section_1}}</span></h2>
								</div>
							
							{{-- 	@if (Session::has('success'))
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
                                        @endif --}}
                                         <form action="{{route('aadhya.faqs.store')}}" class="collapse"  method="post" id="question_form-order">
                        	<input type="hidden" name="generic_question_form-order" id="generic_question_hidden" value="{{old('generic_question_form',route('aadhya.faqs.store'))}}">
                        	@csrf
								<div class="row">
									
									<div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">Search a Qs. Info to Edit</label>
											<div class="col-sm-10">
												<select class="form-control" name="question_no" onchange="getFaqQuestion(this)" type="order">
													<option value="0">Add New OR Select below to Edit a Qs.</option>
												@foreach($faqs->where('type','order') as $order_faq)

													<option value="{{ $order_faq->id }}">{{ $order_faq->question_no.' '.$order_faq->question }}</option>
												@endforeach
												</select>

											</div>
										</div>
									</div>
									</div>
									<div class="row mt-3">
									<div class="col-md-12 col-sm-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Question No.</label>
											<div class="col-sm-10">
												<input type="text" class="form-control order-question_no" name="question_no" onkeypress="return /[0-9]/.test(event.key)">
												<input type="hidden" class="form-control" name="type" value="order">
											</div>
										</div>
									</div>								
									</div>	
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row mb-0">
												<label class="col-sm-2 col-form-label">Question</label>
												<div class="col-sm-10">
													<input type="text" class="form-control order-question" name="question">
												</div>
											</div>
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group row mb-0">
											<label class="col-md-2 col-sm-6 col-form-label">Answer</label>
											<div class="col-md-10 col-sm-6 bibtextarea"><textarea class="order-answer" name="answer" id="editor1"></textarea></div>
											</div>
										</div>
									</div>
														  
									<div class="bottom-button clearfix">
										<div class="float-right">
										  <div class="inputBtn"><input type="submit" class="btn greenBtn" value="Save" /></div>
										  <div class="inputBtn"><a href="#" class="btn redBtn" id="deleteQuestionAnswerBtn-order"  />Delete</a></div>
										</div>
									</div>
								
								
                       </form>		
							</div>
                        </div>



						
							
						<div class="main-section">							
							<div class="main-border">
								 <div class="entry-title title-icon" data-toggle="collapse" href="#question_form-general_medication" role="button" aria-expanded="false" aria-controls="question_form-general_medication">
									<h2><span>Section 2 for {{$faq_title->section_2}}</span></h2>
								</div>
							
									<form action="{{route('aadhya.faqs.store')}}" class="collapse" method="post" id="question_form-general_medication">
									<input type="hidden" name="generic_question_form-general_medication" id="general1_question_hidden" value="{{old('generic_question_form',route('aadhya.faqs.store'))}}">
									@csrf
								<div class="row">
									{{-- <div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">FAQ General 1 Title</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="general1Title">
											</div>
										</div>
									</div> --}}
									</div>
									<div class="row mt-3">
									<div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">Search a Qs. Info to Edit</label>
											<div class="col-sm-10">
												<input type="hidden" class="form-control" name="type" value="general_medication">
												<select class="form-control" name="question_no" onchange="getFaqQuestion(this)" type="general_medication">
													<option value="0">Add New OR Select below to Edit a Qs.</option>
												@foreach($faqs->where('type','general_medication') as $order_faq)

													<option value="{{ $order_faq->id }}">{{ $order_faq->question_no.' '.$order_faq->question }}</option>
												@endforeach
												</select>
											</div>
										</div>
									</div>
									</div>
									<div class="row mt-3">
									<div class="col-md-12 col-sm-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Question No.</label>
											<div class="col-sm-10">
												<input type="text" class="form-control general_medication-question_no" name="question_no" onkeypress="return /[0-9]/.test(event.key)">
											</div>
										</div>
									</div>								
									</div>	
									<div class="row">
									<div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">Question</label>
											<div class="col-sm-10">
												<input type="text" class="form-control general_medication-question" name="question">
											</div>
										</div>
									</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group row mb-0">
											<label class="col-md-2 col-sm-6 col-form-label">Answer</label>
											<div class="col-md-10 col-sm-6 bibtextarea"><textarea class="general_medication-answer" name="answer" id="editor2"></textarea></div>
											</div>
										</div>
									</div>
														  
									<div class="bottom-button clearfix">
										<div class="float-right">
											<div class="inputBtn"><input type="submit" class="btn greenBtn" value="Save" /></div>
											<div class="inputBtn"><a href="#" class="btn redBtn" id="deleteQuestionAnswerBtn-general_medication"  />Delete</a></div>
										</div>
									</div>
									</form>	
							</div>
							
                        </div>
								
						





							
						<div class="main-section">							
							<div class="main-border">
							 <div class="entry-title title-icon" data-toggle="collapse" href="#question_form-medication_ordering" role="button" aria-expanded="false" aria-controls="question_form-medication_ordering">
									<h2><span>Section 3 for {{$faq_title->section_3}}</span></h2>
								</div>
							
									<form action="{{route('aadhya.faqs.store')}}" method="post" class="collapse" id="question_form-medication_ordering">
									<input type="hidden" name="generic_question_form-medication_ordering" id="general2_question_hidden" value="{{old('generic_question_form',route('aadhya.faqs.store'))}}">
									@csrf
								<div class="row">
									{{-- <div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">FAQ General 2 Title</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="general2Title">
											</div>
										</div>
									</div> --}}
									</div>
									<div class="row mt-3">
									<div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">Search a Qs. Info to Edit</label>
											<div class="col-sm-10">
												<input type="hidden" class="form-control" name="type" value="medication_ordering">
												<select class="form-control" name="question_no" onchange="getFaqQuestion(this)" type="medication_ordering">
													<option value="0">Add New OR Select below to Edit a Qs.</option>
												@foreach($faqs->where('type','medication_ordering') as $order_faq)

													<option value="{{ $order_faq->id }}">{{ $order_faq->question_no.' '.$order_faq->question }}</option>
												@endforeach
												</select>
											</div>
										</div>
									</div>
									</div>
									<div class="row mt-3">
									<div class="col-md-12 col-sm-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Question No.</label>
											<div class="col-sm-10">
												<input type="text" class="form-control medication_ordering-question_no" name="question_no" onkeypress="return /[0-9]/.test(event.key)">
											</div>
										</div>
									</div>								
									</div>	
									<div class="row">
									<div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">Question</label>
											<div class="col-sm-10">
												<input type="text" class="form-control medication_ordering-question" name="question">
											</div>
										</div>
									</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group row mb-0">
											<label class="col-md-2 col-sm-6 col-form-label">Answer</label>
											<div class="col-md-10 col-sm-6 bibtextarea"><textarea class="medication_ordering-answer" name="answer" id="editor3"></textarea></div>
											</div>
										</div>
									</div>
														  
									<div class="bottom-button clearfix">
										<div class="float-right">
											<div class="inputBtn"><input type="submit" class="btn greenBtn" value="Save" /></div>
											<div class="inputBtn"><a href="#" class="btn redBtn" id="deleteQuestionAnswerBtn-medication_ordering"/>Delete</a></div>
										</div>
									</div>
									</form>	
							</div>		
                        </div>
						
								






							
						<div class="main-section">							
							<div class="main-border">
								 <div class="entry-title title-icon" data-toggle="collapse" href="#question_form-branded_medication" role="button" aria-expanded="false" aria-controls="question_form-branded_medication">
									<h2><span>Section 4 for {{$faq_title->section_4}}</span></h2>
								</div>
							
									<form action="{{route('aadhya.faqs.store')}}" method="post" class="collapse" id="question_form-branded_medication">
									<input type="hidden" name="generic_question_form-branded_medication" id="general3_question_hidden" value="{{old('generic_question_form',route('aadhya.faqs.store'))}}">
									@csrf
								<div class="row">
									{{-- <div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">FAQ General 3 Title</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="general3Title">
											</div>
										</div>
									</div> --}}
									</div>
									<div class="row mt-3">
									<div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">Search a Qs. Info to Edit</label>
											<div class="col-sm-10">
												<input type="hidden" class="form-control" name="type" value="branded_medication">
												<select class="form-control" name="question_no" onchange="getFaqQuestion(this)" type="branded_medication">
													<option value="0">Add New OR Select below to Edit a Qs.</option>
												@foreach($faqs->where('type','branded_medication') as $order_faq)

													<option value="{{ $order_faq->id }}">{{ $order_faq->question_no.' '.$order_faq->question }}</option>
												@endforeach
												</select>
											</div>
										</div>
									</div>
									</div>
									<div class="row mt-3">
									<div class="col-md-12 col-sm-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Question No.</label>
											<div class="col-sm-10">
												<input type="text" class="form-control branded_medication-question_no" name="question_no" onkeypress="return /[0-9]/.test(event.key)">
											</div>
										</div>
									</div>								
									</div>	
									<div class="row">
									<div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">Question</label>
											<div class="col-sm-10">
												<input type="text" class="form-control branded_medication-question" name="question">
											</div>
										</div>
									</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group row mb-0">
											<label class="col-md-2 col-sm-6 col-form-label">Answer</label>
											<div class="col-md-10 col-sm-6 bibtextarea"><textarea class="branded_medication-answer" name="answer" id="editor4"></textarea></div>
											</div>
										</div>
									</div>
														  
									<div class="bottom-button clearfix">
										<div class="float-right">
											<div class="inputBtn"><input type="submit" class="btn greenBtn" value="Save" /></div>
											<div class="inputBtn"><a href="#" class="btn redBtn" id="deleteQuestionAnswerBtn-branded_medication"/>Delete</a></div>
										</div>  
									</div>
									</form>	
							</div>
							
                        </div>
								
						





							
						<div class="main-section">							
							<div class="main-border">
								 <div class="entry-title title-icon" data-toggle="collapse" href="#question_form-online" role="button" aria-expanded="false" aria-controls="question_form-online">
									<h2><span>Section 5 for {{$faq_title->section_5}}</span></h2>
								</div>
								
									<form action="{{route('aadhya.faqs.store')}}" class="collapse"   method="post" id="question_form-online">
									<input type="hidden" name="generic_question_form-online" id="general3_question_hidden" value="{{old('generic_question_form',route('aadhya.faqs.store'))}}">
									@csrf
								<div class="row">
									{{-- <div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">FAQ General 4 Title</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="general4Title">
											</div>
										</div>
									</div> --}}
									</div>
									<div class="row mt-3">
									<div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">Search a Qs. Info to Edit</label>
											<div class="col-sm-10">
												<input type="hidden" class="form-control" name="type" value="online">

												<select class="form-control" name="question_no" onchange="getFaqQuestion(this)" type="online">
													<option value="0">Add New OR Select below to Edit a Qs.</option>
												@foreach($faqs->where('type','online') as $online_faq)

													<option value="{{ $online_faq->id }}">{{ $online_faq->question_no.' '.$online_faq->question }}</option>
												@endforeach
												</select>
											</div>
										</div>
									</div>
									</div>
									<div class="row mt-3">
									<div class="col-md-12 col-sm-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Question No.</label>
											<div class="col-sm-10">
												<input type="text" class="form-control online-question_no" name="question_no" onkeypress="return /[0-9]/.test(event.key)">
											</div>
										</div>
									</div>								
									</div>	
									<div class="row">
									<div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">Question</label>
											<div class="col-sm-10">
												<input type="text" class="form-control online-question" name="question">
											</div>
										</div>
									</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group row mb-0">
											<label class="col-md-2 col-sm-6 col-form-label">Answer</label>
											<div class="col-md-10 col-sm-6 bibtextarea"><textarea class="online-answer" name="answer" id="editor5"></textarea></div>
											</div>

										</div>
									</div>
														  
									<div class="bottom-button clearfix">
										<div class="float-right">
											<div class="inputBtn"><input type="submit" class="btn greenBtn" value="Save" /></div>
											<div class="inputBtn"><a href="#" class="btn redBtn" id="deleteQuestionAnswerBtn-online"/>Delete</a></div>
										</div>
									</div>
									</form>	
							</div>
							
                        </div>
								
						
						<div class="main-section">							
							<div class="main-border">
								 <div class="entry-title title-icon" data-toggle="collapse" href="#question_form-branded_and_generic" role="button" aria-expanded="false" aria-controls="question_form-branded_and_generic">
									<h2><span>FAQs – Brand vs Generics</span></h2>
								</div>
							
								
								<form action="{{route('aadhya.faqs.store')}}" method="post"   class="collapse" id="question_form-branded_and_generic">
									<input type="hidden" name="generic_question_form-branded_and_generic" id="general3_question_hidden" value="{{old('generic_question_form',route('aadhya.faqs.store'))}}">
									@csrf
								<div class="row">
									{{-- <div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">B vs G Title Para</label>
											<div class="col-sm-10">
												<textarea type="text" class="form-control" name="bgTitlePara"></textarea>
											</div>
										</div>
									</div> --}}
									</div>
									<div class="row mt-3">
									<div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">Search a Qs. Info to Edit</label>
											<div class="col-sm-10">
												<input type="hidden" class="form-control" name="type" value="branded_and_generic">
													<select class="form-control" name="question_no" onchange="getFaqQuestion(this)" type="branded_and_generic">
													<option value="0">Add New OR Select below to Edit a Qs.</option>
													@foreach($faqs->where('type','branded_and_generic') as $order_faq)

														<option value="{{ $order_faq->id }}">{{ $order_faq->question_no.' '.$order_faq->question }}</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>
									</div>
									<div class="row mt-3">
									<div class="col-md-12 col-sm-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Question No.</label>
											<div class="col-sm-10">
												<input type="text" class="form-control branded_and_generic-question_no" name="question_no" onkeypress="return /[0-9]/.test(event.key)">
											</div>
										</div>
									</div>								
									</div>	
									<div class="row">
									<div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">Question</label>
											<div class="col-sm-10">
												<input type="text" class="form-control branded_and_generic-question" name="question">
											</div>
										</div>
									</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group row mb-0">
											<label class="col-md-2 col-sm-6 col-form-label">Answer</label>
											<div class="col-md-10 col-sm-6 bibtextarea"><textarea class="branded_and_generic-answer" name="answer" id="editor6"></textarea></div>
											</div>
										</div>
									</div>
														  
									<div class="bottom-button clearfix">
										<div class="float-right">
											<div class="inputBtn"><input type="submit" class="btn greenBtn" value="Save" /></div>
											<div class="inputBtn"><a href="#" class="btn redBtn" id="deleteQuestionAnswerBtn-branded_and_generic"/>Delete</a></div>
										</div>
									</div>
								</form>
							</div>
							
                        </div>
                        	<div class="main-section">							
							<div class="main-border">
								 <div class="entry-title title-icon" data-toggle="collapse" href="#question_form-who" role="button" aria-expanded="false" aria-controls="question_form-who">
									<h2><span>FAQs – WHOcGMP Certification</span></h2>
								</div>
							
								
								<form action="{{route('aadhya.faqs.store')}}" method="post"   class="collapse" id="question_form-who">
									<input type="hidden" name="generic_question_form-branded_and_generic" id="general3_question_hidden" value="{{old('generic_question_form',route('aadhya.faqs.store'))}}">
									@csrf
								<div class="row">
									{{-- <div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">B vs G Title Para</label>
											<div class="col-sm-10">
												<textarea type="text" class="form-control" name="bgTitlePara"></textarea>
											</div>
										</div>
									</div> --}}
									</div>
									<div class="row mt-3">
									<div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">Search a Qs. Info to Edit</label>
											<div class="col-sm-10">
												<input type="hidden" class="form-control" name="type" value="who">
													<select class="form-control" name="question_no" onchange="getFaqQuestion(this)" type="who">
													<option value="0">Add New OR Select below to Edit a Qs.</option>
													@foreach($faqs->where('type','who') as $order_faq)

														<option value="{{ $order_faq->id }}">{{ $order_faq->question_no.' '.$order_faq->question }}</option>
													@endforeach
												</select>
											</div>
										</div>
									</div>
									</div>
									<div class="row mt-3">
									<div class="col-md-12 col-sm-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Question No.</label>
											<div class="col-sm-10">
												<input type="text" class="form-control who-question_no" name="question_no" onkeypress="return /[0-9]/.test(event.key)">
											</div>
										</div>
									</div>								
									</div>	
									<div class="row">
									<div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">Question</label>
											<div class="col-sm-10">
												<input type="text" class="form-control who-question" name="question">
											</div>
										</div>
									</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group row mb-0">
											<label class="col-md-2 col-sm-6 col-form-label">Answer</label>
											<div class="col-md-10 col-sm-6 bibtextarea"><textarea class="who-answer" name="answer" id="editor7"></textarea></div>
											</div>
										</div>
									</div>
														  
									<div class="bottom-button clearfix">
										<div class="float-right">
											<div class="inputBtn"><input type="submit" class="btn greenBtn" value="Save" /></div>
											<div class="inputBtn"><a href="#" class="btn redBtn" id="deleteQuestionAnswerBtn-who"/>Delete</a></div>
										</div>
									</div>
								</form>
							</div>
							
                        </div>
					
                    </div>
                </div>
            </div>

@endsection
@section('afterScript')
<script>
CKEDITOR.replace( 'editor7' );


function getFaqQuestion(e){
                    // declare the value in the input field to a variable
                    var value = $(e).text();
					var id = $(e).val();
					let type = $(e).attr('type');
			
					for (instance in CKEDITOR.instances)
					{
					    CKEDITOR.instances[instance].updateElement();
					}
					                    $.ajax({
						                       type: "get",       
						                       url: "{{url('aadhya/15-faqs-show/')}}/" + id,
						                    success: function (data) {

												if(data.data){
												let med = data.data;
													$('.'+med.type+'-question_no').val(med.question_no);
													$('.'+med.type+'-question').val(med.question);
													getCKEDitorByType(med.type,med.answer);
													//CKEDITOR.instances.editor4.setData(med.c_1_1_9_generic_intro_details); 	
													let action2 = "{{url('aadhya/15-faqs-update/')}}" +"/"+ med.id;
													$('#question_form-'+med.type).attr('action',action2)

													let question_qq = 'generic_question_form-'+med.type;
													$('input[name="'+question_qq+'"]').val(action2)	
					                                let deleteUrl = "{{url('aadhya/15-faqs-delete/')}}" +"/"+ med.id;
					                                $('#deleteQuestionAnswerBtn-'+med.type).attr('href',deleteUrl)		

												} else {
													$('.'+type+'-question_no').val('');
													$('.'+type+'-question').val('');
													getCKEDitorByType(type,'');
													//CKEDITOR.instances.editor4.setData(med.c_1_1_9_generic_intro_details); 	
													let action2 = "{{url('aadhya/15-faqs-store/')}}" ;
													$('#question_form-'+type).attr('action',action2)

													let question_qq = 'generic_question_form-'+type;
													$('input[name="'+question_qq+'"]').val(action2)	
					                                // let deleteUrl = "{{url('aadhya/15-faqs-delete/')}}" +"/"+ med.id;
					                                // $('#deleteQuestionAnswerBtn-'+med.type).attr('href',deleteUrl)	
												}
						                     }
					   });
                         }



						function getCKEDitorByType(type,answer){


           							switch(type) {
												  case 'order':
												   		CKEDITOR.instances.editor1.setData(answer);
												    break;
												  case 'general_medication':
												 	 	CKEDITOR.instances.editor2.setData(answer);
												    break;
												  case 'medication_ordering':
												    	CKEDITOR.instances.editor3.setData(answer);
												    break;
												    case 'branded_medication':
												    	CKEDITOR.instances.editor4.setData(answer);
												    break
												    case 'online':
												    	CKEDITOR.instances.editor5.setData(answer);
												    break
												    case 'branded_and_generic':
												    	CKEDITOR.instances.editor6.setData(answer);
												    break
												     case 'who':
												    	CKEDITOR.instances.editor7.setData(answer);
												    break

												} 
                         }


</script>
@endsection