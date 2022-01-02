<?php

  $dbhost="localhost";
  $dbuser="root";
  $dbpwd="";
  $dbname="ebook_management_db";
  $connection=mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
  if(!$connection)
  {
      echo"connection unsuccessfull";
  }
  session_start();
if (isset($_POST['btn1'])) { 
    
    $reg_user=$_POST['reg_user'];
    // $mail=$_POST['emailid'];
    // $contact=$_POST['telephone'];
    $reg_pass=$_POST['reg_pass']; 

    //then create connection
     
    if($reg_user==null || $reg_pass==null)
    {
     $usermsg="";
     $userpass="";
     if($reg_user==null)
     {
         echo $usermsg="UserName Feild is empty";
     }
     if($reg_pass==null )
     {
         echo $userpass="Password Feild is empty";
     }

     header("location: front_page.php?user1msg=$usermsg&user1pass=$userpass");
    }
  
   
    elseif($reg_user!=null && $reg_pass!=null)
    {
    $qr="select * from signupdata where new_user ='$reg_user' and new_pass='$reg_pass' ";
    // fire the query 
    $result=mysqli_query($connection, $qr); // will return either 0 or 1
    $num=mysqli_num_rows($result);
    if($num ==1) // this means it is matching the username and the password with the database
    {
    //    $_SESSION['new_user']=$reg_user;
    //   header('location: Homepage.php');
      header('location:user_home.php');
    }
    else{
      echo("the connection was not fixed");
    }
}
}
if (isset($_POST['btn2'])) {

    
    $admin_user=$_POST['admin_user'];
    $admin_pass=$_POST['admin_pass'];
    
    
    if($admin_user==null || $admin_pass==null)
    {
     $usermsg="";
     $userpass="";
     if($admin_user==null)
     {
         echo $usermsg="UserName Feild is empty";
     }
     if($admin_pass==null)
     {
         echo $userpass="Password Feild is empty";
     }

     header("location: front_page.php?adminmsg=$usermsg&adminpass=$userpass");
    }
    elseif( $admin_user!=null && $admin_pass!=null)
    {   
            $qu="SELECT * 
                    FROM admin
                    where admin_user='$admin_user' and admin_pass='$admin_pass'";
         $result=mysqli_query($connection, $qu); // will return either 0 or 1
         $num=mysqli_num_rows($result);
        if($num ==1) // this means it is matching the username and the password with the database
             {
             //    $_SESSION['new_user']=$reg_user;
            
        echo ("the connection fixed ");
        header('location:dashboard_admin.php');
             }
             else{
               echo("the connection was not fixed");
             }
          
            
        }
    }
    

?>




