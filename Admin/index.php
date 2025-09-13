
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>OM SAI TYRE & AUTO SERVICES</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Latest Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Meta tag Keywords -->

    <!-- css files -->
    <link rel="stylesheet" href="css/stylelo.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->

    <!-- web-fonts -->
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
     rel="stylesheet">
    <!-- //web-fonts -->

</head>

<body>
    <div class="main-bg">
        <!-- title -->
        <h1>OM SAI TYRE STORE</h1>
        <!-- //title -->
        <!-- content -->
        <div class="sub-main-w3">
            <div class="bg-content-w3pvt">
                <div class="top-content-style">
                    <img src="images/ompng1.png" alt="" style="width:100%;" />
                </div>
                <form action="#" method="post">
                    <p class="legend">Login Here<span class="fa fa-hand-o-down"></span></p>
                    <div class="input">
                        <input type="email" placeholder="Email" name="email" required />
                        <span class="fa fa-envelope"></span>
                    </div>
                    <div class="input">
                        <input type="password" placeholder="Password" name="password" required />
                        <span class="fa fa-unlock"></span>
                    </div>
                    <button type="submit" class="btn submit" value="Login" name="login">
                        <span class="fa fa-sign-in"></span>
                    </button>
                </form>
            </div>
        </div>
        <!-- //content -->
        <!-- copyright -->
        
        </div>
        <!-- //copyright -->
    </div>
</body>

</html>
<?php
include "config.php";

    if(isset($_POST['login']))
    {
        extract($_POST);

        $email=mysqli_real_escape_string($con,$_POST['email']);
        $password=mysqli_real_escape_string($con,$_POST['password']);
        
        $log=mysqli_query($con,"select * from admin_login where email='$email' and password='$password'") or die (mysqli_error($con));
            
        if(mysqli_num_rows($log)>0)
        {
            $fetch=mysqli_fetch_array($log);
            
            $_SESSION['id']=$fetch['id'];
            $_SESSION['email']=$fetch['Email'];
            
            
            echo "<script>";
            echo "alert('Login Successfull');";
            echo 'window.location.href="basic_table.php";';
            echo "</script>";
        }else
        {
            echo "<script>";
            echo "alert('Login Failed');";
            echo "</script>";
            
        }
        
    }
?>