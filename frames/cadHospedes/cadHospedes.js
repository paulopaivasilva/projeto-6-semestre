$.ajax({
    method: 'GET',
    url: 'https://servicodados.ibge.gov.br/api/v1/localidades/estados',
    success: (res) => {
        res.map(item => {
            $('#ufHospede').append(`<option value="${item.sigla}">${item.sigla}</option>`)
        })
    }
})