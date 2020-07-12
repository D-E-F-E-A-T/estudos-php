<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "O valor enviado foi $valor. <br/>";
        echo "A raiz de $valor é igual a " . number_format($rq, 4);
    ?>
    <br>
    <a href="01-exercicio.html">Voltar</a>
</body>
</html>