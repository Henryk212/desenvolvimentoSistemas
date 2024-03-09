<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 2</title>
</head>

<body>
    <?php

    echo "Olá Mundo !! <br>";

    // $varPrint = "Olá Mundo !! ";

    // echo $varPrint;


   /* $var03 = 2;
    $var04 = 7;
    $var05 = "11.32";
*/
   /* echo $var03 + $var04;
    ?>

    <br><br>
    <?php

    echo pow($var03, $var04);
    ?>
    <br><br>
    <?php
    echo $var03 - $var04;
    ?>
    <br><br>

    <?php

    $a = 2;
    $b = 4;
    $c = 6;

    $m = (($c + $b) / 2) ** (--$c);
    $t = --$c ** ($b + $a);
    $x = --$c + $b;
    $y = $b++ + $a;
    $z = $a - $b--;

    echo "Valor de \$a: $a <br>";
    echo "Valor de \$b: $b <br>";
    echo "Valor de \$c: $c <br>";
    echo "Valor de \$m: $m <br>";
    echo "Valor de \$t: $t <br>";
    echo "Valor de \$x: $x <br>";
    echo "Valor de \$y: $y <br>";
    echo "Valor de \$z: $z <br>";

    $a = (float)$a;
    $b = (float)$b;
    $c = (string)$c;

    echo "Valor de \$a convertido para DOUBLE: $a <br>";
    echo "Valor de \$b convertido para DOUBLE: $b <br>";
    echo "Valor de \$c convertido para STRING: $c <br>";
*/
    ?>
    
    <?php
        $nome = "Henrique";
        $sobrenome = "Onorato";

        echo "O nome do usuário é: $nome $sobrenome <br>";

        $var06 = "Evolução";
        $var07 = $var06 . " no conhecimento de variaveis";
        echo $var07;    

        $var03 = 2;
        $var04 = 7;
        $var05 = "11.32";

        echo "Essa é a variável do tipo <br>" . gettype($var03) . "<br>";
        echo "Essa é a variável do tipo <br>" . gettype($var04) . "<br>";
        echo "Essa é a variável do tipo <br>" . gettype($var05) . "<br>";

        $varConversao = (int) $var05;
        echo "Essa é a variável do tipo <br>" . gettype($varConversao) . "<br>";

        $varTeste_01 = 555.56;
        $varTeste_2 = "teste";

        $varTeste_3 = ["Java", "PHP", "Python", "C#", "C++", "Ruby", "JavaScript", "Go"];

        $varTeste_4 = [
            "nome" => "Henrique",
            "sobrenome" => "Onorato",
            "idade" => 23,
            "altura" => 1.80,
            "solteiro" => true
        ];
        $varTeste_5 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

        var_dump($varTeste_01, $varTeste_2, $varTeste_3, $varTeste_4, $varTeste_5);

        
    ?>

</body>

</html>