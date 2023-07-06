@extends('layouts.backend')
@section('before_body')
<style type="text/css">
	.checkbox-menu li label {
    display: block;
    padding: 3px 10px;
    clear: both;
    font-weight: normal;
    line-height: 1.42857143;
    color: #333;
    white-space: nowrap;
    margin:0;
    transition: background-color .4s ease;
}
.checkbox-menu li input {
    margin: 0px 5px;
    top: 2px;
    position: relative;
}

.checkbox-menu li.active label {
    background-color: #cbcbff;
    font-weight:bold;
}

.checkbox-menu li label:hover,
.checkbox-menu li label:focus {
    background-color: #f5f5f5;
}

.checkbox-menu li.active label:hover,
.checkbox-menu li.active label:focus {
    background-color: #b8b8ff;
}
</style>

@endsection

@section('content')
<div class="page-define">
			<div class="container-fluid">
				<div class="row justify-content-between">
					<div class="col">
						<h1>PASSWORD</h1>
						<span class="shorttxt">Data will show on the front-end pages</span>
					</div>
				</div>		
			</div>
		</div>
	<div class="main-panel">
		<div class="container-fluid">
			<div class="panel-container">
			<div class="main-section mt-3">
				<div class="main-border">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="entry-title">
							  <h2>PASSWORD</h2>
							</div>
						</div>
						
                  	</div>
					<div class="login-limiter">
		<div class="login-container">
			<div class="login-wradp">				
			{{-- 	<div class="login-header">
					<div class="login-icon"><img src="img/login-icon.png" alt=""></div>
					<div class="login-title">
					</div>
				</div> --}}
				<div class="login-form">
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
					<form action="{{route('aadhya.password')}}" method="post" class="row">
                        @csrf
						<div class="form-group col-md-4">
						{{-- 	<label class="w-40">Old Password<span class="astrik">*</span></label>
							<input type="text" name="old_Password" class="form-control w-60"  placeholder="Old Password" > --}}
						</div>
						<h3 class="col-md-12 my-3" style="color: #6c757d">Change Master Access Password</h3>
						<div class="form-group col-md-4">
							<label class="w-40">New Login Email  {{--  <input type="checkbox"  id="email_checkbox" value="{{ $admin->email }}"> --}}</label>
							<input type="text" name="email" class="form-control w-60" id="master_email"  placeholder="New Login Email" required="" value="{{ $admin->email }}"> 
						</div>
						<div class="form-group col-md-4">
							<label for="exampleInputEmail1" class="w-40">New Password<span class="astrik">*</span></label>
							<input type="text" name="password" class="form-control w-60" value="" placeholder="New Password" required="" >
						</div> 
                        <div class="form-group col-md-4">
							<label for="exampleInputEmail1" class="w-40"> Confirm Password<span class="astrik">*</span></label>
							<input type="text" name="password_confirmation" class="form-control w-60" value="" placeholder="Confirm Password" required="">
						</div>
					
						
						<div class="form-group col-md-12">
							<button type="submit" class="btn btn-primary common-btn" 
							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;float: right;">Save</button>
						</div>
					</form>
						<div class="row" >
							<h3 class="col-md-12 my-3" style="color: #6c757d;">Give /Change Staff Access </h3>
						</div>
						@foreach($admin_staffs as $key => $admin_staff)
					<form action="{{ route('aadhya.update.permisson',$admin_staff) }}" method="post" class="row">
						@csrf
						<div class="form-group col-md-4">
							<label class="w-40">Staff  </label>
							<input type="text" name="old_email" class="form-control w-60"  placeholder="New Login Email" required=""  value="{{ $admin_staff->email }}">
						</div>
						  <div class="form-group col-md-2">
							<label for="exampleInputEmail1" class="w-40">  Password<span class="astrik">*</span></label>
							<input type="text" name="new_password" class="form-control w-60"  placeholder="Confirm Password" value="{{ $admin_staff->password }}" required="">
						</div>
						<div class="form-group col-md-3 dropdown">
							<label for="exampleInputEmail1" class="w-40">Page Allowed<span class="astrik">*</span></label>
							<button class="btn btn-default dropdown-toggle" type="button" 
							          id="dropdownMenu1" data-toggle="dropdown" 
							          aria-haspopup="true" aria-expanded="true">
							    Select Pages 
							  </button>
							  <ul class="dropdown-menu checkbox-menu allow-focus" aria-labelledby="dropdownMenu1">
							  	  <li > <label>
							        <input type="checkbox"   class="select_all_checkbox"  data-id="{{ $key }}"  > Select All
							      </label>
							  </li>
							  	@foreach($permissions as $permission)
							    <li >

							      <label>
							        <input  class="select_all_checkbox-{{ $key }}" type="checkbox" name="old_staff_permission[]" @if(in_array($permission->name, $admin_staff->userPermissions()->pluck('name')->toArray())) checked=""  @endif  value="{{$permission->name }}"> {{$permission->route }}
							      </label>
							    </li>
							    @endforeach
							
							    
							  </ul>
						</div> 
                       	<div class="form-group col-md-3">
							<button type="submit" class="btn btn-primary common-btn" 
							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Update</button>
												<a href="{{ url('/aadhya/16-password/delete/'.$admin_staff->id) }}" class="btn redBtn">Delete</a>

						</div>

						</form>
						@endforeach
						<form action="{{ route('aadhya.permisson') }}" method="post" class="row">
						@csrf
						<div class="form-group col-md-4">
							<label class="w-40">Staff  </label>
							<input type="email" name="new_email" class="form-control w-60"  placeholder="New Login Email" required="" >
						</div>
                        <div class="form-group col-md-2">
							<label for="exampleInputEmail1" class="w-40">  Password<span class="astrik">*</span></label>
							<input type="text" name="new_password" class="form-control w-60" value="" placeholder="Confirm Password" required="">
						</div>
						<div class="form-group col-md-3 dropdown">
							<label for="exampleInputEmail1" class="w-40">Page Allowed<span class="astrik">*</span></label>
							<button class="btn btn-default dropdown-toggle" type="button" 
							          id="dropdownMenu1" data-toggle="dropdown" 
							          aria-haspopup="true" aria-expanded="true">
							    Select Pages 
							  </button>
							  <ul class="dropdown-menu checkbox-menu allow-focus" aria-labelledby="dropdownMenu1">
							  		  <li > <label>
							        <input type="checkbox"   class="select_all_checkbox" data-id="a"  > Select All
							      </label>
							  </li>
							  	@foreach($permissions as $permission)
							    <li >
							      <label>
							        <input type="checkbox" class="select_all_checkbox-a" name="new_staff_permission[]" value="{{$permission->name }}"> {{$permission->route }}
							      </label>
							    </li>
							    @endforeach
							
							    
							  </ul>
						</div> 
							<div class="form-group col-md-3">
							<button type="submit" class="btn btn-primary common-btn" 
							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Save</button>
						</div>

					</form>
						
			
						
				</div>
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

$(".checkbox-menu").on("change", "input[type='checkbox']", function() {
   $(this).closest("li").toggleClass("active", this.checked);
});

$(document).on('click', '.allow-focus', function (e) {
  e.stopPropagation();
});

	$('#email_checkbox').click(function (argument) {
		let email =  $(this).val();
		if ($('#email_checkbox').is(':checked')) {
				$('#master_email').val(email)
		} else {
				$('#master_email').val('')

		}
	})

$('.select_all_checkbox').change(function(){
	let id = $(this).attr('data-id');
        if($(this).prop('checked') === true){
           $('.select_all_checkbox-'+id).prop('checked',true);
        }else{
             $('.select_all_checkbox-'+id).prop('checked',false);
        }
})

</script>
@endsection


