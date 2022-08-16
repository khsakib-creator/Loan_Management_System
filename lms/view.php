<html lang="en">
<style>

</style>
<meta charset="utf-8">
    <title>LMS - LMS BY SAKIB</title>
   
    
    <link href="css/style.css" rel="stylesheet">
   <!-- Header Start -->
<div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 bg-secondary d-none d-lg-block">
                <a href="" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-3 text-primary">LMS</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row bg-dark d-none d-lg-flex">
                    <div class="col-lg-7 text-left text-white">
                        <div class="h-100 d-inline-flex align-items-center border-right border-primary py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small>sakibulhabib@gmail.com</small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>01789557517</small>
                        </div>
                    </div>
                    
                </div>
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary">LMS</h1>
                    </a>
                    
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.html" class="nav-item nav-link active">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <a href="service.html" class="nav-item nav-link">Loan </a>
                            <a href="project.html" class="nav-item nav-link">Registertion</a>
                            <a href="view.php" class="nav-item nav-link">View loan</a>
                            <a href="payment.html" class="nav-item nav-link">loan Payment</a>


                            

                                
                         
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                       
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->
<head>
    <title>view</title>

</head>

<body>
    <center>
    <div class="main">
        <h1>Search</h1>

<br>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">

<button onclick="window.print();" class="noPrint">
Print
</button>
	
</form>

<?php

$con = new PDO("mysql:host=localhost;dbname=lm_s",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `l_m` WHERE contact = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br>
		<table>
			<tr>
				<th>Contact</th>
				<th>Name</th>
				<th>Address</th>
				<th>E-mail</th>
			</tr>
			<tr>
				<td><?php echo $row->contact; ?></td>
				<td><?php echo $row->n;?></td>
				<td><?php echo $row->a;?></td>
				<td><?php echo $row->e;?></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "id Does not exist";
		}


}
?>
<br><br>

<h1> Client Resistation</h1>
<br><br>

     <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lm_s";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM l_m";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table id='myTable'>";
	echo "<tr>
    <th>Contact</th>
    <th>Name</th>
    <th>Address</th>
    <th>E-mail</th>
</tr>";
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
        echo "<td>" . $row["contact"]. "</td><td>" . $row["n"]. "</td><td>" .$row["a"]."</td><td>" . $row["e"]. "</td>";
        
	echo "</tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<br><br>
<h1>Loan Payment</h1>
<br><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lm_s";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM l_p";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table id='myTable'>";
	echo "<tr>
    <th>ID</th>
    <th>contact</th>
    <th>Payment</th>
    <th>Interest</th>
    <th>Name</th>
    <th>Account No</th>
    <th>Late Fee</th>
</tr>";
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
        echo "<td>" . $row["Id"]. "</td><td>". $row["contact"]. "</td><td>" . $row["payment"]. "</td><td>" .$row["interest"]."</td><td>" . $row["name_c"]. "</td><td>" . $row["account_no"]. "</td><td>" . $row["late_fee"]. "</td>";
        
	echo "</tr>";
    }
echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>



</div>
</center>
</body>
</html>