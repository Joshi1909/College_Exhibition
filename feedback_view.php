j<html>
    <div class="mass">
    <marquee>All the best for your presentation</marquee>
    </div>
    <title>College Exhibition</title>
   
    <link rel="stylesheet" type="text/css" href="style.css">
	<style>
	.mas{
		top:50%;
        left:50%;
        position: absolute;
        transform: translate(-100%,-50%);
		left-padding:50px;
	}
	</style>
    <body>
            <div class="men">
       
                <nav>
                    <h1><img src="../project/img/favicon.png">College Exhibition</h1>
                        <ul>
                           
            <li><a href="home.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="user_register.php">Register</a></li>
            <li><a href="alogin.php">Admin</a></li>
            <li><a href="contact.php">contact</a></li>
                    </ul>
                </nav>
</div>
            <div class="mas">

                <div class="register">
                    </form>
</div>
</div>
</body>
</html>
<?php
include('db.php');
	$sql="SELECT * FROM feedback";
	$insert = mysqli_query($con, $sql);
 
    if(!$insert)
    {
    echo $con->error;
    }
else{
echo" successfully stored";
}
?>