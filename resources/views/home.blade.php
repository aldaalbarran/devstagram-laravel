@extends('layouts.app')

@section('title')
    Página Principal
@endsection

@section('content')
    <x-listar-post :posts="$posts" />
@endsection