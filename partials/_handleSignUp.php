<?php

require "_dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['inputName'];
    $username = $_POST['inputUsername'];
    $email = $_POST['inputEmail'];
    $password = $_POST['inputPassword'];
    $termsCheck = $_POST['termsCheck'];

    $name = str_replace("<", "&lt;", $name);
    $name = str_replace(">", "&gt;", $name);

    $username = str_replace("<", "&lt;", $username);
    $username = str_replace(">", "&gt;", $username);

    $email = str_replace("<", "&lt;", $email);
    $email = str_replace(">", "&gt;", $email);

    $sql = "SELECT * FROM `user_details` WHERE `email` = '$email'";
    $result_usercheck = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result_usercheck) > 0) {
        header('location: ../signUp.php?error=userexists');
        exit;

    } else {
        $query = "SELECT count(*) as usercount FROM `user_details` WHERE username = '" . $username . "'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);

        if ($row['usercount'] == 0) {

            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `user_details`(`name`, `username`, `email`, `password`) VALUES ( '$name', '$username', '$email', '$hash')";
            $result_userInsert = mysqli_query($conn, $sql);

            if ($result_userInsert) {
                session_start();
                $_SESSION['name'] = "$name";
                $_SESSION['username'] = "$username";
                $_SESSION['email'] = "$email";
                $_SESSION['loggedIn'] = "yes";
                header('location: ../signUpWelcome.php');
                exit();
            }
            header('location: ../signUp.php?error=somethingwentwrong');
            exit;
        }
        else
        {
            header('location: ../signUp.php?error=usernamealreadytaken');
            exit;
        }
    }
}

?>