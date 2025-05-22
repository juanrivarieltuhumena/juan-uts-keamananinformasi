<?php

namespace App\Filament\Pages;

use App\Models\Beasiswa;
use Filament\Pages\Page;

class BeasiswaDashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-banknotes';
    protected static ?string $navigationLabel = 'Dashboard Beasiswa';
    protected static ?string $navigationGroup = 'Beasiswa';
    protected static string $view = 'filament.pages.beasiswa-dashboard';

    public function getStats(): array
    {
        return [
            'total_penerima' => Beasiswa::count(),
            'total_nominal' => Beasiswa::sum('jumlah'),
            'jenis_beasiswa' => Beasiswa::distinct('jenis_beasiswa')->count('jenis_beasiswa'),
        ];
    }
}