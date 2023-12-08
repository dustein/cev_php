<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Curso em Video - Desafio 2 Exercice 01</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Exercise 01</h1>
        <h2>Anatomia de uma Divisao</h2>
    </header>
    <main>
        <div class="main-exercicio">
            <div class="formulario">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="get">        
                    <p>
                        <label for="dividendo">Dividendo :</label>
                        <input type="number" name="dividendo" id="dividendo" min="0" required>
                    </p>
                    <p>
                        <label for="divisor">Divisor : </label>
                        <input type="number" name="divisor" id="divisor" min="1" required>
                    </p>
                    <input type="submit" value=" GO! ">
                </form>            
            </div>
            <div class="resultado">
                <h3>Resultado</h3>
                <?php 
                    // $dividendo = $_GET["dividendo"] ?? 0;
                    // $divisor = $_GET["divisor"] ?? 1;
                    $dividendo = $_GET["dividendo"];
                    $divisor = $_GET["divisor"];
                    $quociente = (int) ($dividendo / $divisor);
                    // $quociente = intdiv($dividendo, $divisor);
                    // $resto = $dividendo - ($quociente * $divisor);
                    $resto = $dividendo % $divisor;
                    echo "<ul>";
                    echo "<li>dividendo = $dividendo.</li>";
                    echo "<li>divisor = $divisor.</li>";
                    echo "<li>quociente = $quociente.</li>";
                    echo "<li>resto = $resto.</li></ul>";
                ?>
            </div>
            <button class="botao"><a href="../index.html">Voltar aos Desafios</a></button>
        </div>
    </main>
</body>
</html>