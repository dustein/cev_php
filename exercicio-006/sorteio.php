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
      $sorteio = random_int(0, 100);
      print "Número sorteado foi $sorteio.</br>
      </br>
      <p class='botao'><a href='javascript:history.go(-1)'><<< Voltar aos desafios...</a></p>";
      ?>
    </div>
</body>
</html>