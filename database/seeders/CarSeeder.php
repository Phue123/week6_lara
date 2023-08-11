<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create([
            'name'=>'Honda fit',
            'model'=>'2019',
            'mechanic_id'=>1
        ]);
        Car::create([
            'name'=>'Lancruser',
            'model'=>'2018',
            'mechanic_id'=>2
        ]);
        Car::create([
            'name'=>'Mark',
            'model'=>'2017',
            'mechanic_id'=>1
        ]);
    }
}
