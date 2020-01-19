<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Log In Page</title>
    <link rel="stylesheet" href="css/style.css">
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
        <div id="button">
            <input type="submit" id="submit_btn" value="Login"/><br>
            <input type="button" id="register_btn" value="Register"/>
        </div>
        
    </form>
</div>

</body>
</html>