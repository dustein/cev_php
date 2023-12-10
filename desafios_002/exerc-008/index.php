<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caixa Eletrônico</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <header>
    <h1>Caixa Eletrônico</h1>
    <h2>Exercício 008</h2>
  </header>
  <main>
    <div>
      <?php 
      $valor = $_REQUEST['valor'] ?? 0;
      ?>
      <div class="formulario">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
          <p>
            <label for="valor">Valor para Saque: </label>
            <input type="number" name="valor" id="valor" min=5 step="5" value="<?=$valor?>">
          </p>
          <p>Cédulas disponíveis R$5, R$10, R$50 e R$100.</p>
          <p><input type="submit" value="GO!" class="botao"></p>
        </form>
      </div>
      <div class="resultado">
        <h3>Cédulas entregues:</h3>
        <?php
          $cem = (int) ($valor / 100);
          $valor = $valor - $cem * 100;
          $cinquenta = (int) ($valor / 50);
          $valor = $valor - $cinquenta * 50;
          $dez = (int) ($valor / 10);
          $valor = $valor - $dez * 10;
          $cinco = (int) ($valor / 5);

          echo "<ul>";
          if($cem) {
            echo "<li>$cem cédula(s) de cem.</li>";
          }
          if($cinquenta) {
            echo "<li>$cinquenta cédula(s) de cinquenta.</li>";
          }
          if($dez) {
            echo "<li>$dez cédula(s) de dez.</li>";
          }
          if($cinco) {
            echo "<li>$cinco cédula(s) de cinco.</li>";
          }
          echo "</ul>"
        ?>
      </div>
      <button class="botao"><a href="../index.html">Voltar aos Desafios</a></button>
    </div>
  </main>
  <footer>@DuStein</footer>
</body>
</html>