<head>
    <link rel="stylesheet" href="{{ asset('css/recipes/criarRecipes.css') }}">
</head>

@extends('layouts.main')
@section('title')
@section('content')

    <div class="container">
        <h1><strong>Página de Criação: </strong> Envie a sua Receita.</h1>
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Título da Receita</label>
                <textarea type="text" class="form-control" id="title" name="title" rown="1" required></textarea>
            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="ingredients">Ingredientes</label>
                <textarea class="form-control" id="ingredients" name="ingredients" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="prepare_mode">Modo de Preparo</label>
                <textarea class="form-control" id="prepare_mode" name="prepare_mode" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="rendiment">Rendimento</label>
                <textarea class="form-control" id="rendiment" name="rendiment" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn-enviar">Enviar Receita</button>
        </form>
    </div>

@endsection
