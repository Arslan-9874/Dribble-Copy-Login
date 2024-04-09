<?php 

$servername = "localhost";
$username ="root";
$password = "";
$dbname = "p1";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
    die('Could not connect to the Database: ' .  mysqli_connect_error());
}

?>