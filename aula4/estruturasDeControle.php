<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de controle</title>
</head>
<body>
    <?php
        // $i = 1;
        // while($i <=15)
        // {
        //     echo "$i, ";
        //     $i++;
        // };


        // $a = 15;
        // echo "<br><br><br><br>";

        // do {
        //     echo "$a, ";
        //     $a--;# code...
        // } while ($a >= 0);

        // for($b = 1; $b <= 15; $b++){
        //     echo "- {$b}";
        // }

       

        // $nomes = ["Ana", "Bruno", "Carlos", "Daniela", 
        // "Eduardo", "Fernanda", "Guilherme", "Helena", "Igor", "Julia"];          

            

        // for($i = 0; $i <= 9; $i++){
        //     $valor = $nomes[$i];
        //     echo "{$valor},  ";
        // }

        // echo "<br><br><br><br>";
        // foreach($nomes as $nome){
        //     echo "$nome, ";
        // }

        // echo "<br><br><br><br>";
        // foreach($nomes as $index => $valor){
        //     echo "O nome é {$valor} e a posição é ". ( $index + 1 ). "<br>";
        // }

        // echo "<br><br><br><br>";
        // foreach($nomes as $nome){
        //     echo "$nome, ";
        // }

        //realize a soma dos numeros de 1 a 10 utilizando as estruturas de repetição
        //Whilw, do-while, for e foreach 

        // $a = 1;
        // $soma = 0;
        // while ($a <= 10) {
        //    $soma += $a;
        //    $a++;  
        // }
        // echo " Soma com while {$soma}";
        // echo "<br><br><br>";

        // $soma2 = 0;
        // $b=1;
        // do {
        //     $soma2 += $b;
        //     $b++;
        // } while ($b <= 10);

        // echo " Soma com Do while {$soma2}";

        // echo "<br><br><br>";

        // $c;
        // $d;
        // $soma3 = 0;
        // $soma4 = 0;

        // for ($i=1; $i <= 10 ; $i++) { 
        //     $soma3 += $i;
        // }
        // echo " Soma com for  {$soma3}";

        // echo "<br><br><br>";
        // $soma = 0;
        // $numeros = range(1, 10);
        // foreach ($numeros as $numero) {
        //     $soma += $numero;
        // }
        // echo "Soma com foreach {$soma}";


        // Calcule a media de 10 numeros digitados pelo usuario, e informe
        // o tipo do dado referente a media.Utlize a estrutura de repetição de sua escolha
        
        
        // $numeros = [10,8,9,8,4,9,8,9,10,9];
        // $soma = 0;
        // $media = 0;
        // for($i = 0; $i <= 9; $i++){
        //     $soma+= $numeros[$i]; 
        // }

        // $media = $soma/10;
        
        // echo "A media dos numeros é:  {$media} <br>";
        // echo " E seu tipo é ". gettype($media);

        // Criar um array simples onde seja possivel visualizar
        //os valores e chaves com o comando foreach, o vetor deve possuir as seguintes cidades: são paulo,
        // Rio de Janeiro, Recife, manaus, goiania, florianopolis, Rio Branco.
        // As chaves devem ser os estados

        $cidades = [
            "São Paulo" => "São Paulo",
            "Rio de Janeiro" => "Rio de Janeiro",
            "Pernambuco" => "Recife",
            "Amazonas" => "Manaus",
            "Goiás" => "Goiânia",
            "Santa Catarina" => "Florianópolis",
            "Acre" => "Rio Branco",
            "Paraná" => "Curitiba"

        ];
       
        
        foreach ($cidades as $estados=> $cidade) {
            echo "A capotal de ". ($estados). ", é: {$cidade}<br>";
        }




    ?> 
</body>
</html>