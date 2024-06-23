<?php
include('db.php');

if(isset($_GET["register"]))
{
$name=$_GET["name"];
$gender=$_GET["gender"];
$mail=$_GET["mail"];
$password=$_GET["password"];
$phone_number=$_GET["number"];
$sql="INSERT INTO register (name,gender,mail,password,phone_number)VALUES('$name','$gender','$mail','$password',$phone_number)";
$insert = mysqli_query($con, $sql);
 
    if(!$insert)
    {
    echo $con->error;
    }
else{
echo" <html>
<head>
<style>
body{
height:100vh;
         backgroung-padding:center;
         display: flex;
         align-items: center;
         justify-content: center;
         height: 50vh;
         font-family: cursive;
background-color:green;
}
h1{
color:white;
    align-items: center;
    justify-content: center;
}
</style>
</head>
<body>
<h1>sucessfully stored......</h1>
</body>
</html> ";
}
}
?>
<a href="user_register.php">back to home</a>
</body>
</html>