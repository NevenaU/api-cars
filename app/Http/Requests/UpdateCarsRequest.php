<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarsRequest extends FormRequest
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
    private $engines = ['diesel', 'electric', 'petrol', 'hybrid'];
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'brand' => 'string|sometimes|min:2',
            'model' => 'string|sometimes|min:2',
            'year' => 'sometimes|digits:4|integer|min:1900|max:' . (date('Y') + 1),
            'maxSpeed' => 'sometimes|integer|min:20|max:300',
            'isAutomatic' => 'sometimes|boolean',
            'engine' => 'sometimes|string|in:' . implode(',', $this->engines),
            'numberOfDoors' => 'sometimes|integer|min:2|max:5',

        ];
    }
}
