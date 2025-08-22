<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipeController extends Controller
{


    public function recipes($id = null)
    {
        $recipes = Recipe::all();
        return view('recipes', ['recipes' => $recipes]);
    }

    public function create()
    {
        return view('recipes.criarReceita'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
            'rendiment' => 'required|string',
        ]);

        $recipe = new Recipe();
        $recipe->title = $request->title;
        $recipe->description = $request->description;
        $recipe->ingredients = $request->ingredients;
        $recipe->prepare_mode = $request->prepare_mode;
        $recipe->rendiment = $request->rendiment;
        $recipe->save();

        return redirect()->route('recipes')->with('success', 'Receita criada com sucesso!');
    }

    public function entradas()
    {
        return view('recipes.entradaRecipe');
    }
}
