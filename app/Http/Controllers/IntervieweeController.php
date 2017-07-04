<?php

namespace App\Http\Controllers;

use App\Job;
use App\Person;
use Illuminate\Http\Request;
use App\Http\Requests\IntervieweeRequest;

use App\Http\Requests;

class IntervieweeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //新增
//    public function create(){
//        return view('interviewee.create');
//    }

    public function add($id){
        $job = Job::findOrFail($id);
        return view('interviewee.create',compact('job'));
    }
}
