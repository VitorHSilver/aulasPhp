<!DOCTYPE html>
<html lang="pt-br">

<head>
     <meta charset="UTF-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="style.css">
     <title>Números Aleatorios</title>
</head>

<body>
     <main>
          <?php
          $min = 0;
          $max = 100;
          $num = mt_rand($min, $max); //mt_rand(min e max); mt_rand é mais rapido e utilizado

          print nl2br("De número minimo: $min a número max:  $max \n" .
               "Seu numero é: $num "); // nl2br pra reconhecer caracter especial e quebrar linha
          ?>
          <!-- Fiz um onclick no botão, indo em documento,location e acionando a função regarregar da pagina -->
          <button onclick="javascipt:document.location.reload()">Gerar Outro Número</button>
          </section>
     </main>
</body>

</html>