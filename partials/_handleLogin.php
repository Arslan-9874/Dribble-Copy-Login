<?php

require "_dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['userEmail'];
    $password = $_POST['userPassword'];

    $sql = "SELECT * FROM `user_details` WHERE `email` = '$email'";
    $result_userlogin = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result_userlogin) > 0) {
        while ($row = mysqli_fetch_assoc($result_userlogin)) {
            if (password_verify($password, $row['password'])) {
                session_start();
                $_SESSION['loggedIn'] = 'yes';
                $_SESSION['userId'] = $row['sno'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];

                $userId = $row['sno'];

                $sql = "SELECT * FROM `user_img` WHERE `sno` = '$userId'";
                $result_userlogincountry = mysqli_query($conn, $sql);
                if($result_userlogincountry)
                {
                    while ($row = mysqli_fetch_assoc($result_userlogincountry)) {
                        $_SESSION['country'] = $row['country'];
                    }
                }

                header('location: ../homepage.php');
                exit;
            } else {
                header('location: ../index.php?error=wrongpass');
                exit;
            }
        }
    } else {
        header('location: ../index.php?error=usernotexist');
        exit;
    }
    header('location: ../index.php?error=somethingwentwrong');
    exit;
}

?>