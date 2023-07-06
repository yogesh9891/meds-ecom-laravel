@extends('layouts.backend')
@section('content')

<div class="page-define">
				  <div class="container-fluid">
					<div class="row justify-content-between">
						<div class="col">
							<h1>BUYER LOGIN</h1>
							<span class="shorttxt">Data will come from CART-CHECKOUT / LOGIN</span>
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
											<h2>BUYER LOGIN DETAILS</h2>
										</div>
										<small class="mb-3 d-block">DBT: 11-Buyer-Login</small>
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
												<th scope="col" width="5%"><input type="checkbox"  id="master" class="inputAuto" />Select</th>
												<th scope="col" width="4%">S.No</th>
												<th scope="col" width="11%">ID & Date</th>
												<th scope="col" width="15%">Name & Country</th>
												<th scope="col" width="15%">Mobile</th>
												<th scope="col" width="15%">Email<br>Password</th>
												<th scope="col" width="15%">Refer a Friend URL</th>
												<th scope="col" width="15%">Action</th>
											</tr>
										  </thead>
										  <tbody>
                                            @foreach($users->sortByDesc('id') as $key => $user)
											 <tr id="tr_{{$user->id}}">
                                              <td><input type="checkbox" class="sub_chk dcb" data-id="{{$user->id}}"/></td>
											  <td>{{$key+1}}</td>
											  <td>B{{$user->id+108}} /<br> {{$user->updated_at->format('d m y')}}</td>
											  <td>{{$user->name}} <br> {{$user->user_country ? $user->user_country->c_4_1_2_country_name : $user->country}}</td>
											  <td>{{$user->mobile}}</td>
											  <td>{{$user->email}}</br>{{$user->password}}</td>
											  <td>
                                                @if($user->wallet_id)
                                                <a href="{{url('refer-a-friend/'.$user->wallet_id.'/?id='.$user->email.'&pwd='.$user->password )}}" target="_blank" class="text-info">{{ $user->wallet_id }}</a>
                                                @else
                                                <a href="{{route('aadhya.create_refer',$user)}}" class="text-info">Create R-a-F</a>
                                                @endif                                 
                                              </td>
											  <td class="action ">
                                                <div class="d-flex">
												<a href="javascript::void(0);" class="editTxt" data-id="{{$user->id}}"  data-toggle="modal" data-target="#pricematch-{{$user->id}}">Edit</a>
                                                @if($user->is_block)
                                                <a href="{{route('aadhya.user.block',$user->id)}}" class="text-success">Unblock</a>
                                                @else
                                                <a href="{{route('aadhya.user.block',$user->id)}}" class="delTxt">Block</a>
                                                @endif
                                                </div>
												<a href="{{route('aadhya.user.delete',$user->id)}}" class="delTxt">Delete</a>
                                                    
											  </td>
											</tr>
                                               <div class="modal fade bd-example-modal-lg pricematch" id="pricematch-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" style="max-width:1200px;">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <form action="{{route('aadhya.user.update',$user->id)}}" method="post">
                                                                    @csrf
                                                                        <div class="row">
                                                                                <div class="col-md-4 col-sm-4">
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-4 col-form-label">Buyer ID</label>
                                                                                        <div class="col-sm-8">
                                                                                          <p>B{{$user->id}}</p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4">
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-4 col-form-label text-right">Name</label>
                                                                                        <div class="col-sm-8">
                                                                                            <input type="text" name="name" class="form-control" value="{{$user->name}}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4">
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-4 col-form-label text-right">Country</label>
                                                                                        <div class="col-sm-8">
                                                                                            <select name="country" class="form-control">
                                                                                            @foreach($countries as $country)

                                                                                            <option value="{{$country->c_4_1_2_country_name}}" @if($user->user_country && $user->user_country->id == $country->id) selected="" @endif>{{$country->c_4_1_2_country_name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="col-md-4 col-sm-4">
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-4 col-form-label">Mobile</label>
                                                                                        <div class="col-sm-8">
                                                                                            <input type="text" class="form-control" name="mobile" value="{{$user->mobile}}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4">
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-4 col-form-label text-right">Email</label>
                                                                                        <div class="col-sm-8">
                                                                                            <input type="text" class="form-control" name="email" value="{{$user->email}}">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-4 col-sm-4">
                                                                                    <div class="form-group row">
                                                                                        <label class="col-sm-4 col-form-label text-right">Password</label>
                                                                                        <div class="col-sm-8">
                                                                                            <input type="text" class="form-control" value="{{$user->password}}" name="password">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                            <div class="bottom-button text-right">
                                                                            <input type="submit" class="btn greenBtn" value="Save">
                                                                        </div>

                                                                    </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
<!-- Price Match Guarantee Modal -->
     

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