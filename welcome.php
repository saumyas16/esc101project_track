<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Welcome_User</title>
    <link rel="icon" type="image/jpg" href="ab.jpg" />
    <style type="text/css">
        #heading {
            font-size: 300%;
            font-family: Candara Light,Calibri;
            color: rgb(0,0,0);
            margin-top: 2px;
            margin-left: 10px;
            font-weight: bold;
            float:left;
        }

        img {
            width: 80px;
            height: 60px;
            margin-top: 2px;
            padding: 0px;
            float:left;
        }
        body{
            
        }
        p{
            background-color:rgb(255,102,0);
            width:100%;
            height:60px;
            margin:0px;
        }
        .dropbtn {
        background-color: rgb(0,0,0);
        border-radius:9px;
         color: white;
         padding: 16px;
         font-size: 16px;
          border: none;
          float:right;
        }

        .dropdown {
         position: relative;
         display: block;
         float:right;
        }

        .dropdown-content {
        display: none;
        position: relative;
        background-color: #f1f1f1;
        min-width: 160px;
         box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
         z-index: 1;
        margin-top:60px;
         margin-right:0px;
        }

        .dropdown-content a {
         color: black;
         padding: 12px 16px;
         text-decoration: none;
         display: block;
         
        }

    .dropdown-content a:hover {background-color: #ddd;
                               
    }

    .dropdown:hover .dropdown-content {display: block;
                                       
    }

    .dropdown:hover .dropbtn {background-color: rgb(255,102,0);
            color:black;                             
    }
    </style>
</head>
<body>
    
        <p id="heading">
            <img src="vec2.jpg" align="left" />

            CodeChallenger
        </p>
    
    <div class="dropdown">
        <button class="dropbtn"><?php echo $_SESSION['name'];?></button>
        <div class="dropdown-content">
            <a href="profilepage.html">PROFILE</a>
            <a href="#">LOGOUT</a>
        </div>
    </div>


</body>
</html>