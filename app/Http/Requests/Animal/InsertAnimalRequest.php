<?php

namespace App\Http\Requests\Animal;

use App\Http\Requests\APIRequest;
class InsertAnimalRequest extends APIRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:50|unique:animals',
            'age' => 'required|numeric'
        ];
    }
}
