<?php

    $tabuada =(int) 1;
    $contador =(int) 1;
    $i = (int) 1;
    $resultado = null;
    $conta= null;

    require_once("assets/php/constants/constants.php");
    require_once("assets/php/functions/tabuadaCalc.php");

    if(isset($_POST["btnCalcular"])) {

        $tabuada = $_POST['tabuada'];
        $contador = $_POST['contador'];

        // Validação de caixas vazias
        if ($tabuada !== '' && $contador !== '') {
            
            // Validação para multiplicação por 0
            if ($tabuada == 0 || $contador == 0) {
                
                $resultado = (ERRO_DE_ZERO);
            
            } else {
                
                // Validação para String
                if (is_numeric($tabuada) && is_numeric($contador)) {
                    
                    $resultado = tabuadaCalc($tabuada, $contador);
                    
                    // for ($i = 1 ; $i <= $contador ; $i++) {
                    //     $conta = $tabuada * $i;
                    //     $resultado = $resultado . $tabuada . ' x ' . $i . ' = ' . $conta . "<br>";
                    // }
                }
                else {
                    
                    $resultado = (TIPO_DE_DADO);
                
                } // Validação para String   
            
            } // Validação para multiplicação por 0
        } 
        else {
            
            $resultado = (CAIXAS_VAZIA);
        
        } // Validação de caixas vazias
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="stylesheet" href="assets/css/tabuada.css">

    <script src="assets/js/menu.js" defer></script>

    <title>Atividade de php</title>
</head>

<body>

    <!-- Menu animado -->

    <input id="navbar" type="checkbox">
    <label for="navbar">
        <div class="menu">
            <span class="hamburger"></span>
        </div>
    </label>
    
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="media.php">Média</a></li>
        <li><a href="calculadora.php">Calculadora</a></li>
        <li><a href="tabuada.php">Tabuada</a></li>
        <li><a href="parImpar.php">Par ou Ímpar</a></li>
    </ul>

    <header>
        <div class="container">
            <div id="title">
                <h1>practical math</h1>
            </div>

            <nav id="navigation">
                <ol>
                    <li>Equipe</li>
                    <li>Serviços</li>
                    <li>Sugestões</li>
                </ol>
            </nav>
            
            <div class="social-networks">
                <img src="assets/img/face.png" alt="">
                <img src="assets/img/inst.png" alt="">
                <img src="assets/img/git.png" alt="">
            </div>
        </div>
    </header>

    <main>
        <div id="container-form">

            <h3>Tabuada</h3>

            <form name="frm-tabuada" method="POST">
                <section id="choice-button">
                    <div class="box">
                        <label>Tabuada: </label>
                        <input type="text" class="block" name="tabuada" value="<?=$tabuada?>" maxlength="9">
                    </div>
                    
                    <div class="box">
                        <label>Contador: </label>
                        <input type="text" class="block" name="contador" value="<?=$contador?>" maxlength="9">
                    </div>

                    <div id="button">
                        <input type="submit" class="block" name="btnCalcular" value="Calcular">
                    </div>
                </section>
                
                <section id="result">
                    <div>
                        <?=$resultado?>
                    </div>
                </section>
            </form>
        </div>
    </main>

    <footer>
        <span>Copyright © 2021 | Kevin Alves</span>
    </footer>

</body>

</html>