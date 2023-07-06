@extends('layouts.backend')
@section('content')

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
					@if($promodiscount)
			    <form action="{{route('aadhya.promo_discount.update',$promodiscount->id)}}" method="post">
			    	@else
			    <form action="{{route('aadhya.promo_discount.store')}}" method="post">
			    	@endif
			    	@csrf
				<div class="main-border">
					<div class="row">
						<div class="col-md-12">
							<div class="entry-title">
								<h2>CREATE / EDIT COUPON CODE</h2>
								 @if (Session::has('success'))
					                        <div class="container">
					                            <div class="alert alert-success">
					                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					                                {{ Session::get('success') }}
					                            </div>
					                        </div>
					                        @endif
										@if ($errors->any())
										    <div class="alert alert-danger">
										        <ul>
										            @foreach ($errors->all() as $error)
										                <li>{{ $error }}</li>
										            @endforeach
										        </ul>
										    </div>
										@endif
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
								  <th scope="col" width="5%"><input type="checkbox"  id="master" class="inputAuto" />S.No</th>
								  <th scope="col" width="5%">Coupon Code</th>
								  <th scope="col" width="5%">Minimum <br>Order Value</th>
								  <th scope="col" width="5%">Discount Amount</th>
								  <th scope="col" width="8%">Issued on date</th>
								  <th scope="col" width="8%">Valid till date</th>
								  <th scope="col" width="5%">No. of Use</th>
								  <th scope="col" width="17%">Issued to Buyer Email</th>
								  <th scope="col" width="17%">Mktg. Agent Email</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <td>#1</td>
								  <td><input type="text" value="{{$promodiscount->c_12_2_coupon_code ??''}}" name="coupon_code" class="form-control" style="width:110px;"/ required=""></td>
								  <td><input type="text" value="{{$promodiscount->c_12_3_min_order_value ??''}}" name="minimum_order_value" class="form-control" placeholder="USD" style="width:70px;"  /></td>
								  <td><input type="text" value="{{$promodiscount->c_12_4_discount_amt ??''}}" name="discount_amount" class="form-control" placeholder="USD" style="width:70px" / required=""></td>
								  <td><input type="date" value="{{$promodiscount->c_12_5_issued_on ??''}}" name="issued_on_date" class="form-control" style="width:150px"/ required=""></td>
								  <td><input type="date" value="{{$promodiscount->c_12_6_valid_till_date ??''}}" name="valid_till_date" class="form-control" style="width:150px"/ required=""></td>
								  <td><input type="text" value="{{$promodiscount->c_12_9_no_of_uses ??''}}" name="number_of_use" class="form-control" required="" /></td>
								  <td><input type="email" value="{{$promodiscount->c_12_7_issued_email ??''}}" name="issued_general_email" class="form-control" /></td>
								  <td><input type="email" value="{{$promodiscount->c_12_8_issued_agent_email ??''}}" name="issued_to_name" class="form-control" /></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="bottom-button clearfix">
					<p class="text-danger " style="font-family: 'Open Sans', sans-serif;" id="couponError"></p>

						<div class="float-right">
							<div class="inputBtn"><input type="submit" class="btn greenBtn" value="Save" /></div>
						</div>
					</div>	
				</div>
				<form>
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
													<div class="float-right">
											<div class="inputBtn"><button type="button"  class="btn redBtn delete_all">Delete Selected</button></div>
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
									<th scope="col" width="">Coupon Code </th>
									<th scope="col" width="">Min. Order Value <br>Discount Amount</th>
									<th scope="col" width="">Issued on <br> Valid till</th>
									<th scope="col" width="">Issued to Buyer Email<br>Mktg. Agent Email</th>
                                    <th scope="col" width="">No. of Use <br> Use Status</th>									
									<th scope="col" width="">Promo Mails</th>
									<th scope="col" width="">Action</th>
								</tr>
							  </thead>
							  <tbody>
							  	@foreach($promodiscounts->sortByDesc('id') as $key => $promodiscount)
									<tr id="tr_{{$promodiscount->id}}">
                      						  <td><input type="checkbox" class="sub_chk dcb" data-id="{{$promodiscount->id}}"/></td>
								  <td>{{$key+1}}</td>
								  <td>{{$promodiscount->c_12_2_coupon_code}} </td>


								  <td>	{{$promodiscount->c_12_3_min_order_value}} <br> {{$promodiscount->c_12_4_discount_amt}}</td>
								  <td>{{date_format(date_create($promodiscount->c_12_5_issued_on),'d-m-y')}}<br>
								  	{{date_format(date_create($promodiscount->c_12_6_valid_till_date),'d-m-y')}}
								  </td>
								  <td>{{$promodiscount->c_12_7_issued_email}}<br>{{$promodiscount->c_12_8_issued_agent_email}}</td>
								  <td>{{$promodiscount->c_12_9_no_of_uses}}<br>
								  {{$promodiscount->c_12_10_times_used}}</td>
								  <td>

								  	@if(!$promodiscount->c_12_11_promo_mail_1)
								  	<a href="#" >Send PM1</a>
								  	@else
								  	Mail Sent <br>23-11-19
								  	@endif
								  	<br>
								  	@if(!$promodiscount->c_12_11_promo_mail_2)
								  	<a href="#" >Send PM2</a>
								  	@else
								  	Mail Sent <br>23-11-19
								  	@endif

								  </td>
								  <td class="action">
									<a href="{{route('aadhya.promo_discount.edit',$promodiscount->id)}}" class="saveTxt">Edit</a>
									<a href="{{route('aadhya.promo_discount.destroy',$promodiscount->id)}}" class="delTxt">Delete</a>
								  </td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
						
			</div>
			</div>
		</div>
	</div>

@endsection

@section('afterScript')


<script type="text/javascript">
	$('input[name="coupon_code"]').change(function () {

		let  code = $(this).val();
		  $.ajax({
                    type: "GET",
                    url: "{{ route('aadhya.check-coupon-text') }}",
                    headers: {
                           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                       },
                    data: {
                        q:code
                    },
                    success: function (data) {
                    		if(!data.status){
                    	console.log(data.status)
                    			$('#couponError').text(data.msg)
                    		}
                    }
                });


	})    

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

                        url: "{{ route('aadhya.12-promo-discount.deleteAll') }}",

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