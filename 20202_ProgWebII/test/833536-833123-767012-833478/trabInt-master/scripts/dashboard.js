var smsRosca = document.getElementById("smsRosca");
var myLineChart = new Chart(smsRosca, {
    type: 'doughnut',
    data: {
        labels: ["Contratado", "Utilizado", "Extra"],
        datasets: [{
            data: [25, 2, 5],
            backgroundColor: ["#46BFBD", "#F7464A", "#FDB45C"],
            hoverBackgroundColor: ["#5AD3D1", "#FF5A5E", "#FFC870"]
        }]
    },
    options: {
        title: {
            display: true,
            position: 'top',
            text: 'SMS'
        },
        responsive: true,
        legend: {
            display: true,
            position: 'bottom',
            align: 'center',
            fullWidth: true
        }
    },
});

var chamadaRosca = document.getElementById("chamadaRosca");
var myLineChart = new Chart(chamadaRosca, {
    type: 'doughnut',
    data: {
        labels: ["Contratado", "Utilizado", "Extra"],
        datasets: [{
            data: [150, 50, 25],
            backgroundColor: ["#46BFBD", "#F7464A", "#FDB45C"],
            hoverBackgroundColor: ["#5AD3D1", "#FF5A5E", "#FFC870"]
        }]
    },
    options: {
        title: {
            display: true,
            position: 'top',
            text: 'CHAMADAS EXCEDENTES'
        },
        responsive: true,
        legend: {
            display: true,
            position: 'bottom',
            align: 'center',
            fullWidth: true
        }
    },
});

var smsBarra = document.getElementById("smsBarra");
var myLineChart = new Chart(smsBarra, {
    type: 'bar',
    data: {
        labels: ["Seg", "Ter", "Qua", "Qui", "Sex", "Sab", "Dom"],
        datasets: [{
            data: [10, 20, 30, 30, 30, 30, 30],
            barPercentage: 0.5,
            barThickness: 6,
            maxBarThickness: 8,
            minBarLength: 2,
            backgroundColor: "#46BFBD",
            hoverBackgroundColor: "#5AD3D1"
        }]
    },
    options: {
        title: {
            display: true,
            position: 'top',
            text: 'NÚMERO DIÁRIOS DE SMS'
        },
        responsive: true,
        legend: {
            display: false,
            position: 'bottom',
            align: 'center',
            fullWidth: true
        }
    },
});

var smsBarra = document.getElementById("chamadaBarra");
var myLineChart = new Chart(smsBarra, {
    type: 'bar',
    data: {
        labels: ["Seg", "Ter", "Qua", "Qui", "Sex", "Sab", "Dom"],
        datasets: [{
            data: [10, 20, 30, 30, 30, 30, 30],
            barPercentage: 0.5,
            barThickness: 6,
            maxBarThickness: 8,
            minBarLength: 2,
            backgroundColor: "#46BFBD",
            hoverBackgroundColor: "#5AD3D1"
        }]
    },
    options: {
        title: {
            display: true,
            position: 'top',
            text: 'NÚMERO DIÁRIOS DE SMS'
        },
        responsive: true,
        legend: {
            display: false,
            position: 'bottom',
            align: 'center',
            fullWidth: true
        }
    },
});

$("#smsRosca").click(
    function(evt) {
        window.location = './detalhes.html';
    }
);

$("#chamadaRosca").click(
    function(evt) {
        window.location = './detalhes.html';
    }
);

$("#smsBarra").click(
    function(evt) {
        window.location = './detalhes.html';
    }
);

$("#chamadaBarra").click(
    function(evt) {
        window.location = './detalhes.html';
    }
);