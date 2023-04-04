<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Consulta de Banco de Dados</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- Estilização CSS -->
        <style>
            <?php
                include 'style.css';
            ?>
        </style>

        <!-- Consulta ao Banco de Dados -->
        <h1>Tabela Alunos do Banco de Dados</h1>
        <?php
            include 'connection.php';
            include 'table.php';
        ?>
    </body>
</html>