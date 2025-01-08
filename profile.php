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
<?php include ("heder.php"); ?>
<?php 
$today = date("Y");
$age = $today - $_SESSION['year'];
?>

<div class="container">
   <div class="row">
      <div class="col" style="margin-top: 20px;">
        <?php
        include_once "Backend/connection.php";
        $nic = $_SESSION['nic'];
        $sql = "SELECT `img` FROM `customers` WHERE `nic` = '$nic' ";
        $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
        echo '<a href="custimage.php"><img src="data:image/png;charset=utf8;base64,'.base64_encode($row['img'] ).'" class="rounded mx-auto d-block" alt="profile"></a>';
        ?>
      </div>
      <div class="col-sm" style="margin-top: 20px;">
      <table class="table" >
  
  <tbody>
    <tr>
      <th scope="row">Name:</th>
      <td><?php echo($_SESSION['fname']." ".$_SESSION['lname']); ?></td>

    </tr>
    <tr>
      <th scope="row">Email:</th>
      <td><?php echo($_SESSION['email']); ?></td>
    </tr>
    <tr>
      <th scope="row">Age:</th>
      <td><?php echo($age); ?></td>
    </tr>
    <tr>
      <th scope="row">Contact number:</th>
      <td><?php echo($_SESSION['tel']);?></td>
    </tr>
    <tr>
      <th scope="row">NIC:</th>
      <td><?php echo($_SESSION['nic']); ?></td>
    </tr>
    <tr>
      <th scope="row">Street Number:</th>
      <td><?php echo($_SESSION['house']); ?></td>
    </tr>
    <tr>
      <th scope="row">Town:</th>
      <td><?php echo($_SESSION['town']); ?></td>
    </tr>
    <tr>
      <th scope="row">City:</th>
      <td><?php echo($_SESSION['city']); ?></td>
    </tr>
    <tr>
      <th scope="row">District:</th>
      <td><?php echo($_SESSION['district']); ?></td>
    </tr>
    <tr>
      <th scope="row">Province:</th>
      <td><?php echo($_SESSION['province']); ?></td>
    </tr>
      <th scope="row">Password:</th>
      <td><?php echo($_SESSION['pass']); ?></td>
    </tr>
    <tr>
      <th scope="row">Last accessed time:</th>
      <td><?php echo($_SESSION['laccessd']); ?></td></td>
    </tr>
    <tr>
    <th scope="row">Last accessed date:</th>
      <td><?php echo($_SESSION['laccesst']); ?></td>
    </tr>
    <form method="POST" action="Backend/deletecust.php">
    <tr>
      <td></td>
    <td><input type = "text" id="del" name="del" value="<?php echo($_SESSION['email']); ?>" hidden></td>
    </tr>
    <th scope="row" width="150px"><a href="updatecust.php" class="btn btn-success">Update Account</a></th> 
    <th scope="row" width="150px"><input type="submit" class="btn btn-danger" value="Delete Account"></th>
    </tr>
    </form>
   
  </tbody>
</table>
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

     
</body>
</html>