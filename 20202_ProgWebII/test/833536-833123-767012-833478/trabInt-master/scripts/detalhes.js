var $table = $('#detalheGeral')

function initTable() {
    $table.bootstrapTable('destroy').bootstrapTable({
        height: 300,
        mesAno: $('#mesAno').val(),
        columns: [
            [{
                title: 'Nome',
                field: 'nome',
            }, {
                title: 'Valor Mensal',
                field: 'valorMensal',
            }, {
                title: 'Valor Adicional',
                field: 'valorAdicional',
            }, {
                title: 'Qtde. Máx. Extra',
                field: 'qtdeMaxExtra',
            }]
        ]
    })
}

$(function() {
    initTable()

    $('#mesAno').change(initTable)
})