@extends('layouts.templateIgreja')

@section('titulo', 'Início')

@section('corpo')
    <h1 id="formContato-title">Seja um mantenedor deste projeto:</h1>
    <x-igreja.contato.contato-form/>
@endsection
