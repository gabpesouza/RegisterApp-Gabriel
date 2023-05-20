
function formatZipCode(zipCode){

    if(zipCode.includes("-")){
        return zipCode;
    }

    let zip = zipCode.toString();

    let part1 = zip.slice(0,5);
    let part2 = zip.slice(5);

    return part1 + "-" +part2;
}

function loadAdressFromApi(zipCode){
    let formatedZipCode = formatZipCode(zipCode);
    $('#cep').val(formatedZipCode);

    $.ajax({
        type: 'POST',
        url: '../source/Support/CepApiData.php',
        data:{ zipCode:formatedZipCode },
        success: function(response)
        {
            if(response !== 'invalid'){
                let data = JSON.parse(response);
                $("#tipo_logradouro").val(data['tipo_logradouro']);
                $("#estado").val(data['uf']);
                $("#cidade").val(data['cidade']);
                $("#logradouro").val(data['logradouro']);
                $("#bairro").val(data['bairro']);

            }else{
                alert('Cep inválido!');
            }
        }
    })

}