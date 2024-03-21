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
    $divisor = $_GET['divisor'] ?? 1;
    ?>
    <main>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" min="0" value="<?= $dividendo ?>">
            <label for="divisor">Dividendo</label>
            <input type="number" name="divisor" id="divisor" min="1" value="<?= $divisor ?>">
            <button type="submit" value="analisar">Analisar</button>
        </form>
        <section id="resultado">
            <h2>Resultados</h2>
            <?php
            $resultado = intdiv($dividendo, $divisor);
            $resto = $dividendo % $divisor;
            ?>
            <table class="divisao">
                <tr>
                    <td><?= $dividendo ?></td>
                    <td><?= $divisor ?></td>
                </tr>
                <tr>
                    <td><?= $resto ?></td>
                    <td><?= $resultado ?></td>
                </tr>

            </table>
        </section>
    </main>
</body>


</html>