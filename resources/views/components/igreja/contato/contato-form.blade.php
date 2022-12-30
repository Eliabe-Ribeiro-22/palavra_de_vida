{{-- Formulário de Contato --}}
<form action="{{ route('form_send')}}" method="POST">
    @csrf
    <div class="formContato-container">
        <label>Seu nome:</label>
        <input type="text" name="nome" id="formContato-container-nome" placeholder="Digite seu nome" required>
    </div>

        Escolha se quer por telefone ou email:<br>
        <!-- <div class="formContato-container"> -->
        
        <input type="radio" id="email" name="tipo_contato" value="email" onclick="exibeInput()">
        <label>Email</label><br>
        
        <input type="radio" id="telefone" name="tipo_contato" value="telefone" onclick="exibeInput()" checked>
        <label>Telefone</label><br>

         <!-- </div> -->

    <div class="formContato-container">
        <label id="lbl-telefone">Seu telefone:</label>
        <input type="text" id="formContato-container-telefone" name="telefone" placeholder="Digite seu telefone" required>
    </div>

    <div class="formContato-container">
        <label id="lbl-email">Seu email:</label>
        <input type="email" id="formContato-container-email" name="email" placeholder="Digite seu email" required>
    </div>

    <div class="formContato-container">
        <label>Sua mensagem:</label>
        <textarea id="formContato-container-mensagem" name="mensagem" rows="5" cols="33" placeholder="Digite sua mensagem" required></textarea>
    </div>

    <div class="formContato-container" id="formContato-container-enviar">
        <label></label>
        
        <button type="submit" id="formContato-enviar">
            <p>Enviar</p>
        </button>

    </div>
</form>
