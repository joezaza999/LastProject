<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Generation extends Model
{
    protected $table = 'generation';
    protected $fillable = ['id','name'];

    public function student(){
        return $this->hasMany(Student::class);
    }
}
