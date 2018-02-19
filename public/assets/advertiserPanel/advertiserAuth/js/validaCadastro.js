var form=document.getElementById('frmCadAnunciantes'); 
form.noValidate=true;
form.onsubmit=validateForm;  


function validateForm(event){

    // fetch cross-browser event object and form node
    event = (event ? event : window.event);
    
    var form = (event.target ? event.target : event.srcElement), 
        f, field, formvalid = true;
    
    var cpInfoValid = document.getElementById('cpInfoValid'),
        cpHTMLTemporario = "<table class='table table-hover'><tr><th>Nome do Campo</th><th>Correção do Erro</th></tr>",
        cpHTMLNovo = "",
        cpCampoErro = "",
        cpCorrecaoErro = "";
    
    var qdInfoValid = document.getElementById('qdInfoValid'),
        qdHTMLTemporario = qdInfoValid.innerHTML,
        qdHTMLNovo = "",
        qdcontadorErros = 0;
    
    var qdInfoPanel = document.getElementById('qdInfoPanel');
    var rdTipoPF = document.getElementById('rdTipoPF');
    var rdTipoPJ = document.getElementById('rdTipoPJ');
    var cpSenha = document.getElementById('cpSenha');
    var cpCelContato = document.getElementById('cpCelContato');

    // loop all fields
    for (f = 0; f < form.length; f++) {

        // get field
        field = form.elements[f];

        // ignore buttons, fieldsets, etc.
        if (field.nodeName !== "INPUT" && field.nodeName !== "TEXTAREA" && field.nodeName !== "SELECT") continue;

        // A validação do navegador nativo está disponível?
        if (typeof field.willValidate !== "undefined") {


            // validação nativa disponível
            if (field.nodeName === "INPUT" && field.type !== field.getAttribute("type")) {

                // Tipo de entrada não suportado! Use a validação de JavaScript legado
                field.setCustomValidity(LegacyValidation(field) ? "" : "error");

            }
            
            // verificação nativa do navegador
            field.checkValidity();

        }
        else {


            // native validation not available
            field.validity = field.validity || {};

            // set to result of validation function
            field.validity.valid = LegacyValidation(field);

            // if "invalid" events are required, trigger it here

        }

        if (field.validity.valid) {
            
            // O campo já passou pela primeira validação, agora vamos fazer nossa propria validação com javascript.
            // verifica se o cpf é valido.
            if (field.name == 'cpf_cnpf' ) {
                if (rdTipoPF.checked == true) {
                       if (validarCPF(field.value)) {
                            field.style.backgroundColor = "white";
                            field.style.border          = "1px solid #c3c3c3";
                       }else{
                            //Incrementa 1 na variavel de numero de erros encontrados.
                            qdcontadorErros = qdcontadorErros + 1;
                            //Pinta o campo com um vermelho claro, facilitando a visualização dos campos com erros.
                            field.style.backgroundColor = "rgba(253,231,231,1)";
                            field.style.border          = "0.5px solid rgba(101,13,12,0.9)";
                            cpCampoErro = "CPF";
                            cpCorrecaoErro = "CPF Inválido."
                            cpHTMLNovo = "<tr><td>" + cpCampoErro + "</td><td>" + cpCorrecaoErro + "</td></tr>";
                            cpHTMLTemporario = cpHTMLTemporario + cpHTMLNovo;
                            // form is invalid
                            formvalid = false;       
                       }
                }else{
                    if (validarCNPJ(field.value)) {
                            field.style.backgroundColor = "white";
                            field.style.border          = "1px solid #c3c3c3";
                    }else{
                        //Incrementa 1 na variavel de numero de erros encontrados.
                        qdcontadorErros = qdcontadorErros + 1;
                        //Pinta o campo com um vermelho claro, facilitando a visualização dos campos com erros.
                        field.style.backgroundColor = "rgba(253,231,231,1)";
                        field.style.border          = "0.5px solid rgba(101,13,12,0.9)";
                        cpCampoErro = "CNPJ";
                        cpCorrecaoErro = "CNPJ Inválido."
                        cpHTMLNovo = "<tr><td>" + cpCampoErro + "</td><td>" + cpCorrecaoErro + "</td></tr>";
                        cpHTMLTemporario = cpHTMLTemporario + cpHTMLNovo;
                        // form is invalid
                        formvalid = false;       
                    }
                }
                
            //segunda condição, vamos verificar se a senha é valida.
            }else if(field.name == 'password' ) {
                
                var regex = /^(?=(?:.*?[A-Z]){2})(?=(?:.*?[0-9]){2})(?=(?:.*?[!@#$%*()_+^&}{:;?.]){1})(?!.*\s)[0-9a-zA-Z!@#$%;*(){}_+^&]*$/; 
                if(field.value.length != 8) {
                    //Incrementa 1 na variavel de numero de erros encontrados.
                    qdcontadorErros = qdcontadorErros + 1;
                    //Pinta o campo com um vermelho claro, facilitando a visualização dos campos com erros.
                    field.style.backgroundColor = "rgba(253,231,231,1)";
                    field.style.border          = "0.5px solid rgba(101,13,12,0.9)";
                    cpCampoErro = "Senha";
                    cpCorrecaoErro = "A senha deve conter 08 caracteres."
                    cpHTMLNovo = "<tr><td>" + cpCampoErro + "</td><td>" + cpCorrecaoErro + "</td></tr>";
                    cpHTMLTemporario = cpHTMLTemporario + cpHTMLNovo;
                    // form is invalid
                    formvalid = false;           
                }
                else if(!regex.exec(field.value))
                {
                    //Incrementa 1 na variavel de numero de erros encontrados.
                    qdcontadorErros = qdcontadorErros + 1;
                    //Pinta o campo com um vermelho claro, facilitando a visualização dos campos com erros.
                    field.style.backgroundColor = "rgba(253,231,231,1)";
                    field.style.border          = "0.5px solid rgba(101,13,12,0.9)";
                    cpCampoErro = "Senha";
                    cpCorrecaoErro = "A senha deve conter 8 caractéres, sendo no mínimo: 2 caracteres em maiúsculo, 2 números e 1 caractere especial."
                    cpHTMLNovo = "<tr><td>" + cpCampoErro + "</td><td>" + cpCorrecaoErro + "</td></tr>";
                    cpHTMLTemporario = cpHTMLTemporario + cpHTMLNovo;
                    // form is invalid
                    formvalid = false; 
                }else{
                    //Após ser preenchido corretamente, volta o input para as cores padrões.
                    field.style.backgroundColor = "white";
                    field.style.border          = "1px solid #c3c3c3";                     
                }
            
            //terceira condição, vamos verificar se a senha foi confirmada corretamente.
            }else if(field.name == 'confirm_password' ) {
                if(field.value != cpSenha.value) {
                    //Incrementa 1 na variavel de numero de erros encontrados.
                    qdcontadorErros = qdcontadorErros + 1;
                    //Pinta o campo com um vermelho claro, facilitando a visualização dos campos com erros.
                    field.style.backgroundColor = "rgba(253,231,231,1)";
                    field.style.border          = "0.5px solid rgba(101,13,12,0.9)";
                    cpCampoErro = "Confirmar Senha";
                    cpCorrecaoErro = "O campo confirmar senha deve conter o mesmo valor do campo senha."
                    cpHTMLNovo = "<tr><td>" + cpCampoErro + "</td><td>" + cpCorrecaoErro + "</td></tr>";
                    cpHTMLTemporario = cpHTMLTemporario + cpHTMLNovo;
                    // form is invalid
                    formvalid = false;           
                }else{
                    //Após ser preenchido corretamente, volta o input para as cores padrões.
                    field.style.backgroundColor = "white";
                    field.style.border          = "1px solid #c3c3c3";                     
                }
            
            }else if(field.name == 'landline_phone' ) {
                if(field.value == "" && cpCelContato.value == "") {
                    //Incrementa 1 na variavel de numero de erros encontrados.
                    qdcontadorErros = qdcontadorErros + 1;
                    //Pinta o campo com um vermelho claro, facilitando a visualização dos campos com erros.
                    field.style.backgroundColor = "rgba(253,231,231,1)";
                    field.style.border          = "0.5px solid rgba(101,13,12,0.9)";
                    cpCampoErro = "Telefone p/ Contato";
                    cpCorrecaoErro = "É necessário que pelo menos um telefone seja informado para contato."
                    cpHTMLNovo = "<tr><td>" + cpCampoErro + "</td><td>" + cpCorrecaoErro + "</td></tr>";
                    cpHTMLTemporario = cpHTMLTemporario + cpHTMLNovo;
                    // form is invalid
                    formvalid = false;           
                }else{
                    //Após ser preenchido corretamente, volta o input para as cores padrões.
                    field.style.backgroundColor = "white";
                    field.style.border          = "1px solid #c3c3c3";                     
                }
            
            }else if(field.name == 'email' ) {
                if(checkMail(field.value)) {
                    //Após ser preenchido corretamente, volta o input para as cores padrões.
                    field.style.backgroundColor = "white";
                    field.style.border          = "1px solid #c3c3c3";                                
                }else{
                    //Incrementa 1 na variavel de numero de erros encontrados.
                    qdcontadorErros = qdcontadorErros + 1;
                    //Pinta o campo com um vermelho claro, facilitando a visualização dos campos com erros.
                    field.style.backgroundColor = "rgba(253,231,231,1)";
                    field.style.border          = "0.5px solid rgba(101,13,12,0.9)";
                    cpCampoErro = "E-mail";
                    cpCorrecaoErro = "Informe um e-mail válido."
                    cpHTMLNovo = "<tr><td>" + cpCampoErro + "</td><td>" + cpCorrecaoErro + "</td></tr>";
                    cpHTMLTemporario = cpHTMLTemporario + cpHTMLNovo;
                    // form is invalid
                    formvalid = false;  
                }
                
            }else{
        
                //Após ser preenchido corretamente, volta o input para as cores padrões.
                field.style.backgroundColor = "white";
                field.style.border          = "1px solid #c3c3c3";    
            }
        }
        else {
            
            //Incrementa 1 na variavel de numero de erros encontrados.
            qdcontadorErros = qdcontadorErros + 1;
            
            //Pinta o campo com um vermelho claro, facilitando a visualização dos campos com erros.
            field.style.backgroundColor = "rgba(253,231,231,1)";
            field.style.border          = "0.5px solid rgba(101,13,12,0.9)";  
            
            switch (field.name) {
                case 'cpf_cnpf': 
                        cpCampoErro = "CPF ou CNPJ";
                        cpCorrecaoErro = "Campo obrigatório."
                        break;
                case 'company_name': 
                        cpCampoErro = "Nome Empresa";
                        cpCorrecaoErro = "O campo deve conter no mínimo 5 caracteres."
                        break;	
                case 'economicactivity_id': 
                        cpCampoErro = "Área Economica";
                        cpCorrecaoErro = "O campo não pode conter valor nulo."
                        break;	
                case 'landline_phone': 
                        cpCampoErro = "Telefone";
                        cpCorrecaoErro = "O campo deve conter apenas números no formato (00)0000-0000."
                        break;
                case 'mobile_phone': 
                        cpCampoErro = "Celular";
                        cpCorrecaoErro = "O campo deve conter apenas números no formato (00)00000-0000"
                        break;
                case 'zip_code': 
                        cpCampoErro = "CEP";
                        cpCorrecaoErro = "O campo deve conter apenas números no formato 00000-000."
                        break;
                case 'address': 
                        cpCampoErro = "Endereço";
                        cpCorrecaoErro = "O campo deve conter no mínimo 5 caracteres."
                        break;
                case 'number': 
                        cpCampoErro = "Número";
                        cpCorrecaoErro = "O campo não pode ser nulo."
                        break;
                case 'city': 
                        cpCampoErro = "Cidade";
                        cpCorrecaoErro = "O campo deve conter no mínimo 4 caracteres."
                        break;
                case 'neighborhood': 
                        cpCampoErro = "Bairro";
                        cpCorrecaoErro = "O campo deve conter no mínimo 4 caracteres."
                        break;
                case 'state_id': 
                        cpCampoErro = "Estado";
                        cpCorrecaoErro = "O campo deve conter no mínimo 2 caracteres."
                        break;
                case 'email': 
                        cpCampoErro = "E-mail";
                        cpCorrecaoErro = "O campo deve conter um e-mail válido no formato exemplo@exemplo.com.br."
                        break;
                case 'password': 
                        cpCampoErro = "Senha";
                        cpCorrecaoErro = "O campo senha deve conter 08 caractéres, sendo no mínimo: 2 caracteres em maiúsculo, 2 números e 1 caractere especial."
                        break;
                case 'confirm_password': 
                        cpCampoErro = "Confirmar Senha";
                        cpCorrecaoErro = "O campo confirmar senha deve conter o mesmo valor do campo senha."
                        break;
                case 'accepted_terms': 
                        cpCampoErro = "Termos legais";
                        cpCorrecaoErro = "Você deve concordar com os termos legais da plataforma."
                        break;
                default:
                        cpCampoErro = "Indefinido";
                        cpCorrecaoErro = "Não foi possivel identificar o erro, entre em contato com a equipe de suporte."
            }

            //Insere uma nova linha no quadro de avisos de erros com o nome do campo e a ação necessária.
            cpHTMLNovo = "<tr><td>" + cpCampoErro + "</td><td>" + cpCorrecaoErro + "</td></tr>";
            cpHTMLTemporario = cpHTMLTemporario + cpHTMLNovo;

            // form is invalid
            formvalid = false;
        }
    }

    // cancel form submit if validation fails
    if (!formvalid) {
        
        //remove a classe que esconde o quadro de informações
        qdInfoPanel.style.display = 'block';
        
        // mostra um campo de informação para que o usuário corrija os problemas.
        if (qdcontadorErros > 1) {
            qdInfoValid.innerHTML = qdcontadorErros + " erros foram encontrados";    
        }else{
            qdInfoValid.innerHTML = "01 erro foi encontrado."; 
        }
        
        // mostra um campo de informação para que o usuário corrija os problemas.
        cpHTMLNovo = "</table>";
        cpInfoValid.innerHTML = cpHTMLTemporario + cpHTMLNovo;

        if (event.preventDefault) 
            event.preventDefault();

    }
    
    return formvalid;
}


// basic legacy validation checking
function LegacyValidation(field) {

    var
        valid = true,
        val = field.value,
        type = field.getAttribute("type"),
        chkbox = (type === "checkbox" || type === "radio"),
        required = field.getAttribute("required"),
        minlength = field.getAttribute("minlength"),
        maxlength = field.getAttribute("maxlength"),
        pattern = field.getAttribute("pattern");

    // disabled fields should not be validated
    if (field.disabled) return valid;

    // value required?
    valid = valid && (!required ||
        (chkbox && field.checked) ||
        (!chkbox && val !== "")
    );

    // minlength or maxlength set?
    valid = valid && (chkbox || (
        (!minlength || val.length >= minlength) &&
        (!maxlength || val.length <= maxlength)
    ));

    // test pattern
    if (valid && pattern) {
        pattern = new RegExp(pattern);
        valid = pattern.test(val);
    }

    return valid;
}

function validarCNPJ(cnpj) {
 
    cnpj = cnpj.replace(/[^\d]+/g,'');
 
    if(cnpj == '') return false;
     
    if (cnpj.length != 14)
        return false;
 
    // Elimina CNPJs invalidos conhecidos
    if (cnpj == "00000000000000" || 
        cnpj == "11111111111111" || 
        cnpj == "22222222222222" || 
        cnpj == "33333333333333" || 
        cnpj == "44444444444444" || 
        cnpj == "55555555555555" || 
        cnpj == "66666666666666" || 
        cnpj == "77777777777777" || 
        cnpj == "88888888888888" || 
        cnpj == "99999999999999")
        return false;
         
    // Valida DVs
    tamanho = cnpj.length - 2
    numeros = cnpj.substring(0,tamanho);
    digitos = cnpj.substring(tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0))
        return false;
         
    tamanho = tamanho + 1;
    numeros = cnpj.substring(0,tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
      soma += numeros.charAt(tamanho - i) * pos--;
      if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1))
          return false;
           
    return true;
    
}

function validarCPF(cpf) {  
    cpf = cpf.replace(/[^\d]+/g,'');    
    if(cpf == '') return false; 
    // Elimina CPFs invalidos conhecidos    
    if (cpf.length != 11 || 
        cpf == "00000000000" || 
        cpf == "11111111111" || 
        cpf == "22222222222" || 
        cpf == "33333333333" || 
        cpf == "44444444444" || 
        cpf == "55555555555" || 
        cpf == "66666666666" || 
        cpf == "77777777777" || 
        cpf == "88888888888" || 
        cpf == "99999999999")
            return false;       
    // Valida 1o digito 
    add = 0;    
    for (i=0; i < 9; i ++)       
        add += parseInt(cpf.charAt(i)) * (10 - i);  
        rev = 11 - (add % 11);  
        if (rev == 10 || rev == 11)     
            rev = 0;    
        if (rev != parseInt(cpf.charAt(9)))     
            return false;       
    // Valida 2o digito 
    add = 0;    
    for (i = 0; i < 10; i ++)        
        add += parseInt(cpf.charAt(i)) * (11 - i);  
    rev = 11 - (add % 11);  
    if (rev == 10 || rev == 11) 
        rev = 0;    
    if (rev != parseInt(cpf.charAt(10)))
        return false;       
    return true;   
}

function checkMail(mail){	
    var er = new RegExp(/^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?/);	
    if(typeof(mail) == "string")
    {		
        if(er.test(mail)){ 
            return true; 
        }	
    }else if(typeof(mail) == "object"){		
        if(er.test(mail.value)){ 					
            return true; 				
        }	
    }else{		
        return false;		
    }
}








