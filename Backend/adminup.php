<?php 
include_once "connection.php"; 

    $password = $_POST['pass'];
    $number = $_POST['phno']; 
    $nic = $_POST['nic'];

    if($number == null){
        $hashpassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE `admin` SET `pass` = '$hashpassword' WHERE `nic` = '$nic' ";
    }else if($password == null){
        $sql = "UPDATE `admin` SET `tel` = '$number' WHERE `nic` = '$nic' ";
    }else{
        $hashpassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE `admin` SET `pass` = '$hashpassword', `tel` = '$number' WHERE `nic` = '$nic' ";
    }


    $result = mysqli_query($conn,$sql);
    if($result == true){
        header("location: ../adminprofile.php");

    }
?>