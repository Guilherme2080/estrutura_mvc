
function enviar(parametro, parametro2, parametro3){

//     var idDigitado = document.getElementById("id_prod").innerHTML; 
//     document.getElementById("recebe_id").value = idDigitado;

//     var nomeDigitado = document.getElementById("nome_prod").innerHTML; 
//      document.getElementById("recebe_nome").value = nomeDigitado;

//      var precoDigitado = document.getElementById("p_preco").innerHTML; 
//      document.getElementById("recebe_preco").value = precoDigitado;


     

    var idDigitado = parametro;
    document.getElementById("recebe_id").value = idDigitado;

    
    var nomeDigitado = parametro2;
    document.getElementById("recebe_nome").value = nomeDigitado;

    var precoDigitado = parametro3;
    document.getElementById("recebe_preco").value = precoDigitado;


}


 

function envia(){
        
     var nomeDigitado = document.getElementById("nome_prod").innerHTML; // esta pegando o valor que foi digitado no input e mostrando no console
     document.getElementById("recebe_nome").value = nomeDigitado;
     
     var precoDigitado = document.getElementById("pequenar").innerHTML; // esta pegando o valor que foi digitado no input e mostrando no console
     document.getElementById("recebe_telefone").value = precoDigitado;
     
     var precoDigitado = document.getElementById("p_placa").innerHTML; // esta pegando o valor que foi digitado no input e mostrando no console
     document.getElementById("recebe_placa").value = precoDigitado;
}