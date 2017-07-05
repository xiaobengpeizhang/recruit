<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    protected $fillable = ['when','where','job_id','interviewee','type','interviewer','result','reason'];

    public function job(){
        return $this->belongsTo(Job::class);
    }

    public function people(){
        return $this->belongsTo(Person::class );
    }
}
