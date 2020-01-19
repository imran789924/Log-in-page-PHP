<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body style="background-color: #f1c40f">

<div id="main">
    <center> 
        <h2 style="color:#f1c40f">Login Page</h2>
        <img src="img/images.png" class="log-image">
    </center>


    <form class="form" action="index.php" method="post">
        <label class="label"><b>Username:</label><br>
        <input type="text" class="inputvalues" placeholder="mark1234"/><br>
        <label class="label"><b>Password:</label><br>
        <input type="password" class="inputvalues" placeholder="**********"/><br>
        <label class="label"><b>Confirm Password:</label><br>
        <input type="password" class="inputvalues" placeholder="**********"/><br>
        <div id="button">
            <input type="button" id="register_btn" value="Register"/>
            <input type="button" id="back_btn" value="<- Go Back"/>
        </div>
        
    </form>
</div>

</body>
</html>