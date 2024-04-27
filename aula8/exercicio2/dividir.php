<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        if(isset($_POST['palavra']) && isset($_POST['num'])){
            $palavra = $_POST['palavra'];
            $num = $_POST['num'];
            $tamanho = strlen($palavra);
            $divisao = $tamanho / $num;
            $resto = $tamanho % $num;
            $resultado = "";
            $inicio = 0;
            for($i = 0; $i < $num; $i++){
                $resultado .= substr($palavra, $inicio, $divisao);
                if($resto > 0){
                    $resultado .= substr($palavra, $inicio + $divisao, 1);
                    $resto--;
                }
                $resultado .= "<br>";
                $inicio += $divisao + 1;
            }
            echo $resultado;
        }
    ?>
</body>
</html>