<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Facades\Request;
class bspylRequest extends FormRequest
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
                $rules['fldEmail'] = 'required|email|between:10,50|unique:tbl_bspyls,fldEmail';
                $rules['fldAge'] = 'required|numeric|digits:2';
                $rules['fldUniversity'] = 'required|string';
                $rules['fldFaculty'] = 'required|string';
                $rules['fldPhone'] = 'required|string|between:10,11|unique:tbl_bspyls,fldPhone';
                $rules['fldGovernment'] = 'required|string';
                $rules['fldQuestion3'] = 'required|numeric';
            }
            case 'PUT':
            case 'PATCH':
            {
                
            }
        }
        return $rules;
    }
    public function messages()
    {
        return [
            'fldName.required' => 'Name Required',
            'fldName.string' => 'Name Must Be String',

            'fldEmail.required' => 'Email Required',
            'fldEmail.email' => 'Email Must Be String',
            'fldEmail.unique' => 'Email Must Be Unique',
            'fldEmail.between' => 'Email Size Between 10 To 50',

            'fldAge.required' => 'Age Required',
            'fldAge.size' => 'Age Size',
            'fldAge.integer' => 'Age Must Be Integer',

            'fldPhone.required' => 'Phone Required',
            'fldPhone.string' => 'Phone Must Be String',
            'fldPhone.unique' => 'Phone Must Be Unique',
            'fldPhone.between' => 'Phone Size Between 10 To 11',

            'fldUniversity.required' => 'University Required',
            'fldUniversity.string' => 'University Must Be String',

            
            'fldFaculty.required' => 'Faculty Required',
            'fldFaculty.string' => 'Faculty Must Be String',


            'fldGovernment.required' => 'Government Required',
            'fldGovernment.string' => 'Government Must Be String',

            'fldQuestion3.required' => 'Number Years Experince Is Required',
            'fldQuestion3.numeric' => 'Years Experince Must Be Number',
        ];
    }
}
