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
      $number = $_GET["sucessor_antecessor"] ?? 0; //se o number nao vier, atribuir valor 0
      // $antes = $number - 1;
      // $depois = $number + 1;
      // print "Analise do número $number :</br>
      // Antecessor = $antes.</br>
      // Sucessor = $depois.</br>
      // </br>
      // <div class='botao'><p><a href='javascript:history.go(-1)'><<< Voltar aos desafios...</a></p></div>
      // ";
      print "Analise do número $number :</br>
      Antecessor = " . ($number - 1) . ".</br>
      Sucessor = " . ($number + 1) . "</br>
      </br>
      <div class='botao'><p><a href='javascript:history.go(-1)'>&#x2B05 Voltar aos desafios...</a></p></div>
      ";
    ?>
    </section>
  </main>
</body>
</html>