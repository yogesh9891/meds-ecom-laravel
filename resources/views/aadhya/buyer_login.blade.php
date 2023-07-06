@extends('layouts.backend')
@section('content')

<div class="page-define">
				  <div class="container-fluid">
					<div class="row justify-content-between">
						<div class="col">
							<h1>BUYER LOGIN</h1>
							<span class="shorttxt">Data will come from CART-CHECKOUT / LOGIN</span>
						</div>
					</div>		
				 </div>
			   </div>
            <div class="main-panel">
                <div class="container-fluid">
                    <div class="panel-container">
                        
						<div class="main-section">
                            <div class="main-border ">
                                <div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="entry-title">
											<h2>BUYER LOGIN DETAILS</h2>
										</div>
										<small class="mb-3 d-block">DBT: 11-Buyer-Login</small>
									</div>									
                                </div>
                                <div class="border-table text-left tableFooter font14">
									<table id="datatable" class="table custom-table table-bordered text-center">
										<thead>
											<tr>
												<th scope="col" width="5%"><input type="checkbox" class="inputAuto" />Select</th>
												<th scope="col" width="4%">S.No</th>
												<th scope="col" width="11%">Buyer ID <br>Date</th>
												<th scope="col" width="15%">Name</th>
												<th scope="col" width="15%">Country</th>
												<th scope="col" width="15%">Mobile</th>
												<th scope="col" width="25%">Email<br>Password</th>
												<th scope="col" width="5%">Action</th>
											</tr>
										  </thead>
										  <tbody>
											<tr>
											  <td><input type="checkbox" class="inputAuto" /></td>
											  <td>1</td>
											  <td>B-00001 <br>07-11-2019</td>
											  <td>Arun Sharma</td>
											  <td>UK</td>
											  <td>+1 254823148</td>
											  <td>Arun_Iceland@gmail.com<br>arun1245</td>
											  <td class="action">
												<a href="" class="editTxt" data-toggle="modal" data-target="#pricematch">Edit</a>
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
<!-- Price Match Guarantee Modal -->
        <div class="modal fade bd-example-modal-lg" id="pricematch" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" style="max-width:1200px;">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Buyer ID</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Name</label>
                                                <div class="col-sm-8">
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
                                                <label class="col-sm-4 col-form-label">Mobile</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Email</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label text-right">Password</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
									<div class="bottom-button text-right">
									<input type="button" class="btn greenBtn" value="Save">
                                </div>
                    </div>
                </div>
            </div>
        </div>

@endsection