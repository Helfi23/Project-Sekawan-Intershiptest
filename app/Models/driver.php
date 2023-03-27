<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $primaryKey = 'driver_id';
    use HasFactory;
    protected $fillable = [
       'driver_id','nama_driver','nomor_telepon','alamat','jenis_kendaraan','photo','status'
    ];
}
