<!doctype html>
<html lang="en">
<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:19 GMT -->
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Signin Client Report</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<!-- Canonical SEO -->
	<link rel="canonical" href="//www.creative-tim.com/product/material-dashboard-pro" />
	<!-- Bootstrap core CSS     -->
	<link href="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
	<!--  Material Dashboard CSS    -->
	<link href="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/css/material-dashboard.css" rel="stylesheet" />
	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/css/demo.css" rel="stylesheet" />
	<!--     Fonts and icons     -->
	<link href="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/css/font-awesome.css" rel="stylesheet" />
	<link href="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/css/google-roboto-300-700.css" rel="stylesheet" />
</head>
<body>
	<nav class="navbar navbar-primary navbar-transparent navbar-absolute">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
		</div>
	</nav>
	<div class="wrapper wrapper-full-page">
		<div class="full-page login-page" filter-color="black" data-image="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/img/login.jpg">
			<!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
			<div class="content">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
							<form method="post" action="<?php echo base_url('auth-login'); ?>">
								<div class="card card-login card-hidden">
									<div class="card-header text-center" data-background-color="rose">
										<h4 class="card-title">Signin</h4>
									</div>
									<p class="category text-center">
										auth section
									</p>
									<div class="card-content">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">face</i>
											</span>
											<div class="form-group label-floating">
												<label class="control-label">Username</label>
												<input type="text" class="form-control" name="usernameTxt" placeholder="Username" required="">
											</div>
										</div>
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">lock_outline</i>
											</span>
											<div class="form-group label-floating">
												<label class="control-label">Password</label>
												<input type="password" class="form-control" name="passwordTxt" placeholder="Password" required="">
											</div>
										</div>
									</div>
									<div class="footer text-center">
										<button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg">Login</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container">
					<!-- <nav class="pull-left">
						<ul>
							<li>
								<a href="#">
									Home
								</a>
							</li>
							<li>
								<a href="#">
									Company
								</a>
							</li>
							<li>
								<a href="#">
									Portfolio
								</a>
							</li>
							<li>
								<a href="#">
									Blog
								</a>
							</li>
						</ul>
					</nav> -->
					<p class="copyright pull-right">
						&copy;
						<script>
							document.write(new Date().getFullYear())
						</script>
						<a href="http://www.waktu.my.id/">Pebri Waktu.my.id</a>
					</p>
				</div>
			</footer>
		</div>
	</div>
</body>

</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/material.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
<!-- Select Plugin -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/material-dashboard.js"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url('assets/material-dashboard-pro'); ?>/assets/js/demo.js"></script>
<script type="text/javascript">
	$().ready(function() {
		demo.checkFullPageBackgroundImage();

		setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
	});
</script>
<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/pages/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:32:19 GMT -->
</html>