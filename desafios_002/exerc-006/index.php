<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Precos</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
  <header><h1>Reajuste de Precos</h1></header>
    <main>
        <?php
            $preco = $_GET['preco'] ?? 0;
            $indice = $_GET['indice'] ?? 0;
        ?>        
        <div>
            <div class="formulario">
                <form action="" method="get">
                    <p>
                        <label for="preco">Preco do Produto: </label>
                        <input type="number" name="preco" id="preco" value="<?=$preco?>">
                    </p>
                    <p>
                        <label for="indice">Indice de Desconto (<strong><span id="porcentagem">?</span>%</strong>) : </label>
                        <input type="range" min="0" max="100" name="indice" id="indice" oninput="mudapercent()" value="<?=$indice?>">
                    </p>
                    <p>
                        <input type="submit" value="GO!">
                    </p>
                </form>
            </div>
            <div class="resultado">
                <?php
                $calculado = $preco - ($preco * $indice/100);
                echo "O valor de R\$$preco com reajuste de $indice% tem como resultado final R\$  $calculado.";
                ?>
            </div>
            <button class="botao"><a href="../index.html">Voltar aos Desafios</a></button>
        </div>
    </main>
    <footer>@DuStein</footer>
    <script>
        mudapercent()

        function mudapercent() {
            porcentagem.innerText = indice.value;
        }
    </script>
</body>
</html>