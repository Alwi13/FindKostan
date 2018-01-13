<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{
    protected $table = 'elements';

    public function Pokemon()
    {
        $this->hasOne(Pokemon::class);
    }
}
