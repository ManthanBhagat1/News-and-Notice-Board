<?php
$servername = "localhost";

$username="root";

$pass ="";




$conn = mysqli_connect($servername, $username, $pass);

if(!$conn)

{

die("Error in Connection");

}

else

{

echo "Connection Established";


}

$sql="create database mydbc";
if(mysqli_query($conn ,$sql))
{
    echo"database created";
}
 else 
 {
    echo "error".mysqli_error($conn);
 }
 mysqli_close($conn);
 $dbname="mydbc";
 $conn= mysqli_connect($servername,$username,$pass,$dbname);
 if(!$conn)
 {
    die("connection failed");
 }



$sql="create table FYMCA(rollno INT(10)NOT NULL,name VARCHAR(20) NOT NULL, address varchar(20) NOT NULL, phone int(11) NOT NULL)";
if(mysqli_query($conn , $sql))
{
    echo   " table created";
}
else
{
    echo "not created";
}
$sql="insert into  FYMCA(rollno,name, address, phone)values(1,'manthan','dhotra',1234567),(2,'aman','bhagat',1234445)";
if(mysqli_query($conn , $sql))
{
    echo   " table created";
}
else
{
    echo "not created";
}

?>











