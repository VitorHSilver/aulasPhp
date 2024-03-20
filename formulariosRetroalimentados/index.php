<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    // Capturando os dados do Formulário Retroalimentado 
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;


    ?>
    <main>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="text" name="v1" id="v1" value="<?php echo $valor1 ?>">
            <label for="v2">Valor 2</label>
            <input type="text" name="v2" id="v2" value="<?php echo $valor2 ?>">
            <button type="submit" value="Somar">Somar</button>
        </form>
    </main>
    <section id="resultado">
        <h2> Resultado da Soma</h2>
        <?php
        $resultado = $valor1 + $valor2;
        echo "O Resultado de $valor1 com $valor2 foi: $resultado" ?>
    </section>
</body>

</html>