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

    <?php include ("heder.php");?>
    <?php include_once "Backend/connection.php"; ?>

    
<center><div style="margin-top:5%;margin-bottom:5%;">
<form action="https://api.web3forms.com/submit" method="POST">

<input type="hidden" name="access_key" value="d72080d5-f41d-4ca2-a5c1-7d9b701896a3">

<h1>Contact Us</h1>

<label>Name</label><br>
<?php
if(isset($_SESSION['fname'])){
    echo '<input type="text" name="name" value="'.$_SESSION['fname'].' '.$_SESSION['lname'].'"><br>';
}else if(isset($_SESSION['frname'])){
    echo '<input type="text" name="name" value="'.$_SESSION['frname'].' '.$_SESSION['lname'].'"><br>';
}else if(isset($_SESSION['frname1'])){
    echo '<input type="text" name="name" value="'.$_SESSION['frname1'].' '.$_SESSION['lname'].'"><br>';
}
?>
<label>Sender Email</label><br>
<input type="email" name="email" value="<?php echo $_SESSION['email'] ?>"><br>
<label>Your Inquiry</label><br>
<textarea name="message" required></textarea><br>
<button type="submit">Send Mail</button>

</form>
</div></center>


<?php include ("footer.php");?>


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="js/main.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


</body>
</html>