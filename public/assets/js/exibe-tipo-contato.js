// Radio Buttons
const radio_telefone = document.getElementById('telefone')
const radio_email = document.getElementById('email')
        
// Rótulo e Entrada do telefone
const label_telefone = document.getElementById('lbl-telefone')
const input_telefone = document.getElementById('formContato-container-telefone')

// Rótulo e Entrada do email
const label_email = document.getElementById('lbl-email')
const input_email = document.getElementById('formContato-container-email')

// Aplicamos isso pois o default, é que o radiobutton do telefone esteja checado
label_email.style.display = "none"
input_email.type = "text"
input_email.style.display = "none"  

function exibe_tipo_contato(){                        
    //Se clicar no radio button telefone
    if (telefone.checked){
        // Exibe
        label_telefone.style.display = "inline-block"
        input_telefone.style.display = "initial"
                
        // Oculta
        label_email.style.display = "none"
        input_email.type = "text"
        input_email.style.display = "none"  
    
    }
    else if (email.checked) {
        // Exibe
        label_email.style.display = "inline-block"
        input_email.style.display = "initial"
        
        // Oculta
        label_telefone.style.display = "none"
        input_telefone.style.display = "none"            
    }
}