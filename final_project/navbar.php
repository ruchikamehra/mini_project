<?php
$dbhost="localhost";
$dbuser="root";
$dbpwd="";
$dbname="ebook_management_db";
$conn=mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname)or die("connect fail");
session_start();
$s=mysqli_query($conn,"SELECT * FROM signupdata");
$data=mysqli_fetch_array($s);
$_SESSION['name']=$data['new_user'];
$t=$_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <link href="navbar.css" rel="stylesheet">
    <title>Document</title>
   
</head>
<body>
    <header style="padding: 10px 5px;">
     <h2 class="logo1" style="color:#482673;
    font-size: 30px;
    font-family:'Courier New', Courier, monospace;
    padding-left: 10px;
    float: left;
    font-weight: 100;">MYBRARY</h2>
   
    <nav>
        <ul class="nav-area">
            <li ><a href="user_home.php">HOME</a></li>
            <li ><a href="display_book.php">BOOKS SECTION</a></li>
            <li><a href="contact_us.php">CONTACT</a></li>
          
        </ul>
        
    </nav>

    <ul class="nav-area-1">
            
            <li><a href="profile_page.php"><?php echo $t?></a></li>
            <li><a href="logout.php">LOGOUT</a></li>
</ul>
</header>

</body>
</html>