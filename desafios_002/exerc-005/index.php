<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Idade no Futuro</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <header>
    <h1>Idade no Futuro</h1>
  </header>
  <main>
    <?php
    $ano_atual = date("Y");
    $ano_nascido = $_GET['nascido'] ?? $ano_atual;
    $ano_futuro = $_GET['futuro'] ?? $ano_atual;
    ?>
    <div>
      <div class="formulario">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
          <p>
            <p><label for="nascido">Em que ano você nasceu? </label></p>
            <p><input type="number" name="nascido" id="nascido" max="<?=$ano_atual?>"></p>
          </p>
          <p>
            <p><label for="futuro">Quer saber sua idade em que ano futuro? </label></p>
            <p><input type="number" name="futuro" id="futuro"></p>
          </p>
          <p><input class="botao" type="submit" value="GO!"></p>
        </form>
      </div>
      <div class="resultado">
        <?php 
          echo "Em $ano_futuro você vai fazer <strong>" . $ano_futuro-$ano_nascido . "</strong> anos."
        ?>
      </div>
    </div>
  </main>
  <fnascido>@DuStein</footer>
</body>
</html>