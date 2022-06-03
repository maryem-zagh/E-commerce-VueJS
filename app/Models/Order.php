<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'adress',
        'city',
        'country',
        'is_gift',
        'message',
        'total',

    ];


    protected $dates = [
        'created_at',
        'updated_at',

    ];

    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */
    public function products()
    {
        return $this->belongsToMany(Product::class)
            ->withPivot('quantity');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getResourceUrlAttribute()
    {
        return url('/admin/orders/' . $this->getKey());
    }
}
