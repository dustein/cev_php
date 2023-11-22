<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sucessor e Antecessor</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Análise: sucessor e antecessor</h1>
  </header>
  <main>
    <section class="desafios">
    <?php 
    
    $number = $_GET["sucessor_antecessor"];
    $antes = $number - 1;
    $depois = $number + 1;
    print "Analise do número $number :</br>
    Antecessor = $antes.</br>
    Sucessor = $depois.</br>
    </br>
    <div class='botao'><p><a href='javascript:history.go(-1)'><<< Voltar aos desafios...</a></p></div>
    ";
    
    ?>
    </section>
  </main>
</body>
</html>