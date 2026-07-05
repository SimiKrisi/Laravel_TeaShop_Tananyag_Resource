<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
#section: Model configuration
    // tábla nevének felülírása:
    // protected $table= 'my_Custom_orders_table';
    // 
    // Order model -> orders tábla

    // elsődleges kulcs felülírása:
    // protected $primaryKey = 'my_custom_id';
    // public $incrementing = false; // ha az elsődleges kulcs nem auto-increment
    // protected $keyType = 'string'; // ha az elsődleges kulcs string
    // 
    // timestamps kikapcsolása:
    // public $timestamps = false;
    // user_id	shipping_fee	total_amount	personal name	address	phone_number	comment	status
#endsection
    // tömeges hozzárendelés engedélyezése
    protected $fillable = [
        'user_id',
        'shipping_fee',
        'total_amount',
        'personal_name',
        'address',
        'phone_number',
        'comment',
        'status'
    ];
    //user->orders 1:n
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    //order->orderitems 1:n
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
#section: Model configuration2  
    // protected $guarded = []; // minden mező tömeges hozzárendelés engedélyezett
#endsection
#section: Testing
    // php artisan tinker parancsban tesztelhetjük a modellt:
    // App\Models\Order::first(); // az első rendelés lekérése
#endsection
}
