@extends('layouts.backend')
@section('before_body')
<style type="text/css" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css"></style>
@endsection
@section('content')

<div class="page-define">
				  <div class="container-fluid">
					<div class="row justify-content-between">
						<div class="col">
							<h1>WALLET</h1>
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
											<h2>WALLET APPROVALS</h2>
										</div>
										<small class="mb-3 d-block">DBT: 14-Summary</small>
									</div>				

                  <div class="col-md-6 col-sm-12">
                                        <div class="entry-title">
                                            <div class="extraDetails">
                        <div class="dropexport dropdown show">
                          <div class="float-right">
                      <div class="inputBtn"><button type="button"  class="btn redBtn delete_all1">Delete Selected</button></div>
                    </div>
                        </div>
                      </div>
                                        </div>
                                    </div>					
                                </div>
                                <div class="border-table text-left tableFooter font14">
                                  
									<table id="datatable1" class="table custom-table table-bordered text-center">
										<thead>
								<tr>
									                                      
									<th scope="col" width="50px"><input type="checkbox"  id="master" class="inputAuto" />Select</th>
									<th scope="col" width="20px">S. No.</th>
									<th scope="col" width="90px"> Wallet No. </th>
									
									<th scope="col" width="90px">Email</th>
									<th scope="col" width="30px">Order No.</th>
									
									<th scope="col" width="30px">Date</th>	
									<th scope="col" width="160px">Buyer & Country</th>
                  <th scope="col" width="40px">Order Value<br> Paid </th>
                  <th scope="col" width="30px"> Wallet Discount</th>
                  <th scope="col" width="30px">Action</th>
													
								</tr>
							  </thead>
							  <tbody>
                  @foreach($wallet_transcations as $key => $wallet_transcation)
                  @if($wallet_transcation->summary)
                    <tr id="tr_{{$wallet_transcation->order_id}}">
                        <td><input type="checkbox" class="sub_chk dcb" data-id="{{$wallet_transcation->order_id}}"/></td>
                        <td>{{ $key+1 }}</td>
                   <td><a href="{{url('refer-a-friend/'.$wallet_transcation->user->wallet_id.'/?id='.$wallet_transcation->user->email.'&pwd='.$wallet_transcation->user->password )}}" target="_blank">{{ $wallet_transcation->wallet_id}}</td></td>
                   <td>{{$wallet_transcation->user->email??''}}</td>
                   <td><a href="{{route('aadhya.summary',$wallet_transcation->summary->c_14_8_excel_order_url??'/c')}}" target="_blank"> {{$wallet_transcation->invoice_no}}</a></td>
                   <td>{{$wallet_transcation->summary->created_at->format('d-m-y')}}</td>
                   <td>{{$wallet_transcation->summary->c_14_10_payer_full_name}}, {{$wallet_transcation->summary->c_14_17_payer_country}}</td>
                   <td>{{round($wallet_transcation->summary->c_14_84_total_amount)}} <br> {{ $wallet_transcation->summary->c_14_99_usd_received }}</td>
                   <td>{{ $wallet_transcation->wallet_discount }}</td>
                   <td class="action">
                    @if(!$wallet_transcation->status)
                     <a href="{{ route('aadhya.wallet_status',['id'=>$wallet_transcation->id,'type'=>'accept']) }}" class="saveTxt">Accept </a>
                     <a href="{{ route('aadhya.wallet_status',['id'=>$wallet_transcation->id,'type'=>'reject']) }}" class="delTxt">Decline</a>
                     @else
                     {{ ucfirst($wallet_transcation->status) }}
                     @endif
                   </td>
                   </tr>
                   @endif
                  @endforeach
                 
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

<script type="text/javascript">
      let table = $('#datatable1').DataTable();

       var currentDate,idPAid = false;
var minDate, maxDate;


$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var currentDate = new Date();

       let Status =  data[8];

          var min = $('#min').val()

        var max =$('#max').val()
        var date = new Date( data[9]);
       // console.log(min,max,date)

        if (idPAid || Status !='Unpaid') {    
console.log(idPAid)
console.log(date)
          return true;
              //             if (
              //    ( min === null && max === null ) ||
              //   ( min === null && date <= max ) ||
              //   ( min <= date   && max === null ) ||
              //   ( min <= date   && date <= max )
              // ) {
              //   return true;
            
              //  }          

             } 
        return false;
    }
);
    $('#currentDate').click(function () {
      if($('#min').val() && $('#min').val()){
      idPAid =false;
      $(this).toggleClass('text-primary');
      $('#selectAll').removeClass('text-primary');

      //     if(idPAid){
      // idPAid = false;
      // $(this).toggleClass('text-primary');
      // $('#selectAll').removeClass('text-primary');

      // } else {
      // idPAid = true;

      // }
        table.draw();

      } else {
        alert('please select min and max')
      }

    });

      $('#selectAll').click(function () {
      idPAid =true;
      $('#currentDate').removeClass('text-primary');
      $(this).toggleClass('text-primary');
     table.draw();
    });
 
function currendDate() {
  if(idPAid){
      idPAid = false;
      $(this).toggleClass('text-primary');
      $('#selectAll').removeClass('text-primary');

      } else {
      idPAid = true;
      $(this).toggleClass('text-primary');
      $('#selectAll').removeClass('text-primary');

      }
        table.draw();
}

  // $('#min').change(function () {
  //   console.log($(this).val())
  //       table.draw();
  //   });

  
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

                        url: "{{ route('aadhya.18-order-status.deleteAll') }}",

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

</script>

@endsection