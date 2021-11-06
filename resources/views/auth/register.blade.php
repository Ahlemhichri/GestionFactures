<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Register</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css"> </head>

<body>
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">
				<div class="loginbox">
					<div class="login-left"> <img class="img-fluid"> </div>
					<div class="login-right">
						<div class="login-right-wrap">
							<h1 class="mb-3">Register</h1>
                            <form method="POST" action="{{ route('register') }}">
                        @csrf
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Name" name=name  required autocomplete="name" autofocus> </div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Email"  name=email  required autocomplete="email" autofocus> </div>
								<div class="form-group">
									<input class="form-control" type="password" placeholder="Password"  name="password" required autocomplete="new-password"> </div>
								<div class="form-group">
									<input class="form-control" type="password" placeholder="Confirm Password"   name="password_confirmation" required autocomplete="new-password"> </div>
								<div class="form-group mb-0">
									<button class="btn btn-primary btn-block" type="submit">Register</button>
								</div>
							</form>
							<div class="text-center dont-have">Already have an account? <a href="{{ route('login') }}">Login</a> </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>

</html>