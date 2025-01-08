<?php
ob_start();
include("heder.php");
$nic = $_SESSION['nic'];
ob_end_clean(); 
 
include_once "Backend/connection.php";

$sql = "DELETE FROM `cart` WHERE `nic`= '$nic' ";
$result = mysqli_query($conn,$sql);

if($result == true){
    $_SESSION['call'] = "";
    session_start();
    session_unset();
    session_destroy();
    header("location: welcome.php");
}
?>