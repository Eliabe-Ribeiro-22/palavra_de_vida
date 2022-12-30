@extends('layouts.templateIgreja')

@section('titulo', 'Início')

@section('corpo')
    <h1 id="formContato-title">Seja um mantenedor deste projeto:</h1>
    <x-igreja.contato.contato-form/>
    <script type="text/javascript">
            function exibeInput(){
            var tipo_contato = document.getElementsByName("tipo_contato")
            
                    let label_telefone = document.getElementById('lbl-telefone')
            let input_telefone = document.getElementById('formContato-container-telefone')

            let label_email = document.getElementById('lbl-email')
            let input_email = document.getElementById('formContato-container-email')
                

                console.log(telefone)
            
            
            //Se clicar no radio button telefone
            if (telefone.checked){
                // Entao:
                //  label telefone é exibido
                //  input#telefone é exibido
                
                //  E label email é ocultado
                label_email.style.display = "none"
            

                //  input#email é ocultado
                input_email.style.display = "none"  
            
            }
            // Senão
            else if (email.checked) {}{
                // Então:
                //  o label email é exibido
                //  input#email é exibido

                //  E label telefone é ocultado
                label_telefone.style.display = "none"
                
                //  input#telefone é ocultado
                input_telefone.style.display = "none"            
            }        
    
            }

            
            let telefone = document.getElementById('telefone')
            let email = document.getElementById('email')

     
    </script>
@endsection
