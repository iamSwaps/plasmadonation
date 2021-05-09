<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <style>
    h1.ex1 { 
    padding-top: 25px;
    font-family: Arial, Helvetica, sans-serif
    }
    </style>    

    <title>Plasma Donation</title>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="/index.html" style="max-width: 4%;">
            <img src="/hospi.png" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/REGISTERprotoplasma.html">Donate Plasma</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/REQUESTprotoplasma.html">Search Donor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ADMINlogin.html">Admin</a>
                </li>

            </ul>
        </div>
</nav>
    <h1 align ="center" class="ex1 text-danger">
	<?php	

	 $link = mysqli_connect("sql309.epizy.com", "epiz_28490176", "Yjx7sbh3Pf9fB", "epiz_28490176_plasma");
	 
	// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}
        
		$sql = "INSERT INTO plasma (first_name, mob_number, email_id, blood_group, recovered_date) VALUES ('".$_REQUEST["first_name"]."', '".$_REQUEST["mob_number"]."', '".$_REQUEST["email_id"]."' , '".$_REQUEST["blood_group"]."' , '".$_REQUEST["recovered_date"]."')";


		if(mysqli_query($link, $sql)){
			echo "Thank you for the contribution";
		} 
		else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}


	mysqli_close($link);
	?>
    </h1>
    <br> <p align = "center" class = "ex1 text-muted">Patients will try to contact to you. </p><!--on: <?php echo $_POST["mob_number"];?> or else <?php echo $_POST["email_id"];?></p>-->
    <br><br>
    <div class="container col-5 mt-lg-4">
    <a href="/index.html" >
    <button type="submit" class="btn btn-success form-control  btn-block"> Back to Home </button>
    </a>
    </div>
</div>
</body>
</html>
