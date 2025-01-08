<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Invoice</title>
</head>
<style>
    .omit{
        background-color: #F5F5F5 !important;
        border:none !important;
    }
</style>
<body>
    
<?php 
ob_start();
include("heder.php");
ob_end_clean(); 
?>

<?php 
if(isset($_SESSION['nic'])){
    $nic = $_SESSION['nic'];
    include_once "Backend/connection.php";
  
    $sql = "SELECT * FROM `cart` WHERE `nic` = '$nic' ";
    $result = mysqli_query($conn,$sql); 
    $_SESSION['count'] = 0;
} 
?>

    <!-- Invoice Section Start-->
     <div class="container">
        <div class="row">
            <div class="col">
                <div class="Invoice-Banner">
                    <center>
                        <img src="img/welcome/Heder/logo.png" class="img" alt="Logo"><img src="img/welcome/Heder/text.png" class="img" alt="Brand Name" style="margin-top:20px;">
                        <h4>1/110/4,Sudarshana Mawatha, Makandana, Madapatha</h4>
                        <h5>0777 123 123</h5>
                        <h6>Reg No: WFD5667</h6>
                    </center>
                </div>

                <div class="Invoice-Second-Middle-Text">
                    <center>
                        <h4>Payment Advice</h4>
                    </center>
                    <?php
                    if(isset($_SESSION['nic'])){
                       $usernic = $_SESSION['nic'];
                       $sql = "SELECT `id` FROM `invoice` WHERE `nic` =  '$usernic' ";
                       $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
                       echo '<h6>No:'.$row['id'].'</h6>';
                    }
                    ?>
                </div>
              
                <?php
                if(isset($_SESSION['nic'])){
                    $usernic = $_SESSION['nic'];
                    $sql1 = "SELECT * FROM `customers` WHERE `nic` = '$usernic' ";
                    $row = mysqli_fetch_assoc(mysqli_query($conn,$sql1));
                    $_SESSION['name'] = $row['fname'].' '.$row['lname'];
                    $_SESSION['ad'] = $row['house'].', '.$row['town'].', '.$row['city'].', '.$row['district'].', '.$row['province'];
                    $_SESSION['tele'] = $row['tel'];
                }        
                ?>      
                <div class="Inovoice-Basic-Info">
                    <div class="input-group">
                        <span class="input-group-text">Name:</span>
                        <input type="text" aria-label="First name" class="form-control" value="<?php echo $_SESSION['name']?>">
                      </div>
                      <br>
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default-3">Address:</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"  value="<?php echo $_SESSION['ad']?>" aria-describedby="inputGroup-sizing-default">
                      </div>

                      <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default- 4">Telephone:</span>
                        <input type="text" class="form-control" aria-label="Sizing example input"  value="<?php echo $_SESSION['tel']?>" aria-describedby="inputGroup-sizing-default">
                      </div>
                </div>
                <div class="Invoice-table">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Qty</th>
                            <th scope="col">Item</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>
                        <tbody>       

                <?php
                   $promotion; 
                   if(isset($_SESSION['nic'])){   
                      while($row = mysqli_fetch_assoc($result)){
                        $nic = $_SESSION['nic'];
                        $todayd = date("d/m/Y");
                        $zone = date_default_timezone_set("Asia/Colombo"); 
                        $todayt = date("H:i:s");

                        
                        
                        $quantity = $row['qty'];
                        $name = $row['pron'];
                        if($name == "Prima Kottu Mee Hot & Spicy 80g"){

                           $promotion = 1;
                           $disc = ($row['propr']/100)*7;
                           $val = $row['propr'] - $disc;
                           $price = $val * $quantity;
                        }else{
                          $total = $row['propr'] * $row['qty'];
                          $price = $total;
                        }
                        

                        $sql = "INSERT INTO `purchase` (`nic`,`pname`,`qty`,`price`,`date`,`time`) VALUES ('$nic','$name','$quantity','$price','$todayd','$todayt')";
                        mysqli_query($conn,$sql);

                       echo '<tr>';

                        if(($row['cat'] == "vegetable")||($row['cat'] == "meat")||($row['cat'] == "sea")||($row['cat'] == "fruit")){
                           if($row['cat'] == "vegetable" && $product1 == "Coconut"){
                                echo '<th scope="row">'.$quantity.'</th>';  
                           }else{
                               if($quantity >= 1000){
                                    $quan = $quantity/1000;
                                    echo '<th scope="row">'.$quan.'Kg</th>';
                               }else{
                                    echo '<th scope="row">'.$quantity.'g</th>';
                               }
                           }
                            
                        }else{
                          echo '<th scope="row">'.$quantity.'</th>';
                        }

                          echo '<td>'.$name.'</td>';
                          echo '<td>Rs.'.$row['propr'].'/=</td>';
                          
                          echo '<td>Rs.'.$price.'/=</td>';
                       echo '</tr>';
                       $_SESSION['count']++;
                      }
                   }  
                ?>
                
                
                
                <?php 
                $nic = $_SESSION['nic'];
                include_once "Backend/connection.php";
              
                $sql = "SELECT * FROM `cart` WHERE `nic` = '$nic' ";
                $result = mysqli_query($conn,$sql);  
                   $total = 0;      
                   if(isset($_SESSION['nic'])){   
                      while($row = mysqli_fetch_assoc($result)){
                        $subtotal = $row['propr'] * $row['qty'];
                        $total += $subtotal;
                      }
                      if(isset($promotion)){
                        
                        
                        echo '<tr>';
                        echo '<td class="omit"></td>';
                        echo '<td class="omit"></td>';
                        echo '<td><span>Discount</span></td>';
                        echo '<td><span>Rs.'.$disc.'/=</span></td>';
                        echo '</tr>';
                            $ftotal = $total - $disc;
                        echo '<tr>';
                         echo '<td class="omit"></td>';
                         echo '<td class="omit"></td>';
                         echo '<td><span>Grand Total</span></td>';
                         echo '<td><span>Rs.'.$ftotal.'/=</span></td>';
                      echo '</tr>';
                      }else{
                        echo '<tr>';
                        echo '<td class="omit"></td>';
                        echo '<td class="omit"></td>';
                        echo '<td><span>Grand Total</span></td>';
                        echo '<td><span>Rs.'.$total.'/=</span></td>';
                        echo '</tr>';
                      }
                   }                     
                ?>

<?php
  $nic = $_SESSION['nic'];
  include_once "Backend/connection.php";
              
  $sql = "DELETE FROM `invoice` WHERE `nic` = '$nic'";
  mysqli_query($conn,$sql);
?>

<?php
  $nic = $_SESSION['nic'];
  include_once "Backend/connection.php";
              
  $sql = "DELETE FROM `cart` WHERE `nic` = '$nic'";
  mysqli_query($conn,$sql);
?>     

                        </tbody>
                      </table>
                </div>
            </div>
        </div>
     </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
