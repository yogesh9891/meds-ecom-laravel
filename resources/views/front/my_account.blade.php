@extends('layouts.front')
@section('before_body')
    <link media href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" loading="lazy"/>

@endsection
@section('content')



<section class="inner-page pt-0 pb-0">
   <div class="container">
         <div class="breadcrumbs">
            <ul>
               <li><a href="{{url('/')}}">Home</a></li>
               <li>My Account</li>
            </ul>
         </div>
	</div>
	<div class="container">
         <div class="content-part mt-3">			
			<div class="myaccount">
				<div class="tablist">
					<ul class="nav nav-tabs" role="tablist">
					  <li class="nav-item">
						<a class="nav-link active" id="ourhistory-tab" data-toggle="tab" href="#ourhistory" role="tab" aria-controls="ourhistory" aria-selected="true">Order History</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" id="changepassword-tab" data-toggle="tab" href="#changepassword" role="tab" aria-controls="changepassword" aria-selected="false">Change Password</a>
					  </li>
					</ul>
					
					<div class="tab-content">
						<div class="tab-pane fade show active" id="ourhistory" role="tabpanel" aria-labelledby="ourhistory-tab">
						<div class="changepass">
						<div class="userlogin">
								<form>
									@csrf
								  <div class="form-group row">
									<label for="staticEmail" class="col-sm-3 col-form-label text-left">Your Login Email</label>
									<div class="col-sm-5">
									  <input type="email" class="form-control" id="useremail" placeholder="Your Login Email">
									</div>
								  </div>
								  <div class="form-group row">
									<label for="inputPassword" class="col-sm-3 col-form-label text-left">Current Password</label>
									<div class="col-sm-5">
									  <input type="password" class="form-control" id="current-password" placeholder="Current Password ">
									</div>
								  </div>
								  <div class="row"><div class="col-md-12"><a href="{{url('#')}}" class="green-text">Forgot Password? <span class="text-underline">CLICK HERE</span> for password reminder by email.</a></div></div>
								  <div class="mt-3 text-left">
									<button type="button" class="btn nobtn green-bg">Login</button>
								  </div>
								</form>
							</div>
							</div>
							<div class="our-history">
								<div class="row">
									{{-- <div class="col-md-12">
										<div class="account-search">
											<label>Search:<input type="search" class="form-control" placeholder=""></label>
										</div>
									</div> --}}
									<div class="col-md-12">

										   @if (Session::has('success'))
				                        <div class="container">
				                            <div class="alert alert-success">
				                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				                                {{ Session::get('success') }}
				                            </div>
				                        </div>
				                    @endif
														<i class="error font14 float-right">All Amounts are in US Dollars. Click on (Order ID no.) for Invoice ; (Tracker ID no.) for Parcel Status</i></div>
									<div class="col-md-12">
										<div class="history-table mt-1">
										<div class="table-responsive-main">
											<table id="data_tableq" class="table table-bordered">
											  <thead class="thead-dark">
												<tr>
												  <th scope="col" class="sorting_1"><span>Order Date</span></th>
												  <th scope="col"><span>Payment Recd.</span></span>on Date</span></th>
												  <th scope="col"><span>Shipped on</span><span>Tracker ID</span><span>Delivered on</span></th>
												</tr>
											  </thead>
											  <tbody>
                                            @foreach($orders as $order)
												<tr>
												  <td>
													
													<span>
													
												  	@if($order->proforma_invoice_mail)
											
													{{ date_format(date_create($order->proforma_invoice_mail),'d M, Y') }}
													
													@endif
													</span>
											
												 	 <span>
												 	 	@if($order->is_order)
														<a href="{{route('order.invoice',$order->c_14_7_order_invoice_url)}}"  class="red-text text-underline"  target="_blank">{{ $order->c_14_2_online_invoice_no }}</a>
													@else
												 		 @if($order->c_14_6_proforma_invoice_url)

														<a href="{{route('cart.invoice',[$order->c_14_6_proforma_invoice_url??'url','p=1'])}}"   class="red-text text-underline"  target="_blank">{{ $order->c_14_2_online_invoice_no }}
														</a>
														@endif
														@endif
														</span>
													</td>
                                            		
												  <td>
                                            		@if($order->c_14_97_received_on_date)
                                            		<span> USD {{round($order->c_14_99_usd_received)}}</span><span>	{{ date_format(date_create($order->c_14_97_received_on_date),'d M, Y') }}</span>
                                        		    @else
                                            		<span>pending</span>
                                            		@endif
                                            		</td>
                                            		 <td>
                                            @if($order->c_14_117_tracking_no)
												
												 	<span>	{{ date_format(date_create($order->c_14_115_parcel_shipment_date),'d M, Y') }}</span>
                                        		   <span><a target="_blank" class="red-text text-underline" href="{{$order->c_14_118_tracking_url}}" target="_blank">{{$order->c_14_117_tracking_no}}</a></span><span>{{date_format(date_create($order->c_14_124_delivered_date),'d M, Y')}}</span>
                                         
											@endif
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
						</div>
						<div class="tab-pane fade show" id="changepassword" role="tabpanel" aria-labelledby="changepassword-tab">
							<div class="changepass">
							<div class="fielsmend text-center">All fields are mandatory <span class="astrik">*</span> </div>
							@if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
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
								<form action="{{route('my_account.update')}}" method="POST" id="passwordFrom">
								@csrf
								<p id="password-error4" class="text-danger text-center"></p>
								  <div class="form-group row">
									<label for="staticEmail" class="col-sm-5 col-form-label text-right">LogIn Email<span class="astrik">*</span></label>
									<div class="col-sm-5">
									  <input type="email" name="email" class="form-control" id="useremail" required="" placeholder="Your LogIn Email registered with us">
									</div>
								  </div>
								  <div class="form-group row">
									<label for="inputPassword" class="col-sm-5 col-form-label text-right">LogIn Password<span class="astrik">*</span></label>
									<div class="col-sm-5 showhide">
										<span></span>

									  <input type="password" name="old_Password" class="form-control"  required id="current-password" placeholder="Your LogIn Password registered with us">
									  	   <i class="fa fa-eye showhide-icon " style="top: 13px;right: 24px"   onclick="ShowHidePassword(this)"></i>
									</div>
								  </div>
								  <div class="form-group row">
									<label for="staticEmail" class="col-sm-5 col-form-label text-right">New LogIn Password<span class="astrik">*</span></label>
									<div class="col-sm-5 showhide">
										<span></span>

									  <input type="password" name="newPass" class="form-control" required id="new-password" placeholder="New Password for Login">
									  	   <i class="fa fa-eye showhide-icon " style="top: 13px;right: 24px"   onclick="ShowHidePassword(this)"></i>
									</div>
								  </div>
								  <div class="form-group row">
									<label for="inputPassword" class="col-sm-5 col-form-label text-right">Confirm New LogIn Password<span class="astrik">*</span></label>
									<div class="col-sm-5 form-group showhide">
										<span></span>
									  <input type="password" name="confirmPass" class="form-control" required id="confirm-new-password" placeholder="Confirm New Password for Login">
               						   <i class="fa fa-eye showhide-icon " style="top: 13px;right: 24px"   onclick="ShowHidePassword(this)"></i>

									</div>
								  </div>
								  <div class="mt-3 text-right">
									<button type="submit" class="btn nobtn green-bg" id="query_submit3">Continue</button>
								  </div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
         </div>
   </div>
