<?php

require 'partials/_dbconnect.php';
session_start();

if(!isset($_SESSION['loggedIn']) OR !($_SESSION['loggedIn'] == 'yes'))
{
    header('location: index.php');
    exit;
}
$userId = $_SESSION['userId'];
$sql = "SELECT * FROM `user_cat` WHERE `sno` = '$userId'";
$result_signSelect = mysqli_query($conn, $sql);
if(mysqli_num_rows($result_signSelect) != 0)
{
    header('location: homepage.php');
    exit;
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up - Select Favorite Categories</title>
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
    <link rel="stylesheet" href="css/signUpSelect/style.css">

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

        #checkbox-tile-1,
        #checkbox-tile-2,
        #checkbox-tile-3 {
            width: 25vw;
        }

        @media (max-width: 900px) {
            #mainForm {
                flex-direction: column;
                align-items: center;
            }

            .checkbox-wrapper-16 {
                width: 75vw;
            }

            .checkbox-wrapper {
                width: 100%;
            }

            #checkbox-tile-1,
            #checkbox-tile-2,
            #checkbox-tile-3 {
                width: 75vw;
            }

            .checkbox-wrapper-16 .checkbox-input:checked+.checkbox-tile .checkbox-icon {

                position: relative;
                bottom: 1rem;
                animation: selected 0.5s ease;
                width: 80vw;
            }

            .checkbox-wrapper-16 {
                margin: 1rem 0;
            }

            #mainHeading {
                margin-left: 2rem !important;
                margin-right: 1rem !important;
            }

            @keyframes selected {
                0% {
                    width: 75vw;
                    bottom: 0rem;
                }

                100% {
                    width: 80vw;
                    bottom: 1rem;
                }
            }

            @keyframes unselected {
                0% {
                    width: 80vw;
                    bottom: 1rem;
                }

                100% {
                    width: 75vw;
                    bottom: 0rem;
                }
            }

        }
    </style>
</head>

<body>

    <div class="d-flex align-items-center">
        <p class="fw-bold fs-2 mx-5 mt-5 mb-3 ps-4 lobster-regular text-danger" id="mainHeading">Triple</p>
        <a href="partials/_handleSignUpSelectBacktrack.php"><button class="btn btn-outline-dark mt-5 mb-3 p-3">
            &lt;</button></a>

    </div>
    <div class="container" style="width:80vw">
        <div class="mb-4 text-center">
            <h2 class="fw-bold display-6">What brings you to Triple?</h2>
            <p class="text-body-secondary fs-5">Select the options that best descibe your needs. Don't worry, you can
                explore
                other options later.</p>
            <p class="text-body-secondary fs-5 fw-bold">You can select multiple.</p>
        </div>
    </div>

    <div>
        <form action="partials/_handleSignUpSelect.php" method="post" class="d-flex justify-content-center" id="mainForm">
            <div class="checkbox-wrapper-16 mx-3">
                <label class="checkbox-wrapper" for="card-1">
                    <input type="checkbox" class="checkbox-input" id="card-1" value="WebDev" name="interestCategories[]" onclick="myFunction()" />
                    <span class="checkbox-tile" id="checkbox-tile-1">
                        <span class="checkbox-icon">
                            <img src="img/c-1.jpeg" class="img-fluid rounded-2 cards-selected" alt="Web Development">
                        </span>
                        <span class="checkbox-label fw-bold fs-6 my-2">Web Development</span>
                        <p id="card-content-1" style="display:none" class="mx-2 text-center">Learn web development: HTML
                            CSS, JavaScript. Practice projects. Use online resources. Join communities. Embrace
                            continuous learning.</p>
                    </span>
                </label>
            </div>
            <div class="checkbox-wrapper-16 mx-4">
                <label class="checkbox-wrapper" for="card-2">
                    <input type="checkbox" class="checkbox-input" id="card-2" value="DataDev" name="interestCategories[]" onclick="myFunction()" />
                    <span class="checkbox-tile" id="checkbox-tile-2">
                        <span class="checkbox-icon">
                            <img src="img/c-2.jpeg" class="img-fluid rounded-2" alt="">
                        </span>
                        <span class="checkbox-label fw-bold fs-6 my-2">Data Analytics</span>
                        <p id="card-content-2" style="display:none" class="mx-2 text-center">Master data analytics:
                            Learn Python, SQL, statistics. Analyze data sets. Gain insights. Utilize visualization
                            tools. Engage with data communities.</p>
                    </span>
                </label>
            </div>
            <div class="checkbox-wrapper-16 mx-3">
                <label class="checkbox-wrapper" for="card-3">
                    <input type="checkbox" class="checkbox-input" id="card-3" value="GameDev" name="interestCategories[]" onclick="myFunction()" />
                    <span class="checkbox-tile" id="checkbox-tile-3">
                        <span class="checkbox-icon">
                            <img src="img/c-3.jpeg" class="img-fluid rounded-2" alt="">
                        </span>
                        <span class="checkbox-label fw-bold fs-6 my-2">Game Development</span>
                        <p id="card-content-3" style="display:none" class="mx-2 text-center">Embark on game development:
                            Study Unity, C#, game design principles. Create prototypes. Experiment. Join game dev
                            communities. Keep innovating.</p>
                    </span>
                </label>
            </div>
            <button class="btn btn-outline-primary mt-5 mb-3 p-3 px-4"
                style="position: absolute; right: 9.5vw; top: 0.0vh" type="submit">Finish</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        function myFunction() {
            var checkBox = document.getElementById("card-1");
            var text = document.getElementById("card-content-1");
            if (checkBox.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }

            var checkBox = document.getElementById("card-2");
            var text = document.getElementById("card-content-2");
            if (checkBox.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }

            var checkBox = document.getElementById("card-3");
            var text = document.getElementById("card-content-3");
            if (checkBox.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        }
    </script>

</body>

</html>