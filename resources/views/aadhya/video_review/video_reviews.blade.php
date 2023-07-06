@extends('layouts.backend')
@section('content')

<div class="page-define">
		<div class="container-fluid">
			<div class="row justify-content-between">
				<div class="col">
				  <h1>Video Testimonial</h1>
				  <span class="shorttxt">Data will show on the front-end pages - <a href="http://911globalmeds.com/testimonials.php" target="_blank">testimonials.php</a>  and <a href="http://911globalmeds.com/about-us.php" target="_blank">about-us.php</a></span>

				</div>
			</div>		
		</div>
	</div>
            <div class="main-panel">
                <div class="container-fluid">
                    <div class="panel-container">
                    	<div style="display: none;"  id="blog-show">
                        <div class="main-section double-heading">
                            <div class="main-border ">
                                <div class="row">
									<div class="col-md-12">
										<div class="entry-title">
											<h2 class="title-heading">ADD NEW VIDEO TESTIMONIAL  /   EDIT EXISTING VIDEO TESTIMONIAL</h2>
										</div>
												<button type="button" class="btn redBtn cut-button pull-right mb-3" onclick="clearBlog()">Clear All</button>
										<small>DBT: 7-Review-Videos</small>
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
                                             {{ Session::get('error2') }}
                                           </div>
                                         </div>
                                        @endif
									</div>
									
                                </div>
                                <form action="{{route('aadhya.video_review.store')}}" method="post" enctype="multipart/form-data" id="blog_form">
                                	<input type="hidden" name="review_form" id="blog_form_hidden" value="{{old('review_form',route('aadhya.video_review.store'))}}">
                                	@csrf
								<div class="row">
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Full Name</label>
										<div class="col-sm-8">
										  <input type="text" name="full_name" class="form-control" / required="" value="{{ old('full_name') }}">
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Country</label>
										<div class="col-sm-10">
										  <input type="text" name="country" class="form-control" / required="" value="{{ old('country') }}">
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Email</label>
										<div class="col-sm-8">
										  <input type="text" name="email" class="form-control" required=""  value="{{ old('email') }}" />
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Posting Date</label>
										<div class="col-sm-8">
										   <input type="date" name="posting_date" class="form-control" required="" value="{{ old('posting_date',date('Y-m-d')) }}"  />
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Display Position</label>
										<div class="col-sm-8">
										   <input type="number" name="display_position" class="form-control" required="" min="0" value="{{ old('display_position') }}" />
										</div>
									</div>
								</div>
								<div class="col-md-6 form-group ">
										<label class=" col-form-label">Upload Image  </label>
														<input  type="text" name="image" value="{{old('image')}}" class="form-control" required="">
                                                         @error('image') <div class="text-danger">{{ $message }}</div>@enderror
                                                     <font class="font14 darkblueTxt" ><a class="bluehover" style="color:#00000073;" id="display_image" target="_blank" href="javascript:void(0);">No Image Uploaded </a></font>
									
								</div>
								<div class="col-md-6 form-group ">
										<label class="col-form-label">Upload Video </label>
											<input  type="text" name="video" value="{{old('video')}}" class="form-control" required="">
                                                        @error('video') <div class="text-danger">{{ $message }}</div>@enderror
                                                        <font class="font14 darkblueTxt" ><a class="bluehover" style="color:#00000073;" id="display_video" target="_blank" href="javascript:void(0);">No Video Uploaded </a></font>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-5 col-form-label">Post on Testimonials Page</label>
										<div class="col-sm-7">
										  <div class="form-check form-check-inline">
											  <input class="form-check-input" type="checkbox" name="testimonial_page" value="1">
											  <label class="form-check-label">Yes</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="checkbox" name="testimonial_top_5" value="1">
											  <label class="form-check-label">Top 5</label>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-5 col-form-label">Post On About Us page</label>
											<div class="col-sm-7">
										  <div class="form-check form-check-inline">
											  <input class="form-check-input" type="checkbox" name="about_page" value="1">
											  <label class="form-check-label" for="inlineCheckbox1">Yes</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="checkbox" name="about_top_5" value="1">
											  <label class="form-check-label">Top 5</label>
											</div>
										</div>
									</div>
									</div>
									
								<div class="col-md-12">
									<div class="bottom-button clearfix">
										<div class="text-right">
											<button type="submit" class="btn greenBtn">Save</button>
											{{-- <button type="button" class="btn redBtn">Delete</button> --}}
										</div>								
									</div>
									</div>
								</div>
								
																
							</div>
							
                        </div>
						</div>
						<div class="main-section">
                            <div class="main-border ">
                                <div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="entry-title">
											<h2>VIDEO TESTIMONIALS</h2>
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
											  <th scope="col" width="30px"><input type="checkbox"  id="master" class="inputAuto" />Select</th>
											  <th scope="col" width="40px">S. No.</th>
											  <th scope="col" width="">Full Name <br>Country  <br> Email</th>
											  <th scope="col" width="80px">Posting Date</th>
                                              <th scope="col" width="50px">Display Position</th>
											  
											  <th scope="col" width="">Image Location & Name     <br>         Video Location & Name</th>
											  <th scope="col" width="">Display On</th>
											  <th scope="col" width="">Action</th>
											</tr>
										  </thead>
										  <tbody>
										  	@foreach($videoReviews->sortByDesc('id') as $videoReview)
											<tr id="tr_{{$videoReview->id}}">
                      						  <td><input type="checkbox" class="sub_chk dcb" data-id="{{$videoReview->id}}"/></td>
											  <td>{{$videoReview->id}}</td>
											  <td>{{$videoReview->full_name}} <br> {{$videoReview->country}}  <br> {{$videoReview->email}}</td>
											  <td>{{$videoReview->posting_date}}</td>
											  <td>{{$videoReview->display_position}}</td>
											  
											  <td> <a href="{{$videoReview->image}}" target="_blank">{{$videoReview->image}}</a>  <br> <a href="{{$videoReview->video}}" target="_blank">{{$videoReview->video}}</a></td>
											  <td>
											  	@if($videoReview->testimonial)
											  	<a href="{{ route('testimonial') }}" target="_blank">Testimonial</a>
											  	@endif
											  	<br>
											  	@if($videoReview->about)
											  	<a href="{{ route('about_us') }}" target="_blank" >About</a>
											  	@endif
										   </td>
											  <td class="action">
											
												<a  onclick="getVideos(this)"  data-id="{{ $videoReview->id }}" class="delTxt">Edit</a>
												<a href="{{route('aadhya.video_review.destroy',$videoReview->id)}}" class="delTxt">Delete</a>
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
	                       url: "{{url('aadhya/7-video-reviews-show')}}/" + id,
	                    success: function (data) {
								let med = data.data;
								$('input[name="full_name"]').val(med.full_name);
								$('.title-heading').text("EDIT EXISTING VIDEO TESTIMONIAL - " + med.id);

								$('input[name="country"]').val(med.country);
								$('input[name="date"]').val(med.posting_date);
								$('input[name="email"]').val(med.email);
								$('input[name="display_position"]').val(med.display_position);
                    		    $('input[name="testimonial_page"][value="'+med.testimonial+'"]').prop('checked', true);
                    		    $('input[name="testimonial_top_5"][value="'+med.testimonial_top_5+'"]').prop('checked', true);
                    		    $('input[name="about_page"][value="'+med.about+'"]').prop('checked', true);
                    		    $('input[name="about_top_5"][value="'+med.about_top_5+'"]').prop('checked', true);

								let  image_path = "{{ asset('img-vi') }}";
								let  video_path = "{{ asset('videos') }}";
								$('input[name="image"]').val(med.image)
                    			$('#display_image').attr('href',image_path+'/'+med.image);
                    			$('#display_image').text(image_path+'/'+med.image);

								$('input[name="video"]').val(med.video)

                    			$('#display_video').attr('href',video_path+'/'+med.video);
                    			$('#display_video').text(video_path+'/'+med.video);

                    
                                                                let seo_action = "{{url('aadhya/7-video-reviews-update')}}" +"/"+ med.id;
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

                        url: "{{ route('aadhya.video_review.deleteAll') }}",

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