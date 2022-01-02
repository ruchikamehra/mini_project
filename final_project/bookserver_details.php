<?php

$dbhost="localhost";
  $dbuser="root";
  $dbpwd="";
  $dbname="ebook_management_db";
  $connection=mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname)or die("connect fail");

//   if($connection)
//   {
//       echo("success");
//   }
//   else{
//       echo("no connection");
//   }

  //  $b_id=$_GET['id'];

  //  $update="SELECT * from book_list where b_id=$b_id";

  //  $updates=mysqli_query($connection, $update);

  //  $arrdata=mysqli_fetch_assoc($updates);

  if(isset($_POST['s']))
  {
$b_id=$_POST['b_id'];
$b_name=$_POST['b_name'];
$b_author=$_POST['b_author'];
$b_detail=$_POST['b_detail'];
$b_pub=$_POST['b_pub'];
$b_type=$_POST['b_type'];
$b_status=$_POST['b_status'];
$b_quantity=$_POST['b_quantity'];
$file=$_FILES['b_photo'];
$filename=$file['name'];
$filepath=$file['tmp_name'];
$fileerror=$file['error'];
if($fileerror==0)
{
  $destfile='upload/'.$filename;
//   echo "$destfile";
   move_uploaded_file($filepath, $destfile);
  // $q="INSERT INTO book_list(b_id,b_name,b_author,b_detail,b_pub,b_type,b_status,b_quantity,b_photo)VALUES('$b_id','$b_name','$b_author','$b_detail','$b_pub','$b_type','$b_status','$b_quantity','$destfile')";
$q=" INSERT INTO book_list(b_id,b_name,b_author,b_detail,b_pub,b_type,b_status,b_quantity,b_photo) VALUES('$b_id','$b_name','$b_author','$b_detail','$b_pub','$b_type','$b_status','$b_quantity','$destfile')";

   $query=mysqli_query($connection, $q);
   if($query)
   {
       header('location:admin_book_details.php');
   }
   else{
       echo"not inserted";
   }
}
  }
  else{
      echo"fail";
  }
