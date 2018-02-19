var form=document.getElementById('frmLoginUsuarios'); 
form.noValidate=true;
form.onsubmit=validateForm;  


function validateForm(event){

    // fetch cross-browser event object and form node
    event = (event ? event : window.event);
    
    var form = (event.target ? event.target : event.srcElement), 
        f, field, formvalid = true;
    
    var cpInfoValidLogin = document.getElementById('cpInfoValidLogin'),
        cpHTMLTemporario = "<table class='table table-hover'><tr><th>Nome do Campo</th><th>Correção do Erro</th></tr>",
        cpHTMLNovo = "",
        cpCampoErro = "",
        cpCorrecaoErro = "";
    
    var qdInfoValidLogin = document.getElementById('qdInfoValidLogin'),
        qdHTMLTemporario = qdInfoValid.innerHTML,
        qdHTMLNovo = "",
        qdcontadorErros = 0;
    
    var qdInfoPanelLogin = document.getElementById('qdInfoPanelLogin');

    // loop all fields
    for (f = 0; f < form.length; f++) {

        // get field
        field = form.elements[f];

        // ignore buttons, fieldsets, etc.
        if (field.nodeName !== "INPUT" && field.nodeName !== "TEXTAREA" && field.nodeName !== "SELECT") continue;

        // is native browser validation available?
        if (typeof field.willValidate !== "undefined") {


            // native validation available
            if (field.nodeName === "INPUT" && field.type !== field.getAttribute("type")) {

                // input type not supported! Use legacy JavaScript validation
                field.setCustomValidity(LegacyValidation(field) ? "" : "error");

            }
            
            // native browser check
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
            // verificar se o email é valido.
            if(field.name == 'email' ) {
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
                case 'email': 
                        cpCampoErro = "E-mail";
                        cpCorrecaoErro = "Insirá um e-mail valido."
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
        qdInfoPanelLogin.style.display = 'block';
        
        // mostra um campo de informação para que o usuário corrija os problemas.
        if (qdcontadorErros > 1) {
            qdInfoValidLogin.innerHTML = qdcontadorErros + " erros foram encontrados";    
        }else{
            qdInfoValidLogin.innerHTML = "01 erro foi encontrado."; 
        }
        
        // mostra um campo de informação para que o usuário corrija os problemas.
        cpHTMLNovo = "</table>";
        cpInfoValidLogin.innerHTML = cpHTMLTemporario + cpHTMLNovo;

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

//valida se o e-mail informado esta correto
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

