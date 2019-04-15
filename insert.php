<?php
session_start();

if(isset($_POST["submit"])){
// Create connection
$conn = new mysqli("localhost", "root", "","codedata");  // Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$rn=$_POST['id'];		$sn=$_POST['pass'];		$a=$_POST['user']; 
$b=$_POST['cname'];

$f=$_POST['pfile'];
$sql="insert into olduserdetails values($rn,'$sn','$a','$f','$b',0,0,0,0,0,0,0,250,0)";
//echo "insert into olduserdetails values($rn,'$sn','$a','$f','$b',0,0,0,0,0,0,0,250,0)";
if ($conn->query($sql) === TRUE) {
	$sqli = "SELECT * FROM olduserdetails WHERE id='$rn'";
					$result = $conn->query($sqli) or die("Error: ". mysql_error(). " with query ");


				
			if($result->num_rows > 0)
			{
				echo "<script type=\"text/javascript\"> window.alert(\"Registration Successful\"); </script>";
		
	echo "<script type=\"text/javascript\"> window.location.replace(\"prof.html\"); </script>";
					}
} else 
{
	echo "ERROR".mysqli_error($conn);
}
//$conn->close();
}
?>