{{-- Index da Igreja --}}
@extends('layouts.templateIgreja')

@section('titulo', 'Início')

@section('corpo')
<div class="slogan-inicio">
    <img src="/assets/img/logo-ap-vida.png" alt="Logo do Palavra de Vida">
    <h1>Seja bem-vindo ao site!</h1>
</div>

<div>
    <img class="foto-inicial" src="/assets/img/doacao-doces-inicio.JPG" alt="foto">
</div>

<div class="projetos-igreja">
    <h2>Associação Palavra de Vida</h2>
    <h3>
        É uma associação civil de direito privado, de caráter beneficente, sem fins lucrativos.
        Tem a meta de arrecadar fundos para adquirir literaturas a serem distribuídas gratuitamente e realizar atividades sociais a pessoas carentes.
    </h3>
</div>

<div class="projetos-igreja">
    <h2>Visão</h2>
    <h3>
        Atender pessoas de todas as idades com literaturas educativas e promover o bem-estar social a todos.
    </h3>   

    <h2>Missão</h2>
    <h3>
        Levar conhecimento, cultura, educação, fé, lazer e entretenimento!
    </h3>

    <h2>Objetivo</h2>
        
    <h3>
        Arrecadar fundos financeiros para aquisição de literaturas, tais como:
    </h3>
        
    <ul class="projeto-lista bold">
        <li><a>Bíblias</a></li>
        <li><a>Livros</a></li>
        <li><a>Revistas</a></li>
        <li><a>Folhetos</a></li>
        <li><a>Apostilas</a></li>
        <li><a>Livretos para crianças, adolescentes, jovens e adultos</a></li>
    </ul>

    <h3>
        Sendo que todos os materiais adquiridas serão distribuídos gratuitamente a toda a sociedade, através de seus sócios-contribuintes.
    </h3>
</div>

<div id="div_imgValores-text">
    <div class="projetos-igreja">

        <h2>Valores</h2>
        <ul class="projeto-lista bold">
            <li>Vida</li>
            <li>Família</li>
            <li>Princípios Morais e éticos</li>
            <li>Educação</li>
            <li>Cultura</li>
            <li>Fé</li>
        </ul>
    </div>
</div>

<div class="projetos-igreja">
    <h2>Meta</h2>

    <h3>Atingir o maior número de pessoas em cidades de Santa Catarina como sócios-contribuintes para aumentar a cada dia a distribuição de literaturas e demais ações sociais que serão realizadas a pessoas carentes.</h3>

    
</div>

<a href="{{ route('maintainer.page') }}" class="link-seja-mantenedor">Acesse aqui para ser um sócio-contribuinte!</a>

<div class="bandeira-familia">
    <img src="https://www.infoescola.com/wp-content/uploads/2009/12/bandeira-de-santa-catarina.jpg" alt="Foto da Bandeira do Estado de Santa Catarina" id="bandeira-sc">
    <img src="https://diocesedesaojoaodelrei.com.br/wp-content/uploads/2017/08/familia-696x362.jpg" id="familia">
</div>
@endsection
