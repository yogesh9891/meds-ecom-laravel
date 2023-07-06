@extends('layouts.backend')
@section('before_body')

<style type="text/css">
	.delete-image-cross {
		position: relative;
bottom: 30px;
left: -23px;
cursor:pointer;
	}
</style>
@endsection
@section('content')

<div class="page-define">
                <div class="container-fluid">
                    <div class="row justify-content-between">
                        <div class="col">
                            <h1>Meds Prices</h1>
                            <span class="shorttxt">Data will show on Medication</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-panel">
                <div class="container-fluid">
                    <div class="panel-container">
                        <div class="main-section">
                            <form action="#" method="post">
                                <div class="main-border">
                                    <div class="entry-title">
                                        <h2>Select Medicine to Add Products & Prices</h2>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9 col-sm-6">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Search by Generic No. / Generic Name</label>
                                                <div class="col-sm-8">  
												<input type="text" placeholder="Search by Generic No. / Generic Name" name="search_by_no" value="{{$name??''}}"  id="search_by_no" class="form-control"><span href="" class="cross search-cross" onclick="clearForm(this)">X</span>
												<input type="hidden" name="generic_form3" id="generic_form_hidden3" value="{{old('generic_form',route('aadhya.2-meds-price.store'))}}">
												<div id="generic_result3"></div>
												</div>   
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="{{route('aadhya.2-meds-price')}}" style="color:red">Refresh</a>
                                        </div>
                                    </div>
                               </div>
                            </form>
                        </div>
                        

						
                        <div class="main-section">                                                          
						  <div class="main-border">
							<div class="entry-title">
								<h2>ADD / EDIT PRODUCTS</h2>
							</div>
							<small class="mb-3 d-block">DBT: 2-1-Meds-Products</small>
							<div class="row">	
								<div class="col-sm-12">
								    @if (Session::has('success11'))
                                    <div class="container">
                                   <div class="alert alert-success">
                                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ Session::get('success11') }}
                                    </div>
                                    </div>
                                   @endif
						            @if (Session::has('error11'))
                                    <div class="container">
                                    <div class="alert alert-danger">
                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                     {{ Session::get('error11') }}
                                    </div>
                                    </div>
                                     @endif
								  <form action="{{route('aadhya.2-meds-product.store')}}" id="product_form" method="post">
							<input type="hidden" name="product_form" id="product_form_hidden" value="{{old('product_form',route('aadhya.2-meds-product.store'))}}">
                                    
									  @csrf
									<div class="form-group row">                                               
										<div class="col-sm-2">
										   <label class="col-form-label">Product No.</label>
										   <input type="text" name="product_no" value="{{old('product_no')}}" class="form-control"  placeholder="" style="width:120px;" required="">
										   @error('product_no') <div class="text-danger">{{ $message }}</div>@enderror
										   <input type="hidden" name="c_2_1_1_generic_id_no" id="c_2_1_1_generic_id_no" value="{{old('c_2_1_1_generic_id_no',$meds_info?$meds_info->c_1_1_1_generic_id_no:'')}}"  >
										</div>
										
										<div class="col-sm-3">
										   <label class="col-form-label">Short Strength ID</label>
										   <input type="text" name="short_strength" value="{{old('short_strength')}}" class="form-control" required="">
										   @error('short_strength') <div class="text-danger">{{ $message }}</div>@enderror
										</div>
										<div class="col-sm-1">
										   <label class="col-form-label">Display at</label>
										   <input type="text" name="display_at" value="{{old('display_at')}}" class="form-control" min="0" required="">
										   @error('display_at') <div class="text-danger">{{ $message }}</div>@enderror
										</div>
										<div class="col-sm-6">
										   <label class="col-form-label">Product Title Name in H2 Tag</label>
										   <input type="text" name="product_title" value="{{old('product_title')}}" class="form-control" required="">
										   @error('product_title') <div class="text-danger">{{ $message }}</div>@enderror
										</div>
										<div class="col-sm-12">
										   <label class="col-form-label">Medication Use</label>
										   <input type="text" name="medication_use" value="{{old('medication_use')}}" class="form-control" placeholder="">
										   @error('medication_use') <div class="text-danger">{{ $message }}</div>@enderror
										</div>
										<div class="text-center mt-4 col-sm-12">
									        <div class="inputBtn"><input type="submit" class="btn greenBtn" value="Update Existing" /></div>
									        <div class="inputBtn"><a href="#" class="btn redBtn" id="deleteProduct"  />Delete</a></div>
									        <div class="inputBtn"><input type="submit" name="btn_name" class="btn greenBtn" value="Add as New" /></div>
								        </div>
									</div>
                                   </form>
								</div>
							 </div> 

							<div class="row">
								<div class="col-md-12">
									<table class="table font14">
										<thead>
											<tr>
												<th  class="border-0 p-0">Display at</th>
												<th  class="border-0 p-0">Product No.</th>
												<th  class="border-0 p-0">Strength</th>
												<th  class="border-0 p-0">H2 Title</th>
												
											</tr>
										</thead>
										<tbody id="meds-table-info">
											
											@foreach($medsProduct as $meds_product)

											
											<tr  onclick="updateMedsProduct(this)" class="border-0 p-0 hover-item" data-id="{{$meds_product->id}}">
											<td  class="border-0 p-0 text-center">{{$meds_product->c_2_1_4_display_at}}</td>
											<td  class="border-0 p-0 text-center" desc="{{$meds_product->c_2_1_6_med_use}}">{{$meds_product->c_2_1_2_product_no}}</td>
											<td  class="border-0 p-0">{{$meds_product->c_2_1_3_short_strength_id}}</td>
											<td  class="border-0 p-0">{{$meds_product->c_2_1_5_product_name_h2}}</td>
											</tr>

											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						  </div>
                        </div>	



						<div class="main-section double-heading">
						   <form action="{{route('aadhya.2-meds-price.store')}}" method="post" id="generic_price_form" enctype="multipart/form-data">

							<input type="hidden" name="generic_price_form" id="generic_price_form_hidden" value="{{old('generic_price_form',route('aadhya.2-meds-price.store'))}}">

							<input type="hidden" name="" id="med_price_id" value="">
						   	@csrf
                            <div class="main-border ">
                                <div class="row">
									<div class="col-md-12">
										<div class="entry-title">
											<h2>ADD / EDIT BRAND / GENERIC DETAILS</h2>
									@if (Session::has('success33'))
                                    <div class="container">
                                   <div class="alert alert-success">
                                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {{ Session::get('success33') }}
                                    </div>
                                    </div>
                                   @endif
						            @if (Session::has('error33'))
                                    <div class="container">
                                    <div class="alert alert-danger">
                                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                     {{ Session::get('error33') }}
                                    </div>
                                    </div>
                                     @endif
										</div>
										<small class="d-block mb-3">DBT: 2-2-Meds-Prices</small>
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
                            <div class="form-group row">
                                 <div class="col-sm-2"><label>Product No.</label>
								 <input type="text"  name="product_no2" class="form-control bg-gray" id="product_no_id" readonly="">
								        
								 </div>

								 <input type="hidden" name="c_2_2_2_product_no" >
                                 <div class="col-sm-5"><label>Product Title Name in H2 Tag</label>
								 <input type="text" name="product_title_name" id="product_title_name" class="form-control bg-gray" readonly="">
								</div>

                                 <div class="col-sm-3"><label>Short Strength ID</label>
								 <input type="text" name="short_strength_id"  id="short_strength_id" class="form-control bg-gray" readonly="">
								</div>
                                 <div class="col-sm-2"><label>Displayed at</label>
								 <input type="text" name="displayed_at"  class="form-control bg-gray" id="displayed_at" readonly="">
								</div>
                            </div>
								
								<div class="form-group row">
                                    <div class="col-sm-6 col-form-label">
                                      <div class="row">
                                       <div class="col-sm-12">
                                          <div class="row">
                                            <div class="col-sm-3 blueTxt"><strong>GENERIC MED. SKU:</strong></br>

                                            	Activate <input type="checkbox" name="" id="generic_form"> to fill
                                            </div>
                                            <div class="col-sm-3">
                                            	<input type="text" name="c_2_2_3_g_sku"  id="generic_sku"  class="form-control bg-gray" required>
                                            	  <input type="hidden" name="c_2_2_1_generic_id_no" id="c_2_1_1_generic_id_no2" value="{{old('c_2_2_1_generic_id_no')}}" >
											  </div>
									
											<div class="col-sm-3">Display: <br><input name="generic_display" type="radio" class="generic" value="S"   id="generic_display-S"> Show <input name="generic_display" id="generic_display-H"  class="generic" type="radio"  value="H" required=""> Hide </div>
											@error('generic_display') <div class="text-danger">{{ $message }}</div>@enderror
													<div class="col-sm-3">Available: <br><input name="generic_available" class="generic" type="radio"   value="A" id="generic_available-A"> A <input name="generic_available" type="radio" value="NA"  class="generic"  id="generic_available-NA"> NA </div>
											@error('generic_available') <div class="text-danger">{{ $message }}</div>@enderror
                                          </div>
                                        </div>  
                                      </div>
                                    </div>
                                    <div class="col-sm-6 col-form-label">
                                      <div class="row">
                                       <div class="col-sm-12">
                                          <div class="row">
                                            <div class="col-sm-3 darkblueTxt"><strong for="branded_form_check_box">BRAND MED. SKU: </strong><br>
                                            	Activate <input type="checkbox" name="brand_check" id="branded_form_check_box"> to fill

                                            </div>
                                             <div class="col-sm-3">
                                            	<input type="text" name="c_2_2_25_b_sku"  id="branded_sku"  class="form-control bg-gray">
											 
											 </div>
										
											<div class="col-sm-3">Display: <br><input name="branded_display" type="radio" class="branded"  value="S"  id="branded_display-S"> Show <input name="branded_display" type="radio"  value="H"  class="branded"  id="branded_display-H"> Hide </div>
											@error('branded_display') <div class="text-danger">{{ $message }}</div>@enderror
												<div class="col-sm-3">Available: <br><input name="branded_available"  class="branded" type="radio"  value="A"  id="branded_available-A"> A <input name="branded_available" type="radio" value="NA"    class="branded" id="branded_available-NA"> NA </div>
											@error('branded_available') <div class="text-danger">{{ $message }}</div>@enderror
                                          </div>
                                        </div>  
                                      </div>
                                    </div>
                                </div>
                                
                                    <div class="form-group row">
									  <div class="col-md-6" >
									  	<div style="display: none;" id="generic_form_div">
									     <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">N/A Message</label>                                            
										   </div>
										   <div class="col-sm-9">
										     {{-- <input name="generic_na_message" type="text" value="{{old('generic_na_message')}}" class="form-control"> --}}
										     <select class="form-control" name="generic_na_message">
										     	<option value="0" selected="">Select Message Image</option>
										     	<option value="coming_soon">Coming Soon</option>
										     	<option value="out_of_stock">Sold Out</option>
										     </select>
											 @error('generic_na_message') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Name in H3 Tag <font color="red">*</font></label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input name="generic_name_h3_tag" type="text" value="{{old('generic_name_h3_tag')}}" class="form-control generic" >
											 @error('generic_name_h3_tag') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Mfd. by <input name="generic_mfd_url" id="generic_id_who_certificate" type="checkbox"  /> WHO <font color="red">*</font></label> 
											@error('generic_mfd_url') <div class="text-danger">{{ $message }}</div>@enderror                                           
										   </div>
										   <div class="col-sm-9">
										     <input name="generic_who_certificate"  type="text" id="generic_who_certificate_input" class="form-control generic" value="WHOcGMP Certified" >
											 @error('generic_who_certificate') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Mfr’s URL WHO <font color="red">*</font></label> 
											@error('generic_mfr_url') <div class="text-danger">{{ $message }}</div>@enderror                                           
										   </div>
										   <div class="col-sm-9">
										     <input type="text" name="generic_who_url" value="https://www.who.int/news-room/questions-and-answers/item/medicines-good-manufacturing-processes" class="form-control generic" placeholder="" >
												@error('generic_who_url') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Generic Drug for<font color="red">*</font></label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" name="generic_drug_for" value="{{old('generic_drug')}}" class="form-control generic"  >
											 @error('generic_drug_for') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Shipped from <font color="red">*</font></label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" name="generic_shipped_from" value="{{old('shipped_from')}}" class="form-control generic" >
											 @error('generic_shipped_from') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Select ICON img<br>{{-- /img-me/  --}}55x55</label>                                           
										   </div> 
										   <div class="col-sm-9">
										       
										       <textarea class="form-control" name="generic_select_icon"></textarea>
										    {{--<input  name="generic_select_icon" type="text" value="{{old('select_icon')}}" class="form-control-file form-control" style="font-size: 13px;">--}}
										     <span href="" class="cross 	delete-image-cross" data-type="generic_select_icon" data-tag="gen_image" onclick="deleteImage(this)">X</span>
											 @error('generic_select_icon') <div class="text-danger">{{ $message }}</div>@enderror
										
											 <font class="font14 darkblueTxt" ><a class="bluehover" style="color:#00000073;margin-left: -22px;" id="gen_image" target="_blank" href="javascript:void(0);">No Image Uploaded </a></font>
											 <img src="#"  style="display: none;" height="100px" width="100px"/>
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">ICON Img Alt Tag</label>                                            
										   </div> 
										   <div class="col-sm-9">
										   
										     <input type="text" name="generic_icon_alt_tag" value="{{old('icon_alt_tag')}}" class="form-control-file form-control" style="font-size: 13px;">
											 @error('generic_icon_alt_tag') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
										 	 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Select MEDIUM Img <br>{{-- /img-me/  --}}125x125</label>
											</div> 
										   <div class="col-sm-9">
										   			    <textarea class="form-control" name="generic_med_image"></textarea>
										     {{--<input type="text" name="generic_med_image" value="{{old('generic_med_image')}}" class="form-control-file form-control" style="font-size: 13px;">--}}
										     <span href="" class="cross delete-image-cross" data-type="generic_med_image" data-tag="gen_image5"  onclick="deleteImage(this)">X</span>
											 @error('product_title') <div class="text-danger">{{ $message }}</div>@enderror
											 <font class="font14 darkblueTxt"><a class="bluehover"  style="color:#00000073;margin-left: -22px;" id="gen_image5" target="_blank" href="javascript:void(0);">No Image Uploaded</a></font>
											 <img src="#" style="display: none;" height="100px" width="100px"/>
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">MEDIUM Img Alt Tag</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" name="generic_med_image_alt_tag" value="{{old('generic_med_image_alt_tag')}}" class="form-control">
											 @error('generic_image_alt_tag') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Select FULL Img<br>{{-- /img-me/  --}}500x500</label>
											</div> 
										   <div class="col-sm-9">
										       			    <textarea class="form-control" name="generic_select_full"></textarea>
										   {{--  <input type="text" name="generic_select_full" value="{{old('select_full')}}" class="form-control-file form-control" style="font-size: 13px;">--}}
										     <span href="" class="cross delete-image-cross" data-type="generic_select_full" data-tag="gen_image2"  onclick="deleteImage(this)">X</span>
											 @error('product_title') <div class="text-danger">{{ $message }}</div>@enderror
											 <font class="font14 darkblueTxt"><a class="bluehover"  style="color:#00000073;margin-left: -22px;" id="gen_image2" target="_blank" href="javascript:void(0);">No Image Uploaded</a></font>
											 <img src="#" style="display: none;" height="100px" width="100px"/>
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">FULL Img Alt Tag</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" name="generic_image_alt_tag" value="{{old('image_alt_tag')}}" class="form-control">
											 @error('generic_image_alt_tag') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-4">
										    <label class="col-form-label"></label>                                            
										   </div>
										   <div class="col-sm-8 blueTxt">
										     <strong>Generic Medicine Price Details</strong>
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Pack 1 Quantity <font color="red">*</font></label>
											<input type="text" name="generic_pack_1_quantity" value="{{old('pack_1_quantity')}}" class="form-control generic genric_price_total"  onkeypress="return /[0-9]/.test(event.key)">
											@error('generic_pack_1_quantity') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										   <div class="col-sm-6">
										     <label class="col-form-label">Unit(Tablets / Capsules etc) <font color="red">*</font></label>
											 <input type="text" name="generic_units_tablet" value="{{old('units_tablet')}}" class="form-control generic " placeholder="" >
											 @error('generic_units_tablet') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										   
										   <div class="col-sm-3">
										     <label class="col-form-label">INR Price / Pack <font color="red">*</font></label>
											 <input type="text" name="generic_inr_price_pack" value="{{old('inr_price_pack')}}" class="form-control generic genric_price_total"  onkeypress="return /[0-9]/.test(event.key)">
											 @error('generic_inr_price_pack') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Packs, Price (x)<br>Default 1-2-4 <font color="red">*</font></label>
										   </div>
										   <div class="col-sm-3">
										    <div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" name="generic_pack1" value="1" class="form-control generic genric_price_total" placeholder="-" ></div>
													<div class="inlinecol"><input type="text" name="generic_price1" value="2" class="form-control generic genric_price_total" placeholder="-" ></div>
													<div class="inlinecol"><input type="text" name="generic_default1" value="4" class="form-control generic genric_price_total" placeholder="-" ></div>
													
												</div>
												@error('generic_pack1') <div class="text-danger">{{ $message }}</div>@enderror
												@error('generic_price1') <div class="text-danger">{{ $message }}</div>@enderror
												@error('generic_default1') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										   <div class="col-sm-3">
										    <label class="col-form-label">Discounts %<br>Default 10-13-15<font color="red">*</font></label>
										   </div>
										   <div class="col-sm-3">
										    <div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" name="generic_discount1" value="10" class="form-control generic genric_price_total" placeholder="-" ></div>
													<div class="inlinecol"><input type="text" name="generic_discount2" value="13" class="form-control generic genric_price_total" placeholder="-" ></div>
													<div class="inlinecol"><input type="text" name="generic_discount3" value="15" class="form-control generic genric_price_total" placeholder="-" ></div>
												</div>
												@error('generic_discount1') <div class="text-danger">{{ $message }}</div>@enderror
												@error('generic_discount2') <div class="text-danger">{{ $message }}</div>@enderror
												@error('generic_discount3') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										  
										 </div>


										  <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Packs</label>
										   </div>
										   <div class="col-sm-3">
										    <div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" id="generic_pack_price_1"  readonly="" disabled=""  value="0" class="form-control " placeholder="-" ></div>
													<div class="inlinecol"><input type="text" id="generic_pack_price_2" readonly="" disabled="" value="0" class="form-control " placeholder="-" ></div> 
													<div class="inlinecol"><input type="text"  id="generic_pack_price_3"  readonly="" disabled="" value="0" class="form-control " placeholder="-" ></div>
													
												</div>
										
										   </div>
										   <div class="col-sm-3">
										    <label class="col-form-label">Net Prices (USD)</label>
										   </div>
										   <div class="col-sm-3">
										    <div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text"  id="generic_net_pack_price_1" readonly="" disabled=""  value="0" class="form-control " placeholder="-" ></div>
													<div class="inlinecol"><input type="text"  id="generic_net_pack_price_2" readonly="" disabled=""  value="0" class="form-control " placeholder="-" ></div>
													<div class="inlinecol"><input type="text"  id="generic_net_pack_price_3" readonly="" disabled=""   value="0" class="form-control " placeholder="-" ></div>
												</div>
											
										   </div>
										  
										 </div>
									  </div>
									  </div>
									  
									  
									  <div class="col-md-6" style="display: none;" id="branded_form_div">
									  <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">N/A Message</label>                                            
										   </div>
										   <div class="col-sm-9">
										     {{-- <input type="text" name="branded_n_a_message" value="{{old('branded_n_a_message')}}" class="form-control"> --}}
										     <select class="form-control" name="branded_n_a_message">
										     	<option value="0" selected="">Select Message Image</option>
										     	<option value="coming_soon">Coming Soon</option>
										     	<option value="out_of_stock">Sold Out</option>
										     </select>
											 @error('branded_n_a_message') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
									     <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Name in H3 Tag <font color="red">*</font></label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" name="branded_name_in_h3_tag" value="{{old('branded_name_in_h3_tag')}}" class="form-control branded"  
										     >
											 @error('producbranded_name_in_h3_tagt_title') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Mfd. by <input type="checkbox" name="branded_mfd_by_who" id="branded_id_mfd_by_who" /> WHO <font color="red">*</font></label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" name="branded_mfd_by_who_input"  value="{{old('branded_mfd_by_who_input')}}" class="form-control branded" >
											 @error('branded_mfd_by_who_input') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Mfr’s URL WHO <font color="red">*</font></label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" name="branded_mfr_url_who_input"  value="{{old('branded_mfr_url_who_input')}}" class="form-control branded" >
											 @error('branded_mfr_url_who_input') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Brand Drug for <font color="red">*</font></label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" name="branded_drug_for" value="{{old('branded_drug_for')}}" class="form-control branded" >
											 @error('branded_drug_for') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Shipped from <font color="red">*</font></label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" name="branded_shipped_from" value="{{old('branded_shipped_from')}}" class="form-control branded" >
											 @error('branded_shipped_from') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Select ICON img<br>{{-- /img-me/  --}}55x55</label>
										   </div> 
										   <div class="col-sm-9">
										       			    <textarea class="form-control" name="branded_meds_meds_icon"></textarea>
										    {{-- <input type="text" name="branded_meds_meds_icon" value="{{old('branded_meds_meds_icon')}}" class="form-control-file form-control" style="font-size: 13px;">--}}
										     <span href=""  class="cross delete-image-cross" data-type="branded_meds_meds_icon" data-tag="gen_image3" onclick="deleteImage(this)">X</span>
											 @error('branded_meds_meds_icon') <div class="text-danger">{{ $message }}</div>@enderror
											 <font class="font14 darkblueTxt"><a class="bluehover" style="color:#00000073;margin-left: -22px;" target="_blank" href="javascript:void(0);" id="gen_image3">No Image Uploaded</a></font>
											  <img src="#"  style="display: none;" height="100px" width="100px"/>
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">ICON Img Alt Tag</label>                                            
										   </div> 
										   <div class="col-sm-9">
										     <input type="text" name="branded_icon_alt_tag" value="{{old('branded_icon_alt_tag')}}" class="form-control-file form-control" style="font-size: 13px;">
											 @error('branded_icon_alt_tag') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
										 	 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Select MEDIUM Img  <br>{{-- /img-me/  --}}125x125</label>
											</div> 
										   <div class="col-sm-9">
										       	    <textarea class="form-control" name="branded_med_image" row="3"></textarea>
										     {{--<input type="text" name="branded_med_image" value="{{old('branded_med_image')}}" class="form-control-file form-control" style="font-size: 13px;">--}}
										     <span href="" class="cross 	delete-image-cross" data-type="branded_med_image" data-tag="gen_image6"  onclick="deleteImage(this)">X</span>
											 @error('branded_meds_meds_full') <div class="text-danger">{{ $message }}</div>@enderror
											 <font class="font14 darkblueTxt"><a class="bluehover" style="color:#00000073;margin-left: -22px;" target="_blank" href="javascript:void(0);"  id="gen_image6">No Image Uploaded</a></font>
											  <img src="#" style="display: none;" height="100px" width="100px"/>
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">MEDIUM Img Alt Tag</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" name="branded_med_image_alt_tag" value="{{old('branded_med_image_alt_tag')}}" class="form-control">

											 @error('branded_med_image_alt_tag') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Select FULL Img <br>{{-- /img-me/  --}}500x500</label>
											</div> 
										   <div class="col-sm-9">
										       	    <textarea class="form-control" name="branded_meds_meds_full"></textarea>
										    {{-- <input type="text" name="branded_meds_meds_full" value="{{old('branded_meds_meds_full')}}" class="form-control-file form-control" style="font-size: 13px;">--}}
										     <span href="" class="cross 	delete-image-cross" data-type="branded_meds_meds_full"  data-tag="gen_image4"  onclick="deleteImage(this)">X</span>
											 @error('branded_meds_meds_full') <div class="text-danger">{{ $message }}</div>@enderror
											 <font class="font14 darkblueTxt"><a class="bluehover" style="color:#00000073;margin-left: -22px;" target="_blank" href="javascript:void(0);"  id="gen_image4">No Image Uploaded</a></font>
											  <img src="#" style="display: none;" height="100px" width="100px"/>
										   </div>
										 </div>
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">FULL Img Alt Tag</label>                                            
										   </div>
										   <div class="col-sm-9">
										     <input type="text" name="branded_image_alt_tag" value="{{old('branded_image_alt_tag')}}" class="form-control">

											 @error('branded_image_alt_tag') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-4">
										    <label class="col-form-label"></label>                                            
										   </div>
										   <div class="col-sm-8 darkblueTxt">
										     <strong>Branded Medicine Price Details</strong>
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Pack 1 Quantity <font color="red">*</font></label>
											<input type="text" name="branded_pack_1_quantity" value="{{old('branded_pack_1_quantity')}}" class="form-control branded branded_price_total"  onkeypress="return /[0-9]/.test(event.key)">  
											@error('branded_pack_1_quantity') <div class="text-danger">{{ $message }}</div>@enderror                                          
										   </div>
										   <div class="col-sm-6">
										     <label class="col-form-label">Unit(Tablets / Capsules etc) <font color="red">*</font></label>
											 <input type="text" name="branded_unit_tablets_2" value="{{old('branded_unit_tablets_2')}}" class="form-control branded" placeholder="" >
											 @error('branded_unit_tablets_2') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										   <div class="col-sm-3">
										     <label class="col-form-label">INR Price / Pack <font color="red">*</font></label>
											 <input type="text" name="branded_inr_price_pack" value="{{old('branded_inr_price_pack')}}" class="form-control branded branded_price_total"   onkeypress="return /[0-9]/.test(event.key)">
											 @error('branded_inr_price_pack') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										 </div>
										 
										 <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Packs, Price (x)<br>Default 1-2-4 <font color="red">*</font></label>
										   </div>
										   <div class="col-sm-3">
										    <div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" name="branded_pack" value="1" class="form-control branded branded_price_total"  placeholder="-" ></div>
													<div class="inlinecol"><input type="text" name="branded_price" value="2" class="form-control branded branded_price_total" placeholder="-" ></div>
													<div class="inlinecol"><input type="text" name="branded_default" value="4" class="form-control branded branded_price_total" placeholder="-" ></div>
												</div>
												@error('branded_pack2') <div class="text-danger">{{ $message }}</div>@enderror
												@error('branded_price2') <div class="text-danger">{{ $message }}</div>@enderror
												@error('branded_default2') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>
										   <div class="col-sm-3">
										    <label class="col-form-label">Discounts %<br>Default 10-12-13 <font color="red">*</font></label>
										   </div>
										   <div class="col-sm-3">
										    <div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" name="branded_discount1" value="10" class="form-control branded branded_price_total" placeholder="-" required></div>
													<div class="inlinecol"><input type="text" name="branded_discount2" value="12" class="form-control branded branded_price_total" placeholder="-" required></div>
													<div class="inlinecol"><input type="text" name="branded_discount3" value="13" class="form-control branded branded_price_total" placeholder="-" required></div>
												</div>
												@error('branded_discount1') <div class="text-danger">{{ $message }}</div>@enderror
												@error('branded_discount2') <div class="text-danger">{{ $message }}</div>@enderror
													@error('branded_discount3') <div class="text-danger">{{ $message }}</div>@enderror
										   </div>	

                                           									   
										 </div>
										   <div class="row form-group">
										   <div class="col-sm-3">
										    <label class="col-form-label">Packs</label>
										   </div>
										   <div class="col-sm-3">
										    <div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" id="branded_pack_price_1" readonly="" disabled=""  value="0" class="form-control " placeholder="-" ></div>
													<div class="inlinecol"><input type="text"  id="branded_pack_price_2" readonly="" disabled="" value="0" class="form-control " placeholder="-" ></div>
													<div class="inlinecol"><input type="text" id="branded_pack_price_3" readonly="" disabled="" value="0" class="form-control " placeholder="-" ></div>
													
												</div>
										
										   </div>
										   <div class="col-sm-3">
										    <label class="col-form-label">Net Prices (USD)</label>
										   </div>
										   <div class="col-sm-3">
										    <div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" id="branded_net_pack_price_1"  readonly="" disabled="" value="0" class="form-control " placeholder="-" ></div>
													<div class="inlinecol"><input type="text"  id="branded_net_pack_price_2" readonly="" disabled="" value="0" class="form-control " placeholder="-" ></div>
													<div class="inlinecol"><input type="text" id="branded_net_pack_price_3"  readonly="" disabled="" value="0" class="form-control " placeholder="-" ></div>
												</div>
											
										   </div>
										  
										 </div>
									  </div>
									  <div class="col-md-12">
									  <div class="bottom-button clearfix">
										<div class="text-center">
											<div class="inputBtn" style="float:left"><a href="#" class="btn greenBtn" id="check_front_end" value=""  target="_blank" />CHECK Frontend Prices</a></div>
											<div class="inputBtn"><input type="submit" class="btn greenBtn" value="SAVE" style="float:right"/></div>
											{{-- <div class="inputBtn"><input type="submit" class="btn redBtn" value="Delete" style="float:right"/></div> --}}
										</div>
									</div>
									</div>
                                        
                                    </div>
                                
								</div>
							</form>
                        </div>
						



                    <div class="main-section double-heading">
						<form action="{{route('aadhya.2-meds-forex.store')}}" method="post">
							@csrf
                            <div class="main-border ">
                                <div class="row">
									<div class="col-md-12">
										<div class="entry-title right-heading">
											<h2 >Forex Rates as on {{$medsForex->updated_at->format('d-M-Y')}}</h2>
										</div>
										<small class="d-block mb-3">DBT: 2-3-Forex-Rates</small>
									</div>
                                </div>
                                <div class="form-group row edit-forex-rates">
									<div class="col-md-12">
										<div class="forexrate align-items-center">
											<div class="innerrate"><strong>Forex Rates:<br>per USD 1</strong></div>
											<div class="innerrate"><label>FX 1</label>
												<div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" name="sign_1" class="form-control" placeholder="INR" value="{{$medsForex->c_2_3_1_fx_sign_1}}"></div>
													<div class="inlinecol"><input type="text" name="rate_1" class="form-control" placeholder=" 70.000000000" value="{{$medsForex->c_2_3_2_fx_rate_1}}"></div>
												</div>
												</div>
											<div class="innerrate"><label>FX 2</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" name="sign_2" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_3_fx_sign_2}}"></div>
													<div class="inlinecol"><input type="text" name="rate_2" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_4_fx_rate_2}}"></div>
												</div></div>
											<div class="innerrate"><label>FX 3</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" name="sign_3" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_5_fx_sign_3}}"></div>
													<div class="inlinecol"><input type="text" name="rate_3" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_6_fx_rate_3}}"></div>
												</div></div>
											<div class="innerrate"><label>FX 4</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" name="sign_4" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_7_fx_sign_4}}"></div>
													<div class="inlinecol"><input type="text" name="rate_4" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_8_fx_rate_4}}"></div>
												</div></div>
											<div class="innerrate"><label>FX 5</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" name="sign_5" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_9_fx_sign_5}}"></div>
													<div class="inlinecol"><input type="text" name="rate_5" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_10_fx_rate_5}}"></div>
												</div></div>
											<div class="innerrate"><label>FX 6</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" name="sign_6" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_11_fx_sign_6}}"></div>
													<div class="inlinecol"><input type="text" name="rate_6" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_12_fx_rate_6}}"></div>
												</div></div>
											<div class="innerrate"><label>FX 7</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" name="sign_7" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_13_fx_sign_7}}"></div>
													<div class="inlinecol"><input type="text" name="rate_7" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_14_fx_rate_7}}"></div>
												</div></div>
										</div>
										<div class="forexrate align-items-center">
											<div class="innerrate"><label>FX 8</label>
												<div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" name="sign_8" class="form-control" placeholder="" value="{{$medsForex->c_2_3_15_fx_sign_8}}"></div>
													<div class="inlinecol"><input type="text" name="rate_8" class="form-control" placeholder="" value="{{$medsForex->c_2_3_16_fx_rate_8}}"></div>
												</div>
												</div>
											<div class="innerrate"><label>FX 9</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" name="sign_9" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_17_fx_sign_9}}"></div>
													<div class="inlinecol"><input type="text" name="rate_9" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_18_fx_rate_9}}"></div>
												</div></div>
											<div class="innerrate"><label>FX 10</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" name="sign_10" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_19_fx_sign_10}}"></div>
													<div class="inlinecol"><input type="text" name="rate_10" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_20_fx_rate_10}}"></div>
												</div></div>
											<div class="innerrate"><label>FX 11</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" name="sign_11" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_21_fx_sign_11}}"></div>
													<div class="inlinecol"><input type="text" name="rate_11" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_22_fx_rate_11}}"></div>
												</div></div>
											<div class="innerrate"><label>FX 12</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" name="sign_12" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_23_fx_sign_12}}"></div>
													<div class="inlinecol"><input type="text" name="rate_12" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_24_fx_rate_12}}"></div>
												</div></div>
											<div class="innerrate"><label>FX 13</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" name="sign_13" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_25_fx_sign_13}}"></div>
													<div class="inlinecol"><input type="text" name="rate_13" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_26_fx_rate_13}}"></div>
												</div></div>
											<div class="innerrate"><label>FX 14</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" name="sign_14" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_27_fx_sign_14}}"></div>
													<div class="inlinecol"><input type="text" name="rate_14" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_28_fx_rate_14}}"></div>
												</div>
											</div>
											<div class="innerrate"><label>FX 15</label><div class="inlinecolrow text-center bqf">
													<div class="inlinecol"><input type="text" name="sign_15" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_28_fx_sign_15}}"></div>
													<div class="inlinecol"><input type="text" name="rate_15" class="form-control" placeholder="-" value="{{$medsForex->c_2_3_28_fx_rate_15}}"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
                                <div class="bottom-button clearfix">
								<div class="text-right">
									<div class="inputBtn"><input type="submit" class="btn greenBtn" value="Save" /></div>
								</div>
							</div>
								</div>
						</form>
                    </div>
						

                    </div>
                </div>

