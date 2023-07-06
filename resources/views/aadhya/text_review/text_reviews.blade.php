@extends('layouts.backend')
@section('content')

<div class="page-define">
		<div class="container-fluid">
			<div class="row justify-content-between">
				<div class="col">
				  <h1>Reviews & Testimonials</h1>
				  <span class="shorttxt">Data will show on the front-end pages – HOME / MEDICATION / REVIEWS-TESTIMONIALS / ABOUT-US</span>
				</div>
			</div>		
		</div>
	</div>
            <div class="main-panel">
                <div class="container-fluid">
                    <div class="panel-container">
                        <div class="main-section double-heading" id="add-testimonial" style="display: none;">
                            <div class="main-border ">
                                <div class="row">
									<div class="col-md-12">
										<div class="entry-title">
											<h2 id="heading-title">EDIT TESTIMONIAL NO</h2>
										</div>
										<small class="d-block mb-3">DBT: 6-Reviews</small>
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
                                <form action="{{route('aadhya.text_review.store')}}"  id="review_form"   method="post">
                                		<input type="hidden" name="review_form" id="review_freight_hidden" value="{{old('review_form',route('aadhya.text_review.store'))}}">

                                		
                                	@csrf
								<div class="row">
								
								<div class="col-md-5">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Full Name</label>
										<div class="col-sm-8">
										  <input type="text" class="form-control" name="fullName" />
										</div>
									</div>
								</div>
								<div class="col-md-3 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Country</label>
										<div class="col-sm-9">
										  <input type="text" class="form-control" name="country" />
										</div>
									</div>
								</div>
								<div class="col-md-4 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Email</label>
										<div class="col-sm-9">
										  <input type="email" name="email" class="form-control" />
										</div>
									</div>
								</div>
								<div class="col-md-9">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Posting from page</label>
										<div class="col-sm-9">
									
										  <input type="text" name="postingPage" class="form-control" />
										</div>
									</div>
								</div>
								{{-- <div class="col-md-3 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-3 col-form-label">Date</label>
										<div class="col-sm-9">
										  <input type="date" class="form-control" name="date"/>
										</div>
									</div>
								</div> --}}
								<div class="col-md-3 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-4 col-form-label">Average Rating</label>
										<div class="col-sm-8">
										  <input type="number" class="form-control" min="1" max="5" name="rating"/  readonly="" disabled="">
										</div>
									</div>
								</div>
								<div class="col-md-2">
									

								</div>
							
								<div class="col-md-2">
									<div class="form-group row">
										<label class="col-sm-8 col-form-label">1 Quality Price </label>
										<div class="col-sm-4">
										  <input type="text" class="form-control" min="1" max="5" name="rating_1"/>
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group row">
										<label class="col-sm-8 col-form-label">2 Service </label>
										<div class="col-sm-4">
										  <input type="text" class="form-control" min="1" max="5" name="rating_2"/>
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group row">
										<label class="col-sm-8 col-form-label">3 Delivery </label>
										<div class="col-sm-4">
										  <input type="text" class="form-control" min="1" max="5" name="rating_3"/>
										</div>
									</div>
								</div>

								<div class="col-md-2">
									<div class="form-group row">
										<label class="col-sm-8 col-form-label">4 Buy Again</label>
										<div class="col-sm-4">
										  <input type="text" class="form-control" min="1" max="5" name="rating_4"/>
										</div>
									</div>
								</div>
									<div class="col-md-2">
									<div class="form-group row">
										<label class="col-sm-8 col-form-label">5 Recommend</label>
										<div class="col-sm-4">
										  <input type="text" class="form-control" min="1" max="5" name="rating_5"/>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group row">
										<label class="col-sm-2	 col-form-label" >Comments</label>
										<div class="col-sm-10">
										  <!--textarea name="editor1" id="editor1"></textarea-->
										  <textarea class="form-control" rows="3" name="comment" id="text_comment"></textarea>
										</div>
									</div>
								</div>
								
								<div class="col-md-12 mb-3">
									<div class="text-center">Post On</div>
								</div>
								<div class="col-md-6">
									<div class="form-group row">
										<label class="col-md-4">Medicine <a href="#" id="medicine-title" style="color: #4A9CEA" target="_blank"> : No Link</a></label>
											<div class="col-md-8">
												  <input type="hidden" name="medicine" class="form-control" />
												        <input type="text" class="form-control"  id="search_by_generic_no" placeholder="Search by Generic No. / Generic Name" value="{{$name??''}}"><span href="" class="cross seardch-cross" style="cursor:pointer;right: 23px;
