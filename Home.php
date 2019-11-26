<!doctype html>
<?php
    include "./controllers/Home.php";
    $frame = "reservas"
?>
<html lang="en">
    <?= $head ?>
    <body class="text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h5 style="margin-top: 5px; margin-left:20px">Mercurys Hotel</h4>
                </div>
                <div class="col-md-6 text-right">
                    <h6 class="margin-r20" style="margin-top: 15px">
                        <span style="margin-right: 20px">Bem-vindo <?= $info->nome ?>!</span>
                        <button class="btn" style="margin-top: -5px">
                            <strong>Sair</strong>
                        </button>
                    </h6>
                </div>
            </div>
            <div class="col-md-12 text-right" style="margin-top: 30px">
                <button class="btn" id="home">
                    <strong>Inicio</strong>
                </button>
            </div>
            <div class="row">
                <div class="col-md-3 text-left" style="margin-left: 15px">
                    <button class="text-left button">
                        <span>Check-in</span>
                    </button>
                    <button class="text-left button">
                        <span>Check-out</span>
                    </button>
                    <button class="text-left button">
                        <span>Reservas</span>
                    </button>
                    <button class="text-left button">
                        <span>Quartos</span>
                    </button>
                    <button class="text-left button">
                        <span>Cadastro de Hóspedes</span>
                    </button>
                </div>
                <div class="col-md-8 text-left">
                    <?php  
                        switch($frame){
                            case "home": 
                                include "./frames/home/home.php";
                            break;
                            case "checkin": 
                                include "./frames/checkin/checkin.php";
                            break;
                            case "checkout": 
                                include "./frames/checkout/checkout.php";
                            break;
                            case "reservas": 
                                include "./frames/reservas/reservas.php";
                            break;
                            case "quartos": 
                                include "./frames/quartos/quartos.php";
                            break;
                            case "cadHospedes": 
                                include "./frames/cadHospedes/cadHospedes.php";
                            break;
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>