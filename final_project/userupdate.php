<?php
session_start();
$dbhost="localhost";
$dbuser="root";
$dbpwd="";
$dbname="ebook_management_db";
$conn=mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname)or die("connect fail");
if(count($_POST)>0)
{
    $e=mysqli_query($conn,"UPDATE signupdata SET new_name='". $_POST['new_name']."', new_email='". $_POST['new_email']."', new_tel='". $_POST['new_tel']."'");
    if($e)
    {
        header("location:profile_page.php");
    }
    else{
        echo "error";
    }
}
$e=$_SESSION['name'];
$arr=mysqli_query($conn, "SELECT * FROM signupdata WHERE  new_user='$e'");
$arrdata=mysqli_fetch_array($arr);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="add_book1.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <div class="forms">
   
         <div class="heading">
                 <h1>UPDATE Profile</h1>
             </div>
             <form action="" method="POST" enctype="multipart/form-data">
             <div class="input_feild">
            <label>Full Name</label>
            <input type="text" name="new_name" value="<?php echo $arrdata['new_name'];?>"/>
        </div> 
        <div class="input_feild">
            <label>Email</label>
            <input type="text" name="new_email" value="<?php echo $arrdata['new_email'];?>">
        </div>
        <div class="input_feild">
            <label>Phone No</label>
            <input type="text" name="new_tel" value="<?php echo $arrdata['new_tel'];?>" >
        </div>
        <div >
          <input class="button1" type="submit" name="s"  value="UPDATE">
         </div>
       
</form>
</div>
    <div class="image">
             <img src="lib.jpeg" class="img" alt="image here">
         </div>
</div>
</body>
<?php



?>
</html>

?>