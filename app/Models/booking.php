<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    public function booking()
    {
        return $this->belongsTo('\App\Models\CarModel','car_id', 'car_id');
        return $this->belongsTo('\App\Models\driver','driver_id', 'driver_id');
    }
    use HasFactory;
     protected $fillable = [
        'car_id','driver_id','status','tanggal_sewa'
    ];
}
