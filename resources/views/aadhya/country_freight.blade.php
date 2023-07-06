@extends('layouts.backend')
@section('content')

<div class="page-define">
		<div class="container-fluid">
			<div class="row justify-content-between">
				<div class="col">
				  <h1>Country Freight</h1>
				  <span class="shorttxt">Data will show on CART-CHECKOUT / MEDICATION</span>
				</div>
			</div>		
		</div>
	</div>
            <div class="main-panel">
                <div class="container-fluid">
                    <div class="panel-container">
                        <div class="main-section mt-3">
                            <form>
                                <div class="main-border">
                                    <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="entry-title">
                                            <h2><span>ENTER NEW COUNTRY - FREIGHT</span></h2>
                                        </div>
                                    </div>
									<div class="col-md-6 col-sm-12">
                                        <div class="entry-title right-heading">
												<h2 class="text-danger" style="display:inline-block;">OR EDIT AN EXISTING COUNTRY 
												<input type="checkbox" />
												</h2>
                                        </div>
                                    </div>
                                </div>
								<small class="d-block mb-3">DBT: 4-1-Country-Freight</small>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Country Name & ISD</label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control">
                                                </div>
												<div class="col-sm-2">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-8 col-form-label">Billing Address:</label>
                                                <div class="col-sm-4">
                                                    <input type="checkbox" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-10 col-form-label ">Delivery Address:</label>
                                                <div class="col-sm-1">
                                                    <input type="checkbox" />
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-2 col-sm-6">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-8 col-form-label">Priority Display:</label>
                                                <div class="col-sm-4">
                                                    <input type="checkbox" />
                                                </div>
                                            </div>
                                        </div>
										
										<div class="col-md-2 col-sm-12">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-10 col-form-label">Customs Clearance:</label>
                                                <div class="col-sm-2">
                                                    <input type="checkbox" />
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-2 col-sm-12">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-6 col-form-label">Patient Use:</label>
                                                <div class="col-sm-6">
                                                    <input type="checkbox" />
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-2 col-sm-12">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-6 col-form-label">Study Use:</label>
                                                <div class="col-sm-6">
                                                    <input type="checkbox" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-7 col-form-label">Dif. Freight Charges: INR </label>
                                                <div class="col-sm-5">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
										
                                        <div class="col-md-3 col-sm-6">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-6 col-form-label">Days for Delivery :</label>
                                                <div class="col-sm-6 text-left">
                                                    <input type="text" class="form-control" style="width:35px; float:left"> <span style="width:5px; float:left; text-align:center">-</span> <input type="text" class="form-control" style="width:35px;">
                                                </div>
                                            </div>
                                        </div>
                                        
										<div class="col-md-12 col-sm-6">
										<div class="bottom-button mt-0 clearfix">
										<div class="float-right">
											<div class="inputBtn"><input type="button" class="btn redBtn" value="Edit" /></div>
											<div class="inputBtn"><input type="button" class="btn greenBtn" value="Save" /></div>
											<div class="inputBtn"><input type="button" class="btn redBtn" value="Delete" /></div>
										</div>
									</div>
										</div>
                                    </div>
                            
                            </div>
							</form>
                        </div>
						
						<div class="main-section">
                            <div class="main-border ">
								<div class="entry-title">
									<h2>SINGLE FREIGHT DISPLAY</h2>
								</div>
								<div class="row">									
									<div class="col-md-4 col-sm-6">
										<div class="form-group row no-gutters">
											<label class="col-sm-6 col-form-label">Single Freight Charges: INR </label>
											<div class="col-sm-6">
												<input type="text" class="form-control"/>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="form-group row float-right">
											<label class="col col-form-label text-right">Show SINGLE FREIGHT:</label>
											<div class="col-md-2">
												<input type="checkbox" />
											</div>
										</div>
									</div>
									<div class="col-md-5 col-sm-6">
										<div class="bottom-button mt-0  clearfix">
										<div class="float-right">
											<div class="inputBtn"><input type="button" class="btn redBtn" value="Edit" /></div>
											<div class="inputBtn"><input type="button" class="btn greenBtn" value="Save" /></div>
											<div class="inputBtn"><input type="button" class="btn redBtn" value="Delete" /></div>
										</div>
									</div>
									</div>
								</div>
									
                            </div>
                        </div>

                        <div class="main-section">
                            <div class="main-border ">
										<div class="entry-title">
											<h2>EXISTING COUNTRY - FREIGHT</h2>
										</div>
										<div class="bottom-button clearfix">
										<div class="float-right">
											<div class="inputBtn"><input type="button" class="btn redBtn" value="Delete Selected" /></div>
										</div>
									</div>
                                <div class="border-table text-left tableFooter font14">								  
								  
								     
									<table class="table datatable custom-table table-bordered">
										<thead>
											<tr>
											  <th scope="col" width="5%"><input class="dcb" type="checkbox" /> S.No.</th>
											  <th scope="col" width="18%">Country</th>
											  <th scope="col" width="5%">ISD Code</th>
											  <th scope="col" width="4%">Billing</th>
											  <th scope="col" width="4%">Delivery</th>
											  <th scope="col" width="4%">Priority</th>
											  <th scope="col" width="4%">Customs</th>
											  <th scope="col" width="4%">Patient Use</th>
											  <th scope="col" width="4%">Study Use</th>
											  <th scope="col" width="5%" style="font-weight:700;padding:5px;">Fr.<br>INR</th>
											  <th scope="col" width="5%" style="font-weight:700;padding:5px;">Fr.<br>USD</th>
											  <th scope="col" width="4%">Days</th>
											  <th scope="col" width="4%">Action</th>
											</tr>
										  </thead>
										  <tbody>
											<tr>
											  <td><input class="dcb" type="checkbox" /> 01</td>
											  <td>India</td>
											  <td>9551</td>
											  <td>Yes</td>
											  <td>Yes</td>
											  <td>Yes</td>
											  <td>Yes</td>
											  <td>Yes</td>
											  <td>Yes</td>
                                              <td>3550</td>
											  <td bgcolor="#B9B9B9">51</td>
											  <td>4 - 6</td>
											  <td class=""><a href="" class="darkblueTxt">Edit</a> <a href="" class="delTxt">Del.</a></td>
											</tr>
											<tr>
											  <td><input class="dcb" type="checkbox" /> 01</td>
											  <td>India</td>
											  <td>91</td>
											  <td>Yes</td>
											  <td>Yes</td>
											  <td>Yes</td>
											  <td>Yes</td>
											  <td>Yes</td>
											  <td>Yes</td>
                                              <td>3550</td>
											  <td bgcolor="#B9B9B9">51</td>
											  <td>4 - 6</td>
											  <td class=""><a href="" class="darkblueTxt">Edit</a> <a href="" class="delTxt">Del.</a></td>
											</tr>
											
										</tbody>
									</table>
								</div>                                
                            </div>
                        </div>
					
                    </div>
                </div>
            </div>


@endsection