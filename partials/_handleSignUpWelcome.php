<?php
require "_dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $userCountry = $_POST['country'];

    $useremail = $_SESSION['email'];
    $sql = "SELECT * FROM `user_details` WHERE `email` = '$useremail'";
    $result_userinfo = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result_userinfo)) {
        $_SESSION['userId'] = $row['sno'];
    }
    $userID = $_SESSION['userId'];
    $file_name = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    $folder = '../img/users/' . $userID . ".jpg";
    $country = $_POST['country'];

    move_uploaded_file($tmp_name, $folder);

    $sql = "INSERT INTO `user_img`(`sno`, `folder_path`, `country`) VALUES ('$userID','$folder','$country')";
    $result_img = mysqli_query($conn, $sql);

    $_SESSION['country'] = $country;
    header("location: ../signUpSelect.php");
    exit;

}

?>