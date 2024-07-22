@extends('site.layout')

@section("title", "Essa é a nossa Home")

@section('conteudo')

{{-- Isso é um comentário! --}}

{{-- isset($nome) ? "existe" : "Não existe" --}}
@if($nome =="Rodrigo")
true
@else
false
@endif

@endsection