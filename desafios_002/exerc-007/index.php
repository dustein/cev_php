<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Second's Converter</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <header><h1>Second's Converter</h1></header>
  <main>
    <?php 
      $segundos = $_REQUEST['segundos'];
      
    ?>
    <div>
      <div class="formulario">
        <form action="<?=$_REQUEST['PHP_SELF']?>" method="get">
          <p>
            <label for="segundos"> Segundos a converter: </label>
            <input type="number" name="segundos" id="segundos" min="0">
          </p>
          <p><input type="submit" value="GO!"></p>
        </form>
      </div>
      <div class="resultado">
        <?php 
        $semana = (int) ($segundos / 604800);
        $dia = (int) (($segundos % 604800) / 86400);
        $hora = (int) (($segundos % 86400) / 3600);
        $minuto = (int) (($segundos % 3600) / 60);
        $final_segundos = $segundos % 60;
        echo "Resultado da conversao dos segundos: <ul>";
        if($semana > 0) {
          echo "<li>$semana semana(s)</li>";
        } 
        if($dia > 0) {
          echo "<li>$dia dias(s)</li>";
        }
        if($hora > 0) {
          echo "<li>$hora horas(s)</li>";
        }
        if ($minuto > 0) {
          echo "<li>$minuto minuto(s)</li>";
        }
        if ($final_segundos > 0) {
          echo "<li>$final_segundos segundo(s)</li>";
        }
        echo "</ul>";
        // echo "$semana semanas $dia dias $hora horas $minuto minutos e $final_segundos segundos."
        ?>
      </div>
    </div>
  </main>
  <footer>@DuStein</footer>
</body>
</html>