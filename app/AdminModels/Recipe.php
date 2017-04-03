<?php

namespace App\AdminModels;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';
    
    protected $fillable = [
        'slug',
        'name',
        'image',
        'description',
    ];
}
