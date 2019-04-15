

<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Challenger's Page</title>
    <link rel="icon" type="image/jpg" href="ab.jpg" />
    <style type="text/css">
    #heading {
    font-size: 300%;
    font-family: Candara Light,Calibri;
    color: rgb(0,0,0);
    margin-top:2px;
    margin-left:90px;
    font-weight: bold;
    }

    body {
    background-color: rgb(255,255,255);
    }

    fieldset {
    background-color: rgb(255,255,255);
    width: 700px;
    height:700px;
    margin:30px 5px 10px 320px;
    line-height: 1.6em;
    font-size: 100%;
    color: rgb(0,0,0);
    text-transform: capitalize;
    font-family: Candara Light,Calibri;
    border:0px solid white;
    box-shadow:0px 0px 0px rgb(0,0,0);
    }

    legend {
    color: rgb(255,255,255);
    text-align: center;
    text-transform: uppercase;
    background-color: rgb(0,0,0);
    width: 320px;
    height:30px;
    border-radius:20px;
    font-size:150%;
    padding:6px 5px 5px 5px;
    margin-left:320px;
    }

    input[type="text"].top {
    width: 600px;
    height: 70px;
    padding:10px;
    margin:2px;
    border-radius:20px;
    color: rgb(101,104,112);
    font-size: 100%;
    border: 0px solid rgb(101,104,112);
    background-color: rgb(230,230,230);
    }

    
    textarea{
    width: 600px;
    height: 200px;
    padding:10px;
    margin:2px;;
    border-radius:20px;
    color: rgb(101,104,112);
    font-size: 150%;
    border: 0px solid rgb(255,255,255);
    background-color: rgb(230,230,230);
    }
	input[type="text"] {
    width: 200px;
    height: 20px;
    padding:10px;
    margin:2px;;
    border-radius:20px;
    color: rgb(101,104,112);
    font-size: 100%;
    border: 0px solid rgb(255,255,255);
    background-color: rgb(230,230,230);
    }

    input[type="text"]:hover {
    background-color: rgb(195,195,195);
    color: rgb(101,104,112);
    border: 0px solid rgb(255,255,255);
    }

    input[type="text"]:active {
    background-color: rgb(255,189,189);
    border: 0px solid rgb(255,255,255);
    color: rgb(220,254,254);
    }
    


    input[type="submit"] {
    width: 200px;
    height: 35px;
    margin: 10px auto 20px auto;
    padding: 2px;
    border-radius:20px;
    border: 0px solid rgb(0,0,0);
    background-color: rgb(0,0,0);
    color: rgb(255,255,255);
    font-size: 100%;
    font-family: Candara Light,Calibri;
    }

    input[type="submit"]:hover {
    background-color: rgb(195,195,195);
    color: rgb(0,0,0);
    }
    input[type="file"] {
    height: 35px;
    margin: 20px auto 20px auto;
    
    }
    img.k{
    width: 290px;
    height: 275px;
    margin-top:90px;
    margin-left:100px;
    padding: 0px;
	position:fixed;
    }
    #xyz{
        margin-left:170px;
    }
		 #heading {
            font-size: 170%;
            font-family: Candara Light,Calibri;
            color: rgb(0,0,0);
            margin-top: 2px;
            margin-left: 10px;
            
            float:left;
        }
    
        img{
            width: 40px;
            height: 30px;
            margin-top: 5px;
            padding: 0px;
            float:left;
        }

        body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: rgb(255,0,0);
 
}

.navbar a {
  float: left;
  font-size: 17px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
margin:0;
}

.dropdown {
  float: left;
  overflow: hidden;
float:right;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 10px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
float:right;
}

.navbar a:hover, .dropdown:hover {
  background-color:rgb(255,0,0);
}
.dropbtn :hover{
color:black;}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
margin-top:45px;

margin-right:70px;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;

}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}


#popo
{
    color:white;
    font-weight:bold;
font-size:20px;
font-style:Candara Light;
margin-top:10px;


}
#popo:hover
{
color:black;}
.btn {
  border: 2px solid black;
  border-radius: 5px;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  margin-top:380px;
  margin-left:125px;
  position:fixed;
}


.suc {
  border-color: black;
  color: black;
}

