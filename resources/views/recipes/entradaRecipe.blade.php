<head>
    link rel="stylesheet" href="{{ asset('css/recipes/entradaRecipe.css') }}">
</head>

@extends('layouts.main')
@section('title')
@section('content')

<div class="">
    <h1>Nossas entradas saborosas estão à sua espera.</h1>
    <h2>Aproveite e peça já o seu!</h2>

    <div class="container-entrada">
        <img src="{{asset('./img/m_q.png')}}" alt="">
        <h3>Mini Quiches</h3>
        <p>Pequenos, irresistíveis e cheios de sabor.</p>
    </div>
      <div class="container-entrada">
        <img src="{{asset('./img/m_c_r.png')}}" alt="">
        <h3>Mini Croissant Recheado</h3>
        <p>Leve, macio e recheado com sabor irresistível.</p>
    </div>
      <div class="container-entrada">
        <img src="{{asset('./img/macarons.png')}}" alt="">
        <h3>Macarons</h3>
        <p>Delicados, coloridos e deliciosamente irresistíveis.</p>
    </div>
      <div class="container-entrada">
        <img src="{{asset('./img/m_t_f.png')}}" alt="">
        <h3>Mini Tortinhas de Fruta</h3>
        <p>Doces, frescas e irresistivelmente saborosas</p>
    </div>
</div>

@endsection