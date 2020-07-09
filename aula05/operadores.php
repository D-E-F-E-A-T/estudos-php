<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <title>Operacoes Aritmeticas</title>
</head>
<body>
<div>
    <?php
      $n1 = $_GET["a"]; /* Para pegar o parametro de a, coloque-o na url do site. */
      $n2 = $_GET["b"];/* Para pegar o parametro de b, coloque-o na url do site. */
      /* Exemplo da url que ficaria: http://localhost/estudos-php/aula05/operadores.php?a=3&b=2 */
      echo "<h2>Valores recebidos: $n1 e $n2</h2>";
      $m = ($n1 + $n2) / 2;
      echo "A soma vale ". ($n1+$n2);
      echo "<br/>A subtracao vale ". ($n1-$n2);
      echo "<br/>A multiplicacao vale ". ($n1*$n2);
      echo "<br/>A divisao vale ". ($n1/$n2);
      echo "<br/>O modulo vale ". ($n1%$n2);
      echo "<br/>A media vale $m";
    ?>
</div>
</body>
</html>
 