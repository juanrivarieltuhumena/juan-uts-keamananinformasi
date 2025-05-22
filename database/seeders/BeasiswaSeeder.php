<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Beasiswa;

class BeasiswaSeeder extends Seeder
{
    public function run()
    {
        Beasiswa::create([
            'nama_penerima'    => 'Andi Saputra',
            'jenis_beasiswa'   => 'Beasiswa Prestasi',
            'jumlah'           => 5000000,
            'tanggal_mulai'    => '2025-01-01',
            'tanggal_selesai'  => '2025-12-31',
        ]);
    }
}
