<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
<meta charset="utf-8" />
    <title>CodeChallenger</title>
    <link rel="icon" type="image/jpg" href="ab.jpg" />
  
    
        
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>


		<style type="text/css">
		img{
	width:110px;
	height:135px;
}
p{
	font-size:50px;
	margin-left:550px;
	margin-top:10px;
	background-color:white;
	width:700px;
	font-family:Candara Light,Calibri;
	
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
  z-index: 56;
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
img.popo{
            width: 40px;
            height: 30px;
            margin-top: 5px;
            padding: 0px;
            float:left;
        }
		#heading {
            font-size: 170%;
            font-family: Candara Light,Calibri;
            color: rgb(0,0,0);
            margin-top: 2px;
            margin-left: 10px;
            
            float:left;
        }
		#coin{
position:fixed;
top:14%;
right:60%;
padding:20px;
font-size:150%;
background-color:white;
font-family:Candara Light,Calibri;
box-shadow:0px 0px 8px rgb(180,180,180);
color:rgb(60,60,60);
width:480px;
height:500px;
}
a{
	text-decoration:underline;
}
		</style>





</head>
<body>

 <div class="navbar">
  <a href="welcuser.php"><img src="vec2.png" align="left" class="popo"/><div id="heading">CodeChallenger</div></a>
  
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


<p><font color="black">Code</font><img src="solve.png" align="middle"/><font color="red">Challenger</font></p>
<p id="coin">

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
$sql = "SELECT * FROM practice";
$result = $conn->query($sql);
$cg=$_SESSION['tcoins']+50;
$rn=$_SESSION['id'];
				$sqll="UPDATE olduserdetails SET tcoins='$cg' WHERE id='$rn'";
				$_SESSION['tcoins']=$cg;
				$results = $conn->query($sqll) or die("Error: ". mysql_error(). " with query ");
				

if($result->num_rows > 0) {
	 
	
	
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{
if($row['quest']==$_SESSION['ch'])
{
            
            
			echo "<font size=\"14px\">";
		echo $row['quest'];
		echo "</font><br>";
		
		echo $row['que']."</br>";

      }
	
}
} else {
    echo "";
}
echo "";
$conn->close();
?>

</p>





<div class="row cspace">
<div class="col-sm-8">
<div class="form-group">
<form action="compile.php" id="form" name="f2" method="POST" >
<label for="lang">Choose Language</label>

<select class="form-control" name="language">
<option value="c">C</option>
<option value="cpp">C++</option>
<option value="cpp11">C++11</option>
<option value="java">Java</option>


</select><br><br>

<label for="ta">Write Your Code</label>
<textarea class="form-control" name="code" rows="10" cols="50"></textarea><br><br>
<label for="in">Enter Your Input</label>
<textarea class="form-control" name="input" rows="10" cols="50"></textarea><br><br>
<input type="submit" id="st" class="btn btn-success" value="Run Code"><br><br><br>


</form>

<script type="text/javascript">
  
  $(document).ready(function(){

     $("#st").click(function(){
  
           $("#div").html("Loading ......");


     });

  });


</script>

<script>
//wait for page load to initialize script
$(document).ready(function(){
    //listen for form submission
    $('form').on('submit', function(e){
      //prevent form from submitting and leaving page
      e.preventDefault();

      // AJAX 
      $.ajax({
            type: "POST", //type of submit
            cache: false, //important or else you might get wrong data returned to you
            url: "compile.php", //destination
            datatype: "html", //expected data format from process.php
            data: $('form').serialize(), //target your form's data and serialize for a POST
            success: function(result) { // data is the var which holds the output of your process.php

                // locate the div with #result and fill it with returned data from process.php
                $('#div').html(result);
            }
        });
    });
});
</script>

<label for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br>

<!--<script>
"use strict";
function submitForm(oFormElement)
{
  var xhr = new XMLHttpRequest();
  var display=document.getElementById('div');
  xhr.onload = function(){ display.innerHTML=xhr.responseText; }
  xhr.open (oFormElement.method, oFormElement.action, true);
  xhr.send (new FormData (oFormElement));
  return false;
}
</script>-->
<!--<label for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br>-->




</div>
</div>

<div class="col-sm-4">

  
</div>
</div>
</div>
<br><br><br>

</body>
</html>


