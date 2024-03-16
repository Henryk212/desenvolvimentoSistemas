<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de controle</title>
    <!-- Desenvolva um código que receba a idade o peso de uma pessoa. Apresente ao usuario a idade, 
    peso e o grupo de risco que a pessoa pertence(Desconsidere a altura da pessoa)
    Apresentando o resultado na tela do navegador.

    Idade < 18 anos e peso < 50,risco medio;
    Idade < 18 anos e peso >= 50 e <= 90 risco NOrmal;
    Idade < 18 anos e peso > 90  e <= 120 risco ALTO;
    Idade < 18 anos e peso > 120 risco Extremamente alto;

    Idade >= 18 e <= 50 e peso < 60 risco medio;
    Idade >= 18 anos <= 50 e peso >= 60 e <= 100 risco NOrmal;
    Idade >= 18 anos <= 50 e peso > 100 e <= 140 risco alto;
    Idade >= 18 anos <= 50 e peso > 140 e <= 200 risco Extremamente alto; -->
</head>
<body>

<?php
$idade = 19;
$peso = 500;
$risco = "";

if ($idade < 18) {
    if ($peso < 50) {
        $risco = "médio";
    } elseif ($peso >= 50 && $peso <= 90) {
        $risco = "normal";
    } elseif ($peso > 90 && $peso <= 120) {
        $risco = "alto";
    } else {
        $risco = "extremamente alto";
    }
} elseif ($idade >= 18 && $idade <= 50) {
    if ($peso < 60) {
        $risco = "médio";
    } elseif ($peso >= 60 && $peso <= 100) {
        $risco = "normal";
    } elseif ($peso > 100 && $peso <= 140) {
        $risco = "alto";
    } else {
        $risco = "extremamente alto";
    }
}

echo "Idade: $idade<br>";
echo "Peso: $peso<br>";
echo "Risco: $risco<br>";
?>

<?php

echo "<br><br>";

    $lado1 = 10;
    $lado2 = 16;
    $lado3 = 7;

    if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
        if ($lado1 == $lado2 && $lado2 == $lado3) {
            echo "O triângulo é equilátero";
        } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            echo "O triângulo é isósceles";
        } else {
            echo "O triângulo é escaleno";
        }
    } else {
        echo "Não é um triângulo";
    }

?>

<?php

echo "<br><br>";

    $numero = 15;
    echo "<br> Verificando Numeros pares e impares<br>";

    if($numero % 2 == 0 ){
        echo "O numero $numero é par";
    }else{
        echo "O numero $numero é impar";
    }

?>
<?php

echo "<br><br>";

    echo "<br>Ano Eleitoral<br>";

    $anoNascimento = 2023;
    $anoAtual = date('Y');

    $anoAtualConvertido = (int) $anoAtual;

    $idade = $anoAtualConvertido - $anoNascimento;

    if(($idade) >= 18 ){
        echo "Você tem $idade Você pode votar !!";
    }else{
        echo "Você tem $idade Você Não pode votar !!";
    }

?>
<?php

echo "<br><br>";

    echo "<br> CALCULOS <br>";

$numero = 10;
$operacao = 'dobro';
$resultado = 0;

switch ($operacao) {
    case 'dobro':
        $resultado = $numero * 2;
        break;
    case 'cubo':
        $resultado = pow($numero, 3);
        break;
    case 'raiz':
        $resultado = sqrt($numero);
        break;
    default:
        echo "Operação não reconhecida";
        exit();
}

echo "O resultado da operação $operacao no número $numero é: $resultado";

echo "<br><br>";


$resultado = match ($operacao) {
    'dobro' => $numero * 2,
    'cubo' => pow($numero, 3),
    'raiz' => sqrt($numero),
    default => exit("Operação não reconhecida"),
};

echo "O resultado da operação $operacao no número $numero é: $resultado";
?>

<?php
echo "<br><br><br>";

echo "Idade itilizando o match";

echo "<br><br>";

    $idade = 25;
    $categoria = match (true) {
    $idade < 5 => "Nenhuma categoria",
    $idade >= 5 && $idade < 8 => "Infantil",
    $idade >= 8 && $idade < 12 => "Juvenil",
    $idade >= 12 && $idade < 17 => "Adolescente",
    $idade >= 17 && $idade < 40 => "Adulto",
    $idade >= 40 && $idade < 60 => "Senior",
    default => "Idade não reconhecida",
};

echo "A categoria para a idade $idade é: $categoria";

?>



</body>
</html>