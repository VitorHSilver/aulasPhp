<pre>
<?php
$inicio = date('m-d-Y', strtotime("-7 days")); //pego o dia do sistema e coloco menos sete dias. y minisculo mostra dois digitos 24
$fim = date('m-d-Y'); // mantem a data atual


// fui no site no BC https://dadosabertos.bcb.gov.br/
// procurei api de dolar do dia
// fiz determinada configuração
$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao'; // faço a correção das datas com \ 

$dados = json_decode(file_get_contents($url), true);
// var_dump($inicio);
// var_dump($fim);



// realizam o filtro nos dados
$cotacao = $dados["value"][0]["cotacaoCompra"];

//teste meu
$link = $dados["@odata.context"];
echo "A cotação foi de $cotacao"
?>
</pre>