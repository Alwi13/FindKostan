<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = 'pokemons';

    public function Element()
    {
        $this->belongsTo(Element::class);
    }

    public function Comment()
    {
        $this->hasOne(Comment::class);
    }

    public function Cart()
    {
        $this->hasOne(Cart::class);
    }
}
