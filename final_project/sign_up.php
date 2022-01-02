<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Sign Up</title>
    <link href="sign_up_1.css" rel="stylesheet">
</head>
<body>
    <div class="main">
    <div class="navbar">
         <div class="icon">
            <h2 class="logo">MYBRARY</h2>

        </div> 
        </div>
<div class="form1">
                <h2>Registration form</h2>
                <hr/>
                <form action ="register.php" method="post" enctype="mutliple/form-data">
                    <div class="user2">
                
                <input  type="text" name="new_name" placeholder="Enter your Full Name " >
                <input  type="text" name ="new_user" placeholder="Enter your username" >
                <input  type="email" name ="new_email" placeholder="Enter your mail ID" >
                <input  type="tele" name ="new_tel" placeholder="Enter your telephone no" >
                <input  type="password" name ="new_pass" placeholder="Enter the Password" >
                <input  type="password" name ="new_cfpass" placeholder="Re enter the password" >
            
                </div>
                <div class ="button1">
                <input type="submit" value ="Sign Up"  name="new_submit">
                </div>
          
            </div>
</div>
</body>
</html>