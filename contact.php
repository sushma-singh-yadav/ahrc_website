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

				<!-- Header -->
				<?php include('./layout/navbar.php');?>
				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h3 class="text-center">Contact Us</h3>
							<!-- <span class="image main"><img src="images/map_location.png" alt="" /></span> -->
							<p></p>
							<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500px" id="gmap_canvas" src="https://maps.google.com/maps?q=RZ - 26P/16, 3rd Floor Street Number 9, Indira Park, Palam, New Delhi, Delhi 110045&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
							<!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=RZ - 26P/16, 3rd Floor Street Number 9, Indira Park, Palam, New Delhi, Delhi 110045&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div> -->
						</div>
					</div>

			

			</div>

		<!-- Scripts -->
		<?php include('./layout/page-footer.php');?>
			
			
						<script>

$(document).ready(function(){
	
	 $("#myform").submit(function(e) {
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
		
		$to = "accurafind.hr@gmail.com"; // this is your Email address
		$from = $_POST['email']; // this is the sender's Email address
		
		$subject = "Enquiry From AHRC Website";
		$message = "Name : ".$name . " <br> Email : " . $email . "<br> Subject : " . $subject . "<br> Message : ". $message;
        $headers = "";
		$from = "hr@ahrc.co.in";
		$headers .= "From:" . $from . "\r\n";
		$headers .= "cc: shhnwzqdr@gmail.com" . "\r\n";
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