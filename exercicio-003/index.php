<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso em Video PHP Exercicio 003</title>
</head>
<body>
  <h1>Exercício 03</h1>
  <section class="meuTeste">
    <?php  
      $nome = "Eduardo";
      $cidade = "Rio de Janeiro";
      const IDIOMA = "Inglês";
      $data = date('Y');

      echo <<< MEUTEXTO
        Tudo bem. Eu sou $nome e moro no $cidade.
          Este é um exercício de teste.
            Meu idioma principal tem que ser o IDIOMA.</br>
              Estamos em $data.
              Este é um teste de HEREDOC, que é praticamente inútil...
      MEUTEXTO;

      echo "</br>Eu quis dizer IDIOMA";
      echo '</br>Ah errei, é ' . IDIOMA . "... utilizando uma variável CONSTANTE. \u{1F37B}"    
    ?>
  </section>
</body>
</html>