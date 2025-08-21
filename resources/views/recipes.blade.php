<head>
    <link rel="stylesheet" href="{{ asset('css/recipes/recipes.css') }}">
</head>

@extends('layouts.main')
@section('title', 'recipes')
@section('content')


    <div class="card-group">
        @foreach ($recipes as $recipe)
            <section>
                <div class="card-col-md-3">
                    <div class="card">
                        <img src="{{ asset('./img/novidades-semana/' . $recipe->id . '.png') }}" alt="">
                        <h4 class="card-title">{{ $recipe->title }}</h4>
                        <p class="card-text">{{ $recipe->description }}</p>
                        <img src="{{ asset('./img/top5.png') }}" alt="Rating" class="estrelas">
                    </div>
                </div>
            </section>
        @endforeach
    </div>
@endsection
