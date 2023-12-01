<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 000</title>
</head>
<body>
  <?php 
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;
  ?>
  <main>
    <h1>Capturando Dados - Formulário Retroalimentado</h1>
    <div class="formulario">
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Valor 1: </label>
        <input type="number" name="v1" id="v1">
        <label for="v2">Valor 2: </label>
        <input type="number" name="v2" id="v2">
        <input type="submit" value="Somar -> GO!">
      </form>
    </div>
    <div class="resultado">
      <h3>Resultado da Soma:</h3>
      <p>
        <?="A soma entre $valor1 e $valor2 é <strong>" . $valor1+$valor2 . "</strong>."?>
      </p>
    </div>
  </main>
</body>
</html>