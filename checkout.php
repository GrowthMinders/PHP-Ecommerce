<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/header.css">
    <link href="css/style.css" rel="stylesheet">
    <title>Shopping Cart</title>
    </head>
    
<body>

<?php include ("heder.php"); ?>
<?php 
if(isset($_SESSION['nic'])){
    $nic = $_SESSION['nic'];
    include_once "Backend/connection.php";
  
    $sql = "SELECT * FROM `cart` WHERE `nic` = '$nic' ";
    $result = mysqli_query($conn,$sql); 
    $_SESSION['count'] = 0;
}
?>

<script>
   function doo(){
     document.forms['nicpush'].submit();
   }
</script>

<script>
   function doon(){
     alert("No products are available in the cart");
   }
</script>

<form name="nicpush" action="Backend/inv.php" method="POST" hidden>
    <input type="text" name="nic" id="nic" value="<?php echo $nic; ?>" hidden>
</form> 

<table width="100%">
    <th>
    <div class="d-flex">
        <div class="col-3 offset-2">Payment</div>   
    </div>
    <div>
       <a href="https://www.paypal.com/" target="_blank"><img src="img/welcome/paypal.png" width="150px" height="150px" style="margin-right:25px;"></a>
       <?php
       if(isset($_SESSION['count']) != 0){
        echo '<a href="#" target="_blank" onclick="doo();" ><img src="img/welcome/money-flow.png" width="75px" height="75px"></a> ';
         
       }else{
        echo '<a href="#" onclick="doon();"><img src="img/welcome/money-flow.png" width="75px" height="75px"></a> '; 
       }
       ?>
       
    </div>
    </th>
    <th>
<div class="order-summary">
        <div class="header">
            <h2>Order Summary</h2>
            <a href="cart.php" class="edit-cart">Edit cart</a>
        </div>
<?php        
        if(isset($_SESSION['nic'])){   
            while($row = mysqli_fetch_assoc($result)){
                echo '<div class="items">';
                   echo '<div class="item">';
                          echo '<img src="'.$row['prop'].'" alt="'.$row['pron'].'" height="90" width="105px">';
                      echo '<div class="item-details">';
                      $quantity = $row['qty'];
                      if(($row['cat'] == "vegetable")||($row['cat'] == "meat")||($row['cat'] == "sea")||($row['cat'] == "fruit")){
                          if($row['cat'] == "vegetable" && $row['pron'] == "Coconut"){
                               echo '<span>'.$quantity.'</span>';  
                          }else{
                              if($quantity >= 1000){
                                   $quan = $quantity/1000;
                                   echo '<span>'.$quan.'Kg</span>';
                              }else{
                                   echo '<span>'.$quantity.'g</span>';
                              }
                          }
                           
                       }else{
                         echo '<span>X'.$quantity.'</span>';
                       }
                       if($row['pron'] == "Prima Kottu Mee Hot & Spicy 80g"){
                          echo '<span>'.$row['pron'].'</span>';
                       }else{
                          echo '<span>'.$row['pron'].'</span>';
                       }
                          
                          echo '<span class="price">Rs.'.$row['propr'].'</span>';
                         
                        
                      echo '</div>';
                   echo '</div>';
                echo '</div>';
                $_SESSION['count']++;
                
            }
        } 
?>         
        <div class="summary">
          <div class="total">
            <span>TOTAL:</span>
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
                      echo '<span>Rs.'.$total.'</span>';
                   }                     
                ?>
            </div>
        </div>
    </div>
   </th>
</table>

<?php include ("footer.php"); ?>
</body>
</html>