@extends('layouts.backend')
@section('content')

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
                    	<form action="{{route('aadhya.country_freight.update',$countryFreight)}}" method="post">
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
									<div class="col-md-6 col-sm-12">
                                        <div class="entry-title right-heading">
												<div class="selectedit align-items-center">
												<div class="edittext">EDIT </div>
												<input type="text" name="" id="country_freight_search">
												<div class="country_freight_result"></div>
												<div class="edittext">	<span href="" id="crirical_diease" class="cross  ">X</span></div>
											</div>
                                        </div>
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
                                        <div class="col-md-2 col-sm-6">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-8 col-form-label">Billing Address:</label>
                                                <div class="col-sm-4">
                                                    <input name="billing_address" value="Y" type="checkbox" @if($countryFreight->c_4_1_4_billing_address && $countryFreight->c_4_1_4_billing_address=='Y') checked @endif   />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-6">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-10 col-form-label ">Delivery Address:</label>
                                                <div class="col-sm-1">
                                                    <input name="delivery_address" value="Y" type="checkbox" @if($countryFreight->c_4_1_5_delivery_address && $countryFreight->c_4_1_5_delivery_address=='Y') checked @endif />
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-2 col-sm-6">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-8 col-form-label">Priority Display:</label>
                                                <div class="col-sm-4">
                                                    <input name="priority_display" value="Y" type="checkbox" @if($countryFreight->c_4_1_6_priority_display && $countryFreight->c_4_1_6_priority_display=='Y') checked @endif />
                                                </div>
                                            </div>
                                        </div>
										
										<div class="col-md-2 col-sm-12">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-10 col-form-label">Customs Clearance:</label>
                                                <div class="col-sm-2">
                                                    <input name="customs_clearance" value="Y" type="checkbox"  @if($countryFreight->c_4_1_7_customs_clearance && $countryFreight->c_4_1_7_customs_clearance=='Y') checked @endif />
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-2 col-sm-12">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-6 col-form-label">Patient Use:</label>
                                                <div class="col-sm-6">
                                                    <input name="patient_use" value="Y" type="checkbox"  @if($countryFreight->c_4_1_8_patient_use && $countryFreight->c_4_1_8_patient_use=='Y') checked @endif/>
                                                </div>
                                            </div>
                                        </div>
										<div class="col-md-2 col-sm-12">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-6 col-form-label">Study Use:</label>
                                                <div class="col-sm-6">
                                                    <input name="study_use" value="Y" type="checkbox" @if($countryFreight->c_4_1_9_study_use && $countryFreight->c_4_1_9_study_use=='Y') checked @endif/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-7 col-form-label">Dif. Freight Charges: INR </label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="freight_charges_inr" value="{{$countryFreight->c_4_1_10_dif_freight_chg_inr ??''}}" class="form-control">
                                                </div>
                                            </div>
                                        </div>
										
                                        <div class="col-md-3 col-sm-6">
                                            <div class="form-group row no-gutters">
                                                <label class="col-sm-6 col-form-label">Days for Delivery :</label>
                                                <div class="col-sm-6 text-left">
                                                    <input type="text" name="delivery_start" value="{{$countryFreight->c_4_1_11_delivery_start ??''}}" class="form-control" style="width:35px; float:left"> <span style="width:5px; float:left; text-align:center">-</span> <input type="text" name="delivery_end" value="{{$countryFreight->c_4_1_12_delivery_end ??''}}" class="form-control" style="width:35px;">
                                                </div>
                                            </div>
                                        </div>
                                        
										<div class="col-md-12 col-sm-6">
										<div class="bottom-button mt-0 clearfix">
										{{-- <div class="float-right">
											<div class="inputBtn"><input type="submit" class="btn redBtn" value="Edit" /></div>
											<div class="inputBtn"><input type="submit" class="btn greenBtn" value="Save" /></div>
											<div class="inputBtn"><input type="submit" class="btn redBtn" value="Delete" /></div>
										</div> --}}
									</div>
										</div>
                                    </div>
                            
                            </div>
							
                        </div>
						
						<div class="main-section">
                            <div class="main-border ">
								<div class="entry-title">
									<h2>SINGLE FREIGHT DISPLAY</h2>
								</div>
								<div class="row">									
									<div class="col-md-4 col-sm-6">
										<div class="form-group row no-gutters">
											<label class="col-sm-6 col-form-label">Single Freight Charges: INR </label>
											<div class="col-sm-6">
												<input type="text" name="single_freight_charge" value="{{$countryFreight->c_4_1_13_single_freight ??''}}" class="form-control"/>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-sm-6">
										<div class="form-group row float-right">
											<label class="col col-form-label text-right">Show SINGLE FREIGHT:</label>
											<div class="col-md-2">
												<input type="checkbox" value="Y" value="{{$countryFreight->c_4_1_14_show_single_freight ??''}}" name="show_single_freight" />
											</div>
										</div>
									</div>
									<div class="col-md-5 col-sm-6">
										<div class="bottom-button mt-0  clearfix">
										<div class="float-right">
											<div class="inputBtn"><input type="submit" class="btn redBtn" value="Edit" /></div>
											<div class="inputBtn"><input type="submit" class="btn greenBtn" value="Save" /></div>
											<div class="inputBtn"><input type="submit" class="btn redBtn" value="Delete" /></div>
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
											<div class="inputBtn"><input type="button" class="btn redBtn" value="Delete Selected" /></div>
										</div>
									</div>
                                <div class="border-table text-left tableFooter font14">								  
								  
								     
									<table class="table datatable custom-table table-bordered">
										<thead>
											<tr>
											  <th scope="col" width="5%"><input class="dcb" type="checkbox" /> S.No.</th>
											  <th scope="col" width="18%">Country</th>
											  <th scope="col" width="5%">ISD Code</th>
											  <th scope="col" width="4%">Billing</th>
											  <th scope="col" width="4%">Delivery</th>
											  <th scope="col" width="4%">Priority</th>
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
                                            @foreach($countryFreights as $countryFreight)
											<tr>
											  <td><input class="dcb" type="checkbox" />{{$countryFreight->id}}</td>
											  <td>{{$countryFreight->c_4_1_2_country_name}}</td>
											  <td>{{$countryFreight->c_4_1_3_country_isd_code}}</td>
											  <td>{{$countryFreight->c_4_1_4_billing_address}}</td>
											  <td>{{$countryFreight->c_4_1_5_delivery_address}}</td>
											  <td>{{$countryFreight->c_4_1_6_priority_display}}</td>
											  <td>{{$countryFreight->c_4_1_7_customs_clearance}}</td>
											  <td>{{$countryFreight->c_4_1_8_patient_use}}</td>
											  <td>{{$countryFreight->c_4_1_9_study_use}}</td>
                                              <td>{{$countryFreight->c_4_1_10_dif_freight_chg_inr}}</td>
											  <td bgcolor="#B9B9B9">{{$countryFreight->c_4_1_13_single_freight}}</td>
											  <td>{{$countryFreight->c_4_1_11_delivery_start}} - {{$countryFreight->c_4_1_12_delivery_end}}</td>
											  <td class=""><a href="{{route('aadhya.country_freight.edit',$countryFreight->id)}}" class="darkblueTxt">Edit</a>
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