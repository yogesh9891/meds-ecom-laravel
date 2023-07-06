@extends('layouts.backend')

@section('content')

@section('before_body')
<style type="text/css">
	.bg-dark {
		background-color: #eee !important;
	}	
	
	.inputfile {
  /* visibility: hidden etc. wont work */
  width: 0.1px;
  height: 0.1px;
  opacity: 0;
  overflow: hidden;
  position: absolute;
  z-index: -1;
}
.inputfile:focus + label {
  /* keyboard navigation */
  outline: 1px dotted #000;
  border: 1px dotted #000;
  outline: -webkit-focus-ring-color auto 5px;
}
.inputfile + label * {
  pointer-events: none;
}

#doctor-label {
	border: 1px solid #000;
padding: 2px;
text-align: right;
float: right;
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/css/bootstrap-select.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
<div class="page-define">
		<div class="container-fluid">
			<div class="row justify-content-between">
				<div class="col">
				  <h1>Country Freight</h1>
				  <span class="shorttxt">Data will show on CART-CHECKOUT / MEDICATION</span>
				</div>
			</div>		
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
            <div class="main-panel">
                <div class="container-fluid">
                    <div class="panel-container">
                    	<form action="{{route('aadhya.country_freight.store')}}" id="country_form" method="post">
                    		<input type="hidden" name="country_form" id="country_freight_hidden" value="{{old('country_form',route('aadhya.country_freight.store'))}}">
                        <div class="main-section mt-3">
                            
                            	@csrf
                                <div class="main-border">
                                    <div class="row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="entry-title">
                                            <h2><span>ENTER NEW COUNTRY - FREIGHT</span></h2>
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
									<div class="col-md-4 col-sm-12">
										<div class="entry-title">
                                            <h2><span>EDIT COUNTRY</span></h2>
                                        </div>
                                        <div class="entry-title right-heading">
												<div class="selectedit align-items-center" style="left: 130px;width: 450px">
												<input type="text" name="" id="country_freight_search" class="form-control" class="form-control">
												<div class="edittext">	<span href="" id="country_freight_cross" class="cross ">X</span></div>
											</div>
                                        </div>
												<div id="country_freight_result"></div>
                                    </div>
                                </div>
								<small class="d-block mb-3">DBT: 4-1-Country-Freight</small>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Country Name & ISD</label>
                                                <div class="col-sm-6">
                                                    <input type="text" name="country_name" value="{{$countryFreight->c_4_1_2_country_name ??''}}" class="form-control">
                                                </div>
												<div class="col-sm-2">
                                                    <input type="text" name="country_isd" value="{{$countryFreight->c_4_1_3_country_isd_code ??''}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                         <div class="col-md-6 col-sm-12">
                                            <div class="form-group row">
                                                <label class="col-md-3 col-form-label">PI Bank Details</label>
                                                <div class="col-md-4">
                                                <select class="form-control selectpicker Cfield" data-live-search="true"  id="select_payment_mode" name="priority_display"  >
                                                	<option value="credit_card">Credit Card</option>
											@foreach($bank_details as $bank_detail)
											<option value="{{$bank_detail->c_5_2_company_code}}">{{$bank_detail->c_5_2_company_code}}</option>
											@endforeach
											</select>
                                                </div>
                                                <label class="col-md-3 col-form-label" id="select_payment_text"></label>
												
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-sm-6">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-8 col-form-label">Billing Address:</label>
                                                <div class="col-sm-1">
                                                    <input name="billing_address" value="Y" type="checkbox" value="{{$countryFreight->c_4_1_4_billing_address ??''}}"  />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1 col-sm-6 ml-3">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-8 col-form-label ">Delivery Address:</label>
                                                <div class="col-sm-1">
                                                    <input name="delivery_address" value="Y" type="checkbox" value="{{$countryFreight->c_4_1_5_delivery_address ??''}}" />
                                                </div>
                                            </div>
                                        </div>
									{{-- 	<div class="col-md-2 col-sm-6">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-8 col-form-label">Priority Display:</label>
                                                <div class="col-sm-4">
                                                    <input name="priority_display" value="Y" type="checkbox" value="{{$countryFreight->c_4_1_6_priority_display ??''}}"/>
                                                </div>
                                            </div>
                                        </div> --}}
										
										<div class="col-md-1 col-sm-12 ml-3">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-8 col-form-label">Customs Clearance:</label>
                                                <div class="col-sm-1">
                                                    <input name="customs_clearance" value="Y" type="checkbox" value="{{$countryFreight->c_4_1_7_customs_clearance ??''}}" />
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-1 col-sm-12 ml-3">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-8 col-form-label">Patient Use:</label>
                                                <div class="col-sm-1">
                                                    <input name="patient_use" value="Y" type="checkbox" value="{{$countryFreight->c_4_1_8_patient_use ??''}}"/>
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-1 col-sm-12 ml-3">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-8 col-form-label">Study Use:</label>
                                                <div class="col-sm-1">
                                                    <input name="study_use" value="Y" type="checkbox" value="{{$countryFreight->c_4_1_9_study_use ??''}}"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-6 ml-3">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-7 col-form-label">Dif. Freight Charges: INR </label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="freight_charges_inr" value="{{$countryFreight->c_4_1_10_dif_freight_chg_inr ??''}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
										
                                        <div class="col-md-2 col-sm-6 ml-3">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-6 col-form-label">Days for Delivery :</label>
                                                <div class="col-sm-6 text-left">
                                                    <input type="text" name="delivery_start" value="{{$countryFreight->c_4_1_11_delivery_start ??''}}" class="form-control" style="width:35px; float:left"> <span style="width:5px; float:left; text-align:center">-</span> <input type="text" name="delivery_end" value="{{$countryFreight->c_4_1_12_delivery_end ??''}}" class="form-control" style="width:35px;">
                                                </div>
                                            </div>
                                        </div>
                                        
										<div class="col-md-2 col-sm-6">
										<div class="bottom-button mt-0 clearfix">
										<div class="float-right">
											<div class="inputBtn"><input type="submit" class="btn greenBtn" value="Save" /></div>
											<div class="inputBtn"><a href="#" class="btn redBtn" id="deleteQuestionAnswerBtn" >Delete<a></div>
										</div>
									</div>
										</div>
                                    </div>
                            
                            </div>
							
                        </div>
                    </form>
						 	<form action="{{route('aadhya.single_country_freight.update')}}"  method="post">
						 		@csrf
						<div class="main-section">
                            <div class="main-border ">
								<div class="entry-title">
									<h2>SINGLE FREIGHT DISPLAY</h2>
								</div>
								<div class="row">									
									<div class="col-md-4 col-sm-6">
										<div class="form-group row no-gutters">
											<label class="col-sm-6 col-form-label">Single Freight Charges: INR </label>
											<div class="col-md-6 d-flex">
												<input type="text" name="single_freight_charge" value="{{$country->c_4_1_13_single_freight}}" class="form-control" style="width: 100px;" /> 
											<label class="col-sm-6 col-form-label">= US$ {{round($country->c_4_1_13_single_freight	/$forex->c_2_3_2_fx_rate_1)}}</label>
											</div>
										<br>
										<span class="col-md-6"></span>
										<span class="col-md-6 form-group"><span class="col-form-label">( @ INR {{ $forex->c_2_3_2_fx_rate_1 }} / US$ )</span></span>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="form-group row float-right">
											<label class="col col-form-label text-right">Show SINGLE FREIGHT:</label>
											<div class="col-md-2">
												<input type="checkbox" value="Y" @if($country->c_4_1_14_show_single_freight == '') checked="" @endif name="show_single_freight" />
											</div>
										</div>
									</div>
									<div class="col-md-5 col-sm-6">
										<div class="bottom-button mt-0  clearfix">
										<div class="float-right">
											<div class="inputBtn"><input type="submit" class="btn greenBtn" value="Save" /></div>
										</div>
									</div>
									</div>
								</div>
									
                            </div>
                        </div>
                  		  </form>
                        <div class="main-section">
                            <div class="main-border ">
										<div class="entry-title">
											<h2>EXISTING COUNTRY - FREIGHT</h2>
										</div>
										<div class="bottom-button clearfix">
										<div class="float-right">
											<div class="inputBtn"><button type="button"  class="btn redBtn delete_all">Delete Selected</button></div>
										</div>
									</div>
                                <div class="border-table text-left tableFooter font14">								  
								  
								     
									<table class="table datatable custom-table table-bordered">
										<thead>
											   <tr >
											  <th scope="col" width="5%"><input type="checkbox"  id="master" class="inputAuto" /> S.No.</th>
											  <th scope="col" width="12%">Country</th>
											  <th scope="col" width="5%">ISD Code</th>
											  <th scope="col" width="10%">Bank Details</th>
											  <th scope="col" width="4%">Billing</th>
											  <th scope="col" width="4%">Delivery</th>
											  <th scope="col" width="4%">Customs</th>
											  <th scope="col" width="4%">Patient Use</th>
											  <th scope="col" width="4%">Study Use</th>
											  <th scope="col" width="5%" style="font-weight:700;padding:5px;">Fr.<br>INR</th>
											  <th scope="col" width="5%" style="font-weight:700;padding:5px;">Fr.<br>USD</th>
											  <th scope="col" width="4%">Days</th>
											  <th scope="col" width="4%">Action</th>
											</tr>
										  </thead>
										  <tbody>
                                            @foreach($countryFreights as $key => $countryFreight)
											<tr id="tr_{{$countryFreight->id}}">
											  <td><input type="checkbox" class="sub_chk dcb" data-id="{{$countryFreight->id}}"/>{{($key+1)}}</td>
											  <td>{{$countryFreight->c_4_1_2_country_name}}</td>
											  <td>{{$countryFreight->c_4_1_3_country_isd_code}}</td>
											  <td>{{$countryFreight->c_4_1_6_priority_display}}</td>
											  <td>{{$countryFreight->c_4_1_4_billing_address}}</td>
											  <td>{{$countryFreight->c_4_1_5_delivery_address}}</td>
											  <td>{{$countryFreight->c_4_1_7_customs_clearance}}</td>
											  <td>{{$countryFreight->c_4_1_8_patient_use}}</td>
											  <td>{{$countryFreight->c_4_1_9_study_use}}</td>
                                              <td>{{$countryFreight->c_4_1_10_dif_freight_chg_inr}}</td>
											  <td bgcolor="#B9B9B9">{{round($countryFreight->c_4_1_10_dif_freight_chg_inr/$forex->c_2_3_2_fx_rate_1)}}</td>
											  <td>{{$countryFreight->c_4_1_11_delivery_start}} - {{$countryFreight->c_4_1_12_delivery_end}}</td>
											  <td class=""><a href="#" onclick="getCountry(this)" data-id="{{ $countryFreight->id }}" country="{{ $countryFreight->c_4_1_2_country_name }}" class="darkblueTxt">Edit</a>
											   <a href="{{route('aadhya.country_freight.destroy',$countryFreight->id)}}" class="delTxt">Del.</a></td>
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


