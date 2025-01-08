<?php

include_once "connection.php";

  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $email = $_POST['email'];
  $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
  $date = $_POST['date'];
  $month = $_POST['month'];
  $year = $_POST['year'];
  $nic = $_POST['nic'];
  $gender = $_POST['gen'];
  $tel = $_POST['phno'];
  $house = $_POST['house'];
  $district = $_POST['dist'];
  $province = $_POST['pro'];
  $town = $_POST['town'];
  $city = $_POST['city'];

 
  $sql1 = "SELECT * FROM `customers`";
  $row = mysqli_fetch_assoc(mysqli_query($conn,$sql1));

  if(($email == $row['email'])&&($nic == $row['nic'])){ 

       $_SESSION['error'] = '<p><img src="../img/welcome/Login-Signup/warn.png" height="20px" width="20px">'."You already have an account".'</p>';
       $_SESSION['email1'] = $row['email'];
       header("location: ../Login.php");

  }else if($email == $row['email']){

       $_SESSION['error'] = '<p><img src="../img/welcome/Login-Signup/warn.png" height="20px" width="20px">'."Email already taken".'</p>';
       header("location: ../Signup.php");

  }else if($nic == $row['nic']){

       $_SESSION['error'] = '<p><img src="../img/welcome/Login-Signup/warn.png" height="20px" width="20px">'."NIC already taken".'</p>';
       header("location: ../Signup.php");

  }else if(isset($_FILES['pic'])){
          
     $image = $_FILES['pic']['tmp_name'];
     $imgcontent = addslashes(file_get_contents($image));
     
     $sql = "INSERT INTO `customers`(`fname`,`lname`,`email`,`date`,`month`,`year`,`nic`,`gender`,`tel`,`house`,`district`,`province`,`town`,`city`,`pass`,`img`) VALUES ('$firstname','$lastname','$email','$date','$month','$year','$nic','$gender','$tel','$house','$district','$province','$town','$city','$password','$imgcontent')";
     $result = mysqli_query($conn,$sql);

     if($result == true){
         header("location: ../Login.php");
     }
  }
     
  mysqli_close($conn);
  
?>