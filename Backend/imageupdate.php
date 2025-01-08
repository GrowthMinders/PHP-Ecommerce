<?php
   include_once "connection.php";

   $nic = $_POST['nic'];
   $target = $_POST['location'];

      if(isset($_FILES['pic'])){
          $image = $_FILES['pic']['tmp_name'];
          $imagecontent = addslashes(file_get_contents($image));
          $sql = "UPDATE $target SET `img` = '$imagecontent' WHERE `nic` = '$nic' ";
          $result = mysqli_query($conn,$sql);
          if(($result == true)&&($target == "admin")){
            header("location: ../adminprofile.php");
          }else if(($result == true)&&($target == "customers")){
            header("location: ../profile.php");
          }
      }
?>