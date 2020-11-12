/*CHAMADAS EXECEDENTES*/

/*Criação do gráfico rosquinha*/
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChartRosquinha);
 
    function drawChartRosquinha() {
 
         var tipos_call = google.visualization.arrayToDataTable([
           ['Tipo', 'SMS'],
           ['Contratado',     50],
           ['Utilizado',    30],
           ['Extras',     30],
         ]);
 
         var quantidade_call = {
           pieHole: 0.1,
           pieSliceTextStyle: {
             color: 'white',
           },
           fill: {
             color: 'green'
           },
           legend: 'none', 
           color: 'green'
         };
 
         var chart_call = new google.visualization.PieChart(document.getElementById('donut_single_call'));
         chart_call.draw(tipos_call, quantidade_call);
    }

/*Criação do gráfico tabela*/
 google.charts.load('49', {'packages': ['vegachart']}).then(drawChartTable);
 
    function drawChartTable() {
        const dataTable_call = new google.visualization.DataTable();
        dataTable_call.addColumn({type: 'string', 'id': 'category'});
        dataTable_call.addColumn({type: 'number', 'id': 'amount'});
        dataTable_call.addRows([
            ['Seg', 31],
            ['Ter', 45],
            ['Qua', 19],
            ['Qui', 25],
            ['Sex', 110],
            ['Sab', 20],
            ['Dom', 10],
        ]);
        
        const options_call = {
            "vega": {
            "$schema": "https://vega.github.io/schema/vega/v4.json",
            "padding": 4,
        
            'data': [{'name': 'table', 'source': 'datatable'}],
        
            "signals": [
                {
                "name": "tooltip",
                "value": {},
                "on": [
                    {"events": "rect:mouseover", "update": "datum"},
                    {"events": "rect:mouseout",  "update": "{}"}
                ]
                }
            ],
        
            "scales": [
                {
                "name": "xscale",
                "type": "band",
                "domain": {"data": "table", "field": "category"},
                "range": "width",
                "padding": 0.35,
                "round": true
                },
                {
                "name": "yscale",
                "domain": {"data": "table", "field": "amount"},
                "nice": true,
                "range": "height"
                }
            ],
        
            "axes": [
                { "orient": "bottom", "scale": "xscale" },
                { "orient": "left", "scale": "yscale" }
            ],
        
            "marks": [
                {
                "type": "rect",
                "from": {"data":"table"},
                "encode": {
                    "enter": {
                    "x": {"scale": "xscale", "field": "category"},
                    "width": {"scale": "xscale", "band": 1},
                    "y": {"scale": "yscale", "field": "amount"},
                    "y2": {"scale": "yscale", "value": 0}
                    },
                    "update": {
                    "fill": {"value": "rgb(37, 74, 104)"}
                    },
                    "hover": {
                    "fill": {"value": "firebrick"}
                    }
                }
                },
                {
                "type": "text",
                "encode": {
                    "enter": {
                    "align": {"value": "center"},
                    "baseline": {"value": "bottom"},
                    "fill": {"value": "#333"}
                    },
                    "update": {
                    "x": {"scale": "xscale", "signal": "tooltip.category", "band": 0.5},
                    "y": {"scale": "yscale", "signal": "tooltip.amount", "offset": -2},
                    "text": {"signal": "tooltip.amount"},
                    "fillOpacity": [
                        {"test": "datum === tooltip", "value": 0},
                        {"value": 1}
                    ]
                    }
                }
                }
            ]
            }
        };
        
        const chart_call = new google.visualization.VegaChart(document.getElementById('chart-div_call'));
        chart_call.draw(dataTable_call, options_call);
    }