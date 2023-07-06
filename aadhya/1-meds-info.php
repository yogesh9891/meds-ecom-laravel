<?php include('include/head.php');?>
<?php include('include/header.php');?>

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
                            <form>
                                <div class="main-border">
                                    <div class="entry-title">
                                        <h2>EDIT AN EXISTING MEDICINE</h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9 col-sm-8">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Search by Generic No. / Generic Name</label>
                                                <div class="col-sm-8">
                                                    <select placeholder="Select" class="form-control">
                                                       <option value="1">911 – Medication</option>
                                                       <option value="2">Generic Name</option>
                                                       <option value="3">Generic Name</option>
                                                       <option value="4">Generic Name</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-7 col-form-label text-right"><span class="updatetext"><a href="javascript:void(0);">See Vacant No.</a></span></label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control" placeholder="" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                            </form>
                            </div>
                        </div>

                        <div class="main-section double-heading">
                            <div class="main-border ">
                                <div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="entry-title">
											<h2>ADD <span class="text-danger">OR EDIT</span> MEDICINE NAME DETAILS</h2>
										</div>
										<small class="mb-3 d-block">DBT: 1-1-Meds-Names</small>
									</div>									
                                </div>
                               
								<div class="row">
									<div class="col-md-4 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-6 col-form-label text-left">Generic ID Number</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control">
                                        </div>
                                      </div>                                    
									</div>									
									
									<div class="col-md-8 col-sm-12">								
									   <div class="form-group row">
                                        <label class="col-sm-3 col-form-label text-left">Main Generic Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                        </div>
                                      </div>
                                    </div>
									
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Other Names (Generic & Brands)</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" placeholder="">
                                        </div>
                                      </div>                                    
									</div>
									
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Frontend URL</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" placeholder=" ">
                                        </div>
                                      </div>                                    
									</div>
									
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Browsing Path Name</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" placeholder=" ">
                                        </div>
                                      </div>                                    
									</div>
									
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">H1 Title in Blue</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" placeholder="">
                                        </div>
                                      </div>                                    
									</div>
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Name in Home Diseases</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" placeholder="">
                                        </div>
                                      </div>                                    
									</div>
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Drug Information Title</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" placeholder="">
                                        </div>
                                      </div>                                    
									</div>
									
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Generic Intro Details</label>
                                        <div class="col-sm-10 bibtextarea">
                                           <textarea name="editor4" id="editor4"></textarea>
                                        </div>
                                      </div>                                    
									</div>

									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">DI Source Name</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" placeholder="">
                                        </div>
                                      </div>                                    
									</div>
									
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">DI Source URL</label>
                                        <div class="col-sm-10">
                                           <input type="text" class="form-control" placeholder=" ">
                                        </div>
                                      </div>                                    
									</div>
									
									
									
								</div>
								<div class="bottom-button clearfix">
								<div class="text-center">
									<div class="inputBtn"><input type="button" class="btn redBtn" value="Edit" /></div>
									<div class="inputBtn"><input type="button" class="btn greenBtn" value="Save" /></div>
									<div class="inputBtn"><input type="button" class="btn redBtn" value="Delete" /></div>
								</div>
							</div>
                                
							 </div>
							
                        </div>

						
						
						<div class="main-section">							
							<div class="main-border">
								<div class="entry-title">
									<h2><span>Drug Information for</span> 911 – MEDICATION</h2>
								</div>
								<small class="mb-3 d-block">DBT: 1-2- Meds-Info</small>
								<form method="post">
									<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Search a Qs. Info to Edit</label>
											<div class="col-sm-10">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-md-12 col-sm-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Question No.<span class="astrik">*</span></label>
											<div class="col-sm-10">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
										
										<div class="col-md-2 col-sm-6">Question<span class="astrik">*</span></div>
										<div class="col-md-10 col-sm-6"><input type="text" class="form-control"></div>
									</div>
									<div class="row mt-3">
										<div class="col-md-2 col-sm-6">Answer<span class="astrik">*</span></div>
										<div class="col-md-10 col-sm-6 bibtextarea"><textarea name="editor2" id="editor2"></textarea></div>
									</div>
																		
									<div class="bottom-button clearfix">
										<div class="float-right">
											<button type="button" class="btn greenBtn">Save</button>
                                            <button type="button" class="btn redBtn cut-button">Delete</button>
										</div>
									</div>
								</form>
										
							</div>
							</form>
                        </div>
						
						<div class="main-section uploadPdf">
							<form>
								<div class="main-border">
									<div class="entry-title">
										<h2><span>FDA Leaflets for</span> 911 – MEDICATION</h2>
									</div>
									<small class="mb-3 d-block">DBT: 1-3-Meds-Leaflets</small>
									<div class="row">
										<div class="col-md-6 col-sm-12">
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table">
													<div class="inputfile"><span>English PDF link</span><input type="file"></div>
												</div>
												<div class="col-md-7 col-sm-6 bder-table padding-table"><div class="inputfile"><span>demo.pdf</span><input type="file"></div></div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>Arabic PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>Bulgarian PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>Chinese PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>Dutch PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>Filipino PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>French PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>German PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">											
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>Greek PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>Hebrew PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>Italian PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table last">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
										</div>
										<div class="col-md-6 col-sm-12">
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>Japanese PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 bder-table padding-table">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>Korean PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>Portuguese PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>Romanian PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>Russian PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>Slovenian PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>Spanish PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>Swedish PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>Thai PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>Turkish PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
											<div class="row no-gutters">
												<div class="col-md-4 col-sm-6 padding-table"><div class="inputfile"><span>Vietnamese PDF link</span><input type="file"></div></div>
												<div class="col-md-7 col-sm-6 padding-table bder-table last">demo.pdf</div>
												<div class="col-md-1 col-sm-6 padding-table text-center"><a href="" class="cross">X</a></div>
											</div>
										</div>
									</div>	
