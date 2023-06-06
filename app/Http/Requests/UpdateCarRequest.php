<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCarRequest extends FormRequest
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
        $method = $this->method();

        if ($method == 'PUT'){
            return [
                'type_id' => ['required'],
                'car_name' => ['required'],
                'price' => ['required'],
                'combustion_power' => ['required'],
                'type_fuel' => ['required'],
                'transmition' => ['required'],
                'spesification' => ['required'],
                'address' => ['required'],
                'color' => ['required'],
                'width' => ['required'],
                'weight' => ['required'],
                'upholstery' => ['required'],
                'length' => ['required'],
                'height' => ['required'],
                'max_speed' => ['required']
            ];
        } else {
            return [
                'type_id' => ['sometimes', 'required'],
                'car_name' => ['sometimes', 'required'],
                'price' => ['sometimes', 'required'],
                'combustion_power' => ['sometimes', 'required'],
                'type_fuel' => ['sometimes', 'required'],
                'transmition' => ['sometimes', 'required'],
                'spesification' => ['sometimes', 'required'],
                'address' => ['sometimes', 'required'],
                'color' => ['sometimes', 'required'],
                'width' => ['sometimes', 'required'],
                'weight' => ['sometimes', 'required'],
                'upholstery' => ['sometimes', 'required'],
                'length' => ['sometimes', 'required'],
                'height' => ['sometimes', 'required'],
                'max_speed' => ['sometimes', 'required']
            ];
        }
    }
}
