let searchBtn = $('.ladda-button').ladda();
let clearBtn = $('.btn-outline-secondary');

searchBtn.click(function (cep) {
  searchBtn.ladda('start');
  
  setTimeout(function () {
    let cep = document.getElementById('cep').value;

    $('#info').empty();    
    $.post("src/consultaCEP.php", {
      cep: cep
    },
      function (data) { })
      .done(function (data) {
        $('#info').append(
          '<div class="alert alert-success" role="alert">' +
          '<b>Sucesso! A sua busca retornou o seguinte resultado:</b><br>' +
          data.logradouro + ', ' + data.bairro + ' - ' + data.localidade + '/' + data.uf +
          '</div>');
      })
      .fail(function (data) {
        $('#info').append(
          '<div class="alert alert-danger" role="alert">' +
          '<b>Oops, houve um erro ao consultar o CEP inserido.</b><br> Verifique se um CEP válido foi digitado e tente novamente' +
          '</div>');
        console.log(data);
      });
    searchBtn.ladda('stop');
  }, 2000)
});

clearBtn.click(function () {
  document.getElementById('cep').value = '';
});