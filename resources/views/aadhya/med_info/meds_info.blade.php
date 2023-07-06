@extends('layouts.backend')
@section('content')
<div class="page-define">
		<div class="container-fluid">
			<div class="row justify-content-between">
				<div class="col">
				  <h1>Medicines Information</h1>
				  <span class="shorttxt">Data will show on Index / Medication</span>
				</div>
			</div>		
		</div>
	</div>
            <div class="main-panel">
                <div class="container-fluid">
                    <div class="panel-container">
                         <div class="main-section">
                            <form action="#" method="post">
                                <div class="main-border">
                                    <div class="entry-title">
                                        <h2>EDIT AN EXISTING MEDICINE</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-sm-8">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Search by Generic No. / Generic Name</label>
                                                <div class="col-sm-8">
                                                  <input type="text" class="form-control"  id="search_by_generic_no" placeholder="Search by Generic No. / Generic Name" value="{{$name??''}}"><span href="" class="cross search-cross" style="cursor:pointer;" >X</span>
												<div id="generic_result"></div>
                                                
												</div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <a href="{{route('aadhya.1-meds-info')}}" style="color:red">Refresh</</a>
                                                <label class="col-sm-7 col-form-label text-right"><span class="updatetext"><a href="javascript:void(0);" id="see_vacant_no">See Vacant No.</a></span></label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" data-value="{{$missing}}"  name="see_vacant_no" placeholder="" />
                                                </div>
                                                   <a href="{{url('/')}}/{{$meds_info->c_1_1_4_frontend_url ?? ''}}" target="_blank"  id="frontBtn" class="btn greenBtn cut-button">Go To MEDICINE Page</a>
                                        <a href="#"  class="btn redBtn" id="delteMedinfoBtn" style="margin-left: 20px"  onclick="return confirm('Are you sure to want ot delete this meds?')"/>MASTER DELETE</a>

                                            </div>
                                        </div>
                                    </div>
                                    
                            </form>
                            </div>
                        </div>

                        <div class="main-section double-heading">
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
                            <div class="main-border ">
						
                                <div class="row">
									<div class="col-md-6 col-sm-12">
										  <div class="entry-title title-icon" data-toggle="collapse" href="#generic_form" role="button" aria-expanded="false" aria-controls="generic_form">
											<h2>ADD <span class="text-danger">OR EDIT</span> MEDICINE NAME DETAILS for <span class="med_heading">{{$name ?? '911 – MEDICATION'}}</span></h2>
										</div>
										<small class="mb-3 d-block">DBT: 1-1-Meds-Names</small>
									</div>									
                                </div>
                               	<form action="{{route('aadhya.1-meds-info.store')}}" id="generic_form" class="collapse"  method="POST" value="{{old('generic_form')}}">
                              @if($meds_info)
							<input type="hidden" name="generic_form" id="generic_form_hidden" value="{{old('generic_form',route('aadhya.1-meds-info.udate',$meds_info->id))}}">
                                 @else
					
							<input type="hidden" name="generic_form" id="generic_form_hidden" value="{{old('generic_form',route('aadhya.1-meds-info.store'))}}">
                                 @endif
								@csrf
								<div class="row">
									<div class="col-md-4 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-6 col-form-label text-left">Generic ID Number<span class="astrik">*</span></label>
                                        <div class="col-sm-6">
                                            <input type="text" name="c_1_1_1_generic_id_no" value="{{old('c_1_1_1_generic_id_no',$meds_info->c_1_1_1_generic_id_no ??'')}}" mtype="generic_id" class="form-control search_validation">
											<input type="hidden" name="c_1_1_1_generic_id_nso"  value="{{$meds_info->c_1_1_1_generic_id_no ?? ''}}"  required="" />
                                        	<div class=" text-danger generic_id-danger"></div>
                                           @error('c_1_1_1_generic_id_no') <div class=" text-danger">{{ $message }}</div>@enderror
                                        </div>
                                      </div>                                    
									</div>									
									
									<div class="col-md-8 col-sm-12">								
									   <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-left">Main Generic Name<span class="astrik">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" name="c_1_1_2_main_generic_name"  value="{{old('c_1_1_2_main_generic_name',$meds_info->c_1_1_2_main_generic_name ?? '')}}" mtype="generic" class="form-control search_validation " required="">
                                        <div class=" text-danger  generic-danger"></div>
                                        @error('c_1_1_2_main_generic_name') <div class=" text-danger">{{ $message }}</div>@enderror
                                        </div>
                                      </div>
                                    </div>
									
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Other Names (Generic & Brands)</label>
                                        <div class="col-sm-10">
                                           <input type="text" name="other_name"   value="{{old('other_name',$meds_info->c_1_1_3_other_names ?? '')}}" class="form-control search_validation" mtype="brand" placeholder="" >
                                      	  <div class=" text-danger  brand-danger"></div>
                                           @error('other_name') <div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                      </div>                                    
									</div>
									
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Frontend URL<span class="astrik">*</span></label>
                                        <div class="col-sm-10">
                                           <input type="text" name="frontend_url" value="{{old('frontend_url',$meds_info->c_1_1_4_frontend_url ?? '')}}" class="form-control" placeholder=" " value="{{$meds_info->c_1_1_2_main_generic_name ?? ''}}" required="">
                                        @error('frontend_url') <div class="text-danger" >{{ $message }}</div>@enderror
                                        </div>
                                      </div>                                    
									</div>
									
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Browsing Path Name<span class="astrik">*</span></label>
                                        <div class="col-sm-10">
                                           <input type="text" name="browsing_path" value="{{old('browsing_path',$meds_info->c_1_1_5_browsing_path_name  ?? '')}}"  class="form-control" placeholder=" " value="{{$meds_info->c_1_1_2_main_generic_name ?? ''}}" required="" >
                                        @error('browsing_path') <div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                      </div>                                    
									</div>
									
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">H1 Title in Blue<span class="astrik">*</span></label>
                                        <div class="col-sm-10">
                                           <input type="text" name="title_in_blue" value="{{old('title_in_blue',$meds_info->c_1_1_6_h1_title_in_blue ?? '')}}" class="form-control" placeholder="" value="{{$meds_info->c_1_1_2_main_generic_name ?? ''}}" required="">
                                        @error('title_in_blue') <div class=" text-danger">{{ $message }}</div>@enderror
                                        </div>
                                      </div>                                    
									</div>
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Name in Home Diseases<span class="astrik">*</span></label>
                                        <div class="col-sm-10">
                                           <input type="text" name="home_disease" value="{{old('home_disease',$meds_info->c_1_1_7_name_in_home_diseases ?? '')}}" class="form-control" placeholder="" value="{{$meds_info->c_1_1_2_main_generic_name ?? ''}}" required="">
                                        @error('home_disease') <div class=" text-danger">{{ $message }}</div>@enderror
                                        </div>
                                      </div>                                    
									</div>
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Drug Information Title</label>
                                        <div class="col-sm-10">
                                           <input type="text" name="drug_title" value="{{old('drug_title',$meds_info->c_1_1_8_drug_info_title ?? '')}}" class="form-control" placeholder="" value="{{$meds_info->c_1_1_2_main_generic_name ?? ''}}">
                                        @error('drug_title') <div class=" text-danger">{{ $message }}</div>@enderror
                                        </div>
                                      </div>                                    
									</div>
									
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Generic Intro Details</label>
                                        <div class="col-sm-10 bibtextarea">
                                           <textarea name="intro_detail"  id="editor4">{{old('intro_detail',$meds_info->c_1_1_9_generic_intro_details ?? '')}}</textarea>
                                        @error('intro_detail') <div class=" text-danger">{{ $message }}</div>@enderror
                                        </div>
                                      </div>                                    
									</div>

									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">DI Source Name</label>
                                        <div class="col-sm-10">
                                           <input type="text" name="source_name" value="{{old('source_name',$meds_info->c_1_1_11_di_source_name ?? '')}}" class="form-control" placeholder="" value="{{$meds_info->c_1_1_2_main_generic_name ?? ''}}">
                                        @error('source_name') <div class=" text-danger">{{ $message }}</div>@enderror
                                        </div>
                                      </div>                                    
									</div>
									
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">DI Source URL</label>
                                        <div class="col-sm-10">
                                           <input type="text" name="source_url" value="{{old('source_url',$meds_info->c_1_1_12_di_source_url ?? '')}}"  class="form-control" placeholder=" " value="{{$meds_info->c_1_1_2_main_generic_name ?? ''}}">
                                        @error('source_url') <div class=" text-danger">{{ $message }}</div>@enderror
                                        </div>
                                      </div>                                    
									</div>						
								</div>
								<div class="bottom-button clearfix">
								<div class="text-center">
									<div class="inputBtn"><input type="submit" class="btn greenBtn " id="editMedinfoBtn" style="display: none;" value="Save" /></div>
									<div class="inputBtn"><input type="submit" class="btn greenBtn" id="saveMedinfoBtn" value="Save" /></div>
									<div class="inputBtn" >
                                    
                                       
                                    </div>
								</div>
                       		  </form>
							</div>
							 </div>
                        </div>

						
                                        
                                        
                                        
						
					<div class="main-section">							
							<div class="main-border">
							  <div class="entry-title title-icon" data-toggle="collapse" href="#question_form" role="button" aria-expanded="false" aria-controls="question_form">
									<h2><span>Drug Information for</span> <span class="med_heading">{{$name ?? '911 – MEDICATION'}}</span></h2>
                                    @if (Session::has('success1'))
                        <div class="container">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ Session::get('success1') }}
                            </div>
                        </div>
                        @endif
						@if (Session::has('error2'))
                             <div class="container">
                                 <div class="alert alert-danger">
                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                     {{ Session::get('error2') }}
                                 </div>
                             </div>
                         @endif
								</div>
								<small class="mb-3 d-block">DBT: 1-2- Meds-Info</small>
								<form action="{{route('aadhya.1-meds-question.store')}}" class="collapse" id="question_form" method="post">
								<input type="hidden" name="generic_question_form" id="generic_form_hidden2" value="{{old('generic_question_form',route('aadhya.1-meds-question.store'))}}">
                                @csrf
									<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Search a Qs. Info to Edit</label>
											<div class="col-sm-10">
                                                <select name="" class="form-control"  id="generic_result2" onchange="getmedQuestion(this)" >
                                                    <option value="0" > Select a Qs. to Edit OR Enter New Qs.</option>
                                                    @if($meds_info && $meds_info->meds_questions)
                                                    @foreach($meds_info->meds_questions as $meds_ques)
                                                        <option value="{{ $meds_ques->id }}">{{ $meds_ques->c_1_2_2_qs_no }} - {{ $meds_ques->c_1_2_3_question }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
											{{-- 	<input type="text" class="form-control" id="search_by_question_info_edit" name="search_question_info_edit" value="{{old('search_question_info_edit')}}"><span href="" class="cross question-cross" style="cursor:pointer;position: absolute;right: 22px;top: 0;">X</span> --}}
                                                <input type="hidden" name="c_1_2_1_generic_id_no"  required="required"  value="{{$meds_info->c_1_1_1_generic_id_no ?? ''}}">                                                                                   
                                               @error('search_question_info_edit') <div class="text-danger">{{ $message }}</div>@enderror
											   {{-- <div id="generic_result2">  </div> --}}
											</div>
										</div>
									</div>
									<div class="col-md-12 col-sm-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Question No.<span class="astrik">*</span></label>
											<div class="col-sm-10">
												<input type="text" name="question_no" class="form-control" value="{{old('question_no')}}">
                                               @error('question_no') <div class="text-danger">{{ $message }}</div>@enderror
											</div>
										</div>
									</div>
										
										<div class="col-md-2 col-sm-6">Question<span class="astrik">*</span></div>
										<div class="col-md-10 col-sm-6"><input type="text" class="form-control" name="question" value="{{old('question')}}"></div>
                                        @error('question') <div class="text-danger">{{ $message }}</div>@enderror
									</div>
									<div class="row mt-3">
										<div class="col-md-2 col-sm-6">Answer<span class="astrik">*</span></div>
										<div class="col-md-10 col-sm-6 bibtextarea"><textarea id="editor2"  name="answer" >{{old('answer')}}</textarea></div>
                                         @error('answer') <div class="text-danger">{{ $message }}</div>@enderror
									</div>
																		
									<div class="bottom-button clearfix">
										<div class="float-right">
											<button type="submit" class="btn greenBtn">Save</button>
                               
                                            <a href="#" class="btn redBtn cut-button " id="deleteQuestionAnswerBtn"  onclick="return confirm('Do you want to delete this Qs./Ans. ?')">Delete Qs./Ans.</a>
										</div>
									</div>
								</form>
										
							</div>
						
                        </div>
                                
                             
                                
                                
						
						<div class="main-section uploadPdf">
								<div class="main-border">
									 <div class="entry-title title-icon" data-toggle="collapse" href="#leafletCollaspe" role="button" aria-expanded="false" aria-controls="leafletCollaspe">
										<h2><span>FDA Leaflets for</span>  <span class="med_heading">{{$name ?? '911 – MEDICATION'}}</span></h2>
									</div>
									<small class="mb-3 d-block">DBT: 1-3-Meds-Leaflets <strong>Upload Pdf : /meds/public/info</strong> </small>
									<div class="row">
									<div class="col-sm-12">
								    @if (Session::has('success5'))
                                    <div class="container">
                                   <div class="alert alert-success">
                                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ Session::get('success5') }}
                                    </div>
                                    </div>
                                   @endif
						            @if (Session::has('error5'))
                                    <div class="container">
                                    <div class="alert alert-danger">
                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                     {{ Session::get('error5') }}
                                    </div>
                                    </div>
                                     @endif
								  <form action="{{route('aadhya.1-meds-leaflet.store')}}" class="collapse" method="post" id="leafletCollaspe" enctype="multipart/form-data">
									  @csrf
								{{--	<div class="form-group row">                                               
										<div class="col-md-2">
										   <label class="col-form-label">Language </label>
										 
                                    
                                  		  <select class="form-control"  name="leaf_language" >
                                    		<option>Select Language</option>
                                    
												<option value="1">English</option>
												<option value="2">Arabic</option>
												<option value="3">Bulgarian</option>
												<option value="4">Chinese</option>
												<option value="5">Dutch</option>
												<option value="6">Filipino</option>
												<option value="7">French</option>
												<option value="10">Hebrew</option>
												<option value="12">Japanese</option>
												<option value="13">Korean</option>
												<option value="14">Portuguese</option>
												<option value="15">Romanian</option>
												<option value="16">Russian</option>
												<option value="18">Spanish</option>
												<option value="19">Swedish</option>
												<option value="20">Thai</option>
												<option value="21">Turkish</option>
												<option value="22">Vietnamese</option>

                                    
                                    		</select>
										   @error('language') <div class="text-danger">{{ $message }}</div>@enderror
										   @error('c_1_3_1_generic_id_no') <div class="text-danger">{{ $message }}</div>@enderror

										   
										</div>
										<div class="col-md-10">
												<input type="hidden" name="c_1_3_1_generic_id_no"  value="{{$meds_info->c_1_1_1_generic_id_no ?? ''}}">                                                                                   
										   <label class="col-form-label">Upload Pdf : /info/</label>
										   <input type="file" name="pdf"  class="form-control"  placeholder="" >
										   @error('pdf') <div class="text-danger">{{ $message }}</div>@enderror
										</div>
										
										<div class="col-md-12 mt-2">
									        <div class="inputBtn"><input type="submit" class="btn greenBtn" value="Add" /></div>
								        </div>
									</div> --}}
                                  
							
										<div class="col-md-12 col-sm-12 mb-2" id="leaflets_div">
                                  		  @if($meds_info && $meds_info->meds_leaflets)
                                    @foreach($meds_info->meds_leaflets  as $leaf)
                                    	<div class="row no-gutters">
												<div class="col-md-2 col-sm-6  bder-table  ">
													<div class="inputfile pl-2"><span><a href="{{asset('/info/'.$leaf->c_1_3_4_pdf_file)}}" target="_blank">{{$leaf->c_1_3_3_language}} - {{$leaf->c_1_3_2_pdf_no}}</a></span>
												</div>
												</div>
												<div class="col-md-9 col-sm-6 bder-table pl-2"><div class="inputfile">
												    <input type="hidden" name="leaf_id[]" value="{{$leaf->id}}">
												    <input type="text" name="c_1_3_4_pdf_file[]" class="form-control" value="{{$leaf->c_1_3_4_pdf_file}}">
												    
												</div></div>
												<!--<div class="col-md-1 col-sm-6 text-center"><a href="{{route('aadhya.1-meds-leaflet.delete',$leaf->id)}}"  onclick="return confirm('Do you want to delete this leaflet. ?')"  class="cross">X</a></div>-->
											</div>
                                   @endforeach
                                          @endif
										 
									</div>
										<div class="col-md-12 mt-2 float-right inputBtn">
									        <div class="inputBtn"><input type="submit" class="btn greenBtn" value="SAVE" /></div>
								        </div>
                                 </form>
                                 </div>
								</div>									
								</div>									
						</div>
                                    
                                    
                                    
                                    
                                    
                                    
						<div class="main-section">
                        @if (Session::has('success3'))
                        <div class="container">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ Session::get('success3') }}
                            </div>
                        </div>
                        @endif
						@if (Session::has('error3'))
                             <div class="container">
                                 <div class="alert alert-danger">
                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                     {{ Session::get('error3') }}
                                 </div>
                             </div>
                         @endif
							<form action="{{route('aadhya.1-meds-video.store')}}" method="post" id="video_from" enctype="multipart/form-data">
								@csrf
								<div class="main-border">
											 <div class="entry-title title-icon" data-toggle="collapse" href="#videoCollaspe" role="button" aria-expanded="false" aria-controls="videoCollaspe">
											<h2><span>Video Information for</span>  <span class="med_heading">{{$name ?? '911 – MEDICATION'}}</span></h2>
										</div>
										<small class="mb-3 d-block">DBT: 1-4-Meds-Videos</small>
										<div class="row mt-3 collapse"  id="videoCollaspe">
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-2 col-form-label">Search a Video to Edit</label>
													<div class="col-sm-10">

                                                           <select name="" class="form-control"  id="generic_result3" onchange="getMedVideo(this)" >
                                                                <option value="0" > Select a Video to Edit OR Enter New Video</option>
                                                                @if($meds_info && $meds_info->meds_videos)
                                                                @foreach($meds_info->meds_videos as $meds_video)
                                                                    <option value="{{ $meds_video->id }}">{{ $meds_video->c_1_4_2_video_no }} - {{ $meds_video->c_1_4_3_video_title }}</option>
                                                                    @endforeach
                                                                @endif
                                                            </select>
                                                      {{--   
                                                        <span href="" class="cross video-cross" style="cursor:pointer;position: absolute;
left: -6px;
top: 0;">X</span>
														<input  name="search_a_video_edit" id="search_a_video_edited" value="{{old('search_a_video_edit')}}" type="text" class="form-control"> --}}
                                                         @error('search_a_video_edit') <div class="text-danger">{{ $message }}</div>@enderror
                                                         <input type="hidden" name="generic_video_form" id="generic_form_hidden3" value="{{old('generic_video_form',route('aadhya.1-meds-video.store'))}}">
														 {{-- <div id="generic_result3"></div> --}}
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-2 col-form-label">Video No.</label>
													<div class="col-sm-10">
														<input type="text" name="video_no" value="{{old('video_no')}}" class="form-control" value="{{$meds_info->c_1_1_1_generic_id_no ?? ''}}">

                                                         @error('video_no') <div class="text-danger">{{ $message }}</div>@enderror
														 <input type="hidden" name="c_1_4_1_generic_id_no"  value="{{$meds_info->c_1_1_1_generic_id_no ?? ''}}" required="" />
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-2 col-form-label">Video Title</label>
													<div class="col-sm-10">
														<input  type="text" name="video_title" value="{{old('video_title')}}" class="form-control">
                                                         @error('video_title') <div class="text-danger">{{ $message }}</div>@enderror
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-2 col-form-label">Source Url</label>
													<div class="col-sm-10">
														<input  type="text" name="source_url" value="{{old('source_url')}}" class="form-control">
                                                         @error('source_url') <div class="text-danger">{{ $message }}</div>@enderror
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-2 col-form-label">Display Image:  /meds/public/img 
                                                        <br>
                                                        360px X 203px
                                                        <img name="image" src="#" id="display_image_image_tag"   style="display: none;" height="30px" width="54px"/>

                                                    </label>
													<div class="col-sm-10">
														<input  type="text" name="display_image" value="{{old('display_image')}}" class="form-control">
                                                         @error('display_image') <div class="text-danger">{{ $message }}</div>@enderror
                                                     <font class="font14 darkblueTxt" ><a class="bluehover" style="color:#00000073;margin-left: -22px;" id="display_image" target="_blank" href="javascript:void(0);">No Image Uploaded </a></font>
													</div>
													<div class="col-sm-10" >
														<img name="image" src="#" id="display_image_image_tag"   style="display: none;" height="20px" width="36px"/>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-2 col-form-label">Alt Tag</label>
													<div class="col-sm-10">
														<input  type="text" name="alt_tag" value="{{old('alt_tag')}}" class="form-control">
                                                        @error('alt_tag') <div class="text-danger">{{ $message }}</div>@enderror
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-2 col-form-label">Upload Video: /meds/public/videos</label>
													<div class="col-sm-10">
														<input  type="text" name="upload_video" value="{{old('upload_video')}}" class="form-control">
                                                        @error('upload_video') <div class="text-danger">{{ $message }}</div>@enderror
                                                        <font class="font14 darkblueTxt" ><a class="bluehover" style="color:#00000073;margin-left: -22px;" id="display_video" target="_blank" href="javascript:void(0);">No Video Uploaded </a></font>
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-2 col-form-label">911 Site Video URL</label>
													<div class="col-sm-10">
														<input type="text" name="video_url" value="{{old('video_url')}}" class="form-control">
                                                         @error('video_url') <div class="text-danger">{{ $message }}</div>@enderror
													</div>
												</div>
											</div> 
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Youtube Video URL</label>
                          <div class="col-sm-10">
                            <input type="text" name="youtube_url" value="{{old('youtube_url')}}" class="form-control">
                                                         @error('youtube_url') <div class="text-danger">{{ $message }}</div>@enderror
                          </div>
                        </div>
                      </div>
										
										<div class="bottom-button clearfix col-md-12">
											<div class="float-right inputBtn">
												<input type="submit" class="btn greenBtn" value="Save" />
												 <a href="#" class="btn redBtn cut-button " id="deleteVideoBtn"  onclick="return confirm('Do you want to delete this Video ?')">Delete </a>
									
											</div>
										</div>
										</div>
									</div>
							</form>
						</div>
						


						<div class="main-section">
						@if (Session::has('success55'))
                        <div class="container">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ Session::get('success55') }}
                            </div>
                        </div>
                        @endif
						@if (Session::has('error55'))
                             <div class="container">
                                 <div class="alert alert-danger">
                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                     {{ Session::get('error55') }}
                                 </div>
                             </div>
                         @endif


                            <form action="{{route('aadhya.1-meds-seo.store')}}" id="seo_form" method="post">
                                 @if($meds_info && $meds_info->meds_seo)
							<input type="hidden" name="seo_form" id="seo_form_hidden" value="{{old('seo_form',route('aadhya.1-meds-seo.udate',$meds_info->meds_seo->id))}}">
                                 @else
							<input type="hidden" name="seo_form" id="seo_form_hidden" value="{{old('seo_form',route('aadhya.1-meds-seo.store'))}}">
                                 @endif


								@csrf
                                <div class="main-border">
                                     <div class="entry-title title-icon" data-toggle="collapse" href="#seoCollaspe" role="button" aria-expanded="false" aria-controls="seoCollaspe">
                                        <h2><span>SEO Information for </span> <span class="med_heading">{{$name ?? '911 – MEDICATION'}}</span></h2>
                                    </div>
									<small class="mb-3 d-block">DBT: 1-5-Meds-SEO</small>
                                    <!-- <div class="bottom-button clearfix">
                                    <div class="float-right">
                                        <input type="button" class="btn redBtn" value="Edit" />
										<input type="button" class="btn greenBtn" value="Save" />
										<input type="button" class="btn redBtn" value="Delete" />
                                    </div>
                                    </div> -->
                                    <div class="collapse" id="seoCollaspe">
                                    <div class="form-group row " >
                                        <label class="col-sm-2 col-form-label">Meta Title </label>
                                        <div class="col-sm-10">

                                            <textarea name="meta_title" class="form-control" rows="2">{{old('meta_title',$meds_info->meds_seo->c_1_5_2_meta_title ??'')}}</textarea>
                                           <input type="hidden" name="c_1_5_1_generic_id_no" value="" required="required">

											@error('meta_title') <div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="meta_description"  class="form-control" rows="4">{{old('meta_description',$meds_info->meds_seo->c_1_5_3_meta_description ??'')}}</textarea>
											@error('meta_description') <div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Keyword </label>
                                        <div class="col-sm-10">
                                            <textarea name="meta_keyword"  class="form-control" rows="4">{{old('meta_keyword',$meds_info->meds_seo->c_1_5_4_meta_keyword ?? '')}}</textarea>
											@error('meta_keyword') <div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Hyperlink Page Tags</label>
                                        <div class="col-sm-10">
                                            <textarea name="hyperlink_link" class="form-control" rows="2">{{old('hyperlink_link',$meds_info->meds_seo->c_1_5_5_hyperlink_page_tags ?? '')}}</textarea>
											@error('hyperlink_link') <div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Canonical</label>
                                        <div class="col-sm-10">
                                            <textarea name="canonical" readonly="true" disabled="disabled"  class="form-control" rows="1">{{url('/') }}/{{$meds_info->c_1_1_4_frontend_url ?? ''}}</textarea>
											@error('canonical') <div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Language</label>
                                                <div class="col-sm-6">
                                                    <input name="language" value="{{old('language',$meds_info->meds_seo->c_1_5_7_language ?? '')}}" type="text" class="form-control">
													@error('language') <div class="text-danger">{{ $message }}</div>@enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Country</label>
                                                <div class="col-sm-8">
                                                    <input name="country" value="{{old('country',$meds_info->meds_seo->c_1_5_8_country ?? '')}}" type="text" class="form-control">
													@error('country') <div class="text-danger">{{ $message }}</div>@enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Distribution</label>
                                                <div class="col-sm-8">
                                                    <input name="distribution" value="{{old('distribution',$meds_info->meds_seo->c_1_5_9_distribution ?? '')}}" type="text" class="form-control">
													@error('distribution') <div class="text-danger">{{ $message }}</div>@enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Author</label>
                                                <div class="col-sm-6">
                                                    <input name="author" type="text" value="{{old('author',$meds_info->meds_seo->c_1_5_10_author ??'')}}" class="form-control">
													@error('author') <div class="text-danger">{{ $message }}</div>@enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Robots</label>
                                                <div class="col-sm-8">
                                                    <input name="robots" type="text" value="{{old('robots',$meds_info->meds_seo->c_1_5_11_robots ??'')}}" class="form-control">
													@error('robots') <div class="text-danger">{{ $message }}</div>@enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Revisit After</label>
                                                <div class="col-sm-8">
                                                    <input name="revisit_after" type="text" value="{{old('revisit_after',$meds_info->meds_seo->c_1_5_12_revisit_after??'')}}" class="form-control">
													@error('revisit_after') <div class="text-danger">{{ $message }}</div>@enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Rating Value</label>
                                                <div class="col-sm-6">
                                                    <input name="rating_value" type="text" value="{{old('rating_value',$meds_info->meds_seo->c_1_5_13_rating_value??'')}}" class="form-control">
													@error('rating_value') <div class="text-danger">{{ $message }}</div>@enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Rating Count</label>
                                                <div class="col-sm-8">
                                                    <input name="rating_count" type="text" value="{{old('rating_count',$meds_info->meds_seo->c_1_5_14_rating_count??'')}}" class="form-control">
													@error('rating_count') <div class="text-danger">{{ $message }}</div>@enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Other Tags 3</label>
                                                <div class="col-sm-8">
                                                    <input name="other_tag_3" type="text" value="{{old('other_tag_3',$meds_info->meds_seo->c_1_5_15_other_tags_3??'')}}" class="form-control">
													@error('other_tag_3') <div class="text-danger">{{ $message }}</div>@enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Other Tags 4</label>
                                        <div class="col-sm-10">
                                            <input name="other_tag_4" type="text" value="{{old('other_tag_4',$meds_info->meds_seo->c_1_5_16_other_tags_4??'')}}" class="form-control">
											@error('other_tag_4') <div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Other Tags 5</label>
                                        <div class="col-sm-10">
                                            <input name="other_tag_5" type="text" value="{{old('other_tag_5',$meds_info->meds_seo->c_1_5_17_other_tags_5??'')}}" class="form-control">
											@error('other_tag_5') <div class="text-danger">{{ $message }}</div>@enderror
                                        </div>
                                    </div>
                                   <div class="bottom-button ">
                         
                                       <div class="">
                                        
                                        <div class="inputBtn float-right">	<input type="submit" class="btn greenBtn" value="Save" />
                                        </div>
                                     </div>
									
                                </div>
                                </div>
                                </div>
                                
                            </form>
                        </div>
					
                    </div>
                </div>
            </div>

