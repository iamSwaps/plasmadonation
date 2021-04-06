
	<?php	
	
	 $link = mysqli_connect("localhost", "root", "", "project");
	 
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}

		$first_name =mysqli_real_escape_string($link, $_REQUEST['first_name']);
		$mob_number =mysqli_real_escape_string($link, $_REQUEST['mob_number']);
		$email_id = mysqli_real_escape_string($link, $_REQUEST['email_id']);
		$blood_group = mysqli_real_escape_string($link, $_REQUEST['blood_group']);
		$recovered_date = mysqli_real_escape_string($link, $_REQUEST['recovered_date']);
	   
		$sql = "INSERT INTO plasma (first_name, mob_number, email_id, blood_group, recovered_date) VALUES ('$first_name', '$mob_number', '$email_id' , '$blood_group' , '$recovered_date')";


		if(mysqli_query($link, $sql)){
			echo "Records added successfully.";
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}


	mysqli_close($link);

	echo("<button onclick=\"location.href='http://localhost/plasmadonation/HOMEprotoplasma.html'\">Back to Home</button>");
	?>

