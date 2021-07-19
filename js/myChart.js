const CHART = document.getElementById("lineChart");
console.log(CHART);
let lineChart = new Chart(CHART, {
    type: 'line',
    data: data = {
        labels: ["1 hour", "2 hour", "3 hour", "4 hour", "5 hour", "6 hour", "7 hour"],
        datasets: [{
            label: 'Bitcoin',
            data: [65, 60, 65, 55, 60, 55, 80],
            fill: false,
            borderColor: 'rgb(248, 85, 26)',
            tension: 0.1
        }]
    }
});