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
        <?php
            $dividendo = $_GET["dividendo"] ?? 0;
            $divisor = $_GET["divisor"] ?? 0;
            // $dividendo = 17;
            // $divisor = 2;
            // $quociente = (int) ($dividendo / $divisor);
            // $resto = $dividendo - ($quociente * $divisor);
            // echo "dividendo = $dividendo. divisor = $divisor. quociente = $quociente. resto = $resto.";
        ?>
        <div class="main-exercicio">
            <div class="formulario">
                <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">        
                    <p>
                        <label for="dividendo">Dividendo :</label>
                        <input type="number" name="dividendo" id="dividendo">
                    </p>
                    <p>
                        <label for="divisor">Divisor : </label>
                        <input type="number" name="divisor" id="divisor">
                    </p>
                    <input type="submit" value="GO!">
                </form>            
            </div>
            <div class="resultado">
                <h3>Resultado</h3>
                <?php 
                    $quociente = (int) ($dividendo / $divisor);
                    $resto = $dividendo - ($quociente * $divisor);
                    echo "dividendo = $dividendo. divisor = $divisor. quociente = $quociente. resto = $resto.";
                ?>
                <?="a divisao deu $resto"?>
            </div>
        </div>
        
    </main>
</body>
</html>