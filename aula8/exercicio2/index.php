<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .formulario{
            display: flex;
            flex-direction: column;
            width: 300px;
            margin: 0 auto;
        }
        .formulario label{
            margin-top: 10px;
        }
        .formulario input, .formulario textarea{
            margin-top: 5px;
            border-radius: 5px;
        }
        header{
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
      
        footer{
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <main>
        <header>
            Informe a palavra e o numero de letras em que ela deve ser dividida
        </header>
        <form  class="formulario" method="post">
            <label for="palavra">Palavra:</label>
            <input type="text" name="palavra" id="palavra">
            <label for="num">Numero de letras:</label>
            <input type="number" name="num" id="num">
            <input type="submit" value="Enviar">
        </form>
    </main>

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
    <footer>
        <p>Desenvolvido por: Henrique Onorato</p>
    </footer>
    
</body>
</html>