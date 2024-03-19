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
        $inicio = date('m-d-Y', strtotime("-7 days")); //pego o dia do sistema e coloco menos sete dias. y minisculo mostra dois digitos 24
        $fim = date('m-d-Y'); // mantem a data atual

        // fui no site no BC https://dadosabertos.bcb.gov.br/
        // procurei api de dolar do dia
        // fiz determinada configuração
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao'; // faço a correção das datas com \ 

        $dados = json_decode(file_get_contents($url), true);

        // realizam o filtro nos dados
        $cotacao = $dados["value"][0]["cotacaoCompra"];

        // Método mais simples
        // echo "Seus R\$ " . number_format($valor, 2, ",", ".") .  " equivalem a <strong>U\$" . number_format($valor_atualizado, 2) . "</strong> " // number_format( numero de casas) para formatar o número

        // Pegando o valor digitado pelo usuário
        $valor = $_GET['valor'] ?? 0;

        // Equivalência em dólar
        $valor_atualizado = $valor / $cotacao;

        // Método mais profissional
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY); // tudo que for pra variavel padrão já vai estar formatado para o pais desejado
        echo  "<p>Seus " . numfmt_format_currency($padrao, $valor, "BRL") .  " equivalem a <strong>" . numfmt_format_currency($padrao, $valor_atualizado, "USD") . "</strong></p>"

        ?>
        <button onclick="javascript:history.go(-1)">Realizar nova consulta</button>

    </main>
</body>

</html>