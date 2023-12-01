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
      $reais_dinamico = $_GET['reais_dinamico'];
      $dataInicial = date("m-d-Y", strtotime('-7 days'));
      $dataFinal = date("m-d-Y");
      $apiBacen = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $dataInicial . '\'&@dataFinalCotacao=\'' . $dataFinal . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
      // echo $apiBacen;
      $dadosApi = json_decode(file_get_contents($apiBacen), true);
      $cotacaoApi = number_format($dadosApi["value"][0]["cotacaoCompra"], 2);
      
      echo "R\$ " . number_format($reais_dinamico, 2, ",", ".") . " equivalem a U\$ $cotacaoApi";
      echo "<p class='botao'><a href='javascript:history.go(-1)'><<< Voltar</p>";
      ?>
    </div>
</body>
</html>