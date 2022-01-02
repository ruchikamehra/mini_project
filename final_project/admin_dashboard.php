<?php
session_start();

$admin_id=$_SESSION["admin_id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="admin_dashboard1.css">
</head>
<body>
    
<div class="bar1">
    <div class="bar1_logo">
        <h1><span class="mybrary">MYBRARY</span></h1>
    </div>
    <div class="bar1_menu">
        <ul>
        <li><a href="" class="act" ><span class="las la-user "></span><span>ADMIN</span></a></li> 
           <!-- <li><a href="" ><span class="las la-book"></span><span>ADD BOOK</span></a></li>  -->
           <li><a href=""  ><span class="las la-book"></span><span>BOOK RECORD</span></a></li> 
           <li><a href=""><span class="las la-book"></span><span>BOOK REQUEST</span></a></li> 
           <!-- <li><a href="" ><span class="las la-book"></span><span>ADD STUDENT</span></a></li>  -->
           <li><a href="" ><span class="las la-book"></span><span>STUDENT REPORT</span></a></li> 
           <li><a href="" ><span class="las la-book"></span><span>ISSUE BOOK</span></a></li> 
           <li><a href="" ><span class="las la-book"></span><span>ISSUE REPORT</span></a></li> 
      
        </ul>
    </div>
</div>
<div class="bar2">
<div class="main">
    <header>
      <h1>
          <label for=""><span class="las la-bars"></span></label>
      Dashboard
      </h1>
      <div class="user">
          <a href=""><span class="las la-user"></span><span>LOGOUT</span></a>
      </div>
    </header>
    <main>
      <img class="bg" src="new1.jpeg" alt="image">


      <div class="box">
          <div class="data">
          <h3>BOOK SECTION</h3>
          <br/>
          <img class="book_img" src="books.png"  alt="book_image">
          <br/>
          <br/>
          <a href="add_book.php">ADD NEW BOOK</a>
      </div>
</div>
<div class="box1">
          <div class="data">
          <h3>ENTRY SECTION</h3>
          <br/>
          <img class="student_img" src="sty.png"  alt="student_image">
          <br/>
          <br/>
          <a href="">ADD  STUDENT</a>
      </div>
</div>
    </main>
</div>
</div>
</body>
</html>