<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $fillable = ['when','where','interviewee','type','interviewer','result','reason'];

    public function job(){
        return $this->belongsTo(Job::class);
    }

    public function people(){
        return $this->belongsTo(Person::class );
    }
}
