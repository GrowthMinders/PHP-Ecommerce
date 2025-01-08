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

    <title>Life Mart Online</title>
</head>
<body>

<script> 
function track(){
  document.forms['ld'].submit();
}
</script> 
<?php include_once ("heder.php"); ?>

    <!-- Hero Section Start -->

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/welcome/home/1.png" class="d-block w-100" alt="image1">
      <div class="carousel-caption d-none d-md-block">
      
        <?php
        if(isset($_SESSION['fname'])){
          if(isset($_SESSION['call'])){
              echo '<h1>Welcome ' . $_SESSION['call'] . '' . $_SESSION['fname'] . ' ' . $_SESSION['lname'] . '</h1>';
          }else{
              echo '<h1>Welcome ' . $_SESSION['fname'] . ' ' . $_SESSION['lname'] . '</h1>';
          }
        }else if(isset($_SESSION['frname'])){
              echo '<h1>Welcome Administrator ' . $_SESSION['frname'] . ' ' . $_SESSION['lname'] . '</h1>';
        }else if(isset($_SESSION['frname1'])){
              echo '<h1>Welcome Administrator ' . $_SESSION['frname1'] . ' ' . $_SESSION['lname'] . '</h1>';
        }else{
              echo '<h1>Welcome Guest</h1>';
        }
        ?>
        <div>
           <p><h4>Now at Life Mart!</h4>Enjoy a 7% discount for Prima Kottu Mee instant noodle pack</p>
           <form name="ld" action="singleproduct.php" method="POST">
              <input type="hidden" name="productcats" value="Prima Kottu Mee Hot & Spicy 80g">
              <input type="hidden" name="productcat" value="grocerie">
              <img src="img/welcome/home/disc.png" height="500px;" width="500px" onclick="track();">
           </form>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/welcome/home/2.png" class="d-block w-100" alt="image2">
      <div class="carousel-caption d-none d-md-block">
      <?php
        if(isset($_SESSION['fname'])){
          if(isset($_SESSION['call'])){
              echo '<h1>Welcome ' . $_SESSION['call'] . '' . $_SESSION['fname'] . ' ' . $_SESSION['lname'] . '</h1>';
          }else{
              echo '<h1>Welcome ' . $_SESSION['fname'] . ' ' . $_SESSION['lname'] . '</h1>';
          }
        }else if(isset($_SESSION['frname'])){
              echo '<h1>Welcome Administrator ' . $_SESSION['frname'] . ' ' . $_SESSION['lname'] . '</h1>';
        }else if(isset($_SESSION['frname1'])){
              echo '<h1>Welcome Administrator ' . $_SESSION['frname1'] . ' ' . $_SESSION['lname'] . '</h1>';
        }else{
              echo '<h1>Welcome Guest</h1>';
        }
        ?>
        <p>Find all products you need in one place, here at Life Mart</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/welcome/home/3.png" class="d-block w-100" alt="image3">
      <div class="carousel-caption d-none d-md-block">
      <?php
        if(isset($_SESSION['fname'])){
          if(isset($_SESSION['call'])){
              echo '<h1>Welcome ' . $_SESSION['call'] . '' . $_SESSION['fname'] . ' ' . $_SESSION['lname'] . '</h1>';
          }else{
              echo '<h1>Welcome ' . $_SESSION['fname'] . ' ' . $_SESSION['lname'] . '</h1>';
          }
        }else if(isset($_SESSION['frname'])){
              echo '<h1>Welcome Administrator ' . $_SESSION['frname'] . ' ' . $_SESSION['lname'] . '</h1>';
        }else if(isset($_SESSION['frname1'])){
              echo '<h1>Welcome Administrator ' . $_SESSION['frname1'] . ' ' . $_SESSION['lname'] . '</h1>';
        }else{
              echo '<h1>Welcome Guest</h1>';
        }
        ?>
        <p>Bringing you the best products at best deals from all around the world</p>
      </div>
    </div>
  </div>
