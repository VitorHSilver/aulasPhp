<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    echo "Hoje é dia: " . date("d/M/Y");
    echo '<br>';
    echo "Dia da Semana: " . date("D");
    echo '<br>';
    echo "Hora atual: " . date(" H:i:s");
    echo '<br>';

    $nome = "Vitor";
    $sobrenome = "Silva";
    const PAIS = "Brasil"; // Constante não utiliza cifrão para declarar
    echo "Meu nome é $nome $sobrenome ! E Moro no " . PAIS; // para concatenar com constante não utiliza cifrão, mas utilizar o " . " para concatenar
    echo '<br> <br>';
    $v = 35.9;
    var_dump($v); // Retorna o tipo e o valor da variável
    echo '<br>';



    // Tipos primitivos do tipo composto
    $vetor = [2, 3.5, "Maria", false]; // Declarando um vetor
    var_dump($vetor);
    echo '<br>';

    class Pessoa
    {
        private string $nome;
    }

    $ob = new Pessoa; // Instanciando um objeto
    var_dump($ob);
    echo '<br> <br>';
    // Diferença de aspas simples e duplas
    $phpSimplequoted = "PHP\u{1f418}";
    $phpDoublequoted = 'PHP\u{1f418'; // Não há interpretação do conteúdo da string

    echo $phpSimplequoted;
    echo '<br>';
    echo $phpDoublequoted;
    echo '<br>';

    // Exemplos de concatenação
    $nome = "Rodrigo";
    $snome = "Nogueira";

    echo "$nome \"minotauro\" $snome";
    echo '<br>';
    echo $nome . "\"minotauro\"" . $snome;
    echo '<br>';
    echo "$nome " . '"Minotauro"' . " $snome";
    echo '<br>';


    ?>
</body>

</html>