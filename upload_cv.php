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
							<h3 class="text-center">Upload CV</h3>

							

							  <div class="row">
							  <div class="col-md-3 col-sm-12">
							  <div class="image main">
								 <img class="logo-image img-fluid" src="images/resume_photo.png" alt="AHRC PVT LTD" style="width:auto; height:300px;">
							</div>
							  </div>
								<div class="col-md-9 col-sm-12">
								    
									
									
									<div id="mymessage1" style="color:red"></div>

									<div class="container">
										<form action="" method="POST" id="myform1" enctype='multipart/form-data'>
										<label for="name">Name</label>
										<input type="text" id="name" name="name" placeholder="Your name.." required >

										<label for="email">Email</label>
										<input type="email" id="email" name="email" placeholder="Your Email.." required>

										<label for="cv">Upload CV (txt, doc, pdf) </label>
										<input type="file" id="cv" name="cv" placeholder="Your Subject.." required >


                                        <div class="field text-center">
											<label>&nbsp;</label>

											<ul class="actions">
												<li><input type="submit" name="submit1" value="Submit" class="primary" /></li>
											    <span id="my_loading_icon1" style="display:none">
												<img src="images/please_wait.gif" width="100" height="80"/>
                                                File Uploading ... 
												</span>
											</ul>
										</div>
										
										
										
										</form>


										

									</div> 
									
								</div>

							</div>
							
						</div>
					</div>

				

			</div>
			
			
			
			
			
			
			
			
			

		<!-- Scripts -->
		<?php include('./layout/page-footer.php');?>
			
<script>
$(document).ready(function(){
  $("form").submit(function(){
    $('#my_loading_icon1').show();
  });
});
</script>			
			
			
			
			<?php 


if(isset($_POST['submit1']))
{
    //print_r($_FILES);
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_FILES["cv"]) )
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$file_type_arr = ['doc', 'docx', 'txt', 'pdf'];
	
		if ($_FILES["cv"]["size"] < 50000000  && $_FILES["cv"]["error"] == 0) 
		{
		    $target_dir = "uploads/cv/";
			$target_file = $target_dir . basename($_FILES["cv"]["name"]);
			$file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			
			if(in_array($file_type, $file_type_arr))
			{
				    $file_name = str_replace(' ', '_', basename($_FILES["cv"]["name"]));
					$target_file = $target_dir . uniqid() . '_'.$file_name ;
					
					$uploadOk = 1;
					
					
					if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file)) 
					{
					   $upload_ok = 1;
					} 
					else 
					{
					  $upload_ok = 0;
					}
					
					$to = "accurafind.hr@gmail.com";//"zs2t61jmkd5m@ahrc.co.in";//"hr@ahrc.co.in"; //"skpbhuvns@gmail.com"; // this is your Email address
					$from = "hr@ahrc.co.in"; //$_POST['email']; // this is the sender's Email address
					$name = $_POST['name'];
					$email = $_POST['email'];
					$subject = "CV Recieved From AHRC Website";
					$message = "Name : ".$name . " <br> Email : " . $email . "<br><br> Resume => ". "https://ahrc.co.in/".$target_file;
					$headers = "";
					$headers .= "From:" . $from . "\r\n";
					//$headers .= "cc: shhnwzqdr@gmail.com" . "\r\n";
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
							   location.href = "#mymessage1"; 
							   $('#mymessage1').html('Your CV is successfully Uploaded. Thank you, We Will Contact you shortly');
						  });
					   </script>
				   <?php
			}
			else
			{
				?>
                	<script>
					  $(document).ready(function(){
						   location.href = "#mymessage1"; 
						   $('#mymessage1').html('Error : You CV is not uploaded. Errors : Invalid File Type');
					  });
				   </script>
			   <?php
			}		
		}
		
		else
		{
			?>
                			   
			   <script>
				  $(document).ready(function(){
					   location.href = "#mymessage1"; 
					   $('#mymessage1').html('Error : You CV is not uploaded. Errors : Invalid file type, file size is too big. Resolve this and send again..');
				  });
			   </script>
			<?php
		}
	}
	else
	{
		?>
		   <script>
		      $(document).ready(function(){
				   location.href = "#mymessage1"; 
				   $('#mymessage1').html('Please Fill All Fields');
			  });
		   </script>
		<?php
	}
}

?>
	</body>
</html>