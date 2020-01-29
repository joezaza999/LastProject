<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $table = 'award';
    protected $fillable = ['id','title','content','image'];
}
