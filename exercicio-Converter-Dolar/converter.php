<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>valor atualizado</title>
</head>

<body>
    <main>
        <h1>Valor convertido em Dolar</h1>
        <?php
        // Método mais simples
        // echo "Seus R\$ " . number_format($valor, 2, ",", ".") .  " equivalem a <strong>U\$" . number_format($valor_atualizado, 2) . "</strong> " // number_format( numero de casas) para formatar o número
        $valor = $_GET['valor'] ?? 0;
        $valor_atualizado = $valor / 5.10;

        // Método mais profissional
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY); // tudo que for pra variavel padrão já vai estar formatado para o pais desejado
        echo  "<p>Seus " . numfmt_format_currency($padrao, $valor, "BRL") .  " equivalem a <strong>" . numfmt_format_currency($padrao, $valor_atualizado, "USD") . "</strong></p>"

        ?>
        <button onclick="javascript:history.go(-1)">Realizar nova consulta</button>

    </main>
</body>

</html>