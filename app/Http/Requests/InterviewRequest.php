<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InterviewRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'when' => 'required',
            'where' => 'required',
            'job_id' => 'required',
            'interviewee' => 'required',
            'type' => 'required',
            'interviewer' => 'required|max:225',
            'result' => 'max:225',
            'reason' => 'min:5'
        ];
    }
}
