<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarsRequest extends FormRequest
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
            'brand' => 'string|required|min:2',
            'model' => 'string|required|min:2',
            'year' => 'required|digits:4|integer|min:1900|max:'.(date('Y')+1),
            'maxSpeed' => 'integer|min:20|max:300',
            'isAutomatic' => 'required|boolean',
            'engine' => 'required|string|in:' . implode(',', $this->engines),
            'numberOfDoors' => 'required|integer|min:2|max:5',
        ];
    }
}
