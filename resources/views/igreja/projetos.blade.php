@extends('layouts.templateIgreja')

@section('titulo', 'Projetos')

@section('corpo')
    <h2 id="divulgacao-title" style="">Eventos realizados pelo Palavra de Vida</h2>

    <!-- Church's Projects -->
    <!-- <x-igreja.carrossel.carrossel /> -->

    {{-- div Projetos desenvolvidos pela igreja --}}
    <div>
        <x-igreja.projetos.distribuicao-literaturas />
        <x-igreja.projetos.reuniao-mantenedores />
        
        {{-- <x-igreja.projetos.projeto-social />--}} <span id="hidden">-</span>
    </div>
@endsection
