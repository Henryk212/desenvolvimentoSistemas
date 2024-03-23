<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>
<body>
    

<?php

$registros = [
    [
        "nomePessoa" => "João",
         "idade" => "41",
         "peso" => "78",
         "altura" => "1.77"
    ],
    [
        "nomePessoa" => "André",
         "idade" => "29",
         "peso" => "65",
         "altura" => "1.85"
    ],
    [
        "nomePessoa" => "Larissa",
         "idade" => "32",
         "peso" => "52",
         "altura" => "1.52"
    ],
    [
        "nomePessoa" => "Cinthia",
         "idade" => "18",
         "peso" => "62",
         "altura" => "1.68"
    ]
];

echo "<table border='1' style='border-color: red; border-collapse: collapse'>";
echo "<tr style='background-color: blue; color: white; width: 500px;'><th>Nome</th><th>Idade</th><th>Peso</th><th>Altura</th></tr>";

foreach ($registros as $registro) {
    echo "<tr>";
    echo "<td>" . $registro["nomePessoa"] . "</td>";
    echo "<td>" . $registro["idade"] . "</td>";
    echo "<td>" . $registro["peso"] . "</td>";
    echo "<td>" . $registro["altura"] . "</td>";
    echo "</tr>";
}

echo "</table>";

?>



</body>
</html>