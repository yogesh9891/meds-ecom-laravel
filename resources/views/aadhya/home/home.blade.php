@extends('layouts.backend')
@section('content')

<div class="page-define">
		<div class="container-fluid">
			<div class="row justify-content-between">
				<div class="col">
				  <h1>Home Page</h1>
				  <span class="shorttxt">Data will show on HOME</span>
				</div>
			</div>		
		</div>
	</div>
            <div class="main-panel">
                <div class="container-fluid">
                    <div class="panel-container">
                        <div class="main-section double-heading">
							
                    <div class="main-border ">
                                <div class="row">
									<div class="col-md-12 col-sm-12">
										 <div class="entry-title title-icon" data-toggle="collapse" href="#home_header_form" role="button" aria-expanded="false" aria-controls="home_header_form">
											<h2><span class="darkblueTxt">Header Image</span></h2>
										</div>
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
										<small class="mb-3 d-block">DBT: 3-1-Home-Header</small>
									</div>
                                </div>
                        <form action="{{route('aadhya.3-home-header.store')}}" class="collapse" method="post" id="home_header_form" enctype="multipart/form-data">
                        	<input type="hidden" name="home_header_form" id="home_header_form_hidden" value="{{old('home_header_form',route('aadhya.3-home-header.store'))}}">
							@csrf			
                                       
                                        	<div class="row form-group">
										
										   <div class="col-sm-3">
										    <label class="col-form-label">Image No.</label>                                            
										     <input name="image_no" type="text" value="{{old('image_alt_tag')}}" class="form-control" placeholder="Enter Image no" id="image_search_no"><span href="" class="cross home-search-cross">X</span>
										     <div id="banner_result"></div>
										   </div>
                                        <div class="col-sm-3">
										    <label class="col-form-label">Text Color Code</label>                                            
										     <input name="text_color" type="text" value="{{old('text_color')}}" class="form-control" placeholder="Text Color Code">
										   </div>
                                        
                                        <div class="col-sm-3">
										    <label class="col-form-label">Color Shade</label>  
                                        	<p class="border" id="color-shade" style="background-color:#fff">&nbsp;&nbsp;&nbsp;</p>
											
										   </div>
                                        
                                        <div class="col-sm-3">
										    <label class="col-form-label">Image Icon</label>                                            
										    <img src="#" id="image-icon" height="50px" width="100px" alt="No Icon">
										   </div>
										</div>
                                        
							            <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Image Name (/img/ : 2024 x 1349)</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input name="image_name" type="file" value="{{old('image_name')}}" class="form-control" placeholder="Image Name">
										      <font class="font14 darkblueTxt" ><a class="bluehover" style="color:#00000073;" id="banner_image" target="_blank" href="javascript:void(0);">No Image Uploaded </a></font>
											 @error('image_name') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										</div>
										<div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Image Alt Tag</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input name="image_alt_tag" type="text" value="{{old('image_alt_tag')}}" class="form-control" placeholder="Image Alt Tag">
											 @error('image_alt_tag') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										</div>
										<div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Message On Image</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input name="message_on_image" type="text" value="{{old('message_on_image')}}" class="form-control" placeholder="Message On Image">
											 @error('message_on_image') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										</div>
		
										<div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">URL To Open</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input name="url_to_open" type="text" value="{{old('url_to_open')}}" class="form-control" placeholder="URL To Open">
											 @error('url_to_open') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										</div>

										<div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Display:</label>                                            
										   </div>
										   <div class="col-sm-9">
										    <input name="banner_display" type="radio" value="S"> Show <input name="banner_display" type="radio" value="H"> Hide 
											 @error('url_to_open') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										</div>
                                       <div class="text-right">
									   
										<button type="submit" class="btn greenBtn">Save</button>
                                     	   <div class="inputBtn"><input type="submit" class="btn greenBtn" value="Add Slider" /></div>
											<div class="inputBtn">
												<a href="#" class="btn redBtn" id="deleteAction" value="Delete Selected" >Delete Selected</a>
											</div>
                                       </div>


	
                                
							
						</form>
                        </div>
								
						<!--  -->
                    		<div class="main-section mt-4">
						<div class="main-section">							
							<div class="main-border">
								<div class="entry-title title-icon" data-toggle="collapse" href="#home_main_section" role="button" aria-expanded="false" aria-controls="home_main_section">
									<h2><span>Main Body Text</span></h2>
									@if (Session::has('success2'))
                                    <div class="container">
                                   <div class="alert alert-success">
                                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ Session::get('success2') }}
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
								<small>DBT: 3-2-Main-Body</small>
						<form action="{{route('aadhya.3-home-main.store')}}" id="home_main_section" method="post" class="collapse">
							
							@csrf
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">H1 Title in Green</label>
											<div class="col-sm-10">
												<input type="text" name="title_in_green" class="form-control" value="{{$main->c_3_2_1_h1_title_in_green}}">
											</div>
										</div>
									</div>
										
									</div>
									<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Qs Ans H2 Green Title</label>
											<div class="col-sm-10">
												<input type="text" name="ans_h2_green" class="form-control" value="{{$main->c_3_2_2_qa_h2_green_title}}">
											</div>
										</div>
									</div>
										
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row mb-0">
												<label class="col-sm-2 col-form-label">H2 Blue Line 1</label>
												<div class="col-sm-10">
													<input type="text"name="h2_blue_line_1" class="form-control" value="{{$main->c_3_2_3_h2_blue_line_1}}">
												</div>
											</div>
										</div>										
									</div>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group row">
												<div class="col-md-2 col-sm-6"><label>Text below Blue Line 1</div>
												<div class="col-md-10 col-sm-6 bibtextarea">
													<textarea name="text_below_blue_line_1" id="editor1">{{$main->c_3_2_4_text_below_blue_1}}</textarea>
												</div>
											</div>
										</div>
									</div>	
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row mb-0">
												<label class="col-sm-2 col-form-label">H2 Blue Line 2</label>
												<div class="col-sm-10">
													<input type="text" name="h2_blue_line_2" class="form-control" value="{{$main->c_3_2_5_h2_blue_line_2}}">
												</div>
											</div>
										</div>										
									</div>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group row">
												<div class="col-md-2 col-sm-6"><label>Text below Blue Line 2</div>
												<div class="col-md-10 col-sm-6 bibtextarea">
													<textarea name="text_below_blue_line_2" id="editor2">{{$main->c_3_2_6_text_below_blue_2}}</textarea>
											</div>
											</div>
										</div>
									</div>	
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row mb-0">
												<label class="col-sm-2 col-form-label">H2 Blue Line 3</label>
												<div class="col-sm-10">
													<input type="text" name="h2_blue_line_3" class="form-control" value="{{$main->c_3_2_7_h2_blue_line_3}}">
												</div>
											</div>
										</div>										
									</div>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group row">
												<div class="col-md-2 col-sm-6"><label>Text below Blue Line 3</div>
												<div class="col-md-10 col-sm-6 bibtextarea">
													<textarea name="text_below_blue_line_3" id="editor3">{{$main->c_3_2_8_text_below_blue_3}}</textarea> 
											</div>
											</div>
										</div>
									</div>	
								
									
									<div class="bottom-button clearfix">
										<div class="float-right">
											<div class="inputBtn"><input type="submit" class="btn greenBtn" value="Save" /></div>
										</div>
									</div>
								</form>
										
							</div>						
                     </div>

					 </div>
					  <div class="main-section mt-5">
					<div class="main-border">						
						<div class="row">						
									<div class="col-md-7 col-sm-12">
									 <div class="entry-title title-icon" data-toggle="collapse" href="#generic_home_form" role="button" aria-expanded="false" aria-controls="generic_home_form">
											<h2>GENERAL DISEASES Information</h2>
										</div>
										<small class="d-block mb-3">DBT: 3-3-General-Diseases</small>
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
									</div>
									
									<div class="col-md-5">
										<div class="entry-title right-heading">
											<div class="selectedit align-items-center">
												<div class="edittext">Edit</div>
												<select class="form-control" name="general_diseases" id="general_diseases_to_edit" style="width:400px;">
												
													<option>Select GENERAL Disease to EDIT</option>
													@foreach($general->sortBy('c_3_3_2_general_disease') as $general)
													<option value="{{$general->id}}">{{$general->c_3_3_2_general_disease}} </option>
													
													@endforeach
												</select>
												<div class="edittext">	<span href="" id="genrice_diease" class="cross  ">X</span></div>
												

											</div>
										</div>
									</div>
                                </div>
						<form action="{{route('aadhya.3-home-general.store')}}" class="collapse" method="post" id="generic_home_form" enctype="multipart/form-data">
							<input type="hidden" name="generic_home_form" id="generic_home_form_hidden" value="{{old('generic_home_form',route('aadhya.3-home-general.store'))}}">
							@csrf
							<div class="row">
								<div class="col-md-10">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">General Disease</label>
										<div class="col-sm-8" style="padding: 0 8px;margin-left:40px;">
										  <input type="text" name="general_disease" id="general_disease_id" class="form-control" required="">
										   @error('general_disease') <div class="text-danger">{{ $message }}</div>@enderror

										</div>
									</div>
								</div>
								
                                <div class="col-md-2">
									<div class="form-group row">
										<label class="col-sm-5 col-form-label text-right">ID No.</label>
										<div class="col-sm-7">
										  <input type="text" name="id_no" id="id_number" class="form-control" required="">
										   @error('id_no') <div class="text-danger">{{ $message }}</div>@enderror
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Square Image 380x287</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="square_image" class="form-control" placeholder="no file chosen">
                                                  <font class="font14 darkblueTxt" ><a class="bluehover" style="color:#00000073;" id="img_square" target="_blank" href="javascript:void(0);">No Image Uploaded </a></font>
                                        </div>
									</div>
								</div>
								<div class="col-md-12">
								 <div class="form-group row">
									<label class="col-sm-2 col-form-label">S.I. Alt tag</label>
									<div class="col-sm-10">
										<input type="text" name="si_alt_tag" class="form-control" required="">
										   @error('si_alt_tag') <div class="text-danger">{{ $message }}</div>@enderror

									</div>
								 </div>
								</div> 
									<div class="col-md-12">
								 <div class="form-group row">
									<label class="col-sm-2 col-form-label">General Dis. Info Url</label>
									<div class="col-sm-10">
										<input type="text" name="si_source_url" class="form-control" required="">
										   @error('si_source_url') <div class="text-danger">{{ $message }}</div>@enderror

									</div>
								 </div>
								</div> 
								<div class="col-md-12">
                                 <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Disease Information in Brief</label>
                                    <div class="col-sm-10">
                                        <textarea name="disease_information_brief" id="editor5"></textarea>
                                    </div>
                                 </div>
                          		  </div>							
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Drugs to display</label>
                                        <div class="text-center">
                                        	<span href="" id="general_diease_cross" class="cross  ">X</span>
                                        </div>
                                        <div class="col-sm-9">
                                        	<input type="text" class="form-control" id="medicine_select_in_dropdown" placeholder="Select Generic Name to ADD TO LIST">
                                        	<div id="medicine_select_result"></div>
                                           
                                        </div>
                                    </div>
                                    </div>
									<div class="col-md-12">
										<div class="tableRow">
									<table name="table" class="table table-borderless">
									  <thead>
										<tr>
										  <th scope="col" width="5%">#</th>
										  <th scope="col" width="20%">Generic Medicine</th>
										  <th scope="col" width="35%">Medication Page URL</th>
										  <th scope="col" width="40">Long Generic Name under Disease</th>
										</tr>
									  </thead>
									  <tbody id="general_disease_info_result">
										
										
									  </tbody>
									</table>
								</div>
									</div>
                               			
							</div>
							<div class="bottom-button text-right">
								<div class="inputBtn"><input type="submit" class="btn greenBtn" value="SORT ALPHABETICALLY & SAVE" /></div>
								<div class="inputBtn"><a href="#" id="general_diseases_to_delete" class="btn redBtn" />Delete</a></div>
							</div>
						</form>
					</div>
					
				</div>
					<div class="main-section mt-5">
					<div class="main-border">
						<div class="row">
									<div class="col-md-7 col-sm-12">
									<div class="entry-title title-icon" data-toggle="collapse" href="#critical_home_from" role="button" aria-expanded="false" aria-controls="critical_home_from">
											<h2>CANCER DISEASES Information</h2>
									 @if (Session::has('success6'))
                                    <div class="container">
                                   <div class="alert alert-success">
                                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ Session::get('success6') }}
                                    </div>
                                    </div>
                                   @endif
						            @if (Session::has('error6'))
                                    <div class="container">
                                    <div class="alert alert-danger">
                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                     {{ Session::get('error6') }}
                                    </div>
                                    </div>
                                     @endif
										</div>
										<small class="d-block mb-3">DBT: 3-4-Cancer-Diseases</small>
									</div>
									
									<div class="col-md-5">
										<div class="entry-title right-heading">
											<div class="selectedit align-items-center">
												<div class="edittext">Edit</div>
												<select class="form-control" style="width:400px;" id="critical_disease_to_edit23">
												<option>Select CANCER Disease to EDIT</option>
												@foreach($critical->sortBy('c_3_4_2_critical_disease') as $critical)
													<option value="{{$critical->id}}">{{$critical->c_3_4_2_critical_disease}}</option>
												@endforeach									
												</select>
												<div class="edittext">	<span href="" id="crirical_diease" class="cross  ">X</span></div>
											</div>
										</div>
									</div>
                                </div>
						<form action="{{route('aadhya.3-home-critical.store')}}" class="collapse" method="post" id="critical_home_from" enctype="multipart/form-data">
							<input type="hidden" name="critical_home_form" id="critical_home_form_hidden" value="{{old('critical_home_form',route('aadhya.3-home-critical.store'))}}">

							@csrf
							<div class="row">
								<div class="col-md-10">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Cancer Disease</label>
										<div class="col-sm-8" style="padding: 0 8px;margin-left:40px;">
										  <input type="text" name="critical_disease" class="form-control">
										</div>
									</div>
								</div>
								
                                <div class="col-md-2">
									<div class="form-group row">
										<label class="col-sm-5 col-form-label text-right">ID No.</label>
										<div class="col-sm-7">
										  <input type="text" name="critical_id_no" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Square Image 380x287</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="critical_square_image" class="form-control" placeholder="no file chosen">
                                                 <font class="font14 darkblueTxt" ><a class="bluehover" style="color:#00000073;" id="img_square2" target="_blank" href="javascript:void(0);">No Image Uploaded </a></font>
                                        </div>
									</div>
								</div>
							<div class="col-md-12">
							 <div class="form-group row">
								<label class="col-sm-2 col-form-label">S.I. Alt tag</label>
								<div class="col-sm-10">
									<input type="text" name="s_i_alt_tag" id="serial_alt_tag" class="form-control">
								</div>
							 </div>
							</div>  
								<div class="col-md-12">
								 <div class="form-group row">
									<label class="col-sm-2 col-form-label">Cancer Dis. Info Url</label>
									<div class="col-sm-10">
										<input type="text" name="s_i_source_url" class="form-control" required="">
										   @error('si_source_url') <div class="text-danger">{{ $message }}</div>@enderror

									</div>
								 </div>
								</div>
							<div class="col-md-12">
                                 <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Cancer Information in Brief</label>
                                    <div class="col-sm-10">
                                        <textarea name="disease_information_in_brief" id="editor"></textarea>
                                    </div>
                                 </div>
                            </div>						
                                <div class="col-md-12">
                                <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Drugs to display</label>
                                         <div class="text-center" >
                                        	<span href="" id="crtical_diease_cross" class="cross  ">X</span>

                                        </div>
                                        <div class="col-sm-9">
                                               	<input type="text" class="form-control" id="medicine_select_in_dropdown2" placeholder="Select Critical Name to ADD TO LIST">                  <div id="medicine_select_result2"></div>

                                        </div>
                                    </div>
                                    </div>
									<div class="col-md-12">
										<div class="tableRow">
									<table class="table table-borderless">
									  <thead>
										<tr>
										  <th scope="col" width="5%">#</th>
										  <th scope="col" width="20%">Cancer Medicine</th>
										  <th scope="col" width="35%">Medication Page URL</th>
										  <th scope="col" width="40">Long Cancer Name under Disease</th>
										</tr>
									  </thead>
									  <tbody id="critical_disease_info_result">
										
									  </tbody>
									</table>
								</div>
									</div>
                               			
							</div>
							<div class="bottom-button text-right">
								<div class="inputBtn"><input type="submit" class="btn greenBtn" value="SORT ALPHABETICALLY & SAVE" /></div>
								<div class="inputBtn"><a href="#" id="critical_disease_to_delete" class="btn redBtn" />Delete</a></div>
							</div>
						</form>
					</div>
					
				</div>
					
					 	<div class="main-section">							
							<div class="main-border">
								<div class="entry-title title-icon" data-toggle="collapse" href="#question_form" role="button" aria-expanded="false" aria-controls="question_form">
									<h2><span>Lower body Question Answer</span></h2>
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
								</div>
								<small>DBT: 3-5-Home-QA</small>
								<form action="{{route('aadhya.3-home-qa.store')}}" class="collapse" method="post" id="question_form">
									<input type="hidden" name="generic_question_form" id="generic_question_hidden" value="{{old('generic_question_form',route('aadhya.3-home-qa.store'))}}">
								@csrf
								<div class="row">
									
									<div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">Search a Qs. Info to Edit</label>
											<div class="col-sm-10">
												{{-- <input type="text" name="search_question_to_edit" id="search_question_to_edit"  class="form-control">
												<span href="javascript:void(0);" style="top:50px;right: 100px" class="cross search-cross question-cross">X</span>
												<div id="home_question_result"></div> --}}

												<select onchange="getmedQuestion(this)" class="form-control">
													<option value="0">Select Qs. Info to Edit</option>
													@foreach($faqs as $faq)
													<option  value="{{ $faq->id }}">{{ $faq->c_3_5_1_qs_no }} - {{ $faq->c_3_5_2_question }}</option>
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
												<input type="text" name="question_no"  class="form-control">
											</div>
										</div>
									</div>								
									</div>	
									<div class="row">
									<div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">Question</label>
											<div class="col-sm-10">
												<input type="text" name="question"  class="form-control">
											</div>
										</div>
									</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-2 col-sm-6">Answer</div>
										<div class="col-md-10 col-sm-6 bibtextarea"><textarea name="answer" id="editor6"></textarea></div>
									</div>
														  
									<div class="bottom-button clearfix">
										<div class="float-right">
											<div class="inputBtn"><input type="submit" class="btn greenBtn" value="Save" /></div>
											<div class="inputBtn"><a href="#" class="btn redBtn" id="deleteQuestionAnswerBtn"  />Delete</a></div>
										</div>
									</div>
								</form>
										
							</div>
							</form>
                        </div>

						
						<div class="main-section">
                            <form action="{{route('aadhya.3-home-seo.store')}}" method="post"> 
								@csrf                               
                            <div class="main-border">
                                    	<div class="entry-title title-icon" data-toggle="collapse" href="#home_seo_form" role="button" aria-expanded="false" aria-controls="home_seo_form">
                                        <h2><span>SEO Information for Home</span></h2>
									@if (Session::has('success4'))
                                    <div class="container">
                                   <div class="alert alert-success">
                                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ Session::get('success4') }}
                                    </div>
                                    </div>
                                   @endif
						            @if (Session::has('error4'))
                                    <div class="container">
                                    <div class="alert alert-danger">
                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                     {{ Session::get('error4') }}
                                    </div>
                                    </div>
                                     @endif
                                    </div>
									<small>DBT: 3-6-Home-SEO</small>
									<div id="home_seo_form" class="collapse">
                                  {{--   <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Frontend URL</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="frontent_url" value="{{$seo->c_3_6_1_frontend_url}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Browsing Path Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="browsing_path_name" value="{{$seo->c_3_6_2_browsing_path_name}}" class="form-control">
                                        </div>
                                    </div> --}}
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Title </label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="meta_title" rows="2">{{$seo->c_3_6_3_meta_title}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="meta_description" rows="4">{{$seo->c_3_6_4_meta_description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Keyword </label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="meta_keeyword" rows="4">{{$seo->c_3_6_5_meta_keyword}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Hyperlink Page Tags</label>
                                        <div class="col-sm-10">
                                             <textarea class="form-control" name="hyperlink_link_page" rows="4">{{$seo->c_3_6_6_hyperlink_page_tags}}</textarea>
                                        </div>
                                    </div>
                                  {{--   <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Canonical</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="canonical" rows="2">{{$seo->c_3_6_7_canonical}}</textarea>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Language</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="language" value="{{$seo->c_3_6_8_language}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Country</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="country" value="{{$seo->c_3_6_9_country}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Distribution</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="distribution" value="{{$seo->c_3_6_10_distribution}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Author</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="author" value="{{$seo->c_3_6_11_author}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Robots</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="robots" value="{{$seo->c_3_6_12_robots}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Revisit After</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="revisit_after" value="{{$seo->c_3_6_13_revisit_after}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                     <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Rating Value</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="rating_value" value="{{$seo->c_3_6_14_rating_value}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Rating Count</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="rating_count" value="{{$seo->c_3_6_15_rating_count}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                         {{--   <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Other Tags 3</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="other_tag_3" value="{{$seo->c_3_6_16_other_tags_3}}" class="form-control">
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                   {{--  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Other Tags 4</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="other_tag_4" value="{{$seo->c_3_6_17_other_tags_4}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Other Tags 5</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="other_tag_5" value="{{$seo->c_3_6_18_other_tags_5}}" class="form-control">
                                        </div>
                                    </div> --}}
                                   <div class="bottom-button">
									   <a href="{{url('/')}} " class="btn greenBtn cut-button">Go To HOME Page</a>
									   <div class="float-right">
										<div class="inputBtn"><input type="submit" class="btn greenBtn" value="Save" /></div>
                                    </div>
                                </div>
                                 </div>
                                </div>
                                
                            </form>
                        </div>
                        <hr style="border: 1px solid red;">
					
					<div class="main-section">
                            <form action="{{route('aadhya.3-home-seo.update',$general_seo->id)}}" method="post"> 
								@csrf                               
                            <div class="main-border">
                                    	<div class="entry-title title-icon" data-toggle="collapse" href="#general_seo_form" role="button" aria-expanded="false" aria-controls="general_seo_form">
                                        <h2><span>SEO Information for General Disease Site Page</span></h2>
								
                                    </div>
									<small>DBT: 3-6-General-SEO</small>
									<div id="general_seo_form" class="collapse">
                                  {{--   <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Frontend URL</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="frontent_url" value="{{$general_seo->c_3_6_1_frontend_url}}" class="form-control">
                                        </div>
                                    </div> --}}
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Browsing Path Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="browsing_path_name" value="{{$general_seo->c_3_6_2_browsing_path_name}}" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Title </label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="meta_title" rows="2">{{$general_seo->c_3_6_3_meta_title}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="meta_description" rows="4">{{$general_seo->c_3_6_4_meta_description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Keyword </label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="meta_keeyword" rows="4">{{$general_seo->c_3_6_5_meta_keyword}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Hyperlink Page Tags</label>
                                        <div class="col-sm-10">
                                             <textarea class="form-control" name="hyperlink_link_page" rows="4">{{$general_seo->c_3_6_6_hyperlink_page_tags}}</textarea>
                                        </div>
                                    </div>
                                   {{--  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Canonical</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="canonical" rows="2">{{$general_seo->c_3_6_7_canonical}}</textarea>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Language</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="language" value="{{$general_seo->c_3_6_8_language}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Country</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="country" value="{{$general_seo->c_3_6_9_country}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Distribution</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="distribution" value="{{$general_seo->c_3_6_10_distribution}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Author</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="author" value="{{$general_seo->c_3_6_11_author}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Robots</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="robots" value="{{$general_seo->c_3_6_12_robots}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Revisit After</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="revisit_after" value="{{$general_seo->c_3_6_13_revisit_after}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Rating Value</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="rating_value" value="{{$general_seo->c_3_6_14_rating_value}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Rating Count</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="rating_count" value="{{$general_seo->c_3_6_15_rating_count}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Other Tags 3</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="other_tag_3" value="{{$general_seo->c_3_6_16_other_tags_3}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Other Tags 4</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="other_tag_4" value="{{$general_seo->c_3_6_17_other_tags_4}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Other Tags 5</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="other_tag_5" value="{{$general_seo->c_3_6_18_other_tags_5}}" class="form-control">
                                        </div>
                                    </div>
                                   <div class="bottom-button">
									   <a href="{{route('all_disease_medication')}} " class="btn greenBtn cut-button" target="_blank">Go To GENERAL DISEASE</a>
									   <div class="float-right">
										<div class="inputBtn"><input type="submit" class="btn greenBtn" value="Save" /></div>
                                    </div>
                                </div>
                                 </div>
                                </div>
                                
                            </form>
                        </div>
                        <hr style="border: 1px solid red;">
			
						<div class="main-section">
                            <form action="{{route('aadhya.3-home-seo.update',$cancer_seo->id)}}" method="post"> 
								@csrf                               
                            <div class="main-border">
                                    	<div class="entry-title title-icon" data-toggle="collapse" href="#cancer_seo_form" role="button" aria-expanded="false" aria-controls="cancer_seo_form">
                                        <h2><span>SEO Information for Cancer Disease Site Page</span></h2>
								
                                    </div>
									<small>DBT: 3-6-Cancer-SEO</small>
									<div id="cancer_seo_form" class="collapse">
                               {{--      <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Frontend URL</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="frontent_url" value="{{$cancer_seo->c_3_6_1_frontend_url}}" class="form-control">
                                        </div>
                                    </div> --}}
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Browsing Path Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="browsing_path_name" value="{{$cancer_seo->c_3_6_2_browsing_path_name}}" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Title </label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="meta_title" rows="2">{{$cancer_seo->c_3_6_3_meta_title}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="meta_description" rows="4">{{$cancer_seo->c_3_6_4_meta_description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Keyword </label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="meta_keeyword" rows="4">{{$cancer_seo->c_3_6_5_meta_keyword}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Hyperlink Page Tags</label>
                                        <div class="col-sm-10">
                                             <textarea class="form-control" name="hyperlink_link_page" rows="4">{{$cancer_seo->c_3_6_6_hyperlink_page_tags}}</textarea>
                                        </div>
                                    </div>
                                 {{--    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Canonical</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="canonical" rows="2">{{$cancer_seo->c_3_6_7_canonical}}</textarea>
                                        </div>
                                    </div> --}}
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Language</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="language" value="{{$cancer_seo->c_3_6_8_language}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Country</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="country" value="{{$cancer_seo->c_3_6_9_country}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Distribution</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="distribution" value="{{$cancer_seo->c_3_6_10_distribution}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Author</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="author" value="{{$cancer_seo->c_3_6_11_author}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Robots</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="robots" value="{{$cancer_seo->c_3_6_12_robots}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Revisit After</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="revisit_after" value="{{$cancer_seo->c_3_6_13_revisit_after}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Rating Value</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="rating_value" value="{{$cancer_seo->c_3_6_14_rating_value}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Rating Count</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="rating_count" value="{{$cancer_seo->c_3_6_15_rating_count}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Other Tags 3</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="other_tag_3" value="{{$cancer_seo->c_3_6_16_other_tags_3}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Other Tags 4</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="other_tag_4" value="{{$cancer_seo->c_3_6_17_other_tags_4}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Other Tags 5</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="other_tag_5" value="{{$cancer_seo->c_3_6_18_other_tags_5}}" class="form-control">
                                        </div>
                                    </div>
                                   <div class="bottom-button">
									   <a href="{{route('canceer_disease_medication')}} " class="btn greenBtn cut-button" target="_blank">Go To CANCER DISEASE</a>

									   <div class="float-right">
										<div class="inputBtn"><input type="submit" class="btn greenBtn" value="Save" /></div>
                                    </div>
                                </div>
                                 </div>
                                </div>
                                
                            </form>
                        </div>
									  <div class="text-center"><a href="{{url('/')}} " class="btn greenBtn cut-button text-center">Go To HOME Page</a></div> 
                      	
                    </div>
                


			<!--  -->
	
					 </div>

@endsection
@section('afterScript')
<script>


		$('#image_search_no').keyup(function(e){

		let genrice_no = $(this).val();
		$.ajax({
                    type: "get",
                    url: "{{url('aadhya/3-home-header/')}}/"+genrice_no,
                    success: function (data) {

						$('#banner_result').html(data);
                    }
                });
				
	});

		function getBannerInfo(e) {
               // declare the value in the input field to a variable
					var id = $(e).attr('data-id');
					$('#banner_result').html('');

                      $.ajax({
	                       type: "get",       
	                       url: "{{url('aadhya/3-home-header/show')}}/" + id,
	                    success: function (data) {
	                    			let banner = data.data;
                        			$('#image_search_no').val(banner.c_3_1_1_image_no);
                        			let image_url = "{{asset('/img')}}";
                        			$('#image-icon').attr('src', image_url +'/'+  banner.c_3_1_2_image_name);
                        			$('#banner_image').attr('href', image_url +'/'+  banner.c_3_1_2_image_name);
                        			$('#banner_image').text(image_url +'/'+  banner.c_3_1_2_image_name);
                        			$('#color-shade').css('background-color',banner.c_3_1_5_text_color);
								$('input[name="text_color"]').val(banner.c_3_1_5_text_color);
								$('input[name="image_alt_tag"]').val(banner.c_3_1_3_image_alt_tag);
								$('input[name="message_on_image"]').val(banner.c_3_1_4_message_on_image);
								$('input[name="url_to_open"]').val(banner.c_3_1_6_url_to_open);
                    		        $("input[name=banner_display][value=" +  banner.display + "]").prop('checked', true);

                    		        	let product_action = "{{url('aadhya/3-home-header/update')}}" +"/"+ banner.id;
								$('#home_header_form').attr('action',product_action)
								$('#home_header_form_hidden').val(product_action)	
								let dete_url = "{{url('aadhya/3-home-header/delete')}}" +"/"+ banner.id;
								$('#deleteAction').attr('href',dete_url)

	                    }
	                });

}


	let header_home_action = $('#home_header_form_hidden').val();							

    $('#home_header_form').attr('action',header_home_action)

	CKEDITOR.replace( 'editor' );


	$('#general_diseases_to_edit').change(function(e){

		  $('#general_disease_info_result').html('')

		 for (instance in CKEDITOR.instances)
{
    CKEDITOR.instances[instance].updateElement();
}
	//console.log(general_info_no)
	let id = $(this).val();

	    $.ajax({
                type: "get",
                url: "{{url('aadhya/3-home-general/show')}}/"+ id,            
                success: function (data) {
					let med = data.data;
					let image_path = '{{asset('img-di')}}';
					//console.log(med);
					if(data){

						let action22= "{{url('aadhya/3-home-general/update')}}" +"/"+ med.id;
						let delete_action22= "{{url('aadhya/3-home-general/delete')}}" +"/"+ med.id;
						
						$('#generic_home_form').attr('action',action22)
						$('#general_diseases_to_delete').attr('href',delete_action22);
						$('#generic_home_form_hidden').val(action22)	
            
						$('input[name="general_disease"]').val(med.c_3_3_2_general_disease);
						$('input[name="id_no"]').val(med.c_3_3_1_disease_no);
						$('input[name="si_alt_tag"]').val(med.c_3_3_4_image_alt_tag);
							$('input[name="si_source_url"]').val(med.si_source_url);
						$('input[name="disease_information_brief"]').val(med.c_3_3_2_general_disease);
						CKEDITOR.instances.editor5.setData(med.c_3_3_5_disease_information); 
					    if(med.c_3_3_3_image){
                    			$('#img_square').attr('src',image_path+'/'+med.c_3_3_3_image);
                    				$('#img_square').attr('href', image_path +'/'+  med.c_3_3_3_image);
                        			$('#img_square').text(image_path +'/'+  med.c_3_3_3_image);
                    			}
                    			if(med.generic_medicines){
                    			for (const [key,generic_medicine] of Object.entries(med.generic_medicines)) {
										  console.log(generic_medicine.generic_medcine_info);
										  	let generic_med   = generic_medicine.generic_medcine_info;

										      let generic_med_1 = '<tr><th scope="row">'+(parseInt(key)+1)+'</th><td class="d-flex"><input type="hidden" name="general_disease_medicine[]" value="'+generic_med.c_1_1_1_generic_id_no+'"><input type="hidden" name="general_disease_medicine_diease[]" value="'+generic_med.c_1_1_7_name_in_home_diseases+'"><input type="hidden" name="general_disease_medicine_diease[]" value="'+generic_med.c_1_1_7_name_in_home_diseases+'"><div class="texteara-gray" >'+generic_med.c_1_1_2_main_generic_name+' - '+generic_med.c_1_1_1_generic_id_no+'</div> <a href="javascript:void(0)"  onclick="removeParent(this)"  data-type="general"  class="cross">X</a></td><td><div class="texteara-gray" >'+generic_med.c_1_1_4_frontend_url+'</div></td><td><div class="texteara-gray">'+generic_med.c_1_1_7_name_in_home_diseases+'</div></td></tr>';
    						  			  $('#general_disease_info_result').append(generic_med_1)
										}
                    		 
    							}
		                }
                }
                });		
	});

	$('#genrice_diease').click(function (e) {


						let action22= "{{url('aadhya/3-home-general')}}" ;
						
						$('#generic_home_form').attr('action',action22)
						$('#generic_price_form_hidden').val(action22)	
            
						$('input[name="general_disease"]').val('');
						$('input[name="id_no"]').val('');
						$('input[name="si_alt_tag"]').val('');
						$('input[name="si_source_url"]').val('');
						$('input[name="disease_information_brief"]').val('');
						CKEDITOR.instances.editor5.setData(''); 
                    				$('#img_square').attr('href','#');
                        			$('#img_square').text('Image Not Uploaded');
                    			

                    		 // $('#general_diseases_to_edit').text('Select GENERAL Disease to EDIT');
                    		  $("#general_diseases_to_edit").val("").change();
    						    $('#general_disease_info_result').html('')

	});


	$('#critical_disease_to_edit23').change(function(e){
		
		$('#critical_disease_info_result').html('');
		 for (instance in CKEDITOR.instances)
{
    CKEDITOR.instances[instance].updateElement();
}
	//console.log(general_info_no)
	let id = $(this).val();

	    $.ajax({
                type: "get",
                url: "{{url('aadhya/3-home-critical/show')}}/"+ id,            
                success: function (data) {
					let med = data.data;
					let image_path = '{{asset('img-di')}}';
					//console.log(med);
					if(data){

						let action222= "{{url('aadhya/3-home-critical/update')}}" +"/"+ med.id;
						let delete_action222 = "{{url('aadhya/3-home-critical/delete')}}" +"/"+ med.id;

						$('#critical_home_from').attr('action',action222)
						$('#critical_disease_to_delete').attr('href',delete_action222)
						$('#critical_home_form_hidden').val(action222)	

						$('input[name="critical_disease"]').val(med.c_3_4_2_critical_disease);
						$('input[name="critical_id_no"]').val(med.c_3_4_1_disease_no);
						$('input[name="s_i_alt_tag"]').val(med.c_3_4_4_image_alt_tag);
						$('input[name="s_i_source_url"]').val(med.si_source_url);
						$('input[name="disease_information_in_brief"]').val(med.c_3_4_5_disease_information);
						CKEDITOR.instances.editor.setData(med.c_3_4_5_disease_information); 
					   if(med.c_3_4_3_image){
								$('#img_square2').attr('src',image_path+'/'+med.c_3_4_3_image);
                    				$('#img_square2').attr('href', image_path +'/'+  med.c_3_4_3_image);
                        			$('#img_square2').text(image_path +'/'+  med.c_3_4_3_image);
                        		}

                        			if(med.crtical_medicines){
                    			for (const [key,generic_medicine] of Object.entries(med.crtical_medicines)) {
										  	let critical_med   = generic_medicine.generic_medcine_info;
										      let critical_med_1 = '<tr><th scope="row">'+(parseInt(key)+1)+'</th><td class="d-flex"><input type="hidden" name="critical_disease_medicine[]" value="'+critical_med.c_1_1_1_generic_id_no+'"><input type="hidden" name="critical_disease_medicine_diease[]" value="'+critical_med.c_1_1_2_main_generic_name+'"><input type="hidden" name="critical_disease_medicine_diease[]" value="'+critical_med.c_1_1_7_name_in_home_diseases+'"><div class="texteara-gray" >'+critical_med.c_1_1_2_main_generic_name+' - '+critical_med.c_1_1_1_generic_id_no+'</div> <a href="javascript:void(0)"  onclick="removeParent(this)"   data-type="critical" class="cross">X</a></td><td><div class="texteara-gray" >'+critical_med.c_1_1_4_frontend_url+'</div></td><td><div class="texteara-gray">'+critical_med.c_1_1_7_name_in_home_diseases+'</div></td></tr>';
    						  			  $('#critical_disease_info_result').append(critical_med_1)
										}
                    		 
    							}
                        	

                }
                }
                });		
	});




 

$('.home-search-cross').click(function(e){

$('#image_search_no').val('');
$('input[name="text_color"]').val('');
$('input[name="message_on_image"]').val('');
$('input[name="url_to_open"]').val('');
$('input[name="image_alt_tag"]').val('');
$('#image-icon').attr('src','#');
$('#banner_image').attr('href','#');
$('#banner_image').text('No Image Uploaded ');
$('#color-shade').css('background-color','#fff');
let product_action = "{{route('aadhya.3-home-header.store')}}";
								$('#home_header_form').attr('action',product_action)
								$('#home_header_form_hidden').val(product_action)	

});



	$('#medicine_select_in_dropdown').keyup(function(e){

		let genrice_no = $(this).val();
		$.ajax({
                    type: "get",
                    url: "{{route('aadhya.1-meds-info.general.search')}}",
                    data: {	
                        genrice_no: genrice_no
                    },
                    success: function (data) {
						$('#medicine_select_result').html(data);
                    }
                });
				
	});

		$('#medicine_select_in_dropdown2').keyup(function(e){

		let genrice_no = $(this).val();
		$.ajax({
                    type: "get",
                    url: "{{route('aadhya.1-meds-info.critical.search')}}",
                    data: {	
                        genrice_no: genrice_no
                    },
                    success: function (data) {
						$('#medicine_select_result2').html(data);
                    }
                });
				
	});

	function getGeneralInfo(e){
                    // declare the value in the input field to a variable
                    var value = $(e).text();
					var id = $(e).attr('data-id');
					$('#medicine_select_in_dropdown').val(value);
					$('#medicine_select_result').html('');

                      $.ajax({
	                       type: "get",       
	                       url: "{{url('aadhya/1-meds-info-show')}}/" + id,
	                    success: function (data) {

							let med = data.data;
								let medcine_id = med.c_1_1_1_generic_id_no;
							    let medication_url = med.c_1_1_4_frontend_url;
							    let medication_name = med.c_1_1_2_main_generic_name;
							    let medication_description = med.c_1_1_7_name_in_home_diseases;
							    let general_count =  $('#general_disease_info_result').children().length;
							    let general_disease_info_result = '<tr><th scope="row">'+(general_count+1)+'</th><td class="d-flex"><input type="hidden" name="general_disease_medicine[]" value="'+medcine_id+'"><input type="hidden" name="general_disease_medicine_diease[]" value="'+medication_description+'"><div class="texteara-gray"  >'+medication_name+' - '+medcine_id+'</div> <a href="javascript:void(0)" class="cross" onclick="removeParent(this)">X</a></td><td><div class="texteara-gray">'+medication_url+'</div></td><td><div class=" texteara-gray" >' + medication_description+'</div></td></tr>';
						    	$('#general_disease_info_result').append(general_disease_info_result)
                        
          					
					
                   }
               });
                }


                function removeParent(e) {

                	if (confirm('Are you sure. You want to remove this item ?')) {
                	$(e).parent().parent().remove();

                			let  type = $(e).attr('data-type');
                			let  id = $(e).attr('data-id');
						}
						return false;
                }

                	function getCriticalInfo(e){
                    // declare the value in the input field to a variable
                    var value = $(e).text();
					var id = $(e).attr('data-id');
					$('#medicine_select_in_dropdown2').val(value);
					$('#medicine_select_result2').html('');

                      $.ajax({
	                       type: "get",       
	                       url: "{{url('aadhya/1-meds-info-show')}}/" + id,
	                    success: function (data) {

							let med = data.data;
								let medcine_id = med.c_1_1_1_generic_id_no;
							    let medication_url = med.c_1_1_4_frontend_url;
							    let medication_name = med.c_1_1_2_main_generic_name;
							    let medication_description = med.c_1_1_7_name_in_home_diseases;
							     let crtiical_count =  $('#critical_disease_info_result').children().length;
							    let general_disease_info_result = '<tr><th scope="row">'+(crtiical_count+1)+'</th><td class="d-flex"><input type="hidden" name="critical_disease_medicine[]" value="'+medcine_id+'"><input type="hidden" name="crtical_disease_medicine[]" value="'+medcine_id+'"><div class="texteara-gray"  >'+medication_name+' - '+medcine_id+'</div> <a href="javascript:void(0)" class="cross" onclick="removeParent(this)">X</a></td><td><div class="texteara-gray">'+medication_url+'</div></td><td><div class=" texteara-gray" >'+medication_description + medication_description+'</div></td></tr>';
						    	$('#critical_disease_info_result').append(general_disease_info_result)
                        
          					
					
                   }
               });
                }





	$('#search_question_to_edit').keyup(function(e){

    
		let question_info_no = $(this).val();
		$.ajax({
                    type: "get",
                    url: "{{route('aadhya.3-home-qa.search')}}",
                    data: {	
                        question_info_no: question_info_no,
                    },
                    success: function (data) {
						$('#home_question_result').html(data);
                    }
                });
				
	});


	function getmedQuestion(e){
                    // declare the value in the input field to a variable
                    var value = $(e).text();
					var id = $(e).val();
					if(id == 0){
							$('#search_question_to_edit').val('');
								$('input[name="question_no"]').val('');
								$('input[name="question"]').val('');
								CKEDITOR.instances.editor6.setData('');
								//CKEDITOR.instances.editor4.setData(med.c_1_1_9_generic_intro_details); 	
								let action2 = "{{route('aadhya.3-home-qa.store')}}"
								$('#question_form').attr('action',action2)
								$('#generic_question_form').val(action2)	
                                $('#deleteQuestionAnswerBtn').attr('href','#')
					}
					// $('#search_question_to_edit').val(value);
					// $('#home_question_result').html('');
					for (instance in CKEDITOR.instances)
{
    CKEDITOR.instances[instance].updateElement();
}
                    $.ajax({
	                       type: "get",       
	                       url: "{{url('aadhya/3-home-qa-show/')}}/" + id,
	                    success: function (data) {
							let med = data.data;
								$('input[name="question_no"]').val(med.c_3_5_1_qs_no);
								$('input[name="question"]').val(med.c_3_5_2_question);
								CKEDITOR.instances.editor6.setData(med.c_3_5_3_answer);
								//CKEDITOR.instances.editor4.setData(med.c_1_1_9_generic_intro_details); 	
								let action2 = "{{url('aadhya/3-home-qa/update/')}}" +"/"+ med.id;
								$('#question_form').attr('action',action2)
								$('#generic_question_form').val(action2)	
                                let deleteUrl = "{{url('aadhya/3-home-qa/delete/')}}" +"/"+ med.id;
                                $('#deleteQuestionAnswerBtn').attr('href',deleteUrl)
                    
								
	                     }
                         });

    }

    $('#general_diease_cross').click(function (argument) {
    	$('#medicine_select_in_dropdown').val('');
    	$('#medicine_select_result').html('')

    })

       $('#crtical_diease_cross').click(function (argument) {
    	$('#medicine_select_in_dropdown2').val('');
    	$('#medicine_select_result2').html('')
    })
$('.question-cross').click(function (e) {
		$('#search_question_to_edit').val('');
	$('input[name="question_no"]').val('');
								$('input[name="question"]').val('');
								CKEDITOR.instances.editor6.setData('');
								//CKEDITOR.instances.editor4.setData(med.c_1_1_9_generic_intro_details); 	
								let action2 = "{{route('aadhya.3-home-qa.store')}}"
								$('#question_form').attr('action',action2)
								$('#generic_question_form').val(action2)	
                                $('#deleteQuestionAnswerBtn').attr('href','#')
})

</script>


@endsection