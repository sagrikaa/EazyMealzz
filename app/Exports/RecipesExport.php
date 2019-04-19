<?php

namespace App\Exports;

use App\Recipe;
use Maatwebsite\Excel\Concerns\FromCollection;

class RecipesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Recipe::all();
    }
}
