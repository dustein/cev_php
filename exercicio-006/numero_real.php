<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Analisa Número Real</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Analisa Número Real</h1>  
  </header>
    <div class="desafios">
      <?php
        $number = $_GET["numero_real"];
        $inteiro = intdiv($number, 1);
        // poderia ser tb (int) $number
        $fracionario = number_format($number/1 - $inteiro, 3);
        print "Número $number. Análise:</br>
        <ul style='list-style: none;'>
          <li>Parte INTEIRA = $inteiro</li>
          <li>Parte FRACIONÁRIA = $fracionario</li>
        </ul>
        </br>
        
        <p class='botao'><a href='javascript:history.go(-1)'><<< Voltar aos desafios...</a></p>";
      ?>
    </div>
</body>
</html>