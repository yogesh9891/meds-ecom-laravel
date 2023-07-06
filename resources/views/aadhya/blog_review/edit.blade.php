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
								<form action="{{route('aadhya.blog_review.update',$blog->id)}}" method="post">
									@csrf
								<div class="row">
								<div class="col-md-4 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Full Name</label>
										<div class="col-sm-8">
										  <input type="text" class="form-control" value="{{$blog->fullname}}" name="fullName" />
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Country</label>
										<div class="col-sm-8">
										  <input type="text" class="form-control" value="{{$blog->country}}" name="country" />
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Email</label>
										<div class="col-sm-8">
										  <input type="text" class="form-control" value="{{$blog->email}}" name="email" />
										</div>
									</div>
								</div>
								
								<div class="col-md-12">
									<div class="form-group row">
										<label class="col-sm-1 col-form-label">Comments</label>
										<div class="col-sm-11">
										  <textarea  id="editor1" name="comment">{{$blog->comment}}</textarea>
										</div>
									</div>
								</div>
								
								<div class="col-md-3 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-5 col-form-label">Posting Date</label>
										<div class="col-sm-7">
										  <input type="date" class="form-control" value="{{$blog->posting_date}}" name="date" />
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group row">
									  <label class="col-sm-4 col-form-label">Post  on  Blog</label>
									  <div class="col-sm-8">
										  <input type="text" class="form-control" value="{{$blog->post_on_blog}}" name="post_blog" placeholder="None" />
									  </div>
								  </div>
								</div>
								<div class="col-md-5">
									<div class="form-group row">
									  <label class="col-sm-4 col-form-label"><a href="" class="darkblueTxt">Open Blog Page</a></label>
									  <div class="col-sm-8">
										  <div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" name="display" value="Y">
											  <label class="form-check-label">Display</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" name="display" value="Y">
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
						</form>
							</div>
                                
                                <div class="bottom-button clearfix">
                                
                                </div>
                        </div>
						
						
                    </div>
                </div>
            </div>

@endsection