<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Success extends Model
{
    protected $table = 'success';
    protected $fillable = ['name','text','image'];
}