@endsection
@section('afterScript')
<script>

	let med_info_action1= $('#generic_form_hidden3').val();							
    $('#generic_form3').attr('action',med_info_action1)


    let generic_price_form_hidden= $('#generic_price_form_hidden').val();							
    $('#generic_price_form').attr('action',generic_price_form_hidden)		
    
    let product_form_hidden= $('#product_form_hidden').val();							
    $('#product_form').attr('action',product_form_hidden)						
	

	$('#search_by_no').keyup(function(e){
		let genrice_no = $(this).val();
		clearForm(e);
		$.ajax({
                    type: "get",
                    url: "{{route('aadhya.1-meds-info.search')}}",
                    data: {	
                        genrice_no: genrice_no
                    },
                    success: function (data) {
						$('#generic_result3').html(data);
                    }
                });
				
	});
	
	function deleteImage(e){
	    let name = $(e).attr('data-type');
	    let tag = $(e).attr('data-tag');
	    $('#'+tag).attr('href','#');
	    $('#'+tag).text('No Image Uploaded');
	    $('textarea[name='+name+']').val('');
	}

function clearForm(e){
if($(e).hasClass('search-cross')){
$('#search_by_no').val('');

}
$('.generic').attr('required', false); 
$('.branded').attr('required', false); 

 $("#generic_form").prop('checked', false);
 $('#generic_form_div').hide(); 
  $("#branded_form_check_box").prop('checked', false);
  $('input[type="radio"]').prop('checked', false);
  $('.generic').attr('required', false); 
	$('.branded').attr('required', false);
$('#branded_form_div').hide(); 
$('input[name="product_no"]').val('');
$('input[type="number"]').val('');
$('textarea').text('');
$('#meds-table-info').html('')
$('#product_no_id').html('')

$('input[name="product_no"]').val('');
$('input[name="short_strength"]').val('');
$('input[name="display_at"]').val('');
          $('#product_no_id').val('')	
$('input[name="product_title"]').val('');
$('input[name="medication_use"]').val('');
let product_action = "{{route('aadhya.2-meds-product.store')}}";
								$('#product_form').attr('action',product_action)
								$('#product_form_hidden').val(product_action)
								$('#deleteProduct').attr('href','#')

                    		$('#product_title_name').val('');
                    		$('#short_strength_id').val('');
                    		$('#displayed_at').val('');
                    		$('#generic_sku').val('');
                    		$('#branded_sku').val('');
                    		$('input[name="c_2_2_2_product_no"]').val('')
                    		let image_path = '{{asset('/img-me')}}';
                        
                       
                        let  front_url = "{{url('/')}}";
                        $('#check_front_end').attr('href','#')
                    
                    		
                    			let action23 = "{{route('aadhya.2-meds-price.store')}}";
								$('#generic_price_form').attr('action',action23)
								$('#generic_price_form_hidden').val(action23)	

                                              
                    		    
                    			$('select[name="generic_na_message"]').parent().show();
                    			$('input[name="generic_name_h3_tag"]').val('');
                    			$('input[name="generic_who_certificate"]').val('');
                    			$('input[name="generic_who_url"]').val('');
                    			$('input[name="generic_drug_for"]').val('');
                    			$('input[name="generic_shipped_from"]').val('');
                    			
                    			
                    			$('#gen_image').attr('href','#');
                    			$('#gen_image').text('No Image uploaded');
                    			$('input[name="generic_select_icon"]').val('')
                    		  
                    			$('input[name="generic_icon_alt_tag"]').val('')
                      
                    			$('#gen_image2').attr('href','#');
                    			$('#gen_image2').text('No Image uploaded');
							    	$('#gen_image5').attr('href','#');
                    			$('#gen_image5').text('No Image uploaded');
                    				$('#gen_image6').attr('href','#');
                    			$('#gen_image6').text('No Image uploaded');
                    			$('input[name="generic_image_alt_tag"]').val('');
                    			$('input[name="generic_pack_1_quantity"]').val('');
                    			$('input[name="generic_units_tablet"]').val('');
                    			$('input[name="generic_inr_price_pack"]').val('');
                    			$('input[name="generic_pack1"]').val('1');
                    			$('input[name="generic_price1"]').val('2');
                    			$('input[name="generic_default1"]').val('4');
                    			$('input[name="generic_discount1"]').val('10');
                    			$('input[name="generic_discount2"]').val('13');
                    			$('input[name="generic_discount3"]').val('15');
                                
                                
                                // $('input[name="branded_available"]').val('');
                                // $('input[name="branded_display"]').val('');
                    			$('select[name="branded_n_a_message"]').parent().show();
                    			$('input[name="branded_name_in_h3_tag"]').val('');
                    			$('input[name="branded_mfd_by_who_input"]').val('');
                    			$('input[name="branded_mfr_url_who_input"]').val('');
                    			$('input[name="branded_drug_for"]').val('');
                    			$('input[name="branded_shipped_from"]').val('');
                    			
								
                    			$('#gen_image3').attr('href','#');
                    			$('#gen_image3').text('No Image uploaded');
                    			
                    			$('input[name="branded_icon_alt_tag"]').val('')
									
                    			$('#gen_image4').attr('href','#');
                    			$('#gen_image4').text('No Image uploaded');
								
                    			$('input[name="branded_image_alt_tag"]').val('');
                    			$('input[name="branded_pack_1_quantity"]').val('');
                    			$('input[name="branded_unit_tablets_2"]').val('');
                    			$('input[name="branded_inr_price_pack"]').val('');
                    			$('input[name="branded_pack"]').val('1');
                    			$('input[name="branded_price"]').val('2');
                    			$('input[name="branded_default"]').val('4');
                    			$('input[name="branded_discount1"]').val('10');
                    			$('input[name="branded_discount2"]').val('12');
                    			$('input[name="branded_discount3"]').val('13');

	$('#c_2_1_1_generic_id_no').val('');
	$('#c_2_1_1_generic_id_no2').val('');
$('.med_heading').text('911 – MEDICATION');
// if($(e).hasClass('search-cross')){
// for (instance in CKEDITOR.instances)
// {
//     CKEDITOR.instances[instance].updateElement();
// }
// CKEDITOR.instances.editor4.setData(''); 
// CKEDITOR.instances.editor2.setData(''); 
// }
};

	// $('#product_no_id').change(function(e){
	// 	let id = $(this).val();
	// 	if(id){

	// 	$.ajax({
 //                    type: "get",
 //                    url: "{{url('aadhya/2-meds-product-show')}}" + "/" +id,
 //                    success: function (data) {
 //                    	let product = data;
 //                    	if(data){
 //                    		$('#product_title_name').val(product.c_2_1_5_product_name_h2);
 //                    		$('#short_strength_id').val(product.c_2_1_3_short_strength_id);
 //                    		$('#displayed_at').val(product.c_2_1_4_display_at);
 //                    		$('#generic_sku').val(product.c_2_1_2_product_no+ 'G');
 //                    		$('#branded_sku').val(product.c_2_1_2_product_no+ 'B');
 //                    		$('input[name="c_2_2_2_product_no"]').val(product.c_2_1_2_product_no)
 //                    		let image_path = '{{asset('/img-me')}}';
 //                    		if(product.meds_price){
 //                    			let action23 = "{{url('aadhya/2-meds-price/upadate')}}" +"/"+ product.meds_price.id;
	// 							$('#generic_price_form').attr('action',action23)
	// 							$('#generic_price_form_hidden').val(action23)	

 //                                // $('input[name="generic_available"]').val(product.meds_price.c_2_2_4_g_available);
 //                        	    // $('input[name="generic_available"][value="' + product.meds_price.c_2_2_4_g_available + '"]');
                                
 //                                console.log(product.meds_price.c_2_2_4_g_available)
 //                    		        $("input[name=generic_available][value=" +  product.meds_price.c_2_2_4_g_available + "]").prop('checked', true);
 //                                $('input[name="generic_display"]').val(product.meds_price.c_2_2_5_g_display);
 //                    			$('input[name="generic_na_message"]').val(product.meds_price.c_2_2_6_g_na_message);
 //                    			$('input[name="generic_name_h3_tag"]').val(product.meds_price.c_2_2_7_g_name_in_h3_tag);
 //                    			$('input[name="generic_who_certificate"]').val(product.meds_price.c_2_2_8_g_manufactured_by);
 //                    			$('input[name="generic_who_url"]').val(product.meds_price.c_2_2_9_g_mfr_url);
 //                    			$('input[name="generic_drug_for"]').val(product.meds_price.c_2_2_10_g_drug_for);
 //                    			$('input[name="generic_shipped_from"]').val(product.meds_price.c_2_2_11_g_shipped_from);
 //                    			if(product.meds_price.c_2_2_12_g_icon_image){
                    			
 //                    			$('#gen_image').attr('href',image_path+'/'+product.meds_price.c_2_2_12_g_icon_image);
 //                    			$('#gen_image').text(image_path+'/'+product.meds_price.c_2_2_12_g_icon_image);
 //                    		  }
 //                    			$('input[name="generic_icon_alt_tag"]').val(product.meds_price.c_2_2_13_g_icon_i_alt_tag);
	// 							if(product.meds_price.c_2_2_14_g_full_image){
                      
 //                    			$('#gen_image2').attr('href',image_path+'/'+product.meds_price.c_2_2_14_g_full_image);
 //                    			$('#gen_image2').text(image_path+'/'+product.meds_price.c_2_2_14_g_full_image);
	// 						  }
 //                    			$('input[name="generic_image_alt_tag"]').val(product.meds_price.c_2_2_15_g_full_i_alt_tag);
 //                    			$('input[name="generic_pack_1_quantity"]').val(product.meds_price.c_2_2_16_g_pack_1_qty);
 //                    			$('input[name="generic_units_tablet"]').val(product.meds_price.c_2_2_17_g_unit);
 //                    			$('input[name="generic_inr_price_pack"]').val(product.meds_price.c_2_2_18_g_pack_1_inr_price);
 //                    			$('input[name="generic_pack1"]').val(product.meds_price.c_2_2_19_g_pp_x_1);
 //                    			$('input[name="generic_price1"]').val(product.meds_price.c_2_2_20_g_pp_x_2);
 //                    			$('input[name="generic_default1"]').val(product.meds_price.c_2_2_21_g_pp_x_3);
 //                    			$('input[name="generic_discount1"]').val(product.meds_price.c_2_2_22_g_disc_1);
 //                    			$('input[name="generic_discount2"]').val(product.meds_price.c_2_2_23_g_disc_2);
 //                    			$('input[name="generic_discount3"]').val(product.meds_price.c_2_2_24_g_disc_3);
                                
                                
 //                                $('input[name="branded_available"]').val(product.meds_price.c_2_2_26_b_available);
 //                                $('input[name="branded_display"]').val(product.meds_price.c_2_2_27_b_display);
 //                    			$('input[name="branded_n_a_message"]').val(product.meds_price.c_2_2_28_b_na_message);
 //                    			$('input[name="branded_name_in_h3_tag"]').val(product.meds_price.c_2_2_29_b_name_in_h3_tag);
 //                    			$('input[name="branded_who_certificate"]').val(product.meds_price.c_2_2_30_b_manufactured_by);
 //                    			$('input[name="branded_who_url"]').val(product.meds_price.c_2_2_31_b_mfr_url);
 //                    			$('input[name="branded_drug_for"]').val(product.meds_price.c_2_2_32_b_drug_for);
 //                    			$('input[name="branded_shipped_from"]').val(product.meds_price.c_2_2_33_b_shipped_from);
 //                    			if(product.meds_price.c_2_2_34_b_icon_image){
								
 //                    			$('#gen_image3').attr('href',image_path+'/'+product.meds_price.c_2_2_34_b_icon_image);
 //                    			$('#gen_image3').text(image_path+'/'+product.meds_price.c_2_2_34_b_icon_image);
 //                    			}
 //                    			$('input[name="branded_icon_alt_tag"]').val(product.meds_price.c_2_2_35_b_icon_i_alt_tag);
	// 							if(product.meds_price.c_2_2_36_b_full_image){
									
 //                    			$('#gen_image4').attr('href',image_path+'/'+product.meds_price.c_2_2_36_b_full_image);
 //                    			$('#gen_image4').text(image_path+'/'+product.meds_price.c_2_2_36_b_full_image);
	// 							}
 //                    			$('input[name="branded_image_alt_tag"]').val(product.meds_price.c_2_2_37_b_full_i_alt_tag);
 //                    			$('input[name="branded_pack_1_quantity"]').val(product.meds_price.c_2_2_38_b_pack_1_qty);
 //                    			$('input[name="branded_units_tablet"]').val(product.meds_price.c_2_2_39_b_unit);
 //                    			$('input[name="branded_inr_price_pack"]').val(product.meds_price.c_2_2_40_b_pack_1_inr_price);
 //                    			$('input[name="branded_pack1"]').val(product.meds_price.c_2_2_41_b_pp_x_1);
 //                    			$('input[name="branded_price1"]').val(product.meds_price.c_2_2_42_b_pp_x_2);
 //                    			$('input[name="branded_default1"]').val(product.meds_price.	c_2_2_43_b_pp_x_3);
 //                    			$('input[name="branded_discount1"]').val(product.meds_price.c_2_2_44_b_disc_1);
 //                    			$('input[name="branded_discount2"]').val(product.meds_price.c_2_2_45_b_disc_2);
 //                    			$('input[name="branded_discount3"]').val(product.meds_price.c_2_2_46_b_disc_3);
 //                    		} else {

                    		
 //                    		}

 //                    	}
 //                    }
 //                });
	// 	}
				
	// });

	function getmedInfo(e){
		var value = $(e).text();
					var id = $(e).attr('data-id');
					$('#search_by_no').val(value);
					$('#generic_result3').html('');

                      $.ajax({
	                       type: "get",       
	                       url: "{{url('aadhya/2-meds-product-med-show')}}/" + id,
	                    success: function (data) {
							let med = data.data;
							$('#c_2_1_1_generic_id_no').val(med.c_1_1_1_generic_id_no);
							$('#c_2_1_1_generic_id_no2').val(med.c_1_1_1_generic_id_no);
				// 			$('input[name="product_no"]').val(med.c_1_1_1_generic_id_no+'-');

							if(med.meds_products){
                            console.log('sdfsd')
								let meds_product = med.meds_products;
								let table_html = '';
								let select_html = '<option value="">Select Option</option>';
								for (const key of Object.keys(meds_product)) {
								   table_html += '<tr onclick="updateMedsProduct(this)" class="border-0 p-0 hover-item " data-id="'+meds_product[key].id+'"><td class="border-0 p-0 text-center">'+meds_product[key].c_2_1_4_display_at+'</td><td class="border-0 p-0 text-center"   desc="'+meds_product[key].c_2_1_6_med_use	+'">'+meds_product[key].c_2_1_2_product_no+'</td><td class="border-0 p-0">'+meds_product[key].c_2_1_3_short_strength_id+'</td><td class="border-0 p-0" >'+meds_product[key].c_2_1_5_product_name_h2+'</td></tr>';

								   select_html += '<option value="'+meds_product[key].id+'</">'+meds_product[key].c_2_1_2_product_no+'</</option>';
								}
											$('#meds-table-info').html(table_html)						
																
	                     		}
	                     		}
                         });
							}
	
	function getMedsPrice(e){
                    // declare the value in the input field to a variable
                    var value = $(e).text();
					var id = $(e).attr('data-id');
					$('#search_by_no').val(value);
					$('#generic_result3').html('');

                      $.ajax({
	                       type: "get",       
	                       url: "{{url('aadhya/2-meds-price.show')}}/" + id,
	                    success: function (data) {
							let med = data.data;
								$('input[name="browsing_path"]').val(med.c_1_1_5_browsing_path_name);
								$('input[name="title_in_blue"]').val(med.c_1_1_6_h1_title_in_blue);
								$('input[name="home_disease"]').val(med.c_1_1_7_name_in_home_diseases);
								$('input[name="drug_title"]').val(med.c_1_1_8_drug_info_title);
								CKEDITOR.instances.editor4.setData(med.c_1_1_9_generic_intro_details); 
								let action = "{{url('aadhya/1-meds-info/upadate')}}" +"/"+ med.id;
								$('#generic_form').attr('action',action)
								$('#generic_form_hidden').val(action)						
                    
								
	                     }
                         });
                    // assign the value to the search box
                   
                    // after click is done, search results segment is made empty
                   
                }


