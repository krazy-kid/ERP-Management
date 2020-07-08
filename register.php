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
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- first div for software title-->
<div class="firstdiv">
    <p class="textstyle">Online ERP system</p>
</div>
<!-- Second div for login panel-->
<form action="usermodel.php" method="post" name="form1">
<div class="middlediv1">
        <p class="fieldname" style="margin-left: 20px";>Emp ID : </p>
        <input type="text" name="empid" style="position: absolute;margin-left: 130px; margin-top: -40px;"; pattern="^[a-zA-Z0-9{1,10}$"required/>


        <p class="fieldname" style="margin-left: 20px";>First Name : </p>
        <input type="text" name="fname" style="position: absolute;margin-left: 130px; margin-top: -40px;"; pattern="^[a-zA-Z{1,20}$"required/>

        <p class="fieldname" style="margin-left: 20px";>Last Name : </p>
        <input type="text" name="lname" style="position: absolute;margin-left: 130px; margin-top: -40px;"; pattern="^[a-zA-Z{1,20}$"required/>

        <p class="fieldname" style="margin-left: 20px";>Department : </p>
        <select name="dept" style="position:absolute;margin-left: 130px; margin-top: -40px;" >
            <option>--Select--</option>
            <option value="Sales">Sales</option>
            <option value="Purchase">Purchase</option>
            <option value="Inventory">Inventory</option>
        </select>

        <p class="fieldname" style="margin-left: 20px";>Contact : </p>
        <input type="text" name="contact" style="position: absolute;margin-left: 130px; margin-top: -40px;" pattern="[0-9]{10}"required/>

        <p class="fieldname" style="margin-left: 20px";>Email : </p>
        <input type="text" name="email" style="position: absolute;margin-left: 130px; margin-top: -40px;" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"required/>


        <p class="fieldname" style="margin-left: 20px";>Username : </p>
        <input type="text" name="username" style="position: absolute;margin-left: 130px; margin-top: -40px;"pattern="^[a-zA-Z]{1,20}$"required/>

        <p class="fieldname" style="margin-left: 20px;">Password :</p>
        <input type="password" name="password" style="position: absolute;margin-left: 130px; margin-top: -40px;"pattern="(?=.*\d)(?=.*[a-z)(?=.*[A-Z]).{8,}"required/>

        <input type="submit" name="reg_btn" value="Submit" class="btn" style="margin-left: 130px; width: 100px;height: 25px;">
</div>
</form>
<!--third div for footer -->
<div class="footerdiv">
    <p>Copyrights@2018 design by GM Enterprises</p>
</div>
</body>
</html>
