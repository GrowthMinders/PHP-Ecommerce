
<script>
  function tell(){
     alert("You need to be logged in");
  }
</script>

<script>
  function tell1(){
     alert("Admins are not allowed to put inquiries");
  }
</script>

<?php session_start();?>
<div class="d-flex bg-dark text-light">
  <div class="col-12"> 
    <header class="p-1 mb-1" style="margin-top:-50px !important">
      <div class="container">
         <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
         
               <nav class="navbar navbar">
                    <a class="navbar-brand" href="welcome.php">
                         <img src="img/welcome/Heder/Logo.png" width="70" height="50" style="margin-top:-10px;">  <font color="green"><b>Life</b></font> <font color="orange"><b>Mart</b></font>
                    </a>
               </nav>
             

          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="welcome.php" class="nav-link px-2 link-body-emphasis" style="color:white !important;">Home</a></li>
              <li><a href="about.php" class="nav-link px-2 link-body-emphasis" style="color:white !important;">About</a></li>
              <li><a href="product.php" class="nav-link px-2 link-body-emphasis" style="color:white !important;">Products</a></li>
              <?php 
                if(isset($_SESSION['fname'])){
                  echo '<li><a href="contact.php" class="nav-link px-2 link-body-emphasis" style="color:white !important;">Contact</a></li>';
                }else if(isset($_SESSION['frname'])){
                  echo '<li><a class="nav-link px-2 link-body-emphasis" style="color:white !important;" onclick="tell1();">Contact</a></li>';
                }else if(isset($_SESSION['frname1'])){
                  echo '<li><a class="nav-link px-2 link-body-emphasis" style="color:white !important;" onclick="tell1();">Contact</a></li>';
                }else{
                  echo '<li><a class="nav-link px-2 link-body-emphasis" style="color:white !important;"  onclick="tell();">Contact</a></li>';
                }
              ?>
          </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
               <input type="search" class="form-control" placeholder="Search..." aria-label="Search" id="search">
            </form>

             <div class="dropdown text-end">
                 <?php if(isset($_SESSION['fname']) && ($_SESSION['img'] == !null)){

                              include_once "Backend/connection.php";
                              $nic = $_SESSION['nic'];
                              $sql = "SELECT `img` FROM `customers` WHERE `nic` = '$nic' ";
                              $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));

                               echo('<a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                               <img src="data:image/png;charset=utf8;base64,'.base64_encode($row['img'] ).'" alt="mdo" width="50" height="50" class="rounded-circle">
                               </a>');
                  
                        }else if(isset($_SESSION['frname']) && ($_SESSION['img'] == !null)){

                          include_once "Backend/connection.php";
                          $email = $_SESSION['email'];
                          $sql = "SELECT `img` FROM `admin` WHERE `email` = '$email' ";
                          $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));

                           echo('<a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                           <img src="data:image/png;charset=utf8;base64,'.base64_encode($row['img'] ).'" alt="mdo" width="50" height="50" class="rounded-circle">
                           </a>');

                        }else if(isset($_SESSION['frname1']) && ($_SESSION['img'] == !null)){

                          include_once "Backend/connection.php";
                          $email = $_SESSION['email'];
                          $sql = "SELECT `img` FROM `admin` WHERE `email` = '$email' ";
                          $row = mysqli_fetch_assoc(mysqli_query($conn,$sql));

                           echo('<a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                           <img src="data:image/png;charset=utf8;base64,'.base64_encode($row['img'] ).'" alt="profile" width="50" height="50" class="rounded-circle">
                           </a>'); 

                        }else if(isset($_SESSION['fname']) && ($_SESSION['img'] == null)){
                          echo('<a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" >
                               <img src="img/welcome/Heder/blank.png" alt="profile" width="50" height="50" class="rounded-circle">
                              </a>');
                 
                        }else{
                          echo('<a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                               <img src="img/welcome/Heder/blank.png" alt="profile" width="50" height="50" class="rounded-circle">
                              </a>');
                        } 
                  ?>
                 <ul class="dropdown-menu">
                 <?php if(isset($_SESSION['fname'])){
                           echo('<li><a class="dropdown-item" href="profile.php">Profile</a></li>');
                           echo('<li><a class="dropdown-item" href="hist.php">History</a></li>');
                       }                    
                 ?>    
                    
                 <?php if((!isset($_SESSION['fname'])) && (!isset($_SESSION['frname'])) && (!isset($_SESSION['frname1']))){
                          echo('<li><a class="dropdown-item" href="Signup.php">Sign-up</a></li>');
                          echo('<li><a class="dropdown-item" href="Login.php">Log-In</a></li>');
                       }else{

                       }
                 ?>

                 <?php if(isset($_SESSION['fname'])){
                          echo('<li><hr class="dropdown-divider"></li>');
                          echo('<li><a class="dropdown-item" href="sign-out.php">Sign out</a></li>');
                       }
                 ?>
                 <?php if(isset($_SESSION['frname'])){
                          echo('<li><a class="dropdown-item" href="adminprofile.php">Dashboard</a></li>');
                          echo('<li><a class="dropdown-item" href="options.php">Settings</a></li>');
                          echo('<li><hr class="dropdown-divider"></li>');
                          echo('<li><a class="dropdown-item" href="sign-out.php">Sign out</a></li>');
                       }
                 ?>
                 <?php if(isset($_SESSION['frname1'])){
                          echo('<li><a class="dropdown-item" href="adminprofile.php">Dashboard</a></li>');
                          echo('<li><a class="dropdown-item" href="adminsign-up.php">Manage Administrators</a></li>');
                          echo('<li><a class="dropdown-item" href="options.php">Manage Products</a></li>');
                          echo('<li><hr class="dropdown-divider"></li>');
                          echo('<li><a class="dropdown-item" href="sign-out.php">Sign out</a></li>');
                       }
                 ?>
                          
                 </ul>
             </div>

          <script>
            function pop1(){
                alert("You need to be logged in to view the cart.");
            }
          </script>

            <div class="position-relative" style="margin-right:-50px; margin-left:100px">
            <?php 
             if((isset($_SESSION['fname'])) ||(isset($_SESSION['frname1'])) || (isset($_SESSION['frname']))){
                 echo  '<a href="cart.php">';
             }else{
                 echo  '<a onclick="pop1();">';
             }
             ?>
            
              <i class="fas fa-shopping-cart text-success"></i>
              </a>
              <?php
              if(isset($_SESSION['count'])){
                  echo '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">'.$_SESSION['count'].'</span>';
              }else{
                 echo '<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">0</span>';
              }
              ?>
              
            </div>
         </div>
      </div>
      <div class="d-flex align-items-center ms-3">
            
          </div>
    </header>
  </div>
</div> 

                
            
        
    
    