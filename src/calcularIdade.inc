<?php
    function calcularIdade($data){
    $idade = 0;
    $data_nascimento = date('Y-m-d', strtotime($data));

    $data = explode("-",$data_nascimento);
    $anoNasc = $data[0];
    $mesNasc = $data[1];
    $diaNasc = $data[2];
 
    $anoAtual = date("Y");
    $mesAtual = date("m");
    $diaAtual = date("d");
 
    $idade = $anoAtual - $anoNasc;
    if ($mesAtual < $mesNasc){
        $idade -= 1;
    } elseif ( ($mesAtual == $mesNasc) && ($diaAtual < $diaNasc) ){
        $idade -= 1;
    }
 
    return $idade;
}
?>