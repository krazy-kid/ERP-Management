<?php
session_start();
?>
<!doctype html>
    <html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="firstdiv">
    <p class="textstyle">Welcome !<?php echo "".$_SESSION['Username'].""?></p>

</div>

</body>
</html>
