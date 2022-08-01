<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>LOGIN</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
	<link rel="stylesheet" href="login.css" />
</head>

<body style="background-image: url('wave.svg'); background-repeat:no-repeat; background-position:center bottom;">
	@if (session()->has('success'))
	<div class="alert alert-success" role="alert">
		{{session('success')}}
	</div>
	@endif
	@if (session()->has('LoginError'))
	<div class="alert alert-danger" role="alert">
		{{session('LoginError')}}
	</div>
	@endif
	<div class="wrapper">
		<div class="logo">
			<img src="https://i.pinimg.com/550x/45/c3/df/45c3df6b303de1c9eb6f0cb502767987.jpg" alt="" />
		</div>
		<div class="text-center mt-4 name">Preject Web</div>
		<form class="p-3 mt-3" method="POST" action="{{url('/login')}}">
			@csrf
			<div class="form-field d-flex align-items-center">
				<span class="far fa-user"></span>
				<input type="text" name="email" id="userName" placeholder="Email" autofocus />
			</div>
			@error('email')<div id="invalid-feedback" style="color: red !important">Plese Insert Valid Email</div>
			@enderror
			<div class="form-field d-flex align-items-center">
				<span class="fas fa-key"></span>
				<input type="password" name="password" id="pwd" placeholder="Password" />
			</div>
			<button class="btn mt-3 align-items-center" name="login" href="index.php">Login</button>
		</form>
		<div class="text-center fs-6">
			<a href="{{url('/sign')}}">Register Here</a>
		</div>
	</div>
</body>

</html>