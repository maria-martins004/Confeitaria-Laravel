<head>
    <link rel="stylesheet" href="{{ asset('css/recipes/recipes.css') }}">
</head>

@extends('layouts.main')
@section('title', 'recipes')
@section('content')


    <div class="card-group">
        @foreach ($recipes as $recipe)
            <article class="card-col-md-3">
                <div class="card">
                    <img src="{{ asset('./img/novidades-semana/' . $recipe->id . '.png') }}" alt="">
                    <h4 class="card-title">{{ $recipe->title }}</h4>
                    <p class="card-text">{{ $recipe->description }}</p>
                    <img src="{{ asset('./img/top5.png') }}" alt="Rating" class="estrelas">
                    

                    <div class="recipe-content-text">
                        <h3>Ingredientes</h3>
                        <p>{{ $recipe->ingredients }}</p>
                        <h3>Modo de Preparo</h3>
                        <p>{{ $recipe->prepare_mode }}</p>
                    </div>
                </div>
            </article>
        @endforeach
    </div>

    <script>
        const cards = document.querySelectorAll('.card');
        const recipeContents = document.querySelectorAll('.recipe-content-text');

        function activeCardText(c) {
            // Se já está ativo, remove e sai
            if (recipeContents[c].classList.contains('active')) {
                recipeContents[c].classList.remove('active');
                return;
            }
            // Se não está ativo, desativa todos e ativa o atual
            recipeContents.forEach((div) => {
                div.classList.remove('active');
            });
            recipeContents[c].classList.add('active');
        }

        cards.forEach((card, c) => {
            card.addEventListener('click', () => {
                activeCardText(c);
            });
        });
    </script>
@endsection

{{--
O article é um elemento que representa um conteúdo independente e autônomo, mas pode-se usar section para agrupar partes relacionadas dentro do article.
--}}
