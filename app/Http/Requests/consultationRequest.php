<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;
class consultationRequest extends FormRequest
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
                $rules['fldSubject'] = 'required|string';
                $rules['fldMessage'] = 'required|string';
                $rules['fldEmail'] = 'required|email';

            }
            case 'PUT':
            case 'PATCH':
            {
                $rules['fldName'] = 'required|string';
                $rules['fldSubject'] = 'required|string';
                $rules['fldMessage'] = 'required|string';
                $rules['fldEmail'] = 'required|email';
            }
        }
        return $rules;
    }
    public function messages()
    {
        return [
            'fldName.required' => 'Name Required',
            'fldSubject.required' => 'Subject Required',
            'fldMessage.required' => 'Message Required',
            'fldEmail.required' => 'Email Required',
            'fldName.string' => 'Name Must Be String',
            'fldSubject.string' => 'Job Title Must Be String',
            'fldMessage.string' => 'Message Must Be String',
            'fldEmail.email' => 'This Field Must Be An Email',
        ];
    }
}
