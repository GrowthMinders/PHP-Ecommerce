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

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Create</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Update</button>
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
                <h1>Create a new product</h1>
                    <div class="col-md-8">
                        <form name="reg" action="Backend/insertpro.php" method="POST">
                            <div class="col-6">
                                <label for="pname">Product Name<span id="req">*</span></label>
                                <input type="text" name="pname" id="pname">
                            </div>
                            <div class="col-6">
                                <label for="pdesc">Product Description<span id="req">*</span></label>
                                <textarea name="pdesc" id="pdesc"></textarea>
                            </div>
                            <div class="col-6">
                                <label for="pprice">Product Price<span id="req">*</span></label>
                                <input type="text" name="pprice" id="pprice">
                            </div>
                            <div class="col-6">
                                <label for="pavail">Availibility<span id="req">*</span></label>
                                <select name="pavail" id="pavail">
                                    <option selected hidden>State</option>
                                    <option value="in">In-Stock</option>
                                    <option value="out">Out of Stock</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="ppic">Product Picture</label>
                                <input type="text" name="ppic" id="ppic">
                            </div>
                            <div class="col-6">
                                <label for="pcateg">Product Category<span id="req">*</span></label>
                                <select name="pcateg" id="pcateg">
                                    <option selected hidden>Category</option>
                                    <option value="vegetable">Vegetables</option>
                                    <option value="fruit">Fruits</option>
                                    <option value="bakery">Bakery Products</option>
                                    <option value="meat">Meat</option>
                                    <option value="sea">Sea Food</option>
                                    <option value="chill">Chilled</option>
                                    <option value="beverage">Beverages</option>
                                    <option value="pharmacy">Pharmacy</option>
                                    <option value="househ">House Hold</option>
                                    <option value="housew">House Ware</option>
                                    <option value="dairy">Dairy</option>
                                    <option value="grocerie">Groceries</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <input type="submit" name="sub" id="sub" value="Create">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

            <div class="container-fluid">
                <div class="row">
                <h1>Update an exsisting product</h1>
                    <div class="col-md-8">
                        <form name="reg1" action="Backend/updatepro.php" method="POST">
                            <div class="col-6">
                                <label for="pdesc">Product Description<span id="req">*</span></label>
                                <input type="text" name="pdesc" id="pdesc">
                            </div>
                            <div class="col-6">
                                <label for="pprice">Product Price<span id="req">*</span></label>
                                <input type="text" name="pprice" id="pprice">
                            </div>
                            <div class="col-6">
                                <label for="pavail">Availibility<span id="req">*</span></label>
                                <select name="pavail" id="pavail">
                                    <option selected hidden></option>
                                    <option value="in">In-Stock</option>
                                    <option value="out">Out of Stock</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="pname">Product Name<span id="req">*</span></label>
                                <input type="text" name="pname" id="pname" required>
                            </div>
                            <div class="col-6">
                                <label for="pcateg">Product Category<span id="req">*</span></label>
                                <select name="pcateg" id="pcateg" required>
                                    <option selected hidden>Category</option>
                                    <option value="vegetable">Vegetables</option>
                                    <option value="fruit">Fruits</option>
                                    <option value="bakery">Bakery Products</option>
                                    <option value="meat">Meat</option>
                                    <option value="sea">Sea Food</option>
                                    <option value="chill">Chilled</option>
                                    <option value="beverage">Beverages</option>
                                    <option value="pharmacy">Pharmacy</option>
                                    <option value="househ">House Hold</option>
                                    <option value="housew">House Ware</option>
                                    <option value="dairy">Dairy</option>
                                    <option value="grocerie">Groceries</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <input type="submit" name="sub" id="sub" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">

            <div class="container-fluid" style="margin-bottom:10% !important">
                <div class="row">
                <h1>Delete an exsisting product</h1>
                    <div class="col-md-8">
                        <form name="reg2" action="Backend/deletepro.php" method="POST">
                        <div class="col-6">
                            <label for="pname">Product Name<span id="req">*</span></label>
                            <input type="text" name="pname" id="pname">
                        </div>
                        <div class="col-6">
                            <label for="pcateg">Product Category<span id="req">*</span></label>
                            <select name="pcateg" id="pcateg">
                                <option selected hidden>Category</option>
                                <option value="vegetable">Vegetables</option>
                                <option value="fruit">Fruits</option>
                                <option value="bakery">Bakery Products</option>
                                <option value="meat">Meat</option>
                                <option value="sea">Sea Food</option>
                                <option value="chill">Chilled</option>
                                <option value="beverage">Beverages</option>
                                <option value="pharmacy">Pharmacy</option>
                                <option value="househ">House Hold</option>
                                <option value="housew">House Ware</option>
                                <option value="dairy">Dairy</option>
                                <option value="grocerie">Groceries</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <input type="submit" name="sub" id="sub" value="Delete">
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