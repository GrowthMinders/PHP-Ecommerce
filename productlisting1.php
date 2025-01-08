<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="css/header.css">
    <link href="css/style.css" rel="stylesheet">

    <title>Life Mart Online</title>
</head>

<body>

    <?php include("heder.php"); ?>
    <?php include_once "Backend/connection.php"; ?>

<?php 

$pro = $_POST['productcat'];
 
$sql = "SELECT * FROM  $pro";

if($pro == "vegetable"){
    echo '<center><h1 style="margin-top: 40px;">Vegetables</h1></center>';
   }else if($pro == "sea"){
    echo '<center><h1 style="margin-top: 40px;">Sae Food</h1></center>';
   }else if($pro == "pharmacy"){
    echo '<center><h1 style="margin-top: 40px;">Pharmaceutical</h1></center>';
   }else if($pro== "meat"){
    echo '<center><h1 style="margin-top: 40px;">Meat</h1></center>';
   }else if($pro == "housew"){
    echo '<center><h1 style="margin-top: 40px;">House Ware</h1></center>';
   }else if($pro == "househ"){
    echo '<center><h1 style="margin-top: 40px;">House Hold</h1></center>';
   }else if($pro == "grocerie"){
    echo '<center><h1 style="margin-top: 40px;">Groceries</h1></center>';
   }else if($pro == "fruit"){
    echo '<center><h1 style="margin-top: 40px;">Fruits</h1></center>';
   }else if($pro == "dairy"){
    echo '<center><h1 style="margin-top: 40px;">Dairy Products</h1></center>';
   }else if($pro == "chill"){
    echo '<center><h1 style="margin-top: 40px;">Chilled Products</h1></center>';
   }else if($pro == "beverage"){
    echo '<center><h1 style="margin-top: 40px;">Beverages</h1></center>';
   }else if($pro == "bakery"){
    echo '<center><h1 style="margin-top: 40px;">Bakery Items</h1></center>';
   } 

$result = mysqli_query($conn, $sql);
echo '<div style="display: flex; justify-content: center; margin-top: 40px; margin-left: 5%;">'; // Centerize the container
if ($result == true) {
    $counter = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        if ($counter % 4 == 0 && $counter != 0) {
            echo '</div><div style="display: flex; justify-content: center; margin-top: 5%; margin-left: 5%; margin-bottom: 5%;">'; // Close and reopen container for every 3 items
        }

        echo '<form id="pro' . $counter . '" name="pro' . $counter . '" action="singleproduct.php" method="POST">';
        echo '<div class="card" style="width: 18rem; margin: 0 10px;"  onclick="ploader('.$counter.');">'; // Add margin between cards
        echo '<img src="' . $row['ppic'] . '" class="card-img-top" alt="..." id="productimg' . $counter . '">';
        echo '<div class="card-body">';
        echo '<input type="hidden" name="productcats" value="' . $row['pname'] . '">';
        echo '<input type="hidden" name="productcat" value="' . $pro . '">';
        echo '<p name="productcats">' . $row['pname'] . '</p>';
        echo '<p class="card-text">' . $row['pdesc'] . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</form>';
        $counter++;
    }
}
echo '</div>';
?>

<script>
function ploader(counter){
    var formName = 'pro' + counter;
    document.forms[formName].submit();
}
</script>



    <?php include("footer.php"); ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


</body>

</html>