@extends('layouts.backend')
@section('content')

<div class="page-define">
				  <div class="container-fluid">
					<div class="row justify-content-between">
						<div class="col">
							<h1>REFERRALS</h1>
							<span class="shorttxt">Data will come from DBT: 12-Promo-Discount and 14-Summary</span>
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
											<h2>PROMO CODE REFERRALS</h2>
										</div>
										<small class="mb-3 d-block">DBT: 14-Summary</small>
									</div>									
                                </div>
                                <div class="border-table text-left tableFooter font14">
									<table id="datatable" class="table custom-table table-bordered text-center">
										<thead>
								<tr>
									
									<th scope="col" width="50px"><input type="checkbox"  id="master" class="inputAuto" />Select</th>
									<th scope="col" width="20px">S. No.</th>
									<th scope="col" width="70px">Coupon Code Used</th>
									<th scope="col" width="70px">Issued to Email<br>Issued to Name</th>
									<th scope="col" width="70px">Order No.<br>Date</th>
									<th scope="col" width="260px">Billing Name & Country<br>User Email <br>Patient/Receiver & Country</th>
									
									<th scope="col" width="30px">Order <br>Amount</th>	
									<th scope="col" width="30px">Discount <br>Given</th>	
									<th scope="col" width="30px">Payment <br>Status</th>
									<th scope="col" width="30px">Action</th>									
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  
								 
								  <td><input type="checkbox" class="inputAuto" /></td>
								   <td>1</td>
								  <td>C-102</td>
								  <td>arunkumar@gmail.com  Dr Arun, Vietnam</td>
								  <td><a href="javascript:void(0);" style="color:#000;font-weight:600;text-decoration:underline;">200108</a><br>05-11-2019</td>
								  <td>Billing Name, Iceland<br>Arun_Iceland@gmail.com<br>Patient / Receiver Name, France</td>
								 								  
								  <td>1100</td>
								  <td>50</td>
								  <td>Paid<br>Unpaid</td>
								  <td class="action">
								  <button class="saveTxt" style="color:green !important">EDIT</button>
   								       
								  <a href="" class="delTxt">DELETE</a></td>
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
						
						<!--Order Status-->
