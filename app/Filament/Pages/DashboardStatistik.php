<?php

namespace App\Filament\Pages;

use App\Models\Beasiswa;
use Filament\Pages\Page;

class DashboardStatistik extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $navigationLabel = 'Dashboard Statistik';
    protected static string $view = 'filament.pages.dashboard-statistik';

    public function getChartData(): array
    {
$data = Beasiswa::selectRaw("DATE_FORMAT(tanggal_mulai, '%Y-%m') as periode, SUM(jumlah) as total")
    ->groupBy('periode')
    ->orderBy('periode')
    ->get();

        return [
            'labels' => $data->pluck('periode'),
            'values' => $data->pluck('total'),
        ];
    }
}