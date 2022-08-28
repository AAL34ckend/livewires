<div>
    {{--  content  --}}
    <canvas id="myChart" width="400" height="400"></canvas>
    {{--  Javascript  --}}
    @push('js')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js" integrity="sha512-ElRFoEQdI5Ht6kZvyzXhYG9NqjtkmlkfYk0wr6wHxU9JEHakS7UJZNeml5ALk+8IKlU6jDgMabC3vkumRokgJA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            setInterval(() => Livewire.emit('ubahData'),3000);
            var chartData = JSON.parse(`<?php echo $products ?>`)
            console.log('chartData');
            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: chartData.label,
                    datasets: [{
                        label: '# of Votes',
                        data: chartData.data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
            Livewire.on('berhasiUpdate',event => {
                var chartData = JSON.parse(event.data);
                console.log(chartData);
                myChart.data.labels = (chartData.label);
                myChart.data.datasets.forEach((dataset) => {
                    dataset.data = (chartData.data);
                });
                myChart.update();
            });
        </script>
    @endpush
</div>
