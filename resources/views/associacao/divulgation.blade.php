@extends('layouts.templateIgreja')

@section('titulo', 'Eventos')

@section('corpo')
    <h2 id="divulgacao-title" style="">Eventos realizados pelo Palavra de Vida</h2>

    {{-- div Projetos desenvolvidos pela Associação --}}
    <div>
        <x-associacao.divulgation.distribuicao-literaturas />
        <x-associacao.divulgation.reuniao-mantenedores />
        
        {{-- <x-associacao.divulgation.projeto-social />--}} <span id="hidden">-</span>
    </div>
@endsection
