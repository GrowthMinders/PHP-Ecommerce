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
    <style>
        .product-image {
            max-width: 100%;
        }
        .related-products .card {
            margin-bottom: 20px;
        }
        .special-title {
            margin-top: 20px;
        }
    </style>

    <title>Life Mart Online</title>
</head>
<body>

<?php include ("heder.php"); ?>
<?php include_once ("Backend/connection.php"); 

$product1 = $_POST['productcats'];
$productcat = $_POST['productcat'];

$sql = "SELECT * FROM  $productcat WHERE `pname` = '$product1'";
$row = mysqli_fetch_assoc(mysqli_query($conn,$sql));

echo '<center><h1 style="margin-top:40px; margin-bottom:40px;">Buy '.$product1.'</h1></center>';


?>

    <script>
        function addcart(){
            document.forms['cart'].submit();
        }
    </script>

    <script>
        function reverse(){
            document.forms['try'].submit();
        }
    </script>

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="padding-bottom:0px;">
                <li class="breadcrumb-item"><a href="welcome.php">Home</a></li>
                <li class="breadcrumb-item"><a href="product.php">Product</a></li>
                <li class="breadcrumb-item"></li>
                <?php

                  echo '<form name="try" action="productlisting1.php" method="POST">';
                    echo '<input type="text" name="productcat" id="productcat"  value="'.$productcat.'" hidden>';
                  echo '</form>';

                   if($productcat == "vegetable"){
                    echo '<li class="breadcrumb-item"><p onclick="reverse();">Vegetables</p></li>';
                   }else if($productcat == "sea"){
                    echo '<li class="breadcrumb-item"><p onclick="reverse();">Sae Food</p></li>';
                   }else if($productcat == "pharmacy"){
                    echo '<li class="breadcrumb-item"><p onclick="reverse();">Pharmaceutical</p></li>';
                   }else if($productcat == "meat"){
                    echo '<li class="breadcrumb-item"><p onclick="reverse();">Meat</p></li>';
                   }else if($productcat == "housew"){
                    echo '<li class="breadcrumb-item"><p onclick="reverse();">House Ware</p></li>';
                   }else if($productcat == "househ"){
                    echo '<li class="breadcrumb-item"><p onclick="reverse();">House Hold</p></li>';
                   }else if($productcat == "grocerie"){
                    echo '<li class="breadcrumb-item"><p onclick="reverse();">Groceries</p></li>';
                   }else if($productcat == "fruit"){
                    echo '<li class="breadcrumb-item"><p onclick="reverse();">Fruits</p></li>';
                   }else if($productcat == "dairy"){
                    echo '<li class="breadcrumb-item"><p onclick="reverse();">Dairy Products</p></li>';
                   }else if($productcat == "chill"){
                    echo '<li class="breadcrumb-item"><p onclick="reverse();">Chilled Products</p></li>';
                   }else if($productcat == "beverage"){
                    echo '<li class="breadcrumb-item"><p onclick="reverse();">Beverages</p></li>';
                   }else if($productcat == "bakery"){
                    echo '<li class="breadcrumb-item"><p onclick="reverse();">Bakery Items</p></li>';
                   }               
                ?>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $product1?></li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $row['ppic']; ?>" alt="<?php echo $product1?>" class="product-image" height = "330px" width="450px">
            </div>
            <div class="col-md-6">

               <form name="cart" action="Backend/cartadd.php" method = "POST">
                <h2><?php echo $product1?></h2>
                <?php
                   if(($productcat == "beverage")||($productcat == "pharmacy")||($productcat == "househ")||($productcat == "housew")||($productcat == "grocerie")){
                       echo '<p><strong>Artificial Product</strong></p>';
                   }else{
                       echo '<p><strong>Natural Product</strong></p>';
                   }                
                ?>
                <p><?php echo $row['pdesc'] ?></p>
                <?php
                    if(($productcat == "vegetable")||($productcat == "meat")||($productcat == "sea")||($productcat == "fruit")){
                        if($productcat == "vegetable" && $product1 == "Coconut"){
                            echo'<h3>Rs.'.$row['pprice'].'/=</h3>';
                        }else{
                            $price = $row['pprice']*100;
                            echo'<h3>Rs.'. $price.'/=</h3>';
                        }
                    }else{
                        echo'<h3>Rs.'.$row['pprice'].'/=</h3>';
                    }
                 ?>
                
                <div class="form-group">
                <?php
                    if(($productcat == "vegetable")||($productcat == "meat")||($productcat == "sea")||($productcat == "fruit")){
                        if($productcat == "vegetable" && $product1 == "Coconut"){
                            echo'<label for="quantity">Quantity</label>';
                        }else{
                            echo'<label for="quantity">Quantity(g)</label>';
                        }
                    }else{
                        echo'<label for="quantity">Quantity</label>';
                    }
                 ?>

                    <input type="text" id="pron" class="form-control" name="pron" value="<?php echo $product1 ?>" hidden>

                    <input type="text" id="propr" class="form-control" name="propr" value="<?php echo $row['pprice'] ?>" hidden>
                    <input type="text" id="prod" class="form-control" name="prod" value="<?php echo $row['pdesc'] ?>" hidden>
                    <input type="text" id="prop" class="form-control" name="prop" value="<?php echo $row['ppic'] ?>" hidden>
                    <input type="text" id="proc" class="form-control" name="proc" value="<?php echo $productcat ?>" hidden>
                 <?php
                    if(isset($_SESSION['nic'])){
                        echo '<input type="text" id="nic" class="form-control" name="nic" value="'.$_SESSION['nic'].'" hidden>';
                    }
                 ?>
                     
                 <?php
                    if(($productcat == "vegetable")||($productcat == "meat")||($productcat == "sea")||($productcat == "fruit")){
                        if($productcat == "vegetable" && $product1 == "Coconut"){
                            echo'<input type="number" id="qty" class="form-control" name="qty" value="1" min="1" max="5000">';  
                        }else{
                            echo'<input type="number" id="qty" class="form-control" name="qty" value="100" min="100" max="5000">';
                        }
                    }else{
                        echo'<input type="number" id="qty" class="form-control" name="qty" value="1" min="1" max="5000">';
                    }
                 ?>
                    
                </div>


                <?php
                  if(isset($_SESSION['nic'])){
                    echo'<div>';
                  }else{
                    echo'<div onclick="pop();">';
                  }
                ?>
              
              <div class="dropdown show"> 
                <?php
                if(isset($_SESSION['nic'])){
                    echo '<button type = "button" class="btn btn-success" style="margin-right: 8px;" value="cartchk" onclick="addcart();">Add to Cart</button>';
                    echo '<a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Add Comment';
                    echo '</a>';
                    
                }else{
                    echo '<button class="btn btn-success" disabled style="margin-right: 8px;">Add to Cart</button>';
                    echo '<button type = "button" class="btn btn-primary dropdown-toggle" style="margin-right: 8px;" value="cartchk" disabled>Add Comment</button>';
                } 
                ?> 


        <script>
            function pop(){
                alert("You need to be logged in to add items to the cart or to comment.");
            }
        </script>
     </form>



             


        <script>
        function addcart1() {
            document.forms['coo'].submit();
        }
       </script>


                <?php
                if(isset($_SESSION['nic'])){
                    $todayd = date("d/m/Y");

                    $zone = date_default_timezone_set("Asia/Colombo"); 
                    $todayt = date("H:i:s"); 
                }
                ?>      
                 
                
            <center>
            <div class="dropdown-menu p-3" aria-labelledby="dropdownMenuLink" style="margin-top:10px;">
                <form name="com" action="Backend/comment.php" method="POST">
                    <input type="hidden" name="nic" id="nic" value="<?php echo $_SESSION['nic']; ?>">
                    <input type="hidden" name="comc" id="comc" value="<?php echo $product1; ?>">
                    <input type="hidden" name="td" id="td" value="<?php echo $todayd; ?>">
                    <input type="hidden" name="tt" id="tt" value="<?php echo $todayt; ?>">
                    <div class="form-group">
                        <label for="pdesc">Comment<span id="req">*</span></label>
                        <textarea name="comb" id="comb" class="form-control" required></textarea>
                    </div>
                    <center>
                        <button type="submit" name="sub" id="sub" class="btn btn-outline-success">Save</button>
                    </center>
                </form>
            </div>
        </div>
    </center>
         

          
