<?php

 $link = mysqli_connect("localhost", "root", "", "project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

	$blood_group = mysqli_real_escape_string($link, $_REQUEST['blood_group']);
	
	$sql = "SELECT * FROM plasma WHERE blood_group='$blood_group'";
	$result = $link->query($sql);

	echo("<table> <tr> <th> NAME </th> <th> MOBILE </th> <th> EMAIL </th> <th> BLOOD </th> <th> RECOVERED DATE </th></tr>");
	if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo ("<tr><td>" . $row["first_name"]. "</td><td>" . $row["mob_number"]. "</td><td>" . $row["email_id"]. "</td><td>" . $row["blood_group"]. "</td><td>" . $row["recovered_date"]. "</td></tr>");
  }
} else {
  echo "0 results";
}


mysqli_close($link);

echo("</table><br><button onclick=\"location.href='http://localhost/plasmadonation/HOMEprotoplasma.html'\">Back to Home</button><br>");
?>