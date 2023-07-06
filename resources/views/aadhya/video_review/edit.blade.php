@extends('layouts.backend')
@section('content')

<div class="page-define">
		<div class="container-fluid">
			<div class="row justify-content-between">
				<div class="col">
				  <h1>Video qhhqbdq qwbhTestimonial</h1>
				  <span class="shorttxt">Data will show on the front-end pages - <a href="http://911globalmeds.com/testimonials.php" target="_blank">testimonials.php</a>  and <a href="http://911globalmeds.com/about-us.php" target="_blank">about-us.php</a></span>
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
											<h2>ADD NEW VIDEO TESTIMONIAL  /   EDIT EXISTING VIDEO TESTIMONIAL</h2>
										</div>
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
                                <form action="{{route('aadhya.video_review.update',$video->id)}}" method="post" enctype="multipart/form-data">
                                	@csrf
								<div class="row">
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Full Name</label>
										<div class="col-sm-8">
										  <input type="text" name="fullName" value="{{$video->full_name}}" class="form-control" />
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Country</label>
										<div class="col-sm-10">
										  <input type="text" name="country" value="{{$video->country}}" class="form-control" />
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Email</label>
										<div class="col-sm-8">
										  <input type="text" name="email" value="{{$video->email}}" class="form-control" />
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Posting Date</label>
										<div class="col-sm-8">
										   <input type="date" name="postingDate" value="{{$video->posting_date}}" class="form-control" />
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Display Position</label>
										<div class="col-sm-8">
										   <input type="text" name="displayPosition" value="{{$video->display_position}}" class="form-control" />
										</div>
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Upload Image  <input type="file" class="filetype" name="image"></label>
										<div class="col-sm-10">
										   <input type="text" class="form-control" style="width:90%; float:left; display:inline-block"/> <img src="img/banner-icon.png" alt="" style="height:35px; float:right">
										</div>
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Upload Video <input type="file" class="filetype" name="video"></label>
										<div class="col-sm-10">
										   <input type="text" class="form-control" style="width:90%; float:left; display:inline-block"/> <img src="img/banner-icon.png" alt="" style="height:35px; float:right">
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-5 col-form-label">Post on Testimonials Page</label>
										<div class="col-sm-7">
										  <div class="form-check form-check-inline">
											  <input class="form-check-input" type="checkbox" name="testimonial[]" value="Y">
											  <label class="form-check-label">Yes</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="checkbox" name="testimonial[]" value="Y">
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
											  <input class="form-check-input" type="checkbox" name="about[]" value="Y">
											  <label class="form-check-label" for="inlineCheckbox1">Yes</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="checkbox" name="about[]" value="Y">
											  <label class="form-check-label">Top 5</label>
											</div>
										</div>
									</div>
									</div>
									
								<div class="col-md-12">
									<div class="bottom-button clearfix">
										<div class="text-right">
											<button type="submit" class="btn greenBtn">Update</button>
											{{-- <button type="button" class="btn redBtn">Delete</button> --}}
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