</div>

        

    <!-- Second Section Start -->
    <div class="container offset-3" style="margin-top: 50px;">
      <div class="row">
        <div class="col-lg-4" style="margin-top:20px;">
          <img src="img/welcome/home/delivery.png" alt="..." width="350px" height="170px">
        </div>
        <div class="col-lg-5 offset-1">
          <h1>Promotion</h1>
          <p><font size="6"><i>Don't miss out on your free delivery offer for purchases above Rs.15,000.</i></font></p>
        </div>
      </div>
    </div>
    <!-- Second Section End -->

    <!-- Third Section Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <center><h2>Fresh Fruits</h2></center>
        </div>
      </div>
    </div>
    <!-- Third Section End -->
    
    <!-- Fourth Section Start -->
    <div class="container" style="margin-top: 50px;">
      <div class="row">
        <div class="col-lg">
          <div class="card border-success mb-3">
            <div class="card-body text-success">
              <center><img src="https://1drv.ms/i/c/9530d5decb05b927/UQMnuQXL3tUwIICVywQAAAAAAIlcJ0mZm6V5bbs" alt="Water Melon" height="300px" width="300px"></center>
              <h5 class="card-title">Water Melon</h5>
              <p class="card-text">Refresh yourself with the sweet, hydrating taste of watermelon. Ideal for cooling down on hot days, this fruit is a summer favorite.</p>
            </div>
          </div>
        </div>
        <div class="col-lg">
          <div class="card border-success mb-3">
            <div class="card-body text-success">
            <center><img src="https://1drv.ms/i/c/9530d5decb05b927/UQMnuQXL3tUwIICVxwQAAAAAADchV3_oHXEnNB8" alt="Papaya" height="300px" width="300px"></center>
              <h5 class="card-title">Papaya</h5>
              <p class="card-text">Packed with vitamins, enjoy the sweet and tropical flavor of organic papaya. Perfect for smoothies, salads and snacking. </p>
            </div>
          </div>
        </div>
        <div class="col-lg">
          <div class="card border-success mb-3">
            <div class="card-body text-success">
            <center><img src="https://1drv.ms/i/c/9530d5decb05b927/UQMnuQXL3tUwIICVyAQAAAAAANZdTjVBLs5nQv4" alt="Avacado" height="300px" width="300px"></center>
              <h5 class="card-title">Avacado</h5>
              <p class="card-text">Indulge in the creamy, nutrient-rich goodness of avocados and add a healthy touch to any of your meals.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Fourth Section End -->

    <script>
      function show(){
         document.getElementById("productcat").value = "bakery";
         document.forms['prosearch'].submit();
         document.getElementById("productcat").value = "";
      }
      function show1(){
         document.getElementById("productcat").value = "fruit";
         document.forms['prosearch'].submit();
         document.getElementById("productcat").value = "";
      }
      function show2(){
         document.getElementById("productcat").value = "meat";
         document.forms['prosearch'].submit();
         document.getElementById("productcat").value = "";
      }
    </script> 

    <!-- Fifth Section Start -->
    <div class="container" style="margin-top: 50px; text-align: center;">
      <div class="row">
        <div class="col">
          <h2>Product Categories</h2>
          <div class="filter_buttons">
          <form name="prosearch" method="POST" action="productlisting1.php">
            <input type="text" name="productcat" id="productcat" value="" hidden>
            <a href="product.php"><button type="button" data-name="all" class="btn btn-outline-success">All Items</button></a>
            <button type="button" data-name="Produce" class="btn btn-outline-success" onclick="show();">Bakery</button>
            <button type="button" data-name="Dairy" class="btn btn-outline-success" onclick="show1();">Fruits</button>
            <button type="button" data-name="Household" class="btn btn-outline-success" onclick="show2();">Meat</button>
          </form>
          </div>
        </div>
      </div>
    </div>




<script>
  function displaycom1(){
     document.forms['comentshw'].submit();
  }
</script>
<script>
  function displaycom2(){
     document.forms['comentshw1'].submit();
  }
</script>
<script>
  function displaycom3(){
     document.forms['comentshw2'].submit();
  }
</script>






