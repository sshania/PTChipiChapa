<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emplo extends Model
{
    use HasFactory;
    protected $table='chipi';

    protected $fillable =
    [
        'nama',
        'umur',
        'address',
        'tanggal_lahir',
        'agama',
        'jabatan',
        'divisi',
        'nomor_telepon'
    ];
}