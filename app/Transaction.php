<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';

    public function Cart()
    {
        $this->belongsTo(Cart::class);
    }

    public function User()
    {
        $this->belongsTo(User::class);
    }

}
