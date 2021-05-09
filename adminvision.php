<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Plasma Donation</title>

    <style>
        .flex-container {
        display: flex;
        flex-wrap: nowrap;
        background-color: DodgerBlue;
        }

        .flex-container .box {
        background-color: #f1f1f1;
        width: 50%;
        margin: 10px;
        text-align: center;
        line-height: 75px;
        font-size: 30px;
        }
</style>
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
                <li class="nav-item">
                    <a class="nav-link" href="/index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/REGISTERprotoplasma.html">Donate Plasma</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/REQUESTprotoplasma.html">Search Donor</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/ADMINlogin.html">Admin</a>
                </li>

            </ul>
        </div>
</nav>
	

    <div class ="row mt-lg-5">

    <div style="overflow-x:auto;" class ="col ml-lg-5">
        <table id="dtVerticalScrollExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead> 
                <tr> 
                <th> NAME </th> 
                <th> MOBILE </th> 
                <th> EMAIL </th>
                <th> BLOOD </th> 
                <th> RECOVERED DATE </th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $link = mysqli_connect("sql309.epizy.com", "epiz_28490176", "Yjx7sbh3Pf9fB", "epiz_28490176_plasma");
                
                    // Check connection
                    if($link === false){
                        die("ERROR: Could not connect. " . mysqli_connect_error());
                    }
                        
                        $sql = "SELECT * FROM plasma";
                        $result = $link->query($sql);

                        if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo ("<tr><td>" . $row["first_name"]. "</td><td>" . $row["mob_number"]. "</td><td>" . $row["email_id"]. "</td><td>" . $row["blood_group"]. "</td><td>" . $row["recovered_date"]. "</td></tr>");
                    }
                    } else {
                    echo "0 results";
                    }
                    mysqli_close($link);
                ?>
            </tbody>
        </table>
    </div>

    <div class ="col">
        <form action="/admindelete.php" method="POST">
            <div class ="form-group">
            <label for="exampleInputname1">First Name</label>
            <input type="text" class="form-control" id="exampleInputname" placeholder="Enter first_name to delete" name="first_name" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>

    <br><br>
    <a href="/index.html" >
    <button type="submit" class="container col-5 mt-lg-4 btn btn-success form-control  btn-block">Back to Home</button>
    </a>
</div>
</body>
</html>

