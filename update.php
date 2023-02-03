<?php
error_reporting(0);
include("connection.php");
$id = $_GET['id'];

$query="select * from notice where tittle='$id'";
$data=mysqli_query($conn, $query);
$total=mysqli_num_rows($data);
($result=mysqli_fetch_assoc($data));
    
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
        body{
             
        }
</style>
    </head>
    <body>

        <form method="post" action="notice.php">
         <h1>Update Notice</h1>   
        <label for="tittle for notice">Tittle </label>
        <input type="text" value="<?php echo $result ['tittle'];?>"name="tittle"required><br><br>
        <label for="date">DATE </label>
        <input type="date"value="<?php echo $result ['date'];?>" name="date"required><br><br>
        <label for="notice">Details </label>
        <input type="text"value="<?php echo $result ['details'];?>" name="details"required><br><br>
        <input type="submit" value="update"name=submit><br>
    


    
        </form>
    </body>
    </html>

    <?php
    error_reporting(0);
include("connection.php");
if($_post['notice'])
{
$tittle = $_POST['tittle'];
$date = $_POST['date'];
$details = $_POST['details'];
}

 $query ="update notice set tittle='$tittle',date='$date',details='$details'";

$data=mysqli_query($conn,$query);

mysqli_close($conn);
if($data)
{
    //echo
    ?>
          <meta htttp-equip = "refresh" content = "0; url = http://localhost/pratiksha/display.php"/>

    <?php
}
else{
    echo "failed";
}

//echo " insertion Successfull ! <a href='home.html'>Go to Home </a>";

?>










    
   
