<?php
    $level = 2
?>
<style>
    .box {
        display: flex; 
        flex-direction: row; 
        justify-content: space-between; 
        border:1px solid black;
        height: 40px
    } 
</style>
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
    <h5>Hóspedes</h5>
    <div class="box">
        <span style="margin-top: 5px; margin-left: 4px">Daniela Ferreiraaaaa</span>
        <div style="margin-top: -22px">
            <button type="submit" class="text-center button" style="width: 80px; height: 30px">
                <span style="margin-left: 2px;font-size: 12px">Selecionar</span>
            </button>
            <button type="submit" class="text-center button" style="width: 125px; height: 30px; margin-right: 4px">
                <span style="margin-left: 2px;font-size: 12px">Visualizar Cadastro</span>
            </button>
        </div>
    </div>
<?php endif; ?>

<?php if($level == 3) : ?>

<?php endif; ?>