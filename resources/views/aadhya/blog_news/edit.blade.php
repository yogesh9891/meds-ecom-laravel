@extends('layouts.backend')
@section('content')

<div class="page-define">
		<div class="container-fluid">
			<div class="row justify-content-between">
				<div class="col">
				  <h1>BLOGS</h1>
				  <span class="shorttxt">Data will show on the front-end pages – HOME / MEDICATION / BLOGS & NEWS / INDIVIDUAL BLOGS / SITE MAP</span>
				</div>
			</div>		
		</div>
	</div>
            <div class="main-panel">
                <div class="container-fluid">
                    <div class="panel-container">
                        <div class="main-section double-heading">
                            <div class="main-border clearfix">
                                <div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="entry-title">
											<h2>BLOGS LISTING</h2>
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
                                {{-- <div class="border-table text-left tableFooter font14">
									<table id="datatable" class="table custom-table table-bordered">
										<thead class="text-center">
											<tr>
											  <th scope="col" width="5%">Select <input type="checkbox" /></th>
											  <th scope="col" width="5%">S.No.</th>
											  <th scope="col" width="8%">Blog No.</th>
											  <th scope="col" width="10%">Author</th>
											  <th scope="col" width="6%">Posting Date</th>
											  <th scope="col" width="30%">Blog Title </th>
											  <th scope="col" width="26%">Blog URL</th>											  
											  <th scope="col" width="10%">Action</th>
											</tr>
										  </thead>
										  <tbody>
										  	@foreach($blogNews as $blognew)
											<tr>
											  <td><input type="checkbox" /></td>
											  <td>{{$blognew->id}}</td>
											  <td>{{$blognew->blog_news_no}}</td>
											  <td>{{$blognew->author}}</td>
											  <td>{{$blognew->date}}</td>
											  <td>{{$blognew->blog_title_h1}}</td>
											  <td>{{$blognew->source_url}}</td>
											  <td class="action">
												<a href="{{route('aadhya.blog_news.edit',$blognew->id)}}" class="editTxt">Edit</a>
												<a href="" class="delTxt">Delete</a>
											  </td>
											</tr>
											@endforeach
										</tbody>
									</table>
									
								</div>   --}}
                                   {{-- <div class="float-right mt-3">
									<button type="button" class="btn redBtn cut-button">Delete Selected</button>
								  </div>								
                            </div> --}}
                        </div>
                        <div class="main-section double-heading">
                            <div class="main-border ">
                                <div class="row">
									<div class="col-md-12">
										<div class="entry-title">
											<h2>ADD / EDIT BLOG GENERAL INFO FOR <span class="text-black">BL-108 : Nilotinib As An Alternate Medication To Imatinib Resistant CML</span></h2>
										</div>
										<small class="mb-3 d-block">DBT: 8-1-Blogs-News-Info</small>
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
									</div>
                                </div>
                                <form action="{{route('aadhya.blog_news.update',$blog->id)}}" method="post" enctype="multipart/form-data"> 
                                @csrf   
								<div class="row">
                                <div class="col-md-3 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-8 col-form-label">Blog/News No.</label>
										<div class="col-sm-4">
											<input type="text" name="blogNewsNo" value="{{$blog->blog_news_no}}" class="form-control"> 
										</div>
									</div>
								</div>
                                <div class="col-md-1 col-sm-12">
									<div class="form-group row" >
										<div class="form-check form-check-inline" style="width:100%;">
										  <input class="form-check-input" value="posted" type="radio"  name="alpha">
										  <label class="form-check-label" for="inlineCheckbox1">Posted by</label>
										</div>
										<div class="form-check form-check-inline" style="width:100%;">
										  <input class="form-check-input" value="source" type="radio"  name="alpha">
										  <label class="form-check-label" for="inlineCheckbox1">Source</label>
										</div>
									</div>
								</div>
								<div class="col-sm-5">
									<input type="text" name="postedOrSource" value="{{$blog->posted_or_source}}" class="form-control"> 
								</div>
								<div class="col-md-3 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label" >Date</label>
										<div class="col-sm-10">
											<input type="date" name="date" value="{{$blog->date}}"  class="form-control"> 
										</div>
									</div>
								</div>								
								
								<div class="col-md-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Source URL</label>
										<div class="col-sm-10">
											<input type="text" name="sourceUrl" value="{{$blog->source_url}}" class="form-control"> 
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Blog Title in h1 tag</label>
										<div class="col-sm-10">
											<input type="text" name="blogTitleH1Tag" value="{{$blog->blog_title_h1}}" class="form-control"> 
										</div>
									</div>
								</div>
                                <div class="col-md-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Page URL Name</label>
										<div class="col-sm-10">
											<input type="text" name="pageUrlName" value="{{$blog->page_url_name}}"  class="form-control"> 
										</div>
									</div>
								</div>
                                <div class="col-md-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Browsing Path Name</label>
										<div class="col-sm-10">
										  <input type="text" name="browsingPathName" value="{{$blog->browsing_path_name}}"  class="form-control">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Hyperlink Page Tags</label>
										<div class="col-sm-10">
										  <input type="text" name="hyperlinkPageTag" value="{{$blog->hyperlink_page_tag}}" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
									<label class="col-sm-2 col-form-label">Image - Big ( for individual-blogs-news.php page )</label>
									<div class="col-sm-2">
									  <input type="file" name="bigImage"  class="form-control-file" id="images" style="font-size: 13px;">	
									  <img src="{{$blog->big_image}}" height="80px" width="80px" />						 
									</div>
									<div class="col-sm-8">
									  <input type="text" class="form-control"  id="image_url" value="{{$blog->big_image}}" placeholder="Image URL">					 
									</div>
								  </div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
									<label class="col-sm-2 col-form-label">Image - Big Alt Tag </label>
									<div class="col-sm-10">
									  <input type="text" name="bigImageAltTag" value="{{$blog->big_image_alt_tag}}" class="form-control" id="image_url" placeholder="">					 
									</div>
								  </div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
									<label class="col-sm-2 col-form-label">Image - Medium ( for blogs-news.php page )</label>
									<div class="col-sm-2">
									  <input type="file" name="mediumImage"  class="form-control-file" id="images" style="font-size: 13px;">	
									  <img src="{{$blog->medium_image}}" height="80px" width="80px" />							 
									</div>
									<div class="col-sm-8">
									  <input type="text" class="form-control" value="{{$blog->medium_image}}" id="image_url" placeholder="Image URL">					 
									</div>
								  </div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
									<label class="col-sm-2 col-form-label">Image - Medium Alt Tag</label>
									<div class="col-sm-10">
									  <input type="text" name="mediumAltTag" value="{{$blog->medium_image_alt_tag}}" class="form-control" id="image_url" placeholder="">					 
									</div>
								  </div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
									<label class="col-sm-2 col-form-label">Image - Icon  ( for scroll menu )</label>
									<div class="col-sm-2">
									  <input type="file" name="imageIcon" class="form-control-file" id="images" style="font-size: 13px;">
									  <img src="{{$blog->image_icon}}" height="80px" width="80px" />								 
									</div>
									<div class="col-sm-8">
									  <input type="text" name="" value="{{$blog->image_icon}}" class="form-control" id="image_url" placeholder="Image URL">					 
									</div>
								  </div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
									<label class="col-sm-2 col-form-label">Image - Icon Alt Tag</label>
									<div class="col-sm-10">
									  <input type="text" name="imageIconAltTag" value="{{$blog->image_icon_alt_tag}}" class="form-control" id="image_url" placeholder="">					 
									</div>
								  </div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">To also post on the Other page</label>
										<div class="col-sm-10">
											<table class="table table-bordered">
												<tr>
													<td width="15%">home-page.php</td>
                                                    <td width="15%">blogs-news.php</td>													
													<td width="70%">medication.php</td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" name="beeta" value="yes">
											  <label class="form-check-label" for="inlineCheckbox1">Yes</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" name="beeta" value="no">
											  <label class="form-check-label">No</label>
											</div>
													</td>
													<td>
														<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" name="gaama" value="yes">
											  <label class="form-check-label" for="inlineCheckbox1">Yes</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" name="gaama" value="no">
											  <label class="form-check-label">No</label>
											</div>
													</td>
													<td><select class="form-control" name="medication">
															<option value="1">medicine 1</option>
															<option value="2">medicine 2</option>
														</select>
													</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
								
								<div class="col-md-12">
									<div class="form-group row">
										<label class="col-sm-12 col-form-label">Brief Introduction on the blog (for blogs-news.php)</label>
										<div class="col-sm-12">
											<textarea id="editor1" name="briefIntroduction" >{{$blog->brief_introduction}}</textarea>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
									  <label class="col-sm-12 col-form-label">Full Information on the blog (individual-blogs-news.php)</label>
									  <div class="col-sm-12">
											<textarea name="fullInformation" id="editor2">{{$blog->full_information}}</textarea>
										</div>
									</div>
								</div>
								
							</div>
							<div class="bottom-button clearfix">
							</div>
							</div>
                        </div>
						<div class="main-section">
                            
                                <div class="main-border">
                                    <div class="entry-title">
										<h2>ADD / EDIT BLOG SEO INFO FOR <span class="text-black">BL-108 : Nilotinib As An Alternate Medication To Imatinib Resistant CML</span></h2>
                                    </div>
									<small class="mb-3 d-block">DBT: 8-2-Indl-Blogs-News-SEO</small>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Title </label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="2"  name="metaTitle">{{$blog->meta_title}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="4" name="metaDescription">{{$blog->meta_description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Keyword </label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="4"  name="metaKeyword">{{$blog->meta_keyword}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Canonical</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="2"  name="canonical">{{$blog->canonical}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Language</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="language" value="{{$blog->language}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Country</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="country" value="{{$blog->country}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Distribution</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="distribution" value="{{$blog->distribution}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Author</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="author" value="{{$blog->author}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Robots</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="robots" value="{{$blog->robots}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Revisit After</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="revisitAfter" value="{{$blog->revisit_after}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Rating Value</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="ratingValue" value="{{$blog->rating_value}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Rating Count</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="ratingCount" value="{{$blog->rating_count}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Other Tags 3</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="otherTag3" value="{{$blog->other_tag_3}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Other Tags 4</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="otherTag4" value="{{$blog->other_tag_4}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Other Tags 5</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="otherTag5" value="{{$blog->other_tag_5}}" class="form-control">
                                        </div>
                                    </div>
                                     <div class="bottom-button text-right">
									<div class="inputBtn"><input type="submit" class="btn greenBtn" value="click to Update" /></div>
                                </div>
                                </div>
                                
                            </form>
                        </div>
						
					{{-- 	<div class="main-section">
                            <form>
                                <div class="main-border">
                                    <div class="entry-title">
                                        <h2>SEO INFORMATION FOR MASTER PAGE : <span class="text-black">Latest-Blogs-News</span></h2>
                                    </div>
									<small class="mb-3 d-block">DBT: 8-3-All-Blogs-News-SEO</small>

                                    <div class="row">
                                    <div class="col-md-12">
									<div class="float-right mb-3">
									<button type="button" class="btn redBtn cut-button">Edit</button>
								  </div>
									</div>
									</div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Page URL Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Browsing Path Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Title </label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="2"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Keyword </label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Canonical</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="2"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Language</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Country</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Distribution</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Author</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Robots</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Revisit After</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Rating Value</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Rating Count</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Other Tags 3</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Other Tags 4</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Other Tags 5</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                       <div class="bottom-button text-right">
									<div class="inputBtn"><input type="button" class="btn greenBtn" value="Save to Database" /></div>
                                </div>
                                </div>
                                
                            </form>
                        </div> --}}
						
					
                    </div>
                </div>
            </div>

@endsection