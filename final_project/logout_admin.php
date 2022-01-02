<?php
session_start();
if(isset($_SESSION['new_user']))
{
    unset($_SESSION['new_user']);
}
header("location:front_page.php");