<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CeV PHP - Exec 05</title>
</head>
<body>
  <header><h1 style="color: blue; text-align: center; letter-spacing: 1.2rem;">Operações Aritméticas</h1></header>
  <section style="font-size: 1.3rem; line-height: 2em; background-color: lightgrey; padding: 2rem; text-align: center;">
    <?php
      $absoluto = abs(-2000);
      echo "$absoluto : torna um número absoluto, então mostra o valor do próprio algarismo, independentemente se for negativo por exemplo.</br>";
      $converte_base = base_convert(100, 10, 2);
      echo "$converte_base : converte a base numérica. base_convert(numero, base atual, base que se quer saber). No exemplo, 100 da base 10 converte pra base 2 fica $converte_base.</br>
      Funções ceil() que arredonda para cima, floor() para baixo, e round() que é o arredondamento aritimético que conhecemos, servem para arredondar um número.</br>";
      $divisao_inteira = intdiv(5, 2);
      echo "intdiv() serve para resultar na divisão inteira. O Operador para divisão é o '/', mas mostra o resultado em número real. A divisão inteira, resulta no que seria o 'resto'. Por ex 5 dividido por 2. Na divisão real 5/2 = 2.5 e na inteira é 2. intdiv(5,2) = $divisao_inteira</br>
      hypot() retorna o valor da hipotenusa</br>
      min() e max() dá o valor máximo ou mínimo entre os valores informados. Exemplo min(5, 2, 7, etc).</br>
      pi() retorna o valor pi. Mas já existe uma constante M_PI reservada que retorna o pi no PHP de qualquer forma.</br>
      sqrt() para calcular a raiz quadrada.</br>
      ";
    ?>
  </section>
</body>
</html>