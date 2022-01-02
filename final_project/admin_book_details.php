<?php
include("navbar_admin.php");
$dbhost="localhost";
$dbuser="root";
$dbpwd="";
$dbname="ebook_management_db";
$connection=mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname)or die("connect fail");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- <link href="css page/admin_bd_details.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet"href="css_files/display.css">
   <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
   <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
  <style>
      .fa-2x{
        font-size:2em !important;
    };
    
.table1 th {
    padding-top: 20px;
    padding-bottom: 20px;
    text-align: center;
    background-color: #04AA6D;
    color: white;
}
</style>
    <title>Document</title>
</head>
<body>
<div class="tables">
        <h1 class="change">BOOK DETAILS</h1>
          <br/>
            <table class="table1" >
                <thead >
                    <tr >
                        <th >BOOK_ID</th>
                        <th>IMAGE</th>
                        <th >NAME</th>
                        <th >AUTHOR</th>
                        <th>DETAILS</th>
                        <th  >PUBLICATION</th>
                        <th >TYPE</th>
                        <th >STATUS</th>
                        <th  >QUANTITY</th>
                        <th >MODIFY</th>
                        <th  >DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $selquery="SELECT * FROM book_list ";

                    $que=mysqli_query($connection,$selquery);
                    
                    
                    
                    while($result=mysqli_fetch_assoc($que))
                    {
                    ?>
                      <tr>
                        <td width="100px"><?php echo $result['b_id'];?></td>
                        <td> <img src="<?php echo $result['b_photo']; ?>" width="300px" height="250px"> </td>
                        <td><?php echo $result['b_name'];?></td>
                        <td><?php echo $result['b_author'];?></td>
                        <td><?php echo $result['b_detail'];?></td>
                        <td><?php echo $result['b_pub'];?></td>
                        <td><?php echo $result['b_type'];?></td>
                        <td><?php echo $result['b_status'];?></td>
                        <td><?php echo $result['b_quantity'];?></td>
                        <td><a href="update.php?book_id=<?php echo $result['b_id'];?>" ><i class="fas fa-edit fa-2x"></i></a></td>
                        <td><a href="delete.php?bk_id=<?php echo $result['b_id'];?>" ><i class="fas fa-trash fa-2x" aria-hidden="true"></i></a></td>
                    </tr>
                    <?php
                    }
                    

                   ?>
                </tbody>
            </table>

        </div>

<!-- <script>
    $(document).ready(function())
    {
        $('[data-toggle="tooltip"]').tooltip();
    });
    
</script> -->
</body>
</html>

