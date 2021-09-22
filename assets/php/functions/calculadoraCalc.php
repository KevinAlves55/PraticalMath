<?php

    function calculadoraCalc($valor1, $valor2, $conta) {
        // Validação para identificar os tipos de cálculos.
        if ($conta == 'S') {
                        
            $resultado = $valor1 + $valor2;
        
        } else if ($conta == 'SU') {
            
            $resultado = $valor1 - $valor2;
        
        } else if ($conta == 'M') {
            
            $resultado = $valor1 * $valor2;
        
        } else if ($conta == 'D') {
            
            $resultado = round($valor1 / $valor2, 2);
        
        } // Validação para identificar os tipos de cálculos.
        return $resultado;
    }

?>