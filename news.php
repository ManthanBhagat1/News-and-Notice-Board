<?php
include("connection.php");
$tittle = $_POST['tittle'];
$date = $_POST['date'];
$details = $_POST['details'];


 $sql ="INSERT INTO news(tittle,date,details) VALUES ('$tittle','$date','$details')";

mysqli_query($conn,$sql);

mysqli_close($conn);

echo " news added Sucessfully ! <a href='home.html'>Go to Home </a>";

?>
