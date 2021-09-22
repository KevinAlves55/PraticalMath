<?php

    function tabuadaCalc($tabuada, $contador) {

        $resultado = (string) null;
        
        for ($i = 1 ; $i <= $contador ; $i++) {
            
            $conta = $tabuada * $i;
            $resultado = $resultado . $tabuada . ' x ' . $i . ' = ' . $conta . "<br>";

        } return $resultado;
    }

?>