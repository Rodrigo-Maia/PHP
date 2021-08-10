<?php
$century = '';
$ano = filter_input(INPUT_POST,'ano',FILTER_SANITIZE_NUMBER_INT) ;
        $arredondamento = $ano % 100;
//echo $arredondamento;
        $century = round($ano/100);
        if ($arredondamento>50) {
            echo $century;
        } else {
            echo $century + 1;
        }