@endsection
@section('afterScript')



<script>

                                    
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
	let med_info_action = $('#generic_form_hidden').val();							

    $('#generic_form').attr('action',med_info_action)
      let seo_info_action = $('#seo_form_hidden').val();                          
    $('#seo_form').attr('action',seo_info_action)						
	$('#search_by_generic_no').keyup(function(e){

		let genrice_no = $(this).val();
		$.ajax({
                    type: "get",
                    url: "{{route('aadhya.1-meds-info.search')}}",
                    data: {	
                        genrice_no: genrice_no
                    },
                    success: function (data) {
						$('#generic_result').html(data);
                        $('#editMedinfoBtn').hide();
                        $('#delteMedinfoBtn').hide();
                    }
                });
				
	});

	$('input[name="c_1_1_1_generic_id_no"]').change(function(e){

		let genrice_no = $(this).val();
		let type = $(this).attr('mtype');

		$.ajax({
                    type: "post",
                    url: "{{route('aadhya.1-meds-info.search.validation')}}",
                    data: {	
                        q: genrice_no,
                        type: type,
                    },
                    success: function (data) {
						if(data.status){
                        	$('.generic_id-danger').text('Already exits');
                        		$('input[name="c_1_1_1_generic_id_no"]').val('');
                         setTimeout(()=>{ $('.generic_id-danger').text(''); }, 3000)
                        }
                    
                    }
                });
				
	});

