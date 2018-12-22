 $(document).ready(function() {

  $('#cep').blur(function(){

    function limpa_formulário_cep() {

      $("#uf").val("");
      $("#cidade").val("");
      $("#bairro").val("");
      $("#endereco").val("");

    }
    var cep = $(this).val().replace(/\D/g, '');

    if (cep != "") {
      var validacep = /^[0-9]{8}$/;
      if (validacep.test(cep)) {
        $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {
          if (!("erro" in dados)) {
            $("#uf").val(dados.uf);
            $("#cidade").val(dados.localidade);
            $("#bairro").val(dados.bairro);
            $("#endereco").val(dados.logradouro);
          }else {
            limpa_formulário_cep();
            alert("CEP não encontrado.");
          }
        });
      }
      else {

        limpa_formulário_cep();
                        //alert("Formato de CEP inválido.");
                      }
                    }else {
                      limpa_formulário_cep();
                    }
                  }); 
  $('#cep').mask('00000-000');
});
