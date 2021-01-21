<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Facades\Request;
class numberRequest extends FormRequest
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
                $rules['fldNumber'] = 'required|integer';

            }
            case 'PUT':
            case 'PATCH':
            {
                $rules['fldName'] = 'required|string';
                $rules['fldNumber'] = 'required|integer';
            }
        }
        return $rules;
    }
    public function messages()
    {
        return [
            'fldName.required' => 'Name Required',
            'fldNumber.required' => 'This Field Required',
            'fldName.string' => 'Name Must Be String',
            'fldNumber.integer' => 'This Field Must Be Integer',
        ];
    }
}