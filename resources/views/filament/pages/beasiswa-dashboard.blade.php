<x-filament::page>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-8">
        <div class="p-4 bg-white dark:bg-gray-800 rounded shadow">
            <div class="text-gray-500 text-sm">Total Penerima</div>
            <div class="text-2xl font-bold">{{ $this->getStats()['total_penerima'] }}</div>
        </div>
        <div class="p-4 bg-white dark:bg-gray-800 rounded shadow">
            <div class="text-gray-500 text-sm">Total Nominal Beasiswa</div>
            <div class="text-2xl font-bold">IDR {{ number_format($this->getStats()['total_nominal'], 0, ',', '.') }}</div>
        </div>
        <div class="p-4 bg-white dark:bg-gray-800 rounded shadow">
            <div class="text-gray-500 text-sm">Jenis Beasiswa</div>
            <div class="text-2xl font-bold">{{ $this->getStats()['jenis_beasiswa'] }}</div>
        </div>
        <div class="p-4 bg-white dark:bg-gray-800 rounded shadow">
            <div class="text-gray-500 text-sm">Total Dana Beasiswa yang Telah Diberikan</div>
            <div class="text-2xl font-bold">IDR {{ number_format($this->getStats()['total_nominal'], 0, ',', '.') }}</div>
        </div>
    </div>
</x-filament::page>