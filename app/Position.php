<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'position';
    public function member(){
        return $this->hasMany(Member::class);
    }
}