</section>

@endsection

@section('afterScript')

    <script src="{{ asset('front_assets/js/jquery.dataTables.min.js') }}" loading="lazy"></script>
    <script src="{{ asset('front_assets/js/dataTables.bootstrap4.min.js') }}" loading="lazy"></script>
<script type="text/javascript">
$('#data_tableq').dataTable({
  "order": [[ 0, 'desc' ]]
})


    $('#passwordFrom').submit(function(e){
               e.preventDefault();

                $('#query_submit3').attr('disabled','disabled');
          		 $('#query_submit3').css('cursor','progress');
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
              let url = $('#passwordFrom').attr('action')
               $.ajax({
                  url:'/my-account',
                  method: 'post',
                  data: $('#passwordFrom').serialize(),
                  // data: {
                  //    full_name: $('#full_name').val(),
                  //    email: $('#email').val(),
                  //    contact_no: $('#contact_no').val(),
                  //    country: $('#country').val(),
                  //    message: $('#message').val(),
                  //    url     : 'contact-us',
                  // },
                  success: function(data){
                    
                      if(data.status) {
                          alert("Your password has been Successfully Changed");
                            location.reload();
                      } else {
                      	          $('#password-error4').html('<b>'+data.msg+'</b>');
                      	              $('#query_submit3').attr('disabled',false);
                      			 $('#query_submit3').css('cursor','pointer');
                     			   setTimeout(()=>{$('#query-error4').text('')},2000);
                      }
                  },
                     error: function(data){
                // Something went wrong
                // HERE you can handle asynchronously the response 

                // Log in the console
                var errors = data.responseJSON;
                    $.each(errors.errors, function(key, value){
                           $('#password-error4').append('<b>'+value+'</b>');
                        });
                        $('#query_submit3').attr('disabled',false);
                      			 $('#query_submit3').css('cursor','pointer');
                     			   setTimeout(()=>{$('#query-error4').text('')},2000);
                }
                    
                  });
               })
</script>

@endsection
