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
				<?php include('services.php');?>
				
				<?php include('what-we-offer.php');?>
				<?php include('industry-we-serve.php');?>

				<div class="cv-upload">
								<div class="container">
								<div class="row p-5">
									<div class="col-md-6">
										<img src="./images/cv-upload.jpeg" alt="Upload cv" class="text-center img-responsive w-100">
									</div>
									<div class="col-md-6 cv-upload-center">
											<h3 class="text-center m-4">Click Here To Upload CV</h3>
											<p>Do Post Your Resume and prepare for the upward ascent in the professional environment as your corporate life begins!
											</p>
											<a href="upload_cv.php" >
												<button class="btn btn-warning w-100 p-3">Upload Your CV</button>
											</a>
											<div id="mymessage1" style="color:red"></div>
											
										</div>
								</div>
								</div>
							</div>

				<!-- Footer -->
					<footer id="footer" class="footerbg">
						<div class="inner">
							<section class="text-white">
								<h2>Contact Us</h2>
								<div id="mymessage" style="color:red"></div>
								<form action="" method="POST" id="myform" >
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Name" required />
										</div>

										<div class="field half">
											<input type="text" name="email" id="email" placeholder="Email" required />
										</div>
										
										<div class="field">
											<input type="text" name="subject" id="subject" placeholder="Subject" required />
										</div>

										<div class="field">
											<textarea name="message" id="message" rows="3" placeholder="Enter Message " required></textarea>
										</div>

										<div class="field text-right">
											<label>&nbsp;</label>

											<ul class="actions">
												<li><button type="submit" name="submit" value="Send Message" class="btn btn-warning" >Send Message</button></li>
											</ul>
										</div>
									</div>
								</form>
								
								
								<img id="my_loading_icon" style="display:none" src="images/please_wait.gif" width="100" height="80"/>
								
							</section>
							<section class="text-white">
								<h2>Contact Info</h2>

								<ul class="alt">
									<li><span class="fa fa-envelope-o"></span> <a href="#" class="text-white">hr@ahrc.co.in</a></li>
									<li><span class="fa fa-phone"></span> 8802020238 / 9811727993  </li>
									<li><span class="fa fa-map-pin"></span> RZ - 26P/16, 3rd Floor, Street No.9, Indira Park, Palam, New Delhi - 110045 </li>
								</ul>

								<h2>Follow Us</h2>

								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								</ul>
							</section>

							<ul class="copyright text-white">
								<li>Copyright © 2020 AHRC Pvt Ltd </li>
								
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
		<?php include './layout/footer.php';?>
			
			
			<script>

$(document).ready(function(){
	
	 $("#myform").submit(function(e) {
				$('#my_loading_icon').show();
            });
	
});

</script>


<script>

$(document).ready(function(){
	
	 $("#myform1").submit(function(e) {
				$('#my_loading_icon1').show();
            });
	
});

</script>


<?php 

if(isset($_POST['submit']))
{
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		
		$to = "email@example.com"; // this is your Email address
		$from = $_POST['email']; // this is the sender's Email address
		
		$subject = "Enquiry From AHRC Website";
		$message = "Name : ".$name . " <br> Email : " . $email . "<br> Subject : " . $subject . "<br> Message : ". $message;
        $headers = "";
		$headers = "From:" . $from . "\r\n";
		$headers .= "Organization: AHRC\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		//$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
		$headers .= "X-Priority: 3\r\n";
		$headers .= "X-Mailer: PHP". phpversion() ."\r\n";
		
		mail($to,$subject,$message,$headers);
		?>
		   <script>
		      $(document).ready(function(){
				   location.href = "#";
                   location.href = "#mymessage"; 
				   $('#mymessage').html('Your Message has been Sent. Thank you, We Will Contact you shortly');
			  });
		   </script>
		<?php
	}
	else
	{
		?>
		   <script>
		      $(document).ready(function(){
				   location.href = "#";
                   location.href = "#mymessage"; 
				   $('#mymessage').html('Please Fill All Fields');
			  });
		   </script>
		<?php
	}
}

?>








	</body>
</html>