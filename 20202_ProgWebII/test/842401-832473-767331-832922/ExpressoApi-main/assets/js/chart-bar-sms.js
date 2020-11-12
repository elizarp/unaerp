Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Poppins",sans-serif';

//aonde vai ser criado o gráfico
var ctx = document.getElementById("myBarChartSms");

//criação do gráfico
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Seg", "Ter", "Qua", "Qui", "Sex", "Sáb","Dom"],
    datasets: [{
      label: "SMS",
      backgroundColor: "#3FA777",
      data: [23, 53, 25, 78, 82, 19,49],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'week'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 7
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 100,
          maxTicksLimit: 6
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});
