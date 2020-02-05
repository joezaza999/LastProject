<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $fillable = ['studentcode','name','generation_id','image'];

    public function generation(){
        return $this->belongsTo(Generation::class,'generation_id');
    }
}
