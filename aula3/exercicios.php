<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de exercicios</title>
</head>
<body>

<?php

echo "Exercicio 1";

echo "<br><br>";
    
    $nota1 = 100;
    $nota2 = 100;
    $nota3 = 100;
    $statusAluno = "";
    
    $media = ($nota1 + $nota2 + $nota3) / 3;
    
    if ($media < 4) {
        echo "Aluno reprovado";
    } elseif ($media >= 4 && $media < 6) {
        echo "Aluno aguarando prova substittiva";
    } elseif ($media >= 6 && $media < 10) {
        echo "Aluno aprovado";
    } elseif ($media == 10) {
        echo "Aluno aprovado sem dificuldades";
    }
    
    echo $media;
    echo "O tipo da variável média é " . gettype($media);

echo "<br><br><br>";


$statusAluno = match (true) {
    $media < 4.0 => "Aluno reprovado",
    $media >= 4.0 && $media < 6.0 => "Aluno aguardando prova substitutiva",
    $media >= 6.0 && $media < 10.0 => "Aluno aprovado",
    $media == 10.0 => "Aluno aprovado sem dificuldades",
    default => "Média não reconhecida",
};

echo "O status do aluno é: $statusAluno";
echo "O tipo da variável média é: " . gettype($media);

?>

<?php
echo "Exercicio 2";
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
echo "Exercicio 3";
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
echo "Exercicio 4";
echo "<br><br>";

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
echo "Exercicio 5";
echo "<br><br>";

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
    
</body>
</html>