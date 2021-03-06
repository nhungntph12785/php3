<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $table = 'cars';
    public $fillable = ['plate_number', 'owner', 'travel_fee', 'plate_image'];
    public function passengers(){
        return $this->hasMany(Passenger::class, 'car_id');
    }
}
