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
        $reais = $_GET["reais"];
        $cotacao = 4.98;
        $dolar = $reais / $cotacao;
        // $dolares = $reais * 4.98;
        // $dolar_decimal = number_format($dolares, 2);
        // print "R\$ $reais equivale a U\$ $dolar_decimal.</br>
        // </br>
        
        // <p class='botao'><a href='javascript:history.go(-1)'><<< Voltar aos desafios...</a></p>";
        // echo "O valor de R\$" . number_format($reais, 2, ",", ".") . " equivale a U\$" . number_format($dolar, 2) . ".</br>";
        
        //versao fom formatação de internacionalização das moedas e língua
        //obs nao vai fucionar no servidor local porque o php.ini vem desabilitado para essa biblioteca intl
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "O valor de " . numfmt_format($padrao, $reais, "BRL") . " equivale a " . numfmt_format($padrao, $dolar, "USD") . ".</br>";

        echo "</br><p class='botao'><a href='javascript:history.go(-1)'><<< Voltar aos Desafios</a></p>";

      ?>
    </div>
</body>
</html>