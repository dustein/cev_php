<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <title>Conversos para SM</title>
</head>
<body>
  <header>
      <h1>Exercise 02</h1>
      <h2>Conversor para SM</h2>
  </header>
  <main>
    <div>
      <div class="formulario">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
          <label for="informe">Informe seu Salário: </label>
          <input type="number" name="informe" id="informe" step="0.01">
          <input type="submit" value=" GO !">
        </form>
      </div>
      <div class="resultado">
        <?php 
          $informe = $_GET['informe'] ?? 0;
          // print "O salário de $informe equivale a " . intdiv($informe, 1320) . " salário(s) mínimo(s), e mais R\$ " . $informe - (intdiv($informe, 1320)*1320) . "."
          $smInteiro = intdiv($informe, 1320);
          $smResto = $informe % 1320;
          print "O salário de $informe equivale a <strong> R\$ $smInteiro </strong> salário(s) mínimo(s), e mais <strong>R\$ $smResto</strong>."
        ?>
      </div>
      <button class="botao"><a href="../index.html">Voltar aos Desafios</a></button>
    </div>
  </main>
  <footer>
    @DuStein
  </footer>
</body>
</html>