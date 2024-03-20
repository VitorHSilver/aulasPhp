<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia da divisão</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php
    $dividendo = $_GET['dividendo'] ?? 0;
    $divisor = $_GET['divisor'] ?? 0;
    ?>
    <main>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="text" name="dividendo" id="dividendo" value="<?= $dividendo ?>">
            <label for="divisor">Dividendo</label>
            <input type="text" name="divisor" id="divisor" value="<?= $divisor ?>">
            <button type="submit" value="analisar">Analisar</button>
        </form>
        <section id="resultado">
            <h2>Resultados</h2>
            <?php
            $resultado = $dividendo / $divisor;
            $sobra = $dividendo % $divisor;
            echo "Dividendo:" . $dividendo . "<br>";
            echo "Divisor:" . $divisor . "<br>";
            echo "Sobra:" . $sobra . "<br>";
            echo "Chave:" . $resultado . "<br>";
            ?>

        </section>
    </main>
</body>

</html>