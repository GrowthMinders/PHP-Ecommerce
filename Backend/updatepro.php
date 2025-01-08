<?php 
  include_once "connection.php";

  
  $prodesc = $_POST['pdesc'];
  $proprice = $_POST['pprice'];
  $proavail = $_POST['pavail'];
  $proname = $_POST['pname'];
  $procat = $_POST['pcateg'];

  if($prodesc == "" && $proprice != null && $proavail != null){
    $sql = "UPDATE  $procat  SET `pprice` = '$proprice', `pavail` = '$proavail'  WHERE `pname` = '$proname'";
  
  }else if($proprice == "" && $prodesc != null && $proavail != null){
    $sql = "UPDATE  $procat  SET `pdesc` = '$prodesc', `pavail` = '$proavail'  WHERE `pname` = '$proname'";
  
  }else if($proavail == "" && $prodesc != null && $proprice != null){
    $sql = "UPDATE  $procat  SET `pdesc` = '$prodesc',  `pprice` = '$proprice'  WHERE `pname` = '$proname'";

  }else if(($prodesc == "")&&($proprice == "") && $proavail != null){
    $sql = "UPDATE  $procat  SET  `pavail` = '$proavail'  WHERE `pname` = '$proname'";
  
  }else if(($prodesc == "")&&($proavail == "") && $proprice != null){
    $sql = "UPDATE  $procat  SET  `pprice` = '$proprice' WHERE `pname` = '$proname'";
  
  }else if(($proprice == "")&&($proavail == "") && $prodesc != null){
    $sql = "UPDATE  $procat  SET  `pdesc` = '$prodesc' WHERE `pname` = '$proname'";
  
  }else {
    $sql = "UPDATE  $procat  SET `pdesc` = '$prodesc',  `pprice` = '$proprice', `pavail` = '$proavail'  WHERE `pname` = '$proname'";
  }

  
  $result = mysqli_query($conn,$sql);

  if($result == true){
    header("location: ../options.php");
  }else{
    echo '<img src="../img/welcome/Login-Signup/warn.png" height="20px" width="20px">'.'Incorrect product name';
    header("location: ../options.php");
  }

  mysqli_close($conn);
?> 