<?php 
   session_start();
   include_once "connection.php";
   
   
   $email = $_POST['email'];
   $password = $_POST['pass'];

$sql = "SELECT * FROM `admin` WHERE `email` = '$email' ";
$row = mysqli_fetch_assoc(mysqli_query($conn,$sql));

if(($email != $row['email']) || (!password_verify($password,$row['pass']))){
   echo '<p><img src="../img/welcome/Login-Signup/warn.png" height="20px" width="20px">'."Wrong Credentials".'</p>';
   
}else if(($email == $row['email']) && (password_verify($password,$row['pass']))){
      if($row['nic'] == 1234567890123){
            $_SESSION['frname1'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['nic'] = $row['nic'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['tel'] = $row['tel'];
            $_SESSION['pass'] = $password;
            $_SESSION['img'] = $row['img'];   
      }else{
            $_SESSION['frname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['nic'] = $row['nic'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['tel'] = $row['tel'];
            $_SESSION['pass'] = $password;
            $_SESSION['img'] = $row['img'];
      }
      
      
      header("location: ../adminprofile.php");
}      
  
mysqli_close($conn);

?>      