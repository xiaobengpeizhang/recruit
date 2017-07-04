<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class IntervieweeRequest extends Request
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
            'name' => 'required',
            'sex' => 'required',
//            'position' => 'required',
            'experience' => 'required',
            'degree' => 'required',
            'telephone' => 'required|unique:people,telephone',
            'email' => 'required|email|unique:people,telephone'
        ];
    }
}
