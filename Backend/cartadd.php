<?php

include_once "connection.php";
    $prod = $_POST['prod'];
    $pron = $_POST['pron'];
    $propr = $_POST['propr'];
    $prop = $_POST['prop'];
    $quantity = $_POST['qty'];
    $NIC = $_POST['nic'];
    $category = $_POST['proc'];

    $sql1 = "SELECT * FROM `cart`";
    $result1 = mysqli_query($conn,$sql1);
    while($row = mysqli_fetch_assoc($result1)){
       if($row['pron'] == $pron){
          $new = $row['qty'] + $quantity;
          $sql2 = "UPDATE `cart` SET `qty` = '$new' WHERE `nic` = '$NIC' AND `pron` = '$pron'";
          $result2 = mysqli_query($conn,$sql2);
       }
    }

if($result2 == false){
    $sql = "INSERT INTO `cart` (`nic`,`pron`,`prod`,`propr`,`prop`,`qty`,`cat`) VALUES ('$NIC','$pron','$prod','$propr','$prop','$quantity','$category')";
    $result = mysqli_query($conn,$sql);
    if($result == true){
        header("location: ../product.php");
    }
}else{
    header("location: ../product.php");
}
    
?>