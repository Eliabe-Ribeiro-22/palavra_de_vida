{{-- Página Sobre Nós --}}

@extends('layouts.templateIgreja')

@section('titulo', 'Sobre Nós')

@section('corpo')
<h1 class="text_center" id="title_page_sobre">Sobre Nós</h1>

<p class="text_center" id="text_page_sobre">
	Somos uma associação civil de direito privado, de caráter beneficente, sem fins lucrativos.<br>

    Temos a meta de arrecadar fundos para <strong>adquirir literaturas a serem distribuídas gratuitamente</strong> e realizar atividades sociais a pessoas carentes. <br>

    Nossa história inicia no <strong>ano de 2023</strong>, quando o <strong>Pastor Volni</strong>, juntamente com <strong>Jacy Faust</strong>, atual presidente da associação, decidem criar uma associação para distribuições de literaturas, a exemplo da Bíblia Sagrada. <br>

    Porém o <strong>Pastor Volni</strong>, atual tesoureiro da Associação Palavra de Vida, realiza distribuição de Bíblias há mais de duas décadas por onde quer que esteve pastorando, seja em cidades como Blumenau e Lages, como também em Campo Belo do Sul, Capão Alto e Ponte Alta do Norte.<br>


    <br> <br>

 </p>

 <h2 class="text_center" id="subtitle_page_sobre">Assista aos vídeos abaixo falando acerca da Associação</h2>

<video controls loop class="video_page_sobre">
	<source src="/assets/video/video-site.palavra-de-vida.wmv" type="video/wmv">
	<source src="/assets/video/video-site.palavra-de-vida.mp4" type="video/mp4">
	Seu navegador não suporta esse vídeo
</video>
<p class="text_center" id="text_page_sobre">Explicação da associação pelo tesoureiro Pastor Volni</p>



<video controls loop class="video_page_sobre"> 
	<source src="/assets/video/video-recebedor-biblia.wmv" type="video/wmv">
	<source src="/assets/video/video-recebedor-biblia.mp4" type="video/mp4">
	Seu navegador não suporta esse vídeo
</video>
<p class="text_center" id="text_page_sobre">
	Palavra de um recebedor que teve sua vida transformada pela Bíblia recebida 
	<br><br><br><br>
</p>
@endsection