<!DOCTYPE HTML>
<html>
<?php include('./layout/head.php');?>
	
	<style>
	.nav-link {
    border-bottom: none!important;}
	</style>
	
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
			<?php include('./layout/navbar.php');?>

				<!-- Menu end-->
				<div class="jobSeekerBg">
				<div class="container ">
					<div class="row ">
					<div class="col-md-6 p15 text-white">
						<h1>Job Seeker</h1>
						<p>Apply for the Job in Japan, Italy, Germany, France, Canada, Australia, Singapore, UAE, and 10 other countries</p>
						<a class="btn btn-secondary btnBg" href="/upload_cv.php">Find A Job</a>
					</div>
					<div class="col-md-6 p15 textAlignEnd text-white">
						<h1 class="text-end">Employers</h1>
						<p>We help you hire the right talent through our Recruitment Process Outsourcing (RPO) & Project Work Outsourcing (PWO) Solutions</p>
						<a class="btn btn-secondary btnBg" href="/upload_cv.php">Post A Job</a>
					</div>
				</div>
				</div>
				</div>

				<?php include('quick_apply.php');?>
				<?php include('cv-upload.php');?>
				<?php include('about-section.php');?>
				<?php include('services.php');?>
				
				<?php //include('what-we-offer.php');?>
				<?php include('industry-we-serve.php');?>
				<?php include('./layout/page-footer.php');?>


			




	</body>
</html>