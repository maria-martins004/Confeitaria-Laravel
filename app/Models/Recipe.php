<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $table = 'recipes';
    protected $primaryKey = 'id';
    protected $keyType = 'int';

    protected $fillable = [
        'title',
        'description',
        'id_category',
        'rating',
        'private',
        'ingredients',
        'prepare_mode',
        'time',
        'rendiment',
        'chefs_favourite',
        'ativo'
    ];
    // protected $teste = 'oi maria:)';


    public function cadastreSe()
    {
        $recipe = Recipe::all();
        return $recipe;
    }
}
