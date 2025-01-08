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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js"></script>
    <script src="js/validations.js"></script>

    <title>Life Mart Online</title>
</head>

<body>
    <?php include ("heder.php"); ?>
    <?php include_once "Backend/connection.php"; ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <form name="reg" action="Backend/insert.php" method="POST" enctype="multipart/form-data">
                    <div class="col-6">
                        <?php
                        if(isset(($_SESSION['error']))){
                            echo('<span>'.($_SESSION['error']).'</span>');
                        }
                        ?>
                        <label for="fname">First Name<span id="req">*</span></label>
                        <input type="text" name="fname" id="fname">
                    </div>
                    <div class="col-6">
                        <label for="lname">Last Name<span id="req">*</span></label>
                        <input type="text" name="lname" id="lname">
                    </div>
                    <div class="col-6">
                        <label for="email">Email<span id="req">*</span></label>
                        <input type="text" name="email" id="email" autocomplete="email">
                    </div>
                    <div class="col-6" id="dategrp">
                        <label for="date">DOB<span id="req">*</span></label>
                        <div>
                            <input type="text" name="date" id="date" placeholder="DD"
                                style="width:50px; display:inline-block;">
                            <input type="text" name="month" id="month" placeholder="MM"
                                style="width:50px; display:inline-block;">
                            <input type="text" name="year" id="year" placeholder="YYYY"
                                style="width:108px; display:inline-block;">
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="nic">NIC<span id="req">*</span></label>
                        <input type="text" name="nic" id="nic">
                    </div>
                    <div class="col-6">
                        <label for="gen">Gender</label>
                        <select name="gen" id="gen">
                            <option selected hidden>Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="phno">Telephone Number<span id="req">*</span></label>
                        <input type="text" name="phno" id="phno" autocomplete="tel">
                    </div>
                    <div class="col-6">
                        <label for="house">House Number<span id="req">*</span></label>
                        <input type="text" name="house" id="house">
                    </div>
                    <div class="col-6">
                        <label for="dist">District<span id="req">*</span></label>
                        <select name="dist" id="dist">
                            <option selected hidden>District</option>
                            <option value="Ampara">Ampara</option>
                            <option value="Anuradhapura">Anuradhapura</option>
                            <option value="Badulla">Badulla</option>
                            <option value="Batticaloa">Batticaloa</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Galle">Galle</option>
                            <option value="Gampaha">Gampaha</option>
                            <option value="Hambantota">Hambantota</option>
                            <option value="Jaffna">Jaffna</option>
                            <option value="Kalutara">Kalutara</option>
                            <option value="Kandy">Kandy</option>
                            <option value="Kegalle">Kegalle</option>
                            <option value="Kilinochchi">Kilinochchi</option>
                            <option value="Kurunegala">Kurunegala</option>
                            <option value="Mannar">Mannar</option>
                            <option value="Matale">Matale</option>
                            <option value="Matara">Matara</option>
                            <option value="Monaragala">Monaragala</option>
                            <option value="Mullativu">Mullativu</option>
                            <option value="Nuwara Eliya">Nuwara Eliya</option>
                            <option value="Polonnaruwa">Polonnaruwa</option>
                            <option value="Puttalam">Puttalam</option>
                            <option value="Ratnapura">Ratnapura</option>
                            <option value="Trincomalee">Trincomalee</option>
                            <option value="Vavuniya">Vavuniya</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="pro">Province<span id="req">*</span></label>
                        <select name="pro" id="pro">
                            <option selected hidden>Province</option>
                            <option value="Central Province">Central</option>
                            <option value="Eastern Province">Eastern</option>
                            <option value="North Central Province">North Central</option>
                            <option value="Nothern Province">Nothern</option>
                            <option value="North Western Province">North Western</option>
                            <option value="Sabaragamuwa Province">Sabaragamuwa</option>
                            <option value="Sothern Province">Sothern</option>
                            <option value="Uva Province">Uva</option>
                            <option value="Western Province">Western</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="town">Town<span id="req">*</span></label>
                        <select name="town" id="town">
                            <option selected hidden>Town</option>
                            <option value="Ambalangoda">Ambalangoda</option>
                            <option value="Ampara">Ampara</option>
                            <option value="Avissawella">Avissawella</option>
                            <option value="Badulla">Badulla</option>
                            <option value="Balangoda">Balangoda</option>
                            <option value="Bandarawela">Bandarawela</option>
                            <option value="Beruwala">Beruwala</option>
                            <option value="Chavakachcheri">Chavakachcheri</option>
                            <option value="Chilaw">Chilaw</option>
                            <option value="Dambulla">Dambulla</option>
                            <option value="Eravur">Eravur</option>
                            <option value="Gampaha">Gampaha</option>
                            <option value="Gampola">Gampola</option>
                            <option value="Hambantota">Hambantota</option>
                            <option value="Haputale">Haputale</option>
                            <option value="Hatton">Hatton</option>
                            <option value="Horana">Horana</option>
                            <option value="Ja-Ela">Ja-Ela</option>
                            <option value="Kalutara">Kalutara</option>
                            <option value="Kattankudy">Kattankudy</option>
                            <option value="Kegalle">Kegalle</option>
                            <option value="Kelaniya">Kelaniya</option>
                            <option value="Kuliyapitiya">Kuliyapitiya</option>
                            <option value="Kurunegala">Kurunegala</option>
                            <option value="Mannar">Mannar</option>
                            <option value="Matale">Matale</optio>
                            <option value="Matara">Matara</option>
                            <option value="Minuwangoda">Minuwangoda</option>
                            <option value="Monaragala">Monaragala</optio>
                            <option value="Nawalapitiya">Nawalapitiya</option>
                            <option value="Nuwara Eliya">Nuwara Eliya</option>
                            <option value="Panadura">Panadura</option>
                            <option value="Peliyagoda">Peliyagoda</option>
                            <option value="Point Pedro">Point Pedro</option>
                            <option value="Puttalam">Puttalam</option>
                            <option value="Tangalle">Tangalle</option>
                            <option value="Vaddukoddai">Vaddukoddai</option>
                            <option value="Valvettithurai">Valvettithurai</option>
                            <option value="Wattala">Wattala</option>
                            <option value="Wattegama">Wattegama</option>
                            <option value="Weligama">Weligama</option>

                        </select>
                    </div>
                    <div class="col-6">
                        <label for="city">City<span id="req">*</span></label>
                        <select name="city" id="city">
                            <option selected hidden>City</option>
                            <option value="Anuradhapura">Anuradhapura</option>
                            <option value="Batticaloa">Batticaloa</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Dambulla">Dambulla</option>
                            <option value="Dehiwala-Mount Lavinia">Dehiwala-Mount Lavinia</option>
                            <option value="Galle">Galle</option>
                            <option value="Jaffna">Jaffna</option>
                            <option value="Kalmunai">Kalmunai</option>
                            <option value="Kandy">Kandy</option>
                            <option value="Katunayake">Katunayake</option>
                            <option value="Kolonnawa">Kolonnawa</option>
                            <option value="Moratuwa">Moratuwa</option>
                            <option value="Negombo">Negombo</option>
                            <option value="Ratnapura">Ratnapura</option>
                            <option value="Sri Jayawardenepura Kotte">Sri Jayawardenepura Kotte</option>
                            <option value="Trincomalee">Trincomalee</option>
                            <option value="Vavuniya">Vavuniya</option>

                        </select>
                    </div>
                    <div class="col-6">
                        <label for="pass">Password<span id="req">*</span></label>
                        <input type="password" name="pass" id="pass">
                        <label for="spass">Show Password: <input type="checkbox" name="spass" id="spass"
                                onclick="showpass();"></label>
                    </div>
                    <div class="col-6">
                        <label for="cpass">Confirm Password<span id="req">*</span></label>
                        <input type="password" name="cpass" id="cpass">
                    </div>
                    <div class="col-6">
                        <label for="pic">Profile Picture</label>
                        <input type="file" name="pic" id="pic">
                    </div>
                    <div class="col-6">
                        <label for="sub">Controls</label><br>
                        <input type="submit" name="sub" id="sub" value="Submit">
                        <input type="reset" name="res" id="res" value="Clear">
                    </div>
                </form>
            </div>
            <div class="col-md-4 sidebar">
                <h3>Previous Customer?</h3>
                <ul>
                    <li>Order Online Items</li>
                    <li>Track Orders</li>
                    <li>Access your order history</li>
                    <li>Track new orders</li>
                    <li>Save items to your Wishlist</li>
                </ul>
                <button onclick="window.location.href='login.php'">Login Now</button>
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