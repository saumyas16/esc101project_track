<?php
session_start();
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codedata";
$_SESSION['id'];
$_SESSION['pass'];
$_SESSION['name'];
$_SESSION['photo'];
$_SESSION['cname'];
$_SESSION['chlnaccp'];
$_SESSION['cwon'];
$_SESSION['clost'];
$_SESSION['tprofc'];
$_SESSION['cgiven'];
$_SESSION['uaccp'];
$_SESSION['tprofg'];
$_SESSION['tcoins'];
$_SESSION['rank'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM olduserdetails WHERE id='$rn'";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    $row = $result->fetch_assoc();
	
	$_SESSION['id']=$row['id'];
	$_SESSION['pass']=$row['pass'];
	$_SESSION['name']=$row['name'];
	$_SESSION['photo']=$row['photo'];
	$_SESSION['cname']=$row['cname'];
	$_SESSION['chlnaccp']=$row['chlnaccp'];
	$_SESSION['cwon']=$row['cwon'];
	$_SESSION['clost']=$row['clost'];
	$_SESSION['tprofc']=$row['tprofc'];
	$_SESSION['cgiven']=$row['cgiven'];
	$_SESSION['uaccp']=$row['uaccp'];
	$_SESSION['tprofg']=$row['tprofg'];
	$_SESSION['tcoins']=$row['tcoins'];
	$_SESSION['rank']=$row['rank'];

} else {
    echo "Error loading the profile page";
}
$conn->close();
?> 