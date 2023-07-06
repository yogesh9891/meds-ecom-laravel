@extends('layouts.backend')
@section('content')
@section('before_body')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/css/bootstrap-select.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
<div class="page-define">
		<div class="container-fluid">
			<div class="row justify-content-between">
				<div class="col">
				  <h1>Bank Details</h1>
				  <span class="shorttxt">Data will show on ORDER-INVOICE </span>
				</div>
			</div>		
		</div>
	</div>
            <div class="main-panel">
                <div class="container-fluid">
                    <div class="panel-container">
                        <div class="main-section double-heading pt-4" id="bank_detail">
                        <form action="{{route('aadhya.bank_detail.store')}}" id="bank_form" method="post">
                        	@if($bankdetail)
                    		<input type="hidden" name="bank_form" id="bank_hidden" value="{{old('bank_form',route('aadhya.bank_detail.update',$bankdetail->id))}}">
                        	@else
                    		<input type="hidden" name="bank_form" id="bank_hidden" value="{{old('bank_form',route('aadhya.bank_detail.store'))}}">
                        	@endif
                          <div class="form-control" id="table-container"></div>
                        	@csrf
                            <div class="main-border ">
                                <div class="row">
									<div class="col-md-7 col-sm-12">
									 <div class="entry-title title-icon" data-toggle="collapse" href="#question_form" role="button" aria-expanded="false" aria-controls="question_form">
											<h2>EDIT <span class="text-danger">OR ADD</span> BANK DETAILS</h2>
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

									</div>	
									<div class="col-md-5">
										<div class="entry-title right-heading">
											<div class="selectedit align-items-center">
												<div class="edittext">Edit</div>
												<input type="text" id="bank_search" class="form-control">
												<div class="edittext">	<span href="javascript:void(0)" id="bank_cross" class="cross  ">X</span></div>

											</div>
										</div>
											<div id="bank_result"></div>
									</div>
	                        </div>                                  
                                        @if ($errors->any())
                                       <div class="alert alert-danger">
                                        <ul>
                                       @foreach ($errors->all() as $error)
                                       <li>{{ $error }}</li>
                                       @endforeach
                                       </ul>
                                       </div>
                                       @endif
                               
								<div class="row collapse" id="question_form" >
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Company Code - <strong id="company_code"></strong></label>
                                        <div class="col-sm-10">
                                           <input type="text" name="company_code" value="{{$bankdetail->c_5_2_company_code ??''}}" class="form-control" placeholder="">
                                        </div>
                                      </div>                                    
									</div>
									
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Account Name</label>
                                        <div class="col-sm-10">
                                           <input type="text" name="account_name" value="{{$bankdetail->c_5_3_account_name ??''}}" class="form-control" placeholder=" ">
                                        </div>
                                      </div>                                    
									</div>
									
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Account Address</label>
                                        <div class="col-sm-10">
                                           <input type="text" name="account_address" value="{{$bankdetail->c_5_4_account_address ??''}}" class="form-control" placeholder=" ">
                                        </div>
                                      </div>                                    
									</div>
									
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Bank Name Location</label>
                                        <div class="col-sm-10">
                                           <input type="text" name="bank_name_location" value="{{$bankdetail->c_5_5_bank_name_location ??''}}" class="form-control" placeholder=" ">
                                        </div>
                                      </div>                                    
									</div>
									
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Bank Branch code</label>
                                        <div class="col-sm-10">
                                           <input type="text" name="bank_branch_code" value="{{$bankdetail->c_5_6_bank_branch_code ??''}}" class="form-control" placeholder="">
                                        </div>
                                      </div>                                    
									</div>
									
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Account Type</label>
                                        <div class="col-sm-10">
                                           <input type="text" name="account_type" value="{{$bankdetail->c_5_7_account_type ??''}}" class="form-control" placeholder="">
                                        </div>
                                      </div>                                    
									</div>
									
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Account Number</label>
                                        <div class="col-sm-10">
                                           <input type="text" name="account_number" value="{{$bankdetail->c_5_8_account_no ??''}}" class="form-control" placeholder="">
                                        </div>
                                      </div>                                    
									</div>
									
									
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Bank Transfer code</label>
                                        <div class="col-sm-10">
                                           <input type="text" name="bank_transfer_code" value="{{$bankdetail->c_5_9_bank_transfer_code ??''}}" class="form-control" placeholder="">
                                        </div>
                                      </div>                                    
									</div>
									<div class="col-md-12 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Email </label>
                                        <div class="col-sm-10">
                                           <input type="text" name="bank_email" value="{{$bankdetail->c_5_10_email ??''}}" class="form-control" placeholder="">
                                        </div>
                                      </div>                                    
									</div>
									
									<div class="col-md-4 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label text-left">Currency</label>
                                        <div class="col-sm-10">

                                        	<select class="form-control selectpicker"  data-live-search="true"  name="currency" required="" id="currency_select"> 
                                        		<option value="">Select Currency</option>
                             
                                        		<option value="{{$medsforex->c_2_3_1_fx_sign_1}}" data-rate="1">{{$medsforex->c_2_3_1_fx_sign_1}}</option>
                                        		<option value="{{$medsforex->c_2_3_3_fx_sign_2}}" data-rate="{{$medsforex->c_2_3_4_fx_rate_2}}">{{$medsforex->c_2_3_3_fx_sign_2}}</option>
                                        		<option value="{{$medsforex->c_2_3_5_fx_sign_3}}" data-rate="{{$medsforex->c_2_3_6_fx_rate_3}}">{{$medsforex->c_2_3_5_fx_sign_3}}</option>
                                        		<option value="{{$medsforex->c_2_3_7_fx_sign_4}}" data-rate="{{$medsforex->c_2_3_8_fx_rate_4}}">{{$medsforex->c_2_3_7_fx_sign_4}}</option>
                                        		<option value="{{$medsforex->c_2_3_9_fx_sign_5}}" data-rate="{{$medsforex->c_2_3_10_fx_rate_5}}">{{$medsforex->c_2_3_9_fx_sign_5}}</option>
                                        		<option value="{{$medsforex->c_2_3_11_fx_sign_6}}" data-rate="{{$medsforex->c_2_3_12_fx_rate_6}}">{{$medsforex->c_2_3_11_fx_sign_6}}</option>
                                        		<option value="{{$medsforex->c_2_3_13_fx_sign_7}}" data-rate="{{$medsforex->c_2_3_14_fx_rate_7}}">{{$medsforex->c_2_3_13_fx_sign_7}}</option>
                                        		<option value="{{$medsforex->c_2_3_15_fx_sign_8}}" data-rate="{{$medsforex->c_2_3_16_fx_rate_8}}">{{$medsforex->c_2_3_15_fx_sign_8}}</option>
                                        		<option value="{{$medsforex->c_2_3_17_fx_sign_9}}" data-rate="{{$medsforex->c_2_3_18_fx_rate_9}}">{{$medsforex->c_2_3_17_fx_sign_9}}</option>
                                        		<option value="{{$medsforex->c_2_3_19_fx_sign_10}}" data-rate="{{$medsforex->c_2_3_20_fx_rate_10}}">{{$medsforex->c_2_3_19_fx_sign_10}}</option>
                                        		<option value="{{$medsforex->c_2_3_21_fx_sign_11}}" data-rate="{{$medsforex->c_2_3_22_fx_rate_11}}">{{$medsforex->c_2_3_21_fx_sign_11}}</option>
                                        		<option value="{{$medsforex->c_2_3_23_fx_sign_12}}" data-rate="{{$medsforex->c_2_3_24_fx_rate_12}}">{{$medsforex->c_2_3_23_fx_sign_12}}</option>
                                        		<option value="{{$medsforex->c_2_3_25_fx_sign_13}}" data-rate="{{$medsforex->c_2_3_26_fx_rate_13}}">{{$medsforex->c_2_3_25_fx_sign_13}}</option>
                                        		<option value="{{$medsforex->c_2_3_27_fx_sign_14}}" data-rate="{{$medsforex->c_2_3_28_fx_rate_14}}">{{$medsforex->c_2_3_27_fx_sign_14}}</option>
                                        		<option value="{{$medsforex->c_2_3_28_fx_sign_15}}" data-rate="{{$medsforex->c_2_3_28_fx_rate_15}}">{{$medsforex->c_2_3_28_fx_sign_15}}</option>
                                        	
                                        		
                                        	</select>
                                         {{--   <input type="text" name="currency" value="{{$bankdetail->c_5_11_currency ??''}}" class="form-control" placeholder=" "> --}}
                                        </div>
                                      </div>                                    
									</div>
									
									<div class="col-md-4 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label   " id="rate_usd_to_forex">USD to Rate</label>
                                        <div class="col-sm-10">
                                           <input type="hidden" name="rate_usd" value="{{$bankdetail->c_5_12_usd_rate ??''}}" class="form-control" placeholder=" ">
                                           <input type="text" name="rate_usd1" value="{{$bankdetail->c_5_12_usd_rate ??''}}" class="form-control" placeholder=" " readonly="">
                                        </div>
                                      </div>                                    
									</div>	
									<div class="col-md-4 col-sm-12">
									  <div class="form-group row">
                                        <label class="col-sm-2 col-form-label " id="rate_forex_to_usd">Rate to USD</label>
                                        <div class="col-sm-10">
                                           <input type="text" name="usd_rate" value="{{$bankdetail->c_5_12_usd_rate ??''}}" class="form-control" placeholder=" " disabled="">
                                        </div>
                                      </div>                                    
									</div>								
							
								<div class="bottom-button clearfix col-md-12">
								<div class="text-center">
									<div class="inputBtn"><input type="submit" class="btn greenBtn" value="Save" /></div>
									<div class="inputBtn"><a href="#" class="btn redBtn" id="deleteQuestionAnswerBtn"/>Delete</a></div>
								</div>
							</div>     
								</div>
							 </div>
						</form>
                        </div>
					<div class="main-section double-heading">
                            <div class="main-border clearfix">
                                <div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="entry-title">
											<h2>BANK DETAILS</h2>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
                                        <div class="entry-title">
                                            <div class="extraDetails">
												<div class="dropexport dropdown show">
													<div class="btn-group">
													<button class="btn redBtn delete_all" type="button" >Delete All</button>
													
													</div>
												</div>
											</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-table text-left tableFooter font14">
									<table id="datatable" class="table custom-table table-bordered">
										<thead class="text-center">
											<tr>
											  <th scope="col" width="5%"><input type="checkbox"  id="master" class="inputAuto" />Select </th>
											  <th scope="col" width="5%">S.No.</th>
											  <th scope="col" width="8%">Company Code</th>
											  <th scope="col" width="15%">Account Name<br>Account Address</th>
											  <th scope="col" width="20%">Bank Name Location<br>Bank Branch code</th>
											  <th scope="col" width="15%">Account Type <br>Account Number</th>
											  <th scope="col" width="16%">Bank Transfer code <br>Email</th>											  
											  <th scope="col" width="10%">Currency <br>Rate/USD </th>											  
											  <th scope="col" width="10%">Action</th>
											</tr>
										  </thead>
										  <tbody class="text-center">
										  	@foreach($bankdetails as $key =>  $bankdetail)
												<tr id="tr_{{$bankdetail->id}}">
											  <td><input type="checkbox" class="sub_chk dcb" data-id="{{$bankdetail->id}}"/></td>
											  <td>{{($bankdetail->c_5_1_s_no)}}</td>
											  <td>{{$bankdetail->c_5_2_company_code}}</td>
											  <td>{{$bankdetail->c_5_3_account_name}}<br>
											  	{{$bankdetail->c_5_4_account_address}}</td>
											  <td>{{$bankdetail->c_5_5_bank_name_location}}<br>
											  	{{$bankdetail->c_5_6_bank_branch_code}}</td>
											  <td>{{$bankdetail->c_5_7_account_type}}<br>
											  	{{$bankdetail->c_5_8_account_no}}</td>
											  <td>{{$bankdetail->c_5_9_bank_transfer_code}}<br>{{$bankdetail->c_5_10_email}}</td>											
											  <td>{{$bankdetail->c_5_11_currency}}<br>{{round($bankdetail->c_5_12_usd_rate,8)}} <br>{{round((1/$bankdetail->c_5_12_usd_rate),8)}}</td>											
											  <td class="action">
												<a href="#" class="editTxt" data-id="{{$bankdetail->id}}"  onclick="getBank(this)" code="{{ $bankdetail->c_5_2_company_code }}"  id="update_bank_detail">EDIT</a>
												<a href="{{route('aadhya.bank_detail.destroy',$bankdetail->id)}}"  class="delTxt">Delete</a>
											  </td>
											</tr>
											@endforeach
										</tbody>
									</table>
									
								</div>  
                                  <div class="float-right mt-3">
									<button type="button" class="btn redBtn cut-button">Delete Selected</button>
								  </div>								
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
@section('afterScript')
     
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/js/bootstrap-select.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>                                   
<script>


	$('#update_bank_detail').change(function(e){
		let id = $(this).val();
        alert(id);
        if(id){
        $.ajax({
                    type: "post",
                    url: "{{url('aadhya/5-bank-detail-update')}}" + "/" +id,
                    success: function (data) {
                    	let product = data;
                    	if(data){
                    $("input[name='company_code']").val(product.c_5_2_company_code); 
                    $('#company_code').text(product.c_5_1_s_no)              

                    $("input[name='account_name']").val(product.c_5_3_account_name);
                    $("input[name='account_address']").val(product.c_5_4_account_address);
                    $("input[name='bank_name_location']").val(product.c_5_5_bank_name_location);
                    $("input[name='bank_branch_code']").val(product.c_5_6_bank_branch_code);
                    $("input[name='account_type']").val(product.c_5_7_account_type);
                    $("input[name='account_number']").val(product.c_5_8_account_no);
                    $("input[name='bank_transfer_code']").val(product.c_5_9_bank_transfer_code);
                    $("input[name='bank_email']").val(product.c_5_10_email);
                    $("input[name='currency']").val(product.c_5_11_currency);
                    $("input[name='rate_usd']").val(product.c_5_12_usd_rate);
        
                     }
                    }
        })
        }
        });

