<?php include_once ("connection.php");
    
    $proname = $_POST['pname'];
    $prodesc = $_POST['pdesc'];
    $proprice = $_POST['pprice'];
    $proavail = $_POST['pavail'];
    $propic = $_POST['ppic'];
    $procat = $_POST['pcateg'];

    $sql5= "INSERT INTO $procat (`pname`,`pdesc`,`pprice`,`pavail`,`ppic`) VALUES ('$proname','$prodesc','$proprice','$proavail','$propic')";
    $result = mysqli_query($conn,$sql5);

    if($result == true){
        header("location: ../options.php");
    }

    mysqli_close($conn);
?>