<x-filament::page>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <x-filament::stat
            label="Total Penerima"
            :value="$this->getStats()['total_penerima']"
            icon="heroicon-o-users"
        />
        <x-filament::stat
            label="Total Nominal Beasiswa"
            :value="number_format($this->getStats()['total_nominal'], 0, ',', '.')"
            icon="heroicon-o-currency-dollar"
        />
        <x-filament::stat
            label="Jenis Beasiswa"
            :value="$this->getStats()['jenis_beasiswa']"
            icon="heroicon-o-academic-cap"
        />
        <x-filament::stat
            label="Total Dana Beasiswa yang Telah Diberikan"
            :value="'IDR ' . number_format($this->getStats()['total_nominal'], 0, ',', '.')"
            icon="heroicon-o-banknotes"
        />
    </div>
</x-filament::page>