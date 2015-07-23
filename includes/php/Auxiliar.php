<?php

class Auxlilar
{
	function criaChave($cUF,$aamm,$cnpj,$serie,$numero,$tpEmis){
    $rNum = '';
    for( $x=0;$x<8;$x++ ){
        $rNum .= rand(0,9);
    }
    
    $modelo = '55';
    $serie = str_pad($serie, 3, "0", STR_PAD_LEFT);
    $numero = str_pad($numero, 9, "0", STR_PAD_LEFT);
    
    $chave = $cUF . $aamm . $cnpj . $modelo . $serie . $numero . $tpEmis . $rNum;
    //         2 + 4 + 14 +2 + 3 + 9 + 9 = 43   

    $chave = $chave . $this->calcDV($chave);    
    return $chave;
    
}

function calcDV($chave){
    $n = strlen($chave);    
    $aPeso = array(4,3,2,9,8,7,6,5,4,3,2,9,8,7,6,5,4,3,2,9,8,7,6,5,4,3,2,9,8,7,6,5,4,3,2,9,8,7,6,5,4,3,2);
    if ($n != 43){
        echo "Erro na chave";
        return '';
    }
    $aChave = str_split($chave);
    $soma = 0;
    for($x=$n-1;$x>0;$x--){
        $soma += $aPeso[$x] * $aChave[$x];
    }
    $resto = $soma%11;
    if ($resto == 0 || $resto == 1){
        $dv = 0;
    } else {
        $dv = 11-$resto;
    }
    return $dv;
}

}