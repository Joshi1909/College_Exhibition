<?php
session_start();
include('db.php');
if(isset($_POST["register"]))
{
    $username = $_POST["mail"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result)>0)
    {
        $_SESSION["mail"] = $mail;
        header("location:admin_dashboard.php");
    }
    else
    {
        echo "<script>alert('Please enter valid mail id and password');window.location='login.php'</script>";
    }
}
//if(!isset($_SESSION["email"]))
//{
//header('location:login.php');
//}

?>