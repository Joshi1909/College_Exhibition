<?php 
include('db.php');
session_start();
if(!isset($_GET["id"]))
{
    header('location:update_events.php');
}
else
{
    $department= $_GET["department"];
    $event = $_GET["event"];
    $fees = $_GET["fees"];
}
?>
<!DOCTYPE html>
<head>
    <title>Update details</title>
    <style>
    body{
    background-image: linear-gradient(#eae5c9,#6cc6cb);
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 100vh;
    }
    .container{
        margin-top: 50px;
    }
    td{
        padding: 20px;
    }
    </style>
</head>
<body>
    <div class="container" align="center"><br>
        <h3 class="form-head">Update Details</h3>
<form method='POST' autocomplete="off">
<table>
    
    <tr>
    <td><label for='bus_number' class='control-label'>Department</label></td>
    <td><input type='text' class='form-control' name='department' required value='<?php echo $department?>'></td>
    </tr>
    <tr>
    <td><label for='from_place' class='control-label'>Event</label></td>
    <td><input type='text' class='form-control' name='event' required value='<?php echo $event;?>'></td>
    </tr>
    <tr>
    <td><label for='to_place' class='control-label'>fees</label></td>
    <td><input type='text' class='form-control' name='fees' value='<?php echo $fees;?>' required name='to_place'></td>
    </tr>
    <tr>
    <td align="right"><input type='submit' name='update_bus' class='btn btn-success' value='Update Events'></td>
    </tr>
    </table>
</form>
<a href="update_events.php" class="btn btn-success">Go Back</a>
<p id="result" align="center" class="letter-design" style="margin-top: 15px; font-size: 20px; color: brown;"></p>
    </div>
	</body>
</html>
<?php
function show_result($res)
{
 echo "<script>alert('$res Successfully')
 window.location= 'update_events.php';
 </script>";
}

include('db.php');
if(isset($_POST["update_bus"]))
{
    $id = $_GET["id"];
    $department = $_POST["department"];
    $event = $_POST["event"];
    $fees = $_POST["fees"];
    $sql = "SELECT * from admin_exdetails Where department='$department' AND event='$event' AND fees=$fees";
    $result = mysqli_query($con, $sql);
    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {
            echo "<script>alert('Given details is already available')</script>";
        }
        else{
            $id = $_GET["id"];
            $sql = "Update admin_exdetails SET department='$department',event ='$event ',fees=$fees
            WHERE id=$id";
            $result = mysqli_query($con, $sql);
            if($result)
            {
                show_result("Updated");
            }
            else{
                echo mysqli_error($con);
            }
        }
    }
    else
    {
        echo mysqli_error($con);
    }
}
?>