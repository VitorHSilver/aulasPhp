<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Super</title>
</head>

<body>
    <main>
        <!-- pre , organiza a estrutura dos var_dump() -->
        <pre>
        <?php
        setcookie("dia-da-semana", "TERÇA", time() + 3600); // estou configurando um cookie informando que estamos no dia da semana , por 1 hora
        session_start();
        $_SESSION["teste"] = "funcionou";
        //diferenças entre GET , POST e REQUEST
        echo "<h1> Superglobal GET</h1>";
        var_dump($_GET); // Somente pela URL
        echo "<h1> Superglobal POST</h1>";
        var_dump($_POST); //Pega dados pelos pacotes/cabeçalho
        echo "<h1> Superglobal REQUEST</h1>";
        var_dump($_REQUEST); // Pega dos dois por array
        echo "<h1> Superglobal COOKIE</h1>";
        var_dump($_COOKIE); // deixa variaveis no browser
        echo "<h1> Superglobal SESSION</h1>";
        var_dump($_SESSION); // mostra quem está logado
        echo "<h1> Superglobal ENV</h1>";
        var_dump($_ENV);
        echo "<h1> Superglobal SERVER</h1>";
        var_dump($_SERVER); // mostrar todos os dados de conexão até mesmo do browser
        echo "<h1> Superglobal GLOBALS</h1>";
        var_dump($GLOBALS); // mostra todos os dados anteriores
        ?>
        </pre>
    </main>
</body>

</html>