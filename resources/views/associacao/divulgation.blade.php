@extends('layouts.templateIgreja')

@section('titulo', 'Divulgação')

@section('corpo')

<!-- Modelo de Bíblia AP-VIDA -->
<h2 id="divulgacao-title">
    Modelo de Bíblia Oficial da Associação Palavra de Vida
</h2>
<img src="/assets/img/entrega-biblias/biblia.jpeg" id="pg-Divulgation-imagem-biblia-oficial">


<!-- Componente Carrosel com imagens de Entregas de Bíblias a pessoas que não tinham Bíblia -->
<x-associacao.divulgation.carrossel_entrega_biblias />
    

<!-- Imagens de Bíblias AP-VIDA -->
<h2 id="divulgacao-title">
    Bíblias oficiais da Associação Palavra de Vida   
</h2>
<img src="/assets/img/entrega-biblias/biblia-em-grupo.jpeg" id="imagem_biblia_grupo_pgDivulgation">

<!-- modelos de textos com imagens - DESATIVADOS -->
{{-- <h2 id="divulgacao-title" style="">Eventos realizados pelo Palavra de Vida</h2> --}}

    {{-- div Projetos desenvolvidos pela Associação --}}
    <div>
        {{-- <x-associacao.divulgation.distribuicao-literaturas /> --}}
        {{-- <x-associacao.divulgation.reuniao-mantenedores /> --}}
        
        {{-- <x-associacao.divulgation.projeto-social /> --}}
        <span id="hidden">-</span>
    </div>
@endsection
