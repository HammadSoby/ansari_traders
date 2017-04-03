<?php

namespace App\AdminModels;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'main_category_id',
        'sub_category_id',
        'slug',
        'price',
        'weight',
        'image',
        'description',
    ];

    public function mainCategory()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
