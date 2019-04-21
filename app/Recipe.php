<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    public $timestamps = false;

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function ingredients() {
        return $this->belongsToMany('App\Ingredient', 'recipe_ingredients',
                                     'recipe_id', 'ingredient_id')
                                    ->withPivot('serving_size');
    }
}
