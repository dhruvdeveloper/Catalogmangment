<!DOCTYPE html>
<html>
    <head>
        <title>Catalogue Management System</title>
        <link rel="stylesheet" type="text/css" href="./cataloguesystem.css" />
        <!-- Used this CDN for the icon's of Navbar. -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="index.js"></script>
        
    </head>
    <body>
        <div id="wrapper">
            <!-- https://www.w3schools.com/howto/howto_js_topnav.asp "Navabar code referes from this site" -->
            <nav>
                <div class="topnavforbutton" id="nav-id">
                    <a href="loginclient.php" class="button-nav">Login</a>
                    <a href="signupclient.php" class="button-nav">Sign Up</a>
                    <a href="#home" class="social-icon-link"><img src="./static/facebook.png" class="social-icon" /></a>
                    <a href="#home" class="social-icon-link"><img src="./static/insta.jpg" class="social-icon" /></a>
                    <a href="#home" class="social-icon-link"><img src="./static/Youtube.png" class="social-icon" /></a>
                </div>
                <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_topnav "Navabar responsive code referes from this site" -->
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="breaker"></div>
                <div class="topnav">
                    <a href="https://dxt5888.uta.cloud/blog/">Forum</a>
                    <a href="about.html">About</a>
                    <a href="index.html">Home</a>
                </div>
            </nav>
            <div class="login-page">
                <form method="POST" action="login.php">
                    <p>Email id: <input type="email" name="email" id="email" onkeyup="onchangeEmail()" required/>
                        <span class="error" id = "email-span"></span>
                    </p>
                    <p>Password: <input type="password" name="password" id="password" required/>
                        <span class="error" id="password-span"></span>
                    </p>
                    <p>Confirm-Password: <input type="password" name="confirm-password" id="confirmPassword" onkeyup="onchangeConfirmPassword()" required/>
                        <span class="error" id="password-confirm-span"></span>
                    </p>
                    <input type="submit" />
                </form>
            </div>
            <div id="testing">
                <?php
                    if(isset($_GET['x'])){
                        if($_GET['x'] == '1'){
                            echo "There is no email id registered with this name!";
                        }
                        else if($_GET['x'] == '2'){
                            echo "Password is incorrect";
                        }
                        else{
                            echo "Something is wrong in server side!";
                        }
                    }
                ?>
            </div>
            <footer>
                <div class="footer">
                    <p class="footer-paragraph">Created by Dhruv. <span class="rights-reserved">All rights Reserved</span></p>
                </div>
            </footer>
        </div>
        <script>
            function myFunction() {
                var x = document.getElementById("nav-id");
                if(x.style.display == "block"){
                    x.style.display = "none";
                }
                else{
                    x.style.display = "block";
                }
            }
        </script>
    </body>
</html>