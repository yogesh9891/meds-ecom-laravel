<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap');
* {margin: 0px;padding: 0px;box-sizing: border-box;font-family: 'Open Sans', sans-serif;}
body, html {height: 100%; font-family: Poppins-Regular, sans-serif; background-color:#f1f5f8;}
input {outline: none;border: none;}
.form-control {display: block; width: 100%; height: calc(1.5em + .75rem + 2px); padding: .375rem .75rem; font-size:14px; font-weight: 400; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: .25rem; transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; }
.form-group {margin-bottom: 1rem;}
label {display: inline-block;margin-bottom: .5rem;}
.form-control{border-radius:0px;}
.form-group label{font-size:15px;font-weight:600;}
.astrik{color:#f00;}
.login-limiter{width:100%;margin:0 auto;}
.login-container{width: 100%;min-height: 100vh; display: -webkit-box; display: -webkit-flex; display: -moz-box; display: -ms-flexbox; display: flex; flex-wrap: wrap; justify-content: center; align-items: center; padding: 15px; background: #9053c7; background: -webkit-linear-gradient(-135deg, #c850c0, #4158d0); background: -o-linear-gradient(-135deg, #c850c0, #4158d0); background: -moz-linear-gradient(-135deg, #c850c0, #4158d0); background: linear-gradient(-135deg, #c850c0, #4158d0);}
.login-wrap {width:450px;background:#fff;border-radius:5px;overflow:hidden; display:-webkit-box; display:-webkit-flex;display:-moz-box;display:-ms-flexbox; display:flex; flex-wrap:wrap; justify-content:space-between; padding:30px;}
.login-header {width:100%;border-bottom:solid 1px #d6d6d6;padding-bottom:20px;}
.login-icon{width:40px;display:inline-block;margin-right:20px;vertical-align:middle;}
.login-icon img{width:100%;}
.login-title{display:inline-block;vertical-align:middle;}
.login-form{width:100%;margin-top:20px;}
.btn {display: inline-block; font-weight: 400; color: #212529; text-align: center; vertical-align: middle; -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; background-color: transparent; border: 1px solid transparent; padding: .375rem .75rem; font-size: 1rem; line-height: 1.5; border-radius: .25rem; transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out; }
.btn-primary {color: #fff; background-color: #007bff; border-color: #007bff; }
</style>
	
</head>

<body>
	<div class="login-limiter">
		<div class="login-container">
			<div class="login-wrap">				
				<div class="login-header">
					<div class="login-icon"><img src="img/login-icon.png" alt=""></div>
					<div class="login-title">
						<h3>Login</h3>
						<small><strong>Please enter your credentials to login.</strong></small>
					</div>
				</div>
				<div class="login-form">
					<form>
						<div class="form-group">
							<label>Username<span class="astrik">*</span></label>
							<input type="text" class="form-control" placeholder="Username">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Password<span class="astrik">*</span></label>
							<input type="password" class="form-control" placeholder="******">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary common-btn">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>