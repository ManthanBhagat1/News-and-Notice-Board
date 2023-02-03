<?php
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
?>