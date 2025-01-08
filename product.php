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
    <style>
       #product{
          height:200px;
          width:auto;
       }
       .card-text{
         margin-top: 1rem;
         margin-bottom: 1rem;
         padding-left:10px;
       } 
    </style>
    <title>Life Mart Online</title>
</head>
<script>
function okay() {
    document.getElementById("productcat").value = "vegetable";
    document.forms['prosearch'].submit();
    document.getElementById("productcat").value = "";
}

function okay1() {
    document.getElementById("productcat1").value = "fruit";
    document.forms['prosearch'].submit();
    document.getElementById("productcat1").value = "";
}

function okay2() {
    document.getElementById("productcat2").value = "bakery";
    document.forms['prosearch'].submit();
    document.getElementById("productcat2").value = "";
}

function okay3() {
    document.getElementById("productcat3").value = "meat";
    document.forms['prosearch'].submit();
    document.getElementById("productcat3").value = "";
}

function okay4() {
    document.getElementById("productcat4").value = "sea";
    document.forms['prosearch'].submit();
    document.getElementById("productcat4").value = "";
}

function okay5() {
    document.getElementById("productcat5").value = "chill";
    document.forms['prosearch'].submit();
    document.getElementById("productcat5").value = "";
}

function okay6() {
    document.getElementById("productcat6").value = "beverage";
    document.forms['prosearch'].submit();
    document.getElementById("productcat6").value = "";
}

function okay7() {
    document.getElementById("productcat7").value = "pharmacy";
    document.forms['prosearch'].submit();
    document.getElementById("productcat7").value = "";
}

function okay8() {
    document.getElementById("productcat8").value = "househ";
    document.forms['prosearch'].submit();
    document.getElementById("productcat8").value = "";
}

function okay9() {
    document.getElementById("productcat9").value = "housew";
    document.forms['prosearch'].submit();
    document.getElementById("productcat9").value = "";
}

function okay10() {
    document.getElementById("productcat10").value = "dairy";
    document.forms['prosearch'].submit();
    document.getElementById("productcat10").value = "";
}

function okay11() {
    document.getElementById("productcat11").value = "grocerie";
    document.forms['prosearch'].submit();
    document.getElementById("productcat11").value = "";
}
</script>

<body>
    <?php include ("heder.php"); ?>
    <center><h1 style="margin-top: 40px !important;">Product Categories</h1></center>
    <?php include_once "Backend/connection.php"; ?>

    <form name="prosearch" method="POST" action="productlisting.php">
        <div class="d-flex m-2 p-2 " id ="touch" style="margin-left:-14px !important; margin-top:40px !important;">

            <div class="card offset-1" style="width: 18rem;" onclick="okay();">
                <img src="img/welcome/products/vegetables.jpeg" class="card-img-top" alt="..." id="product">
                    <p class="card-text">Vegetables</p>
                    <input type="text" name="productcat" id="productcat"  value="" hidden>
            </div>


            <div class="card offset-1" style="width: 18rem;" onclick="okay1();">
                <img src="img/welcome/products/fruits.jpg" class="card-img-top" alt="..." id="product">

                    <p class="card-text">Fruits</p>
                    <input type="text" name="productcat1" id="productcat1" value="" hidden>
              

            </div>



            <div class="card offset-1" style="width: 18rem;" onclick="okay2();">
                <img src="img/welcome/products/bakery products.jpg" class="card-img-top" alt="..." id="product">
               
                    <p class="card-text">Bakery procucts</p>
                    <input type="text" name="productcat2" id="productcat2" value="" hidden>
              
            </div>


            <div class="card offset-1" style="width: 18rem;" onclick="okay3();">
                <img src="img/welcome/products/meat.jpg" class="card-img-top"alt="..." id="product">
               
                    <p class="card-text">Meat</p>
                    <input type="text" name="productcat3" id="productcat3" value="" hidden>
           
                </a>
            </div>
        </div>


        <div class="d-flex m-2 p-2" id ="touch"  style="margin-left:-14px !important;">


            <div class="card offset-1" style="width: 18rem;" onclick="okay4();">
                <img src="img/welcome/products/sea food.jpg" class="card-img-top" alt="..." id="product">
                
                    <p class="card-text">Sea Food</p>
                    <input type="text" name="productcat4" id="productcat4" value="" hidden>
                
            </div>


            <div class="card offset-1" style="width: 18rem;" onclick="okay5();">
                <img src="img/welcome/products/chilled.jpg" class="card-img-top" alt="..." id="product">
               
                    <p class="card-text">Chilled</p>
                    <input type="text" name="productcat5" id="productcat5" value="" hidden>
                
            </div>


            <div class="card offset-1" style="width: 18rem;" onclick="okay6();">
                <img src="img/welcome/products/beverages.jpg" class="card-img-top" alt="..." id="product">
              
                    <p class="card-text">Beverages</p>
                    <input type="text" name="productcat6" id="productcat6" value="" hidden>
                
            </div>


            <div class="card offset-1" style="width: 18rem;" onclick="okay7();">
                <img src="img/welcome/products/pharmacy.avif" class="card-img-top" alt="..." id="product">
              
                    <p class="card-text">Pharmacy</p>
                    <input type="text" name="productcat7" id="productcat7" value="" hidden>
                
            </div>
        </div>


        <div class="d-flex m-2 p-2" id ="touch"  style="margin-left:-14px !important;">
            <div class="card offset-1" style="width: 18rem;" onclick="okay8();">
                <img src="img/welcome/products/household.jpg" class="card-img-top" alt="..." id="product">
            
                    <p class="card-text">House hold</p>
                    <input type="text" name="productcat8" id="productcat8" value="" hidden>
             
            </div>


            <div class="card offset-1" style="width: 18rem;" onclick="okay9();">
                <img src="img/welcome/products/houseware.jpg" class="card-img-top" alt="..." id="product">
              
                    <p class="card-text">House ware</p>
                    <input type="text" name="productcat9" id="productcat9" value="" hidden>
             
            </div>


            <div class="card offset-1" style="width: 18rem;" onclick="okay10();">
                <img src="img/welcome/products/dairy.jpg" class="card-img-top"alt="..." id="product">
                
                    <p class="card-text">Dairy products</p>
                    <input type="text" name="productcat10" id="productcat10" value="" hidden>
          
                </a>
            </div>


            <div class="card offset-1" style="width: 18rem;" onclick="okay11();">
                <img src="img/welcome/products/groceries.jpg" class="card-img-top" alt="..." id="product">
                
                    <p class="card-text">Groceries</p>
                    <input type="text" name="productcat11" id="productcat11" value="" hidden>
             
            </div>
        </div>
    </form>

    <?php include ("footer.php"); ?>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


</body>

</html>