<?php include('include/head.php');?>
<?php include('include/header.php');?>
		<div class="page-define">
		<div class="container-fluid">
			<div class="row justify-content-between">
				<div class="col">
					<h1>PROMO DISCOUNT</h1>
					<span class="shorttxt">Data will show on CART-CHECKOUT</span>					
				</div>
			</div>		
		</div>
	</div>
	<div class="main-panel">
		<div class="container-fluid">
			<div class="panel-container">
				<div class="main-section">
				<div class="main-border">
					<div class="row">
						<div class="col-md-12">
							<div class="entry-title">
								<h2>CREATE / EDIT COUPON CODE</h2>
							</div>
						</div>
					</div>
					<div class="border-table font14">
                    <style>
					 .inputAuto{padding:0px}
					</style>
						<table class="table custom-table table-bordered">
							<thead>
								<tr>
								  <th scope="col" width="5%">S.No</th>
								  <th scope="col" width="5%">Coupon Code</th>
								  <th scope="col" width="5%">Minimum <br>Order Value</th>
								  <th scope="col" width="5%">Discount Amount</th>
								  <th scope="col" width="8%">Issued on date</th>
								  <th scope="col" width="8%">Valid till date</th>
								  <th scope="col" width="5%">No. of Use</th>
								  <th scope="col" width="20%">Issued to General / Email</th>
								  <th scope="col" width="14%">Issued to Name</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <td>#1</td>
								  <td><input type="text" class="form-control" style="width:110px;"/></td>
								  <td><input type="text" class="form-control" placeholder="USD" style="width:70px;"/></td>
								  <td><input type="text" class="form-control" placeholder="USD" style="width:70px" /></td>
								  <td><input type="date" class="form-control" style="width:150px"/></td>
								  <td><input type="date" class="form-control" style="width:150px"/></td>
								  <td><input type="text" class="form-control" /></td>
								  <td><input type="text" class="form-control" /></td>
								  <td><input type="text" class="form-control" /></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="bottom-button clearfix">
						<div class="float-right">
							<button class="btn greenBtn">Save</button>
						</div>
					</div>	
				</div>
				</div>
				
				<div class="main-section mt-3">
				<div class="main-border">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="entry-title">
								<h2>COUPON CODE DETAILS</h2>
							</div>
							<small class="mb-3 d-block">DBT: 12-Promo-Discount</small>
						</div>
						<div class="col-md-6 col-sm-12">
							<div class="entry-title">
								<div class="extraDetails">
									<div class="dropexport dropdown show">
										<div class="btn-group">
										<button class="btn redBtn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Export/Import</button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="#">Save all to Excel</a>
										</div>
										</div>
									</div>
								</div>
							</div>
					</div>
					</div>
					<div class="border-table font14">
						<table class="table custom-table table-bordered datatable">
							<thead>
								<tr>
									<th scope="col" width=""><input type="checkbox" class="inputAuto" />Select</th>
									<th scope="col" width="">S.No</th>
									<th scope="col" width="">Coupon Code</th>
									<th scope="col" width="">Minimum Order Value</th>
									<th scope="col" width="">Discount Amount</th>
									<th scope="col" width="">Issued on</th>
									<th scope="col" width="">Valid till date</th>									
									<th scope="col" width="">Issued to Email<br>Issued to Name</th>
                                    <th scope="col" width="">No. of Use</th>									
									<th scope="col" width="">Use Status</th>
									<th scope="col" width="">Promo Mail 1</th>
									<th scope="col" width="">Promo Mail 2</th>
									<th scope="col" width="">Action</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <td><input type="checkbox" class="inputAuto" /></td>
								  <td>1</td>
								  <td>C-102</td>
								  <td>USD 500</td>
								  <td>USD 50</td>
								  <td>8-9-20</td>
								  <td>20-9-20</td>
								  <td>peterholway@gmail.com<br>Dr Peter Holway, USA</td>
								  <td>10</td>
								  <td>Used 5</td>
								  <td>Mail Sent <br>23-11-19</td>
								  <td>Promo 2</td>
								  <td class="action">
									<button class="editTxt">Edit</button>
									<a href="" class="saveTxt">Save</a>
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
<?php include('include/footer.php');?>
</body>

</html>