<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        include "IMC.php";
        include "header.php";
    ?>



    <section>
        <div class="info">
            <h1>Passos para calcular o IMC</h1>
            <p>informe o seu nome</p>
            <p>Digite o seu peso em kilogramas Ex.: 80</p>
            <p>Digite o sua altura em metros com ponto Ex.: 1.70</p>
            <a href="" class="button">Sobre IMC</a>
        </div>
        <div class="form">
            <form action="calc.php" method="post">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="idname">
                <label for="peso">Peso:</label>
                <input type="text" name="peso" id="idpeso">
                <label for="altura">Altura:</label>
                <input type="text" name="altura" id="idaltura">
                <label for="sexo">Sexo:</label>
                <select name="sexo" id="idsexo">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>
                <input class="submit" type="submit" value="Calcular IMC">

            </form>
        </div>
        
    </section>

    



</body>
</html>