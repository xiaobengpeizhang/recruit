<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['name','sex','job_id','email','telephone','experience','degree'];

    public function job(){
        return $this->belongsTo(Job::class);
    }

    public function interviews(){
        return $this->hasMany(Interview::class,'interviewee','id');
    }
}
