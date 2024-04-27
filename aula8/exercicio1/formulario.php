<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
        table {
            border-collapse: collapse;
            border: 2px solid rgb(140 140 140);
            font-family: sans-serif;
            font-size: 0.8rem;
            letter-spacing: 1px;
}
        th, td{
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th{
            background-color: #333;
            color: white;
        }
    </style>
</head>

<body>
    <main>
    <?php
        if(isset($_POST['enviarform'])){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $assunto = $_POST['assunto'];
            $vlr_custo = $_POST['vlr_custo'];
            $vlr_venda = $_POST['vlr_venda'];
            $conteudo = $_POST['conteudo'];

           

            if(empty($nome) || empty($email) || empty($assunto) || empty($vlr_custo) || empty($vlr_venda) || empty($conteudo)){
                echo "<h2 style='color: red'>Preencha todos os campos</h2>";
                return;
            }

            if($vlr_venda < $vlr_custo){
                echo "<h2 style='color: red'>Valor de venda menor que o valor de custo</h2>";
                return;
            }
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<h2 style='color: red'>E-mail inválido</h2>";
                return;
            }
            if(strlen($conteudo) < 20){
                echo "<h2 style='color: red'>Conteúdo muito curto</h2>";
                return;
            }
            if(strlen($conteudo) > 100){
                echo "<h2 style='color: red'>Conteúdo muito longo</h2>";
                return;
            }
            if(($vlr_venda > $vlr_custo) && filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "<h2 style='color: green'>Formulário enviado com sucesso</h2>";
            }


            echo "
            <table>
                <thead>    
                    <tr>
                        <th>Nome:</th>
                        <th>E-mail:</th>
                        <th>Assunto:</th>
                        <th>Valor Custo:</th>
                        <th>Valor Venda:</th>
                        <th>Conteudo:</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td>$nome</td>
                            <td>$email</td>
                            <td>$assunto</td>
                            <td>$vlr_custo</td>
                            <td>$vlr_venda</td>
                            <td>$conteudo</td>
                        </tr>
                </thead>    
            </table>    

            ";
            
        }

    ?>


        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>

    </main>

    
</body>
</html>