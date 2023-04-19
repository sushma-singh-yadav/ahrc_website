<!DOCTYPE HTML>
<html>
	<head>
		<title>AHRC | All Jobs Listing</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>

    <body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
<?php
     $alljobs = file_get_contents('./json/jobJson.json');
     $jobs = json_decode($alljobs);
?>
				<!-- Header -->
				<div class="container">
                <h4 class="text-center mb-0">Quick <span class="text-warning">Apply</span> </h4>
                    <p class="text-center mb-4 text-secondary">We Are Well-Versed With The Different Job Opportunities.</p>
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
                                <td><button class="btn btn-warning">Apply</button></td>
                            </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </body>
</html>