function updateMedsProduct(e) {
let product_id = $(e).attr('data-id');
	

 $("#generic_form").prop('checked', false);
 $('#generic_form_div').hide(); 
  $("#branded_form_check_box").prop('checked', false);
   $('input[type="radio"]').prop('checked', false);
$('#branded_form_div').hide(); 
$('.generic').attr('required', false); 
	$('.branded').attr('required', false);
$('input[name="product_no"]').val($(e).children().eq(1).text());
$('input[name="short_strength"]').val($(e).children().eq(2).text());
$('input[name="display_at"]').val($(e).children().eq(0).text());
                        		$('#product_no_id').val($(e).children().eq(1).text())	
$('input[name="product_title"]').val($(e).children().eq(3).text());
$('input[name="medication_use"]').val($(e).children().eq(1).attr('desc'));
let product_action = "{{url('aadhya/2-meds-product/update')}}" +"/"+ product_id;
let delete_action = "{{url('aadhya/2-meds-product/delete')}}" +"/"+ product_id;
								$('#product_form').attr('action',product_action)
								$('#deleteProduct').attr('href',delete_action)
								$('#product_form_hidden').val(product_action)
                                
                                		// let id = $(this).val();
		if(product_id){

		$.ajax({
                    type: "get",
                    url: "{{url('aadhya/2-meds-product-show')}}" + "/" +product_id ,
                    success: function (data) {
                    	let product = data;
                    	if(data){
                    			$('#c_2_1_1_generic_id_no').val(product.c_2_1_1_generic_id_no);
							$('#c_2_1_1_generic_id_no2').val(product.c_2_1_1_generic_id_no);
                    		$('#product_title_name').val(product.c_2_1_5_product_name_h2);
                    		$('#short_strength_id').val(product.c_2_1_3_short_strength_id);
                    		$('#displayed_at').val(product.c_2_1_4_display_at);
                    		$('#generic_sku').val(product.c_2_1_2_product_no+ 'G');
                    		$('#branded_sku').val(product.c_2_1_2_product_no+ 'B');
                    		$('input[name="c_2_2_2_product_no"]').val(product.c_2_1_2_product_no)
                    		let image_path = '{{asset('/img-me')}}';
                        
                        if(product.meds_name) {
                        let  front_url = "{{url('/')}}";
                        $('#check_front_end').attr('href',front_url + '/'+ product.meds_name.c_1_1_4_frontend_url)
                        }
                    		if(product.meds_price){
                    			let action23 = "{{url('aadhya/2-meds-price/upadate')}}" +"/"+ product.meds_price.id;

                    				if(product.meds_price.c_2_2_7_g_name_in_h3_tag){
                    					 $("#generic_form").prop('checked', true);
											$('#generic_form_div').show(); 
												$('.generic').attr('required', true); 
                    				}

                    				if(product.meds_price.c_2_2_29_b_name_in_h3_tag){
                    					 $("#branded_form_check_box").prop('checked', true);
										$('#branded_form_div').show(); 
											$('.branded').attr('required', true); 
                    				}


								$('#generic_price_form').attr('action',action23)
								$('#generic_price_form_hidden').val(action23)	
                    		    $("#generic_available-"+product.meds_price.c_2_2_4_g_available).prop('checked', true);
                    		    $("#generic_display-" +product.meds_price.c_2_2_5_g_display).prop('checked', true);
                    		    $("#branded_available-" +product.meds_price.c_2_2_26_b_available).prop('checked', true);
                    		    $("#branded_display-" +product.meds_price.c_2_2_27_b_display).prop('checked', true);

                    		    	if(product.meds_price.c_2_2_4_g_available == 'A'){
										$('select[name="generic_na_message"]').parent().hide();

										} else {
												$('select[name="generic_na_message"]').parent().show();

										}

										if(product.meds_price.c_2_2_26_b_available == 'A'){
										$('select[name="branded_n_a_message"]').parent().hide();

										} else {
												$('select[name="branded_n_a_message"]').parent().show();

										}

                    			$('select[name="generic_na_message"]').val(product.meds_price.c_2_2_6_g_na_message);
                    			$('input[name="generic_name_h3_tag"]').val(product.meds_price.c_2_2_7_g_name_in_h3_tag);
                    			$('input[name="generic_who_certificate"]').val(product.meds_price.c_2_2_8_g_manufactured_by);
                    			$('input[name="generic_who_url"]').val(product.meds_price.c_2_2_9_g_mfr_url);
                    			$('input[name="generic_drug_for"]').val(product.meds_price.c_2_2_10_g_drug_for);
                    			$('input[name="generic_shipped_from"]').val(product.meds_price.c_2_2_11_g_shipped_from);
                    			if(product.meds_price.c_2_2_12_g_icon_image){
                    			$('#gen_image').attr('href',image_path+'/'+product.meds_price.c_2_2_12_g_icon_image);
                    			$('#gen_image').text(product.meds_price.c_2_2_12_g_icon_image);
                    			
                    					$('textarea[name="generic_select_icon"]').val(product.meds_price.c_2_2_12_g_icon_image)
                    				
                    			  } else {
                    			    	$('#gen_image').attr('href','#');
                    			    		$('textarea[name="generic_select_icon"]').val('')
                    		    	$('#gen_image').text('No Image uploaded');  
                    			  }
                    			$('input[name="generic_icon_alt_tag"]').val(product.meds_price.c_2_2_13_g_icon_i_alt_tag);
								if(product.meds_price.c_2_2_14_g_full_image){
                      
                    			$('#gen_image2').attr('href',image_path+'/'+product.meds_price.c_2_2_14_g_full_image);
                    			$('#gen_image2').text(product.meds_price.c_2_2_14_g_full_image);
                    			$('textarea[name="generic_select_full"]').val(product.meds_price.c_2_2_14_g_full_image)
							  } else{
							      	$('#gen_image2').attr('href','#');
                    		    	$('#gen_image2').text('No Image uploaded');
                    		    		$('textarea[name="generic_select_full"]').val('')
							  }
							  	if(product.meds_price.generic_med_image){
                      
                    			$('#gen_image5').attr('href',image_path+'/'+product.meds_price.generic_med_image);
                    			$('#gen_image5').text(product.meds_price.generic_med_image);
                    				$('textarea[name="generic_med_image"]').val(product.meds_price.generic_med_image)
							  } else {
							      	$('#gen_image5').attr('href','#');
                    		    	$('#gen_image5').text('No Image uploaded');
                    		    		$('textarea[name="generic_med_image"]').val('')
							  }
                    			$('input[name="generic_image_alt_tag"]').val(product.meds_price.c_2_2_15_g_full_i_alt_tag);
                    			$('input[name="generic_pack_1_quantity"]').val(product.meds_price.c_2_2_16_g_pack_1_qty);
                    			$('input[name="generic_units_tablet"]').val(product.meds_price.c_2_2_17_g_unit);
                    			$('input[name="generic_inr_price_pack"]').val(product.meds_price.c_2_2_18_g_pack_1_inr_price);
                    			$('input[name="generic_pack1"]').val(product.meds_price.c_2_2_19_g_pp_x_1);
                    			$('input[name="generic_price1"]').val(product.meds_price.c_2_2_20_g_pp_x_2);
                    			$('input[name="generic_default1"]').val(product.meds_price.c_2_2_21_g_pp_x_3);
                    			$('input[name="generic_discount1"]').val(product.meds_price.c_2_2_22_g_disc_1);
                    			$('input[name="generic_discount2"]').val(product.meds_price.c_2_2_23_g_disc_2);
                    			$('input[name="generic_discount3"]').val(product.meds_price.c_2_2_24_g_disc_3);
                    			$('input[name="generic_med_image_alt_tag"]').val(product.meds_price.generic_med_image_alt_tag);
                    			$('input[name="branded_med_image_alt_tag"]').val(product.meds_price.branded_icon_alt_tag);
                                
                                
      
                    			$('select[name="branded_n_a_message"]').val(product.meds_price.c_2_2_28_b_na_message);
                    			$('input[name="branded_name_in_h3_tag"]').val(product.meds_price.c_2_2_29_b_name_in_h3_tag);
                    			$('input[name="branded_mfd_by_who_input"]').val(product.meds_price.c_2_2_30_b_manufactured_by);
                    			$('input[name="branded_mfr_url_who_input"]').val(product.meds_price.c_2_2_31_b_mfr_url);
                    			$('input[name="branded_drug_for"]').val(product.meds_price.c_2_2_32_b_drug_for);
                    			$('input[name="branded_shipped_from"]').val(product.meds_price.c_2_2_33_b_shipped_from);
                    			if(product.meds_price.c_2_2_34_b_icon_image){
								
                    			$('#gen_image3').attr('href',image_path+'/'+product.meds_price.c_2_2_34_b_icon_image);
                    			$('#gen_image3').text(product.meds_price.c_2_2_34_b_icon_image);
                    				$('textarea[name="branded_meds_meds_icon"]').val(product.meds_price.c_2_2_34_b_icon_image)
                    			} else {
                    			    
                    			    	$('#gen_image3').attr('href','#');
                    		    	$('#gen_image3').text('No Image uploaded');
                    		    		$('textarea[name="branded_meds_meds_icon"]').val('')
                    			}
                    			$('input[name="branded_icon_alt_tag"]').val(product.meds_price.c_2_2_35_b_icon_i_alt_tag);
								if(product.meds_price.c_2_2_36_b_full_image){
									
                    			$('#gen_image4').attr('href',image_path+'/'+product.meds_price.c_2_2_36_b_full_image);
                    			$('#gen_image4').text(product.meds_price.c_2_2_36_b_full_image);
                    				$('textarea[name="branded_meds_meds_full"]').val(product.meds_price.c_2_2_36_b_full_image)
								} else {
								    	$('#gen_image4').attr('href','#');
                    		    	$('#gen_image4').text('No Image uploaded');
                    		    		$('textarea[name="branded_meds_meds_full"]').val('')
								}
								
								if(product.meds_price.branded_med_image){
                    			$('#gen_image6').attr('href',image_path+'/'+product.meds_price.branded_med_image);
                    			$('#gen_image6').text(product.meds_price.branded_med_image);
                    				$('textarea[name="branded_med_image"]').val(product.meds_price.branded_med_image)
								} else {
								    	$('#gen_image6').attr('href','#');
                    		    	$('#gen_image6').text('No Image uploaded');
                    		    		$('textarea[name="branded_med_image"]').val('')
								}
                    			$('input[name="branded_image_alt_tag"]').val(product.meds_price.c_2_2_37_b_full_i_alt_tag);
                    			$('input[name="branded_pack_1_quantity"]').val(product.meds_price.c_2_2_38_b_pack_1_qty);
                    			$('input[name="branded_unit_tablets_2"]').val(product.meds_price.c_2_2_39_b_unit);
                    			$('input[name="branded_inr_price_pack"]').val(product.meds_price.c_2_2_40_b_pack_1_inr_price);
                    			$('input[name="branded_pack"]').val(product.meds_price.c_2_2_41_b_pp_x_1);
                    			$('input[name="branded_price"]').val(product.meds_price.c_2_2_42_b_pp_x_2);
                    			$('input[name="branded_default"]').val(product.meds_price.	c_2_2_43_b_pp_x_3);
                    			$('input[name="branded_discount1"]').val(product.meds_price.c_2_2_44_b_disc_1);
                    			$('input[name="branded_discount2"]').val(product.meds_price.c_2_2_45_b_disc_2);
                    			$('input[name="branded_discount3"]').val(product.meds_price.c_2_2_46_b_disc_3);
                            	genericPriceTotal();
                            	brandedPriceTotal();
                    		} else {
                    			 $("#generic_form").prop('checked', false);
 $('#generic_form_div').hide(); 
  $("#branded_form_check_box").prop('checked', false);
$('#branded_form_div').hide(); 
	 
								$('input[name="generic_na_message"]').val('');
                    			$('input[name="generic_name_h3_tag"]').val('');
                    			$('input[name="generic_who_certificate"]').val('');
                    			$('input[name="generic_who_url"]').val('');
                    			$('input[name="generic_drug_for"]').val('');
                    			$('input[name="generic_shipped_from"]').val('');
                    			
                    			
                    			$('#gen_image').attr('href','#');
                    			$('#gen_image').text('No Image uploaded');
                    		  
                    			$('input[name="generic_icon_alt_tag"]').val('')
                      
                    			$('#gen_image2').attr('href','#');
                    			$('#gen_image2').text('No Image uploaded');
							  
                    			$('input[name="generic_image_alt_tag"]').val('');
                    			$('input[name="generic_pack_1_quantity"]').val('');
                    			$('input[name="generic_units_tablet"]').val('');
                    			$('input[name="generic_inr_price_pack"]').val('');
                    			$('input[name="generic_pack1"]').val('1');
                    			$('input[name="generic_price1"]').val('2');
                    			$('input[name="generic_default1"]').val('4');
                    			$('input[name="generic_discount1"]').val('10');
                    			$('input[name="generic_discount2"]').val('13');
                    			$('input[name="generic_discount3"]').val('15');
                                
                                
                                // $('input[name="branded_available"]').val('');
                                // $('input[name="branded_display"]').val('');
                    			$('input[name="branded_n_a_message"]').val('');
                    			$('input[name="branded_name_in_h3_tag"]').val('');
                    			$('input[name="branded_mfd_by_who_input"]').val('');
                    			$('input[name="branded_mfr_url_who_input"]').val('');
                    			$('input[name="branded_drug_for"]').val('');
                    			$('input[name="branded_shipped_from"]').val('');
                    			
								
                    			$('#gen_image3').attr('href','#');
                    			$('#gen_image3').text('No Image uploaded');
                    			
                    			$('input[name="branded_icon_alt_tag"]').val('')
									
                    			$('#gen_image4').attr('href','#');
                    			$('#gen_image4').text('No Image uploaded');
                    			
                    				$('#gen_image5').attr('href','#');
                    			$('#gen_image5').text('No Image uploaded');
                    			
                    				$('#gen_image6').attr('href','#');
                    			$('#gen_image6').text('No Image uploaded');
								
                    			$('input[name="branded_image_alt_tag"]').val('');
                    			$('input[name="branded_pack_1_quantity"]').val('');
                    			$('input[name="branded_unit_tablets_2"]').val('');
                    			$('input[name="branded_inr_price_pack"]').val('');
                    			$('input[name="branded_pack"]').val('1');
                    			$('input[name="branded_price"]').val('2');
                    			$('input[name="branded_default"]').val('4');
                    			$('input[name="branded_discount1"]').val('10');
                    			$('input[name="branded_discount2"]').val('12');
                    			$('input[name="branded_discount3"]').val('13');
                    				let action23 = "{{route('aadhya.2-meds-price.store')}}";
								$('#generic_price_form').attr('action',action23)
								$('#generic_price_form_hidden').val(action23)
                    		}

                    	}
                    }
                });
		}
}

