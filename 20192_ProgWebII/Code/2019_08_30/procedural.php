<?php

function total_debitos_cliente($id_cliente) {
    print 'total_debitos_cliente' . "<br/>";
}

function registra_venda($id_cliente, $data) {
    print 'total_debitos_cliente' . "<br/>";
}

function registra_venda_item($id_venda, $item) {
    print 'registra_venda_item' . "<br/>";
}

function consulta_estoque($produto){
    print 'consulta_estoque' . "<br/>";
    return 1;
}

function consulta_valor($produto){
    print 'consulta_valor' . "<br/>";
}

function gera_financeiro($id_cliente, $total, $parcelas){
    print 'gera_financeiro' . "<br/>";
}

function conclui_venda ($id_cliente, $parcelas, $itens){
    if (total_debitos_cliente($id_cliente) > 0 ){
        return FALSE;
    }

    $id_venda = registra_venda( $id_cliente, date('Y-m-d'));

    if($itens){
        $total = 0;
        foreach ($itens as $item) {
            if (consulta_estoque($item) <= 0){
                return FALSE;
            }
            $total += consulta_valor($item);
            registra_venda_item($id_venda, $item);
        }
    }

    gera_financeiro($id_cliente, $total, $parcelas);
}

conclui_venda(5, 5, array(1, 2, 3));