<div class="container" style="margin-top:25px;">
    <div class="row">
        <div class="col-lg">
            <div class="card-deck">
                <!-- Card for Coconut -->
                <div class="card" data-name="Produce" onclick="displaycom1();">
                    <img class="card-img-top" src="https://1drv.ms/i/c/9530d5decb05b927/UQMnuQXL3tUwIICVpAQAAAAAAFoDJxNrQ8BGEnY" alt="Coconut" height="300px" width="300px">
                    <h5 class="card-title" style="margin-left:10px;">Coconut</h5>
                    <div class="card-body">
                        <?php
                        include_once "Backend/connection.php";
                        $sql = "SELECT * FROM `comments` WHERE `comc` = 'Coconut' ";
                        $result = mysqli_query($conn, $sql);
                        $track = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($track == 1) {
                                break;
                            }
                            $nic = $row['nic'];
                            include_once "Backend/connection.php";
                            $sql = "SELECT `img`,`fname`,`lname` FROM `customers` WHERE `nic` = '$nic' ";
                            $row1 = mysqli_fetch_assoc(mysqli_query($conn,$sql));

                            echo '<div class="d-flex align-items-start" style="margin-top:-20px; margin-left:-10px; margin-bottom:10px;" >';
                                echo '<img class="img-fluid flex-shrink-0 rounded-circle" src="data:image/png;charset=utf8;base64,'.base64_encode($row1['img'] ).'" style="width: 50px; height: 50px;">';
                                  echo '<h5 class="mb-1 ml-2" style="margin-top:10px;">'.$row1['fname'].' '.$row1['lname'].'</h5>';
                            echo '</div>';
                            echo '<div class="testimonial-item p-2" style="margin-top: -30px; margin-left:40px;">';
                            echo '<center><p>'; 
                            echo '<sup><i class="fa fa-quote-left fa text-primary"></i></sup>';
                            echo ''.$row['comb'].'';
                            echo '<sup><i class="fa fa-quote-right fa text-primary"></i></sup><br>';
                            echo '</p></center>';
                            echo '</div>';
                            echo '<form name="comentshw" action="singleproduct.php" method="POST">';
                            echo '<input type="hidden" id="productcats" name="productcats" value="Coconut">';
                            echo '<input type="hidden" id="productcat" name="productcat" value="vegetable">';
                            echo '</form>';
                            $track++;
                        }
                        ?>
                    </div>
                </div>
                <!-- Card for Green Apple -->
                <div class="card" data-name="Produce" onclick="displaycom2();">
                    <img class="card-img-top" src="https://1drv.ms/i/c/9530d5decb05b927/UQMnuQXL3tUwIICVxgQAAAAAAFa5eV3BLQ_h7Mw" alt="Green Apple" height="300px" width="300px">
                    <h5 class="card-title" style="margin-left:10px;">Green Apple</h5>
                    <div class="card-body">
                        <?php
                        include_once "Backend/connection.php";
                        $sql = "SELECT * FROM `comments` WHERE `comc` = 'Green Apple' ";
                        $result = mysqli_query($conn, $sql);
                        $track = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($track == 1) {
                                break;
                            }
                            $nic = $row['nic'];
                            include_once "Backend/connection.php";
                            $sql = "SELECT `img`,`fname`,`lname` FROM `customers` WHERE `nic` = '$nic' ";
                            $row1 = mysqli_fetch_assoc(mysqli_query($conn,$sql));

                            echo '<div class="d-flex align-items-start" style="margin-top:-20px; margin-left:-10px; margin-bottom:10px;" >';
                                echo '<img class="img-fluid flex-shrink-0 rounded-circle" src="data:image/png;charset=utf8;base64,'.base64_encode($row1['img'] ).'" style="width: 50px; height: 50px;">';
                                  echo '<h5 class="mb-1 ml-2" style="margin-top:10px;">'.$row1['fname'].' '.$row1['lname'].'</h5>';
                            echo '</div>';
                            echo '<div class="testimonial-item p-2" style="margin-top: -30px; margin-left:40px;">';
                            echo '<center><p>'; 
                            echo '<sup><i class="fa fa-quote-left fa text-primary"></i></sup>';
                            echo ''.$row['comb'].'';
                            echo '<sup><i class="fa fa-quote-right fa text-primary"></i></sup><br>';
                            echo '</p></center>';
                            echo '</div>';
                            echo '<form name="comentshw1" action="singleproduct.php" method="POST">';
                            echo '<input type="hidden" id="productcats" name="productcats" value="Green Apple">';
                            echo '<input type="hidden" id="productcat" name="productcat" value="fruit">';
                            echo '</form>';
                            $track++;
                        }
                        ?>
                    </div>
                </div>
                <!-- Card for Chicken -->
                <div class="card" data-name="Produce" onclick="displaycom3();">
                    <img class="card-img-top" src="https://1drv.ms/i/c/9530d5decb05b927/UQMnuQXL3tUwIICVsgQAAAAAAEFWQPW5GsAym74" alt="Chicken" height="300px" width="300px">
                    <h5 class="card-title" style="margin-left:10px;">Chicken</h5>
                    <div class="card-body">
                        <?php
                        include_once "Backend/connection.php";
                        $sql = "SELECT * FROM `comments` WHERE `comc` = 'Chicken' ";
                        $result = mysqli_query($conn, $sql);
                        $track = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($track == 1) {
                                break;
                            }
                            $nic = $row['nic'];
                            include_once "Backend/connection.php";
                            $sql = "SELECT `img`,`fname`,`lname` FROM `customers` WHERE `nic` = '$nic' ";
                            $row1 = mysqli_fetch_assoc(mysqli_query($conn,$sql));

                            echo '<div class="d-flex align-items-start" style="margin-top:-20px; margin-left:-10px; margin-bottom:10px;" >';
                                echo '<img class="img-fluid flex-shrink-0 rounded-circle" src="data:image/png;charset=utf8;base64,'.base64_encode($row1['img'] ).'" style="width: 50px; height: 50px;">';
                                  echo '<h5 class="mb-1 ml-2" style="margin-top:10px;">'.$row1['fname'].' '.$row1['lname'].'</h5>';
                            echo '</div>';
                            echo '<div class="testimonial-item p-2" style="margin-top: -30px; margin-left:40px;">';
                            echo '<center><p>'; 
                            echo '<sup><i class="fa fa-quote-left fa text-primary"></i></sup>';
                            echo ''.$row['comb'].'';
                            echo '<sup><i class="fa fa-quote-right fa text-primary"></i></sup><br>';
                            echo '</p></center>';
                            echo '</div>';
                            echo '<form name="comentshw2" action="singleproduct.php" method="POST">';
                            echo '<input type="hidden" id="productcats" name="productcats" value="Chicken">';
                            echo '<input type="hidden" id="productcat" name="productcat" value="meat">';
                            echo '</form>';
                            $track++;
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Fifth Section End -->
<script>
  function alerts(){
    alert("Please log in first");
  }
