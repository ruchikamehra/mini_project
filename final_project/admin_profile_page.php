<?php
include("navbar_admin.php");
$dbhost="localhost";
$dbuser="root";
$dbpwd="";
$dbname="ebook_management_db";
$connection=mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname)or die("connect fail");
$e=$_SESSION['admin_user'];
$query1=mysqli_query($connection, "SELECT * FROM admin WHERE admin_user='$e'");
$data=mysqli_fetch_array($query1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.min.css"> -->
   <link rel="stylesheet" href="css_files/admin_profile.css">
    
    <title>Profile</title>
    <style>
      *{
        padding: 5px;;
      }
      .container{
        margin-top:50px;
        background :linear-gradient(rgba(63, 77, 66, 0.5), rgba(79, 88, 85, 0.5) ) ;
      }
      button{
        margin-left: 20px;
    width : 160px;
    height: 40px;
    
    background :grey;
    border: none;
    border-radius: 10px;
    cursor: pointer;
      }
    </style>
</head>
<body style=" background:linear-gradient(#1dc7a2,hsl(0, 0%, 90%));
    background-color:hsl(0, 0%, 90%);">


<div class="container">
    <h1>ADMIN PROFILE</h1> 
   
      <br/>
      <div><img src="sty.png"></div>
      <br/>
      <div>
          <h3>WELCOME,<?php  echo $data['admin_user']; ?></h3>
          <br/>
      </div>
      <h2>PERSONAL DETAILS</h2>
      <br/>
      <div class="detail">
        <p>ADMIN ID : <?php  echo $data['admin_id'];?></p>
      <br/>
      <p>USERNAME: <?php echo $data['admin_user']; ?></p>
      <br/>
      <p>ADMIN TYPE : <?php echo $data['admin_type'];?></p>
      <br/>
     
</div>
<button  type="submit" value="logging of"><a href="logout.php">LOGOUT</a></button>
     


      
</div>




</body>

</html>
