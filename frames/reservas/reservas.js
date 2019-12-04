let url = 'frames/reservas/reservas.php'
let id_hospede = ''
let id_reserva = ''

function changeReservas(val, res) {
    if(val == 0){
        $('#nivelReserva1').hide()
        $('#nivelReserva2').hide()
        $('#nivelReserva3').hide()
        $('#nivelReserva4').hide()
        $('#nivelReserva5').hide()
        $('#nivelReserva6').hide()
        $('#nivelReserva7').hide()
        $('#nivelReserva8').hide()
        $('#nivelReserva9').hide()
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
        $('#statusReserva').text(res)
        $('#nivelReserva4').show()
        $('#nivelReserva3').hide()
    }
    if(val == 5){
        $('#nivelReserva0').hide()
        $('#nivelReserva1').hide()
        $('#nivelReserva2').hide()
        $('#nivelReserva3').hide()
        $('#nivelReserva4').hide()
        $('#nivelReserva5').show()
    }
    if(val == 6){
        $('#nivelReserva5').hide()
        $('#nivelReserva6').show()
    }
    if(val == 7){
        $('#nivelReserva0').hide()
        $('#nivelReserva1').hide()
        $('#nivelReserva2').hide()
        $('#nivelReserva3').hide()
        $('#nivelReserva4').hide()
        $('#nivelReserva5').hide()
        $('#nivelReserva7').show()
    }
    if(val == 8){
        $('#nivelReserva7').hide()
        $('#nivelReserva8').show()
    }
    if(val == 9){
        $('#nivelReserva8').hide()
        $('#nivelReserva9').show()
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

function consultarQuarto(){
    $.ajax({
        method: 'POST',
        url: url,
        data: { consultaQuarto: true, tipoQuarto: $('#tpQuarto').val() },
        success: (res) => {
            if(res != 0)
                $('#quarto').val(res)
            else
                $('#quarto').val('Nenhum quarto disponível')
        }
    })
}

function novaReserva(){
    let checkin = $('#checkin').val()
    let checkout = $('#checkout').val()
    if(checkin == "") checkin = null
    if(checkout == "") checkout = null
    let dados = {
        id_hospede: id_hospede,
        checkin: checkin,
        qtdHosp: $('#qtdHosp').val(),
        quarto: $('#quarto').val(),
        tpQuarto: $('#tpQuarto').val(),
        checkout: checkout
    }

    $.ajax({
        method: "POST",
        url: url,
        data: dados,
        success: (res) => {
            $('#tpQuarto').val('')
            $('#qtdHosp').val('')
            $('#quarto').val('')
            changeReservas(4, res)
        }
    })
}

function consultaReserva(val){
    let reserva
    if($('#reservaBusca').val() != '' || $('#reservaCancela').val() != ''){
        if(val == 8)
            reserva = $('#reservaCancela').val()
        else
            reserva = $('#reservaBusca').val()
    }

    $.ajax({
        method: 'POST',
        url: url,
        data: { buscaReserva: reserva},
        success: (res) => {
            res = JSON.parse(res)
            if(val != 8){
                $('#nomeHospede').text(res.nome)
                $('#consultaReserva').text(res.id_reserva)
                $('#consultaHospede').text(res.nome)
                $('#consultaCPF').text(res.cpf)
                $('#consultaCheckin').text(res.dt_checkin)
                $('#consultaCheckout').text(res.dt_checkout)
                $('#consultaTpQuarto').text(res.DescTipoquarto)
                $('#consultaQuarto').text(res.numero)
                $('#reservaBusca').val('')
            }else{
                $('#cancelaReserva').text(res.id_reserva)
                $('#cancelaHospede').text(res.nome)
                $('#cancelaCPF').text(res.cpf)
                $('#cancelaCheckin').text(res.dt_checkin)
                $('#cancelaCheckout').text(res.dt_checkout)
                $('#cancelaTpQuarto').text(res.DescTipoquarto)
                $('#cancelaQuarto').text(res.numero)
                $('#reservaCancela').val('')
                id_reserva = res.id_reserva
            }
            changeReservas(val)
        }
    })
}

function cancelarReserva(){
    $.ajax({
        method: 'POST',
        url: url,
        data: { idCancela: id_reserva },
        success: (res) => {
            if(res){
                $('#statusCancela').text(res)
                changeReservas(9)
            }
        }
    })
}