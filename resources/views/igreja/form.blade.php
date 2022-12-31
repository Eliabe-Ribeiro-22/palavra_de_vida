@extends('layouts.templateIgreja')

@section('titulo', 'Início')

@section('corpo')
    <h1 id="formContato-title">Seja um mantenedor deste projeto:</h1>
    <x-igreja.contato.contato-form/>
    <script type="text/javascript" src="/assets/js/exibe-forma-contato.js"></script>
@endsection
