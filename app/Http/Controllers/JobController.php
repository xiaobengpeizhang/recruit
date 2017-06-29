<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create(){
        return view('job.create');
    }

    public function store(Requests\JobRequest $request){
        $user_id = ['user_id' => Auth::user()->id];
        $data = array_merge($request->all(),$user_id);
        Job::create($data);
        return redirect('/');
    }
}
