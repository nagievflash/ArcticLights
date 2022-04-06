document.addEventListener('DOMContentLoaded', () => {
    const ctx = document.querySelector('.js-users-chart')
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Коренные жители', 'Приезжие'],
            datasets: [{
                label: '# of users',
                data: [ctx.dataset.root, ctx.dataset.nonRoot],
                backgroundColor: [
                    '#f1be44',
                    '#4f7fc0',
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Chart.js Pie Chart'
                }
            }
        },
    })
})
