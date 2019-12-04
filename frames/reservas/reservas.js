let url = 'frames/reservas/reservas.php'
let id_hospede = ''

function changeReservas(val) {
    if(val == 0){
        $('#nivelReserva1').hide()
        $('#nivelReserva2').hide()
        $('#nivelReserva3').hide()
        $('#nivelReserva4').hide()
        $('#nivelReserva0').show()
    }
    if(val == 1){
        $('#nivelReserva0').hide()
        $('#nivelReserva1').show()
    }
    if(val == 2) {
        $('#nivelReserva1').hide()
        $('#nivelReserva2').show()
    }
    if(val == 3){
        $('#nivelReserva2').hide()
        $('#nivelReserva3').show()
    }
    if(val == 4){
        $('#nivelReserva4').show()
        $('#nivelReserva3').hide()
    }
}

function buscaHospede(){
    let dados = 'cpf=' + $('#cpfReserva').val()
    $.ajax({
        method: 'POST',
        url: url,
        data: dados,
        success: (res) => {
            let json = JSON.parse(res)
            $('#nomeHospede').text(json.nome)
            id_hospede = json.id
            changeReservas(2)
        }
    })
}

function novaReserva(){
    let dados = {
        id_hospede: id_hospede,
        checkin: $('#checkin').val(),
        qtdHosp: $('#qtdHosp').val(),
        quarto: $('#quarto').val(),
        tpQuarto: $('#tpQuarto').val(),
        checkout: $('#checkout').val()
    }

    $.ajax({
        method: "POST",
        url: url,
        data: dados,
        success: (res) => {
            console.log(res)
        }
    })
}