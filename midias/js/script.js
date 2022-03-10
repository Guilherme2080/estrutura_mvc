


function datas(){

    var dt_hoje = document.getElementById("data_hoje").value;
    var dt_vencimento = document.getElementById("d_vencimento").value;
    
   
        
    if(dt_hoje < dt_vencimento ){
        
        checked_lancamento.checked = true;
        

    } else{
        checked_lancamento.checked = false;
    }
    
   
}


function enviar(parametro, parametro2, parametro3){

    var idDigitado = parametro;
    document.getElementById("recebe_id").value = idDigitado;

    
    var nomeDigitado = parametro2;
    document.getElementById("recebe_nome").value = nomeDigitado;

    var precoDigitado = parametro3;
    document.getElementById("recebe_preco").value = precoDigitado;


}


function inserirSinal(elem) {

    //selecioando o valor do campo escolhido
    var indiceDoSelectEscolhido = elem.selectedIndex;
    var valorDoElementoEscolhido = elem.options[indiceDoSelectEscolhido].value;

    //se for o option de boleto
    if(valorDoElementoEscolhido == 'boleto'){
        
        valor = document.getElementById("valor_caixa").value;
        document.getElementById('valor_caixa').value = '-'+valor;

    }
    
    
    

}






    





























 

function envia(){
        
     var nomeDigitado = document.getElementById("nome_prod").innerHTML; // esta pegando o valor que foi digitado no input e mostrando no console
     document.getElementById("recebe_nome").value = nomeDigitado;
     
     var precoDigitado = document.getElementById("pequenar").innerHTML; // esta pegando o valor que foi digitado no input e mostrando no console
     document.getElementById("recebe_telefone").value = precoDigitado;
     
     var precoDigitado = document.getElementById("p_placa").innerHTML; // esta pegando o valor que foi digitado no input e mostrando no console
     document.getElementById("recebe_placa").value = precoDigitado;
}