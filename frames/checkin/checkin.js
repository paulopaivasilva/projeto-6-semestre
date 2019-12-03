var idReserva = ''
function change(val) {
    frame = val
    if(val == 0) {
        $('#nivel0').show();
        $('#nivel1').hide();
        $('#nivel2').hide();
        $('#busca').val('')
    }
    if(val == 1){
        buscaReserva()
    }
    if(val == 2){
        $('#nivel0').hide();
        $('#nivel1').hide();
        $('#nivel2').show();
        $('#busca').val('')
    }
}

function buscaReserva(){
    var busca = 'busca=' + $('#busca').val();
    $('#statusCheckin').show()
    $.ajax({
        method: 'POST',
        url: 'frames/checkin/checkin.php',
        data: busca,
        success: (res) => {
            if(res){
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
                $('#statusCheckin').hide()
                $('#alert').hide()
                $('#nivel1').show();
            }else{
                $("#statusCheckin").hide()
                $("#alert").show()
                $('#nivel1').hide();
            }
        }
    })
}

function confirmarReserva(){
    var busca = 'id=' + idReserva + '&action=confirmar';
    $.ajax({
        method: 'POST',
        url: 'frames/checkin/checkin.php',
        data: busca,
        success: (res) => {
            if(res == 1){
                change(2)
            }
        }
    })
}

function cancelarReserva() {
    var busca = 'id=' + idReserva + '&action=cancelar';
    $.ajax({
        method: 'POST',
        url: 'frames/checkin/checkin.php',
        data: busca,
        success: (res) => {
            if(res == 1){
                change(0)
            }
        }
    })
}