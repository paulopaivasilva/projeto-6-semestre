function changeCheckout(val){
    if(val == 0) {
        $('#nivelCheckout0').show();
        $('#nivelCheckout1').hide();
        $('#nivelCheckout2').hide();
        $('#nivelCheckout3').hide();
    }
    if(val == 1){
        $('#nivelCheckout0').hide();
        $('#nivelCheckout1').show();
        $('#nivelCheckout2').hide();
    }
    if(val == 2){
        buscaReserva()
    }
    if(val == 3){
        $('#nivelCheckout1').hide();
        $('#nivelCheckout2').hide();
        $('#nivelCheckout3').show();
    }
}

function buscaReserva(){
    var busca = 'busca=' + $('#buscaCheckout').val();
    $('#status').show()
    $.ajax({
        method: 'POST',
        url: 'frames/checkout/checkout.php',
        data: busca,
        success: (res) => {
            if (res){
                res = JSON.parse(res)
                $('#nome').text(res.nome)
                $('#TipoDocumento').text(res.TipoDocumento)
                $('#cpf').text(res.cpf)
                $('#dt_reserva').text(moment().format('DD/MM/YYYY', res.dt_reserva))
                $('#estadia').text(moment().format('DD/MM/YYYY', res.dt_reserva))
                $('#DescTipoQuarto').text(res.DescTipoQuarto)
                $('#numero').text(res.numero)
                $('#DescStatusReserva').text(res.DescStatusReserva)
                idReserva = res.id
                $('#status').hide()
                $('#nivelCheckout2').show();
                $("#alert").hide()
            }else{
                $('#nivelCheckout2').hide();
                $('#status').hide()
                $("#alert").show()
            }
        }
    })
}

function confirmarCheckout(){
    var busca = 'id=' + idReserva + '&action=confirmar';
    $('#status').show()
    $.ajax({
        method: 'POST',
        url: 'frames/checkout/checkout.php',
        data: busca,
        success: (res) => {
            if(res == 1){
                $('#status').hide()
                changeCheckout(3)
            }else{
                $(".alert").alert('close')
            }
        }
    })
}