</div>
        </div>
        </div>
     

       

       

<!-- Comments -->
<?php
  include_once "Backend/connection.php";

  $sql = "SELECT * FROM `comments` WHERE `comc` = '$product1' ";
  $result = mysqli_query($conn,$sql);

  while($row = mysqli_fetch_assoc($result)){

     echo '<center><h1 style="margin-top:40px; margin-bottom:40px;">Reviews</h1></center>';

       $nic = $row['nic'];
       include_once "Backend/connection.php";
       $sql = "SELECT `img`,`fname`,`lname` FROM `customers` WHERE `nic` = '$nic' ";
       $row1 = mysqli_fetch_assoc(mysqli_query($conn,$sql));

    echo '<div class="card-body" style="margin-left:-500px;">';
    echo '<div class="container mt-4  offset-5">';
    echo '<div class="row">';
    echo '<div class="col-12">';
      echo '<div class="card" style="width:800px; height:80px;">';
      echo '<div class="d-flex align-items-start" style="margin-top:-60px; margin-left:-60px;">';
                          echo '<img class="img-fluid flex-shrink-0 rounded-circle" src="data:image/png;charset=utf8;base64,'.base64_encode($row1['img'] ).'" style="width: 50px; height: 50px;">';
                          echo '<h5 class="mb-1 ml-2" style="margin-top:10px;">'.$row1['fname'].' '.$row1['lname'].'</h5>';
          echo '</div>';
        echo '<div class="card-body">';
          echo '<p class="card-text">';
            echo '<sup><i class="fa fa-quote-left fa text-primary"></i></sup>
                    '.$row['comb'].'
            <sup><i class="fa fa-quote-right fa text-primary"></i></sup><br>
            <label>Posted on '.$row['td'].' '.'at'.' '.$row['tt'].'</label>    
          </p>';
        echo '</div>';
      echo '</div>';
    echo '</div>';
  echo '</div>';
echo '</div>';
echo '</div>';

  }
