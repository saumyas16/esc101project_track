<!DOCTYPE html>
<?php
session_start();
$_SESSION['chin']="";
$_SESSION['id2']="";
$_SESSION['cut']="";
?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Welcome_User</title>
    <link rel="icon" type="image/jpg" href="ab.jpg" />
    <style type="text/css">
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
background-color:rgb(240,240,240);
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

h3{

color:black;

margin-top:30px;
margin-left:25px;
font-size:220%;
font-family:Candara Light,Calibri;
}
.outer{
 box-shadow: 0px 0px 10px rgb(195,195,195);
margin-left:25px;
margin-top:20px;
margin-bottom:20px;
width:800px;
height:100px;
font-size:150%;
font-family:Candara Light,Monospace;
background-color:white;
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
font-size:80%;


}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: rgb(255,0,0);
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 16px;
  padding: 20px;
  width: 180px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
margin-top:3px;
  margin-left:37px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

#coin{
position:fixed;
top:10%;
right:2%;
padding:20px;
font-size:150%;
background-color:white;
font-family:Candara Light,Calibri;
box-shadow:0px 0px 8px rgb(180,180,180);
color:rgb(60,60,60);
width:250px;
height:460px;
}

img.momo{

margin-top:0px;
width:35px;
height:35px;}










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
<p id="coin">
<?php
echo "Total Coins: ";
echo "<br><img src=\"coin.gif\"  class=\"momo\" />".$_SESSION['tcoins']."<br>"."<br>";
echo "ChallengesAccepted: ";
echo "<br>".$_SESSION['chlnaccp']."<br>";
echo "ChallengesWon: ";
echo "<br>".$_SESSION['cwon']."<br>";
echo "ChallengesLost: ";
echo "<br>".$_SESSION['clost']."<br>";
echo "ChallengesGiven: ";
echo "<br>".$_SESSION['cgiven']."<br>";
echo "Rank: ";
echo "<br>".$_SESSION['rank']."<br>";
?>
<button class="button" style="vertical-align:middle" onClick="f1()"><span>Give Challenge</span></button>
<button class="button" style="vertical-align:middle" onClick="f2()"><span>ChallengeStatus</span></button>
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

echo "<h3>" .'Challenges:'."&nbsp;&nbsp;&nbsp;&nbsp;<button class=\"button\" style=\"vertical-align:middle\" onClick=\"f5()\"><span>Practice</span></button>". "</h3>";
if($result->num_rows > 0) {
	echo "<table border= '0' cellpadding='20px' width='75%' align='left' cellspacing='20px'>"; //Note Html attributes value in ' ' 
	
	
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
if($row['id']!=$_SESSION['id'])
{
            $a=$row["wincoin"];
            $b=(5*$a)/100;
		echo "<tr ALIGN='left'>";
    $_SESSION['chin']=$row['questitle'];
$_SESSION['id2']=$row['id'];
$_SESSION['cut']=$b;
$c=$row['questitle'];
$d=$row['id'];
$e=$b;
		echo "<td  class=\"outer\"><div class=\"fin\">" .$row["questitle"] ."</div><br><table border='0'><tr><td  class=\"inner\"><div class=\"green\">
 Winning Coins: </div> ".$row["wincoin"]."</td><td  class=\"inner\"><div class=\"green\">"." &nbsp;Participation coins: "."</div>".$b."</td><td colspan=\"2\">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td><button class=\"button\" style=\"vertical-align:middle\" onClick=\"f3()\"><span>Solve Challenge</span></button></td></table></td>";  //Note field name is case sensitive
		
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
</html>