.suc:hover {
  background-color:black;
  color: white;
}
    </style>
	<script type="text/javascript" src="jscript.js"></script>
</head>
<body>
	<div class="navbar">
  <a href="#"><img src="vec2.png" align="left"/><div id="heading">CodeChallenger</div></a>
  
  <div class="dropdown">
    <button class="dropbtn"><div id="popo"><?php echo $_SESSION['name'];?> </div>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="profilepage.php">PROFILE</a>
      <a href="prof.html">LOGOUT</a>
      
    </div>
  </div> 
</div>
<p>
    <img src="ed1.jpg"   class="k"/>
	<br>
	<button class="btn suc" onClick="f4()">Go Back To Home Page</button>
	</p>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?> ">
        <fieldset>
            <legend>GIVE YOUR CHALLENGE</legend>
            <div id="xyz">
                <p>
                    <input type="text" name="qt" size="20" placeholder="QUESTION TITLE" class="top" />
                </p>
                <p>
                    <textarea name="qd" placeholder="QUESTION IN DETAIL"></textarea>
                </p>
                <p>
					Test Case 1:
                    <input type="text" name="o1" size="20" placeholder="OUTPUT" />
                
                    <input type="text" name="i1" size="20" placeholder="INPUT" />
                </p>
				<p>
				Test Case 2:
                    <input type="text" name="o2" size="20" placeholder="OUTPUT" />
                
                    <input type="text" name="i2" size="20" placeholder="INPUT" />
                </p>
				<p>
				Test Case 3:
                    <input type="text" name="o3" size="20" placeholder="OUTPUT" />
                
                    <input type="text" name="i3" size="20" placeholder="INPUT" />
                </p>
				<p>
				Test Case 4:
                    <input type="text" name="o4" size="20" placeholder="OUTPUT" />
                
                    <input type="text" name="i4" size="20" placeholder="INPUT" />
                </p>
				<p>
				Test Case 5:
                    <input type="text" name="o5" size="20" placeholder="OUTPUT" />
                
                    <input type="text" name="i5" size="20" placeholder="INPUT" />
                </p>
                <p>
                    <textarea name="sol" placeholder="SOLUTION"></textarea>
                </p>
                
                <p>
                    <input type="text" name="wcoin" size="20" placeholder="WINNING COIN" /><br>
                    <input type="submit" value="SUBMIT" name="submit" />
                </p>
            </div>
        </fieldset>
    </form>
	<?php

if(isset($_POST["submit"])){
// Create connection
$conn = new mysqli("localhost", "root", "","codedata");  // Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$id=$_SESSION['id'];
$rn=$_POST['qt'];		$sn=$_POST['qd'];	
$o1=$_POST['o1']; 
$i1=$_POST['i1'];
$o2=$_POST['o2']; 
$i2=$_POST['i2'];
$o3=$_POST['o3']; 
$i3=$_POST['i3'];
$o4=$_POST['o4']; 
$i4=$_POST['i4'];
$o5=$_POST['o5']; 
$i5=$_POST['i5'];
$f=$_POST['sol'];
$wc=$_POST['wcoin'];
$sql="insert into question values($id,'$rn','$sn','$wc','$o1','$i1','$o2','$i2','$o3','$i3','$o4','$i4','$o5','$i5','$f')";
//echo "insert into question values($id,'$rn','$sn','$wc','$o1','$i1','$o2','$i2','$o3','$i3','$o4','$i4','$o5','$i5','$f')";
$cg=$_SESSION['cgiven']+1;
				$sqll="UPDATE olduserdetails SET cgiven='$cg' WHERE id='$id'";
				$_SESSION['cgiven']=$cg;
				$results = $conn->query($sqll) or die("Error: ". mysql_error(). " with query ");
if ($conn->query($sql) === TRUE) {
	$sqli = "SELECT * FROM question WHERE id='$id'";
					$result = $conn->query($sqli) or die("Error: ". mysql_error(). " with query ");


				
			if($result->num_rows > 0)
			{
				echo "<script type=\"text/javascript\"> window.alert(\"Challenge Successfully Given\"); </script>";
		
	echo "<script type=\"text/javascript\"> window.location.replace(\"veiw.php\"); </script>";
					}
} else 
{
	echo "ERROR".mysqli_error($conn);
}
//$conn->close();
}
?>
</body>
</html>