Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Poppins",sans-serif';

//aonde vai ser criado o gráfico
var ctx = document.getElementById("myDoughnutChartCall");

//criação do gráfico
var myDoughnutChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Contratado", "Utilizado", "Extra"],
    datasets: [{
      data: [12, 15, 11],
      backgroundColor: ['#0D47A1', '#3FA777', '#E63946'],
    }],
  },

});