<?php

namespace App\Http\Controllers;

use App\Interview;
use App\Person;
use Illuminate\Http\Request;

use App\Http\Requests;

class InterviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //邀请面试
    public function add($id){
        $person = Person::findOrFail($id);
        return view('interview.create',compact('person'));
    }
    public function store(Requests\InterviewRequest $request){
//        dd($request->all());
        Interview::create($request->all());
        return redirect('person/'.$request->get('interviewee'));
    }
}
