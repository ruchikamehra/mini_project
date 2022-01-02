<?php
$dbhost="localhost";
$dbuser="root";
$dbpwd="";
$dbname="ebook_management_db";
$connection=mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname)or die("connect fail");




if(isset($_POST['new_submit']))
{
     $new_name=$_POST['new_name'];
     $new_user=$_POST['new_user'];
     $new_email=$_POST['new_email'];
     $new_tel=$_POST['new_tel'];
     $new_pass=$_POST['new_pass'];
     $new_cfpass=$_POST['new_cfpass'];


if($new_pass==$new_cfpass)
{
$qu="SELECT * from signupdata where new_user='$new_user' && new_pass='$new_pass' ";
$result=mysqli_query($connection, $qu);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo"User already exist";
}
else{
    $sql = "INSERT INTO signupdata (new_name, new_user, new_email,new_tel,new_pass)
VALUES ('$new_name', '$new_user', '$new_email','$new_tel','$new_pass')";

$q=mysqli_query($connection, $sql);
if($q)
{
    header("location:front_page.php");
}
}
}
else{
    echo" password not matched";
}
}
?>