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
    <title>Triple - Policies</title>
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

        #mainContainer{
            min-height: 85vh !important;
        }
    </style>
</head>

<body>

    <?php

    require "partials/_header_temp.php";

    ?>

    <div class="container d-flex flex-column justify-content-center align-items-center " id="mainContainer">
        <div class="my-3 mx-2 p-2" id="TOS">
            <h2 class="text-dark fw-bold">Terms Of Service</h2>
            <p class="text-secondary fw-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam ratione nulla nemo nostrum asperiores! Velit minus animi mollitia nobis optio laboriosam asperiores, quo ullam corrupti reprehenderit quas quod vitae qui dolorem facere eligendi! Porro voluptas eveniet ratione maiores eligendi quod nobis explicabo itaque nisi. Voluptatem harum ducimus rerum incidunt voluptatibus impedit recusandae, quas, quaerat enim non vitae magni officiis doloribus repudiandae voluptas, obcaecati sunt veritatis? Eos architecto nam dolores! Doloremque minima soluta corrupti quas explicabo. Magni odit cum ducimus eos vero necessitatibus quidem error eaque dolorem, voluptatem quod eligendi perferendis praesentium, porro doloremque temporibus id eveniet iusto, neque velit ipsum. Saepe, doloribus. Porro odit voluptates vero tempore voluptatibus aliquid maiores asperiores quidem eos iure ipsa in accusantium dolorem, sint unde deleniti error omnis iusto debitis iste quaerat magni. Aliquam quisquam quas, magni accusantium voluptatibus aut laboriosam nihil tempore unde odit vitae in. Quidem pariatur veritatis nostrum autem dolores repellat nulla, voluptate recusandae praesentium accusamus tenetur ad neque facilis? Molestias numquam eum obcaecati, accusamus placeat nobis itaque sit earum consequatur voluptas officia incidunt non, dolore beatae quam quidem quia quos? Corporis quis voluptas dolorem explicabo et aliquid at. Nulla quam facilis saepe repellendus recusandae quos excepturi, odit ex neque laudantium suscipit laborum natus non assumenda sit odio minus eius accusamus quod tempore numquam? Quod adipisci aspernatur asperiores rerum iure ut sit consequuntur repudiandae omnis possimus cumque totam commodi delectus magnam doloribus, deserunt modi. Sit officia cum molestias omnis obcaecati earum vitae reprehenderit consequatur a dignissimos corrupti dolores ducimus optio qui atque voluptate, natus debitis quibusdam odio mollitia, reiciendis rerum? In fugit mollitia tenetur, voluptatem ab quos deleniti odit magnam laborum rerum, repellat autem. Voluptate soluta veritatis, doloribus illum quam animi itaque numquam autem blanditiis consequatur recusandae reiciendis placeat in voluptatibus possimus deserunt? Natus, dignissimos totam. Animi eius dolor odit ipsum aliquam delectus eligendi illum incidunt. Sit quos, iste facilis assumenda ratione reiciendis reprehenderit debitis rerum totam quas molestiae tempora labore quidem officia neque autem voluptates adipisci eaque consectetur, ipsum perspiciatis, fuga voluptatem placeat! Ex rem cumque placeat esse quisquam at deleniti sint, hic fugit, delectus repellat nostrum excepturi praesentium, aliquid ut eum accusamus! Ipsam porro alias magni iure! Maiores libero sequi animi eos iusto iste sed similique id architecto velit laborum praesentium obcaecati incidunt veniam quis odit autem fugit sint, voluptates ex adipisci! Praesentium soluta nemo, fugit, nostrum natus perspiciatis architecto iure atque, necessitatibus consequatur expedita? Facere aperiam reprehenderit, assumenda officia voluptatem excepturi voluptatibus suscipit expedita quia nulla beatae eum voluptatum necessitatibus omnis modi aliquid dolorem delectus doloribus accusantium incidunt hic minima libero culpa! Sapiente consectetur vitae necessitatibus iste officiis quidem error, neque libero. Beatae expedita veniam cupiditate est dicta numquam laudantium sunt sed tenetur rerum hic enim cum, vitae velit unde in architecto nam deleniti porro quod soluta dolor. Doloribus quaerat corporis totam provident suscipit voluptatibus voluptatum commodi dolore repellat libero, voluptas a in, quisquam exercitationem corrupti soluta labore itaque voluptatem enim natus. Recusandae numquam, hic perspiciatis reiciendis laboriosam inventore sint nam sed, cupiditate odio quis laborum explicabo est officia!</p>
            <hr>
        </div>
        <div class="mx-2 p-2" id="PP">
            <h2 class="text-dark fw-bold">Privacy Policy</h2>
            <p class="text-secondary fw-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam ratione nulla nemo nostrum asperiores! Velit minus animi mollitia nobis optio laboriosam asperiores, quo ullam corrupti reprehenderit quas quod vitae qui dolorem facere eligendi! Porro voluptas eveniet ratione maiores eligendi quod nobis explicabo itaque nisi. Voluptatem harum ducimus rerum incidunt voluptatibus impedit recusandae, quas, quaerat enim non vitae magni officiis doloribus repudiandae voluptas, obcaecati sunt veritatis? Eos architecto nam dolores! Doloremque minima soluta corrupti quas explicabo. Magni odit cum ducimus eos vero necessitatibus quidem error eaque dolorem, voluptatem quod eligendi perferendis praesentium, porro doloremque temporibus id eveniet iusto, neque velit ipsum. Saepe, doloribus. Porro odit voluptates vero tempore voluptatibus aliquid maiores asperiores quidem eos iure ipsa in accusantium dolorem, sint unde deleniti error omnis iusto debitis iste quaerat magni. Aliquam quisquam quas, magni accusantium voluptatibus aut laboriosam nihil tempore unde odit vitae in. Quidem pariatur veritatis nostrum autem dolores repellat nulla, voluptate recusandae praesentium accusamus tenetur ad neque facilis? Molestias numquam eum obcaecati, accusamus placeat nobis itaque sit earum consequatur voluptas officia incidunt non, dolore beatae quam quidem quia quos? Corporis quis voluptas dolorem explicabo et aliquid at. Nulla quam facilis saepe repellendus recusandae quos excepturi, odit ex neque laudantium suscipit laborum natus non assumenda sit odio minus eius accusamus quod tempore numquam? Quod adipisci aspernatur asperiores rerum iure ut sit consequuntur repudiandae omnis possimus cumque totam commodi delectus magnam doloribus, deserunt modi. Sit officia cum molestias omnis obcaecati earum vitae reprehenderit consequatur a dignissimos corrupti dolores ducimus optio qui atque voluptate, natus debitis quibusdam odio mollitia, reiciendis rerum? In fugit mollitia tenetur, voluptatem ab quos deleniti odit magnam laborum rerum, repellat autem. Voluptate soluta veritatis, doloribus illum quam animi itaque numquam autem blanditiis consequatur recusandae reiciendis placeat in voluptatibus possimus deserunt? Natus, dignissimos totam. Animi eius dolor odit ipsum aliquam delectus eligendi illum incidunt. Sit quos, iste facilis assumenda ratione reiciendis reprehenderit debitis rerum totam quas molestiae tempora labore quidem officia neque autem voluptates adipisci eaque consectetur, ipsum perspiciatis, fuga voluptatem placeat! Ex rem cumque placeat esse quisquam at deleniti sint, hic fugit, delectus repellat nostrum excepturi praesentium, aliquid ut eum accusamus! Ipsam porro alias magni iure! Maiores libero sequi animi eos iusto iste sed similique id architecto velit laborum praesentium obcaecati incidunt veniam quis odit autem fugit sint, voluptates ex adipisci! Praesentium soluta nemo, fugit, nostrum natus perspiciatis architecto iure atque, necessitatibus consequatur expedita? Facere aperiam reprehenderit, assumenda officia voluptatem excepturi voluptatibus suscipit expedita quia nulla beatae eum voluptatum necessitatibus omnis modi aliquid dolorem delectus doloribus accusantium incidunt hic minima libero culpa! Sapiente consectetur vitae necessitatibus iste officiis quidem error, neque libero. Beatae expedita veniam cupiditate est dicta numquam laudantium sunt sed tenetur rerum hic enim cum, vitae velit unde in architecto nam deleniti porro quod soluta dolor. Doloribus quaerat corporis totam provident suscipit voluptatibus voluptatum commodi dolore repellat libero, voluptas a in, quisquam exercitationem corrupti soluta labore itaque voluptatem enim natus. Recusandae numquam, hic perspiciatis reiciendis laboriosam inventore sint nam sed, cupiditate odio quis laborum explicabo est officia!</p>
            <hr>
        </div>
        <div class="m-2 p-2" id="ND">
            <h2 class="text-dark fw-bold">Notification Details</h2>
            <p class="text-secondary fw-semibold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam ratione nulla nemo nostrum asperiores! Velit minus animi mollitia nobis optio laboriosam asperiores, quo ullam corrupti reprehenderit quas quod vitae qui dolorem facere eligendi! Porro voluptas eveniet ratione maiores eligendi quod nobis explicabo itaque nisi. Voluptatem harum ducimus rerum incidunt voluptatibus impedit recusandae, quas, quaerat enim non vitae magni officiis doloribus repudiandae voluptas, obcaecati sunt veritatis? Eos architecto nam dolores! Doloremque minima soluta corrupti quas explicabo. Magni odit cum ducimus eos vero necessitatibus quidem error eaque dolorem, voluptatem quod eligendi perferendis praesentium, porro doloremque temporibus id eveniet iusto, neque velit ipsum. Saepe, doloribus. Porro odit voluptates vero tempore voluptatibus aliquid maiores asperiores quidem eos iure ipsa in accusantium dolorem, sint unde deleniti error omnis iusto debitis iste quaerat magni. Aliquam quisquam quas, magni accusantium voluptatibus aut laboriosam nihil tempore unde odit vitae in. Quidem pariatur veritatis nostrum autem dolores repellat nulla, voluptate recusandae praesentium accusamus tenetur ad neque facilis? Molestias numquam eum obcaecati, accusamus placeat nobis itaque sit earum consequatur voluptas officia incidunt non, dolore beatae quam quidem quia quos? Corporis quis voluptas dolorem explicabo et aliquid at. Nulla quam facilis saepe repellendus recusandae quos excepturi, odit ex neque laudantium suscipit laborum natus non assumenda sit odio minus eius accusamus quod tempore numquam? Quod adipisci aspernatur asperiores rerum iure ut sit consequuntur repudiandae omnis possimus cumque totam commodi delectus magnam doloribus, deserunt modi. Sit officia cum molestias omnis obcaecati earum vitae reprehenderit consequatur a dignissimos corrupti dolores ducimus optio qui atque voluptate, natus debitis quibusdam odio mollitia, reiciendis rerum? In fugit mollitia tenetur, voluptatem ab quos deleniti odit magnam laborum rerum, repellat autem. Voluptate soluta veritatis, doloribus illum quam animi itaque numquam autem blanditiis consequatur recusandae reiciendis placeat in voluptatibus possimus deserunt? Natus, dignissimos totam. Animi eius dolor odit ipsum aliquam delectus eligendi illum incidunt. Sit quos, iste facilis assumenda ratione reiciendis reprehenderit debitis rerum totam quas molestiae tempora labore quidem officia neque autem voluptates adipisci eaque consectetur, ipsum perspiciatis, fuga voluptatem placeat! Ex rem cumque placeat esse quisquam at deleniti sint, hic fugit, delectus repellat nostrum excepturi praesentium, aliquid ut eum accusamus! Ipsam porro alias magni iure! Maiores libero sequi animi eos iusto iste sed similique id architecto velit laborum praesentium obcaecati incidunt veniam quis odit autem fugit sint, voluptates ex adipisci! Praesentium soluta nemo, fugit, nostrum natus perspiciatis architecto iure atque, necessitatibus consequatur expedita? Facere aperiam reprehenderit, assumenda officia voluptatem excepturi voluptatibus suscipit expedita quia nulla beatae eum voluptatum necessitatibus omnis modi aliquid dolorem delectus doloribus accusantium incidunt hic minima libero culpa! Sapiente consectetur vitae necessitatibus iste officiis quidem error, neque libero. Beatae expedita veniam cupiditate est dicta numquam laudantium sunt sed tenetur rerum hic enim cum, vitae velit unde in architecto nam deleniti porro quod soluta dolor. Doloribus quaerat corporis totam provident suscipit voluptatibus voluptatum commodi dolore repellat libero, voluptas a in, quisquam exercitationem corrupti soluta labore itaque voluptatem enim natus. Recusandae numquam, hic perspiciatis reiciendis laboriosam inventore sint nam sed, cupiditate odio quis laborum explicabo est officia!</p>
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