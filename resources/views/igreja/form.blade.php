@extends('layouts.templateIgreja')

@section('titulo', 'Início')

@section('corpo')
    <h1 id="formContato-title">Seja um mantenedor deste projeto:</h1>
    <x-igreja.contato.contato-form/>
    <script type="text/javascript">
            function exibeInput(){
            // var tipo_contato = document.getElementsByName("tipo_contato")
            
            let telefone = document.getElementById('telefone')
            let email    = document.getElementById('email')

            console.log(telefone)
            let label_telefone = document.getElementById('lbl-telefone')
            let input_telefone = document.getElementById('formContato-container-telefone')

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
    </script>
@endsection
