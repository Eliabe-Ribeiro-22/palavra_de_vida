{{-- Formulário de Contato --}}
<form action="{{ route('form_send')}}" id="formContato" method="POST">
    @csrf
    <div class="formContato-container">
        <label>Seu nome:</label>
        <input type="text" name="nome" id="formContato-container-nome" placeholder="Meu nome completo" required>
    </div>

    <div class="formContato-container">
        <h2 id="tipo_contato">Escolha se quer que entremos em contato por telefone ou e-mail:</h2>
    </div>
    
    <div class="radios-tipo-contato">  
            <div>
                    <input type="radio" id="email" name="tipo_contato" value="radio_email" onclick="exibe_tipo_contato()">
                    <label >E-mail</label>
            </div>

            <div>
                    <input type="radio" id="telefone" name="tipo_contato" value="radio_telefone" onclick="exibe_tipo_contato()" checked>
                    <label>Telefone</label>    
            </div>
    </div>

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
        <textarea id="formContato-container-mensagem" name="mensagem" rows="5" cols="33" placeholder="Mensagem" required title="mensagem para associação">Quero ser sócio-contribuinte da Associação Palavra de Vida!</textarea>
    </div>

    <div class="formContato-container" id="formContato-container-enviar">        
        <button type="submit" id="formContato-enviar">
            <p>Enviar</p>
        </button>
    </div>
</form>
