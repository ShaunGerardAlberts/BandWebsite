<?php
  include('config_db.php'); // load the config file
  include('connect_db.php'); // load the connection instructions

  $message = false; // define this variable "false" as default

  if (isset($_POST['submit'])){ // check that the submit button has been clicked (sent in the $_POST data)
  	// when the form is submitted correctly, get the name and email from the post data and save them to variables:
  	$new_name = $_POST['name'];
  	$new_email = $_POST['email'];

  	$sql = "INSERT INTO signups (name, email)
  	VALUES ('$new_name', '$new_email')"; // create the SQL statement, using the name and email variables from above

  	if (mysqli_query($conn, $sql)) {
  		// if successful, define $message variable with this success text.
  		$message = "Thank you! You will now be in touch with our latest news.";
  	} else {
  		// otherwise define the $message variable with the error that happened.
  		$message = "Error: " . $sql . "<br>" . mysqli_error($conn);
  	}

  	mysqli_close($conn); // close $conn as good practice (security)
  }
?>
