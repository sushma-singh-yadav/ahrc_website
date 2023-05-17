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



