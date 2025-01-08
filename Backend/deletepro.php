<?php 
  include_once "connection.php";

  $proname = $_POST['pname'];
  $procat = $_POST['pcateg'];

  $sql = "DELETE  FROM  $procat  WHERE  `pname` = '$proname'";
  $result = mysqli_query($conn,$sql);

  if($result == true){
    header("location: ../options.php");
  }

  mysqli_close($conn);
?> 