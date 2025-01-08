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
    <script src="js/validation.js"></script>

    <title>Life Mart Online</title>
</head>

<body>

    <?php include ("heder.php"); ?>
    <?php include_once "Backend/connection.php"; ?>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Create</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane"
                type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Delete</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
            tabindex="0">

            <div class="container-fluid">
                <div class="row">
                <h1>Create an Administrator</h1>
                    <div class="col-md-8">
                    <form name="reg1" action="Backend/admininsert.php" method="POST" enctype="multipart/form-data">
                    <div class="col-6">
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
                    <div class="col-6">
                        <label for="nic">NIC<span id="req">*</span></label>
                        <input type="text" name="nic" id="nic">
                    </div>
                    <div class="col-6">
                        <label for="gen">Gender<span id="req">*</span></label>
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
                        <label for="pass">Password<span id="req">*</span></label>
                        <input type="password" name="pass" id="pass">
                    </div>
                    <div class="col-6">
                        <label for="cpass">Confirm Password<span id="req">*</span></label>
                        <input type="password" name="cpass" id="cpass">
                    </div>
                    <div class="col-6">
                        <label for="pic">Profile Picture<span id="req">*</span></label>
                        <input type="file" name="pic" id="pic">
                    </div>
                    <div class="col-6">
                        <input type="submit" name="subc" id="subc" value="Submit">
                    </div>
                </form>
                    </div>
                </div>
            </div>

        </div>

        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
           
            <div class="container-fluid" style="margin-bottom:10% !important">
                <div class="row">
                <h1>Delete an Administrator</h1>
                    <div class="col-md-8">
                        <form name="reg" action="Backend/admindelete.php" method="POST">
                        <div class="col-6">
                        <label for="email1">Email<span id="req">*</span></label>
                        <input type="text" name="email1" id="email1" autocomplete="email">
                    </div>
                        <div class="col-6">
                            <input type="submit" name="subd" id="subd" value="Delete">
                        </div>
                        </form>
                    </div>
                </div>
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