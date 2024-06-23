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
				<center>
<div class="mai">
<div class="reg" align="center"><br>
        <h3 class="form-head">Register View </h3><br>
    <form method="post" autocomplete="off">
        <div class="form-block">
        <table>
        <tr>
        <td><label for="id" class="control-label">Select id</label></td>
        <td>
        <select name="id" id="id" class="form-control" required>
            <option value=''>Select</option>
            <?php
            include('db.php');
            $sql = "SELECT id FROM user_details GROUP BY id ORDER BY id ASC";
            $result = mysqli_query($con, $sql);
            while($row = mysqli_fetch_assoc($result))
            {
            $name = $row["id"];
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
    <th>Name</th>
    <th>College number</th>
    <th>Email</th>
    <th>Phone Number</th>
    </tr>";
    function display($id,$name, $cnumber, $mail, $pnumber)
    {
        echo"
        <tr>
        <td>$id</td>
        <td>$name</td>
        <td>$cnumber</td>
        <td>$mail</td>
        <td>$pnumber</td>
        </tr>";
    }
    ?>
</div>
<?php
include('db.php');
if(isset($_POST["search"]))
{
    $id= $_POST["id"];
    $sql = "SELECT * FROM user_details WHERE id='$id' ORDER BY id";
    $result = mysqli_query($con, $sql);
    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {

                $id = $row["id"];
                $name = $row["name"];
                $cnumber = $row["cnumber"];
                $mail = $row["mail"];
                $pnumber = $row["pnumber"];
    display($id,$name, $cnumber, $mail, $pnumber);
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
