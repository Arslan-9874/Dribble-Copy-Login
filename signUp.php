<?php 

require 'partials/_dbconnect.php';
session_start();

if (isset($_SESSION['loggedIn']) AND ($_SESSION['loggedIn'] == 'yes')) {
    header('location: homepage.php');
    exit;
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Triple - Sign Up</title>
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

    <style>
        .lobster-regular {
            font-family: "Lobster", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .concert-one-regular {
            font-family: "Concert One", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        #mainContainer {
            min-height: 100vh;
            width: 100vw;
        }

        #mainleftCol {
            width: 45vw;
            background-color: rgb(246 205 125) !important;
            min-height: 100vh;
        }

        #mainrightCol {
            width: 55vw;
        }


        #Portraitheading {
            display: none !important;
        }

        .Portraitheading {
            display: none !important;
        }

        @media (max-width: 650px) {
            #mainleftCol {
                display: none !important;
            }

            #mainrightCol {
                width: 100vw;
            }

            #mainForm {
                text-align: center !important;
            }

            #Portraitheading {
                display: block;
                padding-bottom: 0px !important;
                margin-left: 1rem !important;
            }

            .Portraitheading {
                display: block;
                padding-bottom: 0px !important;
                margin-left: 1rem !important;
            }

            #Alreadymember,
            #Alreadymember p {
                margin-top: 0.5rem !important;
                margin-bottom: 1rem !important;

            }

            #mainrightCol {
                justify-content: flex-start !important;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid bg-light p-0 d-flex" id="mainContainer">

        <div class="container bg-dark m-0 d-flex flex-column justify-content-evenly" id="mainleftCol">
            <div>
                <h1 class="lobster-regular mx-5 mt-5 mb-2 text-dark">Triple</h1>
                <p class="font-em mx-5 fs-4 text-secondary-emphasis"><em>New Coding Techniques from the Top
                        Programmers in the World.</em></p>
            </div>
            <div>
                <img src="img/lg-1.png" class="img-fluid m-0 p-0">
            </div>
            <div>
                <p class="mx-5">Art by <a href="https://petertarka.com/" class="text-dark" target="_blank">Peter
                        Tarka</a></p>
            </div>
        </div>
        <div class="container bg-light m-0 px-5 d-flex flex-column justify-content-between" id="mainrightCol">
            <div class="Portraitheading">
                <h1 class="lobster-regular mx-5 mt-5 text-dark" id="Portraitheading">Triple</h1>
            </div>
            <div class="container-fluid text-end mt-4 me-5" id="Alreadymember">
                <p>Already a member?
                    <strong><a href="index.php#LogIn"> Sign In </a></strong>
                </p>
            </div id="mainForm">
            <div>
                <?php

                if (isset($_GET['error']) && $_GET['error'] == 'userexists') {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> User with the same Email already exists, Please try again with a unique email.
                    <a href="signUp.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                </div>';
                }
                if (isset($_GET['error']) && $_GET['error'] == 'somethingwentwrong') {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong> Something Went Wrong Please try Again.
                    <a href="signUp.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                </div>';

                }
                if (isset($_GET['error']) && $_GET['error'] == 'somethingwentwrong1') {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong>
                    <a href="signUp.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                </div>';

                }
                if (isset($_GET['error']) && $_GET['error'] == 'usernamealreadytaken') {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error.</strong> The Username you entered is already taken.
                    <a href="signUp.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
                </div>';
                }
                ?>
            </div>
            <div style="width: 100%">
                <h2 class="fw-bold align-self-start p-3">Sign Up to Triple</h2>
                <div class="px-3" id="username_availability_response"></div>
                <form class="p-3" action="partials/_handleSignUp.php" method="POST">

                    <div class="row">
                        <div class="mb-3 col">
                            <label for="inputName" class="form-label fw-bold">Name</label>
                            <input type="text" class="form-control" id="inputName" placeholder="John" name="inputName"
                                required>
                        </div>
                        <div class="mb-3 col">
                            <label for="inputUsername" class="form-label fw-bold">Username</label>
                            <input type="text" class="form-control" id="inputUsername" name="inputUsername"
                                placeholder="John1234" autocomplete="off" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label fw-bold">Email address</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Example@gmail.com"
                            name="inputEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label fw-bold">Password</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="6+ characters"
                            minlength="6" name="inputPassword">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="termsCheck" name="termsCheck" value="1"
                            required>
                        <label class="form-check-label" for="termsCheck">Creating an account means you're
                            okay with our <a href="policies.php" target="_blank">Terms of Service</a>.<a
                                href="policies.php#PP" target="_blank">Privacy Policy</a>, and
                            our default <a href="policies.php#ND" target="_blank">Notification Details.</a></label>
                    </div>
                    <button type="submit" class="btn btn-primary px-5 align-self-start mx-3">Create
                        Account</button>
                    <div class="container">
                        <p class="m-0 mt-3 text-muted">This site is protected by reCAPTCHA and the Google</p>
                        <p class="m-0 text-muted"><a href="policies.php#PP" target="_blank">Privacy Policy </a> and <a
                                href="policies.php" target="_blank">terms of
                                Service</a> apply.</p>
                    </div>
                </form>
            </div>
            <div class="my-5">
                <p></p>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $("#inputUsername").keyup(function () {
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