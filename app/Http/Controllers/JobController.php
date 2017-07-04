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

    //实现新增功能
    public function create(){
        return view('job.create');
    }

    public function store(Requests\JobRequest $request){
        $user_id = ['user_id' => Auth::user()->id];
        $data = array_merge($request->all(),$user_id);
        Job::create($data);
        return redirect('/');
    }

    //查看岗位详情
    public function show($id){
        $job = Job::findOrFail($id);
        return view('job.show',compact('job'));
    }

    //修改
    public function edit($id){
        $job = Job::findOrFail($id);
        return view('job.edit',compact('job'));
    }

    public function update(Requests\JobRequest $request ,$id){
        $job = Job::findOrFail($id);

        $job->update($request->all());
        return redirect('/job/'.$id);
    }

    //删除
    public function destroy($id){
        $job = Job::findOrFail($id);
        $job->delete();
        return redirect('/home');
    }
}
