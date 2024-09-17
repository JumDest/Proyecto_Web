document.addEventListener('DOMContentLoaded', function() {
    // Función para consumir la API y contar portátiles HP
    async function countHpLaptops() {
        try {
            // Consumo de la API
            const response = await fetch('https://www.datos.gov.co/resource/2v8m-m927.json'); // Cambia la URL de la API
            if (!response.ok) {
                throw new Error('Error al obtener datos de la API');
            }
            const data = await response.json();

            // Contar portátiles HP
            const hpLaptopsCount = data.filter(item => item.marca_del_pc === 'HP').length;

            // Mostrar el conteo en la página
            document.getElementById('hpCount').textContent = `Número de portátiles HP: ${hpLaptopsCount}`;

            // Crear gráfico si es necesario
            // Preparar los datos para el gráfico (solo como ejemplo, si deseas usarlo)
            const productNames = ['HP']; // Solo HP en este caso
            const productCounts = [hpLaptopsCount];

            // Crear gráfico con Chart.js (opcional)
            var ctx = document.getElementById('productChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: productNames,
                    datasets: [{
                        label: 'Número de Portátiles HP',
                        data: productCounts,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
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

        } catch (error) {
            console.error('Error contando portátiles HP:', error);
        }
    }

    // Añadir evento al botón
    document.getElementById('generateReport').addEventListener('click', countHpLaptops);
});