@endsection
@section('afterScript')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/js/bootstrap-select.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
	$(function () {
    $('.selectpicker').selectpicker();

})

	$('select[name="priority_display"]').change(function (argument) {
			
			let payment_mode = $(this).val();
			console.log(payment_mode)
			$('#select_payment_text').text(payment_mode)

		});
</script>

<script type="text/javascript">
	 let med_question_action = $('#country_freight_hidden').val();							
$('#country_form').attr('action',med_question_action)						
	$('#country_freight_search').keyup(function(e){

      
		let question_info_no = $(this).val();
		if(question_info_no.length <2){
			return false;
		}
		$.ajax({
                    type: "get",
                    url: "{{url('aadhya/4-country-search')}}/"+question_info_no,
                    success: function (data) {
						$('#country_freight_result').html(data);
                    }
                });
				
	});

	function getCountry(e){
                    // declare the value in the input field to a variable
                    var value = $(e).text();
                    if(value =='Edit'){
                    	value = $(e).attr('country');
                    }
					var id = $(e).attr('data-id');
					$('#country_freight_search').val(value);
					$('#country_freight_result').html('');
					for (instance in CKEDITOR.instances)
{
    CKEDITOR.instances[instance].updateElement();
}
                    $.ajax({
	                       type: "get",       
	                       url: "{{url('aadhya/4-country-show/')}}/" + id,
	                    success: function (data) {
							let med = data.data;
								$('input[name="country_name"]').val(med.c_4_1_2_country_name);
								$('input[name="country_isd"]').val(med.c_4_1_3_country_isd_code);
								$('input[name="freight_charges_inr"]').val(med.c_4_1_10_dif_freight_chg_inr);
								$('input[name="delivery_start"]').val(med.c_4_1_11_delivery_start);
								$('input[name="delivery_end"]').val(med.c_4_1_12_delivery_end);
                    		        $("input[name=billing_address][value=" +  med.c_4_1_4_billing_address + "]").prop('checked', true);
                    		        $("input[name=delivery_address][value=" +  med.c_4_1_5_delivery_address + "]").prop('checked', true);
                    		        // $("input[name=priority_display][value=" +  med.c_4_1_6_priority_display + "]").prop('checked', true);
                    		        $('#select_payment_text').text(med.c_4_1_6_priority_display);
                    		        $('#select_payment_mode').selectpicker('val',med.c_4_1_6_priority_display)
                    		  
                    		        $("input[name=customs_clearance][value=" +  med.c_4_1_7_customs_clearance + "]").prop('checked', true);
                    		        $("input[name=patient_use][value=" +  med.c_4_1_8_patient_use + "]").prop('checked', true);
                    		        $("input[name=study_use][value=" +  med.c_4_1_9_study_use + "]").prop('checked', true);

								//CKEDITOR.instances.editor4.setData(med.c_1_1_9_generic_intro_details); 	
								let action2 = "{{url('aadhya/4-country-update/')}}" +"/"+ med.id;
								$('#country_form').attr('action',action2)
								$('#country_freight_hidden').val(action2)	
                                let deleteUrl = "{{url('aadhya/4-country-delete/')}}" +"/"+ med.id;
                                $('#deleteQuestionAnswerBtn').attr('href',deleteUrl)
                    
								
	                     }
                         });

    }

    $('#country_freight_cross').click(function () {
    		$('#country_freight_search').val('');
					$('#country_freight_result').html('');
    		$('input[name="country_name"]').val('');
								$('input[name="country_isd"]').val('');
								$('input[name="freight_charges_inr"]').val('');
								$('input[name="delivery_start"]').val('');
								$('input[name="delivery_end"]').val('');
                    		        $("input[name=billing_address]").prop('checked', false);
                    		        $("input[name=delivery_address]").prop('checked', false);
                    		        // $("input[name=priority_display]").prop('checked', false);
                    		        $('#select_payment_text').text('');
                    		        $("input[name=customs_clearance]").prop('checked', false);
                    		        $("input[name=patient_use]").prop('checked', false);
                    		        $("input[name=study_use]").prop('checked', false);

								//CKEDITOR.instances.editor4.setData(med.c_1_1_9_generic_intro_details); 	
								let action2 = "{{route('aadhya.country_freight.store')}}" ;
								$('#country_form').attr('action',action2)
								$('#country_freight_hidden').val(action2)	
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

                        url: "{{ route('aadhya.country_freight.deleteAll') }}",

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


        // $('[data-toggle=confirmation]').confirmation({

        //     rootSelector: '[data-toggle=confirmation]',

        //     onConfirm: function (event, element) {

        //         element.trigger('confirm');

        //     }

        // });


        // $(document).on('confirm', function (e) {

        //     var ele = e.target;

        //     e.preventDefault();


        //     $.ajax({

        //         url: ele.href,

        //         type: 'DELETE',

        //         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},

        //         success: function (data) {

        //             if (data['success']) {

        //                 $("#" + data['tr']).slideUp("slow");

        //                 alert(data['success']);

        //             } else if (data['error']) {

        //                 alert(data['error']);

        //             } else {

        //                 alert('Whoops Something went wrong!!');

        //             }

        //         },

        //         error: function (data) {

        //             alert(data.responseText);

        //         }

        //     });


        //     return false;

        // });
</script>
@endsection