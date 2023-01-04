<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePartnerFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request. *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $id = $this->id;
        $rules = [
            'razaoSocial' => 'required|string|max:255|min:3',
            'description' => 'required|string|max:255|min:3',
            'CNPJ' => [
                'required',
                'min:6',
                'max:15'    
            ],
            'opening_hours' => [
                'required',
                'min:6',
                'max:15'    
            ],
            'image'=>[
                'nullable',
                'image',
                'max:1024' //1MB
            ]
            //
        ];
        if($this->method('PUT')){
            $rules['password'] =  [
                'nullable',
                'min:6',
                'max:15'    
            ];

        }

        return $rules;
    }
}
