<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversor Real para Dólar</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Conversão Real Dólar</h1>  
  </header>
    <div class="desafios">
      <?php
        $number = $_GET["reais"];
        $dolares = $number * 4.98;
        $dolar_decimal = number_format($dolares, 2);
        print "R$ $number equivale a U$ $dolar_decimal.</br>
        </br>
        
        <p class='botao'><a href='javascript:history.go(-1)'><<< Voltar aos desafios...</a></p>";
      ?>
    </div>
</body>
</html>