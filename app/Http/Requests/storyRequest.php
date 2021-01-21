<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Facades\Request;
class storyRequest extends FormRequest
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
                $rules['fldText'] = 'required|string';
                $rules['fldAddress'] = 'required|string';
                $rules['fldDate'] = 'required|date';
                $rules['fldPhoto'] = 'image|mimes:png,jpg,jpeg,gif,svg';
            }
            case 'PUT':
            case 'PATCH':
            {
                $rules['fldName'] = 'required|string';
                $rules['fldText'] = 'required|string';
                $rules['fldAddress'] = 'required|string';
                $rules['fldDate'] = 'required|date';
                $rules['fldPhoto'] = 'image|mimes:png,jpg,jpeg,gif,svg';
            }
        }
        return $rules;
    }
    public function messages()
    {
        return [
            'fldName.required' => 'Name Required',
            'fldText.required' => 'Story Required',
            'fldAddress.required' => 'Address Required',
            'fldDate.required' => 'Date Required',
            'fldName.string' => 'Name Must Be String',
            'fldText.string' => 'Story Must Be String',
            'fldAddress.string' => 'Address Must Be String',
            'fldDate.date' => 'This Field Must Be Date',
            'fldPhoto.image' => 'This Field Must Be Image',
        ];
    }
}