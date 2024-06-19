<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include "header.php"; ?>

    <div class="result">
    <?php
        include "IMC.php";
    

        $user = $_POST["name"];

        $user = new Pessoa();

        $nome = $_POST["name"];
        $user->setNome($nome);
        
        $peso = $_POST["peso"];
        $user->setPeso($peso);
        
        $altura = $_POST["altura"];
        $user->setAltura($altura);
        
        $sexo = $_POST["sexo"];
        $user->setSexo($sexo);

        echo $user->calcularIMC();

      


    ?>

    <p><a class="button" href="index.php">Voltar a página anterior</a></p>


</div>
    
    
    
</body>
</html>