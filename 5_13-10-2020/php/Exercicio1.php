<!doctype html>
<html>

<head>
   <meta charset="UTF-8">
   <title> Exercício 1 13/10/2020</title>
</head>

<body>
   <h1>Exercício 1</h1>

   <?php
   if ($_POST) {
      $n1 = $_POST['numero1'];
      $n2 = $_POST['numero2'];
      $op = $_POST['operacao'];

      switch ($op) {
         case '+':
            $result = $n1 + $n2;
            echo "O resultado da operação é: $result";
            break;
         case '-':
            $result = $n1 - $n2;
            echo "O resultado da operação é: $result";
            break;
         case '/':
            $result = $n1 / $n2;
            echo "O resultado da operação é: $result";
            break;
         case '*':
            $result = $n1 * $n2;
            echo "O resultado da operação é: $result";
            break;
      }
      
   }
   ?>
   <br>
   <a href="..\Exercicio1.html">Voltar</a>
</body>

</html>