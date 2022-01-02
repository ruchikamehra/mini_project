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
    <link href="css_files/display.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Document</title>
</head>
<body>
  
<div class="tab">
        <h2 class="change">USER DETAILS</h2>
        <br/>

        <table class="table1" >
                <thead>
                    <tr>
                        <th>USER_ID</th>
                        <th>FULL NAME</th>
                        <th>USERNAME</th>
                        <th>EMAIL</th>
                        <th>CONTACT NO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $selquery="SELECT * FROM signupdata ";

                    $que=mysqli_query($connection,$selquery);
                    
                    
                    
                    while($row=mysqli_fetch_assoc($que))
                    {
                    ?>
                      <tr>
                        <td><?php echo $row['new_id'];?></td>
                       
                        <td><?php echo $row['new_name'];?></td>
                        <td><?php echo $row['new_user'];?></td>
                        <td><?php echo $row['new_email'];?></td>
                        <td><?php echo $row['new_tel'];?></td>
                     
                      
                    </tr>
                    <?php
                    }
                    

                   ?>
                </tbody>
            </table>
</div>
</body>
</html>
