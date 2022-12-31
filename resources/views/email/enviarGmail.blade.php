<h1>{{$nome}} enviou uma mensagem para Associação Palavra de Vida.</h1>
<h2>Nome:</h2>
{{ $nome }} <br>


@if($tipo_contato == "telefone")
	<h2>Telefone:</h2>
@else
	<h2>Email:</h2>
@endif

{{ $campo_contato }} <br>
<h2>Mensagem:</h2>
<p>{{ $mensagem }}</p>
