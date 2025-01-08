<?php
include_once "connection.php";

$product = $_POST['proname'];

$sql = "DELETE FROM `cart` WHERE `pron` = '$product'";
$result = mysqli_query($conn,$sql);

if($result == true){
    --$_SESSION['count'];
    header("location: ../cart.php");
}

?>