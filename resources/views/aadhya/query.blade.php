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
									</div>

		                          	<div class="col-md-6 col-sm-12">
                                        <div class="entry-title">
                                            <div class="extraDetails">
												<div class="dropexport dropdown show">
													<div class="float-right">
											<div class="inputBtn"><button type="button"  class="btn redBtn delete_all">Delete Selected</button></div>
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
									<th scope="col" width="5%"><input type="checkbox"  id="master" class="inputAuto" />Select</th>
									<th scope="col" width="5%">S.No.</th>
									<th scope="col" width="10%">Date <br> Sent from</th>
									<th scope="col" width="16%">Name<br> Email<br>  Contact No<br>Country</th>									
									<th scope="col" width="16%">Business Name<br>Attachment</th>
									<th scope="col" width="10%">Message</th>
									<th scope="col" width="13%">Refill Order Ref<br>Pay Address<br>Del Address<br>Order Quantity<br>Other Change</th>
									<th scope="col" width="26%">Action</th>
								</tr>
							  </thead>
							  <tbody>
							  	@foreach($querydetails->sortByDesc('id') as  $key => $querydetail)
									<tr id="tr_{{$querydetail->id}}">
                      						  <td><input type="checkbox" class="sub_chk dcb" data-id="{{$querydetail->id}}"/></td>
								  <td>{{$key+1}}</td>
								  <td>{{$querydetail->created_at->timezone('Asia/Kolkata')->format('d-m-Y')}}<br>
								  	{{$querydetail->created_at->timezone('Asia/Kolkata')->format('H:i')}}
								  	@if($querydetail->c_10_3_sent_from_page)
								  	<br><a href="{{ route('medication',$querydetail->c_10_3_sent_from_page) }}" target="_blank" class="blueTxt unlderline">{{ $querydetail->c_10_1_s_no??$querydetail->c_10_3_sent_from_page }}</a>
								  @endif
								  	  </td>
								  <td>{{$querydetail->c_10_4_name}}<br>
								  	  {{$querydetail->c_10_6_email}}<br>
								  	  {{$querydetail->c_10_7_contact_no}}<br>
								  	  {{$querydetail->c_10_8_country}}
								  	</td>								  
								  <td>{{$querydetail->c_10_5_business_name}}<br>

								  	@if($querydetail->c_10_9_attachment)
								  	<a href="{{ asset('/scripts/'.$querydetail->c_10_9_attachment) }}" target="_blank" class="blueTxt unlderline"> 
								  	{{$querydetail->c_10_9_attachment}}</a>
								  	@endif
								   </td>								  
								  <td>
								  		@if($querydetail->c_10_10_message)
								  	   <a href="javascript:void(0);" style="color:#000;font-weight:600;text-decoration:underline;" data-toggle="modal" data-target="#order_detail-b{{$querydetail->id}}">
                                          Details
                                        </a>
                                        @endif
                                        <div class="modal fade modal_status" id="order_detail-b{{$querydetail->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                          <div class="modal-header">
                                            <h5>Query Sent from: 	@if($querydetail->c_10_3_sent_from_page)
								  	<a href="{{ route('medication',$querydetail->c_10_3_sent_from_page) }}" target="_blank" class="blueTxt unlderline">{{ $querydetail->c_10_1_s_no }}- {{ $querydetail->c_10_3_sent_from_page }}</a>
								  @endif
								</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                            <div class="modal-body text-left">
                                                 <p>{{$querydetail->c_10_10_message}}</p>
                                            </div>
                                            
                                            </div>
                                            </div>
                                          </div>
								  </td>
								  <td>
								  	@if(!$querydetail->c_10_10_message)
								  	  <a href="javascript:void(0);" style="color:#000;font-weight:600;text-decoration:underline;" data-toggle="modal" data-target="#order_refill-b{{$querydetail->id}}">
                                          Details
                                        </a>
                                       @endif
                                         <div class="modal fade modal_status" id="order_refill-b{{$querydetail->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                          <div class="modal-header">
                                            <h5><b>Refill Order</b> placed by <b>{{$querydetail->c_10_6_email}}</b> dated <b>{{$querydetail->created_at->timezone('Asia/Kolkata')->format('d-m-Y')}} {{$querydetail->created_at->timezone('Asia/Kolkata')->format('H:i')}}</b> </h5>

										  	
										</h5>
		                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                            <div class="modal-body text-left">
                                               <b> Order Refrence :</b> {{$querydetail->c_10_11_order_ref}} 
                                               @if($querydetail->summary)
                                               - <a  href="{{route('order.invoice',$querydetail->summary->c_14_7_order_invoice_url??'url')}}"  target="_blank">Invoice</a>  <a href="{{route('aadhya.summary',$querydetail->summary->c_14_2_online_invoice_no??'url')}}" class="ml-2"  target="_blank">Summary</a>
                                               @endif
                                           </br>
                                                <b> Payment Address :</b> {{$querydetail->c_10_12_refill_pay_address}}</br>
                                                 <b>Delivery  Address : </b>{{$querydetail->c_10_13_refill_del_address}}</br>
                                                 <b>Order Quantity :</b> {{$querydetail->c_10_14_refill_order_quantity}}</br>
                                                 <b>Any Other :</b> {{$querydetail->c_10_15_refill_other_change}}</br>
                                            </div>
                                            
                                            </div>
                                            </div>
                                          </div>
								  	</td>						  
								  <td class="action">
								  	<form action="{{ route('aadhya.query.email_reply',$querydetail->id) }}" method="post" class="row">
								  		@csrf
								  		@if($querydetail->c_10_16_email_reply)
								  		<div class="col-md-12"> EM Replied : {{ date_format(date_create($querydetail->c_10_16_email_reply),'d-m-Y') }}</div>
								  		@else

								  		<div class="col-md-6"><button type="submit" class="saveTxt ">Email Reply:</button></div>
								  		<div class="col-md-6"><input type="date" name="date" class="border " required="" ></div>
								  		@endif
								  	</form>
										
								  	<form action="{{ route('aadhya.query.wa_reply',$querydetail->id) }}" method="post" class="row">
								  			@csrf
								  		@if($querydetail->c_10_17_wa_reply)
								  		<div class="col-md-12">WA Replied : {{ date_format(date_create($querydetail->c_10_17_wa_reply),'d-m-Y') }}</div>
								  		@else
								  	<div class="col-md-6"><button type="submit"  class="saveTxt ">WA Reply:</button>	</div>
								  		<div class="col-md-6"><input type="date" name="date" class="border  " required="" ></div>

								  	@endif
								  	</form>
									<a href="{{ url('/aadhya/10-query-destroy/'.$querydetail->id) }}" class="delTxt">Delete</a>
								  </td>
								</tr>
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

                        url: "{{ route('aadhya.10-query.deleteAll') }}",

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