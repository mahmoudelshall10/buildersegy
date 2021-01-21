<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Facades\Request;
class clientFeedBackRequest extends FormRequest
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
                $rules['fldJobTitle'] = 'required|string';
                $rules['fldFeedBack'] = 'required|string';
                $rules['fldPhoto'] = 'image|mimes:png,jpg,jpeg,gif,svg';
            }
            case 'PUT':
            case 'PATCH':
            {
                $rules['fldName'] = 'required|string';
                $rules['fldJobTitle'] = 'required|string';
                $rules['fldFeedBack'] = 'required|string';
                $rules['fldPhoto'] = 'image|mimes:png,jpg,jpeg,gif,svg';
            }
        }
        return $rules;
    }
    public function messages()
    {
        return [
            'fldName.required' => 'Name Required',
            'fldJobTitle.required' => 'Job Title Required',
            'fldFeedBack.required' => 'FeedBack Required',
            'fldName.string' => 'Name Must Be String',
            'fldJobTitle.string' => 'Job Title Must Be String',
            'fldFeedBack.string' => 'FeedBack Must Be String',
            'fldPhoto.image' => 'This Field For Image',
        ];
    }
}
