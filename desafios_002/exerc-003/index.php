<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  
  <title>Raízes de um Número</title>
</head>
<body>
  <header>
    <h1>Raízes</h1>
    <h2>Raiz Quadrada e Raiz Cúbica</h2>
  </header>
  <main>
    <div>
      <div class="formulario">
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
          <label for="num">Número para Cálculo: </label>
          <input type="number" name="num" id="num" value="<?=['num']?>">
          <input type="submit" value=" GO ! ">
        </form>
      </div>
      <div class="resultado">
        <p>
          <span id="raiz">&#8730;</span>  Raiz Quadrada: 
          <?php 
            $num = $_GET['num'];          
            echo "<strong>". sqrt($num) ."</strong>";
          ?>
        </p>
        <p>
          <span id="raiz">&#8730;</span>  Raiz Cúbica: 
          <?php 
            echo "<strong>". $num ** (1/3) ."</strong>";
          ?>
        </p>
    </div>
    <button class="botao"><a href="../index.html">Voltar aos Desafios</a></button>
  </main>
  <footer>
    @DuStein
  </footer>
</body>
</html>