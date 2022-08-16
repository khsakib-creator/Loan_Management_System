

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

$sql="INSERT INTO l_p(Id,payment,interest,name_c,account_no,late_fee) VALUES ('$_POST[id]','$_POST[payment]','$_POST[interest]','$_POST[name]','$_POST[a]','$_POST[lf]')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

