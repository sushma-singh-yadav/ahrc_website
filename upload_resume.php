<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3>Contact Form</h3>

<div id="mymessage" style="color:red"></div>

<div class="container">
  <form action="" method="POST" id="myform" enctype='multipart/form-data'>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.." required >

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your Email.." required>
	
	<label for="cv">Upload CV (txt, doc, pdf) </label>
    <input type="file" id="cv" name="cv" placeholder="Your Subject.." required >
	

   
    <input type="submit" value="Submit" name="submit">
  </form>
  
  
  <img id="my_loading_icon" style="display:none" src="loading_icon.gif" width="100" height="80"/>
  
  
</div>


<script>

$(document).ready(function(){
	
	 $("#myform").submit(function(e) {
				$('#my_loading_icon').show();
            });
	
});

</script>
  
  
</div>





<?php 


if(isset($_POST['submit']))
{
    print_r($_FILES);
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
				    $target_file = $target_dir . uniqid() . '_'.basename($_FILES["cv"]["name"]) ;
					
					$uploadOk = 1;
					
					
					if (move_uploaded_file($_FILES["cv"]["tmp_name"], $target_file)) 
					{
					   $upload_ok = 1;
					} 
					else 
					{
					  $upload_ok = 0;
					}
					
					$to = "email@example.com"; // this is your Email address
					$from = $_POST['email']; // this is the sender's Email address
					$name = $_POST['name'];
					$email = $_POST['email'];
					$subject = "Enquiry From AHRC Website";
					$message = "Name : ".$name . " <br> Email : " . $email . "<br><br> Resume => ". "https://ahrc.co.in/".$target_file;
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
							   //location.href = "#mymessage"; 
							   $('#mymessage').html('Your CV is successfully Uploaded. Thank you, We Will Contact you shortly');
						  });
					   </script>
				   <?php
			}
			else
			{
				?>
                	<script>
					  $(document).ready(function(){
						   //location.href = "#mymessage"; 
						   $('#mymessage').html('Error : You CV is not uploaded. Errors : Invalid File Type');
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
					   //location.href = "#mymessage"; 
					   $('#mymessage').html('Error : You CV is not uploaded. Errors : Invalid file type, file size is too big. Resolve this and send again..');
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
