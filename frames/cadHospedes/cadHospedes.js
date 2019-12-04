let url = 'frames/cadHospedes/cadHospedes.php'
function changeHospedes(val){
    if(val == 0){
        $('#nivelcadHospedes0').show()
        $('#nivelcadHospedes1').hide()
        $('#nivelcadHospedes3').hide()
    }
    if(val == 1){
        $('#nivelcadHospedes0').hide()
        $('#nivelcadHospedes1').show()
    }
    if(val == 2){
        $('#nivelcadHospedes0').hide()
        $('#nivelcadHospedes1').hide()
        $('#nivelcadHospedes2').show()
    }
    if(val == 3){
        $('#nivelcadHospedes2').hide()
        $('#nivelcadHospedes3').show()
    }
}

$('#nivelcadHospedes1').submit((e) => {
    e.preventDefault();
    let cpf = $('#cpfHospede').val()
    cpf = cpf.replace(/[^\d]+/g,'')
    let dados = {
        cpf: cpf,nomeHospede: $('#nomeHospede').val(),nascHospede: $('#nascHospede').val(),
        idadeHospede: $('#idadeHospede').val(),sexoHospede: $('#sexoHospede').val(),profissHospede: $('#profissHospede').val(),
        cepHospede: $('#cepHospede').val(),endHospede: $('#endHospede').val(),numEndHospede: $('#numEndHospede').val(),
        complHospede: $('#complHospede').val(),bairroHospede: $('#bairroHospede').val(),cidadeHospede: $('#cidadeHospede').val(),
        ufHospede: $('#ufHospede').val(),emailHospede: $('#emailHospede').val(),tel1Hospede: $('#tel1Hospede').val(),
        tel2Hospede: $('#tel2Hospede').val(),
    }

    $.ajax({
        method: 'POST',
        url: url,
        data: dados,
        success: (res) => {
            alert(res)
            voltar()
        }
    })
})

function voltar(){
    $('#cpfHospede').val(''); $('#nomeHospede').val(''); $('#nascHospede').val('');
    $('#idadeHospede').val(''); $('#sexoHospede').val(''); $('#profissHospede').val('');
    $('#cepHospede').val(''); $('#endHospede').val(''); $('#numEndHospede').val('');
    $('#complHospede').val(''); $('#bairroHospede').val(''); $('#cidadeHospede').val('');
    $('#ufHospede').val('UF'); $('#emailHospede').val(''); $('#tel1Hospede').val('');
    $('#tel2Hospede').val('');
    changeHospedes(0)
}

function consultaCadastro(val){
    $.ajax({
        method: 'POST',
        url: url,
        data: { buscaCadastro: $('#cadastroBusca').val()},
        success: (res) => {
            if(res != 0){
                res = JSON.parse(res)
                $('#cadastroNome').text(res.nome)
                $('#cadastroCPF').text(res.cpf)
                $('#cadastroIdade').text(res.idade)
                $('#cadastroSexo').text(res.sexo == 'M' ? 'Masculino' : res.sexo == 'F' ? 'Feminino' : 'Outros')
                $('#cadastroProfis').text(res.profiss)
                $('#cadastroCEP').text(res.cep)
                $('#cadastroEnd').text(`${res.ender}, ${res.n_end} - ${res.bairro}, ${res.cidade} - ${res.uf} `)
                changeHospedes(val)
            }else{
                alert("Nenhum cadastro encontrado!")
            }
        }
    })
}

$.ajax({
    method: 'GET',
    url: 'https://servicodados.ibge.gov.br/api/v1/localidades/estados',
    success: (res) => {
        res.map(item => {
            $('#ufHospede').append(`<option value="${item.sigla}">${item.sigla}</option>`)
        })
    }
})

$('#cepHospede').blur(() => {
    let cep = $('#cepHospede').val()
    $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
        if (!("erro" in dados)) {
            $("#endHospede").val(dados.logradouro);
            $("#bairroHospede").val(dados.bairro);
            $("#cidadeHospede").val(dados.localidade);
            $("#ufHospede").val(dados.uf);
        }else {
            $('#cepHospede').val('')
            alert("CEP não encontrado.");
        }
    });
})