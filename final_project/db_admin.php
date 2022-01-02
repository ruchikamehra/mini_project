<?php
class db_admin{
    protected $conn;
    function connectionset(){
// $dbhost="localhost";
// $dbuser="root";
// $dbPass="";
// $dbname="ebook_management_db";
try{ 
    $this->conn=new PDO("mysql:host=localhost;dbname=ebook_management_db","root","");
    echo"connection succesful";

}
catch(PDOException $err){
    echo "error";
}
    }
}
?>