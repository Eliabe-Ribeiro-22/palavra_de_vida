{{-- Formulário de Contato --}}
<form action="{{ route('form_send')}}" id="formContato" method="POST">
    @csrf
    <div class="formContato-container">
        <label>Seu nome:</label>
        <input type="text" name="nome" id="formContato-container-nome" placeholder="Meu nome completo" required>
    </div>

    Escolha se quer por telefone ou email:<br>
        
    <input type="radio" id="email" name="tipo_contato" value="radio_email" onclick="exibe_tipo_contato()">
    <label >Email</label><br>
        
    <input type="radio" id="telefone" name="tipo_contato" value="radio_telefone" onclick="exibe_tipo_contato()" checked>
    <label>Telefone</label><br>

    <div class="formContato-container">
        <label id="lbl-telefone">Seu telefone:</label>
        <input type="text" id="formContato-container-telefone" name="telefone" placeholder="Meu telefone">
    </div>

    <div class="formContato-container">
        <label id="lbl-email">Seu email:</label>
        <input type="email" id="formContato-container-email" name="email" placeholder="Meu email">
    </div>

    <div class="formContato-container">
        <label>Sua mensagem:</label>
        <textarea id="formContato-container-mensagem" name="mensagem" rows="5" cols="33" placeholder="Quero ser mantenedor do Palavra de Vida" required></textarea>
    </div>

    <div class="formContato-container" id="formContato-container-enviar">
        <label></label>
        
        <button type="submit" id="formContato-enviar">
            <p>Enviar</p>
        </button>

    </div>
</form>
