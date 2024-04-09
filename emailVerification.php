<?php 

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
    <title>Account - Email Verification</title>
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
    $email = $_SESSION['email'];
    require "partials/_header.php";
    ?>

    <div class="container text-center" style="width: 65vw">
        <div class="my-5">
            <h2 class="fw-bold display-6">Welcome! Let's Create your profile</h2>
            <img src="img/emailSent.png" alt="Email Sent" class="img-fluid" style="width: 15vw">
            <p class="text-secondary fs-5 my-3 fw-semibold">Please verify your email address. We've sent a confirmation
                email
                to:</p>
            <?php

            
            echo '<p class="fw-bold text-dark fs-5">' . $email . '</p>'

                ?>
            <p class="text-secondary fs-5 my-3 fw-semibold">Click the confirmation link in that email to begin using
                Triple.</p>
            <p class="text-secondary fs-5 my-3 fw-semibold">Didn't receive the email? Check your Spam folder, it may
                have
                been
                caught by a filter. If you still don't see it, you Can <a href="emailVerification.php" class="text-decoration-none">resend
                    the confirmation email.</a>

                    <h2 class="text-secondary fs-5 my-3 fw-semibold">Proceed to <a href="homepage.php" class="text-decoration-none">Home</a></h2>
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