<div class="bottom-button clearfix">
									<div class="float-right">
										<button type="button" class="btn redBtn">Edit</button>
										<button type="button" class="btn greenBtn">Save</button>
									</div>
								</div>									
								</div>									
								
							</form>
						</div>
						<div class="main-section">
							<form>
								<div class="main-border">
										<div class="entry-title">
											<h2><span>Video Information for</span> 911 – MEDICATION</h2>
										</div>
										<small class="mb-3 d-block">DBT: 1-4-Meds-Videos</small>
										<div class="row mt-3">
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-2 col-form-label">Search a Video to Edit</label>
													<div class="col-sm-10">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-2 col-form-label">Video No.</label>
													<div class="col-sm-10">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-2 col-form-label">Video Title</label>
													<div class="col-sm-10">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-2 col-form-label">Display Image</label>
													<div class="col-sm-10">
														<input type="file" class="form-control">
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-2 col-form-label">Alt Tag</label>
													<div class="col-sm-10">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-2 col-form-label">Upload Video</label>
													<div class="col-sm-10">
														<input type="file" class="form-control">
													</div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group row">
													<label class="col-sm-2 col-form-label">Video URL</label>
													<div class="col-sm-10">
														<input type="text" class="form-control">
													</div>
												</div>
											</div>
											
											
										</div>
										
										<div class="bottom-button clearfix">
											<div class="float-right">
												<input type="button" class="btn redBtn" value="Edit" />
												<input type="button" class="btn greenBtn" value="Save" />
												<input type="button" class="btn redBtn" value="Delete" />
											</div>
										</div>
									</div>
									
								
							</form>
						</div>
						
						<div class="main-section">
                            <form>
                                
                                <div class="main-border">
                                    <div class="entry-title">
                                        <h2><span>SEO Information for 911 – MEDICATION</span></h2>
                                    </div>
									<small class="mb-3 d-block">DBT: 1-5-Meds-SEO</small>
<div class="bottom-button clearfix">
                                    <div class="float-right">
                                        <input type="button" class="btn redBtn" value="Edit" />
										<input type="button" class="btn greenBtn" value="Save" />
										<input type="button" class="btn redBtn" value="Delete" />
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
                                        <label class="col-sm-2 col-form-label">Hyperlink Page Tags</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="2"></textarea>
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
<div class="bottom-button">
                                    <input type="button" class="btn redBtn" value="Edit" />
									<input type="button" class="btn greenBtn" value="Save" />
									<input type="button" class="btn redBtn" value="Delete" />
                                    <div class="float-right">
                                        <button type="button" class="btn greenBtn cut-button">Go To MEDICINE Page</button>
                                    </div>
                                </div>
                                </div>
                                
                            </form>
                        </div>
					
                    </div>
                </div>
            </div>

<?php include('include/footer.php');?>
</body>
</html>