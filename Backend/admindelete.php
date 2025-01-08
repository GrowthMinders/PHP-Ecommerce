
<?php include_once "connection.php"; ?>
<?php
  $email = $_POST['email1'];

  if($email == "b@lfmart.com"){
    echo '<img src="../img/welcome/Login-Signup/warn.png" height="20px" width="20px">'.'Super Administrator Account Cannot Be Deleted';
  }else{
    $sql = "DELETE FROM `admin` WHERE `email` = '$email'";
    $result = mysqli_query($conn,$sql);
    if($result == true){
       header("location: ../adminprofile.php");
    }
  }

?>