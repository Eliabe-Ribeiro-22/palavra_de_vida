@extends('layouts.templateIgreja')

@section('titulo', 'Eventos')

@section('corpo')
<x-associacao.divulgation.carrossel_entrega_biblias />
    

<img src="/assets/img/entrega-biblias/biblia-em-grupo.jpeg">

<p class="p-divulgacao">
    Bíblias oficiais da Associação Palavra de Vida   
</p>


    <h2 id="divulgacao-title" style="">Eventos realizados pelo Palavra de Vida</h2>

    {{-- div Projetos desenvolvidos pela Associação --}}
    <div>
        <x-associacao.divulgation.distribuicao-literaturas />
        <x-associacao.divulgation.reuniao-mantenedores />
        
        <x-associacao.divulgation.projeto-social />
        <span id="hidden">-</span>
    </div>
@endsection
