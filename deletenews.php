<?php
include("connection.php");
$id = $_GET['id'];
$query = "delete from news where tittle='$id'";
$data = mysqli_query($conn,$query) ;

if($data)
{
    echo "data deleted";
    ?>

    <meta htttp-equip = "refresh" content = "0; url = http://localhost/pratiksha/display.php"/>
    

    <?php

}

else
{
    echo "Data not deleted";

}
?>