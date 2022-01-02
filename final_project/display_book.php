<?php
  include("navbar.php");


   $dbhost="localhost";
   $dbuser="root";
   $dbpwd="";
   $dbname="ebook_management_db";
   $connection=mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname)or die("connect fail");
   
?>
  <style>
      .fa-2x{
        font-size:2em !important;
    };
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css_files/display.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Document</title>
</head>
<body>
 
        <div class="nav-search">
           <form  method="post" >
                <input class="search_text" type="text" name="search" placeholder="What are you looking for?" required="">
                <button class="search_but" type="submit" name="submit">          <i class="fas fa-search fa-2x"></i></button>
</form>
            </div>

        
  
<div class="tab">
        <h2 class="change">BOOKS SECTION</h2>
        <br/>

        <?php

        if(isset($_POST['submit']))
        {
           $q=mysqli_query($connection,"SELECT * FROM book_list where b_name like '%$_POST[search]%' ");
           if(mysqli_num_rows($q)==0)
           {
               echo"books currently not present";
           }
           else{
               ?>
            <table class="table1" >
            <thead>
                <tr>
                    <th width="400px">BOOK</th>
                    <th>IMAGE</th>
                    <th>NAME</th>
                    <th>AUTHOR</th>
                    <th>DETAILS</th>
                    <th>PUBLICATION</th>
                    <th>TYPE</th>
                    <th>STATUS</th>
                    <th>READ BOOK</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($row=mysqli_fetch_assoc($q))
                {
                    ?>
             <tr>
             <td width="450px" height="300px"><?php echo $row['b_id'];?></td>
            <td width="450px" height="300px"> <img src="<?php echo $row['b_photo']; ?>"  width="300px" height="250px"> </td>
            <td width="450px" height="300px"><?php echo $row['b_name'];?></td>
            <td width="450px" height="300px"><?php echo $row['b_author'];?></td>
            <td width="450px" height="300px"><?php echo $row['b_detail'];?></td>
            <td width="450px" height="300px"><?php echo $row['b_pub'];?></td>
               <td width="450px" height="300px"><?php echo $row['b_type'];?></td>
                   <td width="450px" height="300px"><?php echo $row['b_status'];?></td>
                   <td  width="450px" height="300px"><?php echo "<a href='".$row['link']."'>READ</a>"?></td>
                  </tr>
               <?php
                }
             ?>
             </tbody>
            </table>
           </div>  
    <?php       
           }
 }
 else
    {
        ?>
            <table class="table1" >
                <thead>
                    <tr>
                        <th>BOOK_ID</th>
                        <th>IMAGE</th>
                        <th>NAME</th>
                        <th>AUTHOR</th>
                        <th>DETAILS</th>
                        <th>PUBLICATION</th>
                        <th>TYPE</th>
                        <th>STATUS</th>
                        <th>READ BOOK</th>
                     
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $selquery="SELECT * FROM book_list ";

                    $que=mysqli_query($connection,$selquery);
                    
                    
                    
                    while($row=mysqli_fetch_assoc($que))
                    {
                    ?>
                      <tr>
                        <td width="450px" height="300px"><?php echo $row['b_id'];?></td>
                        <td  width="450px" height="300px"> <img src="<?php echo $row['b_photo']; ?>" width="300px" height="250px"> </td>
                        <td width="450px" height="300px"><?php echo $row['b_name'];?></td>
                        <td width="450px" height="300px"><?php echo $row['b_author'];?></td>
                        <td  width="450px" height="300px"><?php echo $row['b_detail'];?></td>
                        <td  width="450px" height="300px"><?php echo $row['b_pub'];?></td>
                        <td  width="450px" height="300px"><?php echo $row['b_type'];?></td>
                        <td  width="450px" height="300px"><?php echo $row['b_status'];?></td>
                        <td  width="450px" height="300px"><?php echo "<a href='".$row['link']."'>READ</a>"?></td>
                      
                    </tr>
                    <?php
                    }
                    

                   ?>
                </tbody>
            </table>
</div>
             <?php
    }
    ?>   
            

</body>
</html>
              
