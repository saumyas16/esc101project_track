
<?php
session_start();

if(isset($_POST["submit"]))
{
		if(isset($_POST["submit"])){
// Create connection
$conn = new mysqli("localhost", "root", "","codedata");  // Check connection
if ($conn->connect_error)
	{
	die("Connection failed: " . $conn->connect_error);
	}
			$rn=$_POST["emailadd"];
			$sn=$_POST["pass"];
					$sql = "SELECT * FROM olduserdetails WHERE id=$rn";
					$result = $conn->query($sql) or die("Error: ". mysqli_error($conn). " with query ");


				
			if($result->num_rows > 0)
			{
				$row = $result->fetch_assoc();
				if($row['id']==$rn&&$row['pass']==$sn)
				{
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
				
				echo "<script type=\"text/javascript\"> window.location.replace(\"welcuser.php\"); </script>";
				}
				else 
				{
				echo "<script type=\"text/javascript\"> window.alert(\"INVALID USERNAME OR PASSWORD\"); </script>";
				echo "<script type=\"text/javascript\"> window.location.replace(\"prof.html\"); </script>";
				}
			}
}

}
//$conn->close();
?>
