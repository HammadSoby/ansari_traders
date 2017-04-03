<?php

namespace App\AdminModels;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    
    protected $fillable = [
        'slug',
        'name',
        'description',
    ];
    
    public function subCategories()
    {
        return $this->hasMany(SubCategory::class);
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
