<?php

require 'partials/_dbconnect.php';
session_start();
if (!isset($_SESSION['loggedIn']) or !($_SESSION['loggedIn'] == 'yes')) {
    header('location: index.php');
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account - User Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Lobster&family=Tilt+Prism&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Concert+One&family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/index/style.css">

    <style>
        .lobster-regular {
            font-family: "Lobster", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .exo-2-uniquifier {
            font-family: "Exo 2", sans-serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
        }

        .concert-one-regular {
            font-family: "Concert One", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        #mainContainer {
            min-height: 70vh !important;
        }

        @media (max-width: 1000px) {
            #mainContainer {
                min-height: 50vh !important;
            }

            #userImg {
                width: 30vw !important;
                height: 30vw !important;
            }
        }

        @media (max-width: 700px) {
            #userImg {
                width: 50vw !important;
                height: 50vw !important;
            }
        }
    </style>
</head>

<body>

    <?php

    require "partials/_header.php"

        ?>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Enter your changes</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="partials/_handleUserProfileEdit.php">

                        <div class="form-group d-flex justify-content-center align-items-center">
                            <label for="nameEdit" class="fw-semibold fs-5 col-3">Name:</label>
                            <input type="text" class="form-control mx-2 my-3" id="nameEdit" name="nameEdit" Required
                                placeholder="<?php echo $_SESSION['name'] ?>">

                        </div>
                        <div class="" id="username_availability_response"></div>
                        <div class="form-group d-flex justify-content-center align-items-center">
                            <label for="usernameEdit" class="fw-semibold fs-5 col-3">Username:</label>
                            <input type="text" class="form-control mx-2 my-3" id="usernameEdit" name="usernameEdit"
                                autocomplete="off" Required placeholder="<?php echo $_SESSION['username'] ?>">

                        </div>
                        <div class="form-group d-flex justify-content-center align-items-center">
                            <label for="emailEdit" class="fw-semibold fs-5 col-3">Email:</label>
                            <input type="text" class="form-control mx-2 my-3" id="emailEdit" name="emailEdit" disabled
                                placeholder="<?php echo $_SESSION['email'] ?>">

                        </div>
                        <div class="form-group d-flex justify-content-center align-items-center">
                            <label for="countryEdit" class="fw-semibold fs-5 col-3">Country:</label>
                            <input type="text" class="form-control mx-2 my-3" id="countryEdit" name="countryEdit"
                                disabled placeholder="<?php echo $_SESSION['country'] ?>">

                        </div>


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center" id="mainContainer">

        <div class="my-5" id="subContainer">

            <?php

            if (isset($_GET['error']) and $_GET['error'] == 'success') {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success.</strong> Edits were made successfully.
                <a href="userProfile.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
              </div>';
            }
            if (isset($_GET['error']) and $_GET['error'] == 'usernamealreadytaken') {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error.</strong> The Username you entered is already taken.
                <a href="userProfile.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
              </div>';
            }
            if (isset($_GET['error']) and $_GET['error'] == 'notsuccess') {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error.</strong> Something Went Wrong, Please try again.
                <a href="userProfile.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
              </div>';
            }

            $username = $_SESSION['username'];
            $userId = $_SESSION['userId'];

            echo '<h2 class="fw-bold display-6">Welcome, ' . $username . '</h2>';
            echo '<img src="img/users/' . $userId . '.jpg" alt="User Image" class="img-fluid rounded-circle my-3" style="width: 15vw" id="userImg">';

            $sql = "SELECT * FROM user_details WHERE `sno` = $userID";
            $result_userSearch = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result_userSearch)) {
                while ($row = mysqli_fetch_assoc($result_userSearch)) {
                    $name = $row['name'];
                    $username = $row['username'];
                    $email = $row['email'];
                }
            }

            $sql = "SELECT * FROM user_img WHERE `sno` = $userID";
            $result_userSearchcountry = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result_userSearchcountry)) {
                while ($row = mysqli_fetch_assoc($result_userSearchcountry)) {
                    $country = $row['country'];
                }
            }
            ?>
            <div class="row">
                <div class="col text-end">
                    <p class="text-dark fs-5 my-3 fw-semibold">Your name:</p>
                    <p class="text-dark fs-5 my-3 fw-semibold">Your username:</p>
                    <p class="text-dark fs-5 my-3 fw-semibold">Your email:</p>
                    <p class="text-dark fs-5 my-3 fw-semibold">Your country:</p>
                </div>
                <div class="col text-start">
                    <?php

                    echo '<p class="text-dark fs-5 my-3 fw-semibold" id="iname">' . $name . '</p>';
                    echo '<p class="text-dark fs-5 my-3 fw-semibold" id="iusername">' . $username . '</p>';
                    echo '<p class="text-dark fs-5 my-3 fw-semibold" id="iemail">' . $email . '</p>';
                    echo '<p class="text-dark fs-5 my-3 fw-semibold" id="icountry">' . $country . '</p>';


                    ?>
                </div>
            </div>
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary fs-6
                px-5 my-2 edit" id="<?php $_SESSION['userId']; ?>">Edit</button>
        </div>

    </div>

    <?php

    require "partials/_footer_semi.php";
    require "partials/_footer.php";

    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $("#usernameEdit").keyup(function () {
                var username = $(this).val().trim();
                if (username != '') {
                    $.ajax({
                        url: 'partials/_username_availability_checker.php',
                        type: 'post',
                        data: { username: username },
                        success: function (response) {
                            $('#username_availability_response').html(response);
                        }
                    });
                } else {
                    $("#username_availability_response").html("");
                }
            });
        });
    </script>
</body>

</html>