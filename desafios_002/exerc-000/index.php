<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 000</title>
  <link rel="stylesheet" href="../style.css">
</head>
  <body>
    <?php 
      $valor1 = $_GET['v1'] ?? 0;
      $valor2 = $_GET['v2'] ?? 0;
    ?>
    <header>
      <h1>Capturando Dados - Formulário Retroalimentado</h1>
    </header>
    <main>
      <div>
        <div class="formulario">
          <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <p>
              <label for="v1">Valor 1: </label>
              <input type="number" name="v1" id="v1">
            </p>
            <p>
              <label for="v2">Valor 2: </label>
              <input type="number" name="v2" id="v2">
            </p>
            <p><input type="submit" value="Somar -> GO!"></p>
          </form>
        </div>
        <div class="resultado">
          <h3>Resultado da Soma:</h3>
          <p>
            <?="A soma entre $valor1 e $valor2 é <strong>" . $valor1+$valor2 . "</strong>."?>
          </p>
        </div>
        <button class="botao"><a href="../index.html">Voltar aos Desafios</a></button>
      </div>
    </main>
    <footer>@DuStein - <a href="https://www.dustein.com.br">dustein.com.br</a></footer>
  </body>
</html>