<div class="modal fade order_status" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
		<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order No. <a href="" class="blueTxt">200108</a> dt <a href="" class="blueTxt">27-01-2022</a> for USD <a href="" class="blueTxt">500</a> / <a href="" class="blueTxt">USD 500</a> : <a href="" class="blueTxt">USD-AWHK-US</a></h5>
		<div class="orderstatusField">
			<div class="colF"><label>Select Payment requirement by</label></div>
			<div class="colF">
				<select class="form-control Cfield" required="">
					<option>CREDIT CARD</option>
					<option>BANK TRANSFER by:</option>
					<option>AUD-AWHK-AU</option>
					<option>CAD-AWHK-CA</option>
					<option>EUR-AWHK-EU</option>
					<option>GBP-AWHK-GB</option>
					<option>SGD-AWHK-SG</option>
					<option>USD-AWHK-US</option>
					<option>USD-AWHK-HK</option>
					</option>
				</select>
			</div>
			<div class="colF"> <a href="" class="btn greenBtn">Apply to send mail</a></div>
		</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  <div class="orderDetails">
			<table class="table table-bordered">
    <tr>
        <td width="30%"><div style="padding:8px 5px;"><strong>Payment by / Shipment to</strong></div></td>
        <td width="70%">Payer Name & Country / Login Email /  Patient Name c/o Receiver Name & Country<div class="mt-2" style="border:solid 1px #ddd;padding:8px 5px;height:60px;">Payer Name & Country / Login Email /  Patient Name c/o Receiver Name & Country</div></td>
    </tr>
    <tr>
      <td><div style="padding:8px 5px;"><strong>CC - Pay Reminder Mail CP1 CP2</strong></div></td>
      <td>
         <table width="100%" border="0" cellpadding="0" cellspacing="0">          
            <tr>
              <td style="border:0px;">Send Mail CP1 <span class="blueTxt">Mailed 28-1-22</span></td>
              <td style="border:0px;">Send Mail CP2</td>
            </tr>
        </table>
     </td>
    </tr>
	<tr>
      <td><div style="padding:8px 5px;"><strong>CC- Payment Received on Date</strong></div></td>
      <td>
         <table width="100%" border="0" cellpadding="0" cellspacing="0">          
            <tr>
              <td width="20%"><div class="text-center" style="border:solid 1px #ddd;padding:8px 5px;">470</div></td>
              <td width="20%"><div class="text-center" style="border:solid 1px #ddd;padding:8px 5px;">Date</div></td>
			  <td width="60%"style="border:0px;"><div style="padding:8px 5px;">Send Payment Thanks Mail - CPT</div></td>
            </tr>
         </table>
      </td>
    </tr>
	<tr>
      <td><div style="padding:8px 5px;"><strong>BT - Pay Reminder Mail BP1 BP2</strong></div></td>
      <td>
         <table width="100%" border="0" cellpadding="0" cellspacing="0">          
            <tr>
              <td style="border:0px;">Send Mail BP1</td>
              <td style="border:0px;">Send Mail BP2</td>
            </tr>
        </table>
     </td>
    </tr>
    <tr>
      <td><div style="padding:8px 5px;"><strong>BT- Payment Received on Date</strong></div></td>
      <td>
         <table width="100%" border="0" cellpadding="0" cellspacing="0">          
            <tr>
              <td width="20%"><div class="text-center" style="border:solid 1px #ddd;padding:8px 5px;">470</div></td>
              <td width="20%"><div class="text-center" style="border:solid 1px #ddd;padding:8px 5px;">Date</div></td>
			  <td width="60%"style="border:0px;"><div style="padding:8px 5px;">Send Payment Thanks Mail - BPT</div></td>
            </tr>
         </table>
      </td>
    </tr>
    <tr>
      <td><div style="padding:8px 5px;"><strong>Parcel Shipment Details</strong></div></td>
      <td>
         <table width="100%" border="0" cellpadding="0" cellspacing="0">          
            <tr>
              <td width="20%"><div class="text-center" style="border:solid 1px #ddd;padding:8px 5px;">Date</div></td>
              <td width="20%"><div class="text-center" style="border:solid 1px #ddd;padding:8px 5px;">Carrier</div></td>
              <td width="25%"><div class="text-center" style="border:solid 1px #ddd;padding:8px 5px;">Tracking No.</div></td>
              <td width="35%" style="border:0px;"><div style="padding:8px 5px;">Send Shipment Mail S</div></td>
            </tr>
         </table>
      </td>
    </tr>
    <tr>
      <td><div style="padding:8px 5px;"><strong>Tracking URL</strong></td>
      <td>
         <table width="100%" border="0" cellpadding="0" cellspacing="0">          
            <tr>
              <td><div style="border:solid 1px #ddd;padding:8px 5px;height:60px;">https://www.</div></td>              
            </tr>
         </table>
      </td>
    </tr>
    <tr>
      <td><div style="padding:8px 5px;"><strong>For. Arrival & Customs Details</strong></div></td>
      <td>
         <table width="100%" border="0" cellpadding="0" cellspacing="0">          
            <tr>
              <td width="20%"><div class="text-center" style="border:solid 1px #ddd;padding:8px 5px;">Date</div></td>
              <td width="30%" style="border:0px;"><div style="padding:8px 5px;"><a href="" style="text-decoration:underline;color: #000;font-weight: 600;">Send For. Arr. Mail F</a></div></td>
              <td width="20%"><div class="text-center" style="border:solid 1px #ddd;padding:8px 5px;">Date</td>
              <td width="30%" style="border:0px;"><div style="padding:8px 5px;"><a href="" style="text-decoration:underline;color: #000;font-weight: 600;">Send Custom Mail C</a></div></td>
            </tr>
         </table>
      </td>
    </tr>
	<tr>
      <td><div style="padding:8px 5px;"><strong>Delivery & Reviews Details </strong></div></td>
      <td>
         <table width="100%" border="0" cellpadding="0" cellspacing="0">          
            <tr>
              <td width="20%"><div class="text-center" style="border:solid 1px #ddd;padding:8px 5px;">Date</div></td>
              <td width="30%" style="border:0px;"><div style="padding:8px 5px;"><a href="" style="text-decoration:underline;color: #000;font-weight: 600;">Send Delivery Mail D</a></div></td>
              <td width="20%"><div style="padding:8px 0px;"><a href="" style="text-decoration:underline;color: #000;font-weight: 600;">Send Reviews R1</a></div></td>
              <td width="30%" style="border:0px;"><div style="padding:8px 5px;"><a href="" style="text-decoration:underline;color: #000;font-weight: 600;">Send Reviews R2</a></div></td>
            </tr>
         </table>
      </td>
    </tr> 
       
</table>
        <div class="bottom-button text-right">
            <button class="btn redBtn" data-dismiss="modal" aria-label="Close">CLOSE DETAILS</button>
            <button class="btn greenBtn">SAVE TO UPDATE STATUS</button>
        </div>
		  </div>
	  </div>
    </div>
  </div>
</div>

<!--Order Status End-->
						
                    </div>
                </div>
            </div>


@endsection


@section('afterScript')
<script>


 $('#master').on('click', function(e) {

         if($(this).is(':checked',true))  

         {

            $(".sub_chk").prop('checked', true);  

         } else {  

            $(".sub_chk").prop('checked',false);  

         }  

        });
  
            $('.delete_all').on('click', function(e) {


            var allVals = [];  

            $(".sub_chk:checked").each(function() {  

                allVals.push($(this).attr('data-id'));

            });  


            if(allVals.length <=0)  

            {  

                alert("Please select row.");  

            }  else {  


                var check = confirm("Are you sure you want to delete this row?");  

                if(check == true){  


                    var join_selected_values = allVals.join(","); 


                    $.ajax({

                        url: "/",

                        type: 'DELETE',

                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

                        data: 'ids='+join_selected_values,

                        success: function (data) {

                            if (data['success']) {

                                $(".sub_chk:checked").each(function() {  

                                    $(this).parents("tr").remove();

                                });

                                alert(data['success']);

                            } else if (data['error']) {

                                alert(data['error']);

                            } else {

                                alert('Whoops Something went wrong!!');

                            }

                        },

                        error: function (data) {

                            alert(data.responseText);

                        }

                    });


                  $.each(allVals, function( index, value ) {

                      $('table tr').filter("[data-row-id='" + value + "']").remove();

                  });

                }  

            }  

        });
  <script>

@ensection