<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
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
            'type_id' => ['required'],
            'car_name' => ['required'],
            'price' => ['required','number'],
            'combustion_power' => ['required','number'],
            'type_fuel' => ['required'],
            'transmition' => ['required'],
            'spesification' => ['required'],
            'address' => ['required'],
            'color' => ['required'],
            'width' => ['required','number'],
            'weight' => ['required','number'],
            'upholstery' => ['required'],
            'length' => ['required','number'],
            'height' => ['required','number'],
            'max_speed' => ['required']
        ];
    }
}
