<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_penerima',
        'jenis_beasiswa',
        'jumlah',
        'tanggal_mulai',
        'tanggal_selesai',
    ];

    protected $casts = [
        'jumlah' => 'float',
        'tanggal_mulai' => 'date',
        'tanggal_selesai' => 'date',
    ];
}
