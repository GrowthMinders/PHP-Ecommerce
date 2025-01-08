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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }
        .container1 {
            width: 90%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #e74c3c;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
        }
        .header h1 {
            margin: 0;
        }
        .cart-items {
            width: 100%;
            border-collapse: collapse;
        }
        .cart-items th, .cart-items td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .cart-items th {
            background-color: #f4f4f4;
        }
        .cart-items img {
            width: 50px;
            height: auto;
        }
        .summary {
            margin-top: 20px;
            text-align: right;
        }
        .summary p {
            margin: 5px 0;
        }
        .checkout {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        .actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .actions button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
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
    <div class="container1">
       
        <h2>Your cart items</h2>
        <table class="cart-items">
            <thead>
                <tr>
                    <th>Product Name / Description</th>
                    <th>Remove Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
            <?php 
          if(isset($_SESSION['nic'])){   
            while($row = mysqli_fetch_assoc($result)){
                echo'<form name="cartdel" action="Backend/cartdel.php" method = "POST">';
                echo'<tr>';
                  echo'<td>';
                      echo '<div class=d-flex style="margin:0px;">';
                      echo'<img src="'.$row['prop'].'" alt="'.$row['pron'].'" style="margin-right: 20px;">';
                      echo '<input type="text" id="proname" class="form-control" name="proname" value="'.$row['pron'].'" style="border:none;">';
                      echo '</div>';
                      echo $row['prod'];  
                  echo'</td>';
                  echo '<td>
                          <button type="submit" class="btn btn-danger" value="Remove from Cart">Remove from Cart</button>
                       </td>';
                   
                     $quantity = $row['qty'];  
                     if(($row['cat'] == "vegetable")||($row['cat'] == "meat")||($row['cat'] == "sea")||($row['cat'] == "fruit")){
                        if($row['cat'] == "vegetable" && $row['pron'] == "Coconut"){
                             echo '<td scope="row">'.$quantity.'</td>';  
                        }else{
                            if($quantity >= 1000){
                                 $quan = $quantity/1000;
                                 echo '<td scope="row">'.$quan.'Kg</td>';
                            }else{
                                 echo '<td scope="row">'.$quantity.'g</td>';
                            }
                        }
                         
                     }else{
                       echo '<td scope="row">'.$quantity.'</td>';
                     }

                   echo'<td>Rs.'.$row['propr'].'/=</td>';
                   $total = $row['propr'] * $row['qty'];
                   echo'<td>Rs.'.$total.'/=</td>';    
                echo'</tr>';
                echo'</form>';
                $_SESSION['count']++;
            }
          }  
            ?>
            </tbody>
            <caption style="text-align:right;"><button  class="btn btn-success" onclick ="by();">Check Out</button></caption>
        </table>
    </div>

<script>
function by() {
    window.location.href = 'checkout.php';
}
</script> 

    <?php include ("footer.php"); ?>
</body>
</html>
