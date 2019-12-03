<?php
    session_start();
    $head = '<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="./styles/home.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.js"></script>
        <title>Home</title>
    </head>';
    $info = new stdClass();
    $info->nome = $_SESSION['nome'];

    if(isset($_POST['data'])){
        $frame = $_POST['data'];
        switch($frame){
            case "home": 
                echo '';
            break;
            case "checkin": 
                include "../frames/checkin/checkin.html";
            break;
            case "checkout": 
                include "../frames/checkout/checkout.html";
            break;
            case "reservas": 
                include "../frames/reservas/reservas.html";
            break;
            case "quartos": 
                include "../frames/quartos/quartos.html";
            break;
            case "hospedes": 
                include "../frames/cadHospedes/cadHospedes.html";
            break;
        }
    }

    if(isset($_POST['sair'])){
        session_destroy();
    }
?>