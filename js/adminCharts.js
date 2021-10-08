const chartOne = document.getElementById("chartOne");
console.log(chartOne);
let adminChart = new Chart(chartOne, {
    type: 'bar',
    data: data = {
        labels: ["Users", "Admins"],
        datasets: [{
            label: 'Data',
            data: [100, 100],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(75, 192, 192)'
            ],
            borderWidth: 1
        }]
    }
});

const chartTwo = document.getElementById("adminChartTwo");
console.log(chartTwo);
let adminChartTwo = new Chart(chartTwo, {
    type: 'line',
    data: data = {
        labels: ["Donations", "No donations"],
        datasets: [{
            label: 'Donations',
            data: [50, 50, ],
            fill: false,
            borderColor: 'rgb(75, 192, 192)',
            tension: 0.1
        }]
    }
});