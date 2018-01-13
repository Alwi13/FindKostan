<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    public function Pokemon()
    {
        $this->belongsTo(Pokemon::class,'pokemon');
    }

    public function User()
    {
        $this->belongsTo(User::class,'user');
    }
}
