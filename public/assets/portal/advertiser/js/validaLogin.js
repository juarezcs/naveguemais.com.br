var form=document.getElementById('blaFrmLogin'); 
form.onsubmit=validateForm;  


function validateForm(event){

    // fetch cross-browser event object and form node
    event = (event ? event : window.event);
    
    var form = (event.target ? event.target : event.srcElement), 
        f, field, formvalid = true;

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
                }else{
                    formvalid = false;
                    window.location.href="/anunciantes/register";
                }
            
            }else if(field.name == 'password' ) {
                
                var regex = /^(?=(?:.*?[A-Z]){2})(?=(?:.*?[0-9]){2})(?=(?:.*?[!@#$%*()_+^&}{:;?.]){1})(?!.*\s)[0-9a-zA-Z!@#$%;*(){}_+^&]*$/; 
                if(field.value.length != 8) {
                    // form is invalid
                    formvalid = false;  
                    window.location.href="/anunciantes/register";
                }
                else if(!regex.exec(field.value))
                {
                    // form is invalid
                    formvalid = false; 
                    window.location.href="/anunciantes/register";
                }          
            }else{                 
            }      
        }
        else {
            
            // form is invalid
            formvalid = false;
            window.location.href="/anunciantes/register";
        }
    }

    // cancel form submit if validation fails
    if (!formvalid) {

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

