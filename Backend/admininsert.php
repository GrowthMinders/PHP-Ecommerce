<?php

include_once "connection.php";

  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $email = $_POST['email'];
  $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
  $nic = $_POST['nic'];
  $gender = $_POST['gen'];
  $tel = $_POST['phno'];

  $sql1 = "SELECT * FROM `admin` ";
  $row(mysqli_fetch_assoc(mysqli_query($conn,$sql1)));
   
    if($email == $row['email']){

       echo '<p><img src="../img/welcome/Login-Signup/warn.png" height="20px" width="20px">'."Email Occupied".'</p>';

    }else if($nic == $row['nic']){

       echo '<p><img src="../img/welcome/Login-Signup/warn.png" height="20px" width="20px">'."Use you NIC".'</p>';

    }else if(($nic == $row['nic']) && ($email == $row['email'])){

       header("location: ../adminlogin.php");
       
    }else if(isset($_FILES['pic'])){

      $image = $_FILES['pic']['tmp_name'];
      $imgcontent = addslashes(file_get_contents($image));
      

    $sql = "INSERT INTO `admin`(`fname`,`lname`,`email`,`nic`,`gender`,`tel`,`pass`,`img`) VALUES ('$firstname','$lastname','$email','$nic','$gender','$tel','$password','$imgcontent')";
    $result = mysqli_query($conn,$sql);

    if($result == true){
        header("location: ../adminlogin.php");
    }
     
     mysqli_close($conn);
  }
?>