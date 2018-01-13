<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';

    public function Pokemon()
    {
        $this->belongsTo(Pokemon::class);
    }

    public function Transaction()
    {
        $this->hasOne(Transaction::class);
    }
}
