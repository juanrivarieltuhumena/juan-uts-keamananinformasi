<x-filament::page>
    <div class="bg-white dark:bg-gray-800 rounded shadow p-6 mt-8">
        <h2 class="text-lg font-bold mb-4">Grafik Jumlah Beasiswa per Bulan</h2>
        <canvas id="beasiswaChart" height="80"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('beasiswaChart').getContext('2d');
        const beasiswaChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: @json($this->getChartData()['labels']),
                datasets: [{
                    label: 'Jumlah Beasiswa',
                    data: @json($this->getChartData()['values']),
                    borderColor: 'rgb(59, 130, 246)',
                    backgroundColor: 'rgba(59, 130, 246, 0.2)',
                    fill: true,
                    tension: 0.4,
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: { beginAtZero: true }
                }
            }
        });
    </script>
</x-filament::page>