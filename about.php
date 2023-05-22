<!DOCTYPE HTML>
<html>
<?php include('./layout/head.php'); ?>
<style>
	.nav-link {
		border-bottom: none !important;
	}
</style>

<body class="is-preload">
	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<?php include('./layout/navbar.php'); ?>

		<div class="pageheading text-center mt-4">
			<h1 class="mb-2">About Us</h1>
			<p> <a href="/" class="">Home</a> <span>/ About </span></p>
		</div>
		<?php include('about-section.php'); ?>
		<?php include('services.php'); ?>

		<?php include('industry-we-serve.php'); ?>
		<?php include('team-section.php'); ?>
		<?php include('./layout/page-footer.php'); ?>
</body>

</html>