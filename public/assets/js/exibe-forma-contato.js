function ExibeFormaContato(){       
    // Radio Buttons
    let radio_telefone = document.getElementById('telefone')
    let radio_email = document.getElementById('email')

        
    // Rótulo e Entrado do telefone
    let label_telefone = document.getElementById('lbl-telefone')
    let input_telefone = document.getElementById('formContato-container-telefone')

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