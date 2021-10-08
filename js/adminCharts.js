var chartOne = document.getElementById("chartOne");
console.log(chartOne);
var adminChart = new Chart(chartOne, {
    type: 'bar',
    data: data = {
        datasets: [{
            label: 'Users and Admins',
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: ['red'],
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
let url = '';