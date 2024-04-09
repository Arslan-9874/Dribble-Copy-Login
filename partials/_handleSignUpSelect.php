<?php

require "_dbconnect.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] = 'POST') {

    $webDev = 0;
    $dataDev = 0;
    $gameDev = 0;

    if (isset($_POST['interestCategories'])) {
        $categories = $_POST['interestCategories'];
        if (empty($categories)) {
            $webDev = 0;
            $dataDev = 0;
            $gameDev = 0;
        } else {
            $N = count($categories);
            foreach ($categories as $selectedCat) {

                if ($selectedCat == "WebDev") {
                    $webDev = 1;
                }
                if ($selectedCat == "DataDev") {
                    $dataDev = 1;
                }
                if ($selectedCat == "GameDev") {
                    $gameDev = 1;
                }
            }

        }
        $userId = $_SESSION['userId'];
        $sql = "INSERT INTO `user_cat`(`sno`, `WebDev`, `DataDev`, `GameDev`) VALUES ('$userId', '$webDev', '$dataDev', '$gameDev')";
        $result_categoryinsert = mysqli_query($conn, $sql);

        if ($result_categoryinsert) {
            header('location: ../emailVerification.php');
            exit;
        } else {
            echo '<alert>Something Went Wrong!</alert>';
            header('location: ../index.php');
            exit;
        }
    }



    $userId = $_SESSION['userId'];
    $sql = "INSERT INTO `user_cat`(`sno`, `WebDev`, `DataDev`, `GameDev`) VALUES ('$userId', '$webDev', '$dataDev', '$gameDev')";
    $result_categoryinsert = mysqli_query($conn, $sql);

    if ($result_categoryinsert) {
        header('location: ../emailVerification.php');
        exit;
    } else {
        echo '<alert>Something Went Wrong!</alert>';
        header('location: ../index.php');
        exit;
    }

}
?>