top: -26px;position: relative;"; >X</span>
												<div id="generic_result"></div>
										
											<div class="form-check  form-check-inline">

														  <input class="form-check-input" type="checkbox" name="medicine_status" value="1">
											  <label class="form-check-label mr-3">Yes</label>
											  <input class="form-check-input" type="checkbox" name="top5" value="1">
											  <label class="form-check-label">Top 5</label>
											</div>
										</div>
									</div>
								</div>
																
								<div class="col-md-2 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-6 pr-2"><a href="{{route('testimonial')}}" target="_blank" >Testimonials</a></label>
										<div class="col-sm-6">
										  <div class="form-check">
											  <input class="form-check-input" type="checkbox" name="testimonial" value="1">
											  <label class="form-check-label">Yes</label>
											</div>
											<div class="form-check">
											  <input class="form-check-input" type="checkbox" name="testimonial_top_10" value="1">
											  <label class="form-check-label">Top 10</label>
											</div>
										</div>
									</div>
								</div>						
								<div class="col-md-2 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-6"><a href="{{route('about_us')}}" target="_blank" >About Us</a></label>
										<div class="col-sm-6">
										  <div class="form-check">
											  <input class="form-check-input" type="checkbox" name="about" value="1">
											  <label class="form-check-label">Yes</label>
											</div>
											<div class="form-check">
											  <input class="form-check-input" type="checkbox" name="about_top_5" value="1">
											  <label class="form-check-label">Top 5</label>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-2 col-sm-12">
									<div class="form-group row">
										<label class="col-sm-3"><a href="{{route('index')}}" target="_blank" >Home</a></label>
											<div class="col-sm-9">
										  <div class="form-check">
											  <input class="form-check-input" type="checkbox" name="home" value="1">
											  <label class="form-check-label" for="inlineCheckbox1">Yes</label>
											</div>
											<div class="form-check">
											  <input class="form-check-input" type="checkbox" name="home_top_5" value="1">
											  <label class="form-check-label">Top 5</label>
											</div>
										</div>
									</div>
								</div>
                                
								
                                <div class="col-md-12">
                                  <div class="float-right">
	                                <button type="submit" class="btn greenBtn">Save</button>
									{{-- <button type="submit" class="btn redBtn cut-button">Delete</button> --}}
								  </div>
                                </div>
							</div>
							</div>							
						</form>
                        </div>
						
						<div class="main-section">
                            <div class="main-border ">
                                <div class="row">
									<div class="col-md-6 col-sm-12">
										<div class="entry-title">
											<h2>Reviews & Testimonials</h2>
										</div>
										<div>
											@if (Session::has('success2'))
                                          <div class="container">
                                          <div class="alert alert-success">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                         {{ Session::get('success2') }}
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
									<table id="datatable" class="table custom-table table-bordered text-center">
										<thead class="text-center">
											<tr>
											<th scope="col" width="30px"><input type="checkbox" id="master" class="inputAuto" />Select</th>
											  <th scope="col" width="40px">S. No</th>
											  
											  <th scope="col" width="80px">Date<br>from Page <br>Star Rating</th>
											  <th scope="col" width="200px">Full Name <br>Country  <br> Email</th>
											  <th scope="col" width="374px">Quality & Price  <br> Service  <br>    Delivery</th>											  
											  <th scope="col" width="374px">Buy Again  <br>  Recommend   <br> Average</th>											  
											  <th scope="col" width="374px">Comments</th>											  
											  <th scope="col" width="80px">Display On</th>
											  <th scope="col" width="80px">Action</th>
											</tr>
										  </thead>
										  <tbody>
										  	@foreach($textReviews->sortByDesc('id') as $textReview)
											<tr id="tr_{{$textReview->id}}">
                      						  <td><input type="checkbox" class="sub_chk dcb" data-id="{{$textReview->id}}"/></td>
											  <td>{{$textReview->id}}</td>
											  
											  <td>{{$textReview->created_at->timezone('Asia/Kolkata')->format('d-m-y H:i') }} IST<br><a href="{{ $textReview->posting_from_page }}" target="_blank">{{ $textReview->page_name }}</a></td>

											  <td>{{$textReview->full_name}}<br>  {{$textReview->country}} <br>{{$textReview->email}}</td>
											  <td>{{$textReview->rating_1}} <br> {{$textReview->rating_2}} <br> {{$textReview->rating_3}}</td>
											  <td>{{$textReview->rating_4}} <br> {{$textReview->rating_5}} <br><b> {{$textReview->rating}}</b></td>
											  <td>


                                        <a href="javascript:void(0);" style="color:#000;font-weight:600;text-decoration:underline;" data-toggle="modal" data-target="#order_detail-b{{$textReview->id}}">
                                          Details
                                        </a>

                                        <div class="modal fade modal_status" id="order_detail-b{{$textReview->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content">
                                          <div class="modal-header">
                                            <h5>Text Review</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                          </div>
                                            <div class="modal-body text-left">
                                           	{{$textReview->comment}}
                                            </div>
                                            
                                            </div>
                                            </div>
                                          </div>
                                  
                                    

											  	</td>

											  <td>	@if($textReview->medication)
											  	
											  	<a href="{{ url('/'.$textReview->medication->c_1_1_4_frontend_url??'') }}" target="_blank" >{{ $textReview->medicine }}</a>
												<br>
												@endif
												@if($textReview->testimonials)
												<a href="{{route('testimonial')}}" target="_blank" >Testimonial</a><br>
												@endif
												@if($textReview->home)
												<a href="{{route('index')}}" target="_blank" >Home</a><br>
												@endif
												@if($textReview->about)
												<a href="{{route('about_us')}}" target="_blank" >About Us</a><br>
												@endif </td>
											  <td class="action">
											  {{-- 	@if($textReview->status)
												<button type="button" class="display unlderline" id="changeStatus" data-id="{{ $textReview->id }}" status="0">Displayed</button>
												@else
												<button type="button" class="display unlderline" id="changeStatus" data-id="{{ $textReview->id }}" status="1">Hidden</button>
												@endif --}}


												<a href="#"  onclick="getReview(this)" data-id="{{ $textReview->id }}" class="editTxt">Edit</button>
												<a href="{{route('aadhya.text_review.destroy',$textReview->id)}}" class="delTxt">Delete</a>
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
					
                    </div>
                </div>
            </div>


