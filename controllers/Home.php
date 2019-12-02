<?php
    $head = '<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./styles/home.css">
        <title>Home</title>
    </head>';
    $info = new stdClass();
    $info->nome = "Paulo";

    if(isset($_POST['data'])){
        $frame = $_POST['data'];
        switch($frame){
            case "home": 
                include "../frames/home/home.php";
            break;
            case "checkin": 
                include "../frames/checkin/checkin.php";
            break;
            case "checkout": 
                include "../frames/checkout/checkout.php";
            break;
            case "reservas": 
                include "../frames/reservas/reservas.php";
            break;
            case "quartos": 
                include "../frames/quartos/quartos.php";
            break;
            case "cadHospedes": 
                include "../frames/cadHospedes/cadHospedes.php";
            break;
        }
    }
?>