<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class Tea extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'name',
        'image_path',
        'price',
        'specification',
        'stock',
        'discount',
    ];
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
#section: Relationships
    //N:N 
    //cimke - tea
    //  tea - lehet több cimkéje
    //  cimke - lehet több teához tartozó
    // public function tags(): BelongsToMany
    // {
    //     return $this->belongsToMany(Tag::class);
    // }
    //N:N -> 2x( 1:N)
    // public function tags(): BelongsToMany
    // {
    //     return $this->belongsToMany(Tag::class)->withPivot('tag_id', 'tea_id');
    // }
    // $tea = Tea::find(1);
    // $tagsname = $tea->tags()->name();
    // $teas = Tea::with('tags')->get();
#endsection
}
