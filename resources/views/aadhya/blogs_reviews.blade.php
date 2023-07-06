@extends('layouts.backend')
@section('content')

<div class="page-define">
		<div class="container-fluid">
			<div class="row justify-content-between">
				<div class="col">
				  <h1>BLOG REVIEWS</h1>
				  <span class="shorttxt">Data will show on INDIVIDUAL-BLOGS-NEWS</span>
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
									<div class="col-md-12">
										<div class="entry-title">
											<h2>ADD NEW BLOG REVIEW / EDIT EXISTING BLOG REVIEW</h2>
										</div>
										<small class="mb-3 d-block">DBT: 9-blogs-reviews</small>
									</div>
                                </div>
								
								<div class="row">
								<div class="col-md-4 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Full Name</label>
										<div class="col-sm-8">
										  <input type="text" class="form-control" />
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Country</label>
										<div class="col-sm-8">
										  <input type="text" class="form-control" />
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Email</label>
										<div class="col-sm-8">
										  <input type="text" class="form-control" />
										</div>
									</div>
								</div>
								
								<div class="col-md-12">
									<div class="form-group row">
										<label class="col-sm-1 col-form-label">Comments</label>
										<div class="col-sm-11">
										  <textarea name="editor1" id="editor1"></textarea>
										</div>
									</div>
								</div>
								
								<div class="col-md-3 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-5 col-form-label">Posting Date</label>
										<div class="col-sm-7">
										  <input type="date" class="form-control" />
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group row">
									  <label class="col-sm-4 col-form-label">Post  on  Blog</label>
									  <div class="col-sm-8">
										  <input type="text" class="form-control" placeholder="None" />
									  </div>
								  </div>
								</div>
								<div class="col-md-5">
									<div class="form-group row">
									  <label class="col-sm-4 col-form-label"><a href="" class="darkblueTxt">Open Blog Page</a></label>
									  <div class="col-sm-8">
										  <div class="form-check form-check-inline">
											  <input class="form-check-input" type="checkbox">
											  <label class="form-check-label">Display</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="checkbox">
											  <label class="form-check-label">Hide BLOG REVIEW</label>
											</div>
									  </div>
								  </div>
								</div>
                                <div class="col-md-12">
                                  <div class="float-right">
	                                <button type="submit" class="btn greenBtn">Save</button>
								  </div>
                                </div>
							</div>
							</div>
                                
                                <div class="bottom-button clearfix">
                                
                                </div>
                        </div>
						
						<div class="main-section">
                            <div class="main-border ">
                                <div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="entry-title">
											<h2>BLOGS REVIEWS</h2>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
                                        <div class="entry-title">
                                            <div class="extraDetails">
												<div class="dropexport dropdown show">
													<div class="btn-group">
													<button class="btn redBtn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export/Import</button>
													<div class="dropdown-menu selectDrop">
														<div class="upload-btn-wrapper">
														  <button>Import all Blogs</button>
														  <input type="file" name="myfile" />
														</div>
													</div>
													</div>
												</div>
											</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-table text-left tableFooter font14">
									<table id="datatable" class="table custom-table table-bordered text-center">
										<thead class="text-center">
											<tr>
											  <th width="50px">Select <input type="checkbox" /></th>
											  <th width="50px">S.No.</th>
											  <th width="80px">Posting Date</th>
											  <th width="100px">Full Name <br>Country  <br> Email</th>
											  <th width="400px">Comments</th>
                                              <th width="">Posting on page</th>
											  <th width="">Action</th>
											</tr>
										  </thead>
										  <tbody>
											<tr>
											  <td><input type="checkbox" /></td>
											  <td>1</td>
											  <td>8-9-2020</td>
											  <td>Ron Diestro<br>  USA <br>  Ron12598@gmail.com </td>
											  <td>Very good services</td>
											  <td>BL-108 :  Nilotinib As An Alternate Medication To Imatinib Resistant CML</td>
											  <td class="action">
												<button class="display unlderline">Displayed</button>
												<button class="text-success">Hidden</button>
												<button class="editTxt">Edit</button>
												<a href="" class="delTxt">Delete</a>
											  </td>
											</tr>
										</tbody>
									</table>
								</div>  
								<div class="bottom-button clearfix">
									<div class="text-right">
										<button type="button" class="btn redBtn">Delete Selected</button>
										<button type="button" class="btn redBtn">Delete All</button>
									</div>								
								</div>								
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

@section('afterScript')

<script type="text/javascript">
	
	function getReview(e){
                    // declare the value in the input field to a variable
                    var value = $(e).text();
					var id = $(e).attr('data-id');
					// $('#country_freight_search').val(value);
					// $('#country_freight_result').html('');
                $.ajax({
	                       type: "get",       
	                       url: "{{url('aadhya/6-text-reviews-show/')}}/" + id,
	                    success: function (data) {
							let med = data.data;
								$('input[name="fullName"]').val(med.full_name);
								$('input[name="country"]').val(med.country);
								$('input[name="email"]').val(med.email);
								$('input[name="postingPage"]').val(med.posting_from_page);
								$('input[name="rating"]').val(med.rating);
								$('input[name="medicine"]').val(med.medicine);
                    		        $('#text_comment').text(med.comment);

                    		        $("input[name=home][value=" +  med.home + "]").prop('checked', true);
                    		        $("input[name=top5][value=" +  med.c_4_1_4_billing_address + "]").prop('checked', true);
                    		        $("input[name=testimonial][value=" +  med.testimonials + "]").prop('checked', true);
                    		        $("input[name=about][value=" +  med.about + "]").prop('checked', true);
                    		        $("input[name=home_top_5][value=" +  med.home_top_5 + "]").prop('checked', true);
                    		        $("input[name=testimonial_top_10][value=" +  med.testimonial_top_10 + "]").prop('checked', true);
                    		        $("input[name=about_top_5][value=" +  med.about_top_5 + "]").prop('checked', true);
                    

								//CKEDITOR.instances.editor4.setData(med.c_1_1_9_generic_intro_details); 	
								let action2 = "{{url('aadhya/6-text-reviews-update/')}}" +"/"+ med.id;
								$('#review_form').attr('action',action2)
								$('#review_freight_hidden').val(action2)	
                                // let deleteUrl = "{{url('aadhya/4-country-delete/')}}" +"/"+ med.id;
                                // $('#deleteQuestionAnswerBtn').attr('href',deleteUrl)
                    
								
	                     }
                         });

    }

    $('#changeStatus').click(function (e) {

    	let type  = $(this).attr('status');
    	let id = $(this).attr('data-id');

     $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
         	   $.ajax({
                  url: "{{route('aadhya.text_review.status')}}",
                  method: 'post',
                  data: {
                     id: id,
                     status: type,
                  },
                  success: function(data){
                  		if(data.type==1){
                  	console.log(data);
	                    		$('#changeStatus').text('Displayed');
	                    		$('#changeStatus').attr('type',0);
	                    	} else {
	                    		$('#changeStatus').attr('type',1);
	                    		$('#changeStatus').text('Hidden');
                  	console.log(data.type);
	                    	}

                	}
                    
                  });

    })

</script>

@endsection