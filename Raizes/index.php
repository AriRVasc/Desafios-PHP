<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $raiz = $_GET['num'] ?? 0;
    ?>
    <main>
        <h1> Informe um número: </h1>
        <form action=" <?=$_SERVER['PHP_SELF']?>" method="get">
            <label for = "num">Número</label>
            <input type="number" name="num" id="numero" value="<?=$raiz?>"
            step="0.01">
            <input type="submit" value="Calcular Raízes">
    </form>
    </main>
    <section>
        <h2> Resultado Final</h2>
        <?php 
        $raiz2 =  sqrt($raiz);
        $raiz3 =pow($raiz,1.0/3.0);  // isso equivale a variavel raiz eleveada a 1/3 que e a mesma coisa que raiz cubica da variavel raiz
        echo "<p>A raiz quadrada do número $raiz é: ".number_format($raiz2, 2, ",", ".");
        echo "<p>A raiz cúbica do número $raiz é:".number_format($raiz3, 2, ",", ".");
        

        
        ?>

    </section>
</body>
</html>