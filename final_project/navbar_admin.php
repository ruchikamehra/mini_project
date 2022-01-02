<?php
$dbhost="localhost";
$dbuser="root";
$dbpwd="";
$dbname="ebook_management_db";
$conn=mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname)or die("connect fail");
session_start();
$s=mysqli_query($conn,"SELECT * FROM admin");
$data=mysqli_fetch_array($s);
$_SESSION['admin_user']=$data['admin_user'];
$t=$_SESSION['admin_user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    <link href="css_files/navbar_1.css" rel="stylesheet">
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
            <li ><a href="dashboard_admin.php">HOME</a></li>
            <li><a href="add_book.php">ADD BOOK</a></li>
            <li ><a href="admin_book_details.php">BOOK DETAILS</a></li>
            <li ><a href="admin_user_list.php">USER DETAILS</a></li>

     
          
        </ul>
        
    </nav>
    <ul class="nav-area-1">
            <!-- <li><img class="img1" src="sty.png" alt="hrhr" width="40px" height="40px"></li> -->
            <li><a href="admin_profile_page.php"><?php echo $t?></a></li>
            <li><a href="logout_admin.php">LOGOUT</a></li>
</ul>
</header>

</body>
</html>