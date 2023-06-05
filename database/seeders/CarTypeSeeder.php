<?php

namespace Database\Seeders;

use App\Models\CarType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = ['A-CLASS','GLA','C-CLASS','GLB','E-CLASS', 'GLC', 'GLE', 'CLA'];
        foreach ($datas as $data) {
            CarType::create([
                "type_name" => $data
            ]);
        }
    }
}
