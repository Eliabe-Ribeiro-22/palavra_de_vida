// Radio Buttons
var radio_telefone = document.getElementById('telefone')
var radio_email = document.getElementById('email')
        
// Rótulo e Entrado do telefone
var label_telefone = document.getElementById('lbl-telefone')
var input_telefone = document.getElementById('formContato-container-telefone')

// Rótulo e Entrada do email
var label_email = document.getElementById('lbl-email')
var input_email = document.getElementById('formContato-container-email')


// Aplicamos isso pois o default é que o radiobutton do telefone esteja checado
label_email.style.display = "none"
input_email.type = "text"
input_email.style.display = "none"  

function exibe_tipo_contato(){       

    // Rótulo e Entrada do email
    let label_email = document.getElementById('lbl-email')
    let input_email = document.getElementById('formContato-container-email')
                     
    //Se clicar no radio button telefone
    if (telefone.checked){
        // Exibe
        label_telefone.style.display = "block"
        input_telefone.style.display = "block"
                
        // Oculta
        label_email.style.display = "none"
        input_email.type = "text"
        input_email.style.display = "none"  
    
    }
    else if (email.checked) {
        // Exibe
        label_email.style.display = "block"
        input_email.style.display = "block"
        
        // Oculta
        label_telefone.style.display = "none"
        input_telefone.style.display = "none"            
    }
}