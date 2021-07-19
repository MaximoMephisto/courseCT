const CHARTTWO = document.getElementById("barChart");
console.log(CHARTTWO);
let barChart = new Chart(CHARTTWO, {
    type: 'bar',
    data: data = {
        labels: ["one day", "two days", "tree days", "four days", "five days" ],
        datasets: [{
            label: 'Your progress in our course',
            data: [20, 40, 60, 80, 100],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(75, 192, 192, 0.2)'
            ],
            borderColor: [
                'rgb(75, 192, 192)',
                'rgb(255, 99, 132)',
                'rgb(75, 192, 192)',
                'rgb(255, 99, 132)',
                'rgb(75, 192, 192)',
                'rgb(153, 102, 255)',
                'rgb(201, 203, 207)'
            ],
            borderWidth: 1
        }]
    }
});