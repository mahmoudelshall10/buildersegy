<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Facades\Request;
class trainingRequest extends FormRequest
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
    public function rules(Request $Request)
    {
        $rules = array();
        switch ($this->method()) {
            case 'POST':
            {
                $rules['fldName'] = 'required|string';
                $rules['fldDuration'] = 'required|string|min:4|max:10';

            }
            case 'PUT':
            case 'PATCH':
            {
                $rules['fldName'] = 'required|string';
                $rules['fldDuration'] = 'required|string|min:4|max:10';
            }
        }
        return $rules;
    }
    public function messages()
    {
        return [
            'fldName.required' => 'Name Required',
            'fldDuration.required' => 'Duration Required',
            'fldName.string' => 'Name Must Be String',
            'fldDuration.min' => 'Duration Must Be At Least 4 Characters ',
            'fldDuration.max' => 'Duration Cannot Be More Than 10 Characters ',
        ];
    }
}