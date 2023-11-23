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
      echo $reais_dinamico;
      $hoje = (new DateTime())->format('m-d-Y');
      $uri = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=\''.$hoje.'\'&$top=100&$format=json&$select=cotacaoCompra';
      $jsonData = json_decode(file_get_contents($uri));
      var_dump($jsonData);
      ?>
    </div>
</body>
</html>