<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subgroup extends Model
{
    protected $table = 'subgroup';
    protected $fillable = ['name','credit'];
}
