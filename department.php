<html>
<head>
<title>College Exhibition</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.reg{
left-margin:20px;
border-radius: 10px;
border:2px solid white;
background-color:white;
padding:20px;
}
th,td{
padding:5px;
}
tr{
border: 2px solid black;
}
</style>
</head>
<body>    
<div class="mass">
    <marquee>All the best for your presentation</marquee>
    </div>
   
   
   
   
            <div class="men">
       
                <nav>
                    <h1>Inter College Event</h1>
                        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="event.php">Events</a></li>
            <li><a href="department.php">Department</a></li>
            <li><a href="register_view.php">View</a></li>
            <li><a href="acontact.php">contact</a></li>
            <li><a href="home.php">Log Out</a></li>
                    </ul>
                </nav>
<div class="mai">
<div class="reg" align="center"><br>
        <h3 class="form-head">Select Department</h3><br>
    <form method="post" autocomplete="off">
        <div class="form-block">
        <table>
        <tr>
        <td><label for="department" class="control-label">Select Department</label></td>
        <td>
        <select name="department" id="department" class="form-control" required>
            <option value=''>Select</option>
            <?php
            include('db.php');
            $sql = "SELECT department FROM admin_exdetails GROUP BY department ORDER BY department ASC";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result))
            {
            $name = $row["department"];
            echo "
            <option value='$name'>$name</option>
            ";
            }
            ?>
        </select></td>
        </tr>
        <td></td>
        <td colspan=2><input type="submit" class="btn btn-success" value="Search" name="search"></td></tr>
    </table></div>
    </form>
<p id="result" align="center" class="letter-design" style="margin-top: 15px; font-size: 20px; color: brown;"></p>
    <?php
    echo "
    <table class='table table-responsive' align='center'>
    <tr>
    <th>ID</th>
    <th>Department</th>
    <th>Events</th>
    <th>Fees</th>
    </tr>";
    function display($id, $department, $event, $fees)
    {
        echo"
        <tr>
        <td>$id</td>
        <td>$department</td>
        <td>$event</td>
        <td>$fees</td>
        <td><a href='user_details.php?event_id=$id' class='btn btn-success'>Register</a></td>
        </tr>";
    }
    ?>
</div>
<?php
include('db.php');
if(isset($_POST["search"]))
{
    $department= $_POST["department"];
    $sql = "SELECT * FROM admin_exdetails WHERE department='$department' ORDER BY department";
    $result = mysqli_query($con, $sql);
    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {

                $id = $row["id"];
                $department = $row["department"];
                $event = $row["event"];
                $fees = $row["fees"];
                display($id, $department, $event, $fees);
            }
        }
        else{
            echo "<script>document.getElementById('result').innerText = 'No information is found'</script>";

        }
    }
    else{
        echo $con->error;
}
    }
?>
</div>
</body>
</html>