$('input[name="c_1_1_2_main_generic_name"]').change(function(e){

		let genrice_no = $(this).val();
		let type = $(this).attr('mtype');
        let c_1_1_1_generic_id_no  = $('input[name="c_1_1_1_generic_id_no"]').val();


		$.ajax({
                    type: "post",
                    url: "{{route('aadhya.1-meds-info.search.validation')}}",
                    data: {	
                        q: genrice_no,
                        type: type,
                         genrice_no:c_1_1_1_generic_id_no,
                    },
                    success: function (data) {
						if(data.status){
                        	$('.generic-danger').text(data.found +' Already exits');
                        		// $('input[name="c_1_1_2_main_generic_name"]').val('');
                         setTimeout(()=>{ $('.generic-danger').text(''); }, 3000)
                        }
                    }
                });
				
	});

$('input[name="other_name"]').change(function(e){

		let genrice_no = $(this).val();
		let type = $(this).attr('mtype');
        let c_1_1_1_generic_id_no  = $('input[name="c_1_1_1_generic_id_no"]').val();

		$.ajax({
                    type: "post",
                    url: "{{route('aadhya.1-meds-info.search.validation')}}",
                    data: {	
                        q: genrice_no,
                        type: type,
                        genrice_no:c_1_1_1_generic_id_no,
                    },
                    success: function (data) {
						if(data.status){
                        	$('.brand-danger').text(data.found+' Already exits');
                        		// $('input[name="other_name"]').val('');
                       		 setTimeout(()=>{ $('.brand-danger').text(''); }, 3000)
                        }
                    }
                });
				
	});

