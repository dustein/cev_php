<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Média Artitimética e Ponderada</title>
</head>
<body>
  <header>
    <h1>Médias Aritiméticas</h1>
    <h2>Média Artitimética Simples e Ponderada</h2>
  </header>
  <main>
    <div>
      <div class="formulario">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
          <p>
            <label for="num1">Número 1 : </label>
            <input type="number" name="num1" id="num1" value="<?='num1'?>">
          </p>
          <p>
            <label for="peso1">Peso do Número 1 : </label>
            <input type="number" name="peso1" id="peso1" value="<?='peso1'?>">
          </p>
          <p>
            <label for="num2">Número 2 : </label>
            <input type="number" name="num2" id="num2" value="<?='num2'?>">
          </p>
          <p>
            <label for="num2">Peso do Número 2 : </label>
            <input type="number" name="peso2" id="peso2" value="<?='peso2'?>">
          </p>
          <p><input class="botao" type="submit" value=" GO ! "></p>
      </form>
      </div>
      <div class="resultado">
        <?php
          $num1 = $_GET['num1'] ?? 1;
          $num2 = $_GET['num2'] ?? 1;
          $peso1 = $_GET['peso1'] ?? 1;
          $peso2 = $_GET['peso2'] ?? 1;
          $ma = number_format(($num1+$num2)/2, 2, ",", ".");
          $mp = number_format(($num1*$peso1 + $num2*$peso2) / ($peso1*$peso2), 2, ",", ".");
          echo "<ul><li>A média aritimética é $ma.</li>";
          echo "<li>A média ponderada é $mp.</li></ul>";
        ?>
      </div>
      <button class="botao"><a href="../index.html">Voltar aos Desafios</a></button>
  </main>
  <footer>
    @DuStein
  </footer>
</body>
</html>