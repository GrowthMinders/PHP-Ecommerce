<?php 
include_once "connection.php"; 

    $email = $_POST['email'];
    $password = $_POST['pass'];
    $number = $_POST['phno']; 
    $nic = $_POST['nic'];

    if($email == null && $number != null && $password != null){

        $hashpassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE `customers` SET `pass` = '$hashpassword', `tel` = '$number' WHERE `nic` = '$nic'";

    }else if($password == null && $number != null && $email != null){

        $sql = "UPDATE `customers` SET `email` = '$email', `tel` = '$number' WHERE `nic` = '$nic'";

    }else if($number == null && $email != null && $password != null){

        $hashpassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE `customers` SET `email` = '$email', `pass` = '$hashpassword' WHERE `nic` = '$nic'";

    }else if(($number == null && $email == null && $password != null)){

        $hashpassword = password_hash($password, PASSWORD_DEFAULT);
        $sql = "UPDATE `customers` SET  `pass` = '$hashpassword' WHERE `nic` = '$nic'";

    }else if(($password == null && $email == null && $number != null)){

        $sql = "UPDATE `customers` SET  `tel` = '$number' WHERE `nic` = '$nic'";

    }else if(($password == null && $number == null && $email != null)){

        $sql = "UPDATE `customers` SET  `email` = '$email' WHERE `nic` = '$nic'";

    }else{
        $hashpassword = password_hash($password, PASSWORD_DEFAULT);

        $sql = "UPDATE `customers` SET  `tel` = '$number', `email` = '$email', `pass` = '$hashpassword'  WHERE `nic` = '$nic'";
        
    }
       
    $result = mysqli_query($conn, $sql);

    if($result == true) {
        header("location: ../profile.php");
    }

     mysqli_close($conn);  
?>