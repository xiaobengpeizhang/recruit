<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['position','number','department','experience','degree','description','user_id'];


}
