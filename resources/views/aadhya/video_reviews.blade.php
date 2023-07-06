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
                        <div class="main-section double-heading">
                            <div class="main-border ">
                                <div class="row">
									<div class="col-md-12">
										<div class="entry-title">
											<h2>ADD NEW VIDEO TESTIMONIAL  /   EDIT EXISTING VIDEO TESTIMONIAL</h2>
										</div>
										<small>DBT: 7-Review-Videos</small>
									</div>
									
                                </div>
								<div class="row">
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Full Name</label>
										<div class="col-sm-8">
										  <input type="text" class="form-control" />
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Country</label>
										<div class="col-sm-10">
										  <input type="text" class="form-control" />
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Email</label>
										<div class="col-sm-8">
										  <input type="text" class="form-control" />
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Posting Date</label>
										<div class="col-sm-8">
										   <input type="date" class="form-control" />
										</div>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Display Position</label>
										<div class="col-sm-8">
										   <input type="text" class="form-control" />
										</div>
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Upload Image  <input type="file" class="filetype"></label>
										<div class="col-sm-10">
										   <input type="text" class="form-control" style="width:90%; float:left; display:inline-block"/> <img src="img/banner-icon.png" alt="" style="height:35px; float:right">
										</div>
									</div>
								</div>
								<div class="col-md-12 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Upload Video <input type="file" class="filetype"></label>
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
											  <input class="form-check-input" type="checkbox">
											  <label class="form-check-label">Yes</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="checkbox">
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
											  <input class="form-check-input" type="checkbox">
											  <label class="form-check-label" for="inlineCheckbox1">Yes</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="checkbox">
											  <label class="form-check-label">Top 5</label>
											</div>
										</div>
									</div>
									</div>
									
								<div class="col-md-12">
									<div class="bottom-button clearfix">
										<div class="text-right">
											<button type="button" class="btn greenBtn">Save</button>
											<button type="button" class="btn redBtn">Delete</button>
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
											  <th scope="col" width="30px"><input type="checkbox" class="inputAuto" />Select</th>
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
											<tr>
											  <td><input type="checkbox" class="inputAuto" /></td>
											  <td>1</td>
											  <td>Ron Diestro <br> USA  <br> Ron12598@gmail.com</td>
											  <td>8-9-2020</td>
											  <td>2</td>
											  
											  <td>/ Img/ Ron-Diestro-testimonials.jpg     <br>    / Videos/ Ron-Diestro-Video-testimonials.mp4</td>
											  <td>Reviews  Y  Y <br>About Us  Y  Y     </td>
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