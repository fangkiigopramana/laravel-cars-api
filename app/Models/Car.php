<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $foreignKey = ['type_id'];

    public function type()
    {
        return $this->belongsTo(CarType::class,'type_id');
    }
}
