@extends('layouts.backend')
@section('content')

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
									<table id="datatable" class="table custom-table table-bordered text-center">
										<thead>
											<tr>
												<th scope="col" width="4%"><input type="checkbox"  id="master" class="inputAuto" />Select</th>
												<th scope="col" width="3%">S.No</th>
												<th scope="col" width="8%">Date<br>IST</th>
												<th scope="col" width="20%">LogIn Email,<br>Name & Country<br> Whatsapp no.</th>
												<th scope="col" width="10%">Amount<br> Order Details</th>
												<th scope="col" width="25%">DA : Patient c/o Receiver Name, Country<br>
											PA: Payer Name, Country </th>
												<th scope="col" width="10%">Order Reminder (OR) Mails</th>
												<th scope="col" width="5%">Action</th>
											</tr>
										  </thead>
										  <tbody>
										  	@php $total = $orders->count();  @endphp
										  	@foreach($orders as $key=> $order)
											<tr id="tr_{{$order->id}}">
                      						  <td><input type="checkbox" class="sub_chk dcb" data-id="{{$order->id}}"/></td>
											  <td>{{ $total}}</td>
											  <td>{{$order->created_at->format('d-m-Y')}}<br>{{$order->created_at->timezone('Asia/Kolkata')->format('H.i')}}</td>
											  <td>{{ $order->c_14_9_login_email }}<br>{{ $order->user->name ?? '' }}, {{ $order->user->user_country->c_4_1_2_country_name  ??'' }}<br>{{ $order->user->mobile ??'' }}</td>
											 <td>USD {{round($order->c_14_74_total_order_value)}}<br> 

											  	@if($order->order_details)
			                                        <a href="javascript:void(0);" class="text-primary"  style="font-weight:600;text-decoration:underline;" data-toggle="modal" data-target="#order_detail-b{{$order->id}}">
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
											  <td>{{$order->c_14_19_patient_name ? $order->c_14_19_patient_name.' c/o' : ''}} 
											  	@if($order->c_14_22_parcel_receivers_full_name)
											   {{$order->c_14_22_parcel_receivers_full_name?$order->c_14_22_parcel_receivers_full_name.',' : ''}} {{ $order->country->c_4_1_2_country_name??'-' }}
											   @else
											   -
											   @endif
											  	<br>
											 {{$order->c_14_10_payer_full_name?$order->c_14_10_payer_full_name.',':'' }} {{ $order->c_14_17_payer_country ??'-'}}
											  </td>
											  
											  <td>
											  	@if(!$order->order_reminder_or1)
											  	<u><a href="{{ route('aadhya.order_reminder_or1',$order->id) }}" >Send OR1</a>  </u>
											  	@else
											  	OR1: {{ date_format(date_create($order->order_reminder_or1),'d-m-y') }}
											  	@endif

											  	<br>

											  	@if(!$order->order_reminder_or2)
											  	<u><a href="{{ route('aadhya.order_reminder_or2',$order->id) }}" >Send OR2</a> </u>
											  	@else
											  	OR2: {{ date_format(date_create($order->order_reminder_or2),'d-m-y') }}
											  	@endif

											  	<br>

											  	@if(!$order->order_reminder_or3)
											  	<u><a href="{{ route('aadhya.order_reminder_or3',$order->id) }}" >Send OR3</a> </u>
											  	@else
											  	OR3: {{ date_format(date_create($order->order_reminder_or3),'d-m-y') }}
											  	@endif

											  	  </td>
											  <td class="action">
												<a  href="{{ route('cart.order',$order->c_14_4_cart_url) }}" class="text-primary" target="_blank">Checkout</a>
												<a href="{{ url('/aadhya/17-pending-cart/delete/'.$order->id) }}" class="delTxt">Delete</a>
											  </td>
											</tr>

											@php  $total--; @endphp
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
						
                    </div>
                </div>
            </div>

@endsection
@section('afterScript')
<script type="text/javascript">
		

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
