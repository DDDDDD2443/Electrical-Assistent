const ctx = document.getElementById('energyChart').getContext('2d');

// Aducem datele de la serverul PHP
fetch('data.php')
    .then(response => response.json())
    .then(data => {
        // Construim graficul
        const chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: data.ore,  // Orele din zi
                datasets: [{
                    label: 'Consum Energie (kWh)',
                    data: data.consumLunar,
                    borderColor: 'red',
                    fill: false
                }, {
                    label: 'Producție Energie (kWh)',
                    data: data.productieLunar,
                    borderColor: 'green',
                    fill: false
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
    });
