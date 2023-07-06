@extends('layouts.backend')
@section('content')

<div class="page-define">
				  <div class="container-fluid">
					<div class="row justify-content-between">
						<div class="col">
							<h1>ORDER REFILL</h1>
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
											<h2>ORDER REFILL</h2>
										</div>
										<small class="mb-3 d-block">DBT: 14-Summary</small>
									</div>	

										<div class="col-md-6 col-sm-12">
                                        <div class="entry-title">
                                            <div class="extraDetails">
												<div class="dropexport dropdown show">
													<div class="float-right">
										</div>
												</div>
											</div>
                                        </div>
                                    </div>								
                                </div>
                                <div class="border-table text-left tableFooter font14">
                       @if (Session::has('success'))
                        <div class="container">
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    @endif
                         @if (Session::has('error'))
                             <div class="container">
                                 <div class="alert alert-danger">
                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                     {{ Session::get('error') }}
                                 </div>
                             </div>
                         @endif

                         <table cellspacing="5" cellpadding="5" border="0" class="my-3" >
        <tbody>
        	<tr>
            <td><button type="button" id="selectAll" class="text-primary"><strong>View All Dates</strong></button><button type="button" id="currentDate" class=" ml-5"><strong>View till Today's Date</strong></button></td>
       
        </tr>
      
    </tbody></table>
									<table id="datatable1" class="table custom-table table-bordered text-center">
										<thead>
								<tr>
                        <th scope="col" width="5%"><input type="checkbox"  id="master" class="inputAuto" />Select </th>
									
									<th scope="col" width="9%">Refill Due on </th>	
									<th scope="col" width="9%">Order. No.</th>
									<th scope="col" width="9%">Order Date <br> Refill Days</th>
									<th scope="col" width="22%">Billing Name & Country<br>Login Email<br>Billing Whatsapp no.<br>Patient/Receiver & Country</th>
									<th scope="col" width="9%">Order Details</th>
									<th scope="col" width="9%">Order Value <br>Pay. Recd.<br>On Date<br>Balance</th>
									<th scope="col" width="18%">Refill Reminders (RR) Mails </th>
									<th scope="col" width="11%">Action</th>									
								</tr>
							  </thead>
							  <tbody>

                                        @foreach($orders as $key => $order)
								  		@php 

								  		$order_date = \Carbon\Carbon::parse($order->created_at); 
								  		$add_days = ((int)$order->c_14_85_refil_after_days -7);
								  		
								  		$due_date = $order_date->addDays($add_days);

								  		// echo $due_date->format('d-m-Y');
								  		// echo ';';
								  		// echo \Carbon\Carbon::now();
								  		// echo ';';
								  		 @endphp


								  		{{-- @if (\Carbon\Carbon::now()->greaterThanOrEqualTo($due_date)) --}}
								<tr id="tr_{{$order->id}}">
                        <td><input type="checkbox" class="sub_chk dcb" data-id="{{$order->id}}"/></td>
								  <td class="sorting_1"> 

								  		 {{  $due_date->format('Y-m-d') }}

								   </td>
								   <td><a href="{{route('aadhya.summary',$order->c_14_8_excel_order_url)}}" style="color:#000;font-weight:600;text-decoration:underline;" target="_blank">{{$order->c_14_2_online_invoice_no}}</a>

								   	<br>
								   	  @if($order->c_14_7_order_invoice_url)
					                     <a href="{{route('order.invoice',$order->c_14_7_order_invoice_url??'url')}}" style="color:#000;font-weight:600;text-decoration:underline;" target="_blank">OI </a> 
					                   @endif

					                     / 
				                     @if($order->c_14_8_excel_order_url)
				                     <a href="{{route('aadhya.excel.invoice',$order->c_14_8_excel_order_url??'url')}}" style="color:#000;font-weight:600;text-decoration:underline;" target="_blank">ES </a>
				                     @endif

								   </td>
								  <td> {{$order->created_at->format('d-m-Y')}}<br> {{$order->c_14_85_refil_after_days}} days </td>

               					   <td>{{$order->c_14_10_payer_full_name}}, {{$order->c_14_17_payer_country}}<br>{{$order->c_14_9_login_email}}<br>{{$order->c_14_18_payer_mobile}}<br>{{$order->c_14_19_patient_name}}, {{$order->country->c_4_1_2_country_name??''}}</td>
									  <td>
                                        @if($order->order_details)
                                        <a href="javascript:void(0);" style="color:#000;font-weight:600;text-decoration:underline;" data-toggle="modal" data-target="#order_detail-b{{$order->id}}">
                                          Details
                                        </a>

                                        <div class="modal fade modal_status" id="order_detail-b{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                          <div class="modal-header">
                                            <h5>Order Details : {{$order->c_14_2_online_invoice_no}}</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                            <div class="modal-body text-left">
                                                  @foreach($order->order_details as $order_detail)
                                                                                        {{$order_detail->c_14_36_quantity_pack}} {{$order_detail->c_14_40_medicine_form}} x {{$order_detail->c_14_39_total_quantity}} :   {{$order_detail->c_14_36_quantity_pack*$order_detail->c_14_39_total_quantity}} {{$order_detail->c_14_35_description}}<br>
                                                                                        @endforeach
                                            </div>
                                            
                                            </div>
                                            </div>
                                          </div>
                                  
                                        @endif
                                  </td>
								 
								  <td>{{round($order->c_14_84_total_amount)}}- <br>{{round($order->c_14_99_usd_received) ?? 0}}-<br>{{$order->c_14_97_received_on_date?date_format(date_create($order->c_14_97_received_on_date),'d-m-Y'):''}} <br>{{$order->c_14_100_usd_bal_due}}-</td>		

								

								  <td>

  											@if(!$order->refil_reminder_mail1)
  												@if(!$order->reorder_invoice_no && !$order->reorder_date)
											  	<u><a href="{{ route('aadhya.refil_reminder_mail1',$order->id) }}" >Send RR1</a>  </u>
											  	@endif
											  	@else
											  	RR1: {{ date_format(date_create($order->refil_reminder_mail1),'d-m-y') }}
											  	@endif

											  	<br>

											  	@if(!$order->refil_reminder_mail2)
											  	@if(!$order->reorder_invoice_no && !$order->reorder_date)
											  	<u><a href="{{ route('aadhya.refil_reminder_mail2',$order->id) }}" >Send RR2</a> </u>
											  	@endif
											  	@else
											  	RR2: {{ date_format(date_create($order->refil_reminder_mail2),'d-m-y') }}
											  	@endif

											  	<br>

											  	@if(!$order->refil_reminder_mail3)
											  	@if(!$order->reorder_invoice_no && !$order->reorder_date)
											  	<u><a href="{{ route('aadhya.refil_reminder_mail3',$order->id) }}" >Send RR3</a> </u>
											  	@endif
											  	@else
											  	RR3: {{ date_format(date_create($order->refil_reminder_mail3),'d-m-y') }}
											  	@endif</td>
										  <td class="action">
										  
										  	@if(!$order->reorder_invoice_no)
										  <a href="{{route('aadhya.summary',$order->c_14_8_excel_order_url)}}"  target="_blank" class="text-primary">REORDER</a>
										  @else

										 <a href="{{route('aadhya.summary',$order->reorder_invoice_no)}}"  target="_blank" class="text-primary">REORDERED ON  {{ $order->reorder->created_at->format('d-m-y') }}</a>
										
										  @endif

										  	
										  		@if(!$order->reorder_date)
												  <a href="{{route('aadhya.order_refill.delete',$order->id)}}" class="delTxt">Delete</a>
											  	@else
											  	<span class="delTxt">CANCELLED ON <br> {{ date_format(date_create($order->reorder_date),'d-m-y') }}</span>
											
											  	@endif

										</td>

                 
                    		
								</tr>

								{{-- @endif --}}
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


