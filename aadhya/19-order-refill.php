<?php include('include/head.php');?>
<?php include('include/header.php');?>
		<div class="page-define">
				  <div class="container-fluid">
					<div class="row justify-content-between">
						<div class="col">
							<h1>ORDER REFIL</h1>
							<span class="shorttxt">Data will show on DBT: 14-Summary</span>
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
											<h2>ORDER REFIL</h2>
										</div>
										<small class="mb-3 d-block">DBT: 14-Summary</small>
									</div>									
                                </div>
                                <div class="border-table text-left tableFooter font14">
									<table id="datatable" class="table custom-table table-bordered text-center">
										<thead>
								<tr>
									
									<th scope="col" width="50px"><input type="checkbox" class="inputAuto" />Select</th>
									<th scope="col" width="20px">S. No.</th>
									<th scope="col" width="70px">Order No. <br>Date  <br>Refil Days</th>
									<th scope="col" width="120px">Billing Name & Country<br>Login Email<br>Billing Whatsapp no.<br>Patient/Receiver & Country</th>
									<th scope="col" width="210px">Order Details</th>
									<th scope="col" width="60px">Order Value <br>Pay. Recd.<br>On Date<br>Balance</th>
									<th scope="col" width="5%">Refill Due on</th>
									<th scope="col" width="10%">Refil Reminder (RR) Mails</th>
									<th scope="col" width="5%">Action</th>									
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  
								 
								  <td><input type="checkbox" class="inputAuto" /></td>
								   <td>1</td>
								  <td><a href="javascript:void(0);" style="color:#000;font-weight:600;text-decoration:underline;">200108</a><br>05-11-2019<br>100 days</td>
								  <td>Payer Name, Iceland<br>Arun_Iceland@gmail.com<br>+1 254823148<br>Patient / Receiver Name, France</td>
								  <td>120 Pimozide 4mg Tablet<br>56 Pinaverium Bromide 50mg Tablet<br>240 Pindolol 10mg Tablet<br>90 Pioglitazone 15mg Tablet<br>12 Piperacillin + Tazobactam 2000mg + 250mg Injection</td>
								 
								  <td>130- <br>125-<br>11-1-2021 <br>5-</td>								  
								  <td>7-11-19</td>
								  <td>Sent 1-3-2022 <br>Send RR2   <br>Send RR3</td>
								  <td class="action">
									<button class="editTxt">Summary Invoice</button>
									<a href="" class="delTxt">Delete</a>
								  </td>
								</tr>
							</tbody>						
									</table>					
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