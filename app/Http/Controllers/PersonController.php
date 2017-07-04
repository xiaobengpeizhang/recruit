<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

use App\Http\Requests;

class PersonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //新增应聘者
    public function store(Requests\IntervieweeRequest $request){
        Person::create($request->all());
        $job_id = $request->get('job_id');
//        echo $job_id;
        return redirect('/job/'.$job_id);
    }

    //查看详情
    public function show($id){
        $person = Person::findOrFail($id);
        return view('interviewee.show',compact('person'));
    }
}
