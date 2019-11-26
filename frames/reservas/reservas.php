<?php
    $level = 1
?>
<h5>Nova reserva</h5><br>
<?php if($level == 0) : ?>
    <div class="content text-center">
        <div style="display: flex; justify-content:center; margin-top: 12%">
            <button class="text-center button" style="width: 200px; margin-right: 20px">
                <span style="margin-right: 10px;">Nova reserva</span>
            </button>
            <button class="text-center button" style="width: 200px; margin-right: 20px">
                <span style="margin-right: 10px;">Consultar reserva</span>
            </button>
            <button class="text-center button" style="width: 200px;">
                <span style="margin-right: 10px;">Cancelar reserva</span>
            </button>
        </div>
    </div>
<?php endif; ?>

<?php if($level == 1) : ?>
    <div class="content text-center">
        <div class="row">
            <div class="col-md-12 text-center" style="display: flex; justify-content:center; margin-top: 5%">
                <input type="text" class="form-control" style="width: 350px" placeholder="CPF Hóspede">
            </div>
            <div class="col-md-12">
                <button id="submit" type="submit" class="text-center button" style="width: 150px;">
                    <span style="margin-right: 10px;">Consultar</span>
                </button>
            </div>
            <div class="col-md-12">
                <button id="submit" type="submit" class="text-center button" style="width: 150px;">
                    <span style="margin-right: 10px;">Novo cadastro</span>
                </button>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if($level == 2) : ?>

<?php endif; ?>

<?php if($level == 3) : ?>

<?php endif; ?>