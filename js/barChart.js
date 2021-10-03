const CHARTTWO = document.getElementById("barChart");
console.log(CHARTTWO);
let barChart = new Chart(CHARTTWO, {
    type: 'bar',
    data: data = {
        labels: ["one day", "two days", "three days", "four days", "five days", "six days", "seven days", "eight days", "nine days", "ten days" ],
        datasets: [{
            label: 'Invest responsibly',
            data: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgb(255, 99, 132)',
                'rgb(75, 192, 192)',
                'rgb(255, 99, 132)',
                'rgb(75, 192, 192)',
                'rgb(255, 99, 132)',
                'rgb(75, 192, 192)',
                'rgb(255, 99, 132)',
                'rgb(75, 192, 192)'
            ],
            borderWidth: 1
        }]
    }
});