<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class JobRequest extends Request
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
            'position' => 'required|max:50',
            'number' => 'required|max:100',
            'department' => 'required',
            'experience' => 'required',
            'degree' => 'required',
            'description' => 'required|min:20'
        ];
    }
}
