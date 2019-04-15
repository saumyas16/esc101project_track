
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
            background-color: rgb(240,240,240);
            font-size:200%;
        }
       h3{

color:black;

margin-top:15px;
margin-left:25px;
font-size:140%;
font-family:Candara Light,Calibri;
}
.outer{
 box-shadow: 0px 0px 10px rgb(195,195,195);
margin-left:25px;
margin-top:10px;
margin-bottom:20px;
width:800px;
height:100px;
font-size:110%;
background-color:white;
font-family:Candara Light,Monospace;
}
td.outer:hover{
 box-shadow: -3px -3px 10px rgb(90,90,90);


}
td.outer:hover .fin{

color:rgb(255,0,0)(!important);


}
.green
{
color:rgb(255,0,0);
display:inline-block;
}
td.inner
{
box-shadow: 0px 0px 0px rgb(255,255,255);
margin-left:25px;
margin-top:20px;
background-color:white;
font-size:60%;


}
.btn {
  border: 2px solid black;
  border-radius: 5px;
  background-color: white;
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  margin-top:15px;
  margin-left:980px;
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
img.k{
    width: 280px;
    height: 325px;
    margin-top:80px;
    margin-left:950px;
    padding: 0px;
	position:fixed;
	
    }
        
        </style>
		<script type="text/javascript" src="jscript.js"></script>
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
<p>
    
	<button class="btn suc" onClick="f4()">Go Back To Home Page</button>
	<br>
	<img src="back.png"   class="k"/>
	
	</p>
   <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codedata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM question";
$result = $conn->query($sql);
echo "<h3>" .'Challenges Given:'. "</h3>";

if($result->num_rows > 0) {
	echo "<table border= '0' cellpadding='20px' width='75%' align='left' cellspacing='20px'>"; //Note Html attributes value in ' ' 
	
	
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
if($row['id']==$_SESSION['id'])
{
            $a=$row["wincoin"];
            $b=(5*$a)/100;
		echo "<tr ALIGN='left'>";
		echo "<td  class=\"outer\"><div class=\"fin\">" .$row["questitle"] ."</div><br><table border='0'><tr><td  class=\"inner\"><div class=\"green\">
 Winning Coins: </div> ".$row["wincoin"]."</td><td  class=\"inner\"><div class=\"green\">"." &nbsp&nbsp&nbsp&nbsp;Participation coins: "."</div>".$b."</td><td  class=\"inner\"><div class=\"green\">"." &nbsp&nbsp&nbsp&nbsp;Users Participated: "."</div>".$_SESSION['uaccp']."</td><td  class=\"inner\"><div class=\"green\">"." &nbsp&nbsp&nbsp&nbsp;Total Profit: "."</div>".$_SESSION['tprofg']."</td></table></td>";  //Note field name is case sensitive
		
	echo "</tr>";	
      }
	
}
} else {
    echo "<tr ALIGN='left'><td  class=\"outer\"><div class=\"fin\">No Challenges To Show</div>";
}
echo "</table>";
$conn->close();
?>
        
   
</body>
        </html >
