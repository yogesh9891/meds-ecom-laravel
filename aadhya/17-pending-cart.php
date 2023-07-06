<?php include('include/head.php');?>
<?php include('include/header.php');?>
				<div class="page-define">
				  <div class="container-fluid">
					<div class="row justify-content-between">
						<div class="col">
							<h1>PENDING CART</h1>
							<span class="shorttxt">Data will come from DBT: 14-Summary</span>
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
											<h2>PENDING CART</h2>
										</div>
										<small class="mb-3 d-block">DBT: 14-Summary</small>
									</div>									
                                </div>
                                <div class="border-table text-left tableFooter font14">
									<table id="datatable" class="table custom-table table-bordered text-center">
										<thead>
											<tr>
												<th scope="col" width="4%"><input type="checkbox" class="inputAuto" />Select</th>
												<th scope="col" width="3%">S.No</th>
												<th scope="col" width="8%">Date<br>IST</th>
												<th scope="col" width="15%">LogIn Email,<br> Password,<br>Name & Country<br> Whatsapp no.</th>
												<th scope="col" width="15%">B Name <br>B Country<br> S Name <br> S Country</th>
												<th scope="col" width="25%">Order Details</th>
												<th scope="col" width="10%">Order Reminder (OR) Mails</th>
												<th scope="col" width="5%">Completion<br>Date<br>Amount</th>
												<th scope="col" width="5%">Action</th>
											</tr>
										  </thead>
										  <tbody>
											<tr>
											  <td><input type="checkbox" class="inputAuto" /></td>
											  <td>1</td>
											  <td>7-11-19 <br> 14:15</td>
											  <td>Arun_Iceland@gmail.com<br>arun1245<br>Arun Sharma, UK<br>+1 254823148</td>
											  <td>John Smith,<br> USA <br> 
												Chon Mou,<br> China
											  </td>
											  
											  <td>120 Pimozide 4mg Tablet<br/>
												  56 Pinaverium Bromide 50mg Tablet<br/>
												  240 Pindolol 10mg Tablet<br/>
												  90 Pioglitazone 15mg Tablet<br/>
												  12 Piperacillin + Tazobactam 2000mg + 250mg Injection
												</td>
											  <td>Sent 1-3-2022  <br>Send OR1  <br> Send OR2   </td>
											  <td>7-11-19<br>US$ 125</td>
											  <td class="action">
												<button class="editTxt">Checkout</button>
												<button class="editTxt">Invoice</button>
												<button class="editTxt">Summary</button>
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

<?php include('include/footer.php');?>
</body>
</html>