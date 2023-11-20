<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado do Sorteio</title>
</head>
<body>
  <main>
    <h1>Resultado do Sorteio 0 a 100.</h1>
    <?php 
    $sorteio = random_int(0, 100);
    print "Número sorteado foi $sorteio.";
    ?>
  </main>
</body>
</html>