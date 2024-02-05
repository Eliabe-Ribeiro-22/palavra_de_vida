@extends('layouts.templateIgreja')
@section('titulo', 'Início')

@section('corpo')
    <h1 id="formContato-title">Seja um mantenedor deste projeto:</h1>
    <x-associacao.maintainer.maintainer-form/>
    <script type="text/javascript" src="/assets/js/exibe-tipo-contato.js"></script>
@endsection