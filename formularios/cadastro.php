<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php
        // var_dump($_SESSION); // Combinação de 3 superglobais, $_GET, $_POST e $_COOKIE
        $nome = $_GET['nome'] ?? "Não informado"; // Operador de coalescência nula
        $sobrenome = $_GET['sobrenome'] ?? "Desconhecido"; // Se não existir, atribui o valor padrão
        echo "Meu nome é <strong>$nome </strong> $sobrenome.	É um prazer te conhecer!"
        ?>
        <!-- javaScript:history.go(-1) pra voltar uma pagina anterior -->
        <p><a href="javascript:history.go(-1)">Voltar para a pagina anterior</a></p>
    </main>
</body>

</html>