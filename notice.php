
<html>
    <head>
        <style>
            body
            {

                background:red;
                text-align :left;
                 text-color:green;
            }
            
            </style>

</head>

    </html>



<?php
include("connection.php");
$tittle = $_POST['tittle'];
$date = $_POST['date'];
$details = $_POST['details'];


 $sql ="INSERT INTO notice(tittle,date,details) VALUES ('$tittle','$date','$details')";

mysqli_query($conn,$sql);

mysqli_close($conn);

echo " notice added Sucessfully <br>
<br>
<br>
 <a href='home.html' Go to Home CLICK HERE=> </a><br>
<br>
<br>

<a href='display.php'> UADATE NOTICE BOARD CLICK HERE=> </a>";


?>
