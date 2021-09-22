<?php

    $inicial = (int) null;
    $final = (int) null;
    $i = (int) null;
    $par = (string) null;
    $impar = (string) null;
    $quantPar = (int) null;
    $quantImpar = (int) null;
    $mensagem = (string) null;

    require_once("assets/php/constants/constants.php");
    require_once("assets/php/functions/parImparCalc.php");

    if (isset($_POST["btnCalcular"])) {
        
        $inicial = $_POST["inicial"]; 
        $final = $_POST["final"];
        
        if ($inicial == '' || $final == '') {
            
            $mensagem = (CAIXAS_VAZIA);
        
        } else {
            
            if ($inicial >= $final) {

                $mensagem = (ERRO_NUMERO_MAIOR);

            }
            else {
                
                /*$par = par($inicial, $final);
                $impar = impar($inicial, $final);
                $quantPar = quantPar($inicial, $final);
                $quantImpar = quantImpar($inicial, $final);*/
                
                for ($i = $inicial ; $i <= $final ; $i++) {
                    if ($i % 2 == 0) {
                        $par = $par . $i . "<br>";
                        $quantPar++;
                    } else {
                        $impar = $impar . $i . "<br>";
                        $quantImpar++;
                    }
                }
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
    <link rel="stylesheet" href="assets/css/parImpar.css">

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

            <h3>Pares e Ímpar</h3>

            <form name="frmMedia" method="POST">
                <section id="choice-button">
                    <div class="box">
                        <label>N Inicial: </label>
                        
                        <select name="inicial">
                            <option value="">Por favor selecione um número
                            
                                <?php 
                                    for ($i = 0 ; $i <= 500 ; $i++) {
                                        echo("<option value='".$i."'>".$i."</option>");
                                    }
                                ?>
                        
                            </option>
                        </select>
                    </div>
                    
                    <div class="box">
                        <label>N Final: </label>
                        
                        <select name="final">
                            <option value="">Por favor selecione um número
                                
                                <?php 
                                    for ($i = 100 ; $i <= 1000 ; $i++) {
                                        echo("<option value='".$i."'>".$i."</option>");
                                    }
                                ?>
                            
                            </option>
                        </select>
                    </div>

                    <div id="button">
                        <input type="submit" class="block" name="btnCalcular" value="Calcular">
                    </div>
                </section>
                
                <section id="result">
                    <div class="pairs-odd">
                        <h4>N Pares</h4>

                        <div class="box-pairs-odd">
                            <?=$par?>
                        </div>

                        <span class="destaque">Quantidades de pares: <?=$quantPar?></span>
                    </div>
                    
                    <div class="pairs-odd">
                        <h4>N Ímpar</h4>

                        <div class="box-pairs-odd">
                            <?=$impar?> 
                        </div>

                        <span class="destaque">Quantidades de impas: <?=$quantImpar?></span>
                    </div>
                </section>

                <div id="mensagem">
                    <?=$mensagem?>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <span>Copyright © 2021 | Kevin Alves</span>
    </footer>

</body>

</html>