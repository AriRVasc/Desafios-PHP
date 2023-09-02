<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $valor = $_REQUEST['valor'] ?? '0';
    $reaj = $_REQUEST['reaj'] ?? '0';
    ?>
    <main>
    <h1>Reajustador de Precos</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="valor">Qual o valor para ser reajustado? </label>
        <input type="number" name="valor" id="valor" min="0.10" step="0.01" value="<?=$valor?>">
        <label for="reaj">Qual a porcentagem do reajuste? (<strong><span id="p">?</span>%</strong>)
        </label>
        <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()"  value="<?=$reaj?>">
       <input type="submit" value="Calcular">
    </form>
    </main>
    <?php 
        $acrescimo = ($valor*$reaj)/100;
        $valFinal = $valor + $acrescimo;
        ?>
    <section>
        <h2>Resultado do Reajuste</h2>
        
        <p> O produto esta custando R$<?=$valor?>, mas terá um acréscimo de <?=$reaj?>% o que corresponde a R$<?=$acrescimo?> ficando por <strong>R$<?=$valFinal?></strong></p>
    </section>
    <script>
        //Declarações automáticas
        mudaValor();
        function mudaValor(){
            p.innerText = reaj.value;
        }
    </script>
</body>
</html>