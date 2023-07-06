<?php include('include/head.php');?>
<?php include('include/header.php');?>
		<div class="page-define">
		<div class="container-fluid">
			<div class="row justify-content-between">
				<div class="col">
					<h1>PASSWORD</h1>
					<span class="shorttxt">Data will show on the front-end pages</span>
				</div>
			</div>		
		</div>
	</div>
	<div class="main-panel">
		<div class="container-fluid">
			<div class="panel-container">
			<div class="main-section mt-3">
				<div class="main-border">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="entry-title">
							  <h2>PASSWORD</h2>
							</div>
						</div>
						
                  	</div>
					<div class="login-limiter">
		<div class="login-container">
			<div class="login-wrap">				
				<div class="login-header">
					<div class="login-icon"><img src="img/login-icon.png" alt=""></div>
					<div class="login-title">
						<h3>Change Your Password</h3>
						
					</div>
				</div>
				<div class="login-form">
					<form>
						<div class="form-group">
							<label class="w-40">Old Password<span class="astrik">*</span></label>
							<input type="text" class="form-control w-60" placeholder="Old Password">
						</div>
						<div class="form-group">
							<label class="w-40">New Login Name</label>
							<input type="text" class="form-control w-60" placeholder="New Login Name">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1" class="w-40">New Password<span class="astrik">*</span></label>
							<input type="password" class="form-control w-60" placeholder="New Password">
						</div>
                        <div class="form-group">
							<label for="exampleInputEmail1" class="w-40"> Confirm Password<span class="astrik">*</span></label>
							<input type="password" class="form-control w-60" placeholder="Confirm Password">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary common-btn" 
							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
							
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
<?php include('include/footer.php');?>
</body>
</html>