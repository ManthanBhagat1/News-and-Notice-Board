<a href='display.php'>FOR UPDATE NEWS BOARD CLICK HERE==></a>



<html>
    <head>
        <style>
            body
            {

                background:red;
                
            }
           
   
            </style>

</head>

    </html>



<?php
include("connection.php");
$id = $_GET['id'];
$query = "delete from notice where tittle='$id'";
$data = mysqli_query($conn,$query) ;

if($data)
{
   echo "<br>
<br>
<br>
       data deleted sucessfully  ";
    ?>

    <meta htttp-equip = "refresh" content = "0; url = http://localhost/pratiksha/display.php"/>
    

    <?php

}

else
{
    echo "Data not deleted";

}
?>
