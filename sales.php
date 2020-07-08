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
    <title>Sales Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- first div for software title-->
<div class="firstdiv">
    <p class="textstyle">Sales</p>
</div>
<!-- Second div for login panel-->
<form action="usermodel.php" method="post" name="form1">

        <p class="fieldname" style="margin-left: 20px";>Customer Name : </p>
        <input type="text" name="cname" style="position: absolute;margin-left: 180px; margin-top: -40px;"; pattern="^[a-zA-Z{1,20}$"required/>


        <p class="fieldname" style="margin-left: 20px";>Sales Date : </p>
        <input type="date" name="sdate" style="position: absolute;margin-left: 180px; margin-top: -40px;"; pattern="^[0-9{1,20}$"required/>

        <p class="fieldname" style="margin-left: 20px";>Product Name : </p>
        <input type="text" name="pname" style="position: absolute;margin-left: 180px; margin-top: -40px;"; pattern="^[a-zA-Z{1,20}$"required/>

        <p class="fieldname" style="margin-left: 20px";>Product ID : </p>
        <input type="text" name="pid" style="position: absolute;margin-left: 180px; margin-top: -40px;"pattern="^[a-zA-Z0-9]{1,20}$"required/>


        <p class="fieldname" style="margin-left: 20px;">Quantity:</p>
        <input type="text" name="quantity" style="position: absolute;margin-left: 180px; margin-top: -40px;"pattern="[0-9]{1,}"required/>

        <p class="fieldname" style="margin-left: 20px;">Unit Price:</p>
        <input type="text" name="price" style="position: absolute;margin-left: 180px; margin-top: -40px;"pattern="[0-9]{1,}"required/>

        <p class="fieldname" style="margin-left: 20px";>Total Amount : </p>
        <input type="text" name="amount" style="position: absolute;margin-left: 180px; margin-top: -40px;" pattern="[0-9]{1,}"required/>


        <p class="fieldname" style="margin-left: 20px";>Email : </p>
        <input type="text" name="email" style="position: absolute;margin-left: 180px; margin-top: -40px;" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"required/>

        <p class="fieldname" style="margin-left: 20px";>Contact : </p>
        <input type="text" name="contact" style="position: absolute;margin-left: 180px; margin-top: -40px;" pattern="[0-9]{10}"required/>


        <input type="submit" name="sls_btn" value="Submit" class="btn" style="margin-left: 180px; width: 100px;height: 25px;">

</form>
<!--third div for footer -->
<div class="footerdiv">
    <p>Copyrights@2018 design by GM Enterprises</p>
</div>
</body>
</html>
