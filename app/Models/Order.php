<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'country',
        'province',
        'city',
        'address',
        'total_price',
    ];

    protected $casts = [
        'products' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function orderItems()
{
    return $this->hasMany(OrderItem::class);
}

}
