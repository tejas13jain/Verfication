<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<title>Login</title>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="" />
		<meta property="og:url" content="" />
		<meta property="og:site_name" content="kyc" />
		<link rel="canonical" href="" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		 <meta name="csrf-token" content="{{ csrf_token() }}">
	</head>
	<body data-kt-name="metronic" id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				
				<div class="d-flex flex-lg-row-fluid">
					<div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
						<img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="assets/media/auth/agency.png" alt="" />
						<img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" src="assets/media/auth/agency-dark.png" alt="" />
						<h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">Fast, Efficient and Productive</h1>
						<div class="text-gray-600 fs-base text-center fw-semibold">In this kind of post,
						<a href="#" class="opacity-75-hover text-primary me-1">the blogger</a>introduces a person they’ve interviewed
						<br />and provides some background information about
						<a href="#" class="opacity-75-hover text-primary me-1">the interviewee</a>and their
						<br />work following this is a transcript of the interview.</div>
					</div>
				</div>

				<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
					<div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
						<div class="w-md-400px">
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">Sign In</h1>
									
								</div>
								<div class="separator separator-content my-14">
									<span class="w-125px text-gray-500 fw-semibold fs-7">Email</span>
								</div>
								<form id="loginForm">
								<div class="fv-row mb-8">
									<input type="text" placeholder="Email" name="email" id="email" autocomplete="off" class="form-control bg-transparent" required/>
								</div>
							
								<div class="fv-row mb-3">
									<input type="password" placeholder="Password" name="password" id="password" required ="off" class="form-control bg-transparent" />
								</div>
								<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
									<div></div>
									<a href="" class="link-primary">Forgot Password ?</a>
									<!--end::Link-->
								</div>
								
								<div class="d-grid mb-10">
									<button type="submit" class="btn btn-primary">
										Login
									</button>
								</div>
								</form>

								<div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
								<a href="{{ url('/register') }}" class="link-primary">Sign up</a></div>
								<!--end::Sign up-->
							
							<div id="error" style="color:red;"></div>

							<!--end::Form-->
						</div>
						<!--end::Content-->
					</div>
				</div>
			</div>
		</div>

		 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script>
			$('#loginForm').on('submit', function (e) {
			e.preventDefault();
			const email = $('input[name="email"]').val();
			const password = $('input[name="password"]').val();
			$.ajax({
				url: '/api/login',
				type: 'POST',
				contentType: 'application/json',
				data: JSON.stringify({ email, password }),
				success: function (response) {
					if (response.status) {
						localStorage.setItem('token', response.token);
						window.location.href = '/dashboard?token=' + response.token;
					} else {
						$('#error').text('Login failed.');
					}
				},
				error: function (xhr) {
					$('#error').text('Error: ' + xhr.responseText);
				}
				});
			});
		</script>
	</body>
</html>