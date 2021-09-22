<?php

    // Declaração oficial de uma variável e definindo seu tipo de dado.
    $resultado = (double) 0;
    $valor1 = (int) 0;
    $valor2 = (int) 0;
    $conta = (string) null;

    require_once("assets/php/constants/constants.php");
    require_once("assets/php/functions/calculadoraCalc.php");

    // Validação para verificar se o botão calcular foi acionado
    if (isset($_POST["btnCalcular"])) {
        
        // Validação para verificar caixas vazias
        if ($_POST['valueOne'] == '' || $_POST['valueTwo'] == '') {
            $resultado = (CAIXAS_VAZIA);
        } 
        else {
        
            // Resgatando valores do formulário no HTML:
            $valor1 = $_POST['valueOne'];
            $valor2 = $_POST['valueTwo'];
            
            // Validação para verificar o input radio caso não seja preenchido
            if (isset($_POST['rdConta'])) {
                $conta = strtoupper($_POST['rdConta']);
                
                // Validação para verificar erro de string
                if (is_numeric($valor1) && is_numeric($valor2)) {
                    
                    $resultado = calculadoraCalc($valor1, $valor2, $conta);
                }
                else {
                    $resultado = (TIPO_DE_DADO);
                } // Validação para verificar erro de string

            }
            else {
                $resultado = (CAIXAS_VAZIA);
            } // Validação para verificar o input radio caso não seja preenchido
            
        
        } // Validação para verificar caixas vazias
    
    } // Validação para verificar se o botão calcular foi acionado

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
    <link rel="stylesheet" href="assets/css/calculadora.css">

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

            <h3>Calculadora Das 4 Operações</h3>

            <form name="frmMedia" method="POST">
                <section id="choice">
                    <div class="box">
                        <label>Valor 1: </label>
                        <input type="text" name="valueOne" value="<?=$valor1?>" class="block" class="input" maxlength="5" placeholder="Ex: 102">
                    </div>
                    
                    <div class="box">
                        <label>Valor 2: </label>
                        <input type="text" name="valueTwo" value="<?=$valor2?>" class="block" class="input" maxlength="5" placeholder="Ex 88.69">
                    </div>
                </section>
                
                <section id="radio-result">
                    <div id="radio">
                        <input type="radio" class="block" name="rdConta" value="S"
                        <?= $conta == 'S'? 'checked' : ''?>> <i>Somar</i>
                        
                        <input type="radio" class="block" name="rdConta" value="SU"
                        <?= $conta == 'SU'? 'checked' : ''?>> <i>Subtrair</i>
                        
                        <input type="radio" class="block" name="rdConta" value="M" 
                        <?= $conta == 'M'? 'checked' : ''?>> <i>Multiplicar</i>
                        
                        <input type="radio" class="block" name="rdConta" value="D"
                        <?= $conta == 'D'? 'checked' : ''?>> <i>Dividir</i>
                    </div>
                    
                    <div id="result">
                        <?=$resultado?>
                    </div>
                </section>

                <div id="button">
                    <input type="submit" class="block" name="btnCalcular" value="Calcular">
                </div>
            </form>
        </div>
    </main>

    <footer>
        <span>Copyright © 2021 | Kevin Alves</span>
    </footer>

</body>

</html>