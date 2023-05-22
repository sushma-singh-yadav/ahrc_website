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
<?php
     $alljobs = file_get_contents('./json/jobJson.json');
     $jobs = json_decode($alljobs);
?>
				<!-- Header -->
                <div class="pageheading text-center mt-4">
							<h1 class="mb-2">Candidate Zone</h1>
							<p>  <a href="/" class="">Home</a>  <span>/  Candidate Zone </span></p>
				</div>

				<div class="container">
				<div class="row">
				<div class="col-md-12 p-5">
                    <h4>All Jobs Listings</h4>
                <table class="table table-bordered">
                        <thead class="bg-primary">
                            <tr >
                                <th>Job title</th>
                                <th>Location</th>
                                <th>Experience</th>
                                <th>Posted On</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php 
                                foreach($jobs as $job) {
                                    ?>

                            <tr class="bg-default">
                                <td><?php echo $job->title;?></td>
                                <td><?php echo $job->location;?></td>
                                <td><?php echo $job->experience;?></td>
                                <td><?php echo $job->posted_on;?></td>
                                <td><a class="btn btn-warning" href="/upload_cv.php">Apply</a></td>
                            </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
                </div>
                </div>
            </div>
            <?php include('./layout/page-footer.php');?>


</body>
</html>