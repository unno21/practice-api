<?php

namespace App\Http\Requests\Animal;

use App\Http\Requests\APIRequest;
use App\Rules\EvenRule;

class UpdateAnimalRequest extends APIRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|exists:animals',
            'name' => 'required|min:3|max:50|unique:animals,id,' . $this->id,
            'age' => ['required', 'numeric', new EvenRule()],
        ];
    }
}
