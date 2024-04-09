<?php

require 'partials/_dbconnect.php';
session_start();

if(!isset($_SESSION['loggedIn']) OR !($_SESSION['loggedIn'] == 'yes'))
{
    header('location: index.php');
    exit;
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Triple - HomePage</title>
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
            width: 65vw;
        }

        @media (max-width: 1000px)
        {
            #userImg
            {
                width: 30vw !important;
                height: 30vw !important;
            }
        }
        @media (max-width: 700px)
        {
            #userImg
            {
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

    <div class="container text-center" id="mainContainer">

        <div class="my-5">

            <?php 
                $username = $_SESSION['username'];
                $userId = $_SESSION['userId'];

                echo '<h2 class="fw-bold display-6">Welcome, '. $username .'</h2>';
                echo '<img src="img/users/'.$userId.'.jpg" alt="User Img" class="img-fluid rounded-circle my-3" style="width: 15vw; height: 15vw" id="userImg">'
            ?>
            <p class="text-secondary fs-5 my-3 fw-semibold">Please Feel Free to Explore Our Website</p>
            <p class="text-secondary fs-5 my-3 fw-semibold"><em>This Website is a Project and Not a fully functional Website, Please keep that in mind.</em></p>
            <p class="text-secondary fs-5 my-3 fw-semibold">More pages will be added soon.  

            <h2 class="text-secondary fs-5 my-3 fw-semibold">Thank you for visiting this Website, We hope you have a wonderful day.</h2>
        </div>

    </div>

    <?php

    require "partials/_footer_semi.php";
    require "partials/_footer.php";


        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>