$('.search-cross').click(function(e){
$('#generic_result').html('');
$('#search_by_generic_no').val('');
$('input[type="text"]').val('');
$('input[type="number"]').val('');
$('#display_image_image_tag').hide();
$('#display_image').hide('No Image Uploaded ');
$('#display_video').hide('No Video Uploaded ');
$('textarea').text('');
$('#leaflets_div').text('')
$('.med_heading').text('911 – MEDICATION');
for (instance in CKEDITOR.instances)
{
    CKEDITOR.instances[instance].updateElement();
}
CKEDITOR.instances.editor4.setData(''); 
CKEDITOR.instances.editor2.setData(''); 

});

	function getmedInfo(e){
                    // declare the value in the input field to a variable
                    var value = $(e).text();
					var id = $(e).attr('data-id');
					$('#search_by_generic_no').val(value);
					$('#generic_result').html('');
					for (instance in CKEDITOR.instances)
{
    CKEDITOR.instances[instance].updateElement();
}
                      $.ajax({
	                       type: "get",       
	                       url: "{{url('aadhya/1-meds-info-show')}}/" + id,
	                    success: function (data) {

							let med = data.data;
                        
                        console.log(data);
								$('input[name="c_1_1_1_generic_id_no"]').val(med.c_1_1_1_generic_id_no);
								$('input[name="c_1_2_1_generic_id_no"]').val(med.c_1_1_1_generic_id_no);
								$('input[name="c_1_4_1_generic_id_no"]').val(med.c_1_1_1_generic_id_no);
								$('input[name="c_1_5_1_generic_id_no"]').val(med.c_1_1_1_generic_id_no);
								$('input[name="c_1_3_1_generic_id_no"]').val(med.c_1_1_1_generic_id_no);
								$('.med_heading').text(med.c_1_1_1_generic_id_no + '-' + med.c_1_1_2_main_generic_name);
								
								$('input[name="c_1_1_2_main_generic_name"]').val(med.c_1_1_2_main_generic_name);
								$('input[name="other_name"]').val(med.c_1_1_3_other_names);
								$('input[name="frontend_url"]').val(med.c_1_1_4_frontend_url);
								$('input[name="browsing_path"]').val(med.c_1_1_5_browsing_path_name);
								$('input[name="title_in_blue"]').val(med.c_1_1_6_h1_title_in_blue);
								$('input[name="home_disease"]').val(med.c_1_1_7_name_in_home_diseases);
								$('input[name="drug_title"]').val(med.c_1_1_8_drug_info_title);
								CKEDITOR.instances.editor4.setData(med.c_1_1_9_generic_intro_details); 
								$('input[name="source_name"]').val(med.c_1_1_11_di_source_name);
								$('input[name="source_url"]').val(med.c_1_1_12_di_source_url);	
						

                                if(med.meds_seo){
                                   $('textarea[name="meta_title"]').text(med.meds_seo.c_1_5_2_meta_title);
                                      $('textarea[name="meta_description"]').text(med.meds_seo.c_1_5_3_meta_description);
                                     $('textarea[name="meta_keyword"]').text(med.meds_seo.c_1_5_4_meta_keyword);
                                    $('textarea[name="hyperlink_link"]').text(med.meds_seo.c_1_5_5_hyperlink_page_tags);
                                                                let seo_url = "{{url('/')}}"+ "/"+ med.c_1_1_4_frontend_url;
                                                                		$('#frontBtn').attr('href',seo_url);	
                                                            
                                  $('textarea[name="canonical"]').text(seo_url);
                                 $('input[name="language"]').val(med.meds_seo.c_1_5_7_language); $('input[name="country"]').val(med.meds_seo.c_1_5_8_country);
                                     $('input[name="distribution"]').val(med.meds_seo.c_1_5_9_distribution); $('input[name="author"]').val(med.meds_seo.c_1_5_10_author);
                                      $('input[name="robots"]').val(med.meds_seo.c_1_5_11_robots);
                                      $('input[name="revisit_after"]').val(med.meds_seo.c_1_5_12_revisit_after);
                                      $('input[name="rating_value"]').val(med.meds_seo.c_1_5_13_rating_value);
                                      $('input[name="rating_count"]').val(med.meds_seo.c_1_5_14_rating_count);
                                      $('input[name="other_tag_3"]').val(med.meds_seo.c_1_5_15_other_tags_3);
                                      $('input[name="other_tag_4"]').val(med.meds_seo.c_1_5_15_other_tags_3);
                                      $('input[name="other_tag_5"]').val(med.meds_seo.c_1_5_17_other_tags_5);
                                                                let seo_action = "{{url('aadhya/1-meds-seo/upadate')}}" +"/"+ med.meds_seo.id;
                                                                $('#seo_form').attr('action',seo_action)
                                                                $('#seo_form_hidden').val(seo_action)
                                } else {
                                    let seo_action = "{{url('aadhya/1-meds-seo')}}" ;
                                                                $('#seo_form').attr('action',seo_action)
                                                                $('#seo_form_hidden').val(seo_action)
                                }
 //                                } else {
 //                                   $('textarea[name="meta_title"]').text('');
 //      $('textarea[name="meta_description"]').text('');
 //     $('textarea[name="meta_keyword"]').text('');
 //    $('textarea[name="hyperlink_link"]').text('');
 //  $('textarea[name="canonical"]').text('');
 // $('input[name="language"]').val(''); $('input[name="country;"]').val('');
 //     $('input[name="distribution"]').val(''); $('input[name="author;"]').val('');
 //      $('input[name="robots"]').val('');
 //      $('input[name="revisit_after"]').val('');
 //      $('input[name="rating_value"]').val('');
 //      $('input[name="rating_count"]').val('');
 //      $('input[name="other_tag_3"]').val('');
 //      $('input[name="other_tag_4"]').val('');
 //      $('input[name="other_tag_5"]').val('');
 //                                let seo_action = "{{url('aadhya/1-meds-seo')}}";
 //                                $('#seo_form').attr('action',seo_action);
 //                                $('#seo_form_hidden').val(seo_action);
 //                        }
								let action = "{{url('aadhya/1-meds-info/upadate')}}" +"/"+ med.id;
								$('#generic_form').attr('action',action)
								$('#generic_form_hidden').val(action)		
//                                 if(med.meds_seo){
//                                 	$('textarea[name="c_1_5_1_generic_id_no"]').text(med.meds_seo.c_1_5_1_generic_id_no);
//                                 	$('textarea[name="meta_title"]').text(med.meds_seo.c_1_5_2_meta_title);
//                                 	$('textarea[name="meta_description"]').text(med.meds_seo.c_1_5_3_meta_description);
//                                 	$('textarea[name="meta_keyword"]').text(med.meds_seo.c_1_5_4_meta_keyword);
//                                 	$('textarea[name="hyperlink_link"]').text(med.meds_seo.c_1_5_5_hyperlink_page_tags);
//                                 	$('textarea[name="canonical"]').text(med.meds_seo.c_1_5_6_canonical);
//                                 	$('input[name="language"]').val(med.meds_seo.c_1_5_7_language);
//                                 	$('input[name="country"]').val(med.meds_seo.c_1_5_8_country);
//                                 	$('input[name="disribution"]').val(med.meds_seo.c_1_5_9_distribution);
//                                 	$('input[name="author"]').val(med.meds_seo.c_1_5_10_author);
//                                 	$('input[name="robots"]').val(med.meds_seo.c_1_5_11_robots);
//                                 	$('input[name="revisit_after"]').val(med.meds_seo.c_1_5_12_revisit_after);
//                                 	$('input[name="rating_value"]').val(med.meds_seo.c_1_5_13_rating_value);
//                                 	$('input[name="rating_count"]').val(med.meds_seo.c_1_5_14_rating_count);
//                                 	$('input[name="other_tag_3"]').val(med.meds_seo.c_1_5_15_other_tags_3);
//                                 	$('input[name="other_tag_4"]').val(med.meds_seo.c_1_5_16_other_tags_4);
//                                 	$('input[name="other_tag_5"]').val(med.meds_seo.c_1_5_17_other_tags_5);
//                              	   let action = "{{url('aadhya/1-meds-seo/upadate')}}" +"/"+ med.meds_seo.id;
// 										$('#seo_form').attr('action',action)
// 									$('#seo_form_hidden').val(action)
//                                 }
                        
                        	if(med.meds_leaflets){ 
                         $('#leaflets_div').html('')
                                			let asset_url = "{{asset('/info/')}}/";
                                			let delte_url = "{{url('1-meds-leaflet/delete/')}}";
                            	for (const [key, value] of Object.entries(med.meds_leaflets)) {
                                		
                                		let  whatIWant = value.c_1_3_4_pdf_file || '' ;
  										// leaflet_html = '<div class="row no-gutters"><div class="col-md-2 col-sm-6  bder-table "><div class="inputfile pl-2"><span>'+value.c_1_3_3_language +' </span></div></div><div class="col-md-9 col-sm-6 bder-table pl-2"><div class="inputfile"><a href="'+ asset_url + value.c_1_3_4_pdf_file + '" target="_blank">'+ value.c_1_3_4_pdf_file +'</a></div></div><div class="col-md-1 col-sm-6 padding-table text-center"><a href="'+delte_url+'/'+ value.id + '" onclick="return confirm("Do you want to delete this leaflet. ?")"  class="cross" class="cross">X</a></div></div>';
                                		 	leaflet_html = '<div class="row no-gutters"><div class="col-md-2 col-sm-6  bder-table  "><div class="inputfile pl-2"><span><a href="'+asset_url  +whatIWant +'" target="_blank">'+value.c_1_3_3_language+' -'+value.c_1_3_2_pdf_no+'</a></span></div></div><div class="col-md-9 col-sm-6 bder-table pl-2"><div class="inputfile"><input type="hidden" name="leaf_id[]" value="'+value.id+'"> <input type="text" name="c_1_3_4_pdf_file[]" class="form-control" value="'+whatIWant+'"></div></div></div>'; 	
                                	$('#leaflets_div').append(leaflet_html)
									}
                            }

                            if(med.meds_questions){ 
                                                 questions_html = '';
                                             $('#generic_result2').html('')
                                            // let asset_url = "{{asset('/info/')}}";
                                            // let delte_url = "{{url('1-meds-leaflet/delete/')}}";

                                    $('#generic_result2').append('<option value="0" >Select a Qs. to Edit OR Enter New Qs.</option>');

                                for (const [key, value] of Object.entries(med.meds_questions)) {
                                        questions_html = '<option value="'+value.id+'">'+value.c_1_2_2_qs_no+' - '+value.c_1_2_3_question+'</option>';
                                       $('#generic_result2').append(questions_html);
                                       }
                                   }

                                     if(med.meds_videos){ 
                                                 video_html = '';
                                             $('#generic_result3').html('')
                                            // let asset_url = "{{asset('/info/')}}";
                                            // let delte_url = "{{url('1-meds-leaflet/delete/')}}";

                                    $('#generic_result3').append('<option value="0" >Select a Video to Edit OR Enter New Video</option>');

                                for (const [key, value] of Object.entries(med.meds_videos)) {
                                        video_html = '<option value="'+value.id+'">'+value.c_1_4_2_video_no+' - '+value.c_1_4_3_video_title+'</option>';
                                       $('#generic_result3').append(video_html);
                                       }
                                   }
								$('#generic_form_hidden').val(action)	

                                    $('#saveMedinfoBtn').toggle();
                        $('#editMedinfoBtn').toggle();
                        let delete_url = "{{url('/aadhya/1-meds-info/delete')}}/"+med.c_1_1_1_generic_id_no
                             				
                          $('#editMedinfoBtn').show();
                        $('#delteMedinfoBtn').show();
                        $('#delteMedinfoBtn').attr('href',delete_url);
                         

                    
								
	                     }
                         });
                    // assign the value to the search box
                   
                    // after click is done, search results segment is made empty
                   
                }

