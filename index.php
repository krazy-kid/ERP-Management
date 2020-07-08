<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 06/06/2018
 * Time: 8:34 AM
 */
?>
<!doctype html>
    <html>
<head>
    <title>LogIn Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- first div for software title-->
<div class="firstdiv">
    <p class="textstyle">Online ERP system</p>
</div>
<!-- Second div for login panel-->
<form action="usermodel.php" method="post" name="form1">
    <div class="middlediv">
        <p class="fieldname" style="margin-left: 20px";>Username : </p>
        <input type="text" name="username" style="position: absolute;margin-left: 130px; margin-top: -40px;">
        <p class="fieldname" style="margin-left: 20px;">Password :</p>
        <input type="password" name="password" style="position: absolute;margin-left: 130px; margin-top: -40px;"/>
        <input type="submit" name="login_button" value="Sign In" class="btn" style="margin-left: 130px; width: 100px;height: 25px;">
        <a href="register.php" class="reg">Sign Up</a>

    </div>
    <div class="footerdiv1">
    <a href="http://google.com" class="reg">Ask Google</a>
    </div>
</form>
<!--third div for footer -->
<div class="footerdiv">
    <p>Copyrights@2018 design by GM Enterprises</p>
</div>
</body>
</html>
