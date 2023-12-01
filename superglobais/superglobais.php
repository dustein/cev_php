<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variáveis SuperGlobais</title>
</head>
<body>
  <main>
    <pre>
      <?php

      setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

      session_start();
      $_SESSION["testeSession"] = "FUNCIONANDO...";

      echo "<h1>Superglobais</h1>";

      echo '<h2>Superglobal $_GET</h2>';
      // na url: http://localhost/projetos/superglobais/superglobais.php?name=Eduardo&idade=47 
      var_dump($_GET);
      
      echo '<h2>Superglobal &_POST</h2>';
      var_dump($_POST);

      echo '<h2>Superglobal $_REQUEST</h2>';
      var_dump($_REQUEST);

      echo '<h2>Superglobal $_COOKIE</h2>';
      var_dump($_COOKIE);

      echo '<h2>Superglobal $_SESSION</h2>';
      var_dump($_SESSION);

      echo '<h2>Superglobal $_ENV</h2>';
      var_dump($_ENV);
      // foreach (getenv() as $chave => $valor) {
      //   echo "<br> $chave -> $valor";
      // }
      
      echo '<h2>Superglobal $_SERVER</h2>';
      var_dump($_SERVER);

      echo '<h2>Superglobal $GLOBALS</h2>';
      var_dump($GLOBALS);
      ?>


    </pre>
  </main>
</body>
</html>