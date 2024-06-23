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
            <li><a href="admin_dashboard.php">Home</a></li>
            <li><a href="admin_exdetails.php">Add details</a></li>
            <li><a href="update_events.php">Update</a></li>
            <li><a href="aview.php">view</a></li>
            <li><a href="home.php">Log Out</a></li>
                    </ul>
                </nav></div>
<div class="mai" align="center"><br>
        <h3 class="form-head">Update Events</h3>
    <form method="post" autocomplete="off">
        <table>
        <tr>
        <td><label for="id" class="control-label">Select ID</label></td>
        <td>
        <select name="id" id="id" class="form-control" required>
            <option value=''>Select</option>
            <?php
            include('db.php');
            $sql = "SELECT id FROM admin_exdetails GROUP BY id ORDER BY id ASC";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result))
            {
            $from = $row["id"];
            echo "
            <option value='$from'>$from</option>
            ";
            }
            ?>
        </select></td>
        </tr>
        <td></td>
        <td colspan=2><input type="submit" class="btn btn-success" value="Search" name="search"></td></tr>
    </table>
    </form>
<p id="result" align="center" class="letter-design" style="margin-top: 15px; font-size: 20px; color: brown;"></p>
    <?php
    echo "
    <table class='table table-responsive' align='center'>
    <tr>
    <th>ID</th>
    <th>Department</th>
    <th>Event</th>
    <th>Fees</th>
    <th>update</th>
    </tr>";
    function display($id, $department, $event, $fees)
    { 
        echo"
        <tr>
        <td>$id</td>
        <td>$department</td>
        <td>$event</td>
        <td>$fees</td>
        <td><a href='update.php?id=$id&department=$department&event=$event&fees=$fees&' class='btn btn-success'>Update</a></td>
        </tr>";
    }
    ?>
</div>
</body>
</html>
<?php
include('db.php');
if(isset($_POST["search"]))
{
    $id = $_POST["id"];
    $sql = "SELECT * FROM admin_exdetails WHERE id='$id'";
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
                display($id, $department , $event, $fees);
            }
        }
        else{
            echo "<script>document.getElementById('result').innerText = 'Sorry There are no buses available'</script>";

        }
    }
    else{
        echo $con->error;
  }
} 
?>