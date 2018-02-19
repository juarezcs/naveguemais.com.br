function validaRadio() {
  if (document.form1.opcao[0].checked == false 
    && document.form1.opcao[1].checked == false) {
    alert('Por favor, selecione o Tipo de Opção.');
    return false;
  }
  return true;
}

document.getElementById("my-form").addEventListener("submit", function(e) {
		
    var radioUniqueByName = [];		
    var lastRadioUniqueByName = '';
    var classname = document.getElementsByClassName("radioCheck");

    //Vamos capturar todos os elementos dinamicamente que tem a classe radioCheck
    for (var i = 0; i < classname.length; i++) {
        var nameOfButton = classname[i].getAttribute('name');

        if(nameOfButton != lastRadioUniqueByName){
            radioUniqueByName.push(nameOfButton);
        }

        lastRadioUniqueByName = nameOfButton;
    }

    //Agora vamos percorrer todos os radiosButtons e ter certeza que ao menos um dos Radios esta 'checked'.
    for(var i in radioUniqueByName){

        var atLastOneChecked = false;

        var uniqueRadio = radioUniqueByName[i];
        var elementToCheck = document.getElementsByName(uniqueRadio);

        //for(x in elementToCheck){
        for (var x = 0; x < classname.length; x++) {					

            // elementToCheck[x] != null  -> Evita erro de undefined
            if(elementToCheck[x] != null && elementToCheck[x].checked !== false){
                //Tem um elemento checado
                atLastOneChecked = true;
            }

        }

        //Se não tiver ao menos um checkado para a execução e retorna como false
        if(!atLastOneChecked){
            alert("Selecione o campo -> " + uniqueRadio);
            e.preventDefault();
            return false;
        }
    }
});