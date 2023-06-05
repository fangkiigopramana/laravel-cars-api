<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'type_id' => $this->type_id,
            'car_name' => $this->car_name,
            'price' => $this->price, 
            'combustion_power' => $this->combustion_power,
            'type_fuel' => $this->type_fuel,
            'transmition' => $this->transmition,
            'spesification' => $this->spesification,
            'address' => $this->address,
            'color' => $this->color,
            'width' => $this->width,
            'weight' => $this->weight,
            'upholstery' => $this->upholstery,
            'length' => $this->length,
            'height' => $this->height,
            'max_speed' => $this->max_speed,
            
        ];
    }
}