?>


<!-- Related Product -->
<center><h1 style="margin-top:40px; margin-bottom:40px;">Related Products</h1></center>
<?php

include_once "Backend/connection.php";

$sql1 = "SELECT * FROM $productcat ";
$result = mysqli_query($conn,$sql1);
$end = 0;

echo '<div class="row related-products">';
while($row1 = mysqli_fetch_assoc($result)){
    if($end == 4){
        break;
    }
    if($row1['pname'] == $product1){
        continue;
    }
        echo '<div class="col-md-3">';
        echo '<form name="car'.$end.'" id="car'.$end.'" action="singleproduct.php" method = "POST">';
            echo '<div class="card" onclick="ld('.$end.');">';
                echo '<img class="card-img-top"  id="'.$end.'" src="'.$row1['ppic'].'" alt="'.$row1['pname'].'" height = "200px" width="150px">';
                echo '<hr class="dropdown-divider">';
                echo '<div class="card-body">';
                    echo '<h4 class="card-title'.$end.'">'.$row1['pname'].'</h5>';
                    echo '<p class="card-text'.$end.'">'.$row1['pdesc'].'</p>';

                  //Displaying 100g price temporaly 
                    if(($productcat == "vegetable")||($productcat == "meat")||($productcat == "sea")||($productcat == "fruit")){
                        if($productcat == "vegetable" && $row1['pname'] == "Coconut"){
                            echo'<h3 class="card-title'.$end.'">Rs.'.$row1['pprice'].'/=</h3>';
                        }else{
                            $prices = $row1['pprice']*100;
                            echo'<h3 class="card-title'.$end.'">Rs.'. $prices.'/=</h3>';
                        }
                    }else{
                        echo'<h3 class="card-title'.$end.'">Rs.'.$row1['pprice'].'/=</h3>';
                    }
                 

                    echo '<input type="text" id="productcat" class="form-control'.$end.'" name="productcat" value="'.$productcat.'" hidden>';
                    echo '<input type="text" id="productcats" class="form-controls'.$end.'" name="productcats" value="'.$row1['pname'].'" hidden>';
                echo '</div>';
            echo '</div>';
            echo '</form>';
        echo '</div>';
    $end++;
    
}

echo '</div>';
mysqli_close($conn);

?>  

</div>

<script>
    function ld(end){
        var formName = 'car' + end;
        document.forms[formName].submit();
    }
</script>

        
<?php include ("footer.php"); ?>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

     
</body>
</html>