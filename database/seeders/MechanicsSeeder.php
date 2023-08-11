<?php

namespace Database\Seeders;

use App\Models\Mechanic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MechanicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mechanic::create([
            'name'=>'Tun Tun'
        ]);
        Mechanic::create([
            'name'=>'Mg Mg'
        ]);
        Mechanic::create([
            'name'=>'Aung Aung'
        ]);
    }
}