</script>  
    <!-- Sixth Section Start -->
  
  
      <?php 
        if(isset($_SESSION['nic'])){
          $todayd = date("d/m/Y");

          $zone = date_default_timezone_set("Asia/Colombo"); 
          $todayt = date("H:i:s");
          

          echo '<div class="text-center" style="margin-top:30px;">';
            echo '<h2>Reviews</h2>';
          echo '</div>';


           

          echo '<div class="container">';
          echo '<div class="row">';
          
          include_once "Backend/connection.php";
          $sql = "SELECT * FROM `comments`";
          $result = mysqli_query($conn, $sql);
          $track = 0;
          while ($row = mysqli_fetch_assoc($result)) {
              if ($track == 4) {
                  break;
              }
              $nic = $row['nic'];
              include_once "Backend/connection.php";
              $sql = "SELECT `img`,`fname`,`lname` FROM `customers` WHERE `nic` = '$nic' ";
              $row1 = mysqli_fetch_assoc(mysqli_query($conn,$sql));
           
              echo '<div class="col-md-3" style="margin-top:25px;">';
              echo '<div class="testimonial-item bg-transparent border rounded p-4">';
              echo '<center><div style="margin-top:-65px;">';
              echo '<img class="img-fluid flex-shrink-0 rounded-circle" src="data:image/png;charset=utf8;base64,'.base64_encode($row1['img'] ).'" style="width: 80px; height: 80px;">';
              echo '</div></center>';
              echo '<center><h5 class="mb-1" style="padding-bottom:11px; padding-top:20px;">'.$row1['fname'].' '.$row1['lname'].'</h5></center>';
              echo '<center><p><sup><i class="fa fa-quote-left fa text-primary"></i></sup>' . $row['comb'] . '<sup><i class="fa fa-quote-right fa text-primary mb-3"></i></sup></p></center>';
              echo '</div>';
              echo '</div>';
              
              $track++;
          }
          
          echo '</div>'; 
          echo '</div>';
        
         echo '<div style="margin-top:15px; margin-bottom:15px;">';
          echo '<center><a href="comlist.php">Read more</a></center>';
         echo '</div>';

         echo '<center><div class="dropdown show">';
         echo '<a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add Comment</a>';
         echo '<div class="dropdown-menu" aria-labelledby="dropdownMenuLink"  style="margin-top:10px;">';
         echo '<form name="com" action="Backend/comment.php" method="POST">';
         echo '<input type="hidden" name="nic" id="nic" value="'.$_SESSION['nic'].'">';
         echo '<input type="hidden" name="comc" id="comc" value="all">';
         echo '<input type="hidden" name="td" id="td" value="'.$todayd.'">';
         echo '<input type="hidden" name="tt" id="tt" value="'.$todayt.'">';
         echo '<div class="form-group" style="margin:10px;">';
         echo '<label for="pdesc">Comment<span id="req">*</span></label>';
         echo '<textarea name="comb" id="comb" class="form-control" required></textarea>';
         echo '</div>';
         echo '<center><button type="submit" name="sub" id="sub" class="btn btn-outline-success">Save</button></center>';
         echo '</form>'; 
         echo '</div>';
         echo '</div></center>';
         
                
                        }else{
                          echo '<div class="text-center" style="margin-top:30px;">';
                          echo '<h2>Reviews</h2>';
                        echo '</div>';
              
                        
                        echo '<div class="container">';
                        echo '<div class="row">';
                        
                        include_once "Backend/connection.php";
                        $sql = "SELECT * FROM `comments`";
                        $result = mysqli_query($conn, $sql);
                        $track = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($track == 4) {
                                break;
                            }
                            $nic = $row['nic'];
                            include_once "Backend/connection.php";
                            $sql = "SELECT `img`,`fname`,`lname` FROM `customers` WHERE `nic` = '$nic' ";
                            $row1 = mysqli_fetch_assoc(mysqli_query($conn,$sql));

                            echo '<div class="col-md-3" style="margin-top:25px;">';
                            echo '<div class="testimonial-item bg-transparent border rounded p-4">';
                            echo '<center><div style="margin-top:-65px;">';
                            echo '<img class="img-fluid flex-shrink-0 rounded-circle" src="data:image/png;charset=utf8;base64,'.base64_encode($row1['img'] ).'" style="width: 80px; height: 80px;">';
                            echo '</div></center>';
                            echo '<center><h5 class="mb-1" style="padding-bottom:11px; padding-top:20px;">'.$row1['fname'].' '.$row1['lname'].'</h5></center>';
                            echo '<center><p><sup><i class="fa fa-quote-left fa text-primary"></i></sup>' . $row['comb'] . '<sup><i class="fa fa-quote-right fa text-primary mb-3"></i></sup></p></center>';
                            echo '</div>';
                            echo '</div>';
                            
                            $track++;
                        }
                        
                        echo '</div>'; 
                        echo '</div>';
                      
                       echo '<div style="margin-top:15px; margin-bottom:15px;">';
                        echo '<center><a href="comlist.php">Read more</a></center>';
                       echo '</div>';
              
              
                            echo '<center><div class="dropdown show">';
                                echo '<a class="btn btn-primary dropdown-toggle" onclick="alerts();">Add Comment</a></center>';
                                echo '</div>';
        } 
                    ?>

 
       </div>
      </div>
    </div>
   </div>
    <!-- Sixth Section End -->

    <!-- Nineth Section Start company brands -->
    <div class="container">
      <div class="row">
        <div class="col">
          <center><h2>Trusted Brands</h2></center>
        </div>
      </div>
    </div>

    <div class="container">
    <div class="row text-center">
        <div class="col-12 col-sm-6 col-md-3 my-2 d-flex justify-content-center">
            <img src="img/welcome/anchor.png" class="rounded custom-margin" alt="..." style=" width: 320px; height: 200px; margin-top:-10px;">
        </div>
        <div class="col-12 col-sm-6 col-md-3 my-2 d-flex justify-content-center">
            <img src="img/welcome/coca.png" class="rounded custom-margin" alt="..." style=" width: 250px; height: 200px;">
        </div>
        <div class="col-12 col-sm-6 col-md-3 my-2 d-flex justify-content-center align-items-start">
            <img src="img/welcome/edin.png" class="rounded custom-margin" alt="..." style=" width: 300px; height: 270px; margin-top:-27px;">
        </div>
        <div class="col-12 col-sm-6 col-md-3 my-2 d-flex justify-content-center align-items-start">
            <img src="img/welcome/red.png" class="rounded custom-margin" alt="..." style=" width: 220px; height: 200px;">
        </div>
    </div>
</div>

     <!-- Nineth Section End company brands -->

            
        </div>
      </div>
     </div>

<?php include ("footer.php"); ?>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

     
</body>
</html>
