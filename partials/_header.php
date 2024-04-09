<?php
require '_dbconnect.php';
?>

<link href='https://unpkg.com/css.gg@2.0.0/icons/css/search.css' rel='stylesheet'>

<style>
    #mainSearch {
        width: 10vw;
    }

    #mobile_profile {
        display: none;
    }

    #mobile_logout {
        display: none;
    }

    @media only screen and (max-width: 1000px) {
        #mainSearch {
            width: 85vw;
        }

        #profile {
            display: none;
        }

        #mobile_profile {
            display: block;
        }
        #mobile_logout {
            display: block;
        }
    }

    .nav-item a:hover {
        color: #0d6efd !important;
    }
</style>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand lobster-regular ms-4 fs-4" href="homepage.php">Triple</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active fw-bold text-secondary" aria-current="page"
                        href="coming_soon.php">Inspiration</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fw-bold text-secondary" aria-current="page" href="coming_soon.php">Find
                        Work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fw-bold text-secondary" aria-current="page" href="coming_soon.php">Learn
                        to Code</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fw-bold text-secondary" aria-current="page" href="coming_soon.php">Go
                        Pro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fw-bold text-secondary" aria-current="page" href="coming_soon.php">Hire
                        Programmers</a>
                </li>
                <div id="mobile_profile">
                    <a class="nav-link active fw-bold text-secondary" aria-current="page" href="userProfile.php">See
                        Profile</a>
                </div>

            </ul>
            <form class="d-flex" role="search" action="homepage.php">
                <input class="form-control me-2" id="mainSearch" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="gg-search"></i></button>
            </form>
            <div id="mobile_logout" class="my-3">
                <a href="partials/_handleLogout.php"><button class="btn btn-outline-danger me-2">Logout</button></a>
            </div>

            <div id="profile">

                <?php

                $userID = $_SESSION['userId'];

                echo '<a href="userProfile.php" class="ms-4 me-3"><img src="img/users/' . $userID . '.jpg" alt="User Profile"
                class="rounded-circle img-fluid" style="width: 3.5vw" 
                aria-expanded="false"></a>'

                    ?>



                <a href="partials/_handleLogout.php"><button class="btn btn-outline-danger me-2">Logout</button></a>
            </div>
        </div>
    </div>
</nav>