//second searching part...
</script>

<script>
  let med_question_action = $('#generic_form_hidden2').val();							
$('#question_form').attr('action',med_question_action)						
	$('#search_by_question_info_edit').keyup(function(e){

        let question_c_1_2_1_generic_id_no = $('input[name="c_1_2_1_generic_id_no"]').val();
        console.log(question_c_1_2_1_generic_id_no  );
            $('#generic_result2').html('');
        if(!question_c_1_2_1_generic_id_no){
            alert('Please Select Medicine');
            $(this).val('');
            return false;
        }

		let question_info_no = $(this).val();
		$.ajax({
                    type: "get",
                    url: "{{route('aadhya.1-meds-question.search')}}",
                    data: {	
                        question_info_no: question_info_no,
                        med_id:question_c_1_2_1_generic_id_no
                    },
                    success: function (data) {
						$('#generic_result2').html(data);
                    }
                });
				
	});

	function getmedQuestion(e){
                    // declare the value in the input field to a variable
                
					var id = $(e).val();
                    if(id == 0){
                        $('#search_by_question_info_edit').val('');
                             $('input[name="question_no"]').val('');
                                $('input[name="question"]').val('');
                                CKEDITOR.instances.editor2.setData('');
                                //CKEDITOR.instances.editor4.setData(med.c_1_1_9_generic_intro_details);    
                                let action2 = "{{route('aadhya.1-meds-question.store')}}";
                                $('#question_form').attr('action',action2)
                                $('#generic_form_hidden2').val(action2) 
                                let deleteUrl = "#";
                                $('#deleteQuestionAnswerBtn').attr('href',deleteUrl); 
                              
                                $('#deleteVideoBtn').attr('href',deleteUrl);
                                return true;
                    }
					// $('#search_by_question_info_edit').val(value);
     //                      $('#generic_result2').html('');
					for (instance in CKEDITOR.instances)
{
    CKEDITOR.instances[instance].updateElement();
}
                    $.ajax({
	                       type: "get",       
	                       url: "{{url('aadhya/1-meds-question-show/')}}/" + id,
	                    success: function (data) {
							let med = data.data;
								$('input[name="question_no"]').val(med.c_1_2_2_qs_no);
								$('input[name="question"]').val(med.c_1_2_3_question);
								CKEDITOR.instances.editor2.setData(med.c_1_2_4_answer);
								//CKEDITOR.instances.editor4.setData(med.c_1_1_9_generic_intro_details); 	
								let action2 = "{{url('aadhya/1-meds-question/update/')}}" +"/"+ med.id;
								$('#question_form').attr('action',action2)
								$('#generic_form_hidden2').val(action2)	
                                let deleteUrl = "{{url('aadhya/1-meds-question/delete/')}}" +"/"+ med.id;
                                $('#deleteQuestionAnswerBtn').attr('href',deleteUrl)      
                              
                    
								
	                     }
                         });

    }
