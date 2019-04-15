
<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>userprofile</title>
    <link rel="icon" type="image/jpg" href="ab.jpg" />
    <style type="text/css">
        #heading {
            font-size: 300%;
            font-family: Candara Light,Calibri;
            color: rgb(0,0,0);
            margin-top: 2px;
            margin-left: 90px;
            font-weight: bold;
        }
        #heading1 {
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
        body {
            background-color: rgb(0,0,0);
            font-size:200%;
        }
        .orange1{
            background-color:rgb(255,0,0);
            font-family: Candara Light,Calibri;
            color: rgb(255,255,255);
            margin-bottom:7px;
            margin-left:7px;
            margin-right:200px;
            margin-top:10px;
            width:260px;
            height:150px;
            font-size:160%;
            text-align:center;
            float:left;
            padding:20px;
            
        }
        .white1{
            background-color:rgb(255,255,255);
            color: rgb(0,0,0);
            font-family: Candara Light,Calibri;
            margin-bottom:7px;
            margin-left:260px;
            margin-right:7px;
            margin-top:10px;
            width:360px;
            height:150px;
            float:left;
            font-size:140%;
            text-align:center;
            padding:20px;
            
        }
        .orange2{
            background-color:rgb(255,0,0);
            font-family: Candara Light,Calibri;
            color: rgb(255,255,255);
            margin-bottom:5px;
            margin-left:295px;
            margin-right:7px;
            margin-top:7px;
            width:190px;
            height:150px;
            float:left;
            padding:20px;
            font-size:160%;
            text-align:center;
            
        }
        .white2{
            background-color:rgb(255,255,255);
            color: rgb(0,0,0);
            font-family: Candara Light,Calibri;
            margin-bottom:7px;
            margin-left:7px;
            margin-right:200px;
            margin-top:7px;
            width:360px;
            height:150px;
            float:left;
            padding:20px;
          
        }
        .orange3{
            background-color:rgb(255,0,0);
            font-family: Candara Light,Calibri;
            color: rgb(255,255,255);
            margin-bottom:10px;
            margin-left:7px;
            margin-right:200px;
            margin-top:7px;
            width:260px;
            height:150px;
            float:left;
            padding:20px;
            font-size:160%;
            text-align:center;
            
        }
        .white3{
            background-color:rgb(255,255,255);
            color: rgb(0,0,0);
            font-family: Candara Light,Calibri;
            margin-bottom:10px;
            margin-left:260px;
            margin-right:7px;
            margin-top:7px;
            width:360px;
            height:150px;
            float:left;
            padding:20px;
            
        }
        img.p{
        float:left;
    margin-left:20px;
margin-right:20px;
    width:110px;
    height:140px;
    }

    

    
        </style>
        </head >
<body>
<div class="navbar">
  <a href="welcuser.php"><img src="vec2.png" align="left"/><div id="heading1">CodeChallenger</div></a>
  
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
   <?php
   

// Create connection
$conn = new mysqli("localhost", "root", "","codedata");  // Check connection
if ($conn->connect_error)
	{
	die("Connection failed: " . $conn->connect_error);
	}
	$rn=$_SESSION['id2'];
			
					$sql = "SELECT * FROM olduserdetails WHERE id=$rn";
					$result = $conn->query($sql) or die("Error: ". mysqli_error($conn). " with query ");


				
			if($result->num_rows > 0)
			{
				$row = $result->fetch_assoc();
				if($row['id']==$rn)
				{
				$_SESSION['name1']=$row['name'];
				
				$_SESSION['cname1']=$row['cname'];
				$_SESSION['chlnaccp1']=$row['chlnaccp'];
				$_SESSION['cwon1']=$row['cwon'];
				$_SESSION['clost1']=$row['clost'];
				$_SESSION['tprofc1']=$row['tprofc'];
				$_SESSION['cgiven1']=$row['cgiven'];
				$_SESSION['uaccp1']=$row['uaccp'];
				$_SESSION['tprofg1']=$row['tprofg'];
				$_SESSION['tcoins1']=$row['tcoins'];
				$_SESSION['rank1']=$row['rank'];
				
				
				}
				
			}

//$conn->close();
?>
        <p class="white1">
        <img src="chln.png" class="p"/>
        <?php echo "Coder Name: ".$_SESSION['cname1'];?>
        </p>
        <p class="orange1" >
    <?php echo "Username: ".$_SESSION['name1'];?>
        </p>
        <p class="orange2">
    <?php echo "Rank: ".$_SESSION['rank1'];?>
        </p>
        <p class="white2">
    <?php echo "ChallengesAccepted: ".$_SESSION['chlnaccp1']."<br>";
        echo "ChallengesWon: ".$_SESSION['cwon1']."<br>";
        echo "ChallengesLost: ".$_SESSION['clost1']."<br>";
        echo "Total Profit: ".$_SESSION['tprofc1']."<br>";
        ?>
        </p>
        <p class="white3">
        <?php echo "ChallengesGiven: ".$_SESSION['cgiven1']."<br>";
        echo "Users Accepted: ".$_SESSION['uaccp1']."<br>";
        echo "Total Profit: ".$_SESSION['tprofg1']."<br>";
        ?>
        </p>
        <p class="orange3">
        <?php echo "Total Coins: ".$_SESSION['tcoins1'];?>
        </p>
    
</body>
        </html >
