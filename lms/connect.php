<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lm_s";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: ");
}
echo "successfully";

$sql="INSERT INTO l_m(n,e,contact,a)VALUES('$_POST[Name]','$_POST[Email]','$_POST[Contact]','$_POST[Address]')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>