<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title> Exercício 2 13/10/2020</title>
</head>

<body>
    <h1>Exercício 2</h1>

    <?php
    if ($_POST) {
        $mes = $_POST['mes'];

        switch ($mes) {
            case 1:
                echo "O Mês Escolhido foi Janeiro";
                break;
            case 2:
                echo "O Mês Escolhido foi Fevereiro ";
                break;
            case 3:
                echo "O Mês Escolhido foi Março ";
                break;
            case 4:
                echo "O Mês Escolhido foi Abril ";
                break;
            case 5:
                echo "O Mês Escolhido foi Maio ";
                break;
            case 6:
                echo "O Mês Escolhido foi Junho ";
                break;
            case 7:
                echo "O Mês Escolhido foi Julho ";
                break;
            case 8:
                echo "O Mês Escolhido foi Agosto ";
                break;
            case 9:
                echo "O Mês Escolhido foi Setembro ";
                break;
            case 10:
                echo "O Mês Escolhido foi Outubro ";
                break;
            case 11:
                echo "O Mês Escolhido foi Novembro ";
                break;
            case 12:
                echo "O Mês Escolhido foi Dezembro ";
                break;
            default:
                echo "O mês escolhido não existe!";
                break;
        }
    }
    ?>
    <br>
</body>
<a href="..\Exercicio2.html">Voltar</a>

</html>