</script>

<script>
  let med_video_action = $('#generic_form_hidden3').val();							
$('#video_from').attr('action',med_video_action)						
	$('#search_a_video_edited').keyup(function(e){
        let question_c_1_4_1_generic_id_no = $('input[name="c_1_4_1_generic_id_no"]').val();
            $('#generic_result2').html('');
            if(!question_c_1_4_1_generic_id_no){
            alert('Please Select Medicine');
            $(this).val('');
            return false;
        }
		let video_info_no = $(this).val();
		$.ajax({
                    type: "get",
                    url: "{{route('aadhya.1-meds-video.search')}}",
                    data: {	
                        video_info_no: video_info_no
                    },
                    success: function (data) {
						$('#generic_result3').html(data);
                    }
                });
				
	});

	 function getMedVideo(e){
                    // declare the value in the input field to a variable
                    var value = $(e).text();
					var id = $(e).val();
                    if(id == 0){
                         $('#search_a_video_edited').val('');
                             $('input[name="video_no"]').val('');
                                $('input[name="video_title"]').val('');
                                $('input[name="alt_tag"]').val('');
                                $('input[name="video_url"]').val('');
                                $('input[name="youtube_url"]').val('');
                                $('input[name="source_url"]').val('');
                                	$('input[name="display_image"]').val('');
								$('input[name="upload_video"]').val('');
                                $('#display_image_image_tag').hide();
                                $('#display_image').hide('No Image Uploaded ');
                                //CKEDITOR.instances.editor4.setData(med.c_1_1_9_generic_intro_details);    
                                let action2 = "{{route('aadhya.1-meds-video.store')}}";
                                $('#video_from').attr('action',action2)
                                $('#display_video').attr('#')
                                $('#display_video').text('')
                                $('#generic_form_hidden3').val(action2) 
                                let deleteUrl = "#";
                                $('#deleteVideoBtn').attr('href',deleteUrl)
                    }
					// $('#search_a_video_edited').val(value);
					// $('#generic_result3').html('');
					for (instance in CKEDITOR.instances)
{
    CKEDITOR.instances[instance].updateElement();
}
                    $.ajax({
	                       type: "get",       
	                       url: "{{url('aadhya/1-meds-video-show/')}}/" + id,
	                    success: function (data) {
							let med = data.data;
								$('input[name="video_no"]').val(med.c_1_4_2_video_no);
								$('input[name="video_title"]').val(med.c_1_4_3_video_title);
								$('input[name="alt_tag"]').val(med.c_1_4_5_image_alt_tag);
								$('input[name="video_url"]').val(med.c_1_4_7_video_url);
                $('input[name="youtube_url"]').val(med.youtube_url);
								$('input[name="source_url"]').val(med.source_url);
								$('input[name="display_image"]').val(med.c_1_4_4_image);
								$('input[name="upload_video"]').val(med.c_1_4_6_video_file);
                                $('#display_image').text("{{ asset('img-vi/') }}/"+med.c_1_4_4_image);
                                $('#display_image').attr('href',"{{ asset('img-vi/') }}/"+med.c_1_4_4_image);
                                $('#display_video').text("{{ asset('videos/') }}/"+med.c_1_4_6_video_file);
                                $('#display_video').attr('href',"{{ asset('videos/') }}/"+med.c_1_4_6_video_file);
								//CKEDITOR.instances.editor2.setData(med.c_1_2_4_answer);	
								let action3 = "{{url('aadhya/1-meds-video/update/')}}" +"/"+ med.id;
								$('#video_from').attr('action',action3)
								$('#generic_form_hidden3').val(action3)	
								$('#display_image_image_tag').show();
								$('#display_image_image_tag').attr('src',"{{asset('img-vi/')}}"+ '/'+ med
								.c_1_4_4_image);
								
								  let deleteUrl1 = "{{url('aadhya/1-meds-video/delete/')}}" +"/"+ med.id;
                                $('#deleteVideoBtn').attr('href',deleteUrl1)

                    
								
	                     }
                         });

    }


    $('.question-cross').click(function (argument) {
            $('#generic_result2').html('');

        $('#search_by_question_info_edit').val('');
                             $('input[name="question_no"]').val('');
                                $('input[name="question"]').val('');
                                CKEDITOR.instances.editor2.setData('');
                                //CKEDITOR.instances.editor4.setData(med.c_1_1_9_generic_intro_details);    
                                let action2 = "{{route('aadhya.1-meds-question.store')}}";
                                $('#question_form').attr('action',action2)
                                $('#generic_form_hidden2').val(action2) 
                                let deleteUrl = "#";
                                $('#deleteQuestionAnswerBtn').attr('href',deleteUrl)
    })  

      $('.video-cross').click(function (argument) {
            $('#generic_result3').html('');

        $('#search_a_video_edited').val('');
                             $('input[name="video_no"]').val('');
                                $('input[name="video_title"]').val('');
                                $('input[name="alt_tag"]').val('');
                                $('input[name="video_url"]').val('');
                                $('input[name="youtube_url"]').val('');
                                $('#display_image_image_tag').hide();
                                $('#display_image').hide('No Image Uploaded ');
                                //CKEDITOR.instances.editor4.setData(med.c_1_1_9_generic_intro_details);    
                                let action2 = "{{route('aadhya.1-meds-video.store')}}";
                                $('#video_from').attr('action',action2)
                                $('#generic_form_hidden3').val(action2) 
                                let deleteUrl = "#";
                                $('#deleteVideoBtn').attr('href',deleteUrl)
    })

    // $('#search_by_question_info_edit').change(function (argument) {
    //         $('#generic_result2').html('');
      
    //                $('input[name="question_no"]').val('');
    //                             $('input[name="question"]').val('');
    //                             CKEDITOR.instances.editor2.setData('');
    //                             //CKEDITOR.instances.editor4.setData(med.c_1_1_9_generic_intro_details);    
    //                             let action2 = "{{route('aadhya.1-meds-question.store')}}";
    //                             $('#question_form').attr('action',action2)
    //                             $('#generic_form_hidden2').val(action2) 
    //                             let deleteUrl = "#";
    //                             $('#deleteQuestionAnswerBtn').attr('href',deleteUrl)
    // });

    $('#see_vacant_no').click(function (argument) {
        
        let value = $('input[name="see_vacant_no"]').attr('data-value');
        $('input[name="see_vacant_no"]').val(value)
    })
</script>


@endsection