<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sucessor e Antecessor</title>
</head>
<body>
  <header>
    <h1>Análise: sucessor e antecessor</h1>
  </header>
  <main>
    <?php 
    
    $number = $_GET["sucessor_antecessor"];
    $antes = $number - 1;
    $depois = $number + 1;
    print "Analise do número $number:</br>
    Antecessor: $antes.</br>
    Sucessor: $depois.
    ";
    
    ?>
  </main>
</body>
</html>