<?php
    
    // Tratação de erros, usando o null ou o 0
    $media = (double) 0; 
    $nota1 = (double) 0;
    $nota2 = (double) 0;
    $nota3 = (double) 0;
    $nota4 = (double) 0;

    require_once("assets/php/constants/constants.php");
    require_once("assets/php/functions/mediaCalc.php");

    // Validação do botão
    if (isset($_POST["btnCalcular"])) {
        
        // Resgatando dados das caixas
        $nota1 = $_POST["notaUm"];
        $nota2 = $_POST["notaDois"];
        $nota3 = $_POST["notaTres"];
        $nota4 = $_POST["notaQuatro"];


        // Tratamento para caixas vazias
        if ($nota1 == "" || $nota2 == "" || $nota3 == "" || $nota4 == ""){
            $media = (CAIXAS_VAZIA);
        }else {
            
            // Tratamento para caixas com String
            if (is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4)) {
                // Soma do calculo da média
                
                $media = mediaCalc($nota1, $nota2, $nota3, $nota4);
            }
            else {
                $media = (TIPO_DE_DADO);
            }
            
        }
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
    <link rel="stylesheet" href="assets/css/media.css">

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
            <h3>Calculadora Da Média Aritmética</h3>

            <form name="frm-media" method="POST">
                <div class="box">
                    <label>Nota 1: </label>
                    <input type="text" name="notaUm" value="<?=$nota1?>" class="block" maxlength="5" 
                    placeholder="Ex: 10" >
                </div>
                <div class="box">
                    <label>Nota 2: </label>
                    <input type="text" name="notaDois" value="<?=$nota2?>" class="block" maxlength="5" 
                    placeholder="Ex: 6.5" >
                </div>
                <div class="box">
                    <label>Nota 3: </label>
                    <input type="text" name="notaTres" value="<?=$nota3?>" class="block" maxlength="5" 
                    placeholder="Ex: 25.6">
                </div>
                <div class="box">
                    <label>Nota 4: </label>
                    <input type="text" name="notaQuatro" value="<?=$nota4?>" class="block" maxlength="5" 
                    placeholder="Ex: 10.56">
                </div>

                <div id="button">
                    <input type="submit" name="btnCalcular" value="Calcular" class="block">
                </div>
            </form>
            
            <div id="result">
                <?=$media?>
            </div>
        </div>
    </main>

    <footer>
        <span>Copyright © 2021 | Kevin Alves</span>
    </footer>

</body>

</html>