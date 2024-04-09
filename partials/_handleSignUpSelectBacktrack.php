<?php 

require "_dbconnect.php";
session_start();

$userId = $_SESSION['userId'];
$sql = "DELETE FROM `user_img` WHERE `sno` = '$userId'";
$result_dropUserImg = mysqli_query($conn, $sql);

if($result_dropUserImg)
{
    header('location: ../signUpWelcome.php');
    exit;
}
else
{
    echo "Something Went Wrong";
    header('location: Refresh:5 ; ../SignUpSelect.php');
    exit;
}
?>