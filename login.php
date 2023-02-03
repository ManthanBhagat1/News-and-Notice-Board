<?php

$name = $_POST['usermane'];
$password=$_POST['password'];
$st=$_POST['status'];

$servername = "localhost";

$username="root";

$pass ="";

$db="mca";

$conn = mysqli_connect($servername, $username, $pass, $db);

if(!$conn)

{

die("Error in Connection");

}

else

{

//echo "Connection Established";

}

    $sql ="select * from login ";


    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
       header("Location:display.php");
       exit;
        }
     else {
        echo "Login Failed";
    }


mysqli_close($conn);
?>