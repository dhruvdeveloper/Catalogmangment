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
                    <a href="#home" class="social-icon-link"><img src="../static/facebook.png" class="social-icon" /></a>
                    <a href="#home" class="social-icon-link"><img src="../static/insta.jpg" class="social-icon" /></a>
                    <a href="#home" class="social-icon-link"><img src="../static/Youtube.png" class="social-icon" /></a>
                    <div class="breaker"></div>
                    <div class="topnav">
                        <a href="users.php">Users</a>
                        <a href="https://dxt5888.uta.cloud/blog/">Forum</a>
                        <a href="about.html">About</a>
                        <a href="index.html">Home</a>
                    </div>
                </div>
                <!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_topnav "Navabar responsive code referes from this site" -->
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
            </nav>
            <div class="main-home">
                <h2>Catalogue Management System</h2>
                <div class="login-page">
                <form method="POST" action="update.php">
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
                </form>
            </div>
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