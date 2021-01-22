<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Register | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
    
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/linearicons/style.css') }}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>
								<p class="lead">Register New Account</p>
							</div>
                            <div class="results mb-3">
                                @if(Session::get('success')) 
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                @endif
                                @if(Session::get('fail')) 
                                    <div class="alert alert-success">
                                        {{ Session::get('fail') }}
                                    </div>
                                @endif
                            </div>
							<form class="form-auth-small" action="{{ route('auth.create') }}" method="POST">
                            @csrf
                                <div class="form-group">
									<label for="signin-email" class="control-label sr-only">Name</label>
									<input type="text" class="form-control" id="signin-email"  placeholder="Insert your full name" name="name" value="{{ old('name') }}">
                                    <span class="text-danger">@error('name'){{ $message }} @enderror </span>
								</div>
								<div class="form-group">
									<label for="Username" class="control-label sr-only">User Name</label>
									<input type="text" class="form-control" id="Username"  placeholder="Insert Username" name="username" value="{{ old('username') }}">
                                    <span class="text-danger">@error('username'){{ $message }} @enderror </span>
								</div>
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="text" class="form-control" id="signin-email"placeholder="Email" name="email" value="{{ old('email') }}">
                                    <span class="text-danger">@error('email'){{ $message }} @enderror </span>
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" class="form-control" id="signin-password"  placeholder="Password" name="password" value="{{ old('password') }}">
                                    <span class="text-danger">@error('password'){{ $message }} @enderror </span>
								</div>
								
								<button type="submit" class="btn btn-primary btn-lg btn-block">Create New Account</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Free Bootstrap dashboard template</h1>
							<p>by The Develovers</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
