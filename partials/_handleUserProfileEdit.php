<?php 

require "_dbconnect.php";
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username = mysqli_real_escape_string($conn, trim($_POST['usernameEdit']));
    $name = mysqli_real_escape_string($conn, trim($_POST['nameEdit']));
    $userId = $_SESSION['userId']; 
    $query    = "SELECT count(*) as usercount FROM `user_details` WHERE username = '".$username."'";
    $result   = mysqli_query($conn, $query); 
    $row      = mysqli_fetch_array($result);

    if ($row['usercount'] == 0) {
            $sql = "UPDATE `user_details` SET `name`='$name', `username`='$username' WHERE `sno` = '$userId'";
            $result_userEdit = mysqli_query($conn, $sql);
            if($result_userEdit)
            {
                $_SESSION['name'] = $name;
                $_SESSION['username'] = $username;
                header('location: ../userProfile.php?error=success');
                exit;
            }
            else
            {
                header('location: ../userProfile.php?error=notsuccess');
                exit;
            }
        } else {
            header('location: ../userProfile.php?error=usernamealreadytaken');
            exit;
    }
}

?>