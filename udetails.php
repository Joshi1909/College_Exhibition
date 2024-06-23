<?php
include('db.php');
session_start();
$event_id=$_SESSION["event_id"];
if(isset($_GET["register"]))
{
$name=$_GET["name"];
$cnumber=$_GET["cnumber"];
$pnumber=$_GET["pnumber"];
$mail=$_GET["mail"];
$sql="INSERT INTO user_details(id,name,cnumber,pnumber,mail)VALUES($event_id,'$name','$cnumber',$pnumber,'$mail')";
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
<a href="register_view.php">back to home</a>
</body>
</html>