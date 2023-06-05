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
    }
}
