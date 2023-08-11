<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;
    public function owners(){
        return $this->hasManyThrough(Owner::class,Car::class,'mechanic_id','car_id');
    }
}
