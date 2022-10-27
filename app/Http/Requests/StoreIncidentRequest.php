<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIncidentRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'max:70'],
            'criticality' => ['required', 'max:70'],
            'type' => ['required', 'max:70'],
            'status' => ['required', 'max:70'],
            'description'  => ['required', 'max:500'],
        ];
    }

    /**
     * Translate errors found.
     *
     * @return array
     */
    public function messages()
    {
        $fields = ['title' => 70, 'criticality' => 70, 'type' => 70, 'status' => 70, 'description' => 500];
      
        foreach ($fields as $key => $value) {
            $keyRequired = $key. '.required';
            $keyMax = $key. '.max';

            $arr[$keyRequired] = 'O campo "'.$this->translate($key).'" é obrigatório.';
            $arr[$keyMax] = 'O campo "'.$this->translate($key).'" ultrapassou o limite de caracteres permitidos ('.$value.').';
        }

        return $arr;
        // return [
        //     'title.required' => 'O campo título é obrigatório',
        // ];
    }

    private function translate($fieldName) {
        $fields = ['title' => 'Título', 'criticality' => 'Criticidade', 'type' => 'Tipo', 'status' => 'Status', 'description' => 'Descrição'];
        return $fields[$fieldName];
    }
}
