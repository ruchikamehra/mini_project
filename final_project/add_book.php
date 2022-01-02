<!DOCTYPE html>
<html lang="en">
<head>
    <link href="add_book1.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
    <div class="forms">
         <div class="heading">
                 <h1 style="margin-top:250px">BOOK DETAILS</h1>
             </div>
             <form action="bookserver_details.php" method="POST" enctype="multipart/form-data">
             <div class="input_feild">
            <label>Book Id</label>
            <input type="number" name="b_id" >
        </div> 
        <div class="input_feild">
            <label>Book Name</label>
            <input type="text" name="b_name" >
        </div>
        <div class="input_feild">
            <label>Book Details</label>
            <input type="text" name="b_detail" >
        </div>
        <div class="input_feild">
            <label>Book Author</label>
            <input type="text" name="b_author" >
        </div>
        <div class="input_feild">
            <label>Book Pulication</label>
            <input type="text" name="b_pub" >
        </div>
        <div class="input_feild">
            <label>Type</label>
            <input type="text" name="b_type" >
        </div>
        <div class="input_feild">
            <label>Book Status</label>
            <input type="text" name="b_status" >
        </div>
        <div class="input_feild">
            <label>Book Quantity</label>
            <input type="number" name="b_quantity" >
        </div>
        <div class="input_feild">
            <label>Book Photo</label>
            <input type="file" name="b_photo">
         </div>
        <div >
          <input class="button1" type="submit" name="s"  value="ADD">
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
