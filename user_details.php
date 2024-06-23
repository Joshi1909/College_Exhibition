<html>
<?php
$event_id = $_GET["event_id"];
session_start();
$_SESSION["event_id"] = $event_id; 
?>
    <div class="mass">
    <marquee>All the best for your presentation</marquee>
    </div>
    <title>College Exhibition</title>
    
    <link rel="stylesheet" type="text/css" href="style.css">
    <body>
            <div class="men">
            
                <nav>
                    <h1><img src="../project/img/favicon.png">College Exhibition</h1>
                        <ul>
                            
            <li><a href="home.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="user_register.html">Register</a></li>
            <li><a href="#">Admin</a></li>
            <li><a href="#">contact</a></li>
                    </ul>
                </nav>
                </div>
            <div class="mai">

                <div class="register">
                    <center>
                <h1>Register Here</h1><br>
                    </center>
                    <form  method="GET" action="udetails.php">
                        <label>Name :</label>
                        <input type="text" name="name" class="name" >
                        <br><br>
                        <label>College Id Number:</label>
                        <input type="text" name="cnumber" class="name" >
                        <br><br>
                        <label>phone number :</label>
                        <input type="text" name="pnumber" class="name" >
                        <br><br>
                        <label>mail:</label>
                        <input type="text" name="mail" class="name" >
                        <br><br>
                        <input type="submit" name="register" value="register" class="button">
                    </form>
</div>
</div>
</body>
</html>