</script>

<script type="text/javascript">
	 let med_question_action = $('#bank_hidden').val();							
$('#bank_form').attr('action',med_question_action)						
	$('#bank_search').keyup(function(e){

      
		let question_info_no = $(this).val();
		if(question_info_no.length <2){
			return false;
		}
		$.ajax({
                    type: "get",
                    url: "{{url('aadhya/5-bank-detail-search')}}/"+question_info_no,
                    success: function (data) {
						$('#bank_result').html(data);
                    }
                });
				
	});

	function getBank(e){
                    // declare the value in the input field to a variable

                    var value = $(e).text();
                    if(value == 'EDIT'){
                    	value = $(e).attr('code');
                    }
					var id = $(e).attr('data-id');
					$('#bank_search').val(value);
					$('#bank_result').html('');
					for (instance in CKEDITOR.instances)
{
    CKEDITOR.instances[instance].updateElement();
}
                    $.ajax({
	                       type: "get",       
	                       url: "{{url('aadhya/5-bank-detail-show/')}}/" + id,
	                    success: function (data) {
							let med = data.data;
						   $("input[name='company_code']").val(med.c_5_2_company_code); 
                    $('#company_code').text(med.c_5_1_s_no)              

                    $("input[name='account_name']").val(med.c_5_3_account_name);
                    $("input[name='account_address']").val(med.c_5_4_account_address);
                    $("input[name='bank_name_location']").val(med.c_5_5_bank_name_location);
                    $("input[name='bank_branch_code']").val(med.c_5_6_bank_branch_code);
                    $("input[name='account_type']").val(med.c_5_7_account_type);
                    $("input[name='account_number']").val(med.c_5_8_account_no);
                    $("input[name='bank_transfer_code']").val(med.c_5_9_bank_transfer_code);
                    $("input[name='bank_email']").val(med.c_5_10_email);
                    // $("input[name='currency']").val(med.c_5_11_currency);

                     // $("#currency_select option[value='"+med.c_5_11_currency+"']").prop('selected', true);
                     // $('select[name="currency"]').val(med.currency);
                     $('.selectpicker').selectpicker('val',med.c_5_11_currency);
                     $('#rate_forex_to_usd').text(med.c_5_11_currency+' to 1 USD');
    	$('#rate_usd_to_forex').text('USD 1 to '+med.c_5_11_currency);
                    $("input[name='rate_usd']").val(med.c_5_12_usd_rate);
                      	$('input[name="rate_usd"]').val(med.c_5_12_usd_rate);
    					$('input[name="rate_usd1"]').val(med.c_5_12_usd_rate);
    					$('input[name="usd_rate"]').val(parseFloat(1/med.c_5_12_usd_rate).toFixed(8));

								//CKEDITOR.instances.editor4.setData(med.c_1_1_9_generic_intro_details); 	
								let action2 = "{{url('aadhya/5-bank-detail-update/')}}" +"/"+ med.id;
								$('#bank_form').attr('action',action2)
								$('#bank_hidden').val(action2)	
                                let deleteUrl = "{{url('aadhya/5-bank-detail-delete/')}}" +"/"+ med.id;
                                $('#deleteQuestionAnswerBtn').attr('href',deleteUrl)
                    
								
	                     }
                         });

    }

    $('#currency_select').change(function (argument) {

    	let select_currency = $(this).val();
    	let select_currency_rate = $(this).attr('data-rate');



let conceptName = $('#currency_select').find(":selected").attr('data-rate');

    	$('#rate_usd_text').text(conceptName);
    	$('#rate_forex_to_usd').text(select_currency+' to 1 USD');
    	$('#rate_usd_to_forex').text('1 USD to '+select_currency);
    	$('input[name="rate_usd"]').val(conceptName);
    	$('input[name="rate_usd1"]').val(parseFloat(conceptName).toFixed(4));
    	$('input[name="usd_rate"]').val(parseFloat(1/conceptName).toFixed(4));
    })

    $('#bank_cross').click(function () {
    		$('#bank_search').val('');
					$('#bankt_result').html('');
    		   $("input[name='company_code']").val('');    
                    $('#company_code').text('')              

                    $("input[name='account_name']").val('');
                    $("input[name='account_address']").val('');
                    $("input[name='bank_name_location']").val('');
                    $("input[name='bank_branch_code']").val('');
                    $("input[name='account_type']").val('');
                    $("input[name='account_number']").val('');
                    $("input[name='bank_transfer_code']").val('');
                    $("input[name='bank_email']").val('');
                    $("select[name='currency']").val('');
                    $('#rate_forex_to_usd').text('Rate to 1 USD');
    				$('#rate_usd_to_forex').text('1 USD to Rate');
                    $("input[name='rate_usd']").val('');
                    $('.selectpicker').selectpicker('refresh')

								//CKEDITOR.instances.editor4.setData(med.c_1_1_9_generic_intro_details); 	
								let action2 = "{{route('aadhya.bank_detail.store')}}" ;
								$('#bank_form').attr('action',action2)
								$('#bank_hidden').val(action2)	
                                $('#deleteQuestionAnswerBtn').attr('href','#')
    });

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

                        url: "{{ route('aadhya.5-bank-detail.deleteAll') }}",

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