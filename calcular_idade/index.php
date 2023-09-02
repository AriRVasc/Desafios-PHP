<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $atual = date("Y");
    $nasc = $_GET['nasc'] ?? '2000';
    $ano = $_GET['ano'] ?? $atual;
    ?>
    <main>
        <h1> Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method ="get">
            <label for="nasc"> Em que ano você nasceu? </label>
            <input type="number" name="nasc" id="nasc" min="1900" value="<?=$nasc?>">
            <label for="ano"> Em que ano você quer saber a sua idade? </label>
            <input type="number" name="ano" id="ano" min= 1900 value="<?=$ano?>">
            <input type="submit" value="Calcular Idade">
        </form>
    </main>
    <section>
        <?php 
            $idade = $ano - $nasc;
        ?>
        <h2> Resultado</h2>
        <p> Quem nasceu em <?=$nasc?> tem <?=$idade?> anos no ano de <?=$ano?>!</p>

    </section>
    
</body>
</html>