<!--Order Status End-->
						
                    </div>
                </div>
            </div>


@endsection

@section('afterScript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.3/moment.min.js" integrity="sha512-x/vqovXY/Q4b+rNjgiheBsA/vbWA3IVvsS8lkQSX1gQ4ggSJx38oI2vREZXpTzhAv6tNUaX81E7QBBzkpDQayA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">




    var table = $('#datatable1').DataTable({
  "order": [[ 1, 'desc' ]]
});
 var currentDate,isCurrent = false;
//  $('#data_tableq').dataTable({
//   "order": [[ 0, 'desc' ]]
// })


// Custom filtering function which will search data in column four between two values
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var currentDate = new Date();

       let date = new Date( data[1] );
       
       console.log(currentDate)
    //   console.log(dateArray[2]+'-'+dateArray[1]+'-'+dateArray[0])
    //     var date = new Date(dateArray[2]+'-'+dateArray[1]+'-'+dateArray[0]);


   
     	  if (!isCurrent || date <= currentDate) {    
     	      console.log(date)
                   return true;
            } 
        return false;
    }
);
    $('#currentDate').click(function () {
    	if(isCurrent){
    	isCurrent = false;
    	$(this).toggleClass('text-primary');
    	$('#selectAll').removeClass('text-primary');

    	} else {
    	isCurrent = true;
    	$(this).toggleClass('text-primary');
    	$('#selectAll').removeClass('text-primary');

    	}
        table.draw();
    });

      $('#selectAll').click(function () {
    	isCurrent =false;
    	$('#currentDate').removeClass('text-primary');
    	$(this).toggleClass('text-primary');
     table.draw();
    });
 
function currendDate() {
	if(isCurrent){
    	isCurrent = false;
    	$(this).toggleClass('text-primary');
    	$('#selectAll').removeClass('text-primary');

    	} else {
    	isCurrent = true;
    	$(this).toggleClass('text-primary');
    	$('#selectAll').removeClass('text-primary');

    	}
        table.draw();
}


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

                        url: "{{ route('aadhya.6-text-reviews.deleteAll') }}",

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