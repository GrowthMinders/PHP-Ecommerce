<?php 
   session_start();
   include_once "connection.php";
   
   
   $email = $_POST['email'];
   $password = $_POST['pass'];
   $date = $_POST['laccessd'];
   $time = $_POST['laccesst'];

   $sql = "SELECT * FROM `customers` WHERE `email` = '$email' ";
   $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));


   if(($email == null)||($password == null)){
      echo '<label id="email-pass-error" class="error" for="email-pass"><img src="../img/welcome/Login-Signup/warn.png" height="20px" width="20px">'."Fill up the fields".'</label>';
   }else if(($email == $row['email'])&&(password_verify($password,$row['pass']))){
      $sql1 = "UPDATE `customers` SET `laccessd`='$date',`laccesst`='$time'  WHERE `email`='$email' ";
      mysqli_query($conn, $sql1);

      $row1 = mysqli_fetch_assoc(mysqli_query($conn, $sql));

      $gender  = $row1['gender'];

   if($gender = !null){
      if($gender == "Male"){
         $_SESSION['call'] = "Mr.";
      }
      
      
      if($gender == "Female"){
         $_SESSION['call'] = "Ms.";
      }
   }

      $_SESSION['fname'] = $row1['fname'];
      $_SESSION['lname'] = $row1['lname'];
      $_SESSION['nic'] = $row1['nic'];
      $_SESSION['email'] = $row1['email'];
      $_SESSION['tel'] = $row1['tel'];
      $_SESSION['house'] = $row1['house'];
      $_SESSION['district'] = $row1['district'];
      $_SESSION['province'] = $row1['province'];
      $_SESSION['town'] = $row1['town'];
      $_SESSION['city'] = $row1['city'];
      $_SESSION['year'] = $row1['year'];
      $_SESSION['laccessd'] = $row1['laccessd'];
      $_SESSION['laccesst'] = $row1['laccesst'];
      $_SESSION['img'] = $row1['img'];
      $_SESSION['pass'] = $password;

      header("location: ../welcome.php");
   }else{
      echo'<label id="email-pass-error" class="error" for="email-pass"><img src="../img/welcome/Login-Signup/warn.png" height="20px" width="20px">'."Wrong credentials".'</label>';
   } 
   
?>