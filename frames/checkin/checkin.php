<?php
    $level = 0;
?>
<div class="content text-left">
    <?php if($level != 2) : ?>
        <h5>Check-in</h5><br>
        <form method="POST" style="display: flex; justify-content:left; margin-top: -15px">
            <input type="text" class="form-control" style="width: 350px" placeholder="Número da reserva">
            <button id="submit" type="submit" class="text-center button" style="width: 70px; margin-top: -2px; margin-left: 5px">
                <span style="margin-right: 10px;">Ok</span>
            </button>
        </form>
    <?php endif; if($level == 1) : ?>
        <div>
            <h5 style="margin-top: 30px">Dados da Reserva</h5>
            <div class="row" style="margin-top: 30px">
                <div class="col-md-5 text-left" style="line-height: 12px">
                    <p><strong>Nome: </strong>Daniela Ferreira</p>
                    <p><strong>Tipo Documento: </strong>CPF</p>
                    <p><strong>Documento: </strong>569.768.389-88</p>
                    <p><strong>Data da Reserva: </strong>01/01/2019</p>
                    <p><strong>Estadia: </strong>De 03/10 a 15/10</p>
                    <p><strong>Tipo Quarto: </strong>Standart</p>
                    <p><strong>Nº Quarto: </strong>20</p>
                </div>
                <div class="col-md-7">
                    <h5>Observações</h5>
                    <textarea class="form-control" id="exampleFormControlTextarea1" readonly rows="4"></textarea>
                    <div class="col-md-12" style="margin-left: -15px; margin-top: 2%">
                        <button id="submit" type="submit" class="text-center button" style="width: 200px;">
                            <span style="margin-right: 10px;">Confirmar check-in</span>
                        </button>
                        <button id="submit" type="submit" class="text-center button" style="width: 200px;">
                            <span style="margin-right: 10px;">Cancelar</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <?php 
        endif;
        if($level == 2) : ?>
            <div class="text-center" style="margin-top: 10%">
                <h5>Check-in confirmado!</h5>
                <h5>Entregue a chave ao hóspede e indique o quarto.</h5>
                <button id="submit" type="submit" class="text-center button" style="width: 200px;">
                    <span style="margin-right: 10px;">Cartão entregue</span>
                </button>
            </div>
    <?php endif; ?>
</div>