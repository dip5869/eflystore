<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>eFlyStore India Private Limited | Request Password</title>

	<!-- Site favicon -->
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/e-fevicon.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body>
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.php">
					<img src="vendors/images/eflystore-india.png" class="img-fluid" alt="Company LOGO">
				</a>
			</div>
			<div class="login-menu">
				<ul>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6">
					<img src="vendors/images/forgot-password.png" alt="">
				</div>
				<div class="col-md-6">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Forgot Password</h2>
						</div>
						<h6 class="mb-20">Enter your details to reset your password</h6>
						<form>
							<div class="row">
								<div class="col-md-12 col-12">
									<div class="input-group custom">
										<input type="text" class="form-control form-control-lg" placeholder="Full Name">
										<div class="input-group-append custom">
											<span class="input-group-text"><i class="icon-copy ion-edit"></i></span>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-12">
									<div class="input-group custom">
										<input type="text" class="form-control form-control-lg" placeholder="Employee ID">
										<div class="input-group-append custom">
											<span class="input-group-text"><i class="icon-copy fa fa-id-card" aria-hidden="true"></i></span>
										</div>
									</div>

								</div>

								<div class="col-md-12 col-12">
									<div class="input-group custom">
										<textarea class="form-control form-control-lg" placeholder="Enter message"></textarea>
										<div class="input-group-append custom">
											<span class="input-group-text"></span>
										</div>
									</div>
								</div>
							</div>
							<div class="row ">
								<div class="col-md-12">
									<div class="input-group mb-0">
										<a class="btn btn-primary btn-lg btn-block" href="index.php">Submit</a>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<?php include 'footer.php'; ?>
</body>

</html>