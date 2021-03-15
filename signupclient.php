<!DOCTYPE html>
<html>
    <head>
        <title>Catalogue Management System</title>
        <link rel="stylesheet" type="text/css" href="./cataloguesystem.css" />
        <!-- Used this CDN for the icon's of Navbar. -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script src="index.js"></script>
        <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/emailjs-com@2/dist/email.min.js"></script>
        <script type="text/javascript">
            (function(){
                emailjs.init("user_6mlSrz2mL3CrHTAobZQdZ");
            })();

            function sendIt(){
                var templateParams = {
                    to_name: 'thakkardhruv97@gmail.com',
                    from_name: 'temputawdm@gmail.com',
                    message_html: 'Please Find out the attached file'
                };

                emailjs.send('service_yqj1e14', 'template_7r16gqi', templateParams)
                    .then(function(response) {
                        console.log('SUCCESS!', response.status, response.text);
                    }, function(error) {
                    console.log('FAILED...', error);
                });
            }
        </script>
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
                <form method="POST" action="signup.php">
                    <p>Email id: <input type="email" name="email" id="email" onkeyup="onchangeEmail()" required/>
                        <span class="error" id = "email-span"></span>
                    </p>
                    <p>Name: <input type="text" name="name" id="name" onkeyup="onchangeName()" required/><span class="error" id
                        ="name-span"></span></p>
                    <p>Password: <input type="password" name="password" id="password" onkeyup="onchangePassword()" required/><span class="error" id
                        ="password-span"></span></p>
                    <p>Confirm Password: <input type="password" name="confirm-password" id="confirmPassword" onkeyup="onchangeConfirmPassword()" required/><span class="error" id
                        ="password-confirm-span"></span></p>
                    <label for="role">Choose a role:</label>
                    <select name="role" id="role" onclick="onchangeRole()" required>
                        <option value="">None</option>
                        <option value="student">student</option>
                        <option value="staff">staff</option>
                        <option value="admin">admin</option>
                    </select>
                    <span class="error" id="role-error-span">Value must be selected!</span>
                    <br />
                    <input type="submit"/>
                    <input type="button" value="Send Email" onclick="sendIt()"/>
                </form>
            </div>
            <footer>
                <div class="footer">
                    <p class="footer-paragraph">Created by Dhruv. <span class="rights-reserved">All rights Reserved</span></p>
                </div>
            </footer>
        </div>
        <div id="testing">
            <?php
                if(isset($_GET['x'])){
                    if($_GET['x'] == '1'){
                        echo "All inputs fields are required!";
                    }
                    else if($_GET['x'] == '2'){
                        echo "Email alredy exist, try another!";
                    }
                    else if($_GET['x'] == '3'){
                        echo "Password should be matched!";
                    }
                    else{
                        echo "Something is wrong in server side!";
                    }
                }
            ?>
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