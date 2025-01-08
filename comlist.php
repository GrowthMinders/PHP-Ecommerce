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
    <?php include ("heder.php"); ?>
<?php
  include_once "Backend/connection.php";

  $sql = "SELECT * FROM `comments` WHERE `comc` = 'all' ";
  $result = mysqli_query($conn,$sql);

  while($row = mysqli_fetch_assoc($result)){
    $nic = $row['nic'];
    include_once "Backend/connection.php";
    $sql = "SELECT `img`,`fname`,`lname` FROM `customers` WHERE `nic` = '$nic' ";
    $row1 = mysqli_fetch_assoc(mysqli_query($conn,$sql));
    
    echo '<div class="card-body" style="margin-left:-500px;">';
    echo '<div class="container mt-4">';
    echo '<div class="row">';
    echo '<div class="col-12" style="margin-top:30px;">';
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

<?php include ("footer.php"); ?>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>