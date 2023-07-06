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
					<form action="{{route('aadhya.password.match')}}" method="post">
                        @csrf
                        <div class="row">
						<div class="form-group col-md-4">
							<label class="w-40">Old Password<span class="astrik">*</span></label>
							<input type="text" name="old_Password" class="form-control w-60"  placeholder="Old Password" >
						</div>
						
						<div class="form-group col-md-4">
							<button type="submit" class="btn btn-primary common-btn" 
							style="background-color: #00baab; color: #fff; width:150px;border-radius:0;border:0px;">Enter</button>
						</div>
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


</script>
@endsection


