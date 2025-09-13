<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OM SAI TYRES & AUTO SERVICES</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--Shoping cart-->
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="images/ty3.jpg">
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
       <style> .animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size:30px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
</style>
</head>
<body>
<!--header -->
 <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
<?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <ul class="nav navbar-nav ml-auto">
                       <li class="nav-item"><a href="logout_script.php" class="nav-link"><i class="fa fa-sign-out"></i>Logout</a></li>
                       <li class="nav-item"><a  class="nav-link " data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="<?php echo $_SESSION['email'] ?>"><i class="fa fa-user-circle "></i></a></li>
                    </ul>
                    <?php
                } else {
                    ?>
                   
                    <?php 
                }
                    ?>
<!--header ends -->
<div class="container" style="margin-top:65px">
         <!--jumbutron start-->
        <div class="jumbotron text-center">
           <h1 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3"><a class="animate-charcter" href="index.php" style="font-family:serif; ">WELCOME TO OM SAI TYRES! </a></h1>
            <p>We have wide range of products for you.No need to hunt around,we have all in one place</p>
        </div>
        <!--jumbutron ends-->
        <!--breadcrumb start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
        <!--breadcrumb end-->
    <hr/>
    <!--menu list-->
    <div class="row text-center" id="watch">
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/omty1.jpg" alt="" class="img-fluid pb-1" >
                <div class="figure-caption">
                    <h6>MRF</h6>
                    <h6>Price :Rs 3000</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="#login" data-toggle="modal"  role="button" class="btn btn-warning  text-white ">Book Now</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(1)) {
                     echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/omty2.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>MRF</h6>
                    <h6>Price :Rs 2500</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="#login" role="button" data-toggle="modal" class="btn btn-warning  text-white ">Book Now</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(2)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                         } else {
                        ?>
                        <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                         }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/omty3.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>MRF</h6>
                    <h6>Price :Rs 3500</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="#login" role="button" data-toggle="modal" class="btn btn-warning  text-white ">Book Now</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(3)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/omty4.jpg" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>MRF</h6>
                    <h6>Price :Rs 1800</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="#login" role="button" data-toggle="modal" class="btn btn-warning  text-white ">Book Now</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(4)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center" id="shirt">
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="images/omty5.jpg" alt="" class="img-fluid pb-1"  >
                    <div class="figure-caption">
                    <h6>MRF</h6>
                    <h6>Price :Rs 1800</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="#login" role="button" data-toggle="modal" class="btn btn-warning  text-white ">Book Now</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(5)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=5" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/omty9.jpg" alt="" class="img-fluid pb-1" >
                    <div class="figure-caption">
                    <h6>MRF</h6>
                    <h6>Price :Rs 2500</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="#login" role="button" data-toggle="modal" class="btn btn-warning  text-white ">Book Now</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(6)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=6" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                    }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/ty1.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Highlander t-shirt</h6>
                        <h6>Price :Rs 500</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="#login" role="button" data-toggle="modal" class="btn btn-warning  text-white ">Book Now</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(7)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=7" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="images/ty2.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>MRF</h6>
                        <h6>Price :Rs 2300</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="#login" role="button" data-toggle="modal" class="btn btn-warning  text-white ">Book Now</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(8)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=8" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="shoes" >
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/ty3.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>MRF</h6>
                            <h6>Price :Rs 8000</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="#login" role="button" data-toggle="modal" class="btn btn-warning  text-white ">Book Now</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(9)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=9" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/ty4.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>MRF</h6>
                            <h6>Price :Rs 7500</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="#login" role="button" data-toggle="modal" class="btn btn-warning  text-white ">Book Now</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(10)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                     <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                     <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/ty5.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>MRF</h6>
                            <h6>Price :Rs 7000</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="#login" role="button" data-toggle="modal" class="btn btn-warning  text-white ">Book Now</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(11)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=11" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3" >
                    <div class="card">
                        <img src="images/ty6.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                        <h6>MRF</h6>
                    <h6>Price :Rs 6000</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="#login" role="button" data-toggle="modal" class="btn btn-warning  text-white ">Book Now</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(12)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=12" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center" id="headphones">
                    <div class="col-md-3 col-6 py-3" >
                        <div class="card">
                            <img src="images/ty7.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>MRF</h6>
                                <h6>Price :Rs 22,500</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="#login" role="button" data-toggle="modal" class="btn btn-warning  text-white ">Book Now</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(13)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p> <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="images/ty11.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>MRF</h6>
                                <h6>Price :Rs 4500</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="#login" role="button" data-toggle="modal" class="btn btn-warning  text-white ">Book Now</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(14)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=14" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="images/ty10.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>MRF</h6>
                                <h6>Price :Rs 10,500</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="#login" role="button" data-toggle="modal" class="btn btn-warning  text-white ">Book Now</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(15)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=15" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                   <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="images/ty12.jpg" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Airpods</h6>
                                <h6>Price :Rs 15,000</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="#login" role="button" data-toggle="modal" class="btn btn-warning  text-white ">Book Now</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(16)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p> <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                </div>
      </div>
      <!--menu list ends-->
      <!-- //show Now-->
      
        <!------------MainFooter Start---------->
            <?php

               include "includes/mainfooter.php"




            ?>    
      <!----------//MainFooter End----------->
       <!--Login trigger Modal-->
    <div class="modal fade" id="login" >
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content"style="background-color:rgba(255,255,255,0.95)">

            <div class="modal-header">
              <h5 class="modal-title">Login</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form action="login_script.php" method="post">
                 <div class="form-group">
                     <label for="email">Email address:</label>
                     <input type="email" class="form-control"  name="lemail" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd"  name="lpassword" placeholder="Password" required>
                </div>
                <br>
                 <div class="g-recaptcha" data-sitekey="6LezkRQlAAAAAJwW-kNmJV8hIOqhYbXB9H2SU6Dx"></div>
                 <button type="submit" class="btn btn-primary btn-block" name="Submit" style="  background: radial-gradient(circle farthest-corner at 100% 110%,#d75dbc 10%,#6a4bc4 50%);
    border-radius: 30px 1px;
    box-shadow: 0 9px 30px 0 rgb(109 75 196 / 40%);">Sign Up</button>
            </div>
            <div class="modal-footer">
              <p class="mr-auto">  New User? <a href="#signup" data-toggle="modal" data-dismiss="modal" > <span style="color:skyblue;"> signup</span></a></p>
              <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
            </div>
          </div>
        </div>
      </div>
    <!--Login trigger Model ends-->
   <!--Signup model start-->
    <div class="modal fade" id="signup">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content" style="background-color:rgba(255,255,255,0.95)">

            <div class="modal-header">
              <h5 class="modal-title">Sign Up</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form action="signup_script.php" method="post">
                <div class="form-group">
                     <label for="email">Email address:</label>
                     <input type="email" class="form-control"  name="email_id" placeholder="Enter email" required>
                     <?php if(isset($_GET['error'])){ echo "<span class='text-danger'>".$_GET['error']."</span>" ;}  ?>
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="validation1">First Name</label>
                        <input type="text" class="form-control" id="validation1" name="first_Name" placeholder="First Name" required>
                    </div>
                    <div class="form-group col-md -6">
                        <label for="validation2">Last Name</label>
                        <input type="text" class="form-control" id="validation2" name="last_Name" placeholder="Last Name">
                    </div>
                </div>
                
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" required>
                    <label for="checkbox" class="form-check-label">Agree terms and Condition</label>
                </div><br>
                <button type="submit" class="btn btn-primary btn-block" name="Submit" style="  background: radial-gradient(circle farthest-corner at 100% 110%,#d75dbc 10%,#6a4bc4 50%);
    border-radius: 30px 1px;
    box-shadow: 0 9px 30px 0 rgb(109 75 196 / 40%);">Sign Up</button>
              </form>
            </div>
            <div class="modal-footer">
              <p class="mr-auto">Already Registered?<a href="#login"  data-toggle="modal" data-dismiss="modal"> <span style="color:skyblue;"> Login</span></a></p>
              <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
            </div>
          </div>
        </div>
      </div>
      <!--Signup trigger model ends-->
      
      
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
</html>