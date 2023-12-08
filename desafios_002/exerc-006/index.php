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
        <div>
            <div class="formulario">
                <form action="" method="get">
                    <p>
                        <label for="preco">Preco do Produto: </label>
                        <input type="number" name="preco" id="preco">
                    </p>
                    <p>
                        <label for="reajuste">Indice de Reajuste: </label>
                        <input type="number" name="reajuste" id="reajuste">
                    </p>
                    <p>
                        <input type="submit" value=" GO !">
                    </p>
                </form>
            </div>
            <div class="resultado">
                <p>O valor de R$ X com reajuste aplicado de X % passa a ser de R$ XZ.</p>
            </div>
            <button class="botao"><a href="../index.html">Voltar aos Desafios</a></button>
        </div>
    </main>
    <footer>@DuStein</footer>
</body>
</html>