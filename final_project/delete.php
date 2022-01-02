<?php
$dbhost="localhost";
$dbuser="root";
$dbpwd="";
$dbname="ebook_management_db";
$connection=mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname)or die("connect fail");

$id=$_GET['bk_id'];


$deleteq= "DELETE FROM book_list WHERE b_id=$id";

$query=mysqli_query($connection,$deleteq);

header('location:admin_book_details.php');
?>