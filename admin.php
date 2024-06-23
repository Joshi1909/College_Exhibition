<?php
include('db.php');

if(isset($_GET["register"]))
{
$department=$_GET["department"];
$event=$_GET["event"];
$fees=$_GET["fees"];
$sql="INSERT INTO admin_exdetails (department,event,fees)VALUES('$department','$event',$fees)";
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
<a href="admin_exdetails.php">back to home</a>
</body>
</html>