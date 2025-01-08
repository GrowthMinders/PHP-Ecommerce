<?php 
 include_once("connection.php");

 $delete = $_POST['del'];

 $sql = "DELETE  FROM `customers` WHERE `email` = '$delete' ";
 $result = mysqli_query($conn,$sql);

 if($result == true){
   session_start();
   session_unset(); 
   session_destroy();
   header("location: ../welcome.php");
 }

 mysqli_close($conn);
?>