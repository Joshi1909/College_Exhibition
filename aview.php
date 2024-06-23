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
                </nav>
				<center>
<div class="mai">
<div class="reg" align="center"><br>
            
    <?php
    echo "
    <table class='table table-responsive' align='center'>
    <tr>
    <th>ID</th>
    <th>Events</th>
    <th>Department</th>
    <th>Fees</th>
    </tr>";
    function display($id,$event, $department, $fees)
    {
        echo"
        <tr>
        <td>$id</td>
        <td>$event</td>
        <td>$department</td>
        <td>$fees</td>
        </tr>";
    }
    ?>
</div>
<?php
include('db.php');
{
    $sql = "SELECT * FROM admin_exdetails ORDER BY id";
    $result = mysqli_query($con, $sql);
    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {

                $id = $row["id"];
                $event = $row["event"];
                $department = $row["department"];
                $fees= $row["fees"];
    display($id,$event, $department, $fees);
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
