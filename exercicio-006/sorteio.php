<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado do Sorteio</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Resultado do Sorteio 0 a 100.</h1>  
  </header>
    <div class="desafios">
      <?php
      //função rand(min, max) - Linear Congretional Generator é uma versão de algorítimo bem antiga e lenta.
      // função mt_rand(min, max) - Mersenne Twisteer - mais moderno, 4 vz mais rápido.
      // random_int() gera número aleatório criptograficamente seguro. Apesar de mais moderno, por ser mais complexo, é mais lento que todos. Então o mais rápido pro caso do exercício é o mt_rand()
      $sorteio = mt_rand(0, 100);
      print "Número sorteado foi $sorteio.</br>
      </br>
      <p class='botao'><a href='javascript:history.go(-1)'><<< Voltar aos desafios...</a></p>";
      ?>
    </div>
</body>
</html>