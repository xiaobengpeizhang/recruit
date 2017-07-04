<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['name','sex','position','email','telephone','experience','degree'];

    public function job(){
        return $this->belongsTo(Job::class);
    }

    public function interview(){
        return $this->hasMany(Interview::class);
    }
}
