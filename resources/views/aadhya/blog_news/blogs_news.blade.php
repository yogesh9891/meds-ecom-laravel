@extends('layouts.backend')
@section('before_body')
<style>

</style>
@endsection
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
                    	   <div  id="blog-show">
                        <div class="main-section double-heading">
                            <div class="main-border ">
                                <div class="row">
									<div class="col-md-12">
										    <div class="entry-title title-icon" data-toggle="collapse" href="#blog_form" role="button" aria-expanded="false" aria-controls="collapseExample">
											<h2>ADD / EDIT BLOG GENERAL INFO FOR <a href="#" class="text-black title-heading" target="_blank">NEW BLOG</a></h2>
										</div>
										<button type="button" class="btn redBtn cut-button pull-right mb-3" onclick="clearBlog()">Clear All</button>
										<small class="mb-3 d-block">DBT: 8-1-Blogs-News-Info</small>

									
									</div>
                                </div>
                                <form action="{{route('aadhya.blog_news.store')}}" method="post" enctype="multipart/form-data" id="blog_form" class="collapse" > 
                                		<input type="hidden" name="review_form" id="blog_form_hidden" value="{{old('review_form',route('aadhya.blog_news.store'))}}">
                                @csrf   
								<div class="row" >
                                <div class="col-md-3 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-7 col-form-label">Blog/News No.  </label>
										<label class="col-sm-1 col-form-label">BL-  </label>
									
										<div class="col-sm-4">
											<input type="text" name="blogNewsNo"  class="form-control" required="" min="0"> 
										</div>
									</div>
								</div>
                                <div class="col-md-1 col-sm-12">
									<div class="form-group row" >
										<div class="form-check form-check-inline" style="width:100%;">
										  <input class="form-check-input" value="Posted By" type="radio"  name="postedby">
										  <label class="form-check-label" for="inlineCheckbox1">Posted by</label>
										</div>
										<div class="form-check form-check-inline" style="width:100%;">
										  <input class="form-check-input" value="Source" type="radio"  name="postedby">
										  <label class="form-check-label" for="inlineCheckbox1">Source</label>
										</div>
									</div>
								</div>
								<div class="col-sm-5">
									<input type="text" name="postedOrSource" class="form-control"> 
								</div>
								<div class="col-md-3 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label" >Date</label>
										<div class="col-sm-10">
											<input type="date" name="date"  class="form-control"> 
										</div>
									</div>
								</div>								
								
								<div class="col-md-12">
									<div class="form-group row" style="display: none;">
										<label class="col-sm-2 col-form-label">Source URL</label>
										<div class="col-sm-10">
											<input type="text" name="sourceUrl" class="form-control"> 
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Blog Title in h1 tag</label>
										<div class="col-sm-10">
											<input type="text" name="blogTitleH1Tag"  class="form-control" required=""> 
										</div>
									</div>
								</div>
                                <div class="col-md-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Page URL Name</label>
										<div class="col-sm-10">
											<input type="text" name="pageUrlName"  class="form-control" required=""> 
										</div>
									</div>
								</div>
                                <div class="col-md-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Browsing Path Name</label>
										<div class="col-sm-10">
										  <input type="text" name="browsingPathName"  class="form-control">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Hyperlink Page Tags</label>
										<div class="col-sm-10">
										  <input type="text" name="hyperlinkPageTag"  class="form-control">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
									<label class="col-sm-2 col-form-label">Image - Big ( for Indl. Blog page ) : 800 px width</label>
									<div class="col-sm-2">
									  <input type="file" name="bigImage"  class="form-control-file" id="images" style="font-size: 13px;">							 
									</div>
									<div class="col-sm-8">
										<font class="font14 darkblueTxt"><a class="bluehover" style="color:#00000073;margin-left: -22px;" id="gen_image1" target="_blank" href="#">NO Image Uploaded</a></font>
									 {{--  <input type="text" class="form-control"  id="image_url" placeholder="Image URL">	 --}}				 
									</div>
								  </div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
									<label class="col-sm-2 col-form-label">Image - Big Alt Tag </label>
									<div class="col-sm-10">
									  <input type="text" name="bigImageAltTag"  class="form-control" id="image_url" placeholder="">					 
									</div>
								  </div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
									<label class="col-sm-2 col-form-label">Image - Medium ( for All Blogs page ) : 360 x 203 px</label>
									<div class="col-sm-2">
									  <input type="file" name="mediumImage"  class="form-control-file" id="images" style="font-size: 13px;">							 
									</div>
									<div class="col-sm-8">
									  <font class="font14 darkblueTxt"><a class="bluehover" style="color:#00000073;margin-left: -22px;" id="gen_image2" target="_blank" href="#">No Image Uploaded</a></font>				 
									</div>
								  </div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
									<label class="col-sm-2 col-form-label">Image - Medium Alt Tag</label>
									<div class="col-sm-10">
									  <input type="text" name="mediumAltTag"  class="form-control" id="image_url" placeholder="">					 
									</div>
								  </div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
									<label class="col-sm-2 col-form-label">Image - Icon ( for scroll menu ) : 140 x 80 px</label>
									<div class="col-sm-2">
									  <input type="file" name="imageIcon" class="form-control-file" id="images" style="font-size: 13px;">							 
									</div>
									<div class="col-sm-8">
									 <font class="font14 darkblueTxt"><a class="bluehover" style="color:#00000073;margin-left: -22px;" id="gen_image3" target="_blank" href="#">No Image Uploaded</a></font>					 
									</div>
								  </div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
									<label class="col-sm-2 col-form-label">Image - Icon Alt Tag</label>
									<div class="col-sm-10">
									  <input type="text" name="imageIconAltTag"  class="form-control" id="image_url" placeholder="">					 
									</div>
								  </div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">To also post on the Other page</label>
										<div class="col-sm-10">
											<table class="table table-bordered">
												<tr>
													<td width="15%"><a href="{{ url('/') }}" target="_blank">HOME</a></td>
                                                    <td width="15%"><a href="{{ route('latest_blog') }}" target="_blank">All Blog</a></td>													
													<td width="70%">Medication <span id="medicine-title"></span></td>
												</tr>
												<tr>
													<td>
														<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" name="home" value="1">
											  <label class="form-check-label" for="inlineCheckbox1">Yes</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" name="home" value="0">
											  <label class="form-check-label">No</label>
											</div>
													</td>
													<td>
														<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" name="blog" value="1">
											  <label class="form-check-label" for="inlineCheckbox1">Yes</label>
											</div>
											<div class="form-check form-check-inline">
											  <input class="form-check-input" type="radio" name="blog" value="0">
											  <label class="form-check-label">No</label>
											</div>
													</td>
													<td>
												 <input type="hidden" name="medicine" class="form-control" />
												        <input type="text" class="form-control"  id="search_by_generic_no" placeholder="Search by Generic No. / Generic Name" value="{{$name??''}}"><span href="" class="cross seardch-cross" style="cursor:pointer;right: 23px;top: -26px;position: relative;"; >X</span>
												<div id="generic_result"></div>
												  <input type="hidden" name="medicine" class="form-control" />

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
											<textarea class="form-control" name="briefIntroduction" maxlength="200" ></textarea>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
									  <label class="col-sm-12 col-form-label">Full Information on the blog (individual-blogs-news.php)</label>
									  <div class="col-sm-12 bibtextarea2">
											<textarea name="fullInformation" rows="10" id="editor4"  ></textarea>
										</div>
									</div>
								</div>
								
							</div>
							<div class="row"> 

							<div class="col-md-12 mt-3">
							  			  <div class="entry-title mt-3">
										<h2>ADD / EDIT BLOG SEO INFO FOR <a href="#" class="text-black title-heading" target="_blank">NEW BLOG</a></h2>
                                    </div>
                                </div>
									<small class="m-3 d-block">DBT: 8-2-Indl-Blogs-News-SEO</small>

							</div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Title </label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="2"  name="metaTitle"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="4" name="metaDescription"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Keyword </label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="4"  name="metaKeyword"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Canonical</label>
                                        <div class="col-sm-10">
                                            <p id="canonical"></p>
                                        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Language</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="language"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Country</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="country"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Distribution</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="distribution"  class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Author</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="author"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Robots</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="robots"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Revisit After</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="revisitAfter"  class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Rating Value</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="ratingValue"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Rating Count</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="ratingCount"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Other Tags 3</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="otherTag3"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Other Tags 4</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="otherTag4"  class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Other Tags 5</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="otherTag5"  class="form-control">
                                        </div>
                                    </div>
                                     <div class="bottom-button text-right">
									<div class="inputBtn"><input type="submit" class="btn greenBtn" value="SAVE/UPDATE" /></div>
                                </div>
							<div class="bottom-button clearfix">
							</div>
						</form>
							</div>
                        </div>
					</div>
                        <div class="main-section double-heading">
                            <div class="main-border clearfix">
                                <div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="entry-title">
											<h2>BLOGS LISTING</h2>
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
									<table id="datatable" class="table custom-table table-bordered">
										<thead class="text-center">
											<tr>
											  <th scope="col" width="5%">Select <input type="checkbox" /></th>
											  <th scope="col" width="5%">S.No.</th>
											  <th scope="col" width="8%">Blog No.</th>
											  <th scope="col" width="10%">Posted By / Source</th>
											  <th scope="col" width="6%">Posting Date</th>
											  <th scope="col" width="30%">Blog Title </th>
											  <th scope="col" width="26%">Blog URL</th>											  
											  <th scope="col" width="10%">Action</th>
											</tr>
										  </thead>
										  <tbody>
										  	@foreach($blogNews->sortByDesc('id') as $blognew)
											<tr id="tr_{{$blognew->id}}">
                      						  <td><input type="checkbox" class="sub_chk dcb" data-id="{{$blognew->id}}"/></td>
											  <td>{{$blognew->id}}</td>
											  <td>BL-{{$blognew->blog_news_no}}</td>
											  <td>{{$blognew->posted_or_source}}</td>
											  <td>{{$blognew->created_at->format('d-m-y')}}</td>
											  <td>{{$blognew->blog_title_h1}}</td>
											  <td><a href="{{ route('indivisual_blog',$blognew->page_url_name) }}" target="_blank">{{$blognew->page_url_name}}</a></td>
											  <td class="action">
												<a href="javascript:void(0);" onclick="getBlogNews(this)" data-id="{{ $blognew->id }}"  class="editTxt">Edit</a>
												<a href="{{route('aadhya.blog_news.destroy',$blognew->id)}}" class="delTxt">Delete</a>
											  </td>
											</tr>
											@endforeach
										</tbody>
									</table>
									
								</div>  
                                   <div class="float-right mt-3">
									<button type="button" class="btn redBtn cut-button">Delete Selected</button>
								  </div>								
                            </div>
                        </div>
                     
						<div class="main-section">
                            <form action="{{ route('aadhya.blog-seo.update') }}" method="post">
                            	@csrf
                                <div class="main-border">
                                    <div class="entry-title title-icon" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <h2 ><span id="plus_button"></span> SEO INFORMATION FOR MASTER PAGE : <span class="text-black">Latest-Blogs-News</span></h2>
                                    </div>
									<small class="mb-3 d-block">DBT: 8-3-All-Blogs-News-SEO</small>
									<div  class="collapse" id="collapseExample">
                                    <div class="row">
                                    <div class="col-md-12">
									
									</div>
									</div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Page URL Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="c_3_6_1_frontend_url" value="{{$homeSeo->c_3_6_1_frontend_url}}" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Browsing Path Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="c_3_6_2_browsing_path_name"  value="{{$homeSeo->c_3_6_2_browsing_path_name}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Title </label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="c_3_6_3_meta_title" rows="2">{{$homeSeo->c_3_6_3_meta_title}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="c_3_6_4_meta_description" rows="4">{{$homeSeo->c_3_6_4_meta_description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Meta Keyword </label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="c_3_6_5_meta_keyword" rows="4">{{$homeSeo->c_3_6_5_meta_keyword}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Canonical</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" name="c_3_6_7_canonical" rows="2">{{$homeSeo->c_3_6_7_canonical}}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Language</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="c_3_6_8_language" value="{{$homeSeo->c_3_6_8_language}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Country</label>
                                                <div class="col-sm-8">
                                                    <input type="text"  name="c_3_6_9_country" value="{{$homeSeo->c_3_6_9_country}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Distribution</label>
                                                <div class="col-sm-8">
                                                    <input type="text"   name="c_3_6_10_distribution" value="{{$homeSeo->c_3_6_10_distribution}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Author</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="c_3_6_11_author"  value="{{$homeSeo->c_3_6_11_author}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Robots</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="c_3_6_12_robots" value="{{$homeSeo->c_3_6_12_robots}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Revisit After</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="c_3_6_13_revisit_after" value="{{$homeSeo->c_3_6_13_revisit_after}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-6 col-form-label">Rating Value</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="c_3_6_14_rating_value" value="{{$homeSeo->c_3_6_14_rating_value}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Rating Count</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="c_3_6_15_rating_count" value="{{$homeSeo->c_3_6_15_rating_count}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Other Tags 3</label>
                                                <div class="col-sm-8">
                                                    <input type="text" name="c_3_6_16_other_tags_3" value="{{$homeSeo->c_3_6_16_other_tags_3}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Other Tags 4</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="c_3_6_17_other_tags_4" value="{{$homeSeo->c_3_6_17_other_tags_4}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Other Tags 5</label>
                                        <div class="col-sm-10">
                                            <input type="text"  name="c_3_6_18_other_tags_5" value="{{$homeSeo->c_3_6_18_other_tags_5}}" class="form-control">
                                        </div>
                                    </div>
                 				      <div class="bottom-button text-right">
										<div class="inputBtn"><input type="submit" class="btn greenBtn" value="SAVE/UPDATE" />
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

<script src="https://cdn.ckeditor.com/4.20.0/standard-all/ckeditor.js"></script>
<script type="text/javascript">
	
//  CKEDITOR.replace('editor12', {
//       resize_dir: 'both',
//     });;
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
                    }
                });
				
	});

	$('.seardch-cross').click(function (argument) {
				$('#search_by_generic_no').val('');
					$('#generic_result').html('');
					$('input[name="medicine"]').val(0);
	})

	function getmedInfo(e){
                    // declare the value in the input field to a variable
                    var value = $(e).text();
					var id = $(e).attr('data-id');
							$('#search_by_generic_no').val(value);
					$('#generic_result').html('');
					 var strArray = value.split(" -");
					 console.log(strArray)
					$('input[name="medicine"]').val(strArray[0]);

				}

	function getBlogNews(e){
                    // declare the value in the input field to a variable
                    $('#blog-show').show()
					var id = $(e).attr('data-id');
					for (instance in CKEDITOR.instances)
{
    CKEDITOR.instances[instance].updateElement();
}
                      $.ajax({
	                       type: "get",       
	                       url: "{{url('aadhya/8-blogs-news-show')}}/" + id,
	                    success: function (data) {
								let med = data.data;
								$('input[name="blogNewsNo"]').val(med.blog_news_no);
								    let canonical_url = "{{url('/blogs-news')}}"+ "/"+ med.page_url_name;
								$('.title-heading').text("BL-"+med.blog_news_no+" : "+med.blog_title_h1);
								$('.title-heading').attr('href',canonical_url);
								$('input[name="postedOrSource"]').val(med.posted_or_source);
								$('input[name="date"]').val(med.date);
								$('input[name="sourceUrl"]').val(med.source_url);
								$('input[name="browsingPathName"]').val(med.browsing_path_name);
								$('input[name="pageUrlName"]').val(med.page_url_name);
								
								$('input[name="hyperlinkPageTag"]').val(med.hyperlink_page_tag);
                    		    $('input[name="postedby"][value="'+med.posted_source+'"]').prop('checked', true);
                    		    $('input[name="home"][value="'+med.home_page+'"]').prop('checked', true);
                    		    $('input[name="blog"][value="'+med.blog_news+'"]').prop('checked', true);

								let  image_path = "{{ asset('img-bl') }}";
                    			$('#gen_image1').attr('href',image_path+'/'+med.big_image);
                    			$('#gen_image1').text(image_path+'/'+med.big_image);

                    			$('#gen_image2').attr('href',image_path+'/'+med.medium_image);
                    			$('#gen_image2').text(image_path+'/'+med.medium_image);

                    			$('#gen_image3').attr('href',image_path+'/'+med.image_icon);
                    			$('#gen_image3').text(image_path+'/'+med.image_icon);

								$('input[name="bigImageAltTag"]').val(med.big_image_alt_tag);
								$('input[name="mediumAltTag"]').val(med.medium_image_alt_tag);
								$('input[name="imageIconAltTag"]').val(med.image_icon_alt_tag);
								$('input[name="blogTitleH1Tag"]').val(med.blog_title_h1 );
								$('input[name="home_disease"]').val(med.c_1_1_7_name_in_home_diseases);
								$('input[name="drug_title"]').val(med.c_1_1_8_drug_info_title);
					
								CKEDITOR.instances.editor4.setData(med.full_information); 
                                   $('textarea[name="briefIntroduction"]').text(med.brief_introduction);
                                   $('textarea[name="metaTitle"]').text(med.meta_title);
                                      $('textarea[name="metaDescription"]').text(med.meta_description);
                                     $('textarea[name="metaKeyword"]').text(med.meta_keyword);
                                  
                                    $('textarea[name="hyperlink_link"]').text(med.canonical);
                                     let seo_url = "{{url('/')}}"+ "/"+ med.c_1_1_4_frontend_url;
                                      $('#frontBtn').attr('href',seo_url);	

                                      if(med.medication){
                                      	$('#medicine-title').text(' : '+med.medication.c_1_1_1_generic_id_no +' - '+med.medication.c_1_1_2_main_generic_name)
                                      }
                                                            
                               
                                     $('#canonical').text(canonical_url);
                                 $('input[name="language"]').val(med.language); $('input[name="country"]').val(med.country);
                                     $('input[name="distribution"]').val(med.distribution); $('input[name="author"]').val(med.author);
                                      $('input[name="robots"]').val(med.robots);
                                      $('input[name="revisitAfter"]').val(med.revisit_after);
                                      $('input[name="ratingValue"]').val(med.rating_value);
                                      $('input[name="ratingCount"]').val(med.rating_count);
                                      $('input[name="otherTag3"]').val(med.other_tag_3);
                                      $('input[name="otherTag2"]').val(med.other_tag_4);
                                      $('input[name="otherTag5"]').val(med.other_tag_5);
                                                                let seo_action = "{{url('aadhya/8-blogs-news-update')}}" +"/"+ med.id;
                                                                $('#blog_form').attr('action',seo_action)
                                                                $('#blog_form_hidden').val(seo_action)
                             }

                         });
                  }


		$('input[name="postedby"]').click(function (argument) {

			if($(this).val() == 'Source'){
			$('input[name="sourceUrl"]').parent().parent().show();

			} else {
				$('input[name="sourceUrl"]').parent().parent().hide();

			}
		})

		function clearBlog() {
				$('input[name="blogNewsNo"]').val('');
								$('.title-heading').text("NEW BLOG");
								$('#blog_form').trigger("reset");
								$('textarea[name="metaTitle"]').val('')
								$('textarea[name="metaDescription"]').val('')
								$('textarea[name="metaKeyword"]').val('')
								$('textarea[name="canonical"]').val('')
								$('#gen_image1').attr('href','#');
                    			$('#gen_image1').text('No Image Uploaded');
                    			$('#medicine-title').text('');
                    			$('#gen_image2').attr('href','#');
                    			$('#gen_image2').text('No Image Uploaded');

                    			$('#gen_image3').attr('href','#');
                    			$('#gen_image3').text('No Image Uploaded');

					for (instance in CKEDITOR.instances)
{
    CKEDITOR.instances[instance].updateElement();
}
									CKEDITOR.instances.editor1.setData(''); 
								CKEDITOR.instances.editor2.setData(''); 
                                                                let seo_action = "{{url('aadhya/8-blogs-news-store')}}" ;
                                                                $('#blog_form').attr('action',seo_action)
                                                                $('#blog_form_hidden').val(seo_action)
	

	}

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

                        url: "{{ route('aadhya.8-blogs-news.deleteAll') }}",

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
