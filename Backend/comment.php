<?php

include_once "connection.php";

$nic = $_POST['nic'];
$pro = $_POST['comc'];
$com = $_POST['comb'];
$todaydate = $_POST['td'];
$todaytime = $_POST['tt'];


$sql = "INSERT INTO `comments` (`nic`,`comc`,`comb`,`td`,`tt`) VALUES ('$nic','$pro','$com','$todaydate','$todaytime')";
$result = mysqli_query($conn,$sql);

if($result == true){
  header("location: ../welcome.php");
}