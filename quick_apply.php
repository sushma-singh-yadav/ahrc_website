<?php
    $job1 = [
        'title' => 'Direct Sales Executive',
        'location' => 'Gurgaon',
        'experience' => '3+ years',
        'posted_on' => '17-03-2023'
    ];
    $job2 = [
        'title' => 'Direct Sales Executive',
        'location' => 'Gurgaon',
        'experience' => '3+ years',
        'posted_on' => '17-03-2023'
    ];
    $jobs = [
        $job1, $job2
    ];
?>

<div class="quickApplysection">
				<div class="container p-10">
				<div class="row p-5">
				<div class="col-md-12 ">
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
                                <td><?php echo $job['title'];?></td>
                                <td><?php echo $job['location'];?></td>
                                <td><?php echo $job['experience'];?></td>
                                <td><?php echo $job['posted_on'];?></td>
                                <td><button class="btn btn-warning">Apply</button></td>
                            </tr>
                                <?php } ?>
                        </tbody>
                    </table>

                    <div class=" text-center">
                    <a class="btn btn-primary text-center">View All</a>
                    </div>
                </div>
            </div>
            </div>
            </div>