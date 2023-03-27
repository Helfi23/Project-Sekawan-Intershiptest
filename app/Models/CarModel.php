<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $primaryKey = 'car_id';
    use HasFactory;
    protected $fillable = [
        'car_id','merk','tipe','plat_nomor','tahun_pembuatan','kapasitas_penumpang','status','photo'
    ];
}
