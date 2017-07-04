<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Job extends Model
{
    protected $fillable = ['position','number','department','experience','degree','description','user_id'];

    //职位和应聘者关系：一对多
    public function people(){
        return $this->hasMany(Person::class);
    }

    //职位和面试关系：一对多
    public function interview(){
        return $this->hasMany(Interview::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