@endsection

@section('afterScript')

<script type="text/javascript">
	
	$('#search_by_generic_no').keyup(function(e){

		let genrice_no = $(this).val();
		$.ajax({
                    type: "get",
                    url: "{{route('aadhya.1-meds-info.search')}}",
                    data: {	
                        genrice_no: genrice_no
                    },
                    success: function (data) {
						$('#generic_result').html(data);
                    }
                });
				
	});

	$('.seardch-cross').click(function (argument) {
				$('#search_by_generic_no').val('');
					$('#generic_result').html('');
					$('input[name="medicine"]').val(0);
	})

	function getmedInfo(e){
                    // declare the value in the input field to a variable
                    var value = $(e).text();
					var id = $(e).attr('data-id');
							$('#search_by_generic_no').val(value);
					$('#generic_result').html('');
					 var strArray = value.split(" -");
					 console.log(strArray)
					$('input[name="medicine"]').val(strArray[0]);

				}

	function getReview(e){
                    // declare the value in the input field to a variable
                    var value = $(e).text();
					var id = $(e).attr('data-id');
					$('#heading-title').text('EDIT TESTIMONIAL NO. '+id);
					$('#add-testimonial').show();
					// $('#country_freight_search').val(value);
					// $('#country_freight_result').html('');
                $.ajax({
	                       type: "get",       
	                       url: "{{url('aadhya/6-text-reviews-show/')}}/" + id,
	                    success: function (data) {
							let med = data.data;
								$('input[name="fullName"]').val(med.full_name);
								$('input[name="country"]').val(med.country);
								$('input[name="email"]').val(med.email);
								$('input[name="postingPage"]').val(med.posting_from_page);
								$('input[name="rating"]').val(med.rating);
								$('input[name="rating_1"]').val(med.rating_1);
								$('input[name="rating_2"]').val(med.rating_2);
								$('input[name="rating_3"]').val(med.rating_3);
								$('input[name="rating_4"]').val(med.rating_4);
								$('input[name="rating_5"]').val(med.rating_5);
								$('input[name="medicine"]').val(med.medicine);
                    		        $('#text_comment').text(med.comment);

                    		        $("input[name=home][value=" +  med.home + "]").prop('checked', true);
                    		        $("input[name=medicine_status][value=" +  med.medicine_status + "]").prop('checked', true);
                    		        $("input[name=top5][value=" +  med.c_4_1_4_billing_address + "]").prop('checked', true);
                    		        $("input[name=testimonial][value=" +  med.testimonials + "]").prop('checked', true);
                    		        $("input[name=about][value=" +  med.about + "]").prop('checked', true);
                    		        $("input[name=home_top_5][value=" +  med.home_top_5 + "]").prop('checked', true);
                    		        $("input[name=testimonial_top_10][value=" +  med.testimonial_top_10 + "]").prop('checked', true);
                    		        $("input[name=about_top_5][value=" +  med.about_top_5 + "]").prop('checked', true);
                    		
                    				 if(med.medication){
                    				 	let web_url = "{{ url('/')}}";
                                      	$('#medicine-title').text(' : '+med.medication.c_1_1_1_generic_id_no +' - '+med.medication.c_1_1_2_main_generic_name)
                                      	$('#medicine-title').attr('href',web_url+'/'+med.medication.c_1_1_4_frontend_url)
                                      } else {
                                          $('#medicine-title').text(' : No Link')
                                      	$('#medicine-title').attr('href','#')
                                      }

								//CKEDITOR.instances.editor4.setData(med.c_1_1_9_generic_intro_details); 	
								let action2 = "{{url('aadhya/6-text-reviews-update/')}}" +"/"+ med.id;
								$('#review_form').attr('action',action2)
								$('#review_freight_hidden').val(action2)	
                                // let deleteUrl = "{{url('aadhya/4-country-delete/')}}" +"/"+ med.id;
                                // $('#deleteQuestionAnswerBtn').attr('href',deleteUrl)
                    
								
	                     }
                         });

    }

    $('#changeStatus').click(function (e) {

    	let type  = $(this).attr('status');
    	let id = $(this).attr('data-id');

     $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
              });
         	   $.ajax({
                  url: "{{route('aadhya.text_review.status')}}",
                  method: 'post',
                  data: {
                     id: id,
                     status: type,
                  },
                  success: function(data){
                  		if(data.type==1){
                  	console.log(data);
	                    		$('#changeStatus').text('Displayed');
	                    		$('#changeStatus').attr('type',0);
	                    	} else {
	                    		$('#changeStatus').attr('type',1);
	                    		$('#changeStatus').text('Hidden');
                  	console.log(data.type);
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