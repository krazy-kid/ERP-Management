<?php

include'connection.php';
session_start();


if(isset ($_POST['login_button'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from user where username='$username'and password='$password'";
    $result = mysqli_query($db, $sql);
    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        while ($row = mysqli_fetch_array($result)) {

            $_SESSION['Username'] = $row['username'];
            echo "<script>if(confirm('login successfully !')){document.location.href='sales.php'};</script>";
        }
    } else {
        echo "<script>if(confirm('Login Failed !')){document.location.href='index.php'};</script>";
    }
}
     elseif(isset($_POST['reg_btn'])) {
         $empid=$_POST['empid'];
         $firstname=$_POST['fname'];
         $lastname=$_POST['lname'];
         $department=$_POST['dept'];
         $contact=$_POST['contact'];
         $email=$_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

         $sql1="select*from userid where Empid='$empid' and Name ='$username'";
         $result1=mysqli_query($db,$sql1);
         $authorized_user=mysqli_num_rows($result1);

         $sql2="select*from user where Empid='$empid' and username='$username'";
         $result2=mysqli_query($db,$sql2);
         $user_exist=mysqli_num_rows($result2);

         if($authorized_user>=1){
             if($user_exist==0){
                 $insert=$db->query("INSERT INTO user(Empid,Firstname,Lastname,Department,Contact,Email,username,password)VALUES ('$empid','$firstname','$lastname','$department','$contact','$email','$username','$password')");
                 if ($insert) {
                     echo "<script>if(confirm('Registration successfull !')){document.location.href='index.php'};</script>";
                 } else {
                     echo "<script>if(confirm('Registration Failed !')){document.location.href='register.php'};</script>";
                 }
             }else{
                 echo"<script>if(confirm('User Already Exist!')){document.location.href='index.php'};</script>";
             }
         }
         else{
             echo"<script>if(confirm('Unauthorized User!')){document.location.href='index.php'};</script>";
         }
     }

    elseif(isset($_POST['sls_btn'])) {
        $costumername=$_POST['cname'];
        $salesdate=$_POST['sdate'];
        $productname=$_POST['pname'];
        $productid=$_POST['pid'];
        $quantity=$_POST['quantity'];
        $unitprice=$_POST['price'];
        $totalamount = $_POST['amount'];
        $email = $_POST['email'];
        $contact= $_POST['contact'];

           $insert=$db->query("INSERT INTO sales(Costumername,Salesdate,Productname,Productid,Quantity,Unitprice,Totalamount,Email,Contact)VALUES ('$costumername','$salesdate','$productname','$productid','$quantity','$unitprice','$totalamount','$email','$contact')");
            if ($insert) {
                echo "<script>if(confirm('Transaction Successfull !')){document.location.href='index.php'};</script>";
            } else {
                echo "<script>if(confirm('Transaction Failed !')){document.location.href='sales.php'};</script>";
            }
    }

    ?>