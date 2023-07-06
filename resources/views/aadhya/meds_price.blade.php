@extends('layouts.backend')
@section('content')

<div class="page-define">
                <div class="container-fluid">
                    <div class="row justify-content-between">
                        <div class="col">
                            <h1>Meds Prices</h1>
                            <span class="shorttxt">Data will show on Medication</span>
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
                                        <h2>Select Medicine to Add Products & Prices</h2>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9 col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Search by Generic No. / Generic Name</label>
                                                <div class="col-sm-8">
                                                    <select placeholder="Select" class="form-control">
                                                       <option value="1">911 – Medication</option>
                                                       <option value="2">Select</option>
                                                       <option value="3">Select</option>
                                                       <option value="4">Select</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                            </form>
                        </div>
                        
                        <div class="main-section">                                                          
						  <div class="main-border">
							<div class="entry-title">
								<h2>ADD / EDIT PRODUCTS</h2>
							</div>
							<small class="mb-3 d-block">DBT: 2-1-Meds-Products</small>
							<div class="row">	
								<div class="col-sm-12">
									<div class="form-group row">                                               
										<div class="col-sm-2">
										   <label class="col-form-label">Product No.</label>
										   <input type="text" class="form-control" placeholder="108-" style="width:120px;">
										</div>
										
										<div class="col-sm-3">
										   <label class="col-form-label">Short Strength ID</label>
										   <input type="text" class="form-control">
										</div>
										<div class="col-sm-1">
										   <label class="col-form-label">Display at</label>
										   <input type="text" class="form-control">
										</div>
										<div class="col-sm-6">
										   <label class="col-form-label">Product Title Name in H2 Tag</label>
										   <input type="text" class="form-control">
										</div>
										<div class="col-sm-12">
										   <label class="col-form-label">Medication Use</label>
										   <input type="text" class="form-control" placeholder="">
										</div>
									</div>
								</div>
							 </div> 
							 <div class="bottom-button clearfix">
								<div class="text-right">
									<div class="inputBtn"><input type="button" class="btn greenBtn" value="Save" /></div>
									<div class="inputBtn"><input type="button" class="btn redBtn" value="Delete" /></div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<table class="table font14">
										<thead>
											<tr>
												<th>Display at</th>
												<th>Strength</th>
												<th>H2 Title</th>
												<th>Product No.</th>
												
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>												
												<td>50 mg Capsules</td>
												<td>PALBOCICLIB / IBRANCE / PALBACE CAPSULES 50 MG</td>
												<td>108-1</td>
											</tr>
											<tr>
												<td>2</td>
												<td>100 mg Capsules</td>
												<td>PALBOCICLIB / IBRANCE / PALBACE CAPSULES 100 MG</td>
												<td>108-2</td>
											</tr>
											<tr>
												<td>3</td>												
												<td>100 mg Capsules</td>
												<td>PALBOCICLIB / IBRANCE / PALBACE CAPSULES 100 MG</td>
												<td>108-3</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						  </div>
                        </div>						
						<div class="main-section double-heading">
                            <div class="main-border ">
                                <div class="row">
									<div class="col-md-12">
										<div class="entry-title">
											<h2>ADD / EDIT BRAND / GENERIC DETAILS</h2>
										</div>
										<small class="d-block mb-3">DBT: 2-2-Meds-Prices</small>
									</div>
                                </div>
                                
                                
                                <div class="form-group row">
                                 <div class="col-sm-2"><label>Product No.</label>
								            <select class="form-control bg-gray">
												<option>108-3</option>
											</select>
								 </div>
                                 <div class="col-sm-5"><label>Product Title Name in H2 Tag</label><input type="text" class="form-control bg-gray"></div>
                                 <div class="col-sm-3"><label>Short Strength ID</label><input type="text" class="form-control bg-gray"></div>
                                 <div class="col-sm-2"><label>Displayed at</label><input type="text" class="form-control bg-gray"></div>
                                </div>
								
								<div class="form-group row">
                                    <label class="col-sm-6 col-form-label">
                                      <div class="row">
                                       <div class="col-sm-12">
                                          <div class="row">
                                            <div class="col-sm-3 blueTxt"><strong>GENERIC MEDICINE SKU</strong></div>
                                            <div class="col-sm-3">
											  <select class="form-control">
												<option>108-3G  </option>
											  </select></div>
											<div class="col-sm-3">Available: <br><input type="checkbox"> A <input type="checkbox"> NA </div>
											<div class="col-sm-3">Display: <br><input type="checkbox"> Show <input type="checkbox"> Hide </div>
                                          </div>
                                        </div>  
                                      </div>
                                    </label>
                                    <label class="col-sm-6 col-form-label">
                                      <div class="row">
                                       <div class="col-sm-12">
                                          <div class="row">
                                            <div class="col-sm-3 darkblueTxt"><strong>BRANDED MEDICINE SKU</strong></div>
                                             <div class="col-sm-3">
											  <select class="form-control">
												<option>108-3B</option>
											  </select>
											 </div>
											<div class="col-sm-3">Available: <br><input type="checkbox"> A <input type="checkbox"> NA </div>
											<div class="col-sm-3">Display: <br><input type="checkbox"> Show <input type="checkbox"> Hide </div>
                                          </div>
                                        </div>  
                                      </div>
                                    </label>
                                </div>
                                
                                    <div class="form-group row">
									  <div class="col-md-6">
									     <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">N/A Message</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" class="form-control">
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Name in H3 Tag</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" class="form-control">
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Mfd. by <input type="checkbox" checked="checked" /> WHO</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" class="form-control" placeholder="WHOcGMP Certified">
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Mfr’s URL <input type="checkbox" checked="checked" /> WHO</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" class="form-control" placeholder="https://911globalmeds.com/whocgmp-manufacturing-companies">
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Generic Drug for</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" class="form-control">
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Shipped from</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" class="form-control">
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Select ICON <br>meds/Meds-Icon<br>(55x55)</label>                                           
										   </div> 
										   <div class="col-sm-9">
										     <input type="file" class="form-control-file form-control" style="font-size: 13px;">
											 <a href="javascript:void(0);" class="deletcress">X</a>
											 <font class="font14 darkblueTxt" ><a class="bluehover" href="javascript:void(0);">/meds/individual-medicine-page-brand-drug-icon.jpg</a></font>
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Icon Alt Tag</label>                                            
										   </div> 
										   <div class="col-sm-9">
										     <input type="text" class="form-control-file form-control" style="font-size: 13px;">
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Select FULL <br>meds/Meds-Full<br>(any size)</label>
											</div> 
										   <div class="col-sm-9">
										     <input type="file" class="form-control-file form-control" style="font-size: 13px;">
											 <a href="javascript:void(0);" class="deletcress">X</a>
											 <font class="font14 darkblueTxt"><a class="bluehover" href="javascript:void(0);">/meds/individual-medicine-page-brand-drug-full.jpg</a></font>
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Image Alt Tag</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" class="form-control">
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-4">
										    <label class="col-form-label"></label>                                            
										   </div>
										   <div class="col-sm-8 blueTxt">
										     <strong>Generic Medicine Price Details</strong>
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Pack 1 Quantity</label>
											<input type="text" class="form-control">
										   </div>
										   <div class="col-sm-6">
										     <label class="col-form-label">Unit(Tablets / Capsules etc)</label>
											 <input type="text" class="form-control" placeholder="">
										   </div>
										   
										   <div class="col-sm-3">
										     <label class="col-form-label">INR Price / Pack</label>
											 <input type="text" class="form-control">
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Packs, Price (x)<br>Default 1-2-4</label>
										   </div>
										   <div class="col-sm-3">
										    <div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
												</div>
										   </div>
										   <div class="col-sm-3">
										    <label class="col-form-label">Discounts %<br>Default 10-13-15</label>
										   </div>
										   <div class="col-sm-3">
										    <div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
												</div>
										   </div>

										  
										 </div>
									  </div>
									  
									  
									  
									  <div class="col-md-6">
									  <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">N/A Message</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" class="form-control">
										   </div>
										 </div>
									     <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Name in H3 Tag</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" class="form-control">
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Mfd. by <input type="checkbox" /> WHO</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" class="form-control">
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Mfr’s URL <input type="checkbox" /> WHO</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" class="form-control">
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Branded Drug for</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" class="form-control">
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Shipped from</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" class="form-control">
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Select ICON <br>meds/Meds-Icon<br>(55x55)</label>
										   </div> 
										   <div class="col-sm-9">
										     <input type="file" class="form-control-file form-control" style="font-size: 13px;">
											 <a href="javascript:void(0);" class="deletcress">X</a>
											 <font class="font14 darkblueTxt"><a class="bluehover" href="javascript:void(0);">/meds/individual-medicine-page-brand-drug-icon.jpg</a></font>
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Icon Alt Tag</label>                                            
										   </div> 
										   <div class="col-sm-9">
										     <input type="text" class="form-control-file form-control" style="font-size: 13px;">
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Select FULL <br>meds/Meds-Full<br>(any size)</label>
											</div> 
										   <div class="col-sm-9">
										     <input type="file" class="form-control-file form-control" style="font-size: 13px;">
											 <a href="javascript:void(0);" class="deletcress">X</a>
											 <font class="font14 darkblueTxt"><a class="bluehover" href="javascript:void(0);">/meds/individual-medicine-page-brand-drug-full.jpg</a></font>
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Image Alt Tag</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" class="form-control">
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-4">
										    <label class="col-form-label"></label>                                            
										   </div>
										   <div class="col-sm-8 darkblueTxt">
										     <strong>Branded Medicine Price Details</strong>
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Pack 1 Quantity</label>
											<input type="text" class="form-control">                                            
										   </div>
										   <div class="col-sm-6">
										     <label class="col-form-label">Unit(Tablets / Capsules etc)</label>
											 <input type="text" class="form-control" placeholder="">
										   </div>
										   <div class="col-sm-3">
										     <label class="col-form-label">INR Price / Pack</label>
											 <input type="text" class="form-control">
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Packs, Price (x)<br>Default 1-2-4</label>
										   </div>
										   <div class="col-sm-3">
										    <div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
												</div>
										   </div>
										   <div class="col-sm-3">
										    <label class="col-form-label">Discounts %<br>Default 10-12-13</label>
										   </div>
										   <div class="col-sm-3">
										    <div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
												</div>
										   </div>	

                                           									   
										 </div>
									  </div>
									  <div class="col-md-12">
									  <div class="bottom-button clearfix">
										<div class="text-center">
											<div class="inputBtn"><input type="button" class="btn redBtn" value="Edit" /></div>
											<div class="inputBtn"><input type="button" class="btn greenBtn" value="SAVE" /></div>
											<div class="inputBtn"><input type="button" class="btn greenBtn" value="CHECK Frontend Prices" /></div>
											<div class="inputBtn"><input type="button" class="btn redBtn" value="Delete" /></div>
										</div>
									</div>
									</div>
                                        
                                    </div>
                                
								</div>
							
                        </div>
						
                        <div class="main-section double-heading">
                            <div class="main-border ">
                                <div class="row">
									<div class="col-md-12">
										<div class="entry-title right-heading">
											<h2 >Forex Rates as on 26-01-2022</h2>
										</div>
										<small class="d-block mb-3">DBT: 2-3-Forex-Rates</small>
									</div>
                                </div>
                                
                                
                                <div class="form-group row edit-forex-rates">
									<div class="col-md-12">
										<div class="forexrate align-items-center">
											<div class="innerrate"><strong>Forex Rates:<br>per USD 1</strong></div>
											<div class="innerrate"><label>FX 1</label>
												<div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" class="form-control" placeholder="INR"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder=" 70.000000000"></div>
												</div>
												</div>
											<div class="innerrate"><label>FX 2</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
												</div></div>
											<div class="innerrate"><label>FX 3</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
												</div></div>
											<div class="innerrate"><label>FX 4</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
												</div></div>
											<div class="innerrate"><label>FX 5</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
												</div></div>
											<div class="innerrate"><label>FX 6</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
												</div></div>
											<div class="innerrate"><label>FX 7</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
												</div></div>
										</div>
										<div class="forexrate align-items-center">
											<div class="innerrate"><label>FX 8</label>
												<div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" class="form-control" placeholder=""></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder=""></div>
												</div>
												</div>
											<div class="innerrate"><label>FX 9</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
												</div></div>
											<div class="innerrate"><label>FX 10</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
												</div></div>
											<div class="innerrate"><label>FX 11</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
												</div></div>
											<div class="innerrate"><label>FX 12</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
												</div></div>
											<div class="innerrate"><label>FX 13</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
												</div></div>
											<div class="innerrate"><label>FX 14</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
													<div class="inlinecol"><input type="text" class="form-control" placeholder="-"></div>
												</div></div>
										</div>
									</div>
								</div>
                                <div class="bottom-button clearfix">
								<div class="text-right">
									<div class="inputBtn"><input type="button" class="btn redBtn" value="Edit" /></div>
									<div class="inputBtn"><input type="button" class="btn greenBtn" value="Save" /></div>
								</div>
							</div>
								</div>
							
                        </div>
						

                    </div>
                </div>

@endsection