<?php 
  $nic = $_POST['nic'];
  include_once "connection.php";
    
  $sql = "INSERT INTO `invoice` (`nic`) VALUES ('$nic')";
  $result = mysqli_query($conn,$sql);

  if($result == true){
     header("location: ../invoice.php");
  }
  
?>  
