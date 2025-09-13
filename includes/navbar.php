  <div class="header-outs" id="home">
         <div class="header-bar">
            <div class="info-top-grid">
               <div class="info-contact-agile">
                  <ul>
                     <li>
                        <span class="fas fa-phone-volume"></span>
                        <p> <a href="tel:9021667700">+919021667700</a></p>
                     </li>
                     <li>
                        <span class="fas fa-envelope"></span>
                        <p><a href="mailto:omsaityre.02@gmmail.com">omsaityre.02@gmail.com</a></p>
                     </li>
                     <li>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="container-fluid">
               <div class="hedder-up row">
                  <div class="col-lg-12 col-md-12 logo-head">
                     <h1><a class="navbar-brand" href="index.php" style="font-family:serif;">OM SAI TYRE & <span style="color:red;"> AUTO SERVICES</span></a></h1>
                  </div>
                  
               </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home </a>
                     </li>
                     <li class="nav-item">
                        <a href="about.php" class="nav-link"><i class="fa fa-user-circle"></i>About</a>
                     </li>
                     <li class="nav-item">
                        <a href="service.php" class="nav-link"><i class="fa fa-wrench"></i>Service</a>
                     </li>
                     <li class="nav-item">
                        <a href="shop.php" class="nav-link"><i class="fa fa-camera"></i>Gallary</a>
                     </li>
                     <li class="nav-item">
                        <a href="products.php" class="nav-link"><i class="fa fa-shopping-cart"></i>Products</a>
                     </li>
                      <li class="nav-item "><a href="#signup" class="nav-link"data-toggle="modal" ><i class="fa fa-user"></i> sign In</a>
                    </li>
                    <li class="nav-item "><a href="#login" class="nav-link" data-toggle="modal"><i class="fa fa-unlock"></i> Login</a></li>
                     
                  </ul>
               </div>
            </nav>
         </div>
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
                <button type="submit" class="btn btn-secondary btn-block" name="Submit" style="  background: radial-gradient(circle farthest-corner at 100% 110%,#d75dbc 10%,#6a4bc4 50%);
    border-radius: 30px 1px;
    box-shadow: 0 9px 30px 0 rgb(109 75 196 / 40%);">Login</button>
              </form>
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
      