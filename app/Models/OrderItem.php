<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
   
    
    protected $fillable = [
        'order_id',
        'tea_id',
        'quantity',
        'fixed_price'
    ];
     //tea->orderitem 1:n
    public function tea()
    {
        return $this->belongsTo(Tea::class);
    }
    //order->orderitem 1:n
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
