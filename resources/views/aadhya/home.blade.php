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
										<div class="entry-title">
											<h2><span class="darkblueTxt">Header Image</span></h2>
										</div>
										<small class="mb-3 d-block">DBT: 3-1-Home-Header</small>
									</div>
                                </div>
                                <form>
								<div class="tableRow">
									<table class="table table-bordered">
									  <thead>
										<tr>
										  <th scope="col" width="10%">&nbsp;</th>
										  <th scope="col" width="15%">Image - 2024 x 1349</th>
										  <th scope="col" width="20%">Image Alt Tag</th>
										  <th scope="col" width="20%">Message on Image</th>
										  <th scope="col" width="10%">Color</th>
										  <th scope="col" width="21%">URL to open</th>
										</tr>
									  </thead>
									  <tbody>
										<tr>
										  <td><button class="dev-slider"><strong>UPLOAD IMAGE 1</strong></button><center><input type="checkbox" /></center></td>
										  <td><textarea class="form-control" rows="3" placeholder="Amyfostan"></textarea></td>
										  
										  <td><textarea class="form-control" rows="3" placeholder=""></textarea></td>
										  <td><textarea class="form-control" rows="3" placeholder=""></textarea></td>
										  <td><center><input type="text" class="form-control" placeholder="#RRGGBB" /><img src="{{asset('admin_assets/img/banner-icon.png')}}" alt="" style="height:35px;width:70px;" /></center></td>
										  <td><textarea class="form-control" rows="3" placeholder=""></textarea></td>
										</tr>
									  </tbody>
									</table>
									
									<div class="bottom-button clearfix">
										<div class="text-right">
											<button class="btn redBtn">Edit</button>
											<button class="btn greenBtn">Save</button>
											<div class="inputBtn"><input type="button" class="btn greenBtn" value="Add Slider" /></div>
											<div class="inputBtn"><input type="button" class="btn redBtn" value="Delete Selected" /></div>
											
										</div>
									</div>
									
								</div>
                                
                            </div>
							
								</form>
                        </div>
								
						<div class="main-section mt-5">
						<div class="main-section">							
							<div class="main-border">
								<div class="entry-title">
									<h2><span>Main Body Text</span></h2>
								</div>
								<small>DBT: 3-2-Main-Body</small>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">H1 Title in Green</label>
											<div class="col-sm-10">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
										
									</div>
									<div class="row">
									<div class="col-md-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Qs Ans H2 Green Title</label>
											<div class="col-sm-10">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
										
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row mb-0">
												<label class="col-sm-2 col-form-label">H2 Blue Line 1</label>
												<div class="col-sm-10">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>										
									</div>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group row">
												<div class="col-md-2 col-sm-6"><label>Text below Blue Line 1</div>
												<div class="col-md-10 col-sm-6 bibtextarea"><textarea name="editor1" id="editor1"></textarea></div>
											</div>
										</div>
									</div>	
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row mb-0">
												<label class="col-sm-2 col-form-label">H2 Blue Line 2</label>
												<div class="col-sm-10">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>										
									</div>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group row">
												<div class="col-md-2 col-sm-6"><label>Text below Blue Line 2</div>
												<div class="col-md-10 col-sm-6 bibtextarea"><textarea name="editor2" id="editor2"></textarea></div>
											</div>
										</div>
									</div>	
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row mb-0">
												<label class="col-sm-2 col-form-label">H2 Blue Line 3</label>
												<div class="col-sm-10">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>										
									</div>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group row">
												<div class="col-md-2 col-sm-6"><label>Text below Blue Line 3</div>
												<div class="col-md-10 col-sm-6 bibtextarea"><textarea name="editor3" id="editor3"></textarea></div>
											</div>
										</div>
									</div>	
									<div class="row">
										<div class="col-md-12">
											<div class="form-group row mb-0">
												<label class="col-sm-2 col-form-label">H2 Blue Line 4</label>
												<div class="col-sm-10">
													<input type="text" class="form-control">
												</div>
											</div>
										</div>										
									</div>
									<div class="row mt-3">
										<div class="col-md-12">
											<div class="form-group row">
												<div class="col-md-2 col-sm-6"><label>Text below Blue Line 4</div>
												<div class="col-md-10 col-sm-6 bibtextarea"><textarea name="editor4" id="editor4"></textarea></div>
											</div>
										</div>
									</div>	
									
									<div class="bottom-button clearfix">
										<div class="float-right">
											<div class="inputBtn"><input type="button" class="btn redBtn" value="Edit" /></div>
											<div class="inputBtn"><input type="button" class="btn greenBtn" value="Save" /></div>
											<div class="inputBtn"><input type="button" class="btn redBtn" value="Delete" /></div>
										</div>
									</div>
								</form>
										
							</div>
							</form>
                        </div>
					<div class="main-border mt-5">
						<div class="row">
									<div class="col-md-7 col-sm-12">
										<div class="entry-title">
											<h2>GENERAL DISEASES Information</h2>
										</div>
										<small class="d-block mb-3">DBT: 3-3-General-Diseases</small>
									</div>
									
									<div class="col-md-5">
										<div class="entry-title right-heading">
											<div class="selectedit align-items-center">
												<div class="edittext">Edit</div>
												<select class="form-control" style="width:400px;">
													<option>Select GENERAL Disease to EDIT</option>
													<option>...</option>
													<option>...</option>
												</select>
											</div>
										</div>
									</div>
                                </div>
						<form>
							<div class="row">
								<div class="col-md-10">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">General Disease</label>
										<div class="col-sm-8" style="padding: 0 8px;margin-left:40px;">
										  <input type="text" class="form-control">
										</div>
									</div>
								</div>
								
                                <div class="col-md-2">
									<div class="form-group row">
										<label class="col-sm-5 col-form-label text-right">ID No.</label>
										<div class="col-sm-7">
										  <input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Square Image 380x287</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" placeholder="no file chosen">
                                        </div>
									</div>
								</div>
							<div class="col-md-12">
							 <div class="form-group row">
								<label class="col-sm-2 col-form-label">S.I. Alt tag</label>
								<div class="col-sm-10">
									<input type="text" class="form-control">
								</div>
							 </div>
							</div>  
								<div class="col-md-12">
                                 <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Disease Information in Brief</label>
                                    <div class="col-sm-10">
                                        <textarea name="editor5" id="editor5"></textarea>
                                    </div>
                                 </div>
                                </div>							
                                									<div class="col-md-12">
                                <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Drugs to display</label>
                                        <div class="col-sm-10">
                                            <select class="form-control">
												<option>Select Generic Name to ADD TO LIST</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
									<div class="col-md-12">
										<div class="tableRow">
									<table class="table table-borderless">
									  <thead>
										<tr>
										  <th scope="col" width="5%">#</th>
										  <th scope="col" width="20%">Generic Medicine</th>
										  <th scope="col" width="35%">Medication Page URL</th>
										  <th scope="col" width="40">Long Generic Name under Disease</th>
										</tr>
									  </thead>
									  <tbody>
										<tr>
										  <th scope="row">1</th>
										  <td class="d-flex">
										  <textarea class="form-control" rows="3"  placeholder="AMIFOSTINE - M108" readonly></textarea>
										    <a href="#" class="plush">+</a> 
										    <a href="" class="cross">X</a>
										  </td>
										  <td>
										  <textarea class="form-control" rows="3"  placeholder="/medication/buy-Generic-Amifostine-Brand-Ethyol-online" readonly></textarea>
										  </td>
										  <td>
										   <textarea class="form-control" rows="3"  placeholder="buy Generic ATHYOLAMYCIN and/or Brand Athyol Panthol 375 mg / 500 mg tablets / Injection Vial online at lowest price" readonly></textarea>
										  </td>
										</tr>
										<tr>
										  <th scope="row">2</th>
										  <td class="d-flex"><input type="text" class="form-control" /> 
										    <a href="#" class="plush">+</a> 
										    <a href="" class="cross">X</a>
										  </td>
										  <td><input type="text" class="form-control"  /></td>
										  <td><input type="text" class="form-control"  /></td>
										</tr>
									  </tbody>
									</table>
								</div>
									</div>
                               			
							</div>
							<div class="bottom-button text-right">
								<div class="inputBtn"><input type="button" class="btn greenBtn" value="SORT ALPHABETICALLY & SAVE" /></div>
								<div class="inputBtn"><input type="button" class="btn redBtn" value="Delete" /></div>
							</div>
						</form>
					</div>
					
				</div>
				
				<div class="main-section mt-5">
					<div class="main-border">
						<div class="row">
									<div class="col-md-7 col-sm-12">
										<div class="entry-title">
											<h2>CRITICAL DISEASES Information</h2>
										</div>
										<small class="d-block mb-3">DBT: 3-4-Critical-Diseases</small>
									</div>
									
									<div class="col-md-5">
										<div class="entry-title right-heading">
											<div class="selectedit align-items-center">
												<div class="edittext">Edit</div>
												<select class="form-control" style="width:400px;">
													<option>Select CRITICAL Disease to EDIT</option>
													<option>...</option>
													<option>...</option>
												</select>
											</div>
										</div>
									</div>
                                </div>
						<form>
							<div class="row">
								<div class="col-md-10">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Critical Disease</label>
										<div class="col-sm-8" style="padding: 0 8px;margin-left:40px;">
										  <input type="text" class="form-control">
										</div>
									</div>
								</div>
								
                                <div class="col-md-2">
									<div class="form-group row">
										<label class="col-sm-5 col-form-label text-right">ID No.</label>
										<div class="col-sm-7">
										  <input type="text" class="form-control">
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Square Image 380x287</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" placeholder="no file chosen">
                                        </div>
									</div>
								</div>
							<div class="col-md-12">
							 <div class="form-group row">
								<label class="col-sm-2 col-form-label">S.I. Alt tag</label>
								<div class="col-sm-10">
									<input type="text" class="form-control">
								</div>
							 </div>
							</div>  
								<div class="col-md-12">
                                 <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Disease Information in Brief</label>
                                    <div class="col-sm-10">
                                        <textarea name="editor5" id="editor5"></textarea>
                                    </div>
                                 </div>
                                </div>							
                                									<div class="col-md-12">
                                <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Drugs to display</label>
                                        <div class="col-sm-10">
                                            <select class="form-control">
												<option>Select Generic Name to ADD TO LIST</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
									<div class="col-md-12">
										<div class="tableRow">
									<table class="table table-borderless">
									  <thead>
										<tr>
										  <th scope="col" width="5%">#</th>
										  <th scope="col" width="20%">Generic Medicine</th>
										  <th scope="col" width="35%">Medication Page URL</th>
										  <th scope="col" width="40">Long Generic Name under Disease</th>
										</tr>
									  </thead>
									  <tbody>
										<tr>
										  <th scope="row">1</th>
										  <td class="d-flex">
										  <textarea class="form-control" rows="3"  placeholder="AMIFOSTINE - M108" readonly></textarea>
										    <a href="#" class="plush">+</a> 
										    <a href="" class="cross">X</a>
										  </td>
										  <td>
										  <textarea class="form-control" rows="3"  placeholder="/medication/buy-Generic-Amifostine-Brand-Ethyol-online" readonly></textarea>
										  </td>
										  <td>
										   <textarea class="form-control" rows="3"  placeholder="buy Generic ATHYOLAMYCIN and/or Brand Athyol Panthol 375 mg / 500 mg tablets / Injection Vial online at lowest price" readonly></textarea>
										  </td>
										</tr>
										<tr>
										  <th scope="row">2</th>
										  <td class="d-flex"><input type="text" class="form-control" /> 
										    <a href="#" class="plush">+</a> 
										    <a href="" class="cross">X</a>
										  </td>
										  <td><input type="text" class="form-control"  /></td>
										  <td><input type="text" class="form-control"  /></td>
										</tr>
									  </tbody>
									</table>
								</div>
									</div>
                               			
							</div>
							<div class="bottom-button text-right">
								<div class="inputBtn"><input type="button" class="btn greenBtn" value="SORT ALPHABETICALLY & SAVE" /></div>
								<div class="inputBtn"><input type="button" class="btn redBtn" value="Delete" /></div>
							</div>
						</form>
					</div>
					
				</div>
						<div class="main-section">							
							<div class="main-border">
								<div class="entry-title">
									<h2><span>Lower body Question Answer</span></h2>
								</div>
								<small>DBT: 3-5-Home-QA</small>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">Search a Qs. Info to Edit</label>
											<div class="col-sm-10">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									</div>
									<div class="row mt-3">
									<div class="col-md-12 col-sm-12">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Question No.</label>
											<div class="col-sm-10">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>								
									</div>	
									<div class="row">
									<div class="col-md-12">
										<div class="form-group row mb-0">
											<label class="col-sm-2 col-form-label">Question</label>
											<div class="col-sm-10">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-2 col-sm-6">Answer</div>
										<div class="col-md-10 col-sm-6 bibtextarea"><textarea name="editor6" id="editor6"></textarea></div>
									</div>
														  
									<div class="bottom-button clearfix">
										<div class="float-right">
											<div class="inputBtn"><input type="button" class="btn redBtn" value="Edit" /></div>
											<div class="inputBtn"><input type="button" class="btn greenBtn" value="Add Question" /></div>
											<div class="inputBtn"><input type="button" class="btn greenBtn" value="Save" /></div>
											<div class="inputBtn"><input type="button" class="btn redBtn" value="Delete" /></div>
										</div>
									</div>
								</form>
										
							</div>
							</form>
                        </div>
						<div class="main-section">
                            <form>
                                
                                <div class="main-border">
                                    <div class="entry-title">
                                        <h2><span>SEO Information for Home</span></h2>
                                    </div>
									<small>DBT: 3-6-Home-SEO</small>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Frontend URL</label>
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
                                        <label class="col-sm-2 col-form-label">Hyperlink Page Tags</label>
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
<div class="bottom-button">
                                    <div class="inputBtn"><input type="button" class="btn redBtn" value="Edit" /></div>
									<div class="inputBtn"><input type="button" class="btn greenBtn" value="Save" /></div>
									<div class="inputBtn"><input type="button" class="btn redBtn" value="Delete" /></div>
                                    <div class="float-right">
                                        <a href="http://regulatoryconsultantsindia.com/https://1000meds.com/home-page.html " class="btn greenBtn cut-button">Go To HOME Page</a>
                                    </div>
                                </div>
                                </div>
                                
                            </form>
                        </div>
					
                    </div>
                </div>
            </div>

@endsection