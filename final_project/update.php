<?php
$dbhost="localhost";
$dbuser="root";
$dbpwd="";
$dbname="ebook_management_db";
$conn=mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname)or die("connect fail");
if(count($_POST)>0)
{
    $e=mysqli_query($conn,"UPDATE book_list SET b_name='". $_POST['b_name']."', b_name='". $_POST['b_name']."', b_author='". $_POST['b_author']."', b_detail='". $_POST['b_detail']."', b_pub='". $_POST['b_pub']."', b_type='". $_POST['b_type']."', b_status='". $_POST['b_status']."',b_quantity='". $_POST['b_quantity']."' WHERE b_id='".$_GET['book_id']."'");
    if($e)
    {
        header("location:admin_book_details.php");
    }
    else{
        echo "error";
    }
}
$arr=mysqli_query($conn, "SELECT * FROM book_list WHERE b_id='".$_GET['book_id']."'");
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
                 <h1>UPDATE BOOK DETAILS</h1>
             </div>
             <form action="" method="POST" enctype="multipart/form-data">
             <div class="input_feild">
            <label>Book Id</label>
            <input type="number" name="b_id" value="<?php echo $arrdata['b_id'];?>"/>
        </div> 
        <div class="input_feild">
            <label>Book Name</label>
            <input type="text" name="b_name" value="<?php echo $arrdata['b_name'];?>">
        </div>
        <div class="input_feild">
            <label>Book Details</label>
            <input type="text" name="b_detail" value="<?php echo $arrdata['b_detail'];?>">
        </div>
        <div class="input_feild">
            <label>Book Author</label>
            <input type="text" name="b_author" value="<?php echo $arrdata['b_author'];?>" >
        </div>
        <div class="input_feild">
            <label>Book Pulication</label>
            <input type="text" name="b_pub" value="<?php echo $arrdata['b_pub'];?>" >
        </div>
        <div class="input_feild">
            <label>Type</label>
            <input type="text" name="b_type" value="<?php echo $arrdata['b_type'];?>">
        </div>
        <div class="input_feild">
            <label>Book Status</label>
            <input type="text" name="b_status" value="<?php echo $arrdata['b_status'];?>" >
        </div>
        <div class="input_feild">
            <label>Book Quantity</label>
            <input type="number" name="b_quantity" value="<?php echo $arrdata['b_quantity'];?>"  >
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
