@extends('layouts.backend')
@section('content')

<div class="page-define">
				  <div class="container-fluid">
					<div class="row justify-content-between">
						<div class="col">
							<h1>QUERY</h1>
							<span class="shorttxt">Data will come from MEDICATION / CONTACT-US / FAST-REFILL-ORDER-CONFIRMATION</span>
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
											<h2>QUERY</h2>
										</div>
										<small class="mb-3 d-block">DBT: 10-Query-Details</small>
									</div>
		                           <div class="col-md-6 col-sm-12">
									<div class="entry-title">
										<div class="extraDetails">
											<div class="dropexport dropdown show">
												<div class="btn-group">
												<button class="btn redBtn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export/Import</button>
												<div class="dropdown-menu selectDrop">
													<a class="dropdown-item" href="#">Export all to Excel</a>
													<div class="upload-btn-wrapper">
													  <button>Import all</button>
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
										<thead>
								<tr>
									<th scope="col" width="5%"><input type="checkbox" class="inputAuto" />Select</th>
									<th scope="col" width="5%">S.No.</th>
									<th scope="col" width="10%">Date <br> Sent from</th>
									<th scope="col" width="10%">Name<br> Email<br>  Contact No<br>Country</th>									
									<th scope="col" width="12%">Business Name<br>Attachment</th>
									<th scope="col" width="30%">Message</th>
									<th scope="col" width="18%">Refill Order Ref<br>Pay Address<br>Del Address<br>Order Quantity<br>Other Change</th>
									<th scope="col" width="10%">Action</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <td><input type="checkbox" class="inputAuto" /></td>
								  <td>01</td>
								  <td>05-11-2019<br><a href="" class="blueTxt unlderline">108</a>-Business Query</td>
								  <td>Arun Sharma<br>abc@gmail.com<br> India<br>+4654654654</td>								  
								  <td>India Sales <br>Corporation <br><a href="" class="blueTxt unlderline">Open file</a> </td>								  
								  <td>Hi We can help your website to get on first page of Google and increase the number of leads and sales you are getting from your website. Ranking your website organically in google can provide substantial business benefits. We can also do a FREE NO OBLIGATION Analysis Report for your website. Please email us back for full proposal. Best Regards Sania</td>
								  <td><a href="" class="blueTxt unlderline">200108</a><br>RPA-<br>RDA-<br>ROQ-<br>ROC-</td>						  
								  <td class="action">
									<button class="saveTxt">Email Reply:</button>4-3-2022
									<button class="saveTxt">WA Reply:</button>
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
						
<!--Order Edit-->
<div class="modal fade order_edit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
		<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit of Order No. <a href="" class="blueTxt">GM-00125</a>  dated 15-7-19</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  <div class="orderDetails">
			<table class="table table-bordered">
				<tr>
					<td width="30%">Shipment to</td>
					<td width="70%"><input type="text" placeholder="Enter Value"/><input type="text" placeholder="Enter Value"/><input type="text" placeholder="Enter Value"/></td>
				</tr>
				<tr>
					<td width="30%">Payment by</td>
					<td width="70%"><input type="text" placeholder="Enter Value"/></td>
				</tr>
				<tr>
					<td width="30%">Whatsapp no., Email, Password</td>
					<td width="70%"><input type="text" placeholder="Enter Value"/>, <input type="text" placeholder="Enter Value"/>, <input type="text" placeholder="Enter Value"/></td>
				</tr>
				<tr>
					<td width="30%">Order No., Date & IST Time</td>
					<td width="70%"><input type="text" placeholder="Enter Value"/></td>
				</tr>				
				<tr>
					<td width="30%">Days Usage</td>
					<td width="70%"><input type="text" placeholder="Enter Value"/></td>
				</tr>
				<tr>
					<td width="30%">Amount</td>
					<td width="70%"><input type="text" placeholder="Enter Value"/></td>
				</tr>
				<tr>
					<td width="30%">Order Details</td>
					<td width="70%"><input type="text" placeholder="Enter Value"/></td>
				</tr>
				<tr>
					<td width="30%">Refil Reminder</td>
					<td width="70%"><input type="text" placeholder="Enter Value"/></td>
				</tr>
				<tr>
					<td width="30%">Send Reminders</td>
					<td width="70%"><input type="text" placeholder="Enter Value"/></td>
				</tr>
				
				<tr>
					<td colspan="2">
						<div class="bottom-button text-right">
							<button class="btn redBtn" data-dismiss="modal" aria-label="Close">CLOSE DETAILS</button>
							<button class="btn greenBtn">SAVE TO UPDATE STATUS</button>
						</div>
					</td>
				</tr>
			</table>
		  </div>
	  </div>
    </div>
  </div>
</div>
<!--Order Edit End-->
						
                    </div>
                </div>
            </div>


@endsection