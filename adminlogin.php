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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
    
    <title>Life Mart Online</title>
    <style>
       
    </style>
</head>
<body>
<?php include ("heder.php"); ?>
<?php include_once "Backend/connection.php"; ?>


<div class="container-fluid">
   <div class="row">
       <div class="col-md-8">
           <form name="reg" action="Backend/adminlog.php" method="POST">
              <div class="col-6">
                  <label for="email">Email<span id="req">*</span></label>
                  <input type="text" name="email" id="email" autocomplete="email">
              </div>
              <div class="col-6">
                  <label for="pass">Password<span id="req">*</span></label>
                  <input type="password" name="pass" id="pass">
              </div>
              <div class="col-6">
                  <input type="submit" name="sub" id="sub" value="Submit">
              </div>
            </form>
        </div>
    </div>
</div>

<?php include ("footer.php"); ?>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
