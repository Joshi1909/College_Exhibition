<html>
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
                    <center>
   <h1>gf</h1><br>
</center>
                    <form>
                        <label>Please Give a Feedback:</label><br><br>
                        <textarea id="name" name="name"></textarea>
                        <br><br>
                        <input type="submit" name="register" value="submit" class="button">
                    </form>
</div>
</div>
</body>
</html>
<?php
include('db.php');
if(isset($_GET["register"]))
{
	$feedback=$_GET["name"];
	$sql="INSERT INTO feedback (feedback) values('$feedback')";
	$insert = mysqli_query($con, $sql);
 
    if(!$insert)
    {
    echo $con->error;
    }
else{
echo" successfully stored";
}
}
?>