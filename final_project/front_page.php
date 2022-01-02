<?php
$user1msg="";
$user1pass="";
$msg="";


$adminmsg="";
$adminpass="";


if(!empty($_REQUEST['adminmsg']))
{
    $adminmsg=$_REQUEST['adminmsg'];
}
if(!empty($_REQUEST['adminpass']))
{
    $adminpass=$_REQUEST['adminpass'];
}
if(!empty($_REQUEST['user1msg']))
{
    $user1msg=$_REQUEST['user1msg'];
}
if(!empty($_REQUEST['user1pass']))
{
    $user1pass=$_REQUEST['user1pass'];
}
if(!empty($_REQUEST['msg']))
{
    $msg=$_REQUEST['msg'];
}

?>








<!DOCTYPE html>
<html lang="en">
<head>
<title>E book Online Store</title>
<link rel="stylesheet" href="front_page1.css">
<style>
    @media only screen and (min-width: 768px) {
  /* For desktop: */
    .col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}
    }
    @media only screen and (max-width: 768px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
}
</style>
</head>
<body>
    
    <div class="main">
         <div class="navbar">
         <div class="icon">
         <h2 class="logo1" style="color:#482673;
    font-size: 30px;
    font-family:'Courier New', Courier, monospace;
    padding-left: 10px;
    float: left;
    padding-top:10px;
    font-weight: 100;">MYBRARY</h2>

        </div> 
        </div>
     
        <div class="content">
            <h1>Welcome to <br><span> Mybrary: <br>Your own e book library</span> </h1>
            <p class="par"> "The secret to a well balanced life is a cup of tea in <br>
            one hand and a good book in the other. "<br><span>-The tea Spot</span></p>
          <div class="par2">
              <div class="par3">
            <p>Hope you will get a good experience</p>
            <p>Regards, The Owner</p>
        </div>
        </div>
            <button class="cn"><a href="mailto:ruchikamehra2004@gmail.com">JOIN US</a></button>
            

            <div class="form1" style="height:350px">
                <h2>User Login</h2>
                <hr/>
                <form action ="validation.php" method="post" enctype="multipart/form-data">
                    <div class="user">
                <input  type="text" name="reg_user" placeholder="Enter your Username " >
                <label style="color:red"><?php echo $user1msg?></label>
                <input type="password" name ="reg_pass" placeholder="Enter the Password" >
                </div>
                <label style="color:red"><?php echo $user1pass?></label>
                <div class ="button1">
                <input type="submit" value ="Login" name="btn1">
                </div>
                <div class="npt"><p>Don't have an account ?? <br><a href="sign_up.php">Sign Up Here</a></p></div>
            </div>

            <br/>
            <div class="form2">
                <h2>Admin Login</h2>
                <hr/>
                <form action ="validation.php" method="post" >
                    <div class="user2">
                <input  type="text" name="admin_user" placeholder="Enter your Username " >
                <label style="color:red"><?php echo $adminmsg?></label>
                <input  type="password" name ="admin_pass" placeholder="Enter the Password" >
                <label style="color:red"><?php echo $adminpass?></label>
                </div>
                <div class ="button2">
                <input type="submit" value ="Login"  name="btn2">
                </div>
          
            </div>
    </div>
    </div>
    
</body>

</html>
