<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];
    
    
    protected $dates = [
        'published_at',
        'created_at',
        'updated_at',
    
    ];
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/products/'.$this->getKey());
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }
 
    public function orders() {
        return $this->belongsToMany(Order::class,'order_product', 'product_id', 'order_id');
    }
}
