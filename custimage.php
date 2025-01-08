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
    <?php include_once "Backend/connection.php"; ?>

    <script>
        function image(){
           document.getElementById("location").value = "customers";
           document.forms['reg'].submit();
           document.getElementById("location").value = "";
        }
    </script>    

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <form name="reg" action="Backend/imageupdate.php" method="POST" enctype="multipart/form-data">
                    <div class="col-6">
                        <label for="pic">Profile Picture</label>
                        <input type="file" name="pic" id="pic" required>
                    </div>
                        <input type="text" id="nic" class="form-control" name="nic" value="<?php echo $_SESSION['nic'] ?>" hidden>
                        <input type="text" id="location" class="form-control" name="location" value="" hidden>
                    <div class="col-6">
                        <button type="button" onclick="image();">Update Image</button>
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