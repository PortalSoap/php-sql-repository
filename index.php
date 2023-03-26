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
        <!--Integrantes do Grupo: Amanda Terezinha, Deivid, Gabrielly, Lucas-->
        <style>
            <?php
                include 'style.css';
            ?>
        </style>
        <h1>Tabela Alunos do Banco de Dados</h1>
        <?php
            $servidor = "localhost";
            $usuario = "id20491940_developer";
            $senha = "Xsgc|6Vz-&3Kwy3q";
            $nomedb = "id20491940_maindb";

            $conn = new mysqli($servidor, $usuario, $senha, $nomedb);

            if($conn->connect_error) {
                die("<h4>Conexão Falhou:</h4>".$conn->connect_error);
            }
            echo "<h4>Conectado ao DB</h4>"."<br>";

            $sql = "SELECT Nome, Sobrenome, Telefone FROM alunos";
            $result = $conn->query($sql);

            echo 
            "<table>
                <thead>
                    <th>Nome</th>
                    <th>Sobrenome</th>
                    <th>Telefone</th>
                </thead>
                <tbody>";
                    
               
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo
                    "<tr>"
                        ."<td>".$row["Nome"]."</td>"
                        ."<td>".$row["Sobrenome"]."</td>"
                        ."<td>".$row["Telefone"]."</td>"
                    ."</tr>";
                }
                echo
                "</tbody>
                </table>";
            } else {
                echo
                "<tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>";
                echo
                "</tbody>
                </table> </br>";
                echo "<h4>0 resultados encontrados. A tabela está vazia.</h4>";
            }
        ?>
    </body>
</html>