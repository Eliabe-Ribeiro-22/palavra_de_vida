@extends('layouts.templateIgreja')

@section('titulo', 'Eventos')

@section('corpo')
    <h2 id="divulgacao-title" style="">Entregas de Bíblias a pessoas</h2>

    

{{-- 
    + ---------------------------------- +
    | Componente do carrossel de imagens |
    | presente na página projetos .      |
    + ---------------------------------- +
--}}

{{-- CSS e JS do carrossel --}}
<link rel="stylesheet" href="/assets/css/carrossel/carrossel.css">
<script type="text/javascript" src="/assets/js/carrossel.js"></script>

    {{-- Carrosel com imagens de entrega de bíblias--}}
    <div class="container">
    <button class="arrow-left control" aria-label="Previous image">&#8592;</button>
    <button class="arrow-right control" aria-label="Next image">&#8594;</button>
    <div class="gallery-wrapper">
        <div class="gallery">
            <img class="item" src="/assets/img/entrega-biblias/pastor-entrega-biblias.jpeg"
                alt="Pastor Volni entregando Bíblias a pessoas">
            <img class="item current-item" src="/assets/img/entrega-biblias/pastor-entrega-biblias-2.jpeg"
                 alt="Pastor Volni entregando Bíblias a pessoas">
            <img class="item" src="/assets/img/entrega-biblias/pastor-entrega-biblias-3.jpeg"
                alt="Pastor Volni entregando Bíblias a pessoas">
            <img class="item" src="/assets/img/entrega-biblias/pastor-entrega-biblias-4.jpeg"
                alt="Pastor Volni entregando Bíblias a pessoas">
            <img class="item" src="/assets/img/entrega-biblias/pastor-entrega-biblias-5.jpeg"
            alt="Pastor Volni entregando Bíblias a pessoas">
            <img class="item" src="/assets/img/entrega-biblias/pastor-entrega-biblias-6.jpeg" alt="Pastor Volni entregando Bíblias a pessoas">
            <img class="item" src="/assets/img/entrega-biblias/pastor-entrega-biblias-7.jpeg"
               alt="Pastor Volni entregando Bíblias a pessoas">
        </div>
    </div>
</div>

{{-- Script do carrossel --}}
<script>
    slide();
</script>
Entrega de Bíblias pelo Pastor Volni, tesoureiro da Asssociação Palavra de Vida

    <h2 id="divulgacao-title" style="">Eventos realizados pelo Palavra de Vida</h2>

    {{-- div Projetos desenvolvidos pela Associação --}}
    <div>
        <x-associacao.divulgation.distribuicao-literaturas />
        <x-associacao.divulgation.reuniao-mantenedores />
        
        <x-associacao.divulgation.projeto-social />
        <span id="hidden">-</span>
    </div>
@endsection
