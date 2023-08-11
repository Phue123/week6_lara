<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Owner::create([
            'name'=>'U Ba',
            'car_id'=>4
        ]);
        Owner::create([
            'name'=>'U Mya',
            'car_id'=>2
        ]);
        Owner::create([
            'name'=>'U Zaw',
            'car_id'=>3
        ]);
    }
}
