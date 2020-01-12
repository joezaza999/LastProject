<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newupdate extends Model
{
    protected $table = 'newupdate';
    protected $fillable = ['id','title','content'];
}