//second searching part...
</script>

<script>
$('#generic_id_who_certificate').click(function(e){


    // $('#generic_who_certificate_input').val('https://www.who.int/teams/health-product-and-policy-standards/standards-and-specifications/gmp');
	if($("#generic_id_who_certificate").prop('checked') == true){
    $('#generic_who_certificate_input').val('WHOcGMP Certified');
    $('input[name="generic_who_url"]').val('https://911globalmeds.com/whocgmp-certification-faqs');
	
		console.log(name)
} else {
    
		let name =  $('#generic_who_certificate_input').val('');
   			 $('input[name="generic_who_url"]').val('');
    }


});
$('#generic_id_mfr_url').click(function(e){


    // $('#generic_who_certificate_input').val('https://www.who.int/teams/health-product-and-policy-standards/standards-and-specifications/gmp');
	if($("#generic_id_mfr_url").prop('checked') == true){
    $('#generic_who_url').val('WHOcGMP Certified');
	
		console.log(name)
} else {
    
		let name =  $('#generic_who_url').val('');
    }


});
$('#branded_id_mfd_by_who').click(function(e){


    // $('#generic_who_certificate_input').val('https://www.who.int/teams/health-product-and-policy-standards/standards-and-specifications/gmp');
	if($("#branded_id_mfd_by_who").prop('checked') == true){
    $('input[name="branded_mfd_by_who_input"]').val('WHOcGMP Certified');
      $('input[name="branded_mfr_url_who_input"]').val('https://911globalmeds.com/whocgmp-certification-faqs');
	
		console.log(name)
} else {
    
	    $('input[name="branded_mfd_by_who_input"]').val('');
      $('input[name="branded_mfr_url_who_input"]').val('');
    }


});
$('#branded_id_mfr_url_who').click(function(e){


    // $('#generic_who_certificate_input').val('https://www.who.int/teams/health-product-and-policy-standards/standards-and-specifications/gmp');
	if($("#generic_id_who_certificate").prop('checked') == true){
    $('#branded_mfr_url_who_input').val('WHOcGMP Certified');
	
		console.log(name)
} else {
    
		let name =  $('#branded_mfr_url_who_input').val('');
    }


});
;
</script>
<!-- HImanshu addition -->
<script>
	$("#generic_display-S").click(function(e){
      if($("#generic_display-S").prop("checked") == true){
		$('.generic').attr('required', true); 
	  }
	});

	$("#generic_display-H").click(function(e){
      if($("#generic_display-H").prop("checked") == true){
		$('.generic').attr('required', false); 
	  }
	});

	$("#branded_display-S").click(function(e){
      if($("#branded_display-S").prop("checked") == true){
		$('.branded').attr('required', true); 
	  }
	});

	$("#branded_display-H").click(function(e){
      if($("#branded_display-H").prop("checked") == true){
		$('.branded').attr('required', false); 
	  }
	});	
	$("#generic_form").click(function(e){
      if($("#generic_form").prop("checked") == true){
		$('#generic_form_div').show(); 
			$('.generic').attr('required', true); 
	  } else {
		$('#generic_form_div').hide(); 
			$('.generic').attr('required', false); 

	  }
	});
		$("#branded_form_check_box").change(function(e){
      if($("#branded_form_check_box").prop("checked") == true){
		$('#branded_form_div').show(); 
			$('.branded').attr('required', true); 
	  } else {
		$('#branded_form_div').hide(); 
			$('.branded').attr('required', false); 

	  }
	});


		$('.genric_price_total').change(function () {
			genericPriceTotal();
		})

		$('.branded_price_total').change(function () {
			brandedPriceTotal();
		})




		function genericPriceTotal() {
				let generic_pack_1_quantity = $('input[name="generic_pack_1_quantity"]').val();
				let generic_inr_price_pack = $('input[name="generic_inr_price_pack"]').val();
				let generic_packet_price_1 = $('input[name="generic_pack1"]').val();
				let generic_packet_price_2 = $('input[name="generic_price1"]').val();
				let generic_packet_price_3 = $('input[name="generic_default1"]').val();
				let generic_pack_discount_1 = $('input[name="generic_discount1"]').val();
				let generic_pack_discount_2 = $('input[name="generic_discount2"]').val();
				let generic_pack_discount_3 = $('input[name="generic_discount3"]').val();
				let doller_rate  =$('input[name="rate_1"]').val();

				let generic_pack_price_1 = parseInt(generic_pack_1_quantity*generic_packet_price_1);
				let generic_pack_price_2 = parseInt(generic_pack_1_quantity*generic_packet_price_2);
				let generic_pack_price_3 = parseInt(generic_pack_1_quantity*generic_packet_price_3);

					$('#generic_pack_price_1').val(generic_pack_price_1);
					$('#generic_pack_price_2').val(generic_pack_price_2);
					$('#generic_pack_price_3').val(generic_pack_price_3);

				let generic_net_pack_price_1 = Math.round(((generic_inr_price_pack*generic_packet_price_1) -(generic_inr_price_pack*generic_packet_price_1*generic_pack_discount_1*.01))/doller_rate);
				let generic_net_pack_price_2 =  Math.round(((generic_inr_price_pack*generic_packet_price_2) -(generic_inr_price_pack*generic_packet_price_2*generic_pack_discount_2*.01))/doller_rate);
				let generic_net_pack_price_3 =  Math.round(((generic_inr_price_pack*generic_packet_price_3) -(generic_inr_price_pack*generic_packet_price_3*generic_pack_discount_3*.01))/doller_rate);

					$('#generic_net_pack_price_1').val(generic_net_pack_price_1);
					$('#generic_net_pack_price_2').val(generic_net_pack_price_2);
					$('#generic_net_pack_price_3').val(generic_net_pack_price_3);
		}

		function brandedPriceTotal() {
				let branded_pack_1_quantity = $('input[name="branded_pack_1_quantity"]').val();
				let branded_inr_price_pack = $('input[name="branded_inr_price_pack"]').val();
				let branded_packet_price_1 = $('input[name="branded_pack"]').val();
				let branded_packet_price_2 = $('input[name="branded_price"]').val();
				let branded_packet_price_3 = $('input[name="branded_default"]').val();
				let branded_pack_discount_1 = $('input[name="branded_discount1"]').val();
				let branded_pack_discount_2 = $('input[name="branded_discount2"]').val();
				let branded_pack_discount_3 = $('input[name="branded_discount3"]').val();
				let doller_rate  =$('input[name="rate_1"]').val();

				let branded_pack_price_1 = parseInt(branded_pack_1_quantity*branded_packet_price_1);
				let branded_pack_price_2 = parseInt(branded_pack_1_quantity*branded_packet_price_2);
				let branded_pack_price_3 = parseInt(branded_pack_1_quantity*branded_packet_price_3);
					$('#branded_pack_price_1').val(branded_pack_price_1);
					$('#branded_pack_price_2').val(branded_pack_price_2);
					$('#branded_pack_price_3').val(branded_pack_price_3);

				let branded_net_pack_price_1 = Math.round(((branded_inr_price_pack*branded_packet_price_1) -(branded_inr_price_pack*branded_packet_price_1*branded_pack_discount_1*.01))/doller_rate);
				let branded_net_pack_price_2 =  Math.round(((branded_inr_price_pack*branded_packet_price_2) -(branded_inr_price_pack*branded_packet_price_2*branded_pack_discount_2*.01))/doller_rate);
				let branded_net_pack_price_3 =  Math.round(((branded_inr_price_pack*branded_packet_price_3) -(branded_inr_price_pack*branded_packet_price_3*branded_pack_discount_3*.01))/doller_rate);

					$('#branded_net_pack_price_1').val(branded_net_pack_price_1);
					$('#branded_net_pack_price_2').val(branded_net_pack_price_2);
					$('#branded_net_pack_price_3').val(branded_net_pack_price_3);
		}

		$('input[name="branded_available"]').change(function (argument) {
			if($(this).val() == 'A'){
			$('select[name="branded_n_a_message"]').parent().hide();

			} else {
					$('select[name="branded_n_a_message"]').parent().show();

			}
		})

			$('input[name="generic_available"]').click(function (argument) {
			if($(this).val() == 'A'){
			$('select[name="generic_na_message"]').parent().hide();

			} else {
					$('select[name="generic_na_message"]').parent().show();

			}
		})
</script>
@endsection