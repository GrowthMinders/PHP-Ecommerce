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


<script>
    function observe(){
        var pass = document.getElementById("pass").value;
        var tel = document.getElementById("phno").value;
        if(pass === "" && tel === ""){
            alert("No data was entered");
        } else {
            document.forms['reg'].submit();
        }
    }
</script>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <form name="reg" action="Backend/adminup.php" method="POST">
                <div class="col-6">
                    <h1>Update your details</h1>
                </div>
                <div class="col-6">
                    <label for="pass">Password<span id="req">*</span></label>
                    <input type="password" name="pass" id="pass">
                </div>
                <div class="col-6">
                        <label for="phno">Telephone Number<span id="req">*</span></label>
                        <input type="text" name="phno" id="phno" autocomplete="tel">
                </div>
                <div class="col-6">
                        <input type="text" name="nic" id="nic" value="<?php echo($_SESSION['nic']); ?>" hidden>
                </div>
                <div class="col-6">
                    <input type="button" name="sub" id="sub" onclick="observe();" value="Submit">
                </div>
            </form>
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