<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Facades\Request;
class partnerRequest extends FormRequest
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
                $rules['fldType'] = 'in:Partner,Sponsor';
                $rules['fldPhoto'] = 'image|mimes:png,jpg,jpeg,gif,svg';
            }
            case 'PUT':
            case 'PATCH':
            {
                $rules['fldName'] = 'required|string';
                $rules['fldType'] = 'required|in:Partner,Sponsor';
                $rules['fldPhoto'] = 'image|mimes:png,jpg,jpeg,gif,svg';
            }
        }
        return $rules;
    }
    public function messages()
    {
        return [
            'fldName.required' => 'Name Required',
            'fldName.string' => 'Name Must Be String',
            'fldPhoto.image' => 'This Field Must Be Image',
            'fldType.required' => 'Type Required',
        ];
    }
}