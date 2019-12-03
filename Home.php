<!doctype html>
<?php
    include "./controllers/Home.php";
    $frame = "checkout";
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
                    <button onclick="changeFrame('checkin')" class="text-left button" id="checkin">
                        <span>Check-in</span>
                    </button>
                    <button onclick="changeFrame('checkout')" class="text-left button">
                        <span>Check-out</span>
                    </button>
                    <button onclick="changeFrame('reservas')" class="text-left button">
                        <span>Reservas</span>
                    </button>
                    <button onclick="changeFrame('quartos')" class="text-left button">
                        <span>Quartos</span>
                    </button>
                    <button onclick="changeFrame('hospedes')" class="text-left button">
                        <span>Cadastro de Hóspedes</span>
                    </button>
                </div>
                <div class="col-md-8 text-left" id="frame">
                    
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    const changeFrame = (val) => {
        var dados = 'data=' + val
        $.ajax({
            method:'POST',
            url:"./controllers/Home.php",
            data: dados,
            success: (resp) => {
                $('#frame').html(resp)
            }
        })
    }
</script>