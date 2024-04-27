<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Stings</title>
</head>
<body>
    <?php
        $nome = 'PHP';

        echo 'esta é a variavel ${nome}';
        echo '<br>';
        echo "esta é a variavel $nome";

        echo '<br>';



        $name = "Acelino";
        $sname = "freitas";

        echo "$name ' popo ' $sname";

        echo '<br>';
        echo '<br>';

        // sintax  HereDoc

        echo <<< teste
            Linguagem $name.
            <br>
            teste;
        // sintax  NowDoc

        echo <<< "teste"
            Linguagem $name.
            <br>
            teste;

        echo "teste";

        echo '<br>';
        echo '<br>';

        $array2 = array(
            "cliente01" => array (
                "nome" => "Acelino",
                "sobreNome" => "Freitas",
                "ddd" => "11",
                "telefone" => "999999999",
            ),
            
            "cliente02" => array (
                "nome" => "Acelino2",
                "sobreNome" => "Freitas2",
                "ddd" => "41",
                "telefone" => "888888888",
            ),
            
        );

        foreach ($array2 as $cliente ) {
            echo "O nome do cliente é: " . $cliente['nome'] . " " . $cliente['sobreNome'] . "<br>";
        }   
        foreach ($array2 as $cliente ) {
            foreach ($cliente as $key => $value) {
                echo "$key: $value <br>";
            }
        }   

        $numeros = array(1,2,3,4,5,6,7,8,9,10);
        $total = array_sum($numeros);

        echo "O total de elementos do array é: $total <br>";

        // o array_diff() faz a comparação de dois arrays e retorna os valores diferentes

        $array1 = array(1,2,3,4,5,6,7,8,9,10);
        $array2 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);

        $diferenca = array_diff($array2, $array1);

        print_r("Os valores diferentes são: $diferenca <br>");






    
    ?>
    
</body>
</html>