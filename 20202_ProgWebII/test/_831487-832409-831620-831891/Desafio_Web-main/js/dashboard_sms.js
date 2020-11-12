/*SMS*/

/*Criação do gráfico rosquinha*/
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChartPizza);

      function drawChartPizza() {

        var tipos_sms = google.visualization.arrayToDataTable([
          ['Tipo', 'SMS'],
          ['Contratado',     50],
          ['Utilizado',    40],
          ['Extras',     20],
        ]);

        var quantidade_sms = {
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

        var chart_sms = new google.visualization.PieChart(document.getElementById('donut_single_sms'));
        chart_sms.draw(tipos_sms, quantidade_sms);
      }

/*Criação do gráfico tabela*/
    google.charts.load('49', {'packages': ['vegachart']}).then(drawChartTable);

    function drawChartTable() {
      const dataTable_sms = new google.visualization.DataTable();
      dataTable_sms.addColumn({type: 'string', 'id': 'category'});
      dataTable_sms.addColumn({type: 'number', 'id': 'amount'});
      dataTable_sms.addRows([
          ['Seg', 28],
          ['Ter', 55],
          ['Qua', 43],
          ['Qui', 91],
          ['Sex', 81],
          ['Sab', 53],
          ['Dom', 19],
      ]);

      const options_sms = {
          "vega": {
          "$schema": "https://vega.github.io/schema/vega/v4.json",
          "padding": 1,

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

    const chart_sms = new google.visualization.VegaChart(document.getElementById('chart-div_sms'));
    chart_sms.draw(dataTable_sms, options_sms);
    }