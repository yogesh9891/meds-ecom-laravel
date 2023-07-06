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
                   	<div  style="display: none;" id="blog-show">
                        <div class="main-section double-heading">
                            <div class="main-border ">
                                <div class="row">
									<div class="col-md-12">
										<div class="entry-title">
											<h2>ADD NEW BLOG REVIEW / EDIT EXISTING BLOG REVIEW</h2>
										</div>
										<small class="mb-3 d-block">DBT: 9-blogs-reviews</small>
										@if (Session::has('success'))
                                          <div class="container">
                                          <div class="alert alert-success">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                         {{ Session::get('success') }}
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
                                </div>
									    <form action="{{route('aadhya.blog_review.store')}}" method="post" enctype="multipart/form-data" id="blog_form">
									@csrf
                                	<input type="hidden" name="review_form" id="blog_form_hidden" value="{{old('review_form',route('aadhya.blog_review.store'))}}">
								<div class="row">
								<div class="col-md-4 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Full Name</label>
										<div class="col-sm-8">
										  <input type="text" class="form-control" name="fullName" />
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Country</label>
										<div class="col-sm-8">
										  <input type="text" class="form-control" name="country" />
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Email</label>
										<div class="col-sm-8">
										  <input type="text" class="form-control" name="email" />
										</div>
									</div>
								</div>
								
								<div class="col-md-10">
									<div class="form-group row">
										<label class="col-sm-1 col-form-label">Comments</label>
										<div class="col-sm-11">
										  <textarea  name="comment" class="form-control"></textarea>
										</div>
									</div>
								</div>
								
							{{-- 	<div class="col-md-3 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-5 col-form-label">Posting Date</label>
										<div class="col-sm-7">
										  <input type="date" class="form-control" name="date" />
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group row">
									  <label class="col-sm-4 col-form-label">Post  on  Blog</label>
									  <div class="col-sm-8">
										  <input type="text" class="form-control" name="post_blog" placeholder="None" />
									  </div>
								  </div>
								</div> --}}
								<div class="col-md-5">
									<div class="form-group row">
									  <div class="col-md-6">
										  <div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" name="status" value="1">
											  <label class="form-check-label">Display</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" name="status" value="0">
											  <label class="form-check-label">Hide BLOG REVIEW</label>
											</div>
									  </div>
									  <label class="col-md-6 col-form-label"><a href="" class="darkblueTxt" target="_blank" id="blog_url">No Url</a></label>
								  </div>
								</div>
                                <div class="col-md-12">
                                  <div class="float-right">
	                                <button type="submit" class="btn greenBtn">Save</button>
								  </div>
                                </div>
							</div>
						</form>
							</div>
                                
                                <div class="bottom-button clearfix">
                                
                                </div>
                        </div>
                    </div>
						
						<div class="main-section">
                            <div class="main-border ">
                                <div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="entry-title">
											<h2>BLOGS REVIEWS</h2>
											<div>
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
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
                                        <div class="entry-title">
                                            <div class="extraDetails">
												<div class="dropexport dropdown show">
													<div class="float-right">
											<div class="inputBtn"><button type="button"  class="btn redBtn delete_all">Delete Selected</button></div>
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
											  <th width="50px">Select <input type="checkbox"  id="master" class="inputAuto" /></th>
											  <th width="50px">S.No.</th>
											  <th width="80px">Posting Date</th>
											  <th width="100px">Full Name <br>Country  <br> Email</th>
											  <th width="400px">Comments</th>
                                              <th width="">Posting on page</th>
											  <th width="">Action</th>
											</tr>
										  </thead>
										  <tbody>
										  	@foreach($blogreviews->sortByDesc('id') as $blogreview)
											<tr id="tr_{{$blogreview->id}}">
                      						  <td><input type="checkbox" class="sub_chk dcb" data-id="{{$blogreview->id}}"/></td>
											  <td>{{$blogreview->id}}</td>
											  <td>{{$blogreview->created_at->timezone('Asia/Kolkata')->format('d-m-Y H:i')}} IST</td>
											  <td>{{$blogreview->fullname}}<br>  {{$blogreview->country}} <br>  {{$blogreview->email}} </td>
											  <td>
                                        <a href="javascript:void(0);" style="color:#000;font-weight:600;text-decoration:underline;" data-toggle="modal" data-target="#order_detail-b{{$blogreview->id}}">
                                          Details
                                        </a>

                                        <div class="modal fade modal_status" id="order_detail-b{{$blogreview->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                          <div class="modal-header">
                                            <h5>Review posted from BL-{{ $blogreview->blog->blog_news_no }} :  <a href="{{ route('indivisual_blog',$blogreview->blog->page_url_name??'utl') }}" target="_blank"> {{ $blogreview->blog->blog_title_h1 ?? '' }}</a></h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                            <div class="modal-body text-left">
                                           	{{$blogreview->comment}}
                                            </div>
                                            
                                            </div>
                                            </div>
                                          </div></td>
											  <td>
											  @if($blogreview->blog)
											  <a href="{{ route('indivisual_blog',$blogreview->blog->page_url_name??'utl') }}" target="_blank">BL-{{ $blogreview->blog->blog_news_no }}</a>
											  @endif
											  </td>
											  <td class="action">
												 @if(!is_null($blogreview->status))
												 	 @if($blogreview->status == '1')
												 	 	Displayed
												 	 @else
												 	 	Hidden
												 	 @endif
												 	@else
														 Pending

												 @endif
												<a href="#" class="editTxt"  onclick="getVideos(this)"  data-id="{{ $blogreview->id }}">Edit</a>
												<a href="{{route('aadhya.blog_review.destroy',$blogreview->id)}}" class="delTxt">Delete</a>
											  </td>
											</tr>
											@endforeach
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
	
	function getVideos(e){
                    // declare the value in the input field to a variable
					$('#blog-show').show();
					var id = $(e).attr('data-id');

					for (instance in CKEDITOR.instances)
{
    CKEDITOR.instances[instance].updateElement();
}
                      $.ajax({
	                       type: "get",       
	                       url: "{{url('aadhya/9-blogs-reviews-show')}}/" + id,
	                    success: function (data) {
								let med = data.data;
								$('input[name="fullName"]').val(med.fullname);
								// $('.title-heading').text("EDIT EXISTING VIDEO TESTIMONIAL - " + med.id);

								$('input[name="country"]').val(med.country);
								$('input[name="date"]').val(med.posting_date);
								$('input[name="email"]').val(med.email);
								$('textarea[name="comment"]').val(med.comment);
                    		      $("input[name=status][value=" +  med.status + "]").prop('checked', true);

                    		    // $('input[name="testimonial_page"][value="'+med.testimonial+'"]').prop('checked', true);
                    		    // $('input[name="testimonial_top_5"][value="'+med.testimonial_top_5+'"]').prop('checked', true);
                    		    // $('input[name="about_page"][value="'+med.about+'"]').prop('checked', true);
                    		    // $('input[name="about_top_5"][value="'+med.about_top_5+'"]').prop('checked', true);

								let  image_path = "{{ asset('img') }}";
								let  video_path = "{{ asset('videos') }}";
								if(med.blog){

									let blog_url = "{{ url('blogs-news/') }}"
                    			$('#blog_url').attr('href',blog_url + '/'+med.blog.page_url_name);
                    			$('#blog_url').text('BL-'+med.blog.id+' : '+med.blog.blog_title_h1);
								} else {
									$('#blog_url').attr('href','#');
                    			$('#blog_url').text('No Url');
								}

                    			// $('#display_video').attr('href',med.video);
                    			// $('#display_video').text(med.video);

                    
                                                                let seo_action = "{{url('aadhya/9-blogs-reviews-update')}}" +"/"+ med.id;
                                                                $('#blog_form').attr('action',seo_action)
                                                                $('#blog_form_hidden').val(seo_action)
                             }

                         });
                  }









		function clearBlog() {
				

								$('.title-heading').text("ADD NEW VIDEO TESTIMONIAL");
								$('#blog_form').trigger("reset");
							
								$('#display_image').attr('href','#');
                    			$('#display_image').text('No Image Uploaded');
                    			$('#display_video').attr('href','#');
                    			$('#display_video').text('No Video Uploaded');

                                                                let seo_action = "{{route('aadhya.video_review.store')}}" ;
                                                                $('#blog_form').attr('action',seo_action)
                                                                $('#blog_form_hidden').val(seo_action)
	

	}

	     $('#master').on('click', function(e) {

         if($(this).is(':checked',true))  

         {

            $(".sub_chk").prop('checked', true);  

         } else {  

            $(".sub_chk").prop('checked',false);  

         }  

        });

	  $('.delete_all').on('click', function(e) {


            var allVals = [];  

            $(".sub_chk:checked").each(function() {  

                allVals.push($(this).attr('data-id'));

            });  


            if(allVals.length <=0)  

            {  

                alert("Please select row.");  

            }  else {  


                var check = confirm("Are you sure you want to delete this row?");  

                if(check == true){  


                    var join_selected_values = allVals.join(","); 


                    $.ajax({

                        url: "{{ route('aadhya.9-blogs-reviews.deleteAll') }}",

                        type: 'DELETE',

                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                        data: 'ids='+join_selected_values,

                        success: function (data) {

                            if (data['success']) {

                                $(".sub_chk:checked").each(function() {  

                                    $(this).parents("tr").remove();

                                });

                                alert(data['success']);

                            } else if (data['error']) {

                                alert(data['error']);

                            } else {

                                alert('Whoops Something went wrong!!');

                            }

                        },

                        error: function (data) {

                            alert(data.responseText);

                        }

                    });


                  $.each(allVals, function( index, value ) {

                      $('table tr').filter("[data-row-id='" + value + "']").remove();

                  });

                }  

            }  

        });


</script>
@endsection