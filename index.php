<?php

require 'partials/_dbconnect.php';
session_start();

if (isset($_SESSION['loggedIn']) and ($_SESSION['loggedIn'] == 'yes')) {
    header('location: homepage.php');
    exit;
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to Triple</title>
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
    </style>
</head>

<body>

    <?php

    require "partials/_header_temp.php";


    if (isset($_GET['error']) and $_GET['error'] == "usernotexist") {
        echo '<div class="alert alert-danger alert-dismissible fade show m-4" role="alert">
            <strong>Email Not Found!</strong> The Email you have entered is not registered with us, Please check and try again.
            <a href="index.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
          </div>';
    }
    if (isset($_GET['error']) and $_GET['error'] == "wrongpass") {
        echo '<div class="alert alert-danger alert-dismissible fade show m-4" role="alert">
            <strong>Error!</strong> The password you have entered is incorrect, Please check and try again.
            <a href="index.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
          </div>';
    }
    if (isset($_GET['error']) and $_GET['error'] == "somethingwentwrong") {
        echo '<div class="alert alert-danger alert-dismissible fade show m-4" role="alert">
            <strong>Error!</strong> Something Went Wrong, Please try again.
            <a href="index.php"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></a>
          </div>';
    }
    ?>
    <div class="mx-auto mt-4" style="width: 95vw;">
        <div class="row mx-auto">
            <!-- DEMO 2 Item-->
            <div class="col-lg-12 mb-3 mb-lg-0">
                <div class="hover hover-2 text-white rounded"><img src="img/index-main.jpeg">
                    <div class="hover-overlay"></div>
                    <div class="hover-2-content px-5 py-4">
                        <h3 class="hover-2-title text-uppercase font-weight-bold mb-0"> <span
                                class="font-weight-light">Code with </span>Us</h3>
                        <p class="hover-2-description text-uppercase mb-0">Learn how to Code with Us.
                            <br>With a chance to work with industry professionals.
                        </p>
                    </div>
                </div>
            </div>

            <div class="container col-xl-10 col-xxl-8 px-4 py-5 d-flex justify-content-center" id="logInContainer"
                style="height: 70vh">
                <div class="row align-items-center g-lg-5 py-5" id="logInSubContainer">
                    <div class="col-lg-7 text-center text-lg-start">
                        <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3" id="logInTitle">Log In To Continue
                        </h1>
                        <p class="col-lg-10 fs-5" id="logInDescription">Welcome to Triple! Dive into coding with
                            interactive tutorials. From Python to Java, master the essentials. Build real projects, from
                            simple scripts to full-stack web apps. Engage with a vibrant community, share insights, and
                            level up your skills. Start your coding journey today and unleash your potential!</p>
                    </div>
                    <div class="col-md-10 mx-auto col-lg-5" id="LogIn">
                        <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" action="partials/_handleLogin.php"
                            method="post">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="userEmail" name="userEmail"
                                    placeholder="name@example.com" require>
                                <label for="userEmail">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="userPassword" name="userPassword"
                                    placeholder="Password" required>
                                <label for="userPassword">Password</label>
                            </div>
                            <div class="checkbox mb-3">
                            </div>
                            <button class="w-100 btn btn-lg btn-primary my-2" type="submit">Log In</button>
                        </form>
                    </div>
                </div>
            </div>

            <?php

            require "partials/_footer.php"

                ?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>
</body>

</html>