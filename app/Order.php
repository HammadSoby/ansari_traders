<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    
    protected $fillable = [
        'user_id',
        'slug',
        'name',
        'email',
        'phone',
        'city',
        'code',
        'address',
        'cart',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
